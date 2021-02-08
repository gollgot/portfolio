module.exports = {
    purge: [
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
        colors: {
            'anthracite': '#444649',
            'bordeaux': '#A4161A'
        }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
