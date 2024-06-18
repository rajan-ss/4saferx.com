/** @type {import('tailwindcss').Config} */

const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
  content: ["./**/*.php"],
  theme: {
    container: {
      center: true,
      padding: {
        DEFAULT: '1rem',
      }
    },
    extend: {
      colors: {
        'primary': {
          // DEFAULT: "#14A09D",
          DEFAULT: "#00508e",
        },
        'dark-grey': {
          DEFAULT: "#585858",
          '1': "#2C2D2C",
          '2': "#2C2E30",
          '3': "#585858",
          '4': "#181000",
          '5': "#56585A",
          '6': "#3D3D3D",
        },
        'dark-red': {
          DEFAULT: "#871630",
        },
        'vivid-yellow': {
          DEFAULT: "#FFC107",
        },
      },
      screens: {
        '2xl': '1312px'
      },
      fontFamily: {
        'base': ["Roboto", ...defaultTheme.fontFamily.sans],
        'lead': ["Poppins", ...defaultTheme.fontFamily.sans],
        'icomoon': ['icomoon'],
      },
    },
  },
  plugins: [],
}
