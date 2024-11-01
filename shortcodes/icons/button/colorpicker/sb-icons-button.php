<!DOCTYPE html>
<?php function add_wordperss() {
	global $wpdb; ?>
    <head>
    <script type="text/javascript" src="colorpicker/farbtastic.js"></script>
 	<link rel="stylesheet" href="colorpicker/farbtastic.css" type="text/css" />
	<script src="<?= plugin_dir_url(__FILE__); ?>colorpicker/jquery.js"></script>
    <script type="text/javascript" src="colorpicker/jquery.js"></script>
    <title>Columns - Shortcode Buddy</title>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="../../../../../../wp-includes/js/tinymce/tiny_mce_popup.js"></script>
    <script type="text/javascript">

		//More JS Here Later

	</script>
     <script type="text/javascript" charset="utf-8">
  $(document).ready(function() {
    $('#demo').hide();
    $('#picker').farbtastic('#color');
  });
 </script>
    </head>
    <?php }
?>

    <body>
    <form id="SBColumnsShortcode">
    <div id="demo" style="color: red; font-size: 1.4em">jQuery.js is not present. You must install jQuery in this folder for the demo to work.</div>

<form action="" style="width: 400px;">
  <div class="form-item"><label for="color">Color:</label><input type="text" id="color" name="color" value="#123456" /></div><div id="picker"></div>
</form>

      <p>
        <label for="ColumnsType">Column Type:</label>
        <br />
        <br />
        <select id="columnsselection" name="column-type">
          <option id="none">none</option>
          <option id="one_half">one_half (1/2)</option>
				<option id=""><li class="typicn location" data-title="location"></li></option>
				<option id=""><li class="typicn phone" data-title="phone"></li></option>
				<option id=""><li class="typicn home" data-title="home"></li></option>
				<option id=""><li class="typicn camera" data-title="camera"></li></option>
				<option id=""><li class="typicn left" data-title="left"></li></option>
				<option id=""><li class="typicn right" data-title="right"></li></option>
				<option id=""><li class="typicn up" data-title="up"></li></option>
				<option id=""><li class="typicn down" data-title="down"></li></option>
				<option id=""><li class="typicn refresh" data-title="refresh"></li></option>
				<option id=""><li class="typicn sync" data-title="sync"></li></option>
				<option id=""><li class="typicn loop" data-title="loop"></li></option>
				<option id=""><li class="typicn repeat" data-title="repeat"></li></option>
				<option id=""><li class="typicn shuffle" data-title="shuffle"></li></option>
				<option id=""><li class="typicn rss" data-title="rss"></li></option>
				<option id=""><li class="typicn cog" data-title="cog"></li></option>
				<option id=""><li class="typicn spanner" data-title="spanner"></li></option>
				<option id=""><li class="typicn barChart" data-title="barChart"></li></option>
				<option id=""><li class="typicn pieChart" data-title="pieChart"></li></option>
				<option id=""><li class="typicn lineChart" data-title="lineChart"></li></option>
				<option id=""><li class="typicn views" data-title="views"></li></option>
				<option id=""><li class="typicn zoomIn" data-title="zoomIn"></li></option>
				<option id=""><li class="typicn zoomOut" data-title="zoomOut"></li></option>
				<option id=""><li class="typicn export" data-title="export"></li></option>
				<option id=""><li class="typicn user" data-title="user"></li></option>
				<option id=""><li class="typicn group" data-title="group"></li></option>
				<option id=""><li class="typicn microphone" data-title="microphone"></li></option>
				<option id=""><li class="typicn globe" data-title="globe"></li></option>
				<option id=""><li class="typicn thumbsUp" data-title="thumbsUp"></li></option>
				<option id=""><li class="typicn thumbsDown" data-title="thumbsDown"></li></option>
				<option id=""><li class="typicn tag" data-title="tag"></li></option>
				<option id=""><li class="typicn tab" data-title="tab"></li></option>
				<option id=""><li class="typicn warning" data-title="warning"></li></option>
				<option id=""><li class="typicn tick" data-title="tick"></li></option>
				<option id=""><li class="typicn beta" data-title="beta"></li></option>
				<option id=""><li class="typicn unlock" data-title="unlock"></li></option>
				<option id=""><li class="typicn lock" data-title="lock"></li></option>
				<option id=""><li class="typicn eject" data-title="eject"></li></option>
				<option id=""><li class="typicn move" data-title="move"></li></option>
				<option id=""><li class="typicn expand" data-title="expand"></li></option>
				<option id=""><li class="typicn cancel" data-title="cancel"></li></option>
				<option id=""><li class="typicn power" data-title="power"></li></option>
				<option id=""><li class="typicn compass" data-title="compass"></li></option>
				<option id=""><li class="typicn radar" data-title="radar"></li></option>
				<option id=""><li class="typicn directions" data-title="directions"></li></option>
				<option id=""><li class="typicn pin" data-title="pin"></li></option>
				<option id=""><li class="typicn mute" data-title="mute"></li></option>
				<option id=""><li class="typicn volume" data-title="volume"></li></option>
				<option id=""><li class="typicn world" data-title="world"></li></option>
				<option id=""><li class="typicn write" data-title="write"></li></option>
				<option id=""><li class="typicn minus" data-title="minus"></li></option>
				<option id=""><li class="typicn equals" data-title="equals"></li></option>
				<option id=""><li class="typicn feed" data-title="feed"></li></option>
				<option id=""><li class="typicn batteryNone" data-title="batteryNone"></li></option>
				<option id=""><li class="typicn batteryLow" data-title="batteryLow"></li></option>
				<option id=""><li class="typicn batteryMid" data-title="batteryMid"></li></option>
				<option id=""><li class="typicn batteryHigh" data-title="batteryHigh"></li></option>
				<option id=""><li class="typicn batteryPower" data-title="batteryPower"></li></option>
				<option id=""><li class="typicn plus" data-title="plus"></li></option>
				<option id=""><li class="typicn times" data-title="times"></li></option>
				<option id=""><li class="typicn next" data-title="next"></li></option>
				<option id=""><li class="typicn previous" data-title="previous"></li></option>
				<option id=""><li class="typicn edit" data-title="edit"></li></option>
				<option id=""><li class="typicn cut" data-title="cut"></li></option>
				<option id=""><li class="typicn anchor" data-title="anchor"></li></option>
				<option id=""><li class="typicn bookmark" data-title="bookmark"></li></option>
				<option id=""><li class="typicn music" data-title="music"></li></option>
				<option id=""><li class="typicn puzzle" data-title="puzzle"></li></option>
				<option id=""><li class="typicn archive" data-title="archive"></li></option>
				<option id=""><li class="typicn mobile" data-title="mobile"></li></option>
				<option id=""><li class="typicn contrast" data-title="contrast"></li></option>
				<option id=""><li class="typicn brightness" data-title="brightness"></li></option>
				<option id=""><li class="typicn flag" data-title="flag"></li></option>
				<option id=""><li class="typicn info" data-title="info"></li></option>
				<option id=""><li class="typicn unknown" data-title="unknown"></li></option>
				<option id=""><li class="typicn chat" data-title="chat"></li></option>
				<option id=""><li class="typicn mail" data-title="mail"></li></option>
				<option id=""><li class="typicn message" data-title="message"></li></option>
				<option id=""><li class="typicn delete" data-title="delete"></li></option>
				<option id=""><li class="typicn backspace" data-title="backspace"></li></option>
				<option id=""><li class="typicn infinity" data-title="infinity"></li></option>
				<option id=""><li class="typicn key" data-title="key"></li></option>
				<option id=""><li class="typicn time" data-title="time"></li></option>
				<option id=""><li class="typicn grid" data-title="grid"></li></option>
				<option id=""><li class="typicn list" data-title="list"></li></option>
				<option id=""><li class="typicn heart" data-title="heart"></li></option>
				<option id=""><li class="typicn star" data-title="star"></li></option>
				<option id=""><li class="typicn back" data-title="back"></li></option>
				<option id=""><li class="typicn forward" data-title="forward"></li></option>
			
        </select>
        <input type="hidden" id="ColumnsType" />
        
        
      </p>
      
