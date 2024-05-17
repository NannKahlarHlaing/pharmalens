/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'custom-white': '#F7F9FF',
        'custom-yellow': '#FFF7D6',
        'custom-blue' : '#466B73'
      },
    },
  },
  plugins: [
  ],
}

