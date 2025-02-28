import defaultTheme from 'tailwindcss/defaultTheme';
// import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
                caveat: ["Caveat", "cursive"],
            },

            colors: {
                primary: {
                    500: "#276461",
                    btn: "#3D3D3D",
                    hover: "#BCC8A2",
                    "btn-hover": "#555555",
                },
                main: {
                    500: "#F2F2F2",
                },
            },
            screens: {
                xs: "320px",
            },

            width: {
                "28,5": "7.5rem", //120px
                "200px": "12.5rem",
                "300px": "18.75",
                "500px": "31.25rem",
            },

            height: {
                "1px": "0.063rem",
                "3px": "0.188rem",
                "400px": "25rem",
            },

            maxWidth: {
                "28,5": "7.5rem", //120px
                "400px": "25rem",
                "500px": "31.25rem",
                "8xl": "90rem",
            },

            borderRadius: {
                "5xl": "3rem",
                "6xl": "4rem",
            },

            // clipPath: {
            //     custom: "polygon(65% 0, 100% 32%, 100% 100%, 30% 100%, 0 68%, 0 0)",
            // },
        },
    },
    darkMode: "class", // or 'media' or 'class'

    // plugins: [forms],
};
