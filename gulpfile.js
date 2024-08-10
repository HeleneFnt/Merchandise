const gulp = require('gulp');
const postcss = require('gulp-postcss');
const postcssImport = require('postcss-import');
const autoprefixer = require('autoprefixer');
const cssnano = require('cssnano');

gulp.task('styles', function () {
    return gulp.src('public/assets/**/*.css')
        .pipe(postcss([
            postcssImport(),
            autoprefixer(),
            cssnano()
        ]))
        .pipe(gulp.dest('dist/'));
});

gulp.task('default', gulp.series('styles'));
