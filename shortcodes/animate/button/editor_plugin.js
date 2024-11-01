(function() {  
    tinymce.create('tinymce.plugins.sbanimate', {  
        init : function(ed, url) {  
            ed.addButton('sbanimate', {  
                title : 'Add a Quote',  
                image : url+'/animate-button.png',  
                onclick : function() { 
				
				ed.windowManager.open({
					file : url + '/sb-animate-button.html',
					width : 450 + parseInt(ed.getLang('animate_buddy.delta_width', 0)),
					height : 249 + parseInt(ed.getLang('animate_buddy.delta_height', 0)),
					inline : 1
				})
   

                }  
            });  
        },  
        createControl : function(n, cm) {  
            return null;  
        },  
    });  
    tinymce.PluginManager.add('sbanimate', tinymce.plugins.sbanimate);  
})();