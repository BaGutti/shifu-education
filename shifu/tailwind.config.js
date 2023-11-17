/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/view/template.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {},
  },
  plugins: [
    require('flowbite/plugin')
  ],
}

