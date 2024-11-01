(function() {  
    tinymce.create('tinymce.plugins.sbicons', {  
        init : function(sbc, url) {  
            sbc.addButton('sbicons', {  
                title : 'Shortcode Buddy Icons',  
                image : url+'/icons-button.png',  
                onclick : function() { 
				
				sbc.windowManager.open({
					file : url + '/sb-icons-button.php',
					width : 700 + parseInt(sbc.getLang('icons_buddy.delta_width', 0)),
					height : 500 + parseInt(sbc.getLang('icons_buddy.delta_height', 0)),
					inline : 1
				})
   

                }  
            });  
        },  
        createControl : function(n, cm) {  
            return null;  
        },  
    });  
    tinymce.PluginManager.add('sbicons', tinymce.plugins.sbicons);  
})();