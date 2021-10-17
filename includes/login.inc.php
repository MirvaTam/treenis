<?php

if(isset($_POST["submit"])){

    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];

    require_once 'dbcon.inc.php';
    require_once 'functions.inc.php';

    loginUser($conn, $username, $pwd);

    if(emptyInputLogin($username, $pwd) !== false) {
    header("location: ../login.php?error=emptyinput");
    exit();
    }   
}
else {
    header("location: ../sopimus.php");
    exit();
}