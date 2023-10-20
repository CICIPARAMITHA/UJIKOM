/** @type {import('tailwindcss').Config} */
module.exports = {
  
  content: [
    "../../resources/**/*.blade.php"
  ],
  theme: {
    extend: {},
    container: {
      padding: '8rem',
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}

