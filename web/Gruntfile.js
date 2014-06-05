module.exports = function(grunt) {

	grunt.initConfig({
		pkg: grunt.file.readJSON( 'package.json' ),

		watch: {
			scss: {
				files: ['templates/scss/**/*.scss'],
				tasks: 'sass'
			},
			js: {
				files: ['templates/js/**/*.js'],
				tasks: ['uglify']
			},
			livereload: {
				options: {
					livereload: true
				},
				files: [
					'assets/css/{,*/}*.css',
					'assets/js/{,*/}*.js'
				]
			}
		},

		sass: {
			options: {
				includePaths: ['bower_components/foundation/scss']
			},
			dist: {
				options: {
					outputStyle: 'compressed'
				},
				files: {
					'assets/css/app.css': 'templates/scss/app.scss'
				}        
			}
		},

		uglify: {
			options: {
				mangle: {
					except: ['jquery', 'lazyload']
				}
			},
			my_target: {
				files: {
					'assets/js/main.min.js': ['bower_components/jquery/dist/jquery.min.js', 'bower_components/foundation/js/foundation.min.js', 'templates/js/lazyload.js', 'templates/js/app.js'],
					'assets/js/contact.min.js': ['templates/js/email-ajax.js'],
					'assets/js/modernizr.min.js': ['bower_components/modernizr/modernizr.js']
				}
			}
		},

	});

	// Default task
	grunt.registerTask('default', ['sass', 'uglify']);

	require('matchdep').filterDev('grunt-*').forEach(grunt.loadNpmTasks);
};
