<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "futsal_db";

$conn = mysqli_connect($server,$username,$password,$database) or die("Connection Failed! ".mysqli_connect_error());


?>