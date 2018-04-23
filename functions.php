<?php 

	function my_theme_setup() {
		/*
		 * Make theme available for translation.
		 */
		load_theme_textdomain( 'my_theme', get_template_directory() . '/languages' );


		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 */
		add_theme_support( 'post-thumbnails' );
		add_image_size( 'featured-thumbnail', 1600, 600, true );
		add_image_size( 'index-thumbnail', 1000, 200, true );
		add_image_size( 'homepage-thumbnail', 684, 475, true );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'primary' => esc_html__( 'Primary Menu', 'my_theme' ),
			'social' => esc_html__( 'Social Menu', 'my_theme' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

	}	// my_theme_setup
	
	add_action( 'after_setup_theme', 'my_theme_setup' );
	

	function theme_enqueue_styles() {
		wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
		wp_enqueue_style( 'child-style',
			get_stylesheet_directory_uri() . '/style.css',
			array('parent-style')
		);
	}
	add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
	
	function register_theme_menu() {
		register_nav_menu( 'primary', 'Main Navigation Menu' );
	}
	add_action( 'init', 'register_theme_menu' );
	
	
	function my_theme_widgets_init() {
 
		/* First Header widget area, located in the header. */
			register_sidebar( array(
			'name' 			=> 'Header Bar left part',
			'id' 			=> 'header-link',
			'description' 	=> 'Appears in the header area',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' 	=> '</aside>',
			'before_title' 	=> '<h3 class="widget-title">',
			'after_title' 	=> '</h3>',
			) );
			register_sidebar( array(
			'name' 			=> 'Header Bar right part',
			'id' 			=> 'header-icon',
			'description' 	=> 'Appears in the header area',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' 	=> '</aside>',
			'before_title' 	=> '<h3 class="widget-title">',
			'after_title' 	=> '</h3>',
			) );
			
		
		// First footer widget area, located in the footer. Empty by default.
		register_sidebar( array(
			'name' 			=> __( 'Blog-Widget-Area', 'my_theme' ),
			'id' 			=> 'first_widget',
			'description' 	=> __( 'First Blog-Widget area', 'my_theme' ),
			'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
			'after_widget' 	=> '</div>',
			'before_title' 	=> '<h3 class="widget-title">',
			'after_title' 	=> '</h3>',
		) );
	 
		// Second Footer Widget Area, located in the footer. Empty by default.
		register_sidebar( array(
			'name' 			=> __( 'Second Blog-Widget-Area', 'my_theme' ),
			'id' 			=> 'second_widget',
			'description' 	=> __( 'Second Blog-Widget area', 'my_theme' ),
			'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
			'after_widget' 	=> '</div>',
			'before_title' 	=> '<h3 class="widget-title">',
			'after_title' 	=> '</h3>',
		) );
		
		//  Footer widget area, located in the footer. Empty by default.
		register_sidebar( array(
			'name' 			=> 'Footer Sidebar 1',
			'id' 			=> 'footer-1',
			'description' 	=> 'Appears in the footer area',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' 	=> '</aside>',
			'before_title' 	=> '<h3 class="widget-title">',
			'after_title' 	=> '</h3>',
			) );
			register_sidebar( array(
			'name' 			=> 'Footer Sidebar 2',
			'id' 			=> 'footer-2',
			'description' 	=> 'Appears in the footer area',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' 	=> '</aside>',
			'before_title' 	=> '<h3 class="widget-title">',
			'after_title' 	=> '</h3>',
			) );
			register_sidebar( array(
			'name' 			=> 'Footer Sidebar 3',
			'id' 			=> 'footer-3',
			'description' 	=> 'Appears in the footer area',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' 	=> '</aside>',
			'before_title' 	=> '<h3 class="widget-title">',
			'after_title' 	=> '</h3>',
			) );
			register_sidebar( array(
			'name' 			=> 'Footer Sidebar 4',
			'id' 			=> 'footer-4',
			'description' 	=> 'Appears in the footer area',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' 	=> '</aside>',
			'before_title' 	=> '<h3 class="widget-title">',
			'after_title' 	=> '</h3>',
			) );
			
			/* this is for footer Copyright bar */
			register_sidebar( array(
			'name' 			=> 'Copyright',
			'id' 			=> 'copyrgt',
			'description' 	=> 'Appears in the footer area',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' 	=> '</aside>',
			'before_title' 	=> '<h3 class="widget-title">',
			'after_title' 	=> '</h3>',
			) );
			/* this is for footer social bar */
			register_sidebar( array(
			'name' 			=> 'Footer social',
			'id' 			=> 'footer-social',
			'description' 	=> 'Appears in the footer area',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' 	=> '</aside>',
			'before_title' 	=> '<h3 class="widget-title">',
			'after_title' 	=> '</h3>',
			) );
         
	}
 
	// Register sidebars by running tutsplus_widgets_init() on the widgets_init hook.
	add_action( 'widgets_init', 'my_theme_widgets_init' );
	
?>