/*!
 * tncBoilerplate
 * https://github.com/mavisland/tncBoilerplate
 * Copyright 2016 Tanju Yıldız
 * Licensed under MIT license (https://github.com/mavisland/tncBoilerplate/blob/master/LICENSE.md)
 */

'use strict';

/**
 * Load Plugins.
 *
 * Load gulp plugins and passing them semantic names.
 */
var gulp = require('gulp');

// CSS related plugins.
var autoprefixer = require('gulp-autoprefixer');
var cleanCSS     = require('gulp-clean-css');
var less         = require('gulp-less');

// JS related plugins.
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');

// Image realted plugins.
var cache    = require('gulp-cache');
var imageMin = require('gulp-imagemin');

// Utility related plugins.
var browserSync = require('browser-sync').create();
var reload      = browserSync.reload;
var header      = require('gulp-header');
var gutil       = require('gulp-util');
var notify      = require('gulp-notify');
var plumber     = require('gulp-plumber');
var rename      = require('gulp-rename');

// If node version is lower than v.0.1.2
require('es6-promise').polyfill();

// Set the banner content
var banner = ['/*',
  ' Theme Name:    Gülçocuk Anaokulu',
  ' Theme URI:     http://gulcocukanaokulu.k12.tr/',
  ' Description:   Gülçocuk Anaokulu Web Sitesi',
  ' Version:       1.1.0',
  ' Author:        Tanju Yıldız <ben@tanjuyildiz.com>',
  ' Author URI:    http://tanjuyildiz.com/',
  ' */',
  ''].join('\n');

/**
 * Task: `browser-sync`.
 *
 * Live Reloads, CSS injections, Localhost tunneling.
 */
gulp.task('browser-sync', function(){
  browserSync.init({
    // For more options
    // @link http://www.browsersync.io/docs/options/

    // Project URL.
    proxy: 'gulcocukanaokulu.dev',

    // `true` Automatically open the browser with BrowserSync live server.
    // `false` Stop the browser from automatically opening.
    open: true,

    // Inject CSS changes.
    // Commnet it to reload browser for every CSS change.
    injectChanges: true,

    // Use a specific port (instead of the one auto-detected by Browsersync).
    // port: 7000,
  } );
});

/**
 * Task: `styles`.
 *
 * Compiles Less, Autoprefixes it and Minifies CSS.
 */
gulp.task('styles', function(){
  return gulp.src(['src/styles/style.less'])
    .pipe(plumber(function(error) {
      // Output an error message
      gutil.log(gutil.colors.red('Error (' + error.plugin + '): ' + error.message));
      // emit the end event, to properly end the task
      this.emit('end');
    }))
    .pipe(less({
      paths: ["."] // Specify search paths for @import directives
    }))
    .pipe(autoprefixer('last 2 version', 'safari 5', 'ie 8', 'ie 9', 'opera 12.1', 'ios 6', 'android 4'))
    .pipe(gulp.dest('./'))
    // Minify compiled CSS
    .pipe(cleanCSS({
      compatibility: 'ie8',
      level: {
        1: {
          specialComments: 0
        }
      }
    }))
    .pipe(header(banner))
    .pipe(gulp.dest('./'))
    .pipe(reload({stream:true}))
    .pipe(notify({
      message: 'TASK: "styles" Completed! 💯',
      onLast: true
    }))
});

 /**
  * Task: `scripts`.
  *
  * Concatenate and uglify vendor JS scripts.
  */
gulp.task('scripts', function(){
  gulp.src([
    './src/components/bootstrap/js/bootstrap.min.js',
    './src/components/owl-carousel/owl.carousel.min.js',
    './src/components/fancybox/jquery.fancybox.pack.js',
    './src/components/isotope/isotope.min.js',
    './src/components/isotope/isotope-triger.min.js',
    // './src/components/countdown/jquery.syotimer.js',
    './src/components/selectbox/jquery.selectbox-0.1.3.min.js',
    './src/components/smoothscroll/SmoothScroll.min.js',
    './src/scripts/theme-custom.js'
  ])
    .pipe(plumber(function(error) {
      // Output an error message
      gutil.log(gutil.colors.red('Error (' + error.plugin + '): ' + error.message));
      // emit the end event, to properly end the task
      this.emit('end');
    }))
    .pipe(concat('scripts.js'))
    // Minify JS
    .pipe(uglify())
    .pipe(gulp.dest('./assets/js'))
    .pipe(reload({stream:true}))
    .pipe(notify({
      message: 'TASK: "scripts" Completed! 💯',
      onLast: true
    }))
});

