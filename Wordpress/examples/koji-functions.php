<?php

/*-----------------------------------------------------------------------------------*/

/*	01. INTIALIZE SCRIPTS AND STYLESHEETS

/*-----------------------------------------------------------------------------------*/

function cleayn_playne_scripts_styles() {
	
	//Main Stylesheet
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	
	//Media queries css
	wp_enqueue_style( 'cleayn_mediaqueries', get_template_directory_uri() . "/media-queries.css", array(), '0.1', 'screen' );

	if ( class_exists( 'Woocommerce' ) ) {
 	//Woocommerce css
	wp_enqueue_style( 'cleayn_woocommerce', get_template_directory_uri() . "/includes/framework/woocommerce/css/woocommerce-custom.css", array(), '', 'screen' );   
	wp_enqueue_style( 'cleayn_woocommerce_media_queries', get_template_directory_uri() . "/includes/framework/woocommerce/css/woocommerce-media-queries.css", array(), '', 'screen' ); 
	}

	// Extra stylesheets
	wp_enqueue_style( 'cleayn_hover', get_template_directory_uri() . "/includes/css/hover.min.css", array(), '', 'screen' );
	wp_enqueue_style( 'cleayn_animate', get_template_directory_uri() . "/includes/css/animate.min.css", array(), '', 'screen' );
	
	// Google Fonts
	wp_enqueue_style('cleayn_googlefonts', 'http://fonts.googleapis.com/css?family=Montserrat|Open+Sans:300,400,600,700');

	wp_enqueue_script('jquery');
	
 	$homepagescrolleffect_script = get_theme_mod( 'cleayn_playne_animationlist2' );
    if ( $homepagescrolleffect_script != '1' && is_page_template('template-homepage-woo.php')) {
	wp_enqueue_script('cleayn_wow', get_template_directory_uri() . '/includes/js/wow.js', false, false , true);
	wp_enqueue_script('cleayn_wowcustom', get_template_directory_uri() . '/includes/js/wow-custom.js', false, false , true);
    }

	wp_enqueue_script('cleayn_scripts', get_template_directory_uri() . '/includes/js/scripts.js', false, false , true);
	wp_enqueue_script('cleayn_navigation', get_template_directory_uri() . '/includes/js/navigation.js', false, false , true);
	
 	$headerscrolleffect_script = get_theme_mod( 'cleayn_playne_general3' );
    if ( $headerscrolleffect_script != '1') {
    wp_enqueue_script('cleayn_interbg', get_template_directory_uri() . '/includes/js/interactive-bg.js', false, false , true);
    wp_enqueue_script('cleayn_interbg_custom', get_template_directory_uri() . '/includes/js/interactive-bg-custom.js', false, false , true);
    } else {
    } 

    $cookie_script = get_theme_mod( 'cleayn_playne_info_enable' );
    if ( $cookie_script == '1') {
	wp_enqueue_script('cleayn_infobox', get_template_directory_uri() . '/includes/js/jquerycookie.js', false, false , true);
	wp_enqueue_script('cleayn_infobox_custom', get_template_directory_uri() . '/includes/js/info-box-custom.js', false, false , true);
    } else {
    }

 	$textscrolleffect_script = get_theme_mod( 'cleayn_playne_general2' );
    if ( $textscrolleffect_script != '1') {
    	wp_enqueue_script('cleayn_textscroll_js', get_template_directory_uri() . '/includes/js/text-scroll.js', false, false , true);
    } else {
    } 

    if (is_page_template('four-columns-shop-woo-full.php')) { 
	wp_enqueue_script('cleayn_masonry', get_template_directory_uri() . '/includes/js/masonry.js', false, false , true);
    wp_enqueue_script('cleayn_masonry-custom-full', get_template_directory_uri() . '/includes/js/masonry-custom-full.js', false, false , true);
	}

    if (is_page_template('three-columns-shop-woo.php') or is_page_template('three-columns-shop-woo-alt.php')) { 
    wp_enqueue_script('cleayn_masonry', get_template_directory_uri() . '/includes/js/masonry.min.js', false, false , true);
    wp_enqueue_script('cleayn_masonry-custom', get_template_directory_uri() . '/includes/js/masonry-custom.js', false, false , true);
	}

    if (is_home() or is_archive()) { 
	wp_enqueue_script('cleayn_masonry', get_template_directory_uri() . '/includes/js/masonry.min.js', false, false , true);
    wp_enqueue_script('cleayn_masonry-custom', get_template_directory_uri() . '/includes/js/masonry-blog.js', false, false , true);
	}

	if (is_page_template('four-columns-shop-woo.php') or is_page_template('four-columns-shop-woo-alt.php')) {
	wp_enqueue_script('cleayn_masonry', get_template_directory_uri() . '/includes/js/masonry.min.js', false, false , true);
    wp_enqueue_script('cleayn_masonry-custom', get_template_directory_uri() . '/includes/js/masonry-custom-alt.js', false, false , true);		
	}

	wp_enqueue_script('cleayn_owl', get_template_directory_uri() . '/includes/js/owl-gallery.js', false, false , true);
	wp_enqueue_script('cleayn_owlcustom', get_template_directory_uri() . '/includes/js/owl-gallery-custom.js', false, false , true);
	wp_enqueue_script('cleayn_slick', get_template_directory_uri() . '/includes/js/slick.min.js', false, false , true);
	wp_enqueue_script('cleayn_slickcustom', get_template_directory_uri() . '/includes/js/slick.custom.js', false, false , true);
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
	wp_enqueue_script( 'comment-reply' );
	}
	wp_enqueue_script('cleayn_custom', get_template_directory_uri() . '/includes/js/custom.js', false, false , true);

}
add_action( 'wp_enqueue_scripts', 'cleayn_playne_scripts_styles' );

