<?php
// WYSIWYG Button
add_action('init', 'add_sba_button');  
function add_sba_button() {  
   if ( current_user_can('edit_posts') &&  current_user_can('edit_pages') )  
   {  
     add_filter('mce_external_plugins', 'add_sba_plugin');
     add_filter('mce_buttons_3', 'register_button');  
   }  
}  
function register_button($buttons) {  
   array_push($buttons, "sbanimate", "sbcolumns", "sbboxes", "sbicons");  
   return $buttons;  
}  
function add_sba_plugin($plugin_array) {  
   $plugin_array['sbanimate'] = plugin_dir_url('').'shortcode-buddy/shortcodes/animate/button/editor_plugin.js';
   $plugin_array['sbcolumns'] = plugin_dir_url('').'shortcode-buddy/shortcodes/columns/button/editor_plugin.js'; 
   $plugin_array['sbboxes'] = plugin_dir_url('').'shortcode-buddy/shortcodes/boxes/button/editor_plugin.js';
   return $plugin_array;  
}
?>