jQuery(document).ready( function(){
//    jQuery("a#link_login").click(function(){
//		alert('123');
//	});

    jQuery("a#link_login").fancybox({
		'transitionIn'	:	'elastic',
		'transitionOut'	:	'elastic',
		'speedIn'		:	600,
		'speedOut'		:	200,
		'overlayShow'	:	true,
		'centerOnScroll':	true,
		'titleShow'     :	false,
        'width'         :   410,
        'height'        :   390,
        'type'          : 'iframe'
	});

});