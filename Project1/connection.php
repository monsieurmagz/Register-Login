<?php
$hostname = "localhost" ;
$usernamedb ="root" ;
$passworddb ="" ;
$dbname ="website";
//connection
$conn =  mysqli_connect($hostname,$usernamedb,$passworddb,$dbname) or die ("Connection not established");
?>

