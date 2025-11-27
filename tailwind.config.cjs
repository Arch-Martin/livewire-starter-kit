module.exports = {
    content: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './vendor/lunarphp/stripe-payments/resources/views/**/*.blade.php',
    ],
    theme: {
        extend: {
            colors: {
                primary: '#F45B26', // Naranja intenso
                secondary: '#3E2723', // Marrón café oscuro
                accent: '#4A0E76', // Morado oscuro
                dark: '#111111', // Negro casi puro
                light: '#F9F9F9', // Gris muy claro
            },
            fontFamily: {
                sans: ['Montserrat', 'Roboto', 'sans-serif'],
                display: ['Oswald', 'Bebas Neue', 'sans-serif'],
                mono: ['monospace'], // Placeholder for price font if needed
            },
        },
    },
    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/aspect-ratio')],
};
