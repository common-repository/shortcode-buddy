<?php
function sb_icons_styles() {
	wp_register_style( 'sb_icons_style', plugins_url('css/typicons.css', __FILE__) );
	wp_enqueue_style( 'sb_icons_style' );
    }
	
add_action( 'wp_enqueue_scripts', 'sb_icons_styles' );

function sb_icons_function( $atts, $content = null ) {
	extract(shortcode_atts(array(
		"type" => '',
		"color" => 'black',
		"size" => '40',
		"align" => 'left',
		"link" => '',
), $atts));
if ($link !== '') {
	return '<a href="'.$link.'"><i class="typicn '.$type.'" data-title="'.$type.'" style="color:'.$color.'; font-size:'.$size.'px; text-align:'.$align.'; float:'.$align.';"></i></a>';
} else {
	return '<i class="typicn '.$type.'" data-title="'.$type.'" style="color:'.$color.'; font-size:'.$size.'px; text-align:'.$align.'; float:'.$align.';"></i>';
}
}
add_shortcode ('sb_icons', 'sb_icons_function');
?>