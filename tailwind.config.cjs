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
                // Aliases for compatibility if needed, though prompt specified exact names
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
                'fade-in-up': {
                    '0%': { opacity: '0', transform: 'translateY(20px)' },
                    '100%': { opacity: '1', transform: 'translateY(0)' },
                },
                'fade-in': {
                    '0%': { opacity: '0' },
                    '100%': { opacity: '1' },
                },
                'slide-up': {
                    '0%': { opacity: '0', transform: 'translateY(20px)' },
                    '100%': { opacity: '1', transform: 'translateY(0)' },
                },
                'pulse-slow': {
                    '0%, 100%': { opacity: '1' },
                    '50%': { opacity: '0.5' },
                }
            },
            animation: {
                'fade-in-up': 'fade-in-up 0.8s ease-out forwards',
                'fade-in': 'fade-in 1s ease-out forwards',
                'slide-up': 'slide-up 0.8s ease-out forwards',
                'pulse-slow': 'pulse-slow 3s cubic-bezier(0.4, 0, 0.6, 1) infinite',
            }
        },
    },
    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/aspect-ratio')],
};
