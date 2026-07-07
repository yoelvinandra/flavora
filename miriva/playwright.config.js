// @ts-check
const { defineConfig } = require('@playwright/test');

module.exports = defineConfig({
  testDir: './test',
  timeout: 30000,
  retries: 0,
  use: {
    baseURL: 'http://localhost:3001',
    browserName: 'chromium',
    headless: true,
  },
});
