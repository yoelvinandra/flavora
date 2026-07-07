# FIX: GSAP SplitText Gradient/Color Override on Text Elements

## Problem

The "perjuanganmu" word in the EXP section heading appeared as **invisible white-on-white** or **orange/terracotta gradient**, even though CSS rules set it to black. GSAP SplitText was splitting it into 3 lines instead of 2.

## Root Cause

The site uses the **GSAP SplitText plugin** (bundled in `assets/js/Layout.astro_astro_type_script_index_0_lang.0RpXHpCU.js`) which:

1. Splits heading text into `.line` → `.word` child `<div>` elements
2. Applies a special class `.exp-title-hover` to specific words
3. Animates those words with:
   - `-webkit-text-fill-color: rgba(0,0,0,0)` (transparent)
   - `background-image: linear-gradient(45deg, ...)` (gradient background)
   - `opacity: 0` on the `.line` parent
4. **Continuously reapplies these styles** via GSAP animation frames
5. Splits text based on container width, creating extra unwanted lines

This means:
- CSS `!important` rules alone are **not enough** — JS inline styles have higher specificity
- The gradient animation runs asynchronously, so timed fixes can be overridden
- The `.exp-title-hover` class is the trigger for the gradient effect

## Solution (applied to `miriva-index.html`)

### 1. Add ID to the target element

```html
<h2 class="exp-title" id="exp-title-main" style="color:#000000 !important;-webkit-text-fill-color:#000000 !important;background:none !important;-webkit-background-clip:unset !important;background-clip:unset !important;">
  Kami memahami perjuanganmu
</h2>
```

### 2. Add comprehensive CSS overrides

```css
.exp-title,
.exp-title *,
.exp-title .line,
.exp-title .line *,
.exp-title span,
.exp-title .split,
.exp-title .word,
.exp-title .exp-title-hover,
#exp-title-main,
#exp-title-main * {
  color: #000000 !important;
  -webkit-text-fill-color: #000000 !important;
  background: none !important;
  background-image: none !important;
  -webkit-background-clip: unset !important;
  background-clip: unset !important;
  opacity: 1 !important;
  visibility: visible !important;
  filter: none !important;
}
```

### 3. Add JavaScript fix function with MutationObserver

```html
<script>
  var _fixingExpTitle = false;
  function fixExpTitle() {
    if (_fixingExpTitle) return;
    _fixingExpTitle = true;
    var t = document.getElementById('exp-title-main');
    if (t) {
      t.style.webkitTextFillColor = '#000000';
      t.style.color = '#000000';
      t.style.background = 'none';
      t.style.webkitBackgroundClip = 'unset';
      t.style.backgroundClip = 'unset';
      var children = t.querySelectorAll('*');
      for (var i = 0; i < children.length; i++) {
        var el = children[i];
        el.style.webkitTextFillColor = '#000000';
        el.style.color = '#000000';
        el.style.background = 'none';
        el.style.backgroundImage = 'none';
        el.style.webkitBackgroundClip = 'unset';
        el.style.backgroundClip = 'unset';
        el.style.opacity = '1';
        el.style.visibility = 'visible';
        el.style.filter = 'none';
        // Remove the class that triggers the gradient animation
        if (el.classList && el.classList.contains('exp-title-hover')) {
          el.classList.remove('exp-title-hover');
        }
      }
    }
    setTimeout(function() { _fixingExpTitle = false; }, 5);
  }
  // Initial timed fixes to beat async JS
  setTimeout(fixExpTitle, 200);
  setTimeout(fixExpTitle, 500);
  setTimeout(fixExpTitle, 1500);
  setTimeout(fixExpTitle, 4000);
  // MutationObserver to continuously fight GSAP reapplication
  setTimeout(function() {
    var t = document.getElementById('exp-title-main');
    if (!t) return;
    var observer = new MutationObserver(fixExpTitle);
    observer.observe(t, { attributes: true, attributeFilter: ['style', 'class'], subtree: true });
  }, 100);
</script>
```

## Key Points for Future Fixes

| What | Why |
|------|-----|
| **MutationObserver** | GSAP keeps reapplying styles every animation frame. A one-time fix gets overridden. |
| **Debounce flag (`_fixingExpTitle`)** | Prevents infinite loop: MutationObserver fires → fix function modifies styles → triggers observer again. |
| **Remove `.exp-title-hover` class** | This class is the trigger for the gradient animation in the GSAP code. |
| **Multiple `setTimeout` intervals** | Catches the fix at different stages of JS loading (200ms, 500ms, 1500ms, 4000ms). |
| **Inline styles + CSS + JS** | Three layers of defense: CSS for initial render, inline for specificity, JS for runtime. |
| **`querySelectorAll('*')`** | GSAP creates nested `div.line > div.word` structure. Must target ALL descendants. |
| **`opacity: 1` + `visibility: visible`** | The `.line` div gets `opacity: 0` by GSAP, hiding all text inside it. |
| **`_mergedLines` flag** | Prevents JS line merge from running repeatedly (causes text duplication). |
| **Google Fonts import** | Replace existing serif fonts with Noto Serif Condensed in `<link>` tag. |
| **Body text preserved** | Keep Montserrat (sans-serif) for body/paragraphs — only override serif headings. |

## Files Involved

| File | Role |
|------|------|
| `miriva-index.html` | Where the fix is applied |
| `assets/js/Layout.astro_astro_type_script_index_0_lang.0RpXHpCU.js` | Bundled GSAP + SplitText that applies the gradient |
| `assets/css/index.CO_elZJh.css` | Framework CSS (no gradient rules here, only typography) |

## Verification

Run the Playwright test to verify:

```bash
npx playwright test test/exp-title-color.spec.js
```

The test checks:
1. Main `.exp-title` element color is black
2. All `.line` children color is black
3. No `background-image: gradient` on any descendant
4. `webkitTextFillColor` is `rgb(0, 0, 0)` everywhere

## Reference: Working Example

`index3.html` uses the same pattern with a `fixTitle()` function running at 300ms, 800ms, 2000ms — this was the inspiration for the solution.
