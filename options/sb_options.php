<?php



// Adds the Options and Information Menu



add_action('admin_menu', 'register_shortcode_buddy_page');

function register_shortcode_buddy_page() {

add_submenu_page( 'tools.php', 'Shortcode Buddy', 'Shortcode Buddy', 'manage_options', 'shortcode-buddy', 'shortcode_buddy_page_callback' ); }

function shortcode_buddy_page_callback() {
	echo '<h1>Shortcode Buddy Information</h1>';
	echo '<h2>Below is a list of shortcodes for this plugin and what they do.</h2>';

?>

<a style="float:right; margin-top: -41px; margin-bottom: 6px;" href="https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=J3TB85RRL9TZG&lc=US&item_name=Vincent%20Astolfi%20Creative&currency_code=USD&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHosted"><img src="/wp-content/plugins/embed-width/btn_donateCC_LG.gif" /></a>
<table class="widefat" style="max-width: 98%;">
  <thead>
    <tr>
      <th>Name</th>
      <th>Function</th>
      <th>Usage</th>
      <th>Attributes</th>
      <th>TinyMCE Icon</th>
    </tr>
  </thead>
  <tfoot>
    <tr>
      <th>Name</th>
      <th>Function</th>
      <th>Usage</th>
      <th>Attributes</th>
      <th>TinyMCE Icon</th>
    </tr>
  </tfoot>
  <tbody>
    <tr>
      <td>[page_grab]</td>
      <td>Grabs the Page Title of each Page you have and lists them.</td>
      <td>[page_grab]</td>
      <td>None</td>
      <td>N/A</td>
    </tr>
    <tr>
      <td>[post_grab]</td>
      <td>Grabs the Post Title of each post you have and lists them.</td>
      <td>[post_grab]</td>
      <td>None</td>
      <td>N/A</td>
    </tr>
    <tr>
      <td>[get_email]</td>
      <td>Gets current user's email and replaces shortcode with it in content area or comment section.</td>
      <td>[get_email]</td>
      <td>None</td>
      <td>N/A</td>
    </tr>
    <tr>
      <td>[get_username]</td>
      <td>Gets current user's username and replaces shortcode with it in content area or comment section.</td>
      <td>[get_username]</td>
      <td>None</td>
      <td>N/A</td>
    </tr>
    <tr>
      <td>[get_firstname]</td>
      <td>Gets current user's first name and replaces shortcode with it in content area or comment section.</td>
      <td>[get_firstname]</td>
      <td>None</td>
      <td>N/A</td>
    </tr>
    <tr>
      <td>[get_lastname]</td>
      <td>Gets current user's email and replaces shortcode with it in content area or comment section.</td>
      <td>[get_email]</td>
      <td>None</td>
      <td>N/A</td>
    </tr>
    <tr>
      <td>[get_fullname]</td>
      <td>Gets current user's full name and replaces shortcode with it in content area or comment section.</td>
      <td>[get_fullname]</td>
      <td>None</td>
      <td>N/A</td>
    </tr>
    <tr>
      <td>[get_displayname]</td>
      <td>Gets current user's display name and replaces shortcode with it in content area or comment section.</td>
      <td>[get_displayname]</td>
      <td>None</td>
      <td>N/A</td>
    </tr>
    <tr>
      <td>[user_only_content]</td>
      <td>Only loads the content within the bracket sets if the user is logged in.</td>
      <td>[user_only_content]Some content or shortcodes go here[/user_only_content]</td>
      <td>None</td>
      <td>N/A</td>
    </tr>
    <tr>
      <td>[visitor_only_content]</td>
      <td>Only loads the content within the bracket sets if viewer is not logged into the site (visitors)</td>
      <td>[visitor_only_content]Some content or shortcodes go here[/visitor_only_content]</td>
      <td>None</td>
      <td>N/A</td>
    </tr>
    <tr>
      <td>[sb_columns]</td>
      <td>Packs your enclosed content into a percentage-based width. For the last column in a row, make sure to add "last" to the type: [sb_columns type="one_half <span style="color:red;">last</span>"]Content Goes Here[/sb_columns]</td>
      <td>[sb_columns type="one_half"]Some content or shortcodes go here[/sb_columns]. </td>
      <td>type="one_half, one_third, two_third, one_fourth, three_fourth, one_fifth, two_fifth, three_fifth, four_fifth, one_sixth, five_sixth"</td>
      <td><?php echo '<img src="' .plugins_url( 'ico/columns-button.png' , __FILE__ ). '" > ';?></td>
    </tr>
    <tr>
      <td>[animated]</td>
      <td>Creates Animations for your content. Adapted from Dan Eden's <a href="http://daneden.me/animate/" target="_blank">Animation CSS Plugin</a>. Setting a duration and delay is not manditory, the effects have default durations and delays already. You can however, set these values if you so chose. Put any other listed shortcodes inside of this shortcode for a doubley-cool effect.</td>
      <td>[animated type="bounceInUp" delay="2" duration="2"]Content Here[/animated]</td>
      <td>type="<a href="https://github.com/daneden/animate.css#cheat-sheet" target="_blank">list of types</a>" delay="2" duration="2"</td>
      <td><?php echo '<img src="' .plugins_url( 'ico/animate-button.png' , __FILE__ ). '" > ';?></td>
    </tr>
    <tr>
      <td>[buddy_box]</td>
      <td>Makes some nice boxes that hold the content inside of them nicely. (Pro tip, use along with [sb_columns] shortcodes)</td>
      <td>[buddy_box type="red"]Content Goes In Here[buddy_box]</td>
      <td>type="red, yellow, blue, white, green"</td>
      <td><?php echo '<img src="' .plugins_url( 'ico/boxes-button.png' , __FILE__ ). '" > ';?></td>
    </tr>
	<!--
	<tr>
      <td>[sb_icons]</td>
      <td>Display an icon in your content. This uses fonts to make icons, so they will be crisp. Full list <a href="http://typicons.com/">here</a>.</td>
      <td>[sb_icons type="globe" color="#888" size="10" align="left" link="http://google.com"]</td>
      <td>type="Icon Name Here <a href="http://typicons.com/">(Full List)</a>", color="#000", size="10", align="left/right", link="http://"</td>
      <td>N/A</td>
    </tr>
	-->
	<tr>
      <td>[sb_login]</td>
      <td>Adds a login form wherever you paste the shortcode.</td>
      <td>[sb_login size="medium" redirect="current" lostpass="true"]</td>
      <td>size="small/medium/large", redirect="<a title="current page user is on" href="#">current</a>/dashboard/homepage",<a title="show or hide lost password link" href="#">lostpass</a>="true/false"</td>
      <td>N/A</td>
    </tr>
  </tbody>
</table>
<div class="shortcode-buddy-footer" style="margin-top:5px; margin-right:10px;">
  <div style="font-size:15px; float:right;"> Created by <a href="http://www.nueue.net/" target="_blank">Vincent Astolfi</a> </div>
</div>
<!-- End Shortcode-Buddy-Footer -->

<?php } // End Callback ?>