<script type="text/javascript">

$('#columnsselection').change(function(){

   var id = $(this).find(':selected')[0].id;

   $('#ColumnsType').val(id);

})

</script>
<style>

#disclaimer {
	color: #444;
	font-size: 9px;
}
</style>
      <p><a href="javascript:SBCTiny.insert(SBCTiny.e)" style="background: #298CBA; text-decoration: none; color: white; float: right; padding: 7px; margin-top: 14px; border-radius: 17px; border: 1px solid lightgray;">Create Shortcode</a></p>
    </form>
</body>
</html>
<script>

var SBCTiny = {

	e: '',

	init: function(e) {

		SBCTiny.e = e;

		tinyMCEPopup.resingleimageToInnerSize();

	},

	insert: function createSBColumnsShortcode(e) {

		var columntype = $('#ColumnsType').val();
		
		function getCurrentSelection() {
    		window.getSelection();
			
		};
		
		var currentselection = getCurrentSelection
		
			
		var output = '[sb_columns ';

		if(columntype) {

			output += 'type="'+columntype+'"';

		}

		output += ']'+currentselection+'[/sb_columns]';

		tinyMCEPopup.execCommand('mceReplaceContent', false, output);

		tinyMCEPopup.close();


	}

}

tinyMCEPopup.onInit.add(SBCTiny.init, SBCTiny);
</script>
