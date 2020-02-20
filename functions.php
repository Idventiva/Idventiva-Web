<?php
/*
 *  Author: Idventiva | @idventiva
 *  URL: idv2018.com | @idv2018
 *  Custom functions, support, custom post types and more.
 */

/*------------------------------------*\
	External Modules/Files
\*------------------------------------*/

// Load any external files you have here

/*------------------------------------*\
	Theme Support
\*------------------------------------*/

if (!isset($content_width))
{
    $content_width = 900;
}

if (function_exists('add_theme_support'))
{
    // Add Menu Support
    add_theme_support('menus');

    // Add Thumbnail Theme Support
    add_theme_support('post-thumbnails');
    add_image_size('large', 800, '', true); // Large Thumbnail
    add_image_size('medium', 400, '', true); // Medium Thumbnail
    add_image_size('small', 120, '', true); // Small Thumbnail
    add_image_size('custom-size', 700, 200, true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');

    // Add Support for Custom Backgrounds - Uncomment below if you're going to use
    /*add_theme_support('custom-background', array(
	'default-color' => 'FFF',
	'default-image' => get_template_directory_uri() . '/img/bg.jpg'
    ));*/

    // Add Support for Custom Header - Uncomment below if you're going to use
    /*add_theme_support('custom-header', array(
	'default-image'			=> get_template_directory_uri() . '/img/headers/default.jpg',
	'header-text'			=> false,
	'default-text-color'		=> '000',
	'width'				=> 1000,
	'height'			=> 198,
	'random-default'		=> false,
	'wp-head-callback'		=> $wphead_cb,
	'admin-head-callback'		=> $adminhead_cb,
	'admin-preview-callback'	=> $adminpreview_cb
    ));*/

    // Enables post and comment RSS feed links to head
    add_theme_support('automatic-feed-links');

    // Localisation Support
    load_theme_textdomain('idv2018', get_template_directory() . '/languages');
}

/*------------------------------------*\
	Functions
\*------------------------------------*/

// IDV 2018 navigation
function idv2018_nav()
{
	wp_nav_menu(
	array(
		'theme_location'  => 'header-menu',
		'menu'            => '',
		'container'       => 'div',
		'container_class' => 'menu',
		'container_id'    => '',
		'menu_class'      => 'menu',
		'menu_id'         => '',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<ul>%3$s</ul>',
		'depth'           => 0,
		'walker'          => ''
		)
	);
}

// Load IDV 2018 scripts (header.php)
function idv2018_header_scripts()
{
    if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {

    	wp_register_script('conditionizr', get_template_directory_uri() . '/js/lib/conditionizr-4.3.0.min.js', array(), '4.3.0'); // Conditionizr
        wp_enqueue_script('conditionizr'); // Enqueue it!

        wp_register_script('modernizr', get_template_directory_uri() . '/js/lib/modernizr-2.7.1.min.js', array(), '2.7.1'); // Modernizr
        wp_enqueue_script('modernizr'); // Enqueue it!

        wp_register_script('idv2018scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0.0'); // Custom scripts
        wp_enqueue_script('idv2018scripts'); // Enqueue it!
    }
}

// Load IDV 2018 conditional scripts
function idv2018_conditional_scripts()
{
    if (is_page('pagenamehere')) {
        wp_register_script('scriptname', get_template_directory_uri() . '/js/scriptname.js', array('jquery'), '1.0.0'); // Conditional script(s)
        wp_enqueue_script('scriptname'); // Enqueue it!
    }
}

// Load IDV 2018 styles
function idv2018_styles()
{
    wp_register_style('normalize', get_template_directory_uri() . '/normalize.css', array(), '1.0', 'all');
    wp_enqueue_style('normalize'); // Enqueue it!

    wp_register_style('idv2018', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
    wp_enqueue_style('idv2018'); // Enqueue it!
}

// Register IDV 2018 Navigation
function register_idv_menu()
{
    register_nav_menus(array( // Using array to specify more menus if needed
        'header-menu' => __('Header Menu', 'idv2018'), // Main Navigation
        'sidebar-menu' => __('Sidebar Menu', 'idv2018'), // Sidebar Navigation
        'footer-menu-1' => __('Footer Menu 1', 'idv2018'), // Extra Navigation if needed (duplicate as many as you need!)
        'footer-menu-2' => __('Footer Menu 2', 'idv2018'), // Extra Navigation if needed (duplicate as many as you need!)
        'footer-menu-3' => __('Footer Menu 3', 'idv2018') // Extra Navigation if needed (duplicate as many as you need!)
    ));
}

// Remove the <div> surrounding the dynamic navigation to cleanup markup
function my_wp_nav_menu_args($args = '')
{
    $args['container'] = false;
    return $args;
}

// Remove Injected classes, ID's and Page ID's from Navigation <li> items
function my_css_attributes_filter($var)
{
    return is_array($var) ? array() : '';
}

// Remove invalid rel attribute values in the categorylist
function remove_category_rel_from_category_list($thelist)
{
    return str_replace('rel="category tag"', 'rel="tag"', $thelist);
}

// Add page slug to body class, love this - Credit: Starkers Wordpress Theme
function add_slug_to_body_class($classes)
{
    global $post;
    if (is_home()) {
        $key = array_search('blog', $classes);
        if ($key > -1) {
            unset($classes[$key]);
        }
    } elseif (is_page()) {
        $classes[] = sanitize_html_class($post->post_name);
    } elseif (is_singular()) {
        $classes[] = sanitize_html_class($post->post_name);
    }

    return $classes;
}

// If Dynamic Sidebar Exists
if (function_exists('register_sidebar'))
{
    // Define Sidebar Widget Area 1
    register_sidebar(array(
        'name' => __('Widget Area 1', 'idv2018'),
        'description' => __('Description for this widget-area...', 'idv2018'),
        'id' => 'widget-area-1',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));

    // Define Sidebar Widget Area 2
    register_sidebar(array(
        'name' => __('Widget Area 2', 'idv2018'),
        'description' => __('Description for this widget-area...', 'idv2018'),
        'id' => 'widget-area-2',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
    // Define Sidebar Widget Footer Area 1
    register_sidebar(array(
        'name' => __('Widget Area Footer 1', 'idv2018'),
        'description' => __('Description for this widget-area...', 'idv2018'),
        'id' => 'widget-area-footer-1',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
    // Define Sidebar Widget Footer Area 2
    register_sidebar(array(
        'name' => __('Widget Area Footer 2', 'idv2018'),
        'description' => __('Description for this widget-area...', 'idv2018'),
        'id' => 'widget-area-footer-2',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
    // Define Sidebar Widget Footer Area 3
    register_sidebar(array(
        'name' => __('Widget Area Footer 3', 'idv2018'),
        'description' => __('Description for this widget-area...', 'idv2018'),
        'id' => 'widget-area-footer-3',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
    // Define Sidebar Widget Footer Area 4
    register_sidebar(array(
        'name' => __('Widget Area Footer 4', 'idv2018'),
        'description' => __('Description for this widget-area...', 'idv2018'),
        'id' => 'widget-area-footer-4',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
    // Define Sidebar Widget Footer Area 4
    register_sidebar(array(
        'name' => __('Vacantes "#chambasihay" Sidebar', 'idv2018'),
        'description' => __('Área de Widgets para la sección de vacantes.', 'idv2018'),
        'id' => 'vacantes-sidebar',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
    // Define Sidebar Widget Footer Area 4
    register_sidebar(array(
        'name' => __('Capacitación Sidebar', 'idv2018'),
        'description' => __('Área de Widgets para Capacitación.', 'idv2018'),
        'id' => 'capacitacion-sidebar',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
    // Define Sidebar Widget Footer Area 4
    register_sidebar(array(
        'name' => __('Legal Sidebar', 'idv2018'),
        'description' => __('Área de Widgets para Documentos Legales.', 'idv2018'),
        'id' => 'legal-sidebar',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
}

// Remove wp_head() injected Recent Comment styles
function my_remove_recent_comments_style()
{
    global $wp_widget_factory;
    remove_action('wp_head', array(
        $wp_widget_factory->widgets['WP_Widget_Recent_Comments'],
        'recent_comments_style'
    ));
}

// Pagination for paged posts, Page 1, Page 2, Page 3, with Next and Previous Links, No plugin
function idv2018_pagination()
{
    global $wp_query;
    $big = 999999999;
    echo paginate_links(array(
        'base' => str_replace($big, '%#%', get_pagenum_link($big)),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages
    ));
}

// Custom Excerpts
function idv2018_index($length) // Create 20 Word Callback for Index page Excerpts, call using idv2018_excerpt('idv2018_index');
{
    return 60;
}

// Create 40 Word Callback for Custom Post Excerpts, call using idv2018_excerpt('idv2018_custom_post');
function idv2018_custom_post($length)
{
    return 60;
}

// Create the Custom Excerpts callback
function idv2018_excerpt($length_callback = '', $more_callback = '')
{
    global $post;
    if (function_exists($length_callback)) {
        add_filter('excerpt_length', $length_callback);
    }
    if (function_exists($more_callback)) {
        add_filter('excerpt_more', $more_callback);
    }
    $output = get_the_excerpt();
    $output = apply_filters('wptexturize', $output);
    $output = apply_filters('convert_chars', $output);
    $output = '<p>' . $output . '</p>';
    echo $output;
}

// Custom View Article link to Post
function idv_blank_view_article($more)
{
    global $post;
    return '... <a class="view-article" href="' . get_permalink($post->ID) . '">' . __('Ver Artículo', 'idv2018') . '</a>';
}

// Remove Admin bar
function remove_admin_bar()
{
    return false;
}

// Remove 'text/css' from our enqueued stylesheet
function idv_style_remove($tag)
{
    return preg_replace('~\s+type=["\'][^"\']++["\']~', '', $tag);
}

// Remove thumbnail width and height dimensions that prevent fluid images in the_thumbnail
function remove_thumbnail_dimensions( $html )
{
    $html = preg_replace('/(width|height)=\"\d*\"\s/', "", $html);
    return $html;
}

// Custom Gravatar in Settings > Discussion
function idv2018gravatar ($avatar_defaults)
{
    $myavatar = get_template_directory_uri() . '/img/gravatar.jpg';
    $avatar_defaults[$myavatar] = "Custom Gravatar";
    return $avatar_defaults;
}

// Threaded Comments
function enable_threaded_comments()
{
    if (!is_admin()) {
        if (is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
            wp_enqueue_script('comment-reply');
        }
    }
}

// Custom Comments Callback
function idv2018comments($comment, $args, $depth)
{
	$GLOBALS['comment'] = $comment;
	extract($args, EXTR_SKIP);

	if ( 'div' == $args['style'] ) {
		$tag = 'div';
		$add_below = 'comment';
	} else {
		$tag = 'li';
		$add_below = 'div-comment';
	}
?>
    <!-- heads up: starting < for the html tag (li or div) in the next line: -->
    <<?php echo $tag ?> <?php comment_class(empty( $args['has_children'] ) ? '' : 'parent') ?> id="comment-<?php comment_ID() ?>">
	<?php if ( 'div' != $args['style'] ) : ?>
	<div id="div-comment-<?php comment_ID() ?>" class="comment-body">
	<?php endif; ?>
	<div class="comment-author vcard">
	<?php if ($args['avatar_size'] != 0) echo get_avatar( $comment, $args['180'] ); ?>
	<?php printf(__('<cite class="fn">%s</cite> <span class="says">says:</span>'), get_comment_author_link()) ?>
	</div>
<?php if ($comment->comment_approved == '0') : ?>
	<em class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.') ?></em>
	<br />
<?php endif; ?>

	<div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>">
		<?php
			printf( __('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a><?php edit_comment_link(__('(Edit)'),'  ','' );
		?>
	</div>

	<?php comment_text() ?>

	<div class="reply">
	<?php comment_reply_link(array_merge( $args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
	</div>
	<?php if ( 'div' != $args['style'] ) : ?>
	</div>
	<?php endif; ?>
<?php }

/*------------------------------------*\
	Actions + Filters + ShortCodes
\*------------------------------------*/

// Add Actions
add_action('init', 'idv2018_header_scripts'); // Add Custom Scripts to wp_head
add_action('wp_print_scripts', 'idv2018_conditional_scripts'); // Add Conditional Page Scripts
add_action('get_header', 'enable_threaded_comments'); // Enable Threaded Comments
add_action('wp_enqueue_scripts', 'idv2018_styles'); // Add Theme Stylesheet
add_action('init', 'register_idv_menu'); // Add IDV 2018 Menu
//add_action('init', 'create_post_type_idv'); // Add our IDV 2018 Custom Post Type
add_action('widgets_init', 'my_remove_recent_comments_style'); // Remove inline Recent Comment Styles from wp_head()
add_action('init', 'idv2018_pagination'); // Add our idv Pagination

// Remove Actions
remove_action('wp_head', 'feed_links_extra', 3); // Display the links to the extra feeds such as category feeds
remove_action('wp_head', 'feed_links', 2); // Display the links to the general feeds: Post and Comment Feed
remove_action('wp_head', 'rsd_link'); // Display the link to the Really Simple Discovery service endpoint, EditURI link
remove_action('wp_head', 'wlwmanifest_link'); // Display the link to the Windows Live Writer manifest file.
remove_action('wp_head', 'index_rel_link'); // Index link
remove_action('wp_head', 'parent_post_rel_link', 10, 0); // Prev link
remove_action('wp_head', 'start_post_rel_link', 10, 0); // Start link
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // Display relational links for the posts adjacent to the current post.
remove_action('wp_head', 'wp_generator'); // Display the XHTML generator that is generated on the wp_head hook, WP version
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);

// Add Filters
add_filter('avatar_defaults', 'idv2018gravatar'); // Custom Gravatar in Settings > Discussion
add_filter('body_class', 'add_slug_to_body_class'); // Add slug to body class (Starkers build)
add_filter('widget_text', 'do_shortcode'); // Allow shortcodes in Dynamic Sidebar
add_filter('widget_text', 'shortcode_unautop'); // Remove <p> tags in Dynamic Sidebars (better!)
add_filter('wp_nav_menu_args', 'my_wp_nav_menu_args'); // Remove surrounding <div> from WP Navigation
// add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected classes (Commented out by default)
// add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected ID (Commented out by default)
// add_filter('page_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> Page ID's (Commented out by default)
add_filter('the_category', 'remove_category_rel_from_category_list'); // Remove invalid rel attribute
add_filter('the_excerpt', 'shortcode_unautop'); // Remove auto <p> tags in Excerpt (Manual Excerpts only)
add_filter('the_excerpt', 'do_shortcode'); // Allows Shortcodes to be executed in Excerpt (Manual Excerpts only)
add_filter('excerpt_more', 'idv_blank_view_article'); // Add 'View Article' button instead of [...] for Excerpts
add_filter('show_admin_bar', 'remove_admin_bar'); // Remove Admin bar
add_filter('style_loader_tag', 'idv_style_remove'); // Remove 'text/css' from enqueued stylesheet
add_filter('post_thumbnail_html', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to thumbnails
add_filter('image_send_to_editor', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to post images

// Remove Filters
remove_filter('the_excerpt', 'wpautop'); // Remove <p> tags from Excerpt altogether

// Shortcodes
add_shortcode('idv_shortcode_demo', 'idv_shortcode_demo'); // You can place [idv_shortcode_demo] in Pages, Posts now.
add_shortcode('idv_shortcode_demo_2', 'idv_shortcode_demo_2'); // Place [idv_shortcode_demo_2] in Pages, Posts now.

// Shortcodes above would be nested like this -
// [idv_shortcode_demo] [idv_shortcode_demo_2] Here's the page title! [/idv_shortcode_demo_2] [/idv_shortcode_demo]

/*------------------------------------*\
	Custom Post Types
\*------------------------------------*/

// function codex_custom_init() {
//   $labels = array(
//     'name' => _x('Proyectos', 'post type general name'),
//     'singular_name' => _x('Proyecto', 'post type singular name'),
//     'add_new' => _x('Agregar nuevo', 'proyecto'),
//     'add_new_item' => __('Agregar nuevo proyecto'),
//     'edit_item' => __('Editar Proyecto'),
//     'new_item' => __('Nuevo proyecto'),
//     'all_items' => __('Todos los proyectos'),
//     'view_item' => __('Ver proyectos'),
//     'search_items' => __('Buscar en proyectos'),
//     'not_found' =>  __('No se encontraron proyectos'),
//     'not_found_in_trash' => __('No se encontraron proyectos en la papelera'),
//     'parent_item_colon' => '',
//     'menu_name' => __('Proyectos')

//   );
//   $args = array(
//     'labels' => $labels,
//     'public' => true,
//     'publicly_queryable' => true,
//     'show_ui' => true,
//     'show_in_menu' => true,
//     'query_var' => true,
//     'rewrite' => true,
//     'capability_type' => 'post',
//     'has_archive' => true,
//     'hierarchical' => false,
//     'menu_icon' => 'dashicons-laptop',
//     'menu_position' => null,
//     'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt')
//   );
//   register_post_type('portafolio',$args);
// }
// add_action( 'init', 'codex_custom_init' );

function projects_type() {
    $labels = array(
    'name' => 'Proyectos',
    'singular_name' => 'Proyecto',
    'singular_name' => _x('Proyecto', 'post type singular name'),
    'add_new' => _x('Agregar nuevo', 'proyecto'),
    'add_new_item' => __('Agregar nuevo proyecto'),
    'edit_item' => __('Editar Proyecto'),
    'new_item' => __('Nuevo proyecto'),
    'all_items' => __('Todos los proyectos'),
    'view_item' => __('Ver proyectos'),
    'search_items' => __('Buscar en proyectos'),
    'not_found' =>  __('No se encontraron proyectos'),
    'not_found_in_trash' => __('No se encontraron proyectos en la papelera'),
    'parent_item_colon' => '',
    'menu_name' => 'Proyectos'
    );

    $dat = array(
        'label' => 'Proyectos',
        'description' => 'Proyectos de Idventiva',
        'labels' => $labels,
        'show_ui' => true,
        'query_var' => true,
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'supports' => array('title','editor','thumbnail', 'revisions', 'excerpt'),
        'public' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-laptop',
        'can_export' => true,
        'publicly_queryable' => true,
        'rewrite' => true,
        'show_in_rest' => true
    );
    register_post_type('project', $dat);
}

add_action('init', 'projects_type');

/*------------------------------------*\
	ShortCode Functions
\*------------------------------------*/

// Shortcode Demo with Nested Capability
function idv_shortcode_demo($atts, $content = null)
{
    return '<div class="shortcode-demo">' . do_shortcode($content) . '</div>'; // do_shortcode allows for nested Shortcodes
}

// Shortcode Demo with simple <h2> tag
function idv_shortcode_demo_2($atts, $content = null) // Demo Heading H2 shortcode, allows for nesting within above element. Fully expandable.
{
    return '<h2>' . $content . '</h2>';
}


// Insert slug class to body
function add_slug_body_class( $classes ) {
global $post;
if ( isset( $post ) ) {
$classes[] = $post->post_type . '-' . $post->post_name;
}
return $classes;
}
add_filter( 'body_class', 'add_slug_body_class' );

/*------------------------------------*\
	Enqueue Scripts and Styles
\*------------------------------------*/


// Cargador de Scripts Diferido
function add_theme_scripts() {
  // Stylesheets
  wp_enqueue_style( 'stylesheet', get_template_directory_uri() . '/style.css', array(), 'all');
  wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/css/fontawesome-all.min.css', array(), 'all');
  wp_enqueue_style( 'bxSlider', get_template_directory_uri() . '/css/jquery.bxslider.css', array(), 'all');
  wp_enqueue_style( 'featherlight_css', get_template_directory_uri() . '/css/featherlight.min.css', array(), 'all');
  // Scripts
  wp_enqueue_script( 'bxSlider', get_template_directory_uri() . '/js/jquery.bxslider.js', array ( 'jquery' ), true);
  wp_enqueue_script( 'featherlight', get_template_directory_uri() . '/js/featherlight.min.js', array ( 'jquery' ), true);
  wp_enqueue_script( 'parallax_tilt', get_template_directory_uri() . '/js/tilt.jquery.js', array ( 'jquery' ), true);
  wp_enqueue_script( 'anime', get_template_directory_uri() . '/js/anime.min.js', array ( 'jquery' ), true);
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );
