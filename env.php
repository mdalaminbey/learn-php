<?php

function my_env( $key )
{
    $values = [
        'domain'      => 'http://learn-php.test',
        'db_host'     => 'localhost',
        'db_username' => 'root',
        'db_password' => '',
        'db_name'     => 'learn_php'
    ];

    return isset( $values[$key] ) ? $values[$key] : false;
}
