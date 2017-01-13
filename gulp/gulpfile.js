/**
 * Created by 你大爷 on 2017/1/13.
 */
var gulp =require("gulp");     //先依赖一个gulp
var sass=require("gulp-sass");    //sass是自己定义的名字。然后下面写就是这样写
var connect=require("gulp-connect");
var concat=require("gulp-concat");
var uglify=require("gulp-uglify");
var rename=require("gulp-rename");

gulp.task("copy",function(){       //copy是自己定义的,随便取名字pipe(sass())
    gulp.src("src/index.html").pipe(gulp.dest("dist")).pipe(connect.reload());   //通过gulp找到要被执行的任务，然后再通过pipe复制到需要的文件夹下。 通过pipe管道放到dist这个文件夹
});

gulp.task("copy1",function(){        //这个相当于复制啦。
    gulp.src("src/index2.html").pipe(gulp.dest("dist"));
});

gulp.task("copy2",function(){
    gulp.src("src/index*.html").pipe(gulp.dest("dist"));    //可以一次性复制多个html
});

gulp.task("copy-img",function(){
    gulp.src("src/images/*.{jpg,png}").pipe(gulp.dest("dist/images"));    //*指的是第一个文件夹
});

gulp.task("copy-all",function(){
    gulp.src("src/images/**/*.jpg").pipe(gulp.dest("dist/images"));      //**指的是所有文件夹
});

gulp.task("copy-png",function(){
    gulp.src(["src/images/**/*.png","!src/images/**/f1.png"]).pipe(gulp.dest("dist/images"));   //记得加中括号。
});

gulp.task("watch",function(){          //watch名字随便取      监听
    gulp.watch("src/index.html",["copy"]);
});

gulp.task("watch1",function(){
    gulp.watch("src/index2.html",["copy1"]);
});

gulp.task("watch2",function(){
    gulp.watch("src/index*.html",["copy2"]);       //这个可以这么写       可以一次性监听多个html
});

gulp.task("sass",function(){
   gulp.src("src/sass/style.scss").pipe(sass()).pipe(gulp.dest("dist/css"));
});

gulp.task("server",function(){     //server是固定的     必须开一个服务
    connect.server({          //connect是上面定义好的名字。
        root:"dist",
        port:8888,
        livereload:true
    })
});

gulp.task("watch-html",["server","watch"]);      //任务以来于server和watch

gulp.task("concat",function(){                //可以连接两个js文件 是一个数组。
    gulp.src(["src/js/test1.js","src/js/test2.js"])    //用数组把两个js文件合并起来，这个就是先找到两个页面。
        .pipe(concat("main.js")).pipe(gulp.dest("dist/js"))     //然后concat就是合并前面找到的文件为一个，再通过pipe(gulp.dest("dist/js"))这个安装到dist下。
        .pipe(uglify()).pipe(rename("main.min.js")).pipe(gulp.dest("dist/js"));    //uglify压缩，rename合并   再放到dist/js
});





gulp.task("copy4",function(){
    gulp.src("src/index.html").pipe(gulp.dest("dist")).pipe(connect.reload());
});
gulp.task("watch-copy4",function(){
   gulp.watch("src/index.html",["copy4"]);
});
gulp.task("sass-work",function(){
   gulp.src("src/sass/work.scss").pipe(sass()).pipe(gulp.dest("dist/css")).pipe(connect.reload());
});
gulp.task("watch-sass",function(){
   gulp.watch("src/sass/work.scss",["sass-work"]);
});
gulp.task("work-js",function(){
    gulp.src("src/js/work.js").pipe(gulp.dest("dist/js")).pipe(connect.reload());
});
gulp.task("watch-workjs",function(){
    gulp.watch("src/js/work.js",["work-js"]);
});
gulp.task("watch-work",["server","watch-copy4","watch-sass","watch-workjs"]);



