const path = require("path");
const gulp = require("gulp");
const sass = require("gulp-ruby-sass");
const sourcemaps = require("gulp-sourcemaps");
const sync = require("browser-sync").create();
const uglify = require("gulp-uglify-es").default;
const autoprefixer = require("gulp-autoprefixer");

const pathto = {
    scss: path.join(__dirname, "/scss"),
    css: path.join(__dirname, "/css"),
    js: path.join(__dirname, "/js"),
    paginas: path.join(__dirname, "/")
};

const glob = {
    sass: path.join(pathto.scss, "/**/*.{scss,sass}"),
    css: path.join(pathto.css, "/**/*.css"),
    js: path.join(pathto.js, "/**/*.js"),
    paginas: path.join(pathto.paginas, "/*.html")
};

gulp.task("sass:compile", () => {
    return sass(glob.sass, {
        style: "compressed",
        lineNumbers: true,
        sourcemap: true
    }) 
    .pipe(sourcemaps.write("."))
    .pipe(gulp.dest(pathto.css))
    .pipe(sync.stream(sync.stream()));
});

function jsCompile({ path }) {
    return gulp.src(path)
        .pipe(sourcemaps.init())
        .pipe(uglify())
        .pipe(sourcemaps.write("."))
        .pipe(gulp.dest("./public/js"))
        .pipe(sync.stream(sync.stream()));
}

gulp.task("compress", function() {
    return gulp.src(glob.js)
        .pipe(uglify())
        .on("error", function(err){ gutil.log(gutil.colors.red("[Error]"), err.toString()); })
        .pipe(rename({suffix: ".min"}))
        .pipe(gulp.dest(function(file) {
            return file.base;
        }));
});

gulp.task("sass:watch", () => {
    gulp.watch(glob.sass, ["sass:compile"]);
});

gulp.task("serve", () => {
    sync.init({
        /*server: {
            baseDir: "./"  
        }*/
        proxy: "localhost/siteitts/home.php"
    });

    gulp.watch(glob.sass, ["sass:compile"]);
    //gulp.watch(glob.css, ["css:compile"]);
    gulp.watch(glob.js).on("change",  jsCompile);
    gulp.watch(glob.paginas).on("change", sync.reload);
});

gulp.task("default", ["serve"]);

//proxy: "localhost/siteitts/home.php"
//proxy: "localhost:8080/wordpress/wp-content/themes/inttenso/home.php"