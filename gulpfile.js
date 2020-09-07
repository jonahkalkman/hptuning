const gulp        = require('gulp');
const browserSync = require('browser-sync').create();
const sass        = require('gulp-sass');
const babel = require('gulp-babel');
const webpack = require('webpack');
const webpackStream = require('webpack-stream');
const webpackConfig = require('./webpack.config.js');

// Compile sass into CSS & auto-inject into browsers
gulp.task('sass', function() {
    gulp.src('./css/scss/source.scss')
        .pipe(sass())
        .on('error', function (err) {
            console.log(err.toString());
            this.emit('end');
        })
        .pipe(gulp.dest('./build/css'))
        .pipe(browserSync.reload({stream: true}));
});

gulp.task('babel', function() {
    gulp.src('./js/main.js')
        .pipe(webpackStream(webpackConfig), webpack)
        .on('error', function (err) {
            console.log(err.toString());
            this.emit('end');
        })
        .pipe(gulp.dest('./build/js'))
        .pipe(browserSync.reload({stream: true}));
});

gulp.task('serve', ['sass', 'babel'], function() {

    const projectName = 'hptuning';
    
    browserSync.init({
        proxy: `http://localhost:8888/${projectName}`,
        port: 3001,
        host: '192.168.0.110'
    });
    gulp.watch("./js/**/*.js", ['babel']);
    gulp.watch("css/scss/**/*.scss", ['sass']);
    gulp.watch("./**/*.php").on('change', browserSync.reload);
});

gulp.task('default', ['serve']);