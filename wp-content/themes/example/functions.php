<?php


function css_resources() {
	
	wp_enqueue_style('assets/css/bootstrap.min.css',get_template_directory_uri() .'/assets/css/bootstrap.min.css');
	wp_enqueue_style('assets/css/style',get_template_directory_uri() .'/assets/css/style.css');
	wp_enqueue_style('assets/css/custom', get_template_directory_uri() .'/assets/css/custom.css');
	
}

add_action('wp_enqueue_scripts', 'css_resources');


function wpt_theme_js() {

    wp_enqueue_script( '/assets/js/jquery.min.js',  get_template_directory_uri() . '/assets/js/jquery.min.js', '', '', true );
    wp_enqueue_script( '/assets/js/bootstrap.minjs',  get_template_directory_uri() . '/assets/js/bootstrap.min.js', '', '', true );	
    wp_enqueue_script( '/app/angular.min.js',  get_template_directory_uri() . '/app/angular.min.js', '', '', true );	
    wp_enqueue_script( '/app/printPriceService.js',  get_template_directory_uri() . '/app/printPriceService.js', '', '', true );	
    wp_enqueue_script( '/app/app.js',  get_template_directory_uri() . '/app/app.js', '', '', true );	
    
}
add_action( 'wp_enqueue_scripts', 'wpt_theme_js' );


// Removeing the meta
remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10 );
remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_images', 10 );
remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );

function woocommerce_template_single_meta()
{
	include('woocommerce/plugin.php');
}
do_action( 'woocommerce_template_single_meta', 'woocommerce_template_single_meta', 40 );

function woocommerce_show_product_images()
{
	include('woocommerce/image.php');
}
do_action( 'woocommerce_show_product_images', 'woocommerce_show_product_images', 40 );



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