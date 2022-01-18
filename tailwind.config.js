const { colors } = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './resources/views/**/*.php',
        './resources/views/**/*.html',
        './resources/assets/js/**/*.vue',
        './resources/content/**/*.html'
    ],
    theme: {
        fontFamily: {
            'sans': ['ui-sans-serif', 'system-ui'],
            'serif': ['ui-serif', 'Georgia'],
            'mono': ['ui-monospace', 'SFMono-Regular'],
            'display': ['Oswald'],
            'body': ['"Open Sans"', 'sans-serif'],
            'logo': ['Bitter', 'serif'],
        },
        extend: {
            colors: {
                oblong: {
                    'blue': '#375785',
                    'blue-light': '#4b6891',
                    'blue-dark': '#324e78',
                    'green': '#348C91',
                    'green-light': '#48989c',
                    'green-dark': '#2f7e83',
                    'blue-dark': '#324e78',
                    'gray': '#64748b',
                    'gray-light': '#94a3b8',
                    'gray-dark': '#475569',
                },
            },
        },
    },
    plugins: [
        require('@tailwindcss/typography'),
        require('@tailwindcss/forms'),
        require('@tailwindcss/line-clamp')
    ],
}