import { defineConfig } from 'vite';
import { resolve } from 'path';
import tailwindcss from "@tailwindcss/vite";

export default defineConfig({
  build: {
    outDir: 'dist',
    manifest: true,
    assetsDir: 'assets',
    rollupOptions: {
      input: {
        aos: resolve(__dirname, 'src/js/aos.js'),
        style: resolve(__dirname, 'src/css/style.css'),
        blog: resolve(__dirname, 'src/js/blog.js'),
        contact: resolve(__dirname, 'src/js/contact.js'),
        header: resolve(__dirname, 'src/js/header.js'),
        review: resolve(__dirname, 'src/js/review.js'),
        navigation: resolve(__dirname, 'src/js/navigation.js'),
        displayHomepage: resolve(__dirname, 'src/js/displays/displayHomepage.js'),
        displayPricing: resolve(__dirname, 'src/js/displays/displayPricing.js'),
        displayAbout: resolve(__dirname, 'src/js/displays/displayAboutUs.js'),
        displayTokens: resolve(__dirname, 'src/js/displays/displayTokens.js'),
        displayContact: resolve(__dirname, 'src/js/displays/displayContact.js'),
        displayBlog: resolve(__dirname, 'src/js/displays/displayBlog.js'),
        displayBlogPost: resolve(__dirname, 'src/js/displays/displayBlogPost.js'),
      },
    },
  },
   plugins: [
    tailwindcss(),
  ],
  
  // Don't copy public dir, we'll handle assets via imports
  publicDir: false,
  base: '/',
  
  server: {
    port: 5173,
    cors: true,
    watch: {
      include: ['**/*.php'],
    },
  },
});