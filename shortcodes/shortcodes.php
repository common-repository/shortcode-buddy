<?php
function page_grabber_shortcode() { 
echo '';
$args=array(
  'child_of' => $parent
);
$pages = get_pages($args);  
if ($pages) {
$pageids = array();
foreach ($pages as $page) {
$pageids[]= $page->ID;
}
$args=array(
    'include' =>  $parent . ',' . implode(",", $pageids),
	'sort_column'  => 'post_date',
	'sort_order' => 'DESC',
	'show_date'    => 'created',
  );
  wp_list_pages($args);
}
 }
function post_grabber_shortcode() { 
echo '';
$archive_query = new WP_Query('showposts=1000000000');
while ($archive_query->have_posts()) : $archive_query->the_post(); ?>
<li><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">
<?php the_title(); ?></a> 
<?php the_time(get_option('date_format'));?> 
<a href="/?cat=<?php get_category_link( $category_id ); the_category_ID( $echo ); ?>">
<?php
$category = get_the_category(); 
echo $category[0]->cat_name;
?>
</a>
</li>
<?php endwhile; ?>
<?php
 }
function post_grabber_content_exerpt_shortcode() { 
echo '';
?>
<?php query_posts('showposts=2'); ?>
<?php while (have_posts()) : the_post(); ?>
<h5><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h5>
<?php the_excerpt(__('(more?)')); ?>
<?php endwhile;
}
/*Shortcodes*/
function get_username_function( $atts, $content = null ) {
if ( is_user_logged_in() ) {
   global $current_user;
      get_currentuserinfo();
      return '<span id="buddy-username">' . $current_user->user_login . "</span>";}
else { return '<span id="buddy-visitor">Visitor</span>'; }}
add_shortcode('get_username', 'get_username_function');function get_email_function( $atts, $content = null ) {
if ( is_user_logged_in() ) {
   global $current_user;
      get_currentuserinfo();
      return '<span id="buddy-email">' . $current_user->user_email . "</span>";}
else { return '<span id="buddy-visitor">Visitor</span>'; }}
add_shortcode('get_email', 'get_email_function');
function get_firstname_function( $atts, $content = null ) {
if ( is_user_logged_in() ) {
   global $current_user;
      get_currentuserinfo();
      return '<span id="buddy-firstname">' . $current_user->user_firstname . "</span>";}
else { return '<span id="buddy-visitor">Visitor</span>'; }}
add_shortcode('get_firstname', 'get_firstname_function');function get_lastname_function( $atts, $content = null ) {
if ( is_user_logged_in() ) {
  
   global $current_user;
      get_currentuserinfo();
      return '<span id="buddy-lastname">' . $current_user->user_lastname . "</span>";
}
else { return '<span id="buddy-visitor">Visitor</span>'; }}
add_shortcode('get_lastname', 'get_lastname_function');function get_fullname_function( $atts, $content = null ) {
if ( is_user_logged_in() ) {
   global $current_user;
      get_currentuserinfo();
      return '<span id="buddy-fullname">' . $current_user->user_firstname . ' ' . $current_user->user_lastname . "</span>";
	}
else { return '<span id="buddy-visitor">Visitor</span>'; }}
add_shortcode('get_fullname', 'get_fullname_function');function get_displayname_function( $atts, $content = null ) {
if ( is_user_logged_in() ) {
   global $current_user;
      get_currentuserinfo();
      return '<span id="buddy-displayname">' . $current_user->display_name . "</span>";}
else { return '<span id="buddy-visitor">Visitor</span>'; }}
add_shortcode('get_displayname', 'get_displayname_function');/*End Shortcodes*/
// creates shortcode [page_grab]
add_shortcode('page_grab', 'page_grabber_shortcode');// creates shortcode [post_grab]
add_shortcode('post_grab', 'post_grabber_shortcode');
// creates shortcode [strong_stuff_end]
add_shortcode('strong_stuff_end', 'strong_stuff_end_shortcode');
// creates shortcode [post_grab_content_excerpt]
add_shortcode('post_grab_content_excerpt', 'post_grabber_content_exerpt_shortcode');//Below allows certian shortcodes to work in the comments area.
function init_common_shortcodes() {
  // add each shortcode you want enabled in comments
  add_shortcode('get_username', 'get_username_function');
  add_shortcode('get_email', 'get_email_function');
  add_shortcode('get_firstname', 'get_firstname_function');
  add_shortcode('get_lastname', 'get_lastname_function');
  add_shortcode('get_fullname', 'get_fullname_function');
  add_shortcode('get_displayname', 'get_displayname_function');
  
}
function init_comment_shortcodes() {
  remove_all_shortcodes();
  init_common_shortcodes();
  add_filter('comment_text', 'do_shortcode');
}
init_common_shortcodes();
add_filter('comments_template', 'init_comment_shortcodes');
function latest_post_url_shortcode( $atts, $content = null ) { 
	extract(shortcode_atts(array(  
        "cat" => '',
		"usetitle" => 'yes'   
    ), $atts)); $catquery = new WP_Query( 'cat='.$cat.'&posts_per_page=1' );
while($catquery->have_posts()) : $catquery->the_post();
?>
<a href="<?php the_permalink(); ?>"><?php if ($usetitle="yes") { the_title(); } else { return ''; }?></a>
<?php endwhile;
}
add_shortcode ('latest_post', 'latest_post_url_shortcode');function 
visitor_only_content_function($atts, $content = null ) {
	if ( is_user_logged_in() ) {
    echo '';
} else {
    return '<div id="visitor-only-content">'.do_shortcode($content).'</div>';
}
}
add_shortcode ('visitor_only_content', 'visitor_only_content_function');
function user_only_content_function($atts, $content = null ) {
	if ( is_user_logged_in() ) {
    return '<div id="user-only-content">'.do_shortcode($content).'</div>';
} else {
    return '';
}
}
add_shortcode ('user_only_content', 'user_only_content_function');
function sbuddy_box_function( $atts, $content = null ) { 
	extract(shortcode_atts(array(
		"title" => '',
		"type" => 'white'  
    ), $atts)); 
return '<div id="sbuddy_box" class="sbuddy_box_'.$type.'"><span id="sbuddy_box_title">'.$title.'</span><span id="sbuddy_box_content"><p>'.$content.'</p></span></div>';
}
add_shortcode ('buddy_box', 'sbuddy_box_function');
function sbuddy_animation_function( $atts, $content = null ) { 
	extract(shortcode_atts(array(
		"type" => '',
		"delay" => '',
		"duration" => ''
    ), $atts)); 
	if (($delay == '') && ($duration == '')) {
	return '<div id="sbuddy_animation" class="animated '.$type.'">'.do_shortcode($content).'</div>';
	}
	elseif (($delay !== '') && ($duration == '')) {
	return '<div id="sbuddy_animation" class="animated '.$type.'" style="-webkit-animation-delay: '.$delay.'s; -moz-animation-delay: '.$delay.'s; -ms-animation-delay: '.$delay.'s; -o-animation-delay: '.$delay.'s;">'.do_shortcode($content).'</div>';	
	}
	else {
		if (($delay == '') && ($duration !== '')) {
	return '<div id="sbuddy_animation" class="animated '.$type.'" style="-webkit-animation-duration: '.$duration.'s; -moz-animation-duration: '.$duration.'s; -ms-animation-duration: '.$duration.'s; -o-animation-duration: '.$duration.'s;">'.do_shortcode($content).'</div>';
		}
		elseif (($delay !== '') && ($duration !== '')) {
	return '<div id="sbuddy_animation" class="animated '.$type.'" style="-webkit-animation-duration: '.$duration.'s; -moz-animation-duration: '.$duration.'s; -ms-animation-duration: '.$duration.'s; -o-animation-duration: '.$duration.'s; -webkit-animation-delay: '.$delay.'s; -moz-animation-delay: '.$delay.'s; -ms-animation-delay: '.$delay.'s; -o-animation-delay: '.$delay.'s;">'.do_shortcode($content).'</div>';	
		}
		
	}
}
add_shortcode ('animated', 'sbuddy_animation_function');
?>