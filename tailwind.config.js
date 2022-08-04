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
      fontWeight: {
          thin: 200,
          light: 300,
          normal: 400,
          medium: 500,
          semibold: 600,
          bold: 700,
          extrabold: 800,
          'extra-bold': 800,
          black: 900,
      },
    },
  },
  plugins: [require('@tailwindcss/typography')],
};
