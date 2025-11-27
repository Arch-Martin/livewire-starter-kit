module.exports = {
    content: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './vendor/lunarphp/stripe-payments/resources/views/**/*.blade.php',
    ],
    theme: {
        extend: {
            colors: {
                'brand-orange': '#F45B26',
                'brand-dark': '#111111',
                'brand-purple': '#4A0E76',
                'brand-gray': '#F9F9F9',
                // Aliases for compatibility
                primary: '#F45B26',
                secondary: '#111111',
                accent: '#4A0E76',
            },
            fontFamily: {
                'heading': ['Oswald', 'sans-serif'],
                'body': ['Montserrat', 'sans-serif'],
                // Aliases
                sans: ['Montserrat', 'sans-serif'],
                display: ['Oswald', 'sans-serif'],
            },
            keyframes: {
                'fade-in': {
                    '0%': { opacity: '0' },
                    '100%': { opacity: '1' },
                },
                'slide-up-fade': {
                    '0%': { opacity: '0', transform: 'translateY(10px)' },
                    '100%': { opacity: '1', transform: 'translateY(0)' },
                },
                'pulse-slow': {
                    '0%, 100%': { opacity: '1' },
                    '50%': { opacity: '0.8' },
                }
            },
            animation: {
                'fade-in': 'fade-in 0.4s ease-out forwards',
                'slide-up-fade': 'slide-up-fade 0.5s ease-out forwards',
                'pulse-slow': 'pulse-slow 3s ease-in-out infinite',
            }
        },
    },
    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/aspect-ratio')],
};
