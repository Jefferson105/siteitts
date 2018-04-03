const path = require("path");
const gulp = require("gulp");
const sass = require("gulp-ruby-sass");
const sourcemaps = require("gulp-sourcemaps");
const sync = require("browser-sync").create();
const uglify = require("gulp-uglify-es").default;
const autoprefixer = require("gulp-autoprefixer");

const pathto = {
    scss: path.join(__dirname, "/scss"),
    css: path.join(__dirname, "/css")
};

const glob = {
    sass: path.join(pathto.scss, "/**/*.{scss,sass}"),
    css: path.join(pathto.css, "/**/*.css")
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

gulp.task("sass:watch", () => {
    gulp.watch(glob.sass, ["sass:compile"]);
});

gulp.task("serve", () => {
    sync.init({
        proxy: "http://inttensofoods.com.br"
    });

    gulp.watch(glob.sass, ["sass:compile"]);
    //gulp.watch(glob.css, ["css:compile"]);
});

gulp.task("default", ["serve"]);

//proxy: "localhost/siteitts/home.php"
//proxy: "localhost:8080/wordpress/wp-content/themes/inttenso/home.php"
//proxy: "localhost:8080/wordpress/"