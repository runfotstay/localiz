"use strict";

const gulp = require("gulp");
const autoprefixer = require("autoprefixer");
const sass = require("gulp-sass");
const cssnano = require("cssnano");
const plumber = require("gulp-plumber");
const postcss = require("gulp-postcss");


function css() {
    return gulp
        .src("scss/style.scss")
        .pipe(plumber())
        .pipe(sass({outputStyle: "compressed"}))
        .pipe(postcss([autoprefixer(), cssnano()]))
        .pipe(gulp.dest('dist/'))
}

function watchFiles() {
    gulp.watch([
        'scss/*.scss',
        'scss/*/*.scss'
    ], css);
}

const build = gulp.series(css);
const watch = gulp.parallel(watchFiles, css);

exports.css = css;

exports.build = build;
exports.watch = watch;
exports.default = build;

