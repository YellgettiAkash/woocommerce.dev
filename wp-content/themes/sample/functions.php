<?php

function css_resources() {
	
	wp_enqueue_style('assets/css/bootstrap.min.css',get_template_directory_uri() .'/assets/css/bootstrap.min.css');
	wp_enqueue_style('assets/css/bootstrap.css',get_template_directory_uri() .'/assets/css/bootstrap.css');
	wp_enqueue_style('style', get_stylesheet_uri());
	
}

add_action('wp_enqueue_scripts', 'css_resources');


function wpt_theme_js() {

    wp_enqueue_script( '/assets/js/jquery.js',  get_template_directory_uri() . '/assets/js/jquery.js', '', '', false );
    wp_enqueue_script( '/assets/js/bootstrap.js',  get_template_directory_uri() . '/assets/js/bootstrap.js', '', '', false );	
}
add_action( 'wp_enqueue_scripts', 'wpt_theme_js' );


function widgets_init() {

	register_sidebar( array(
		'name'          => 'Sidebar',
		'id'            => 'sidebar-widgets',
		'class' => '',
		'before_widget' => '<div class="col-sm-12">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => 'Footer -3',
		'id'            => 'footer-widgets-3',
		'class' => 'abc',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => 'Footer-2',
		'id'            => 'footer-widgets-2',
		'class' => 'abc',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => 'Footer-1',
		'id'            => 'footer-widgets-1',
		'class' => 'abc',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );

}

add_action( 'widgets_init', 'widgets_init' );

	// Navigation Menus
register_nav_menus(array(
	'primary' => __( 'Primary Menu'),
	'right_sidebar' => __( 'Right Sidebar Menu'),
	'footer' => __( 'Footer Menu'),
));