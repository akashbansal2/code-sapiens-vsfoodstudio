<?php

$server = "localhost";
$username = "root";
$password = "";
$database= "foodstudio";

$con = mysqli_connect($server, $username, $password, $database);

mysqli_select_db($con, 'foodstudio');

?>
