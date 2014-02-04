<?php
function cpt_software() {

    $labels = array( 
        'name' => _x( 'Software Applications', 'software_application' ),
        'singular_name' => _x( 'Software Application', 'software_application' ),
        'add_new' => _x( 'Add New', 'software_application' ),
        'add_new_item' => _x( 'Add New Software Application', 'software_application' ),
        'edit_item' => _x( 'Edit Software Application', 'software_application' ),
        'new_item' => _x( 'New Software Application', 'software_application' ),
        'view_item' => _x( 'View Software Application', 'software_application' ),
        'search_items' => _x( 'Search Software Applications', 'software_application' ),
        'not_found' => _x( 'No web applications found', 'software_application' ),
        'not_found_in_trash' => _x( 'No Software applications found in Trash', 'software_application' ),
        'parent_item_colon' => _x( 'Parent Spftware Application:', 'software_application' ),
        'menu_name' => _x( 'Software Applications', 'software_application' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => true,
        'description' => 'A Web Application for any shopping cart.',
        'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'page-attributes' ),        
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 20,
	'register_meta_box_cb' => 'add_softapp_metaboxes',	
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => false,
        'query_var' => false,
        'can_export' => true,
        'rewrite' => array( 
        	'slug' => 'software-application',
        	'with_front' => false,
        	'feeds' => true,
        	'pages' => true,
        	),
        'capabilities' => array(
            'edit_post' => 'edit_{$capability_type}',
            'edit_posts' => 'edit_{$capability_type}s',
            'edit_others_posts' => 'edit_others_{$capability_type}s',
	    'edit_private_posts' => 'edit_private_{$capability_type}s',
	    'edit_published_posts' => 'edit_published_{$capability_type}s',
            'publish_posts' => 'publish_{$capability_type}s',
            'read_post' => 'read_{$capability_type}',
            'read_private_posts' => 'read_private_{$capability_type}s',
            'delete_post' => 'delete_{$capability_type}',
	    'delete_posts' => 'delete_{$capability_type}s',
	    'delete_private_posts' => 'delete_private_{$capability_type}s',
	    'delete_published_posts' => 'delete_published_{$capability_type}s',
	    'delete_others_posts' => 'delete_others_{$capability_type}s'
        )
    );

    register_post_type( 'cpt_software', $args );
}

function cpt_webapp_review() {

    $labels = array( 
        'name' => _x( 'Reviews', 'review' ),
        'singular_name' => _x( 'Review', 'review' ),
        'add_new' => _x( 'Add New', 'review' ),
        'add_new_item' => _x( 'Review', 'review' ),
        'edit_item' => _x( 'Edit Review', 'review' ),
        'new_item' => _x( 'New Review', 'review' ),
        'view_item' => _x( 'View Review', 'review' ),
        'search_items' => _x( 'Search Reviews', 'review' ),
        'not_found' => _x( 'No reviews found', 'review' ),
        'not_found_in_trash' => _x( 'No reviews found in Trash', 'review' ),
        'parent_item_colon' => _x( 'Parent Review:', 'review' ),
        'menu_name' => _x( 'Reviews', 'review' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => true,
        'description' => 'A Review',
        'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'page-attributes' ),        
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 21,
	'register_meta_box_cb' => 'add_review_metaboxes',	
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => false,
        'query_var' => false,
        'can_export' => true,
        'rewrite' => array( 
        	'slug' => 'review',
        	'with_front' => false,
        	'feeds' => true,
        	'pages' => true,
        	),
        'capabilities' => array(
            'edit_post' => 'edit_{$capability_type}',
            'edit_posts' => 'edit_{$capability_type}s',
            'edit_others_posts' => 'edit_others_{$capability_type}s',
	    'edit_private_posts' => 'edit_private_{$capability_type}s',
	    'edit_published_posts' => 'edit_published_{$capability_type}s',
            'publish_posts' => 'publish_{$capability_type}s',
            'read_post' => 'read_{$capability_type}',
            'read_private_posts' => 'read_private_{$capability_type}s',
            'delete_post' => 'delete_{$capability_type}',
	    'delete_posts' => 'delete_{$capability_type}s',
	    'delete_private_posts' => 'delete_private_{$capability_type}s',
	    'delete_published_posts' => 'delete_published_{$capability_type}s',
	    'delete_others_posts' => 'delete_others_{$capability_type}s'
        )
    );

    register_post_type( 'cpt_review', $args );
}

function cpt_service() {

    $labels = array( 
        'name' => _x( 'Company Services', 'service' ),
        'singular_name' => _x( 'Web Application Review', 'service' ),
        'add_new' => _x( 'Add New', 'service' ),
        'add_new_item' => _x( 'Add New Web Application Review', 'service' ),
        'edit_item' => _x( 'Edit Web Application Review', 'service' ),
        'new_item' => _x( 'New Web Application Review', 'service' ),
        'view_item' => _x( 'View Web Application Review', 'service' ),
        'search_items' => _x( 'Search Web Application Reviews', 'service' ),
        'not_found' => _x( 'No web applications reviews found', 'service' ),
        'not_found_in_trash' => _x( 'No web applications reviews found in Trash', 'service' ),
        'parent_item_colon' => _x( 'Parent Web Application Review:', 'service' ),
        'menu_name' => _x( 'Web Application Reviews', 'service' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => true,
        'description' => 'A Company Service',
        'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'page-attributes' ),        
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 21,
	'register_meta_box_cb' => 'add_cpt_service_metaboxes',	
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => false,
        'query_var' => false,
        'can_export' => true,
        'rewrite' => array( 
        	'slug' => 'service',
        	'with_front' => false,
        	'feeds' => true,
        	'pages' => true,
        	),
        'capabilities' => array(
            'edit_post' => 'edit_{$capability_type}',
            'edit_posts' => 'edit_{$capability_type}s',
            'edit_others_posts' => 'edit_others_{$capability_type}s',
	    'edit_private_posts' => 'edit_private_{$capability_type}s',
	    'edit_published_posts' => 'edit_published_{$capability_type}s',
            'publish_posts' => 'publish_{$capability_type}s',
            'read_post' => 'read_{$capability_type}',
            'read_private_posts' => 'read_private_{$capability_type}s',
            'delete_post' => 'delete_{$capability_type}',
	    'delete_posts' => 'delete_{$capability_type}s',
	    'delete_private_posts' => 'delete_private_{$capability_type}s',
	    'delete_published_posts' => 'delete_published_{$capability_type}s',
	    'delete_others_posts' => 'delete_others_{$capability_type}s'
        )
    );

    register_post_type( 'cpt_service', $args );
}

function cpt_product() {

    $labels = array( 
        'name' => _x( 'Products', 'product' ),
        'singular_name' => _x( 'Product', 'product' ),
        'add_new' => _x( 'Add New', 'product' ),
        'add_new_item' => _x( 'Add New Product', 'product' ),
        'edit_item' => _x( 'Edit Product', 'product' ),
        'new_item' => _x( 'New Product', 'product' ),
        'view_item' => _x( 'View Product', 'product' ),
        'search_items' => _x( 'Search Products', 'product' ),
        'not_found' => _x( 'No Products found', 'product' ),
        'not_found_in_trash' => _x( 'No products found in trash', 'product' ),
        'parent_item_colon' => _x( 'Parent Product:', 'product' ),
        'menu_name' => _x( 'Products', 'product' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => true,
        'description' => 'A Product',
        'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'page-attributes' ),        
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 21,
	'register_meta_box_cb' => 'add_cpt_product_metaboxes',	
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => false,
        'query_var' => 'review_id',
        'can_export' => true,
        'rewrite' => array( 
        	'slug' => 'product',
        	'with_front' => false,
        	'feeds' => true,
        	'pages' => true,
        	),
        'capabilities' => array(
            'edit_post' => 'edit_{$capability_type}',
            'edit_posts' => 'edit_{$capability_type}s',
            'edit_others_posts' => 'edit_others_{$capability_type}s',
	    'edit_private_posts' => 'edit_private_{$capability_type}s',
	    'edit_published_posts' => 'edit_published_{$capability_type}s',
            'publish_posts' => 'publish_{$capability_type}s',
            'read_post' => 'read_{$capability_type}',
            'read_private_posts' => 'read_private_{$capability_type}s',
            'delete_post' => 'delete_{$capability_type}',
	    'delete_posts' => 'delete_{$capability_type}s',
	    'delete_private_posts' => 'delete_private_{$capability_type}s',
	    'delete_published_posts' => 'delete_published_{$capability_type}s',
	    'delete_others_posts' => 'delete_others_{$capability_type}s'
        )
    );

    register_post_type( 'cpt_product', $args );
}

add_action( 'init', array( 'cpt_software', 'cpt_review', 'cpt_service', 'cpt_product' ) );

// Flush rewrite on activateion
function cpt_rewrite_flush() {
    flush_rewrite_rules();
}
add_action( 'after_switch_theme', 'cpt_rewrite_flush' );

?>
