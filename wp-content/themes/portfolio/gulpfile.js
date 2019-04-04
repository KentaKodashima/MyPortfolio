var gulp = require('gulp');
var sass = require('gulp-sass');
var plumber = require('gulp-plumber');
var merge = require('merge-stream');

// Where to put Scss files and compiled CSS files
gulp.task('sass', function () {
  let scssFiles = gulp.src(['./scss/**/*.scss', '!./scss/style.scss'])
    .pipe(plumber())
    .pipe(sass({ outputStyle: 'expanded' }))
    .pipe(gulp.dest('./css/'));

  let styleScssFile = gulp.src('./scss/style.scss')
    .pipe(plumber())
    .pipe(sass({ outputStyle: 'expanded' }))
    .pipe(gulp.dest('./'));

  return merge(scssFiles, styleScssFile);
});

// Create auto-watch task named "sass-watch"
gulp.task('sass-watch', gulp.series('sass', function (done) {
  var watcher = gulp.watch('./scss/**/*.scss', gulp.task('sass'));
  watcher.on('change', function (event) {
  });
  
  done()
}));

// "sass-watch" would be executed by just typing "gulp"
gulp.task('default', gulp.series('sass-watch'));
