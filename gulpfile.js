// gulp modules
var gulp = require('gulp');
var browserSync = require('browser-sync').create();
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var uglify = require('gulp-uglify');
var sourcemaps = require('gulp-sourcemaps');
var cleanCSS = require('gulp-clean-css');
var bourbon = require('node-bourbon');

// path to source directory
var sourcePATH = './source/';

// minify JS + create sourcemap
gulp.task('js', function() {
    gulp.src(sourcePATH + 'js/*.js')
        .pipe(sourcemaps.init())
        .pipe(uglify().on('error', function(e) {
            console.log(e);
        }))
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest('dist/js'));
});

// create CSS from SASS + minify CSS + create sourcemap
gulp.task('css', function() {
    gulp.src(sourcePATH + 'sass/main.sass')
        .pipe(sass({
                includePaths: bourbon.includePaths
            }).on('error', function(e) {
              console.log(e);
        }))
        .pipe(autoprefixer())
        .pipe(gulp.dest(sourcePATH + 'css'))
        .pipe(sourcemaps.init())
        .pipe(cleanCSS())
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest('dist/css'));

    gulp.src(sourcePATH + 'css/normalize.css')
        .pipe(sourcemaps.init())
        .pipe(cleanCSS())
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest('dist/css'));
})



//task for browser sync
gulp.task('serve',  function () {
    browserSync.init({
        server: {
            baseDir: './'
        }
    });

    gulp.watch(sourcePATH + 'sass/**', ['css']);
    gulp.watch(sourcePATH + 'js/*.js', ['js']);

});

// default task
gulp.task('default', ['css','js', 'serve']);
