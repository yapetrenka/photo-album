'use strict';

module.exports = function() {
    $.gulp.task('copy.php', function() {
        return $.gulp.src($.path.template, { since: $.gulp.lastRun('copy.php') })
            .pipe($.gulp.dest($.config.root + '/template'));
    });
};