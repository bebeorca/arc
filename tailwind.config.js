/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'prim-b': '#0F102F',
        'prim-y': '#F05407',
      },
      fontFamily: {
        Archivo: 'Archivo'
      },
      backgroundImage: {
        'logo': "url('public/images/logo.png')",
      }
    },
  },
  plugins: [],
}



