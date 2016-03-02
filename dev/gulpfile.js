(function (r) {
  "use strict";
  var gulp = r('gulp'),
    compass = r('gulp-compass'),
    autoprefixer = r('gulp-autoprefixer'),
    cssnano = r('gulp-cssnano'),
    rename = r('gulp-rename'),
    concat = r('gulp-concat'),
    uglify = r('gulp-uglify'),
    uncomment = r('gulp-uncomment'),
    size = r('gulp-size'),
    notify = r('gulp-notify'),
    mainBowerFiles = r('main-bower-files');

  //compass
  gulp.task('compass', function() {
    return gulp.src(['./sass/*.scss', './sass/**/*.scss'])
      .pipe(compass({
        config_file: './config.rb',
        css: '../css',
        sass: './sass'
      }))
      .pipe(rename('style.min.css'))
      .pipe(cssnano({autoprefixer: {browsers: ['last 50 versions','> 5%'], add: true}}))
      .pipe(size({title: 'size of style.min.css'}))
      .pipe(gulp.dest('../css'))
      .pipe(notify("css compiled!"));
  });

  //libs css
  gulp.task('libs-css', function() {
    return gulp.src(['!../js/libs/normalize.css', '../js/libs/*.css', './js/libs/**/*.css'])
      .pipe(concat('libs.min.css'))
      .pipe(cssnano({autoprefixer: {browsers: ['last 50 versions','> 5%'], add: true}}))
      .pipe(size({title: 'size of libs.min.css'}))
      .pipe(gulp.dest('../js/libs'))
      .pipe(notify("css libs compiled!"));
  });

  //scripts
  gulp.task('scripts-main', function() {
    return gulp.src('./js/*.js')
      .pipe(uncomment({removeEmptyLines: true}))
      .pipe(concat('main.min.js'))
      .pipe(uglify())
      .pipe(size({title: 'size of main.min.js'}))
      .pipe(gulp.dest('../js'))
      .pipe(notify("main.js compiled!"));
  });

  //bower
  gulp.task('bower', function() {
    return gulp.src(mainBowerFiles({
      "overrides": {
        "jquery": {
          "main": "dist/jquery.min.js"
        },
        "bxslider-4": {
          "main": [
            "dist/jquery.bxslider.min.js",
            "dist/jquery.bxslider.min.css",
            "dist/images/bx_loader.gif",
            "dist/images/controls.png"
          ]
        },
        "fancybox": {
          "main": [
            "source/jquery.fancybox.css",
            "source/blank.gif",
            "source/fancybox_loading.gif",
            "source/fancybox_loading@2x.gif",
            "source/fancybox_overlay.png",
            "source/fancybox_sprite.png",
            "source/fancybox_sprite@2x.png",
            "source/jquery.fancybox.pack.js"
          ]
        },
        "jquery.inputmask": {
          "main": [
            "dist/jquery.inputmask.bundle.js"
          ]
        },
        "jquery-validation": {
          "main": [
            "dist/jquery.validate.min.js"
          ]
        }
      }
    }))
    .pipe(gulp.dest('../js/libs'));
  });

  //watch
  gulp.task('watch', function() {
    gulp.watch(['./sass/*.scss', './sass/**/*.scss'], ['compass']);
    gulp.watch('./js/*.js', ['scripts-main']);
  });

  //default
  gulp.task('default', ['compass', 'libs-css', 'scripts-main', 'bower', 'watch']);
}(require));