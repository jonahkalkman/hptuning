<?php
	function boilerplate_script_enqueue(){
		wp_enqueue_style('source-css', get_template_directory_uri() . '/build/css/source.css', array(),'1.0.0','all');
		wp_enqueue_script('main-js', get_template_directory_uri() . '/build/js/bundle.js', array(), '1.0.0', true);
	}
	add_action('wp_enqueue_scripts', 'boilerplate_script_enqueue');

	function boilerplate_theme_setup(){
		add_theme_support('menus');	
		register_nav_menu('primary','Header menu');
		register_nav_menu('secondary','Footer menu');
	}

	add_action('init','boilerplate_theme_setup');
	add_theme_support('post-thumbnails'); 
	add_theme_support('custom-background');
	add_theme_support('custom-header');
	add_theme_support('post-thumbnails');
	add_theme_support('custom-logo');

	// Removes "Archive:" prefix from get_the_archive_title()
	add_filter('get_the_archive_title', function ($title) {
		return preg_replace('/^\w+: /', '', $title);
	});

	// Create a custom post-type
	// function create_posttype() {
	// 	register_post_type(
	// 		'Cars',
	// 		array(
	// 			'labels' => array(
	// 				'name' => __( 'Cars' ),
	// 				'singular_name' => __( 'Car' )
	// 			),
	// 			'taxonomies' => array('category'),  
	// 			'public' => true,
	// 			'has_archive' => true,
	// 			'rewrite' => array('slug' => 'cars'),
	// 			'menu_position' => 4
	// 		));
	// }
	// add_action('init','create_posttype');

	// Add Featured Image for Custom post-type
	// function add_featured_image_support() {
	// 	add_post_type_support('cars', 'thumbnail'); 
	// }
	// add_action('init', 'add_featured_image_support');

	// Remove links from admin menu
	function remove_from_admin() {	
		// remove_menu_page('edit.php');
		// remove_menu_page('index.php');
		// remove_menu_page('edit-comments.php');		
		// remove_menu_page('tools.php');	
	}
	add_action('admin_menu','remove_from_admin');

	// Add links to admin menu
	// function add_to_admin() {
	// 	add_menu_page(
	// 		__('Updates', 'textdomain'),
	// 		'Updates',
	// 		'manage_options',
	// 		'update-core.php',
	// 		'',
	// 		'dashicons-image-rotate',
	// 		75
	// 	);
	// }
	// add_action('admin_menu', 'add_to_admin');

	// Remove items from admin bar
	function remove_from_admin_bar($wp_admin_bar) {
		$wp_admin_bar->remove_node('comments');
		$wp_admin_bar->remove_node('wp-logo');
		// $wp_admin_bar->remove_node('new-content');
		$wp_admin_bar->remove_menu('customize');
	}
	add_action('admin_bar_menu', 'remove_from_admin_bar', 999);

	// CUSTOMIZE ADMIN MENU ORDER
	function custom_menu_order($menu_ord) {
		if (!$menu_ord) return true;
		return array(
		 'index.php', // this represents the dashboard link
		 'edit.php',
		 'edit.php?post_type=page'
	 );
	}
	add_filter('custom_menu_order', 'custom_menu_order');
	add_filter('menu_order', 'custom_menu_order');

	// Update CSS within in Admin
	function admin_style() {
		wp_enqueue_style('admin-styles', get_template_directory_uri().'/style.css');
	}
	add_action('admin_enqueue_scripts', 'admin_style');
	
	function add_custom_submenu_items() {
		global $submenu;
		$submenu['plugins.php'][] = array( 'ACF', 'manage_options', 'edit.php?post_type=acf-field-group' );
		$submenu['plugins.php'][] = array( 'ContactForms 7', 'manage_options', 'admin.php?page=wpcf7' );
		$submenu['options-general.php'][] = array( 'Themes', 'manage_options', 'themes.php' );
		$submenu['options-general.php'][] = array( 'Menus', 'manage_options', 'nav-menus.php' );
		$submenu['options-general.php'][] = array( 'Editor', 'manage_options', 'theme-editor.php' );
		$submenu['options-general.php'][] = array( 'Export', 'manage_options', 'ai1wm_export' );
		$submenu['options-general.php'][] = array( 'Import', 'manage_options', 'admin.php?page=ai1wm_import' );
		$submenu['options-general.php'][] = array( 'Backup', 'manage_options', 'admin.php?page=ai1wm_backups' );
		$submenu['options-general.php'][] = array( 'Customize', 'manage_options', 'customize.php' );

	}
	add_action('admin_menu', 'add_custom_submenu_items');

	function wpse_136058_remove_menu_pages() {
		remove_menu_page('edit.php?post_type=acf-field-group');
// 		remove_menu_page( 'wpcf7' );
		remove_menu_page( 'themes.php' );
		remove_menu_page( 'ai1wm_export' );
	}
	add_action( 'admin_init', 'wpse_136058_remove_menu_pages' );

	// if (function_exists('acf_add_options_page')) {
	// 	acf_add_options_sub_page(array(
	// 		'page_title' 	=> 'Cars',
	// 		'menu_title'	=> 'Archive Cars',
	// 		'parent_slug'	=> 'edit.php?post_type=cars',
	// 	));	

	// 	acf_add_options_sub_page(array(
	// 		'page_title' 	=> 'Contactgegevens',
	// 		'menu_title'	=> 'Contactgegevens',
	// 		'parent_slug'	=> 'edit.php?post_type=page',
	// 	));	
	// }

	// add_filter('pre_get_posts', 'query_post_type');
	// function query_post_type($query) {
	// 	if(is_category()) {
	// 		$post_type = get_query_var('post_type');
	// 		if($post_type)
	// 			$post_type = $post_type;
	// 		else
	// 			$post_type = array('nav_menu_item', 'post', 'cars');
	// 		$query->set('post_type',$post_type);
	// 		return $query;
	// 	}
	// }