/**
 * Task: `images`.
 *
 * Minifies PNG, JPEG, GIF and SVG images.
 *
 * This task will run only once, if you want to run it
 * again, do it with the command `gulp images`.
 */
gulp.task('images', function(){
  gulp.src(['src/images/**/*'])
    .pipe(plumber(function(error) {
      // Output an error message
      gutil.log(gutil.colors.red('Error (' + error.plugin + '): ' + error.message));
      // emit the end event, to properly end the task
      this.emit('end');
    }))
    .pipe(cache(imageMin({
      progressive: true,
      optimizationLevel: 3, // 0-7 low-high
      interlaced: true,
      svgoPlugins: [{removeViewBox: false}]
    })))
    .pipe(gulp.dest('./assets/images'))
    .pipe(reload({stream:true}))
    .pipe(notify({
      message: 'TASK: "images" Completed! 💯',
      onLast: true
    }))
});

/**
 * Task: `copy`.
 */
gulp.task('copy', ['copy:images', 'copy:fonts', 'copy:scripts']);

/**
 * Task: `copy:images`.
 *
 * Minifies PNG, JPEG, GIF and SVG images.
 *
 * This task will run only once, if you want to run it
 * again, do it with the command `gulp images`.
 */
gulp.task('copy:images', function(){
  gulp.src([
    "src/components/fancybox/images/*.{png,jpg,gif}",
    "src/components/jquery-ui/images/*.{png,jpg,gif}",
    "src/components/owl-carousel/images/*.{png,jpg,gif}",
    "src/components/seletbox/images/*.{png,jpg,gif}"
  ])
    .pipe(cache(imageMin({
      progressive: true,
      optimizationLevel: 3, // 0-7 low-high
      interlaced: true,
      svgoPlugins: [{removeViewBox: false}]
    })))
    .pipe(gulp.dest("./assets/images"))
    .pipe(reload({stream:true}))
    .pipe(notify({
      message: 'TASK: "copy:images" Completed! 💯',
      onLast: true
    }))
});

/**
 * Task: `copy:fonts`.
 */
gulp.task('copy:fonts', function(){
  return gulp.src([
    'src/components/bootstrap/fonts/*.{eot,svg,ttf,woff,woff2}',
    'src/components/font-awesome/fonts/*.{eot,svg,ttf,woff,woff2}'
  ])
    .pipe(gulp.dest("./assets/fonts"))
    .pipe(reload({stream:true}))
    .pipe(notify({
      message: 'TASK: "copy:fonts" Completed! 💯',
      onLast: true
    }));
});

/**
 * Task: `copy:scripts`.
 */
gulp.task('copy:scripts', function(){
  return gulp.src([
    './src/components/jquery/jquery.min.js',
    './src/components/jquery-ui/jquery-ui.min.js',
    './src/components/html5shiv/html5shiv.min.js',
    './src/components/respond/respond.min.js',
  ])
    .pipe(gulp.dest("./assets/js"))
    .pipe(reload({stream:true}))
    .pipe(notify({
      message: 'TASK: "copy:scripts" Completed! 💯',
      onLast: true
    }));
});

/**
  * Watch Tasks.
  *
  * Watches for file changes and runs specific tasks.
  */
gulp.task('default', ['copy', 'styles', 'scripts', 'images', 'browser-sync'], function(){
  // Reload on PHP file changes.
  gulp.watch('./**/*.php', reload);

  // Reload on LESS file changes.
  gulp.watch([
    'src/components/**/*.less',
    'src/styles/**/*.less'
  ], ['styles']);

  // Reload on Javascript file changes.
  gulp.watch('src/scripts/**/*.js', ['scripts']);

  // Reload on images changes.
  gulp.watch('src/images/**/*', ['images']);
});
