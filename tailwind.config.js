/** @type {import('tailwindcss').Config} */
const colors = require('tailwindcss/colors')

module.exports = {
  content: [
      "./resources/**/*.blade.php",
      './vendor/filament/**/*.blade.php',
  ],
  theme: {
    extend: {
        colors: {
                    danger: colors.rose,
                    primary: colors.yellow,
                    success: colors.green,
                    warning: colors.yellow,
                    'regal-blue': '#313940',
                },
    },
  },
  plugins: [],
}
