const gulp = require("gulp");
const autoprefixer = require("gulp-autoprefixer");
const server = require("browser-sync").create();
const gcmq = require("gulp-group-css-media-queries");
const plumber = require("gulp-plumber");
const	preproc = require("gulp-less");
const cleanCSS = require("gulp-clean-css");
const rename = require("gulp-rename");
const imagemin = require("gulp-imagemin");
const webp = require("gulp-webp");
const run = require("run-sequence");
const del = require("del");
const uglify = require("gulp-uglify");
const htmlmin = require("gulp-htmlmin");
const babel = require("gulp-babel");
const concat = require('gulp-concat');
const config = {
	src: "./src",
	dest: "./build",
	css: {
		watch: "/precss/**/*.less",
		src: ["./src/precss/style.less", "!./src/precss/style-for-ie.less"],
		ie: "/precss/style-for-ie.less",
		dest: "/css"
	},
	html: "/*.html",
	js: {
		src: "/js/**/*.js",
		dest: "/js"
	},
	img: { 
		src: "/**/*.{png,jpg,jpeg,svg,webp}",
		webp: "/img/**/*.{png,jpg}",
		dest: "/img"
	},
	fonts: {
		src: "/fonts/**/*.{woff,woff2}",
		dest: "/fonts"
	},
	php: "/**/*.php",
	txt: "/**/*.txt",
};


gulp.task("style", function() {
	gulp.src(config.css.src)
	.pipe(plumber())
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
	.pipe(gulp.dest(config.src + config.css.dest))
	.pipe(cleanCSS({
		level: 2
	}))
	.pipe(rename("style.min.css"))
	.pipe(gulp.dest(config.dest + config.css.dest))
	.pipe(server.stream());
});


gulp.task("style-ie", function() {
	gulp.src(config.src + config.css.ie)
	.pipe(plumber())
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
	.pipe(gulp.dest(config.src + config.css.dest))
	.pipe(cleanCSS({
		level: 2
	}))
	.pipe(rename("style-for-ie.min.css"))
	.pipe(gulp.dest(config.dest + config.css.dest))
	.pipe(server.stream());
});


gulp.task("serve", function(done) {
	server.init({
		proxy: "freshion/",
		notify: false,
		open: true,
		cors: true,
		ui: false
	});

	gulp.watch(config.src + config.css.watch, ["style", "style-ie"]);
	gulp.watch(config.src + config.html, ["html"]);
	gulp.watch(config.src + config.js.src, ["script"]);
	gulp.watch(config.src + config.php, ["php"]);
});


gulp.task("html", function() {
	return gulp.src(config.src + config.html)
	.pipe(plumber())
	.pipe(htmlmin({collapseWhitespace: true}))
	.pipe(gulp.dest(config.dest))
	.pipe(server.stream());
});


gulp.task("php", function() {
	return gulp.src(config.src + config.php)
	.pipe(plumber())
	.pipe(htmlmin({collapseWhitespace: true, 
		ignoreCustomFragments: [ /<%[\s\S]*?%>/, /<\?[=|php]?[\s\S]*?\?>/]}))
	.pipe(gulp.dest(config.dest))
	.pipe(server.stream());
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
		config.src + config.html,
		config.src + config.txt
		], {
			base: config.src
		})
	.pipe(gulp.dest(config.dest));
});


gulp.task("script", function (done) {
	return gulp.src(config.src + config.js.src)
	.pipe(plumber())
	.pipe(babel({
		presets: ["@babel/env"]
	}).on("error", console.error.bind(console)))
	.pipe(concat("scripts.js"))
	.pipe(uglify())
	.pipe(rename({suffix: ".min"}))
	.pipe(gulp.dest(config.dest + config.js.dest))
	.pipe(server.stream());
});


gulp.task("clean", function () {
	return del("build");
});


gulp.task("build", function (done) {
	run("clean", "copy", "php", "style", "style-ie", "script", done)
});
