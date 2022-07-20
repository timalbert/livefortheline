const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
  content: require('fast-glob').sync(
    [
      'source/**/*.{blade.php,blade.md,md,html,vue}',
      '!source/**/_tmp/*', // exclude temporary files
    ],
    { dot: true }
  ),
  theme: {
    extend: {
      fontFamily: {
        sans: ['Montserrat', ...defaultTheme.fontFamily.sans],
        mono: ['"Courier Prime"', ...defaultTheme.fontFamily.mono],
      },
    },
  },
  plugins: [require('@tailwindcss/typography')],
};
