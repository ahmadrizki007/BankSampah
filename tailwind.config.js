import defaultTheme from 'tailwindcss/defaultTheme';
// import forms from '@tailwindcss/forms';

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
                caveat: ['Caveat', 'cursive'],
            },

            colors:{
                primary:{
                    '500': '#276461',
                },
                main:{
                    '500': '#F2F2F2',
                }
            },
            screens:{
                'xs' : '320px',
            }
        },
    },
    darkMode: 'class', // or 'media' or 'class'

    // plugins: [forms],
};
