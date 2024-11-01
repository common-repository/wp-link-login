<?php
function lsc_ll_saveChoice( $choice ){
    return ( update_option( LSC_LOGIN_CHOICE, $choice ) !== FALSE );
}

function lsc_ll_getChoice(){
    return get_option( LSC_LOGIN_CHOICE );
}

function lsc_ll_saveStyleLink( $style ){
    return ( update_option( LSC_LOGIN_STYLE_LINK, $style ) !== FALSE );
}

function lsc_ll_getStyleLink(){
    return get_option( LSC_LOGIN_STYLE_LINK );
}

function lsc_ll_insert_link( $style = null ){
    if( empty($style) ){
        if( lsc_ll_getChoice() == LSC_LOGIN_CHOICE_MANUAL )
            $style = LSC_LOGIN_STYLE_DEFAULT;
        else
            $style = lsc_ll_getStyleLink();
    }
    if ( is_user_logged_in() )
        $content = '<p class="'.$style.'"><a href="'.wp_logout_url( get_bloginfo('url') ).'" title="Logout">logout</a></p>';
    else
        $content = '<p class="'.$style.'"><a href="'.LSC_LOGIN_URL.'/html/login.php" id="link_login">login</a></p>';
    return $content;
}

function lsc_ll_link_func( $atts ) {
	extract( shortcode_atts( array(
		'style' => null
	), $atts ) );

	return lsc_ll_insert_link( $style );
}
add_shortcode( 'lsc_ll_link', 'lsc_ll_link_func' );

?>