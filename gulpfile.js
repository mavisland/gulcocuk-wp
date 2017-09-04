/*!
 * tncBoilerplate
 * https://github.com/mavisland/tncBoilerplate
 * Copyright 2016 Tanju Yıldız
 * Licensed under MIT license (https://github.com/mavisland/tncBoilerplate/blob/master/LICENSE.md)
 */

'use strict';

// Required packages
var gulp         = require('gulp');
var browserSync  = require('browser-sync').create();
var autoPrefixer = require('gulp-autoprefixer');
var cache        = require('gulp-cache');
var cleanCss     = require('gulp-clean-css');
var concat       = require('gulp-concat');
var header       = require('gulp-header');
var imageMin     = require('gulp-imagemin');
var jshint       = require('gulp-jshint');
var less         = require('gulp-less');
var notify       = require('gulp-notify');
var plumber      = require('gulp-plumber');
var reload       = browserSync.reload;
var rename       = require('gulp-rename');
var uglify       = require('gulp-uglify');

// If node version is lower than v.0.1.2
require('es6-promise').polyfill();

// Set the banner content
var banner = ['/*',
  ' Theme Name:    Atiker Konyaspor',
  ' Theme URI:     http://www.konyaspor.org.tr/',
  ' Description:   Atiker Konyaspor Web Sitesi',
  ' Version:       1.0.0',
  ' Author:        Tanju Yildiz <tanju@themediatix.com>',
  ' Author URI:    http://themediatix.com/',
  ' */',
  ''].join('\n');

// Browsers you care about for autoprefixing.
// Browserlist https://github.com/ai/browserslist
var AUTOPREFIXER_BROWSERS = [
  'last 2 version',
  '> 1%',
  'ie >= 9',
  'ie_mob >= 10',
  'ff >= 30',
  'chrome >= 34',
  'safari >= 7',
  'opera >= 23',
  'ios >= 7',
  'android >= 4',
  'bb >= 10'
];

// Compile LESS files from /less into /css
gulp.task('less',function(){
  gulp.src(['src/styles/**/*.less'])
    .pipe(plumber({
      handleError: function (err) {
        console.log(err);
        this.emit('end');
      }
    }))
    .pipe(less({
      paths: ["."] // Specify search paths for @import directives
    }))
    .pipe(autoprefixer(AUTOPREFIXER_BROWSERS))
    .pipe(gulp.dest('./'))
    .pipe(rename({
      suffix: '.min'
    }))
    // Minify compiled CSS
    .pipe(cleanCSS({
      compatibility: 'ie8',
      keepSpecialComments: 0
    }))
    .pipe(header(banner))
    .pipe(gulp.dest('./'))
    .pipe(reload())
    .pipe(notify('Compiled LESS files to CSS files.'))
});

// Concatenates JS files and minified
gulp.task('js', function(){
  gulp.src(['src/scripts/**/*.js'])
    .pipe(plumber({
      handleError: function (err) {
        console.log(err);
        this.emit('end');
      }
    }))
    .pipe(concat('scripts.js'))
    .pipe(jshint())
    .pipe(jshint.reporter('default'))
    .pipe(gulp.dest('./js/'))
    .pipe(rename({
      suffix: '.min'
    }))
    // Minify JS
    .pipe(uglify())
    .pipe(gulp.dest('./js/'))
    .pipe(reload())
    .pipe(notify('Minified JS files.'))
});

gulp.task('html',function(){
  gulp.src(['html/**/*.html'])
    .pipe(plumber({
      handleError: function (err) {
        console.log(err);
        this.emit('end');
      }
    }))
    .pipe(gulp.dest('./'))
    .pipe(reload())
    .pipe(notify('html task finished'))
});

gulp.task('image',function(){
  gulp.src(['src/images/**/*'])
    .pipe(plumber({
      handleError: function (err) {
        console.log(err);
        this.emit('end');
      }
    }))
    .pipe(cache(imageMin()))
    .pipe(gulp.dest('./images'))
    .pipe(reload())
    .pipe(notify('image task finished'))
});

// Run everything
gulp.task('default',function(){
  browserSync.init({
    server: "./"
  });
  gulp.watch('src/scripts/**/*.js', ['js']);
  gulp.watch('src/styles/**/*.less', ['less']);
  gulp.watch('html/**/*.html', ['html']);
  gulp.watch('src/images/**/*', ['image']);
});
