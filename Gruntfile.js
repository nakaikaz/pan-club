module.exports = function(grunt){

  grunt.initConfig({
    // jsファイルを圧縮
    uglify: {
      basic: {
        src: './js/pan-club.js',
        dest: './js/pan-club.min.js'
      },
      loader: {
        src: 'js/loader.js',
        dest: 'js/loader.min.js'
      }
    },
    // jsファイルを結合
    concat: {
      basic: {
        src: [
          'js-src/imageLoader.js', './js-src/header.js', './js-src/carousel.js', './js-src/wow-conf.js', './js-src/fancybox-handler.js'
        ],
        dest: './js/pan-club.js'
      },
      loader : {
        src: ['js-src/imageLoader.js'],
        dest: 'js/loader.js'
      }
    },
    // lessのビルド
    less: {
      development: {
        options: {
          compress: false,
          yuicompress: false,
          optimization: 2
        },
        src: ["./less/pan-club.less", "./less/header.less","./less/top-page.less", './less/about-page.less',
            "./less/products-page.less", './less/order-page.less', './less/footer.less',
            './less/company-page.less', './less/recruit-page.less', './less/news-page.less'],
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
