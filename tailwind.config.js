/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './**/*.php',
    './**/*.html',
    '!./vendor/**',
    '!./node_modules/**',
  ],
  theme: {
    extend: {
      colors: {
        primary: '#3399CC',
        secondary: '#4898bb',
        accent: '#FFCC33',
        muted: '#aaaaaa',
        'form-text': '#435266',
      },
      fontFamily: {
        sans: ['Verdana', 'Arial', 'Helvetica', 'sans-serif'],
      },
    },
  },
  plugins: [],
}
