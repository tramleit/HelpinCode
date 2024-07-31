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
            colors:{
                "primary":"#4817E4",
                "primary-hover":"#3605D3"
            },
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                "roboto": ["Roboto", 'Sans Serif'],
                "montserrat": ["Montserrat", 'Sans Serif']
            },
        },
    },

    plugins: [forms],
};
