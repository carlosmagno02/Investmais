/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    container:{
      center:true,
      padding:'1rem'
    },
    extend: {
      colors:{
        "orange":"#ff9c00"
      }
    },
  },
  plugins: [],
}
