import defaulTheme from 'tailwindcss/defaultTheme'

/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: ["Figtree", ...defaulTheme.fontFamily.sans]
      }
    },
  },
  plugins: [
    require('@tailwindcss/typography'),
  ],
}

