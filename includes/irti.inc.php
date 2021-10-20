<?php
if (!session_id()) session_start();

if (isset($_POST["irtisanomus_submit"])) {

    // lomakkeen tiedot tähän uusiksi variaabeleiksi
    $enddate = $_POST["enddate"];
    $yht_hlo = $_SESSION['username'];

    require_once 'dbcon.inc.php'; // tarvitaan tiedon vientiin
    require_once 'functions.inc.php'; // tarvitaan ao. funktion käyttöön

    removeBand($conn, $enddate, $yht_hlo);

    if ($_GET["error"] == "stmtfailed") {
        echo "<p class='notify'>Tiedon lähetys ei onnistu, yhteysvirhe.</p>";
    }
    if ($_GET["error"] == "stmtfailed") {
        echo "<p class='notify'>Tiedon lähetys ei onnistu, yhteysvirhe.</p>";
    }
} else {
    header("location: ../oma.php"); // go back one folder with the ../
    exit(); // ei tarvi () mutta Dani käyttää
}
