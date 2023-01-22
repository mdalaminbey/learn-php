<?php

function get_root_dir( $dir = '' )
{
    return __DIR__ . $dir;
}

function get_root_url( $url = '' )
{
    return my_env( 'domain' ) . $url;
}
