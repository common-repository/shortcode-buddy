<?php
function shortcode_buddy_columns_function ( $atts, $content = null ) {
	extract(shortcode_atts(array(
		"type" => ''
    ), $atts)); 
	return '<div class="sb_'.($type).'">'.do_shortcode($content).'</div>';
}

add_shortcode('sb_columns', 'shortcode_buddy_columns_function');
?>