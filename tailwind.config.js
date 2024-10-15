/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  theme: {
    extend: {
      colors: {
        'galaxy': '#0D152B',
        'gold': '#E5B80B',
      },
      fontFamily: {
        'IBM': ['"IBM Plex Sans"', 'sans-serif'], // Added font family here
      },
    },
  },
  plugins: [],
}