/*-----------------------------------------------------------------------------------*/

/*	02. PLAYNE FRAMEWORK INIT

/*-----------------------------------------------------------------------------------*/

if (file_exists(get_template_directory() . '/includes/framework/playne_framework.php')) {
	require_once(get_template_directory().'/includes/framework/playne_framework.php');
}

function playne_get_sidebar() {
		get_sidebar('woo');
}

/*-----------------------------------------------------------------------------------*/

/*	03. WORDPRESS BASICS

/*-----------------------------------------------------------------------------------*/

// HTML5 search form
add_theme_support( 'html5', array( 'search-form' ) );
// Title
add_theme_support( 'title-tag' );
// Background support
add_theme_support( 'custom-background' );
// Custom header image support
add_theme_support( 'custom-header' );
// Shortcodes inside widgets
add_filter('widget_text', 'do_shortcode');
// Custom post format support
add_theme_support('post-formats', array( 'quote', 'image', 'video', 'link', 'aside', 'gallery'));
// Feed links
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );
add_theme_support( 'wc-product-gallery-zoom' );
/*-----------------------------------------------------------------------------------*/

/*	04. HEADER IMAGE OUTPUT

/*-----------------------------------------------------------------------------------*/


function cleayn_playne_headerimage()
{ ?>

	<?php if (is_tax('product_cat')) { ?>
	<?php $term_slug = get_query_var( 'term' ); $taxonomyName = get_query_var( 'taxonomy' ); $current_term = get_term_by( 'slug', $term_slug, 'product_cat' ); $term_id = $current_term->term_id; ?>
	<?php } ?>
	<?php global $post; ?>
	<?php if ( is_woocommerce_activated() ) { ?>

		<?php if (is_tax('product_cat') && get_tax_meta($term_id,'playne_category_header_id')) { ?>
			<style type="text/css">
			#headerbg {background-image: url("<?php $cleayn_categoryheader = get_tax_meta($term_id,'playne_category_header_id',true); echo esc_url($cleayn_categoryheader['url']) ?>"); }
			</style>
		<?php } else if (is_shop() && get_theme_mod( 'cleayn_playne_headertext_shoph')) { ?>
			<style type="text/css">
			#headerbg {background-image: url("<?php echo esc_url('' .get_theme_mod( 'cleayn_playne_headertext_shoph', ''))."";?>"); }
			</style>
		<?php } else if (is_checkout() && get_theme_mod( 'cleayn_playne_headertext_checkouth')) { ?>
			<style type="text/css">
			#headerbg {background-image: url("<?php echo esc_url('' .get_theme_mod( 'cleayn_playne_headertext_checkouth', '' ))."";?>"); }
			</style>
		<?php } else if (is_cart() && get_theme_mod( 'cleayn_playne_headertext_carth')) { ?>
			<style type="text/css">
			#headerbg {background-image: url("<?php echo esc_url('' .get_theme_mod( 'cleayn_playne_headertext_carth', '' ))."";?>"); }
			</style>
		<?php } else if (is_singular('product') && get_post_meta( $post->ID, '_playne_custom_productheader_productheadercustombg')) { ?>
			<style type="text/css">
			#headerbg {background-image: url("<?php global $post; $cleayn_productheader = get_post_meta( $post->ID, '_playne_custom_productheader_productheadercustombg', true ); echo esc_url("$cleayn_productheader") ?>"); }
			</style>
		<?php } else if (is_home() && get_theme_mod( 'cleayn_playne_headerimageblog')) { ?>
			<style type="text/css">
			#headerbg {background-image: url("<?php echo esc_url('' .get_theme_mod( 'cleayn_playne_headerimageblog', '' ))."";?>"); }
			</style>
		<?php } else if (is_page() && get_post_meta( $post->ID, '_playne_custom_pageheader_headercustombg')) { ?>
			<style type="text/css">
			#headerbg {background-image: url("<?php global $post; $cleayn_custompageheader = get_post_meta( $post->ID, '_playne_custom_pageheader_headercustombg', true ); echo esc_url("$cleayn_custompageheader") ?>"); }
			</style>
		<?php } else if (is_single() && get_post_meta( $post->ID, '_playne_custom_postheader_postheadercustombg')) { ?>
			<style type="text/css">
			#headerbg {background-image: url("<?php global $post; $cleayn_custompostheader = get_post_meta( $post->ID, '_playne_custom_postheader_postheadercustombg', true ); echo esc_url("$cleayn_custompostheader") ?>"); }
			</style>
		<?php } else if ( get_header_image() != '' ) { ?>
			<style type="text/css">
			#headerbg {background-image: url("<?php header_image(); ?>"); }
			</style>
	    <?php } ?>

    <?php } else { ?>

		<?php if (is_home() && get_theme_mod( 'cleayn_playne_headerimageblog', true )) { ?>
			<style type="text/css">
			#headerbg {background-image: url("<?php echo esc_url('' .get_theme_mod( 'cleayn_playne_headerimageblog', '' ))."";?>"); }
			</style>
		<?php } else if (is_page() && get_post_meta( $post->ID, '_playne_custom_pageheader_headercustombg')) { ?>
			<style type="text/css">
			#headerbg {background-image: url("<?php global $post; $cleayn_custompageheader = get_post_meta( $post->ID, '_playne_custom_pageheader_headercustombg', true ); echo esc_url("$cleayn_custompageheader") ?>"); }
			</style>
		<?php } else if (is_single() && get_post_meta( $post->ID, '_playne_custom_postheader_postheadercustombg', true )) { ?>
			<style type="text/css">
			#headerbg {background-image: url("<?php global $post; $cleayn_custompostheader = get_post_meta( $post->ID, '_playne_custom_postheader_postheadercustombg', true ); echo esc_url("$cleayn_custompostheader") ?>"); }
			</style>
		<?php } else if ( get_header_image() != '' ) { ?>
			<style type="text/css">
			#headerbg {background-image: url("<?php header_image(); ?>"); }
			</style>
	    <?php } ?>

    <?php } ?>

    <?php
}
add_action( 'wp_head', 'cleayn_playne_headerimage');


