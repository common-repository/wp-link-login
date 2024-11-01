<?php
/*
Plugin Name: WP LINK LOGIN
Plugin URI: http://lab.loosecode.com
Description: This plugin add a link for login and logout to each page on your weblog.
Version: 0.5
Author: Loosecode
Author URI: http://www.loosecode.com
*/

/*  Copyright 2011  Stefano D'Anselmo  (email : loosecode@gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

require_once('var.php');

// Files per le librerie
foreach ( glob(LSC_LOGIN_LIBPATH.'/*.php') as $lib ) {
    require_once($lib);
}

// Files del menu
foreach ( glob(LSC_LOGIN_FILEMENUPATH.'/*.php') as $file_menu ) {
    require_once($file_menu);
}

function lsc_ll_activate() {
    lsc_ll_saveChoice( LSC_LOGIN_CHOICE_FOOTER );
    lsc_ll_saveStyleLink( LSC_LOGIN_STYLE_DEFAULT );
}
register_activation_hook( __FILE__, 'lsc_ll_activate' );

function lsc_ll_deactivate() {
    delete_option( LSC_LOGIN_CHOICE );
    delete_option( LSC_LOGIN_STYLE_LINK );
}
register_deactivation_hook( __FILE__, 'lsc_ll_deactivate' );

/** BACK */

add_action('admin_menu', 'lsc_ll_menu');
function lsc_ll_menu() {
    add_options_page('Wp LoginLink Setting', 'Wp LoginLink Setting', 'administrator', 'lsc-ll-options', 'lsc_ll_options');
}

/** FRONT */

add_action('wp_head', 'lsc_ll_wp_head',0);
function lsc_ll_wp_head() {
    /* Register our script. */
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'fancyboxMouseWheel', LSC_LOGIN_URL . '/js/fancybox/jquery.mousewheel-3.0.4.pack.js', array('jquery') );
    wp_enqueue_script( 'fancybox', LSC_LOGIN_URL . '/js/fancybox/jquery.fancybox-1.3.4.pack.js', array('jquery','fancyboxMouseWheel') );
    wp_enqueue_script( 'myGeneral_front', LSC_LOGIN_URL . '/js/general_front.js', array('jquery','fancyboxMouseWheel','fancybox') );

    $fancyboxStyleUrl     = LSC_LOGIN_URL . '/js/fancybox/jquery.fancybox-1.3.4.css';
    wp_register_style('style-fancybox-css', $fancyboxStyleUrl);
    wp_enqueue_style( 'style-fancybox-css');
    $myStyleUrl     = LSC_LOGIN_URL . '/css/linklogin_style.css';
    wp_register_style('lsc-style-css', $myStyleUrl);
    wp_enqueue_style( 'lsc-style-css');
}

add_action('wp_footer', 'lsc_ll_wp_footer',11);
function lsc_ll_wp_footer() {
    if( lsc_ll_getChoice() == LSC_LOGIN_CHOICE_FOOTER )
        echo lsc_ll_insert_link();
}
