//Variables
var gulp = require('gulp')

var sass = require('gulp-sass')
var sourcemaps = require('gulp-sourcemaps')
var prettier = require('gulp-prettier')
var replace = require('gulp-replace')

//File Paths
var sassFiles = 'source/scss/**/*.scss',
	mainSassFile = 'source/scss/style.scss',
	cssFiles = '.',
	sourceMaps = '/source/maps',
	styleSheet = '/wp-content/themes/blackboxcakery/style.css'
currentDate = new Date().toISOString()

//Compile main sass into css
function sassy() {
	return gulp
		.src(mainSassFile)
		.pipe(sourcemaps.init())
		.pipe(sass().on('error', sass.logError)) //Using gulp-sass
		.pipe(sourcemaps.write('/source/maps'))
		.pipe(gulp.dest(cssFiles))
}

//Watch for changes in sass files and running sass compile
function watch() {
	gulp.watch(sassFiles, sassy)
}

function styleVersion() {
	var thisVersion = styleSheet + '?v=' + currentDate

	return gulp
		.src(['header.php'])
		.pipe(replace(styleSheet, thisVersion))
		.pipe(gulp.dest('./'))
}

exports.sassy = sassy
exports.watch = watch
exports.styleVersion = styleVersion
