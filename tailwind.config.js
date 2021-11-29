module.exports = {
  purge: [
    './resources/views/**/*.blade.php',
    './resources/css/**/*.css',
  ],
  theme: {
    extend: {}
  },
  variants: {},
  plugins: [
    require('@tailwindcss/ui'),
  ]
}

module.exports = {
    // ...
    variants: {
      extend: {
        animation: ['motion-safe'],
      }
    },
  }
