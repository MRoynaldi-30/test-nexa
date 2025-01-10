import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
        "./node_modules/flowbite/**/*.js"
    ],
    theme: {
        // screens: {
        //     'hp': '400px',    // Custom breakpoint for mobile (e.g., 412px width)
        //     'tablet': '600px',  // Existing tablet breakpoint
        //     'laptop': '1024px', // Existing laptop breakpoint
        //     'desktop': '1280px' // Existing desktop breakpoint
        // },  
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },
    plugins: [
        require('flowbite/plugin') 
    ],
};
