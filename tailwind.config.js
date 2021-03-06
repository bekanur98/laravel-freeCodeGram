module.exports = {
  purge: [
    './resources/views/**/*.blade.php',
    './resources/css/**/*.css',
  ],
  theme: {
      container:{
        center: true,
        width: 736
      },
    extend: {}
  },
  variants: {},
  plugins: [
    require('@tailwindcss/ui'),
  ]
}
