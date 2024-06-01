/** @type {import('tailwindcss').Config} */
const withMT = require("@material-tailwind/html/utils/withMT");

module.exports = withMT({
  content: ["./public/**/*.{html,php,js}"], // Ubah ekstensi untuk PHP
  theme: {
    extend: {},
  },
  plugins: [],
})
