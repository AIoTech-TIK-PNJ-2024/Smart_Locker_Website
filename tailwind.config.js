/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                green: {
                    head: "#064E3B",
                    circle: "#2F6B5C",
                },
                yellow_blob: "#DAB61C",
            },
            screens: {
                xs: "594px",
            },
        },
    },
    plugins: [require("daisyui")],
};
