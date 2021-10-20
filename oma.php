<?php
include_once 'header.php';
include 'includes/dbcon.inc.php';
?>

<!-- Divin avaus tulee headeristä div class="wrapper"-->
<!-- OTSIKKO JA ILMOITUKSIA -->

<div class="container sopimus">
    <p> <?php
        if (isset($_SESSION["username"])) {
            echo "<p class='notify'>Olet kirjautunut sisään nimellä: " . $_SESSION["username"] . ".</p>";
        }
        ?>
    </p>
</div>

<!-- BÄNDIN TIEDOT ULOSKIRJOITETTUNA -->

<div class="oma_kooste">
    <p>Voimassa olevat tiedot näet tästä. Jos taulukko on tyhjä, sinun tulee täyttää tiedot ao. tiedonsyöttölomakkeella.</p>
    <table>
        <tr class="grey">
            <th>Bändin nimi</th>
            <th>Treenaus alk.</th>
            <th>Bändin jäsenmäärä</th>
            <th>Bändin yhteyshenkilö</th>
            <th>Yhteyshenkilön puh.</th>
            <th>Bändin kk-maksu</th>
        </tr>

        <!-- tässä kohtaa noudetaan tiedot taulukkoon -->
        <?php
        if (!session_id()) session_start();
        include 'includes/info.inc.php'; // hakee variaabelit tuolta 

        if (isset($_SESSION["username"])) {
            // echo $_SESSION["username"]; // toimii oikein
            $yht_hlo = $_SESSION["username"];
        }
        echo '<tr>
            <td> ' . $band_Name . '</td>
            <td> ' . $band_Start . '</td>
            <td> ' . $band_Members . '</td>
            <td> ' . $yht_hlo . '</td>
            <td> ' . $band_Tel . '</td>
            <td> ' . $fee . '</td>
            </tr>';
        ?>
    </table>
</div>

<table>
    <tr>
        <button><a href="tulosta.php" target="_blank">Tiedot ovat oikein, tulosta sopimus näytölle</a></button>
    </tr>
</table>


<!-- BÄNDIN TIEDOT SOPIMUKSEEN -->
<section class="flex_container_oma">

    <div class="form-grey">
        <p class='notify'>Syötä tähän bändin tiedot:</p>

        <form class="form-grey" action="includes/oma.inc.php" method="post">

            <label for="band">Treenaavan bändin nimi</label><br>
            <input type="text" name="band" placeholder="Bändin nimi" autocomplete="off"><br>

            <label for="startdate">Sopimuksen aloitus pvm</label><br>
            <input type="date" name="startdate" placeholder="aloitus pvm" autocomplete="off"><br>

            <label for="tel">Vastuuhenkilön puhelinnumero</label><br>
            <input type="text" name="tel" placeholder="puh.nro" autocomplete="off"><br>

            <label for="jasenmaara">Bändin jäsenten määrä</label><br>
            <select type="number" name="jasenmaara">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
            </select>
            <br>
            <br><button type="submit" name="sopimus_submit">Tallenna sopimuksen perustiedot</button><br>
        </form><br>
    </div>

    <div class="form-grey">

        <form class="form-grey" action="includes/irti.inc.php" method="post">

        <p><br><br><br><br><br>Jos haluat irtisanoa Treeniksen käyttöoikeuden, voit ilmoittaa tässä sopimus päättymisestä. <br></p>    
        <label for="enddate">Sopimuksen irtisanomisen pvm <br>(1 kk irtisanomisaika alkaa)</label><br>
            <input type="date" name="enddate" placeholder="irtisanomis pvm" autocomplete="off"><br>
            <br>
            
            <br><button type="submit" name="irtisanomus_submit">Irtisanon sopimuksen</button><br>
        </form><br>
    </div>
</section>
</div>





<?php
include_once 'footer.php';
?>

<!-- ?? TARPEETON ?? 
if (isset($_GET["status"])) {
            if ($_GET["status"] == 'sopimus') {
                echo "<p class='notify'>Sopimus luotu!</p>";
            }
        } -->