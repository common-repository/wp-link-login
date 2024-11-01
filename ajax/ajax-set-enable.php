<?php

$dir = dirname(__FILE__);
list( $d, $rest ) = explode( 'wp-content', $dir );
require_once( $d.'wp-config.php' );
echo ( lsc_ll_saveChoice( $_POST['choice'] ) )? 'OK':'ERROR';