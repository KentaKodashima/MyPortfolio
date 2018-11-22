var gulp = require('gulp');
var sass = require('gulp-sass');

// Where to put Scss files and compiled CSS files
gulp.task('sass', function(){
  gulp.src(['./scss/**/*.scss', '!./scss/style.scss'])
    .pipe(sass({outputStyle: 'expanded'}))
    .pipe(gulp.dest('./css/'));
  gulp.src('./scss/style.scss')
    .pipe(sass({outputStyle: 'expanded'}))
    .pipe(gulp.dest('./'));
});

// Create auto-watch task named "sass-watch"
gulp.task('sass-watch', ['sass'], function(){
  var watcher = gulp.watch('./scss/**/*.scss', ['sass']);
  watcher.on('change', function(event) {
  });
});

// "sass-watch" would be executed by just typing "gulp"
gulp.task('default', ['sass-watch']);
