// postcss.config.js
module.exports = {
    plugins: [
        require('postcss-import'),
        require('autoprefixer'),
        require('cssnano'),
        require('@fullhuman/postcss-purgecss')({
            content: [
                './src/**/*.html', // Ajustez ces chemins en fonction de la structure de votre projet
                './src/**/*.js',
                './src/**/*.vue',
            ],
            defaultExtractor: content => content.match(/[\w-/:]+(?<!:)/g) || [],
            safelist: {
                standard: ['active', 'hover', 'focus'], // Ajoutez les classes que vous souhaitez conserver
                deep: [/^bg-/], // Exemples d'expressions régulières pour conserver certaines classes
            },
        }),
    ],
};