/*-----------------------------------------------------------------------------------*/

/*	05. LOCALISATION

/*-----------------------------------------------------------------------------------*/

load_theme_textdomain( 'playne', get_template_directory() . '/includes/languages' );
 
$locale = get_locale();
$locale_file = get_template_directory_uri() . "/includes/languages/$locale.php";
if ( is_readable($locale_file) )
	require_once($locale_file);	

/*-----------------------------------------------------------------------------------*/
/*	06. Pagination
/*-----------------------------------------------------------------------------------*/

function playne_page_has_nav() {
	global $wp_query;
	return ($wp_query->max_num_pages > 1);
	wp_reset_postdata();
}

/*-----------------------------------------------------------------------------------*/
/*	11. Menu support of the theme
/*-----------------------------------------------------------------------------------*/

add_theme_support( 'menus' );
register_nav_menu('main', 'Main Menu');
register_nav_menu('footer', 'Footer Menu');
register_nav_menu('user', 'User Menu');

/*-----------------------------------------------------------------------------------*/
/*	12. Thumbnails inside posts
/*-----------------------------------------------------------------------------------*/

add_theme_support('post-thumbnails');
add_image_size( 'large-image', 9999, 9999, false ); // Large Post Image

if ( ! isset( $content_width ) ) $content_width = 720;

