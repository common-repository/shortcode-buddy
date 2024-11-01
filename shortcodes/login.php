<?php
function shortcode_buddy_login($atts, $content = null) {
	extract(shortcode_atts(array(
		"size" => 'medium',
		"redirect" => 'current',
		"lostpass" => 'yes'
	), $atts));
	
	// Define Redirects for Login/Logout
	switch ($redirect) {
	case "current":
	$current_page_logout = wp_logout_url( get_permalink() );
	$current_page_login = $_SERVER["REQUEST_URI"];
	break;
	case  'dashboard':
		$current_page_logout = wp_logout_url();
		$current_page_login = wp_login_url();
	break;
	case 'homepage':
		$current_page_logout = wp_logout_url( home_url() );
		$current_page_login = wp_login_url( home_url() );
	break;
	}
	// End Define Redirects
	// Define Size 
	if ($size == 'medium') {
		$input_size = '20';
	}
	elseif ($size == 'small') {
		$input_size = '10';
	}
	elseif ($size == 'large') {
		$input_size = '30';
	}
	else {
		$input_size = '20';
	}
	//End Define Size
	
	// Begin Form
	if ( is_user_logged_in() ) { ?>
		<a class="submit" href="<?php echo ($current_page_logout); ?>" title="Logout">Logout</a>
    <?php
	} else {
	?>
<form name="loginform" id="loginform" action="<?php echo get_option('home'); ?>/wp-login.php" method="post">
	<p>
		<label>Username<br />
		<input type="text" name="log" id="user_login" class="input" value="" size="<?php echo ($input_size);?>" tabindex="10" /></label>
	</p>
	<p>

		<label>Password<br />
		<input type="password" name="pwd" id="user_pass" class="input" value="" size="<?php echo ($input_size);?>" tabindex="20" /></label>
	</p>
	<p class="forgetmenot"><label><input name="rememberme" type="checkbox" id="rememberme" value="forever" tabindex="90" /> Remember Me</label></p>
	
		<input type="submit" name="wp-submit" id="wp-submit" class="button-primary" value="Log In" tabindex="100" />
		<input type="hidden" name="redirect_to" value="<?php echo ($current_page_login); ?>" />
		<input type="hidden" name="testcookie" value="1" />
	
</form>

<?php 	if ($lostpass == true) { ?>

				 <a href="<?php echo get_option('home'); ?>/wp-login.php?action=lostpassword" title="Password Lost and Found">Lost your password?</a><?php } 
				 
		elseif ($lostpass == false) { echo ''; } 

		else {?> <a href="<?php echo get_option('home'); ?>/wp-login.php?action=lostpassword" title="Password Lost and Found">Lost your password?</a><?php } ?>
<?php 
}}
add_shortcode ('sb_login', 'shortcode_buddy_login');
?>