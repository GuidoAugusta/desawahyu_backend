/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      fontFamily : {
        'klee-one': ['Klee One', 'sans-serif'],
        'imperial-script': ['Imperial Script', 'serif'],
      },
      colors : {
        // 'navbar' : '#31363F',
        'navbar' : '#006600',
        'primary-50': '#66b366',
        'primary-100': '#339933',
        'primary-200': '#008000',
        'primary-300': '#006600',
        'primary-400': '#004d00',
        'secondary-50': '#BCCB99',
        'secondary-100': '#A6BA77',
        'secondary-200': '#90A955',
        'secondary-300': '#738744',
        'secondary-400': '#566533',
        'neutral': '#D9D9D9',
        'success-50': '#648c51',
        'success-100': '#4d7c39',
        'success-200': '#215B07',
        'success-300': '#1a4906',
        'success-400': '#143704',
        'warning-50': '#ffdc6b',
        'warning-100': '#ffd756',
        'warning-200': '#FFCD2C',
        'warning-300': '#CCA423',
        'warning-400': '#997B1A',
        'error-50': '#ff8b82',
        'error-100': '#ff6559',
        'error-200': '#FF3E2F',
        'error-300': '#cc3226',
        'error-400': '#99251c',      
      }
    },
  },
  plugins: [
    require('flowbite/plugin'),
    require('@tailwindcss/typography')
  ],
}