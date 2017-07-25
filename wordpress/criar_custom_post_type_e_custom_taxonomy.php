<?php
// Colocar em function.php
// Criar custom post Type
add_action( 'init', function () {
	add_ux_builder_post_type('produtos');

	register_post_type( 'produtos',
		array(
			'labels'      => array(
				'name'          => __( 'Produtos' ),
				'singular_name' => __( 'Produto' )
			),
			'public'      => true,
			'has_archive' => true,
			'menu_icon'   => 'dashicons-products',
			'supports'    => array( 'title', 'thumbnail', 'editor' ),
			'taxonomies'  => array(
				'categoria-produtos'
			) // Add Category and Post Tags support
		)
	);
});

// Criar e registrar uma Custom Taxonomy
function custom_taxonomy() {
	$labels = array(
		'name'                       => _x( 'categoria-produtos', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'categoria-produto', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Categorias', 'text_domain' ),
		'all_items'                  => __( 'All Items', 'text_domain' ),
		'parent_item'                => __( 'Parent Item', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
		'new_item_name'              => __( 'New Item Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New Item', 'text_domain' ),
		'edit_item'                  => __( 'Edit Item', 'text_domain' ),
		'update_item'                => __( 'Update Item', 'text_domain' ),
		'view_item'                  => __( 'View Item', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Items', 'text_domain' ),
		'search_items'               => __( 'Search Items', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No items', 'text_domain' ),
		'items_list'                 => __( 'Items list', 'text_domain' ),
		'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'categoria-produtos', array( 'post' ), $args );
}
add_action( 'init', 'custom_taxonomy', 0 );