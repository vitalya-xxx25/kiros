$(function(){
    var Forms = {
        init : function(){
            this.initValidators();
            this.initTooltips();
        },
        initValidators: function(){
            $.extend($.validator.defaults, {
                errorPlacement : this.validationErrorPlacement
            });
        },
        initTooltips:function(){
            $.extend($.fn.cluetip.defaults, {
                sticky	: false,
                closePosition: 'title',
                arrows: true,
                splitTitle: '|',
                cluezIndex: 2000,
                local: true,
                dropShadowSteps: 0,
                showTitle: false
            });

            $('.tip').cluetip();
        },

        getBlock : function(text, icon){
            return '<div class="info">' + text + '</div>';
        },
        getErrorBlock : function(text){
            return '<div class="info ui-state-error block"">' + text + '</div>';
        },
        validationErrorPlacement: function(error, element) {
            error.appendTo(element.parent());
        }
    }
 	Forms.init();
    window.Forms = Forms;
});
