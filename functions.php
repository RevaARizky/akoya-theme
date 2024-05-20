<?php
/**
 * GeneratePress.
 *
 * Please do not make any edits to this file. All edits should be done in a child theme.
 *
 * @package GeneratePress
 */


// Custom Function
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link', 'status' ) );
add_theme_support( 'woocommerce' );
add_theme_support( 'title-tag' );
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'script', 'style' ) );
add_theme_support( 'customize-selective-refresh-widgets' );
add_theme_support( 'align-wide' );
add_theme_support( 'responsive-embeds' );

function cc_mime_types($mimes) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
  }
  add_filter('upload_mimes', 'cc_mime_types');

  /**
 * Enqueue scripts and styles.
 */
function akoya_global() {
	wp_enqueue_style( 'bootstrap', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.1/css/bootstrap.min.css' );		
	
	wp_enqueue_script( 'jQuery', 'https://code.jquery.com/jquery-3.7.1.min.js', array(), '3.7.1', true );	
	wp_enqueue_script( 'bootstrap', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.1/js/bootstrap.min.js', array(), '5.1.1', true );	
	
	wp_enqueue_style( 'global', get_template_directory_uri() . '/js/global.js' );		
}
add_action( 'wp_enqueue_scripts', 'akoya_global' );


function getPackage() {

	$id = $_POST['id'];

	$loop = new WP_Query(array(
		'post_type' => 'package',
		'p' => intval($id),
	));
	
	if($loop->have_posts()) : $res = array();
		while($loop->have_posts()) : $loop->the_post();
			
		if(have_rows('image_gallery')) : $image = array();
			while(have_rows('image_gallery')) : the_row();
				array_push($image, wp_get_attachment_url(get_sub_field('image', 'full')));
			endwhile;
			$res['image'] = $image;
		endif;

		if(have_rows('package')) : $package = array();
			while(have_rows('package')) : the_row();
				array_push($package, array(
					'parentId' => $id,
					'id' => get_sub_field_object('title')['name'],
					'title' => get_sub_field('title'),
					'subtitle' => get_sub_field('subtitle'),
					'description' => get_sub_field('description'),
					'titleurl' => rawurlencode(get_sub_field('title')),
					'subtitleurl' => rawurlencode(get_sub_field('subtitle')),
				));
			endwhile;
			$res['package'] = $package;
		endif;
		echo json_encode($res);
		wp_die();
		endwhile;
	endif;

}

add_action('wp_ajax_getPackage', 'getPackage');
add_action('wp_ajax_nopriv_getPackage', 'getPackage');


function getFusion() {

	$id = $_POST['id'];

	$loop = new WP_Query(array(
		'post_type' => 'fusion',
		'p' => intval($id),
	));
	
	if($loop->have_posts()) : $res = array();
		while($loop->have_posts()) : $loop->the_post();
			
		if(have_rows('fusion_gallery')) : $image = array();
			while(have_rows('fusion_gallery')) : the_row();
				array_push($image, wp_get_attachment_url(get_sub_field('image', 'full')));
			endwhile;
			$res['image'] = $image;
		endif;

		if(have_rows('fusion')) : $package = array();
			while(have_rows('fusion')) : the_row();
				array_push($package, array(
					'title' => get_sub_field('title'),
					'subtitle' => get_sub_field('subtitle'),
					'description' => get_sub_field('description')
				));
			endwhile;
			$res['package'] = $package;
		endif;
		echo json_encode($res);
		wp_die();
		endwhile;
	endif;

}

add_action('wp_ajax_getFusion', 'getFusion');
add_action('wp_ajax_nopriv_getFusion', 'getFusion');

// if(user_logged_in()) {
// 	function get_editable_roles() {
// 	    global $wp_roles;
	
// 	    $all_roles = $wp_roles->roles;
// 	    $editable_roles = apply_filters('editable_roles', $all_roles);
	
// 	    return $editable_roles;
// 	}
	
	// var_dump(get_editable_roles());
// }

// setcookie('data_ex', json_encode(array('a' => 'a', 'b' => 2, 'c' => 'asd')), time() + 3600, '/');


// var_dump($_COOKIE);


add_action( 'wpcf7_before_send_mail	', 'store_cf7_data_in_cookie', 1 );

function store_cf7_data_in_cookie( $contact_form ) {
    // Get form submission data
    $submission = WPCF7_Submission::get_instance();
	error_log('yes');

    // Make sure submission is valid
    if ( $submission ) {
        // Get form data
        $posted_data = $submission->get_posted_data();
        $title = $posted_data['fullname'] . ' - ' . $posted_data['treatdate'];
        $postId = wp_insert_post(array('post_type' => 'form-entry', 'post_status' => 'publish', 'post_title' => $title));
        $posted_data['postid'] = $postId;
        foreach($posted_data as $key => $val) {
            add_row('data', array('label' => $key, 'value' => $val), $postId);
        }

        // Convert data to JSON
        $json_data = json_encode( $posted_data );

        // Store data in WordPress cookie
        setcookie( 'cf7_data', $json_data, time() + 3600, '/' );
    }
	return $contact_form;
}
// setcookie('data_ex', json_encode(array('a' => 'asd', 'b' => 2)), time() + 3600, '/');

// var_dump($_COOKIE);
// error_log('test');

add_action('init', function() {
	register_post_type('treatment', array(
		'label' => 'Treatments',
		'public' => true,
		'hierarchical' => true,
		'supports' => array('custom-fields', 'title', 'editor', 'page-attributes')
	));
});