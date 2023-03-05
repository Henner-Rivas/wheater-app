const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors')

/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",

  ],

  theme: {
    extend: {
        fontFamily: {
            sans: ['Nunito', ...defaultTheme.fontFamily.sans],
        },

    },
    colors:{
        light_blue:"#6b9dff",
        blue:"#021E73",
        rosado:'#ff76a9',
        white:'#FFFF'    ,...colors,

    }
  },
  plugins: [],
}
