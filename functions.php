<?php
	function theme_css_scripts() {
	  	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/front-end/bootstrap/css/bootstrap.min.css', array(), '1.0.0', false );

	  	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/front-end/font-awesome/css/font-awesome.min.css', array(), '1.0.0', false );


	  	wp_enqueue_style( 'custom', get_template_directory_uri() . '/front-end/css/custom.css', array(), '2.1.7', false );
	  	
		// scripts

	  	wp_enqueue_script( 'jquery' );

	  	wp_enqueue_script('myjquery',get_template_directory_uri().'/front-end/js/jquery.min.js');

	  	wp_enqueue_script('bootstrap-js',get_template_directory_uri().'/front-end/bootstrap/js/bootstrap.min.js');

	  	wp_enqueue_script('jquery-validate',get_template_directory_uri().'/front-end/js/jquery.validate.min.js');
	  	
	  	wp_enqueue_script( 'custom', get_template_directory_uri() . '/front-end/js/custom.js', array('jquery'), '1.0.9', true );
	}

	add_action( 'wp_enqueue_scripts', 'theme_css_scripts' );


	function register_my_menus() {
	  register_nav_menus(
	    array(
			'header-menu' => __( 'Main Navigation Menu' ),
			'footer-nav' => __( 'Foooter Menu' ),
	    )
	  );
	}
	add_action( 'init', 'register_my_menus' );

	add_theme_support( 'post-thumbnails' );

	add_image_size( 'course-thumb',300,500, true );

	add_image_size( 'post-thumb',300,300, true );

?>