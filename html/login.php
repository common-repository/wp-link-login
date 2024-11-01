<?php
/**
 * User: Stefano
 * Date: 10-giu-2010
 * Time: 12.16.57
 */
include_once('../../../../wp-config.php');
/*
if ( $_POST['wp-submit'] ) {
    if ( $_POST['log'] && $_POST['pwd'] ) {
        $errors     = new WP_Error();
    // controllo che l'user non sia stato cancellato dall'admi
        $pass       = true;
        $username   = sanitize_user( $_POST['log'] );
        $user_id    = get_profile( 'ID', $username );
            $user = wp_signon('', $secure_cookie);
            if ( !is_wp_error($user) ) {
                wp_redirect( get_option( 'siteurl' ) ); 
                exit;
            }else {
                $msg = 'Oops! Username or password is incorrect.';
            }
    }
    else
        $msg = 'Oops! Username or password is empty.';
}*/

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Login | <?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>
		<meta name="description" content="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>"/>
		<meta name="author" content="Loosecode | C'è sempre un altro bug - http://www.loosecode.com"/>

		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

		<link rel="stylesheet" type="text/css" media="screen" href="<?=LSC_LOGIN_URL;?>/css/login.css" />

        <?php wp_head(); ?>

        <script type="text/javascript" src="<?=LSC_LOGIN_URL;?>/js/general_login.js"></script>

		<meta name="robots" content="noindex,nofollow" />

	</head>
	<body>
		<div id="box-container">
            <div id="logo-form">
                <h2>Login in <?php bloginfo('name'); ?></h2>
            </div>
            <form name="frm-login" id="frm-login" method="post" action="<?=LSC_LOGIN_URL;?>/html/ajax-login.php">
				<label for="input-log">Username </label> <!-- username -->
                <div class="frm-wrap">
                    <input type="text" name="log" id="input-log" class="frm-text required" value=""/>
                </div>
				<label for="input-pwd">Password </label> <!-- password -->
                <div class="frm-wrap">
                    <input type="password" name="pwd" id="input-pwd" class="frm-text required" value=""/>
                </div>
                <input type="submit" name="wp-submit" id="submit-login" class="frm-submit" value="Log in"/>
                <div class="loading">&nbsp;</div>
            </form>
            <div id="message_error" class="results">&nbsp;</div>
		</div>
	</body>
</html>