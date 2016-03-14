$(function() {
    var Login = {
        init : function(){
            $("#login-form form").validate({
                submitHandler: function(form) {
                    $('.ui-dialog-buttonpane').append('<div class="preloader inline-block"></div>');
                    $('#result').hide();
                    $(form).ajaxSubmit({
                        dataType: 'json',
                        success: function(response){
                            $('.ui-dialog-buttonpane .preloader').remove();
                            if (response.success){
                                document.location = '?';
                            } else {
                                $("#result").html(Forms.getErrorBlock(response.content));
                                $('#result').fadeIn(300);
                            }
                            return false;
                        }
                    });
                    return false;
                }
            });
        }
    };

 	  Login.init();
});
