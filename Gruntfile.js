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
				src: 'dist/**/*{.html,.css}'
			}
		},
/*		*/copy: {
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
		}
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
	
	grunt.registerTask('dist', [
		'clean:build',
		'copy:build'
	]);
}