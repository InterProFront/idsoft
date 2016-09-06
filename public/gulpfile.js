/**
 * Created by Косаностра on 16.04.2016.
 */
var gulp = require('gulp'),
    livereload = require('gulp-livereload'),
    autopref = require('gulp-autoprefixer'),
    less = require('gulp-less'),
    watch = require('gulp-watch');

gulp.task('Styles', function() {
    gulp.src('./css/less/style.less')
        .pipe(less())
        .pipe(autopref('last 2 version', 'safari 5', 'ie 8', 'ie 9', 'opera 12.1','chrome','ff'))
        .pipe(gulp.dest('./css'))
        .pipe(livereload());
});
gulp.task('Mobile', function() {
    gulp.src('./css/less/mobile.less')
        .pipe(less())
        .pipe(autopref('last 2 version', 'safari 5', 'ie 8', 'ie 9', 'opera 12.1','chrome','ff'))
        .pipe(gulp.dest('./css'))
        .pipe(livereload());
});

gulp.task('watch',function(){
    livereload.listen();
    gulp.watch('./css/less/style.less', ['Styles']);
    gulp.watch('./css/less/mobile.less', ['Mobile']);

    gulp.watch('./css/less/desctop/*.less', ['Styles']);
    gulp.watch('./css/less/core/*.less',    ['Styles','Mobile']);
    gulp.watch('./css/less/mobile/*.less',  ['Mobile']);

});

gulp.task('default', ['Styles']);
