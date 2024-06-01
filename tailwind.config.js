/** @type {import('tailwindcss').Config} */
const withMT = require("@material-tailwind/html/utils/withMT");

module.exports =withMT({
  content: ["./public/**/*.{html, js, php}"],
  theme: {
    extend: {},
  },
  plugins: [
    

  ],
})