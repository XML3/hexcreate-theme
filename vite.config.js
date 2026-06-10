import { defineConfig } from "vite";
import tailwindcss from "@tailwindcss/vite";
import path from "path";

export default defineConfig({
  plugins: [tailwindcss()],
  root: "./",
  server: {
    cors: true,
    port: 5173,
  },
  build: {
    manifest: true,
    outDir: "dist",
    assetsDir: "production-assets",
    emptyOutDir: true,
    rollupOptions: {
      input: {
        main: "src/js/main.js",
      },
    },
  },
});
