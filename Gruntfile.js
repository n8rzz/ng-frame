'use strict';

module.exports = function(grunt) {
    // Time how long tasks take. Can help when optimizing build times
    require('time-grunt')(grunt);
	require('matchdep').filterDev('grunt-*').forEach(grunt.loadNpmTasks);

	var config = {
		dev: 'dev',
		dist: 'dist'
	}

	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		
		config: config,

		express: {
			all: {
				options: {
					port: 9000,
					hostname: "0.0.0.0",
					bases: ['dev'],
					livereload: true,
				}
			}
		},
		clean: {
			bower: {
				src: [
					'dev/styles/vendor/**',
					'dev/js/vendor/**',
					'dev/fonts/**'
				]
			},
			sass: {
				src: [
					'.sass-cache',
					'dev/.sass-cache'
				]
			},
			build: {
				src: 'dist/**/*'
			}
		},
		copy: {
			bower: {
				files: [{
					expand: true,
					cwd: 'bower_components/bootstrap-sass-official/assets/stylesheets/',
					src: '**',
					dest: 'dev/styles/vendor/'
				},
				{
					expand: true,
					cwd: 'bower_components/bootstrap-sass-official/assets/fonts/',
					src: '**',
					dest: 'dev/fonts/'
				},
				{
					expand: true,
					cwd: 'bower_components/bootstrap-sass-official/assets/javascripts/',
					src: '**',
					dest: 'dev/js/vendor/',
					flatten: true		
				}]
			},
			build: {
				files: [{
					expand: true,
					cwd: '<%= config.dev %>',
					dest: '<%= config.dist %>',
					src: [
						'*.{html,css}'
					]
				}]
			}	
		}, 
		sass: {
			dist: {
				files: {
					'dev/style.css' : 'dev/styles/style.scss'
				}
			}
		},
		watch: { 			 
			css: {
				files: ['dev/styles/**/*.scss'], 
				tasks: ['sass:dist'], //'clean:sass',
				options: {
					livereload: true
				}
			},
			html: {
				files: 'dev/**/*.html',
				options: {
					livereload: true
				}
			}
		},
		open: {
			all: {
				path: 'http://localhost:<%= express.all.options.port%>/index.html'
			}
		},

/*		useminPrepare: {
			options: {
				dest: '<%= config.dist %>'
			},
			html: '<%= config.dev %>',
		},
		usemin: {
			options: {
				assetsDirs: ['<%= config.dist %>', '<%= config.dist %>/images' ]
			},
*/ //			html: ['<%= config.dist %>/{,*/}*.html'],
//			css: [],
//		},

//		htmlmin: {
//			dist: {
//				options: {
//                    collapseBooleanAttributes: true,
//                    collapseWhitespace: true,
//                    removeCommentsFromCDATA: true,
//                    useShortDoctype: true
//                },
//                files: {
//					'<%= config.dist %>/boilerplate.html' : '<%= config.dev %>/biolerplate.html',
//                	'<%= config.dist %>/index.html' : '<%= config.dev %>/index.html',
//                	'<%= config.dist %>/post.html' : '<%= config.dev %>/post.html',
//                	'<%= config.dist %>/page.html' : '<%= config.dev %>/page.html',
//                	'<%= config.dist %>/category.html' : '<%= config.dev %>/category.html'
//                }
//			}
//		}
	});

	grunt.registerTask('default', [ 'watch' ]);
	
	grunt.registerTask('bower-build', [ 
		'clean:bower',
		'copy:bower',
		'sass'
	]);

	grunt.registerTask('server', [
		'express',
		'open',
		'watch'
	])
	
	grunt.registerTask('build', [
		'clean:build',
		'copy:build',
//		'useminPrepare',
//		'usemin',
//		'htmlmin'
	]);
}