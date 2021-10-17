<?php

if (isset($_POST["submit"])){

    $band = $_POST["band"]; // lomakkeen tiedot tähän uusiksi variaabeleiksi
    $startdate = $_POST["startdate"];
    $tel = $_POST["tel"];
    $members = $_POST["jasenmaara"];

    require_once 'dbcon.inc.php'; // tarvitaan tiedon vientiin
    require_once 'functions.inc.php'; // tarvitaan ao. funktion käyttöön

    createBand($conn, $band, $startdate, $tel, $members);

    if ($_GET["error"] == "stmtfailed") {
        echo "<p class='notify'>Tiedon lähetys ei onnistu, yhteysvirhe.</p>";
    }
}
else {
    header("location: ../sopimus.php"); // go back one folder with the ../
    exit(); // ei tarvi () mutta Dani käyttää
    }