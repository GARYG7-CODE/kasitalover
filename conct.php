<?php


$server = "localhost";
$username = "root";
$password = "0907";
$database = "Kasitalovers";
$conecxion = new mysqli($server, $username, $password, $database, 3306) or die ("not connected");

$conecxion->set_charset("utf8");
echo "connected";

?>