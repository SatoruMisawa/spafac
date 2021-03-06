const gulp = require('gulp');
const sass = require('gulp-sass');

gulp.task('sass', function() {
    gulp.src('./sass/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./'));
});

gulp.task('sass:watch', function() {
    gulp.watch('./sass/**/*.scss', ['sass']);
    watcher.on('change', function(event) {
    });
});

gulp.task('default',  ['sass:watch']);