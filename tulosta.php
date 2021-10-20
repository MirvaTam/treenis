<?php
include_once 'header.php';
include 'includes/dbcon.inc.php';
if (!session_id()) session_start();

// AGREEMENTS TIEDOT VARIAABELEIKSI 
if (isset($_SESSION["username"])) {
    $yht_hlo = $_SESSION["username"];
}
$sql = "SELECT * FROM agreements WHERE band_Contact = '$yht_hlo';";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    $band_Name = $row['band_Name'];
    $band_Start = $row['band_Start'];
    $band_Tel = $row['band_Tel'];
    $band_Members = $row['band_Members'];
}
$fee = 24 * $band_Members;

// USERS TIEDOT VARIAABELEIKSI 
if (isset($_SESSION["username"])) {
    $yht_hlo = $_SESSION["username"];
}
$sql = "SELECT * FROM users WHERE usersName = '$yht_hlo';";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    $band_Email = $row['usersEmail'];
}
// MEMBERS TIEDOT VARIAABELEIKSI 
if (isset($_SESSION["username"])) {
    $yht_hlo = $_SESSION["username"];
}

$sql = "SELECT * FROM members WHERE band_Contact = '$yht_hlo';";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    $band_memberName = $row['member'];
}
?>

<!-- Divin avaus tulee headeristä div class="wrapper"-->

<div>
    <?php
    /*if (isset($_SESSION["username"])) {
            echo "<p>Olet kirjautunut sisään nimellä: " . $_SESSION["username"] . "</p>";
        }*/
    ?>
    <br>
    <h2>Käyttösopimus</h2><br>
</div>

<div class="tuloste">
    <table>
        <th>Sopimusosapuolet</th>
        <th></th>
        <tr>
            <td><b>Tilan haltija: </b><br>(myöhemmin: Yhdistys)</td>
            <td><b>Treeniksen käyttäjä:</b> <br>(myöhemmin: Vastuuhenkilö)</td>
        </tr>

        <tr>
            <td>Särö (Tyttöjen rokkileiriyhdistys ry)</td>
            <td><?php echo $_SESSION["username"]; ?></td>
        </tr>

        <tr>
            <td>Y-tunnus: 2743674-4</td>
            <td>Puh: <?php echo $band_Tel; ?></td>
        </tr>

        <tr>
            <td>info@saromusiikki.fi</td>
            <td><?php echo $band_Email; ?></td>
        </tr>
    </table>

    <table>
        <th>Bändin nimi: <?php echo $band_Name; ?></th>
        <tr>
            <td>Bändin jäsenet: <?php echo $band_Members; ?> hlö.
        </tr>
        <tr>
            <td>Treenismaksu yhteensä: <?php echo $fee; ?> euroa / kk.</td>
        </tr>
    </table>

    <table>
        <th>Treenismaksu</th>
        <tr>
            <td>Treenismaksu määräytyy bändin jäsenmäärän mukaisesti.
                Treenismaksu maksetaan kalenterikuukausittain joka kuukauden 2. päivä. <br><br>
                Vastuuhenkilön tulee maksaa treenismaksu kokonaisuudessaan yhdistyksen tilille.</td>
        </tr>
        <tr>
            <td><br>Yhdistyksellä on oikeus korottaa tai laskea treenismaksua treeniksen käyttäjien määrän muuttuessa tai tilan vuokran tai muiden kulujen noustessa. Maksun muutoksista ilmoitetaan yhtä (1) kuukautta ennen korotuksen voimaan tuloa.</td>
        </tr>
        <tr>
            <td><br>Vastuuhenkilöllä on oikeus irtisanoa sopimus päättymään yhden (1) kuukauden irtisanomisajalla. </td>
        </tr>
        <tr>
            <td><br>Treenismaksun suuruus sopimuksen tekohetkellä on 24 euroa per henkilö. Yhdistyksen hallituksen jäsenille treeniksen käyttömaksu on 0 euroa.</td>
        </tr>
    </table>

    <table>
        <th>Allekirjoitukset</th>
        <th></th>
        <tr>
            <td><?php echo "Helsingissä " . date("d.m.Y") . "<br>"; ?><br></td>
        </tr>
        <tr>
            <td><b>YHDISTYS</b></td>
            <td><b>VASTUUHENKILÖ</b></td>
        </tr>
        <tr>
            <td><br>_______________________________</td>
            <td><br>_______________________________</td>
        </tr>
        <tr>
            <td>Mari Korsu (puheenjohtaja)</td>
            <td><?php echo $yht_hlo; ?></td>
        </tr>
    </table>
</div>
<!-- Koska ei footeria tällä sivulla, pitää olla html-sivun lopetukset alla -->
</div>
</body>

</html>