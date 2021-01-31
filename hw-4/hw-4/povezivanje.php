<?php

$dbHost = "localhost";
$dbUser = "root";
$dbPass="";
$dbName = "korisnici";

$pov = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName) or die("Nemoguće povezivanje");

?>