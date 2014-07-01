'use strict';

module.exports = function(grunt) {
    // Time how long tasks take. Can help when optimizing build times
    require('time-grunt')(grunt);
	require('matchdep').filterDev('grunt-*').forEach(grunt.loadNpmTasks);

	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		
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
			sass: {
				src: [
					'.sass-cache',
					'dev/.sass-cache'
				]
			}
		},
		copy: {
			build: {
				files: [{
					cwd: 'bower_components/bootstrap-sass-official/vendor/assets/stylesheets/bootstrap.scss',
					src: 'dev/styles/',
				},
				{
					cwd: 'bower_components/bootstrap-sass-official/vendor/assets/fonts/*',
					src: 'dev/fonts'
				}]
			}
		},/*
		sass: {
			dist: {
				files: {
					'style.css' : 'dev/styles/style.scss'
				}
			}
		},*/
		watch: { 			 
			css: {
				files: ['dev/style.css'], //, 'dev/styles/**/*.scss'
				// tasks: ['sass:dist'], 'clean:sass',
				options: {
					livereload: true
				}
			},
			html: {
				files: 'dev/**/*.html',
				options: {
					livereload: true
				}
			},
			config: {
				files: ['package.json', 'Grunfile.js'],
				options: {
					livereload: true
				}
			}
		},
		open: {
			all: {
				path: 'http://localhost:<%= express.all.options.port%>/index.html'
			}
		}
	});

	grunt.registerTask('default', [ 'watch' ]);
	
	grunt.registerTask('server', [
		'express',
		'open',
		'watch'
	])

	grunt.registerTask('ibuild', [ 'copy:build' ]);
	
	grunt.registerTask('build', [ 'sass' ]);
}