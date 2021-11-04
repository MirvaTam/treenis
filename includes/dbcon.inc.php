<?php

$local = in_array($_SERVER['REMOTE_ADDR'],array('127.0.0.1','REMOTE_ADDR' => '::1'));

    if ($local){
        $serverName = "localhost";
        $dBUsername = "root";
        $dBPassword = "root";
        $dBName = "treenis";
    }
    else {
        $serverName = "127.0.0.1:xxxxx"; // etsi tämä jostain
        $dBUsername = "azure";
        $dBPassword = "6#vWHD_$";
        $dBName = "treenis";
    }

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

/* or just this alone

$serverName = "localhost";
$dBUsername = "root";
$sdBPassword = "root";
$dBName = "treenis";

$conn = mysqli_connect($serverName, $dBUsername, $sdBPassword, $dBName);

if (!$conn){
    die("Conenction failed: " . mysqli_connect_error());
} */



