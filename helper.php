<?php

function get_root_dir( $dir = '' )
{
    return __DIR__ . $dir;
}

function get_root_url( $url = '' )
{
    return my_env( 'domain' ) . $url;
}

function connection_db()
{
    // Create connection
    $conn = new mysqli( my_env( 'db_host' ), my_env( 'db_username' ), my_env( 'db_password' ), my_env( 'db_name' ) );

    if ( !$conn ) {
        die( "Connection failed: " . mysqli_connect_error() );
    }

    return $conn;
}

function email_validation( $email )
{
    $email = filter_var( $email, FILTER_SANITIZE_EMAIL );

    return filter_var( $email, FILTER_VALIDATE_EMAIL );
}


// $email = filter_var( 'askfl<strong>sfskdflss@fskdfl.sfsforg', FILTER_SANITIZE_EMAIL );

// if( filter_var($email, FILTER_VALIDATE_EMAIL) === false ) {
//     echo "Email is invalid";
// } else {
//     echo "Email is valid";
// }
