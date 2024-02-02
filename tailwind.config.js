const defaultTheme = require('tailwindcss/defaultTheme')

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
            'todo-red' : '#FF4F5A',
            'todo-gray' : '#F9F9F9',
            'todo-dark-gray' : '#6B6B6B',
        },
        fontFamily: {
            rowdies : ['"Rowdies"', ...defaultTheme.fontFamily.sans],
            'sans': ['"Roboto"', ...defaultTheme.fontFamily.sans],
        }
    },
  },
  plugins: [],
}

