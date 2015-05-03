module.exports = function(grunt){

  grunt.initConfig({
    // jsファイルを圧縮
    uglify: {
      js: {
        src: './js/pan-club.js',
        dest: './js/pan-club.min.js'
      }
    },
    // jsファイルを結合
    concat: {
      js: {
        src: [
          './js-src/nav.js', './js-src/carousel.js', './js-src/wow-conf.js', './js-src/top-page.js'
        ],
        dest: './js/pan-club.js'
      }
    },
    /*less: {
      options: {yuicompress: true},
      src: ['./less/theme.less', './less/products.less'],
      dest: './css/theme.css'
    },*/
    // lessのビルド
    less: {
      development: {
        options: {
          compress: false,
          yuicompress: false,
          optimization: 2
        },
        src: ["./less/pan-club.less", "./less/header.less","./less/top-page.less", "./less/products-page.less", "./less/category.less", './less/footer.less', './less/company.less'],
        dest: "./css/pan-club.css"
      }
    },
    // 監視対象
    watch: {
      less: {
        files: ['./less/*.less'],
        tasks: ['less']
      },
      js : {
        files: ['./js-src/*.js'],
        tasks: ['concat', 'uglify']
      }
    }
  });

  // 使用するプラグイン
  grunt.loadNpmTasks("grunt-contrib-less");
  grunt.loadNpmTasks("grunt-contrib-watch");
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-concat');

  // タスクの登録
  grunt.registerTask('default', ['less', 'concat', 'uglify', 'watch']);
}
