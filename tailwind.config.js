import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

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
            },
            colors: {
                success: {
                    soft: "#def7ec",
                    medium: "#31c48d",
                    strong: "#0e9f6e",
                },
                "fg-success": {
                    strong: "#03543f",
                },
            },
            borderRadius: {
                base: "0.5rem",
            },
        },
    },

    plugins: [forms],
};
