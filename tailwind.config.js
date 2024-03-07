import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'black-rgba': 'rgba(0, 0, 0, 0.3)',
                'main-text': 'rgb(51, 65, 85)',
                'main-back': 'rgb(20 184 166)',
                'hover-back': '#0F766E',
                'snapchat': '#facc15',
                'whatsapp': '#25d366',
                'telegram': '#2B81CC',
                
            },
        },
    },

    plugins: [forms, typography],
};
