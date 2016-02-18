(function (r) {
  "use strict";
  var gulp = r('gulp'),
    compass = r('gulp-compass'),
    autoprefixer = r('gulp-autoprefixer'),
    cssnano = r('gulp-cssnano'),
    rename = r("gulp-rename"),
    concat = r('gulp-concat'),
    uglify = r('gulp-uglify'),
    uncomment = r('gulp-uncomment'),
    notify = r("gulp-notify");

  //compass
  gulp.task('compass', function() {
    gulp.src('./sass/*.scss')
      .pipe(compass({
        config_file: './config.rb',
        css: '../css',
        sass: './sass'
      }))
      .pipe(rename('style.min.css'))
      .pipe(cssnano({autoprefixer: {browsers: ['last 50 versions','> 5%'], add: true}}))
      .pipe(gulp.dest('../css'))
      .pipe(notify("css compiled!"));
  });

  //vendor css
  gulp.task('vendor-css', function() {
    gulp.src(['./js/vendor/*.css', './js/vendor/**/*.css'])
      .pipe(concat('vendor.min.css'))
      .pipe(cssnano({autoprefixer: {browsers: ['last 50 versions','> 5%'], add: true}}))
      .pipe(gulp.dest('../css'))
      .pipe(notify("css vendor compiled!"));
  });

  //scripts
  gulp.task('scripts-vendor', function() {
    gulp.src(['./js/vendor/jquery.min.js', './js/vendor/*.js', './js/vendor/**/*.js'])
      .pipe(uncomment({removeEmptyLines: true}))
      .pipe(concat('vendor.min.js'))
      .pipe(uglify())
      .pipe(gulp.dest('../js'))
      .pipe(notify("vendor.js compiled!"));
  });
  gulp.task('scripts-main', function() {
    gulp.src(['./js/*.js'])
      .pipe(uncomment({removeEmptyLines: true}))
      .pipe(concat('main.min.js'))
      .pipe(uglify())
      .pipe(gulp.dest('../js'))
      .pipe(notify("main.js compiled!"));
  });

  //watch
  gulp.task('watch', function() {
    gulp.watch('./sass/*.scss', ['compass']);
    gulp.watch('./js/*.js', ['scripts-main']);
  });

  //default
  gulp.task('default', ['compass', 'vendor-css', 'scripts-vendor', 'scripts-main', 'watch']);
}(require));