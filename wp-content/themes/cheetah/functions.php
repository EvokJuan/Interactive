<?php

//add dynamic menu
add_action( 'init', 'register_my_menus' );
function register_my_menus() {
	register_nav_menus(
		array(
			'theme_location' => 'Primary Menu' ,
			'before'          => '<span>',
			'after'           => '</span>',
			'menu_class' 	=> 'menu nav nav-tabs'
		)
	);
}

//Add support for featured images
add_theme_support( 'post-thumbnails' );


// Excerpt Length
function custom_excerpt_length( $length ) {
	return 32;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

// Register our sidebars and widgetized areas. //

function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Home right sidebar',
		'id'            => 'home_right_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );

/**
 * Enqueue HEADER scripts and styles.
 */
 function header_scripts() {
	 // WP Core Stylesheet.
	 wp_enqueue_style( 'wpcore_style-css', get_theme_file_uri( 'style.css', array(), '1.0'  ) );
	 // bootstrap Stylesheets.
	 wp_enqueue_style( 'bootstrap-css', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/css/bootstrap.min.css' );
	 // wp_enqueue_style( 'bootstrap_theme-css', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap-theme.min.css' );
	  // Owl
	 wp_enqueue_style( 'Owl_Style-css', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css' );
	 wp_enqueue_style( 'Owl_Style2-css', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.theme.default.min.css' );
	 // WP Theme Sass.
	 wp_enqueue_style( 'custom-css', get_theme_file_uri( '/css/style.min.css', array(), '1.0'  ) );
}
add_action( 'wp_enqueue_scripts', 'header_scripts' );

/**
 * Enqueue FOOTER scripts
 */
function footer_scripts() {
	// JQuery JS
	wp_enqueue_script( 'javascript-js', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js');
	// JQuery UI JS
	wp_enqueue_script( 'javascript-js', 'https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js');
	// bootstrap JS
	wp_enqueue_script( 'boorstrap-js', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/js/bootstrap.bundle.js');
	// OWL JS
	wp_enqueue_script( 'owl-js', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js');
	// Font Awesome
	wp_enqueue_script( 'fa-js', 'https://use.fontawesome.com/1b797d079d.js');
}
add_action( 'get_footer', 'footer_scripts' );

/**
* ACF Options
*/
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
}

/**
* Gravity Forms
*/
add_filter( 'gform_enable_field_label_visibility_settings', '__return_true' );

/**
	* Owl
	*/

?>
