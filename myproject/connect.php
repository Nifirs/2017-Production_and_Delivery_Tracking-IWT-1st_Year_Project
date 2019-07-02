<?php

ini_set('max_execution_time', 6000);
//connection

$mysql_host='localhost';
$mysql_user='root';
$mysql_password='12345';

$mysql_db="production";




// Create connection
$con=mysqli_connect($mysql_host,$mysql_user,$mysql_password,$mysql_db);

// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
else
    echo"Successfully connected with the Database";



?>