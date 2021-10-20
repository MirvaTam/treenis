<?php

function emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat)
{
    if (empty($name) || empty($email) || empty($username) || empty($pwd) || empty($pwdRepeat)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

/*function invalidUid($username){
    if (!preg_match("/^[a-zA-Z0-9*$/]", $username)){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
} */

/*function invalidEmail($email){
    if (filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}*/

function pwdMatch($pwd, $pwdRepeat)
{
    if ($pwd !== $pwdRepeat) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function uidExists($conn, $username, $email)
{
    $sql = "SELECT * FROM users WHERE usersUid = '$username';";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    } else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function createUser($conn, $name, $email, $username, $pwd)
{
    $sql = "INSERT INTO users (usersName, usersEmail, usersUid, usersPwd) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $username, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../signup.php?error=none");
    exit();
}

// LOGIN FUNKTIOT ALLA

function emptyInputLogin($username, $pwd)
{
    if (empty($username) || empty($pwd)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function loginUser($conn, $username, $pwd)
{
    $uidExists = uidExists($conn, $username, $username);

    if ($uidExists === false) {
        header("location: ../login.php?error=wronglogin");
        exit();
    }

    $pwdHashed = $uidExists["usersPwd"];
    $checkPwd = password_verify($pwd, $pwdHashed);

    if ($checkPwd === false) {
        header("location: ../login.php?error=wronglogin");
        exit();
    } else if ($checkPwd === true) { // kun tiedot oikein mihin mennään, mitä tehdään
        session_start();
        $_SESSION["userid"] =  $uidExists["usersId"];
        $_SESSION["useruid"] =  $uidExists["usersUid"];
        $_SESSION["username"] =  $uidExists["usersName"];
        $_SESSION["useremail"] =  $uidExists["usersEmail"];
        header("location: ../oma.php");
        exit();
    }
}

// BANDIN LUONTI FUNKTIO ALLA 

function createBand($conn, $band, $startdate, $tel, $members, $yht_hlo)
{
    $sql = "INSERT INTO agreements (Band_Name, Band_Start, Band_Tel, Band_Members, Band_Contact) VALUES ('$band', '$startdate', '$tel', $members, '$yht_hlo');";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../index.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "sssis", $band, $startdate, $tel, $members, $yht_hlo);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../oma.php?status=band");
    exit();
}

function removeBand($conn, $enddate, $yht_hlo)
{
    $sql = "UPDATE agreements SET Band_End ='$enddate' WHERE band_Contact = '$yht_hlo';";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../index.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $enddate, $yht_hlo);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../oma.php?status=band");
    exit();
}


// FEEDBACK FUNKTIO ALLA

function createFeedback($conn, $feedback_txt, $feedback_email)
{
    $sql = "INSERT INTO feedback (feedbackComment, feedbackEmail) VALUES (?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../index.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $feedback_txt, $feedback_email);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../index.php?status=feedback");
    exit();
}
