var theme_template_dir = jQuery("meta[name=theme_template_dir]").attr('content');
jQuery(document).ready(function(){
        
        jQuery('<div></div>')
        .insertBefore('#log')
            .attr('id','log_wait')
            .css('display','none')
            .addClass('ajax-loading')
            .ajaxStart(function(){jQuery(this).show();})
            .ajaxStop(function(){jQuery(this).hide();});
            
            
        jQuery('#contacts').submit(function() {
            jQuery.post(theme_template_dir + '/include/inc_sendmail.php',jQuery(this).serialize(), function(data){
            jQuery('#log').empty();
            jQuery('<div></div>')
            .attr('id','log_res')
            .appendTo('#log')
            .html(data);
        });
        return false;
    });
});