/*-----------------------------------------------------------------------------------*/
/*	13. Widgets in sidebar and footer area
/*-----------------------------------------------------------------------------------*/

function cleayn_playne_widgets_init() {

if ( is_woocommerce_activated() ) {

//Woocommerce widgets
register_sidebar(array(
	'name' => __( 'Woocommerce sidebar', 'playne'),
	'id' => 'woosidebar-one',
	'description' => __( 'Widgets in this area are shown in the sidebar woocommerce pages.', 'playne'),
	'before_widget' => '<div id="%1$s" class="widget %2$s clearfix first">',
	'after_widget' => '</div>'
));

//Woocommerce mobile widgets
register_sidebar(array(
	'name' => __( 'Woocommerce mobile devices sidebar', 'playne'),
	'id' => 'woosidebar-two',
	'description' => __( 'Widgets in this area are shown in the sidebar woocommerce pages on mobile devices.', 'playne'),
	'before_widget' => '<div id="%1$s" class="widget %2$s clearfix first">',
	'after_widget' => '</div>'
));

//Woocommerce shopping cart widgets
register_sidebar(array(
	'name' => __( 'Woocommerce shopping cart', 'playne'),
	'id' => 'shoppingcart-woocommerce',
	'description' => __( 'Widgets in this area are shown in the woocommerce shopping cart dropdown menu.', 'playne'),
	'before_widget' => '<div id="%1$s" class="widget %2$s clearfix first">',
	'after_widget' => '</div>'
));

}

//Sidebar widgets
register_sidebar(array(
	'name' => __( 'Sidebar first', 'playne'),
	'id' => 'sidebar-one',
	'description' => __( 'Widgets in this area are used in the first sidebar column.', 'playne'),
	'before_widget' => '<div class="widget %2$s clearfix first">',
	'after_widget' => '</div>'
));

register_sidebar(array(
	'name' => __( 'Sidebar second', 'playne'),
	'id' => 'sidebar-two',
	'description' => __( 'Widgets in this area are used in the second sidebar column.', 'playne' ),
	'before_widget' => '<div class="widget %2$s clearfix">',
	'after_widget' => '</div>'
));

register_sidebar(array(
	'name' => __( 'Sidebar third', 'playne'),
	'id' => 'sidebar-three',
	'description' => __( 'Widgets in this area are used in the third sidebar column.', 'playne' ),
	'before_widget' => '<div class="widget %2$s clearfix last">',
	'after_widget' => '</div>'
));

register_sidebar(array(
	'name' => __( 'FAQ page', 'playne'),
	'id' => 'faq-one',
	'description' => __( 'Widgets in this area are used on the FAQ page.', 'playne' ),
	'before_widget' => '<div class="widget %2$s clearfix last">',
	'after_widget' => '</div>'
));

}
add_action( 'widgets_init', 'cleayn_playne_widgets_init' );



/*-----------------------------------------------------------------------------------*/
/*	14. Comments markup
/*-----------------------------------------------------------------------------------*/

function playne_comment($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment; ?>
	<li <?php comment_class('clearfix'); ?> id="li-comment-<?php comment_ID() ?>">
		
		<div class="comment-block" id="comment-<?php comment_ID(); ?>">
			<div class="comment-info">	
				<div class="comment-author vcard clearfix">
					<?php echo get_avatar( $comment->comment_author_email, 75 ); ?>
					
					<div class="comment-meta commentmetadata">
						<?php printf(__('<cite class="fn">%s</cite>', 'playne'), get_comment_author_link()) ?>
						<div style="clear:both;"></div>
						<a class="comment-time" href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf(__('%1$s at %2$s', 'playne'), get_comment_date(),  get_comment_time()) ?></a><?php edit_comment_link(__('(Edit)', 'playne'),'  ','') ?>
					</div>
				</div>
			<div class="clearfix"></div>
			</div>
			
			<div class="comment-text">
				<?php comment_text() ?>
				<p class="reply">
					<?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
				</p>
			</div>
		
			<?php if ($comment->comment_approved == '0') : ?>
				<em class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.', 'playne') ?></em>
			<?php endif; ?>    
		</div>
<?php
}

