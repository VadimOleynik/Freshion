const gulp = require("gulp");
const autoprefixer = require("gulp-autoprefixer");
const server = require("browser-sync").create();
const sourcemaps = require("gulp-sourcemaps");
const gcmq = require("gulp-group-css-media-queries");
const	preproc = require("gulp-less");
const cleanCSS = require("gulp-clean-css");
const rename = require("gulp-rename");
const imagemin = require("gulp-imagemin");
const webp = require("gulp-webp");
const run = require("run-sequence");
const del = require("del");
const uglify = require('gulp-uglify');
const babel = require('gulp-babel');
const config = {
	src: "./src",
	dest: "./build",
	css: {
		watch: "/precss/**/*.less",
		src: "/precss/style.less",
		dest: "/css"
	},
	html: "/*.html",
	js: {
		src: "/js/**/*.js",
		dest: "/js"
	},
	img: { 
		src: "/img/**/*{png, jpg, svg}",
		webp: "/img/**/*{png, jpg}",
		dest: "/img"
	},
	fonts: {
		src: "/fonts/**/*.{woff,woff2}",
		dest: "/fonts"
	}
};


gulp.task("style", function() {
	gulp.src(config.src + config.css.src)
	.pipe(sourcemaps.init())
	.pipe(preproc())
	.pipe(gcmq())
	.pipe(autoprefixer({
		browsers: ["> 0.1%"],
		cascade: false
	}))
	.pipe(cleanCSS({
		level: 2,
		format: "beautify" 
	}))
	.pipe(sourcemaps.write("."))
	.pipe(gulp.dest(config.src + config.css.dest))
	.pipe(cleanCSS({
		level: 2
	}))
	.pipe(sourcemaps.write("."))
	.pipe(rename("style.min.css"))
	.pipe(gulp.dest(config.dest + config.css.dest))
	.pipe(server.stream());
});


gulp.task("serve", function() {
	server.init({
		server: config.src,
		notify: false,
		open: true,
		cors: true,
		ui: false
	});

	gulp.watch(config.src + config.css.watch, ["style"]);
	gulp.watch(config.src + config.html, server.reload);
	gulp.watch(config.src + config.js.src, server.reload);
});


gulp.task("images", () =>
	gulp.src(config.src + config.img.src)
	.pipe(imagemin([
		imagemin.optipng({optimizationLevel: 3}),
		imagemin.jpegtran({progressive: true}),
		imagemin.svgo()
		]))
	.pipe(gulp.dest(config.src + config.img.dest))
	);


gulp.task("webp", function () {
	gulp.src(config.src + config.img.webp)
	.pipe(webp({quality: 90}))
	.pipe(gulp.dest(config.src + config.img.dest));
});


gulp.task("copy", function () {
	return gulp.src([
		config.src + config.fonts.src,
		config.src + config.img.src,
		config.src + config.js.src
		], {
			base: config.src
		})
	.pipe(gulp.dest(config.dest));
});


gulp.task("script", function () {
	return gulp.src(config.src + config.js.src)
	.pipe(sourcemaps.init())
	.pipe(babel({
		presets: ['@babel/env']
	}))
	.pipe(uglify())
	.pipe(sourcemaps.write('.'))
	.pipe(gulp.dest(config.dest + config.js.dest));
});


gulp.task("clean", function () {
	return del("build");
});


gulp.task("build", function (done) {
	run("clean", "copy", "style", done)
});