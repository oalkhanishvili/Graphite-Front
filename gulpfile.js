var gulp        = require('gulp');
var browserSync = require('browser-sync').create();
gulp.task('browser-sync', function() {
    browserSync.init(["assets"],{
        server: {
            baseDir: "assets/"
        }
    });
});

gulp.task('default', ['browser-sync']);