function playne_alter_comment_form_fields($fields){

	$commenter = wp_get_current_commenter();
	$req = get_option( 'require_name_email' );
	$aria_req = ( $req ? " aria-required='true'" : '' );
	
    $fields['author'] = '<p class="comment-form-author">' . '<label for="author">' . __( 'Your Name *', 'playne' ) . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) .
                    '<input id="author" name="author" type="text" placeholder="Your Name *" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></p>';
                    
    $fields['email'] = '<p class="comment-form-email">' . '<label for="email">' . __( 'Your Email *', 'playne' ) . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) .
                    '<input id="email" name="email" type="text" placeholder="Your Email *" value="' . esc_attr( $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></p>';
    
    $fields['url'] = '<p class="comment-form-url">' . '<label for="url">' . __( 'Your Website', 'playne' ) . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) .
                    '<input id="url" name="url" type="text" placeholder="Your Website" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30"' . $aria_req . ' /></p>';

    return $fields;
}
add_filter('comment_form_default_fields','playne_alter_comment_form_fields');


function playne_cancel_comment_reply_button($html, $link, $text) {
    $style = isset($_GET['replytocom']) ? '' : ' style="display:none;"';
    $button = '<div id="cancel-comment-reply-link"' . $style . '>';
    return $button . '<i class="icon-remove-sign"></i> </div>';
}
 
add_action('cancel_comment_reply_link', 'playne_cancel_comment_reply_button', 10, 3);	

/*-----------------------------------------------------------------------------------*/
/*	17. Custom excerpt ending
/*-----------------------------------------------------------------------------------*/

//Read More Button For Excerpt
function playne_excerpt_read_more_link( $output ) {
	global $post;
	if (!has_post_format( 'post-format-link' , $post->ID )) {
	return $output . '<div class="excerpt-more-link"><a href="' . get_permalink( $post->ID ) . '" title="' . __('Read More', 'playne') .'">' . __('Read More', 'playne') .'</a></div>';
	}
}
add_filter( 'the_excerpt', 'playne_excerpt_read_more_link' );

function playne_new_excerpt_length($length) {
	return 10;
}
add_filter('excerpt_length', 'playne_new_excerpt_length');

function playne_change_excerpt_more()
{
  function playne_new_excerpt_more($more)
    {
      return '...';
    }
  add_filter('excerpt_more', 'playne_new_excerpt_more');
}
add_action('after_setup_theme', 'playne_change_excerpt_more');

/*-----------------------------------------------------------------------------------*/
/*	18. Images and videos in RSS feed
/*-----------------------------------------------------------------------------------*/

function featured_image_in_rss($content)
{
    global $post;
    if (has_post_thumbnail($post->ID))
    {
        $content = get_the_post_thumbnail($post->ID, 'full', array('style' => 'margin-bottom:10px;')) . $content;
    } else if (get_post_meta($post->ID, 'video', true)){
        $content = get_post_meta($post->ID, 'video', true) . $content;
    }
    return $content;
}
add_filter('the_excerpt_rss', 'featured_image_in_rss');

/*-----------------------------------------------------------------------------------*/
/*	26. CUSTOM PAGINATION
/*-----------------------------------------------------------------------------------*/

function custom_pagination($numpages = '', $pagerange = '', $paged='') {

  if (empty($pagerange)) {
    $pagerange = 2;
  }

  global $paged;
  if (empty($paged)) {
    $paged = 1;
  }
  if ($numpages == '') {
    global $wp_query;
    $products = new WP_Query(array('post_type' => 'download'));
    $numpages = $wp_query->max_num_pages;
    if(!$numpages) {
        $numpages = 1;
    }
  }

  $pagination_args = array(
    'base'            => get_pagenum_link(1) . '%_%',
    'format'          => 'page/%#%',
    'total'           => $numpages,
    'current'         => $paged,
    'show_all'        => False,
    'end_size'        => 1,
    'mid_size'        => $pagerange,
    'prev_next'       => true,
    'type'            => 'plain',
    'add_args'        => false,
    'add_fragment'    => ''
  );

  $paginate_links = paginate_links($pagination_args);

  if ($paginate_links) {
    echo "<div id='load' class='custom-pagination clearfix'>";
      echo esc_attr($paginate_links);
    echo "</div>";
  }

  wp_reset_postdata();

}

