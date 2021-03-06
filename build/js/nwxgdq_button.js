(function() {
    tinymce.create('tinymce.plugins.buttonPlugin', {
        init : function(ed, url) {
            // Register commands
            ed.addCommand('mcebutton', function() {
                ed.windowManager.open({
                    file : plugins_url+ '/game-dev-quotes/inc/nwxgdq-dialog.php', // file that contains HTML for our modal window
                    width : 500 + parseInt(ed.getLang('button.delta_width', 0)), // size of our window
                    height : 300 + parseInt(ed.getLang('button.delta_height', 0)), // size of our window
                    inline : 1
                }, {
                    plugin_url : url
                });
            });

            // Register buttons
            ed.addButton('nwxgdq_button', {title : 'Insert Game Dev Quote', cmd : 'mcebutton', image: plugins_url+ '/game-dev-quotes/assets/img/icon.png' });
        },

        getInfo : function() {
            return {
                longname : 'Game Dev Quotes Button',
                author : 'Tony Williams',
                authorurl : 'http://www.tonyw.io',
                infourl : 'http://www.tonyw.io/game-dev-quotes',
                version : tinymce.majorVersion + "." + tinymce.minorVersion
            };
        }
    });

    // Register plugin
    // first parameter is the button ID and must match ID elsewhere
    // second parameter must match the first parameter of the tinymce.create() function above
    tinymce.PluginManager.add('nwxgdq_button', tinymce.plugins.buttonPlugin);

})();
