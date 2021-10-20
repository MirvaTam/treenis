<?php
if (!session_id()) session_start();


if (isset($_POST["sopimus_submit"])) {

    $band = $_POST["band"]; // lomakkeen tiedot tähän uusiksi variaabeleiksi
    $startdate = $_POST["startdate"];
    $tel = $_POST["tel"];
    $members = $_POST["jasenmaara"];
    $yht_hlo = $_SESSION['username'];

    require_once 'dbcon.inc.php'; // tarvitaan tiedon vientiin
    require_once 'functions.inc.php'; // tarvitaan ao. funktion käyttöön

    createBand($conn, $band, $startdate, $tel, $members, $yht_hlo);

    if ($_GET["error"] == "stmtfailed") {
        echo "<p class='notify'>Tiedon lähetys ei onnistu, yhteysvirhe.</p>";
    }
    if ($_GET["error"] == "stmtfailed") {
        echo "<p class='notify'>Tiedon lähetys ei onnistu, yhteysvirhe.</p>";
    }    
}

