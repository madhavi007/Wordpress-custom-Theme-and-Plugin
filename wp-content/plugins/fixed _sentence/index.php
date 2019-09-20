<?php 
/* 
Plugin Name: Fixed sentence
Plugin URI :
Plugin Description : Plugin for fixed sentence to bottom of all post.
Author : Madhavi Jariwala
Author URI : 
Version: 0.1
*/

add_action('wp_footer', 'add_sentence');
function add_sentence(){
	echo "\n";
	echo "Fixed sentence plugin activated.";
}
?>