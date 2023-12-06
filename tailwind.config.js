import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'primary': '#2D349A',
                'primary-dark': '#1f2472',
                'secondary': '#AB830F',
                'secondary-dark': '#C1A038',
            },
            backgroundImage: {
                'plm-bldg': "url('/image/bgimage.png')",
              },
        },
    },

    plugins: [forms],
};
