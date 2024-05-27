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
        'custom-blue' : '#466B73',
        'custom-black' : '#444444'
      },
      height: {
        'custom': '600px', 
        'md-custom': '24rem',
        'sm-custom': '16rem',
      },
    },
  },
  plugins: [
  ],
}

