<?php 

include_once('../../../../wp-config.php'); 
include_once('../../../../wp-includes/registration.php');

if ( $_POST['log'] && $_POST['pwd'] ) {
	$errors     = new WP_Error();
// controllo che l'user non sia stato cancellato dall'admi
    $pass       = true;
    $username   = sanitize_user( $_POST['log'] );
    $user_id    = get_profile( 'ID', $username );
    if( $pass ) {
        $user = wp_signon('', $secure_cookie);
        if ( !is_wp_error($user) )
            echo "Login successful";
        else
            echo "<strong>Oops!</strong> Incorrect username or password.";
    }
    else
        echo "<strong>Oops!</strong> Invalid username or e-mail.";
}


?>