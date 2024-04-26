import colors from "tailwindcss/colors";
import forms from "@tailwindcss/forms";
/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./app/Http/Livewire/**/*Table.php",
        "./vendor/power-components/livewire-powergrid/resources/views/**/*.php",
        "./vendor/power-components/livewire-powergrid/src/Themes/Tailwind.php",

    ],

    theme: {
        extend: {
            colors: {
                "pg-primary": colors.gray,
            },
        },
    },
    plugins: [forms],
};
