module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      fontFamily: {
        poppins: ['Poppins'],
        merri: ['Merriweather']
      }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [
     require('@tailwindcss/forms'),
  ],
}
