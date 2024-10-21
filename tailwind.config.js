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
        'primary' : '#3b82f6',
        'warning' : '#eab308',
        'success' : '#22c55e',
      },
      fontFamily: {
        'IBM': ['"IBM Plex Sans"', 'sans-serif'], // Added font family here
      },
    },
  },
  plugins: [],
}

