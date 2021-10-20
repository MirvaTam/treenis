<?php
include_once 'header.php';
include 'includes/dbcon.inc.php';
if (!session_id()) session_start();

// HAKEE AGREEMENTS TIEDOT VARIAABELEIKSI 
if (isset($_SESSION["username"])) {
    $yht_hlo = $_SESSION["username"];
}
$sql = "SELECT * FROM agreements WHERE band_Contact = '$yht_hlo';";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    $band_Name = $row['band_Name'];
    $band_Start = $row['band_Start']; //miten voin muuttaa ('d.m.Y') muotoon?
    $band_Tel = $row['band_Tel'];
    $band_Members = $row['band_Members'];
}
$fee = 24 * $band_Members;

// HAKEE USERS TIEDOT VARIAABELEIKSI 
if (isset($_SESSION["username"])) {
    $yht_hlo = $_SESSION["username"];
}
$sql = "SELECT * FROM users WHERE usersName = '$yht_hlo';";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    $band_Email = $row['usersEmail'];
}

