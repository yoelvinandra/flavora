## Qwen Added Memories
- GSAP SplitText gradient fix for miriva-index.html: Uses MutationObserver + fixExpTitle() function + inline styles + CSS overrides to prevent GSAP from applying gradient/transparent text-fill to .exp-title children. The key is removing .exp-title-hover class and continuously fighting GSAP reapplication via observer. See FIX_GSAP_SPLITTEXT_GRADIENT.md for full details.
