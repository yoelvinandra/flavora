// @ts-check
const { test, expect } = require('@playwright/test');

test.describe('EXP section heading color', () => {

  test('"perjuanganmu" should be black, not orange/terracotta', async ({ page }) => {
    await page.goto('http://localhost:3001/miriva-index.html', { waitUntil: 'networkidle' });
    await page.waitForTimeout(3000);

    const title = page.locator('.exp-title');
    await expect(title).toBeVisible();

    const text = await title.textContent();
    expect(text).toContain('perjuanganmu');

    // Check main title element
    await checkIsBlack(page, '.exp-title');

    // Check ALL child .line spans created by SplitText
    const lines = page.locator('.exp-title .line');
    const count = await lines.count();
    expect(count).toBeGreaterThan(0);

    for (let i = 0; i < count; i++) {
      await checkIsBlack(page, `.exp-title .line:nth-of-type(${i + 1})`);
    }
  });

  test('no gradient applied via backgroundImage on any descendant of .exp-title', async ({ page }) => {
    await page.goto('http://localhost:3001/miriva-index.html', { waitUntil: 'networkidle' });
    await page.waitForTimeout(3000);

    const hasGradient = await page.evaluate(() => {
      const el = document.querySelector('.exp-title');
      if (!el) return 'no element';
      const all = el.querySelectorAll('*');
      const els = [el, ...Array.from(all)];
      for (const child of els) {
        const cs = window.getComputedStyle(child);
        if (cs.backgroundImage && cs.backgroundImage.includes('gradient')) {
          return { element: child.className || child.tagName, backgroundImage: cs.backgroundImage };
        }
      }
      return null;
    });

    expect(hasGradient).toBeNull();
  });
});

async function checkIsBlack(page, selector) {
  const computed = await page.evaluate((sel) => {
    const el = document.querySelector(sel);
    if (!el) return null;
    const cs = window.getComputedStyle(el);
    return {
      color: cs.color,
      backgroundImage: cs.backgroundImage,
      webkitTextFillColor: cs.webkitTextFillColor,
    };
  }, selector);

  console.log(`${selector}:`, JSON.stringify(computed, null, 2));

  const colorMatch = computed.color.match(/rgb\(\s*(\d+)\s*,\s*(\d+)\s*,\s*(\d+)\s*\)/);
  expect(colorMatch).not.toBeNull();
  const r = parseInt(colorMatch[1], 10);
  const g = parseInt(colorMatch[2], 10);
  const b = parseInt(colorMatch[3], 10);
  expect(r < 50 && g < 50 && b < 50).toBe(true);
}
