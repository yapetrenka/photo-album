'use strict';

module.exports = function() {
  $.gulp.task('watch', function() {
    $.gulp.watch('./source/template/**/*.php', $.gulp.series('copy.php'));
    $.gulp.watch('./source/js/**/*.js', $.gulp.series('js.process'));
    $.gulp.watch('./source/style/**/*.scss', $.gulp.series('sass'));
    $.gulp.watch('./source/images/**/*.*', $.gulp.series('copy.image'));
    $.gulp.watch('./source/images/icons/*.svg', $.gulp.series('svgSpriteBuild'));
    $.gulp.watch('./source/fonts/**/*.*', $.gulp.series('copy.fonts'));
  });
};