/*-----------------------------------------------------------------------------------*/
/*	27. HIDE BACKGROUND IMAGE FROM GALLERY
/*-----------------------------------------------------------------------------------*/

function playne_id_from_url( $attachment_url = '' ) {
 
	global $wpdb;
	$attachment_id = false;
 
	// If there is no url, return.
	if ( '' == $attachment_url )
		return;
 
	// Get the upload directory paths
	$upload_dir_paths = wp_upload_dir();
 
	// Make sure the upload path base directory exists in the attachment URL, to verify that we're working with a media library image
	if ( false !== strpos( $attachment_url, $upload_dir_paths['baseurl'] ) ) {
 
		// If this is the URL of an auto-generated thumbnail, get the URL of the original image
		$attachment_url = preg_replace( '/-\d+x\d+(?=\.(jpg|jpeg|png|gif)$)/i', '', $attachment_url );
 
		// Remove the upload path base directory from the attachment URL
		$attachment_url = str_replace( $upload_dir_paths['baseurl'] . '/', '', $attachment_url );
 
		// Finally, run a custom database query to get the attachment ID from the modified attachment URL
		$attachment_id = $wpdb->get_var( $wpdb->prepare( "SELECT wposts.ID FROM $wpdb->posts wposts, $wpdb->postmeta wpostmeta WHERE wposts.ID = wpostmeta.post_id AND wpostmeta.meta_key = '_wp_attached_file' AND wpostmeta.meta_value = '%s' AND wposts.post_type = 'attachment'", $attachment_url ) );
 
	}
 
	return $attachment_id;
}

/*-----------------------------------------------------------------------------------*/
/*	33. HOOKS
/*-----------------------------------------------------------------------------------*/

add_action('playne_post_footer', 'playne_social_sharing', 10);
add_action('playne_post_footer', 'playne_post_meta', 5);

/*-----------------------------------------------------------------------------------*/
/*	34. SCHEMA MARKUP
/*-----------------------------------------------------------------------------------*/

function playne_schema_org_markup() {
 $schema = 'http://schema.org/';
 // Is single post
 if ( is_single() ) {
 $type = "Article";
 } // Contact form page ID
 else {
 if ( is_page( 1 ) ) {
 $type = 'ContactPage';
 } // Is author page
 elseif ( is_author() ) {
 $type = 'ProfilePage';
 } // Is search results page
 elseif ( is_search() ) {
 $type = 'SearchResultsPage';
 } // Is of movie post type
 elseif ( is_singular( 'movies' ) ) {
 $type = 'Movie';
 } // Is of book post type
 elseif ( is_singular( 'books' ) ) {
 $type = 'Book';
 }
    elseif ( is_woocommerce_activated() ) {
      $type = 'Product';
    } else {
 $type = 'WebPage';
 }
 }
 echo 'itemscope="itemscope" itemtype="' . $schema . $type . '"';
}

/*-----------------------------------------------------------------------------------*/
/*	35. ONLY SHOW WOOCOMMERCE SEARCH RESULTS
/*-----------------------------------------------------------------------------------*/

function searchfilter($query) {

    if ($query->is_search && !is_admin() ) {
        $query->set('post_type',array('product'));
    }

return $query;
}

add_filter('pre_get_posts','searchfilter');

/* Edit Sort By Dropdown */

function my_woocommerce_catalog_orderby( $orderby ) {
	unset($orderby["rating"]);
	return $orderby;
}
add_filter( "woocommerce_catalog_orderby", "my_woocommerce_catalog_orderby", 20 );

/*-----------------------*/

function custom_get_availability( $availability, $_product ) {
  //change text "In Stock' to 'Available'
  if ( $_product->is_in_stock() ) 
    $availability['availability'] = __('Available', 'woocommerce');

  //change text "Out of Stock' to 'Coming Soon'
  if ( !$_product->is_in_stock() ) 
    $availability['availability'] = __('Coming Soon', 'woocommerce');
  
  return $availability;
}
add_filter( 'woocommerce_get_availability', 'custom_get_availability', 1, 2);

/*-----------------------*/


