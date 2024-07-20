import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";
import daisyui from "daisyui";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],
    darkMode: "class",
    theme: {
        extend: {
            backgroundImage: {
                "gradient-overlay":
                    "linear-gradient(to bottom, rgba(255, 255, 255, 0), rgba(255, 255, 255, 1))",
            },
            fontFamily: {
                sans: ["Poppins", ...defaultTheme.fontFamily.sans],
                serif: ["Merriweather", "serif"],
                heading: ["Playfair Display", "serif"],
                lobster: ["Lobster", "serif"]
            },
            colors: {
                primary: "#263238",
                secondary: "#00b7eb",
                accent: "#00ced1",
                neutral: "#334155",
                "base-light": "#ffff",
                "base-dark": "#37474F",
                info: "#77b5fe",
                success: "#4ade80",
                warning: "#facc15",
                error: "#f87171",
            },
            animation: {
                fadeInUp: "fadeInUp 0.5s ease-out",
                fadeInDown: "fadeInDown 0.5s ease-out",
                slideInRight: "slideInRight 0.5s ease-out",
                slideInLeft: "slideInLeft 0.5s ease-out",
                scaleIn: "scaleIn 0.3s ease-out",
                blob: "blob 1s ease-in-out infinite",
                subtleHover: "subtleHover 0.3s ease-in-out forwards",
            },
            keyframes: {
                fadeInUp: {
                    "0%": { opacity: "0", transform: "translateY(10px)" },
                    "100%": { opacity: "1", transform: "translateY(0)" },
                },
                fadeInDown: {
                    "0%": { opacity: "0", transform: "translateY(-10px)" },
                    "100%": { opacity: "1", transform: "translateY(0)" },
                },
                slideInRight: {
                    "0%": { transform: "translateX(100%)" },
                    "100%": { transform: "translateX(0)" },
                },
                slideInLeft: {
                    "0%": { transform: "translateX(-100%)" },
                    "100%": { transform: "translateX(0)" },
                },
                scaleIn: {
                    "0%": { transform: "scale(0.95)" },
                    "100%": { transform: "scale(1)" },
                },
                blob: {
                    "0%": { transform: "translate(0, 0) scale(1)" },
                    "33%": { transform: "translate(30px, -50px) scale(1.1)" },
                    "66%": { transform: "translate(-20px, 20px) scale(0.9)" },
                    "100%": { transform: "translate(0, 0) scale(1)" },
                },
                subtleHover: {
                    "0%": { transform: "translateY(0)" },
                    "100%": { transform: "translateY(-5px)" },
                },
            },
            boxShadow: {
                card: "0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06)",
                button: "0 2px 4px 0 rgba(0, 0, 0, 0.2)",
            },
        },
        container: {
            center: true,
            padding: {
                DEFAULT: "1rem",
                sm: "2rem",
                lg: "4rem",
                xl: "5rem",
                "2xl": "6rem",
            },
        },
        screens: {
            xs: "480px",
            sm: "640px",
            md: "768px",
            lg: "1024px",
            xl: "1280px",
            "2xl": "1536px",
            "3xl": "1920px",
        },
    },

    plugins: [forms, daisyui],
    daisyui: {
        themes: ["light", "corporate"],
    },
};
