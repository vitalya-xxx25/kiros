$(function() {
    var Translation = {
        data: true,

        init: function(){
            this.data = keitaroData.translation;

            window.t = $.proxy(this.get, this);
        },

        get: function(path, param) {
            var translation = this.find(path.split('.'), this.data);
            if (!translation) {
                translation = path + ' is unknown translation key';
            }

            if (param) {
                translation = translation.replace('%s', param);
            }

            return translation;
        },

        find: function(path, data) {
            var key = path.shift();
            if (!data[key]) {
                return;
            }
            if (path.length) {
                return this.find(path, data[key]);
            }

            if (data[key]) {
                return data[key]
            }
        }
    }
 	Translation.init();
});

