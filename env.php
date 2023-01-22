<?php

function my_env( $key )
{
    $values = [
        'domain'  => 'http://learn-php.test',
        'db_host' => 'localhost'
    ];

    return isset( $values[$key] ) ? $values[$key] : false;
}
