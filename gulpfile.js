var gulp         = require('gulp'),
	sass         = require('gulp-sass')(require('sass')),
	autoprefixer = require('gulp-autoprefixer'),
	cleanCSS     = require('gulp-clean-css'),
	rename       = require('gulp-rename'),
	browserSync  = require('browser-sync').create(),
	concat       = require('gulp-concat'),
	uglify       = require('gulp-uglify-es').default,
	src_folder = './assets/';

gulp.task('browser-sync', function() {
	browserSync.init({
		proxy: "flagmanstom.loc",
		notify: false,
	});
});
function bsReload(done) { browserSync.reload(); done() };

gulp.task('styles', function () {
	return gulp.src(src_folder + 'sass/style.sass', {
		allowEmpty: true
	})
		.pipe(sass({
		}).on('error', sass.logError))
		//.pipe(rename({suffix: '.min', prefix : ''}))
		.pipe(autoprefixer({
			overrideBrowserslist: ['last 10 versions']
		}))
		.pipe(cleanCSS())
		.pipe(gulp.dest('./'))
		.pipe(browserSync.stream());
});

gulp.task('scripts', function() {
	return gulp.src([
		src_folder + 'js/main.js',
	], {
		allowEmpty: true
	})
		.pipe(concat('main.min.js'))
		.pipe(uglify())
		.pipe(gulp.dest('./'))
		.pipe(browserSync.reload({ stream: true }));
});



gulp.task('code', function() {
	return browserSync.reload({ stream: true })
});

gulp.task('watch', function () {
	gulp.watch(src_folder + 'sass/**/*.*', gulp.parallel('styles'));
	gulp.watch(src_folder +'js/**/*.js', gulp.parallel('scripts'));
	gulp.watch( './**/*.php').on('change', browserSync.reload);
});

//gulp.task('default', gulp.parallel('styles', 'scripts', 'code', 'browser-sync', 'watch'));
gulp.task('default', gulp.parallel('browser-sync', 'watch'));