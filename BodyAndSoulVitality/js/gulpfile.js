var gulp = require('gulp');
var autoprefixer = require('gulp-autoprefixer');

gulp.task('style-prefix', function() {
    gulp.src('../css/index_style.css').pipe(autoprefixer()).pipe(gulp.dest('../css/'))

});

gulp.task('watch', function () {
   gulp.watch('../css/index_style.css', ['style-prefix'])
});