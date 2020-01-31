<?php
 $db_host = "localhost";
$db_username = "azzabruc";
$db_password = "kJ7Oz3c2C-@(.%";
$db_name = "azzabruc_login";

$db_connect = mysqli_connect($db_host, $db_username, $db_password, $db_name) or die; 

//check connection

if(mysqli_connect_error()){
    echo "Failed to connect to MySQL:"mysqli_connect_error();
}

echo "Connection successful";
?>