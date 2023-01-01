/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
      Montserrat: ["Montserrat", "sans-serif"],
      Roboto: ["Roboto", "sans-serif"]
      },
    },
  },
  plugins: [],
}
