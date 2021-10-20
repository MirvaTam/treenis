<?php
include_once 'header.php';
include 'includes/dbcon.inc.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kaikki bändit</title>
</head>

<body>
    <div class="sopimus">
        <p>Lista kaikista treeniksen bändeistä:</p>
        <table>
            <tr>
                <th>Bändin nimi</th>
                <th>Bändin jäsenet (hlö)</th>
                <th>Bändin yhteyshlö</th>
                <th>Treenaus alk.</th>
                <th>Treenaus lop.</th>
            </tr>

            <!-- tässä kohtaa noudetaan tiedot taulukkoon-->
            <?php
            if (!session_id()) session_start();

            $yht_hlo = $_SESSION['username'];

            $sql = 'SELECT * FROM agreements;';
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<tr>
            <td> ' . $row['band_Name'] . '</td>
            <td> ' . $row['band_Members'] . '</td>
            <td> ' . $row['band_Contact'] . '</td>
            <td> ' . $row['band_Start'] . '</td>
            <td> ' . $row['band_End'] . '</td>
            </tr>';
            }
            ?>
        </table>

      <?php /*
        if (!session_id()) session_start();
      
      $yht_hlo = $_SESSION["username"];
      
      $sql = "SELECT * FROM agreements WHERE band_Contact = '$yht_hlo';";
      $result = mysqli_query($conn, $sql);
      
      while ($row = mysqli_fetch_assoc($result)) {
     $band_name = $row['band_Name'];
     $band_members = $row['band_Members'];
     $band_start = $row['band_Start'];
     $band_contact = $row['band_Contact'];
     echo $band_name, $band_members, $band_start, $band_contact; */
     ?>

<!-- AO. TOIMII OIKEIN -->
       <?php if (!session_id()) session_start();

        if (isset($_SESSION["username"])) {
            echo '<br>'.$_SESSION["username"].'<br>'; // toimii oikein
            $yht_hlo = $_SESSION["username"];
        }

        $sql = "SELECT band_Tel FROM agreements WHERE band_Contact = '$yht_hlo';";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $puh = $row['band_Tel'];
            echo '<br>'.$puh.'<br>';
        }
        ?>

<?php
    include_once 'footer.php';
?>


        <!-- 
$hakusql = "SELECT * FROM auto";
$tulokset = $yhteys->query($hakusql);
// jos tulosrivejä löytyi
if ($tulokset->num_rows > 0) {   
    // hae joka silmukan kierroksella uusi rivi   
    while($rivi = $tulokset->fetch_assoc()) {      
        // taulukon avaimet (hakasuluissa olevat nimet) ovat 
        TIETOKANNAN KENTTIÄ (sarakkeita)      
        echo "Rekisterinumero: " . $rivi["rekisterinro"]. " - Merkki: " . $rivi["merkki"]. " - Väri: " . $rivi["vari"]. "<br>";   }
    } else {   echo "Ei tuloksia";
    }
-->