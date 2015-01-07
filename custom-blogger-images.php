<?php

/*
* Plugin Name: Custom blogger Images
* Plugin URI: http://www.starsmedia.com/CustomImages/
* Description: Add Custom blogger Image Sizes to your Themes
* Version: 1.0
* Author: Guntram Bechtold
* Author URI: http://www.starsmedia.com/
* License: GPL12
*/


function add_image_sizes() {
add_image_size( 'f285', 285, 176, TRUE );
add_image_size( 'f300', 300, 185, TRUE );
add_image_size( 'f450', 450, 278, TRUE );
add_image_size( 'f600', 600, 371, TRUE );
add_image_size( 'f950', 950, 587, TRUE );
add_image_size( 'r285', 285);
add_image_size( 'r300', 300);
add_image_size( 'r450', 450);
add_image_size( 'r600', 600);
add_image_size( 'r950', 950);
}
add_action( 'init', 'add_image_sizes' );

function display_image_sizes($sizes) {
$sizes['f285'] = __( 'Fibonacci 285' );
$sizes['f300'] = __( 'Fibonacci 300' );
$sizes['f450'] = __( 'Fibonacci 450' );
$sizes['f600'] = __( 'Fibonacci 600' );
$sizes['f950'] = __( 'Fibonacci 950' );
$sizes['r285'] = __( 'Raw 285' );
$sizes['r300'] = __( 'Raw 300' );
$sizes['r450'] = __( 'Raw 450' );
$sizes['r600'] = __( 'Raw 600' );
$sizes['r950'] = __( 'Raw 950' );

return $sizes;
}
add_filter('image_size_names_choose', 'display_image_sizes');



?>