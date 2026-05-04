import { defineConfig } from "vite";
import path from "path";
import liveReload from "vite-plugin-live-reload";

export default defineConfig({
  root: ".",

  plugins: [liveReload(["**/*.php"])],

  server: {
    host: "localhost",
    port: 5173,
    strictPort: true,
    cors: true,
  },

  build: {
    outDir: "dist",
    emptyOutDir: true,
    manifest: true,
    rollupOptions: {
      input: {
        main: path.resolve(__dirname, "assets/js/main.js"),
      },
    },
    assetsInlineLimit: 0,
  },
  assetsInclude: ["**/*.woff", "**/*.woff2", "**/*.ttf"],

  resolve: {
    alias: {
      "@": path.resolve(__dirname, "assets"),
    },
  },
});
