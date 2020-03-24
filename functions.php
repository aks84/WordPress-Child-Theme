<?php 

/* enqueue scripts and style from parent theme */        
function twentyChild_styles() {
	wp_enqueue_style( 'parent', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'twentyChild_styles');

// Read More Button
function excerpt_readmore($more) {
return '<div class="ReadMore"><a href="'. get_permalink($post->ID) . '" class="readmore">' . 'Read More' . '</a></div>';
}

add_filter('excerpt_more', 'excerpt_readmore');
