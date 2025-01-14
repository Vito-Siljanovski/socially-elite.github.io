module.exports = function (grunt) {

    require('load-grunt-tasks')(grunt);

    var PathConfig = require('./grunt-settings.js');
    const sass = require('sass');

    // tasks
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        config: PathConfig,

        //clean files
        clean: {
            options: { force: true },
            temp: {
                src: [
                    "<%= config.cssDir %>**/*.map",
                    "<%= config.cssMainFileDir %>**/*.map",
                    "./jpgtmp.jpg"
                ]
            }
        },

        /** watch file changes */
        watch: {
            options: {
                debounceDelay: 1,
                spawn: false
            },
            images: {
                files: ['<%= config.imgSourceDir %>**/*.*'],
                tasks: ['newer:copy:images', 'bsReload:all']
            },
            css: {
                files: ['<%= config.sassDir %>**/*.scss'],
                tasks: ['sass:dev', 'cmq:dev', 'autoprefixer:dev', 'cssmin:dev', 'bsReload:css']
            },
            js: {
                files: ['<%= config.jsSourceDir %>**/*.js'],
                tasks: ['babel', 'uglify', 'bsReload:all']
            },

        },

        /** Keep multiple browsers & devices in sync when building websites. */
        browserSync: {
            dev: {
                bsFiles: {
                    src: ['*.html','*/**.html', '*.php','*/**.php', '*/**.css', '*/**.scss','*/**.js']
                },
                options: {
                    proxy: '<%= config.proxy %>',
                    host: '<%= config.host %>',
                    open: 'external',
                    watchTask: true,
                    background: true
                }
            }
        },

        bsReload: {
            css: {
                reload: '<%= config.cssMainFileDir %><%= config.cssMainFileName %>.min.css'
            },
            all: {
                reload: true
            }
        },

        /** copy images and external css files from resources dir to destination dir */
        copy: {
            images: {
                expand: true,
                cwd: '<%= config.imgSourceDir %>',
                src: '**',
                dest: '<%= config.imgDir %>',
                filter: 'isFile',
            },
            css: {
                expand: true,
                cwd: '<%= config.externalCssDir %>',
                src: '*',
                dest: '<%= config.cssMainFileDir %>',
                filter: 'isFile'
            }
        },

        /** IMAGE OPTIMIZATION TASKS START */

        image: {
            dynamic: {
                files: [{
                    expand: true,
                    cwd: '<%= config.imgDir %>',
                    src: ['**/*.{png,jpg,gif,svg}'],
                    dest: '<%= config.imgDir %>'
                }]
            }
        },

        /** IMAGE OPTIMIZATION TASKS END */

        /** CSS TASKS START */

        // compile sass to css
        sass: {
            options: PathConfig.hasBower,
            dev: {
                options: {
                    implementation: sass,
                    sourceMap: true
                },
                files: {
                    '<%= config.cssDir %><%= config.cssMainFileName %>.css': '<%= config.sassDir %><%= config.sassFileName %>.scss',
                    '<%= config.cssMainFileDir %><%= config.cssMainFileName %>.css': '<%= config.sassDir %><%= config.sassFileName %>.scss'
                }
            },
            dist: {
                options: {
                    implementation: sass,
                    sourceMap: false,
                    style: 'nested',
                    expand: true
                },
                files: {
                    '<%= config.cssDir %><%= config.cssMainFileName %>.css': '<%= config.sassDir %><%= config.sassFileName %>.scss',
                    '<%= config.cssMainFileDir %><%= config.cssMainFileName %>.css': '<%= config.sassDir %><%= config.sassFileName %>.scss'
                }
            }
        },

        // create css maps
        autoprefixer: {
            dev: {
                src: [
                    '<%= config.cssDir %><%= config.cssMainFileName %>.css',
                    '<%= config.cssMainFileDir %><%= config.cssMainFileName %>*.css'
                ]
            },
            dist: {
                src: [
                    '<%= config.cssMainFileDir %><%= config.cssMainFileName %>.css',
                ]
            }
        },

        // combine media queries
        cmq: {
            options: {
                log: false,
                expand: true
            },
            dev: {
                files: {
                    '<%= config.cssDir %><%= config.cssMainFileName %>.css': '<%= config.cssDir %><%= config.cssMainFileName %>.css',
                    '<%= config.cssMainFileDir %><%= config.cssMainFileName %>.css': '<%= config.cssDir %><%= config.cssMainFileName %>.css'
                },
            },
            dist: {
                files: {
                    '<%= config.cssDir %><%= config.cssMainFileName %>.css': '<%= config.cssDir %><%= config.cssMainFileName %>.css'
                },
            }
        },

        // minify final css
        cssmin: {
            options: {
                expand: true
            },
            dev: {
                files: {
                    '<%= config.cssDir %>main.min.css': '<%= config.cssMainFileDir %>main.css',
                    '<%= config.cssMainFileDir %>main.min.css': '<%= config.cssMainFileDir %>main.css'
                }
            },
            dist: {
                files: {
                    '<%= config.cssMainFileDir %>main.min.css': '<%= config.cssMainFileDir %>main.css'
                }
            }
        },

        // purge unused css from final css file
        purgecss: {
            target: {
                options: {
                    content: ['**/*.html','**/*.php', '**/*.js'],
                    whitelist: ['aos', 'fancybox', 'swiper', 'parsley'],
                    whitelistPatterns: [/^aos/, /^fancybox/, /^swiper/, /^parsley/]
                },
                files: {
                    '<%= config.cssMainFileDir %>main.css': ['<%= config.cssDir %>main.css']
                }
            }
        },

        /** CSS TASKS END */

        /** JS TASKS START */

        // Transpile JS to older / more widely supported syntax
        babel: {
            options: {
                presets: ["@babel/preset-env",]
            },
            main: {
                expand: true,
                cwd: '<%= config.jsDir %>',
                src: '<%= config.jsMainFileName %>.js',
                dest: '<%= config.jsDir %>'
            }
        },

        // minify final JS files
        uglify: {
            files: {
                src: '<%= config.jsSourceDir %>*.js',  // source files mask
                dest: '<%= config.jsDir %>',    // destination folder
                expand: true,    // allow dynamic building
                flatten: true,   // remove all unnecessary nesting
                ext: '.min.js'   // replace .js to .min.js
            },
        }

        /** JS TASKS END */
    });


    //css for development (no purge css)
    grunt.registerTask('css-dev', ['sass:dev', 'cmq:dev', 'autoprefixer:dev', 'cssmin:dev']);

    //css beautiful (for distribution - with purge css)
    grunt.registerTask('cssbeauty', ['sass:dist', 'cmq:dist', 'autoprefixer:dist', 'purgecss', 'cssmin:dist']);

    //img minify
    grunt.registerTask('imgmin', ['copy:images','image']);


    /**
     * Main tasks
     * grunt build - first project build
     * grunt - watch and browsersync
     * grunt dist - ready for distribution
     * */

    //first build
    grunt.registerTask('build', ['css-dev', 'babel', 'uglify', 'imgmin', 'copy:css']);

    //watch + browser sync
    grunt.registerTask('default', ['browserSync', 'watch']);

    //final build - images
    grunt.registerTask('dist-images', ['imgmin']);

    //final build - js
    grunt.registerTask('dist-js', ['babel', 'uglify']);

    //final build - css
    grunt.registerTask('dist-css', ['clean:temp', 'cssbeauty', 'copy:css']);

    //final build - full
    grunt.registerTask('dist', ['clean:temp', 'imgmin', 'cssbeauty', 'babel', 'uglify', 'copy:css']);

};
