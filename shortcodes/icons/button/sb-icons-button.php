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
