<?php

//including the Mysql connect parameters.
include("db-creds.inc");
@error_reporting(0);
@$mysqli = new mysqli($host,$db_username,$db_password,$dbname);

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

// Check connection
// if (!$con)
// {
    // echo "Failed to connect to MySQL: " . mysql_error();
// }

//@mysql_select_db($dbname,$con) or die ( "Unable to connect to the database: $dbname");

$sql_connect = "SQL Connect included";

?>





 
