<?php
/* ATATCH */
$server = '';
$username = '';
$passw = '';
$dbname = '';
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect($server, $username, $passw, $dbname);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
