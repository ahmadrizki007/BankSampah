import defaultTheme from "tailwindcss/defaultTheme";
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
                    "hover-2": "#A8B78D",
                    "btn-hover": "#555555",
                    bg: "#F8F8F8",
                    gray: "#9D9D9D",
                },
            },
            screens: {
                xs: "320px",
            },

            width: {
                "28,5": "7.5rem", //120px
                "200px": "12.5rem",
                "250px": "15.625rem",
                "300px": "18.75rem",
                "400px": "25rem",
                "500px": "31.25rem",
            },

            height: {
                "1px": "0.063rem",
                "3px": "0.188rem",
                "300px": "18.75rem",
                "400px": "25rem",
            },

            maxWidth: {
                "28,5": "7.5rem", //120px
                "350px": "21.875rem",
                "400px": "25rem",
                "500px": "31.25rem",
                "8xl": "90rem",
            },

            borderRadius: {
                "5xl": "3rem",
                "6xl": "4rem",
            },

            boxShadow: {
                "shadow-1": "0px 4px 4px 0px rgba(0, 0, 0, 0.25)",
            },
        },
    },
    darkMode: "class", // or 'media' or 'class'

    // plugins: [forms],
};
