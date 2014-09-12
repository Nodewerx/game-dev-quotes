// include gulp
var gulp = require('gulp');
var prefixer = require('gulp-autoprefixer');
var comb = require('gulp-csscomb');
var imagemin = require('gulp-imagemin');
var cssmin = require('gulp-minify-css');
var rename = require('gulp-rename');
var sass = require('gulp-sass');
var uglify = require('gulp-uglify');

gulp.task('css', function() {
  return gulp.src('build/scss/*.scss')
    .pipe(sass())
    .pipe(prefixer({ browsers: ['last 4 versions'], cascade: false }))
    .pipe(comb())
    .pipe(gulp.dest('assets/css'))
    .pipe(cssmin({noAdvanced:true}))
    .pipe(rename({suffix:".min"}))
    .pipe(gulp.dest('assets/css'));
});

gulp.task('images', function() {
  return gulp.src('build/img/*.*')
    .pipe(imagemin({progressive: true, interlanced: true}))
    .pipe(gulp.dest('assets/img'));
});

gulp.task('jsmin', function() {
  return gulp.src('build/js/*.*')
    .pipe(gulp.dest('assets/js'))
    .pipe(rename({suffix:'.min'}))
    .pipe(uglify({mangle: false}))
    .pipe(gulp.dest('assets/js'));
});

gulp.task('default', ['css', 'images', 'jsmin']);
