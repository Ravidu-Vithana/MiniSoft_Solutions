/** @type {import('tailwindcss').Config} */

const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
  content: [
    "index.php",
    "assets/js/script.js",
    "views/**/*.php"
  ],
  theme: {
    screens: {
      'xs': '375px',
      ...defaultTheme.screens,
    },
    extend: {
      fontFamily:{
        bodoni:"Libre Bodoni",
        openSans:"Open Sans",
        montserrat:"Montserrat",
        roboto:"Roboto",
        lora:"Lora",
      },
      colors: {
        "primary":"#010205",
        "header":"#0f1117",
        "lines":"#073A49",
      }
    },
  },
  plugins: [],
}

