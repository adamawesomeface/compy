'use strict';
// Get modules
var gulp         = require('gulp');
var sass         = require('gulp-sass');
var imagemin     = require('gulp-imagemin');
var concat       = require('gulp-concat');
var cssnano      = require('gulp-cssnano');
var jshint       = require('gulp-jshint');

var   browserSync = require('browser-sync'),
      watch       = require('gulp-watch'),
      gfi         = require("gulp-file-insert"),
      runSequence = require('run-sequence'),
      batch       = require('gulp-batch');

//Variables
var input = {
  'jsMaster'     : 'js/source',
  'imagesPath'   : 'images/source',
  'blocksPath'   : 'blocks'
}
var output = {
  'css': 'css/',
  'compiled': 'js/compiled',
  'js': 'js/',
}

//Build CSS
gulp.task('main-css', function() {
  return gulp.src('css/source/style.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(cssnano({
      discardComments: {removeAll: true}
    }))
    .pipe(concat('main.css'))
    .pipe(gulp.dest(output.css + '/compiled'))
    .pipe(browserSync.reload({
      stream: true
    }));
});
gulp.task('block-css', function() {
  return gulp.src([input.blocksPath + '/**/*.scss', input.blocksPath + '/**/**/*.scss'])
    .pipe(sass().on('error', sass.logError))
    .pipe(cssnano({
      discardComments: {removeAll: true}
    }))
    .pipe(concat('blocks.css'))
    .pipe(gulp.dest(output.css + '/compiled'))
    .pipe(browserSync.reload({
      stream: true
    }));
});
gulp.task('combine-css', function() {
  return gulp.src([output.css + '/compiled/main.css', output.css + '/compiled/blocks.css'])
    .pipe(sass().on('error', sass.logError))
    .pipe(cssnano({
      discardComments: {removeAll: true}
    }))
    .pipe(concat('style.css'))
    .pipe(gulp.dest(output.css))
    .pipe(browserSync.reload({
      stream: true
    }));
});

gulp.task('build-css', function() {
  runSequence('main-css', 'block-css', 'combine-css');
});

//Build Vendor JS
gulp.task('build-vendor-js', function() {
  return gulp.src([
    'js/vendor/*.js',
    'js/vendor/**/*.js',
  ])
  .pipe(concat('vendor.js'))
  .pipe(gulp.dest(output.compiled));
});

gulp.task('build-global', function() {
  return gulp.src(input.jsMaster + '/base.js')
    .pipe(gulp.dest(output.compiled));
});

gulp.task('build-blocks', function() {
  return gulp.src([input.blocksPath + '/**/**/*.js',input.blocksPath + '/**/*.js'])
    .pipe(concat('blocks.js'))
    .pipe(gulp.dest(output.compiled));
});

gulp.task('insert-blocks', function() {
  // Insert Block JS into Global JS file
  return gulp.src(output.compiled + '/base.js')
    .pipe(gfi({
      "/* blocks js */": output.compiled + "/blocks.js"
    }))
    .pipe(concat('main-with-blocks.js'))
    .pipe(gulp.dest(output.compiled));
});

// Generate the entire JS file
gulp.task('compile-js', function() {
  return gulp.src([output.compiled + '/vendor.js', output.compiled + '/main-with-blocks.js'])
    .pipe(concat('main.js'))
    .pipe(gulp.dest(output.js));
});

gulp.task('build-js', function() {
  runSequence('build-vendor-js', 'build-global', 'build-blocks', 'insert-blocks','compile-js');
});

// JShint
gulp.task('jshint', function() {
  return gulp.src(['/js/source/*.js', input.blocksPath + '/**/*.js'])
    .pipe(jshint())
    .pipe(jshint.reporter('default'));
});

// images
gulp.task('images', function () {
  gulp.src('images/source/*.{png,gif,jpg,svg}')
    .pipe(imagemin([
      imagemin.jpegtran({progressive: true}),
      imagemin.optipng({optimizationLevel: 5})
    ]))
    .pipe(gulp.dest('images'));
});


/**
 * WATCH!
 */
gulp.task('watch', function() {
  watch(['css/source/**/*.scss', 'css/source/style.scss','blocks/**/*.scss'], batch(function (events, done) {
    gulp.start('build-css', done);
  }));

  // Watch js in Primary js folder
  watch([input.jsMaster + '/base.js', 'js/vendor/*.js','js/vendor/**/*.js'], batch(function (events, done) {
    gulp.start('jshint', done);
    gulp.start('build-js', done);
  }));

  // Watch js in blocks
  watch([input.blocksPath + '/**/**/*.js', input.blocksPath + '/**/*.js'], batch(function (events, done) {
    //gulp.start('jshint', done);
    gulp.start('build-js', done);
  }));

  watch(input.imagesPath, batch(function (events, done) {
    gulp.start('images', done);
  }));
});

gulp.task('default', ['build-css', 'watch', 'browserSync', 'images']);