/*
|-------------------------------------------------------------------------------
| Tailwind – The Utility-First CSS Framework
|-------------------------------------------------------------------------------
|
| Documentation at https://tailwindcss.com
|
*/

/**
 * Global Styles Plugin
 *
 * This plugin modifies Tailwind’s base styles using values from the theme.
 * https://tailwindcss.com/docs/adding-base-styles#using-a-plugin
 */
const globalStyles = ({ addBase, config }) => {
  addBase({
    'body, p': {
      color: config('theme.textColor.gray.800'),
      fontFamily: config('theme.fontFamily.body'),
      fontSize: config('theme.fontSize.base'),
    },
    a: {
      color: config('theme.textColor.primary'),
      textDecoration: 'none',
      borderBottom: '1px solid transparent',
      transition: '0.2s ease',
      fontFamily: 'Raleway',
    },
    'a:hover': {
      // borderColor: config('theme.borderColor.primary'),
      color: config('theme.textColor.active'),
      textDecoration: 'underline'
    },
    p: {
      marginBottom: config('theme.margin.3'),
      lineHeight: config('theme.lineHeight.normal'),
    },
    'h1, h2, h3, h4, h5': {
      marginTop: config('theme.margin.8'),
      marginBottom: config('theme.margin.4'),
      lineHeight: config('theme.lineHeight.tight'),
      fontWeight: '700',
      fontFamily: config('theme.fontFamily.display'),
    },
    'h1, .h1': { fontSize: config('theme.fontSize.xxl'),
      color: config('theme.textColor.gray.800'),},
    h2: { fontSize: config('theme.fontSize.xl') },
    h3: { fontSize: config('theme.fontSize.xl') },
    h4: { fontSize: config('theme.fontSize.base') },
    h5: { fontSize: config('theme.fontSize.base') },
    'ol, ul': { paddingLeft: config('theme.padding.4') },
    ol: { listStyleType: 'decimal' },
    ul: { listStyleType: 'disc' },
    // form
    'input, textarea': {
      border: '1px solid',
      borderColor: config('theme.textColor.blue.light'),
    },
    'footer, footer p': {
      color: config('theme.textColor.white'),

    }

  });
}

/**
 * Configuration
 */
module.exports = {
  theme: {
     fontFamily: {
       'display': ['sans', 'Montserrat'],
       'body': ['sans', 'Raleway' ],
     },
      fontSize: {
      sm: ['16px'],
      base: ['18px'],
      lg: ['20px'],
      xl: ['24px'],
      xxl: ['36px'],
    },
    colors: {
      primary: '#C70E46',
      active: '#81092d',
      white: '#fff',
      yellow: '#f9f3c5',
      blue: {
        light: '#bcdbe8',
        mid: '#87aab9',
        dark: '#19217c',
      },
      gray: {
        100: '#f7fafc',
        200: '#edf2f7',
        300: '#e7e7e7',

        400: '#cbd5e0',
        500: '#a0aec0',
        600: '#718096',

        700: '#646F6F',
        800: '#383d3d',
        900: '#1a202c',
      },
      transparent: 'transparent',
    },
    shadows: {
      outline: '0 0 0 3px rgba(82,93,220,0.3)',
    },
    container: {
      center: true,
      padding: '1rem',
    },
    extend : {
      spacing: {
         '96': '24rem',
         'section': '1000px',
      },
       borderWidth: {
        '10': '10px',
      },
      inset: {
          '0': 0,
          '1': '1em',
         '1/2': '50%',
         '2/3': '66%',
      },
    },
  },
  variants: {
   display: ['responsive', 'group-hover', 'group-focus'],
  },
  plugins: [
    globalStyles,
  ],
}
