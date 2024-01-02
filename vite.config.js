import liveReload from 'vite-plugin-live-reload'

export default {
  root: './',
  plugins: [
    liveReload([
      '**/*.php',
    ]),
  ],
  clearScreen: false,
  appType: 'custom',
  server: {
    strictPort: true,
  },
  build: {
    emptyOutDir: false,
    copyPublicDir: false,
    outDir: './',
    assetsDir: 'assets/',
    rollupOptions: {
      input: [
        'js/theme.js',
        'less/theme.less',
      ],
      output: {
        dir: "assets/",
        entryFileNames: "[name].min.js",
        assetFileNames: "[name].min.css",
      },
    },
  },
}