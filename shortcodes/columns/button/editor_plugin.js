(function() {  
    tinymce.create('tinymce.plugins.sbcolumns', {  
        init : function(sbc, url) {  
            sbc.addButton('sbcolumns', {  
                title : 'Shortcode Buddy Columns',  
                image : url+'/columns-button.png',  
                onclick : function() { 
				
				sbc.windowManager.open({
					file : url + '/sb-columns-button.html',
					width : 450 + parseInt(sbc.getLang('columns_buddy.delta_width', 0)),
					height : 120 + parseInt(sbc.getLang('columns_buddy.delta_height', 0)),
					inline : 1
				})
   

                }  
            });  
        },  
        createControl : function(n, cm) {  
            return null;  
        },  
    });  
    tinymce.PluginManager.add('sbcolumns', tinymce.plugins.sbcolumns);  
})();