<?php

$serverName = "localhost";
$dBUsername = "root";
$sdBPassword = "root";
$dBName = "treenis";

$conn = mysqli_connect($serverName, $dBUsername, $sdBPassword, $dBName);

if (!$conn){
    die("Conenction failed: " . mysqli_connect_error());
}



