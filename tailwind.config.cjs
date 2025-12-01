module.exports = {
    content: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './vendor/lunarphp/stripe-payments/resources/views/**/*.blade.php',
    ],
    theme: {
        extend: {
            colors: {
                'brand-black': '#111111',
                'brand-grey': '#777777',
                'brand-coffee': '#6F4E37',
                // Aliases for compatibility
                primary: '#111111', // Main text/headings
                secondary: '#777777', // Body text
                accent: '#6F4E37', // Accents
            },
            fontFamily: {
                'sans': ['"Work Sans"', 'sans-serif'],
                'serif': ['"Playfair Display"', 'serif'],
                // Aliases
                'body': ['"Work Sans"', 'sans-serif'],
                'heading': ['"Playfair Display"', 'serif'],
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
