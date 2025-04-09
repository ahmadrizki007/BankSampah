import defaultTheme from 'tailwindcss/defaultTheme';
// import forms from '@tailwindcss/forms';

const plugin = require('tailwindcss/plugin');

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
                    '300': '#A8D5BA',
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

    plugins: [
        plugin(function ({ addVariant }) {
        addVariant('sidebar-expanded', ({ modifySelectors, separator }) => {
            modifySelectors(({ className }) => {
            return `.sidebar-expanded .sidebar-expanded\\${separator}${className}`;
            });
        });
        }),
    ],
};
