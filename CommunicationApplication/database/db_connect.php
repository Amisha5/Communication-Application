<?php 

$sname = "localhost";
$uname = "root";
$password = "root";

$db_name = "communication_app_db";

$conn = mysqli_connect($sname, $uname, $password, $db_name, 3306);

if(!$conn ) {
    echo "Connection failed!";
}

?>