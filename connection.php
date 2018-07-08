<?php

$conn = mysql_connect( 'localhost', 'root', '' ) or die( "DB Connection Failed." );
mysql_select_db( 'db' );

include "common.php";