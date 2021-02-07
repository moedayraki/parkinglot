const colors = require('tailwindcss/colors')

module.exports = {
  purge: [],
  purge: [
         './resources/**/*.blade.php',
         './resources/**/*.js',
         './resources/**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      colors: {
        'light-blue': colors.lightBlue,
        cyan: colors.cyan,
        backgrounds : '#E8CEBF',
        box: '#DDAF94',
        button: '#266150',
        word:'#4F4846',
        buttonword:'#FDF8F5',
      },
      fontFamily:{
        'lateefregular':'lateefregular',
      }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
