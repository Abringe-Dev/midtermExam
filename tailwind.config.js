import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    safelist: ['bg-rung-easy', 'bg-rung-medium', 'bg-rung-hard'],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Public Sans', 'Figtree', ...defaultTheme.fontFamily.sans],
                mono: ['JetBrains Mono', ...defaultTheme.fontFamily.mono],
            },
            colors: {
                paper: {
                    DEFAULT: '#F7F4ED',
                    deep: '#EFE9DB',
                },
                ink: {
                    DEFAULT: '#22302B',
                    soft: '#43564F',
                    faint: '#4B5F57',
                },
                rule: '#E0D8C4',
                pine: {
                    DEFAULT: '#0E5F56',
                    deep: '#0A453F',
                    wash: '#DDE9E4',
                },
                rung: {
                    easy: '#5E8F71',
                    medium: '#9A6B1F',
                    hard: '#9E4A30',
                },
            },
            borderRadius: {
                card: '14px',
            },
        },
    },

    plugins: [forms],
};
