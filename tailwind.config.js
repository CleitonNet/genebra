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
                sans: ['montserrat', ...defaultTheme.fontFamily.sans],
                poppins: ['poppins', ...defaultTheme.fontFamily.sans],
                century: ['century', ...defaultTheme.fontFamily.serif],
                smoothy: ['"Smoothy-Regular"', 'sans-serif'], // Adicionando a fonte personalizada
            },
            colors: {
                azul     : "#1B365D",
                vermelho : "#BE3A34",
                amarelo  : "#F0B323",
                grafite  : "#222224",
                preto    : "#040504",
            }
        },
        screens: {
            "xs" : "480px",
            "sm" : "640px",
            "md" : "768px",
            "lg" : "1024px",
            "xl" : "1280px",
            "2xl": "1536px",
        },
    },

    // plugins: [forms],
};
