<?php

if (isset($_POST["submit"])){

    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];

    require_once 'dbcon.inc.php';
    require_once 'functions.inc.php';

    createUser($conn, $name, $email, $username, $pwd);

    if (emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) !== false){
        header("location: ../signup.php?error=emptyinput"); 
        exit();
    }

    if (invalidUid($username) !== false){
        header("location: ../signup.php?error=invaliduid"); 
        exit();
    }

    if (invalidEmail($email) !== false){
        header("location: ../signup.php?error=invalidemail"); 
        exit();
    }

    if (pwdMatch($pwd, $pwdRepeat) !== false){
        header("location: ../signup.php?error=pwdnomatch"); 
        exit();
    }
    if (uidExists($conn, $username, $email) !== false){
        header("location: ../signup.php?error=usernametaken"); 
        exit();
    }
}
else {
    header("location: ../signup.php"); // go back one folder with the ../
    exit(); // ei tarvi () mutta Dani käyttää
}