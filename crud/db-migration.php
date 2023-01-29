<?php

require_once './../env.php';

require_once './../helper.php';

$connection_db = connection_db();

$servay_db_create_query = "CREATE TABLE IF NOT EXISTS servay (
	id int NOT NULL AUTO_INCREMENT,
	full_name varchar(100) NOT NULL,
	email varchar(100) NOT NULL UNIQUE,
	village varchar(255),
	PRIMARY KEY (id)
)";

$result = $connection_db->query( $servay_db_create_query );

if ( !$result ) {
    printf( "Could not create table: %s<br />", $connection_db->error );
} else {
	print_r( "DB migration run successfully" );
}
