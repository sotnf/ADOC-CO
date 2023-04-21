/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./templates/**/*.{html,js}",
    "./templates/**/*.twig",
    "./node_modules/flowbite/**/*.js",
    "./src/**/*.{html,js}"
  ],
  theme: {
    extend: {},
  },
  plugins: [
    require('flowbite/plugin')
  ],
}

