/** @type {import('tailwindcss').Config} config */

import typography from '@tailwindcss/typography';

const config = {
  content: [
    './index.php',
    './app/**/*.php',
    './resources/**/*.{php,vue,js}',
    'safelist.txt',
  ],
  theme: {
    container: {
      center: true,
      padding: {
        DEFAULT: '1rem',
        sm: '1.5rem',
        lg: '2rem',
        xl: '2.5rem',
        '2xl': '3rem',
      },
    },
    colors: {
      black: '#000000',
      green: '#5fb9ad',
      blue: '#004252',
      beige: '#f1e8e1',
      yellow: '#ffbb2d',
      pink: '#ffccd5',
      white: '#ffffff',
      transparent: 'transparent',
    },
    fontFamily: {
      serif: [
        'PWSerif',
        'ui-serif',
        'Georgia',
        'Cambria',
        'Times New Roman',
        'Times',
        'serif',
      ],
      sans: [
        'PWSans',
        'Avenir',
        'Helvetica Neue',
        'Helvetica',
        'Arial',
        'sans-serif',
      ],
    },
    extend: {
      typography: (theme) => ({
        DEFAULT: {
          css: {
            '--tw-prose-body': theme('colors.blue'),
            '--tw-prose-headings': theme('colors.blue'),
            '--tw-prose-strong': theme('colors.blue'),
          },
        },
      }),
    },
  },
  plugins: [typography],
};

export default config;
