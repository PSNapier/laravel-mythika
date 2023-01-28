const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    daisyui: {
      themes: [
        {
          mytheme: {
            "primary": "#b91c1c",
            "secondary": "#b45309",
            "accent": "#fbbf24",
            "neutral": "#F7EFE7",
            // "neutral": "#826A5C",
            "base-100": "#22201F",
            // "base-100": "#F7EFE7",
            "info": "#0891b2",
            "success": "#16a34a",
            "warning": "#E97F14",
            "error": "#ef4444",
          },
        },
      ],
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
        require('daisyui'),
    ],
    // plugins: [require('@tailwindcss/forms')],
};
