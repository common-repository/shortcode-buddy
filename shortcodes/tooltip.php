<?php
function sb_tooltip_function($atts, $content = null) {
	extract( shortcode_atts( array(
		'hover' => '',
		'url' => '/',
		'title' => 'Click Here'
	), $atts ) );
	return '<a href="'.$url.'" title="'.$hover.'" class="sb_tooltip"><span title="More">'.$title.'</span></a>';
}
add_shortcode('sb_tooltip', 'sb_tooltip_function');
?>