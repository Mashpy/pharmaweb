<?php
function own_theme_custom_post() {
	register_post_type( 'teachers',
		array(
			'labels' => array(
				'name' => __( 'Teachers Option' ),
				'singular_name' => __( 'teacher' ),
				'add_new' => __( 'Add New Teacher' )
			),
			'public' => true,
			'supports' => array('thumbnail'),
			'has_archive' => true,
			'rewrite' => array('slug' => 'teacher-item'),
		)
	);
	
}
add_action('init','own_theme_custom_post');

?>