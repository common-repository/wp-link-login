
/******************************************************************************************************************/
// On document load...
/******************************************************************************************************************/

jQuery(function(){
    // login
    jQuery('#frm-login').submit(function(){
        jQuery('#message_error').hide("slow");
        jQuery('#frm-login .loading').show();

        var url = jQuery(this).attr('action');
        var log = jQuery('#input-log').val();
        var pwd = jQuery('#input-pwd').val();

        jQuery.ajax({
            type: "POST",
            url: url,
            data: "log="+log+"&pwd="+pwd,
                success: function(msg){
                    if (msg.match('Oops') != null) {
                        jQuery('#frm-login .loading').hide();
                        jQuery('#message_error').html('<p>'+msg+'</p>');
                        jQuery('#message_error').show("slow");
                    }
                    else {
                        parent.window.location.reload();
                    }
                }
            });
            return false;
    });
});