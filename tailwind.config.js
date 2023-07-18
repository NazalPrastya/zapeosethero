/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        fontFamily: {
            comforta: ["Comfortaa", "cursive"],
        },
        extend: {
            container: {
                center: true,
                padding: "36px",
            },
            colors: {
                primary: "#EE6B52",
                babyblue: "#ADE2E4",
                darkblue: "#1D5E61",
                secondary: "#FFDEA9",
                reddark: "#e44c30",
            },
        },
    },
    plugins: [require("flowbite/plugin")],
};
