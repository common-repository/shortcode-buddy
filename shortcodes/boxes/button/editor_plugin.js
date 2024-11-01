(function() {  
    tinymce.create('tinymce.plugins.sbboxes', {  
        init : function(sbb, url) {  
            sbb.addButton('sbboxes', {  
                title : 'Shortcode Buddy Boxes',  
                image : url+'/boxes-button.png',  
                onclick : function() { 
				
				sbb.windowManager.open({
					file : url + '/sb-boxes-button.html',
					width : 450 + parseInt(sbb.getLang('boxes_buddy.delta_width', 0)),
					height : 120 + parseInt(sbb.getLang('boxes_buddy.delta_height', 0)),
					inline : 1
				})
   

                }  
            });  
        },  
        createControl : function(n, cm) {  
            return null;  
        },  
    });  
    tinymce.PluginManager.add('sbboxes', tinymce.plugins.sbboxes);  
})();