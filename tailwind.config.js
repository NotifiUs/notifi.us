module.exports = {
  purge: {
    enabled: true,
    content:[
      './source/**/*.html',
      './source/**/*.php',
      './source/**/*.js',
    ]},
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {},
  },
  variants: {
    extend: {},
  },
  plugins: [
    require('@tailwindcss/aspect-ratio'),
    require('@tailwindcss/forms'),

  ],
}
