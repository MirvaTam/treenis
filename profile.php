<?php
include_once 'header.php';
?>

<!-- Divin avaus tulee headeristä div class="wrapper"-->

<!-- JÄSENHAKULOMAKE -->

<div class="bandimembers">
    <form method="post">

        <label for="band">Treenaavan bändin nimi</label><br>
        <input type="text" name="band" placeholder="Bändin nimi" autocomplete="off"><br>
        <br><button type="submit" name="submit">Etsi bändin tiedot</button>
    </form>
    <?php
    if (isset($_POST["submit"])) {

        $etsi = htmlspecialchars(stripslashes(trim($_POST["submit"])));

        if (empty($etsi)) {
            echo "<p>Ei syötettyä hakua!</p>";
        } else {

            $sql = "SELECT band, member From members WHERE band LIKE '%$etsi%'";
            $query = mysqli_query($conn, $sql);
            $rowCount = mysqli_num_rows($query);
    ?>

            <div class="container-fluid padding">
                <h2 class="center"><?php echo "Hakutulos sanalle: $etsi"; ?></h2><br>

                <table class="xx">
                    <thead>
                        <tr>
                            <th>Bändi</th>
                            <th>Jäsen</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($rowCount > 0) {
                            while ($row = mysqli_fetch_array($query)) {
                                $bandi = $row['band'];
                                $nimi = $row['member'];
                        ?>
                                <tr>
                                    <td><?php echo $bandi; ?></td>
                                    <td><?php echo $nimi; ?></td>
                                    <td><button type="button" class="btn btn-primary btn-sm">Muokkaa</button>
                                        <button type="button" class="btn btn-danger btn-sm">Poista</button>
                                    </td>
                    <?php
                            }
                        } else {
                            printf("<style>table {display:none;}</style>");
                            echo "<p class='center'>Ei tuotteita.</p>";
                        }
                    }
                }
                    ?>

            </div>

            <!-- SOPIMUSPOHJA -->

            <div class="container">
                <h2>Särö treenismaksusopimus - Taulukko katselemiseen - noutaa tiedot<br>
                    <?php
                    if (isset($_SESSION["username"])) {
                        echo "Olet kirjautunut sisään nimellä: " . $_SESSION["username"] . "</h2>";
                    }
                    ?>
                    <?php
                    if (isset($_GET["status"])) {
                        if ($_GET["status"] == "band") {
                            echo "<br><p class='notify'>Olet syöttänyt uuden bändin jäsenen.</p><br>";
                        }
                    }
                    ?>
            </div>

            <table class="osapuolet">
                <h4>Sopimusosapuolet</h4>
                <th>Tilan haltija: <br>(myöhemmin Yhdistys)</th>
                <th>Treeniksen käyttäjä: <br>(myöhemmin Vastuuhenkilö)</th>

                <tr>
                    <td>Särö (Tyttöjen rokkileiriyhdistys ry)</td>
                    <td><?php echo "HELLO"; ?></td>
                </tr>

                <tr>
                    <td>Y-tunnus: 2743674-4</td>
                    <td>puh.nro</td>
                </tr>

                <tr>
                    <td>info@saromusiikki.fi</td>
                    <td><?php echo "HELLO"; ?></td>
                </tr>
            </table>

            <table class="maksu">
                <h4>Treenismaksu</h4>
                <tr>
                    <td>Treenismaksu määräytyy bändin jäsenmäärän mukaisesti. <br>
                        Treenismaksu maksetaan kalenterikuukausittain. Maksun eräpäivä on joka kk 2. päivä. <br>
                        Vastuuhenkilön tulee maksaa treenismaksu kokonaisuudessaan yhdistyksen tilille.</td>
                </tr>
                <tr>
                    <td><br>Yhdistyksellä on oikeus korottaa tai laskea treenismaksua treeniksen käyttäjien määrän muuttuessa tai tilan vuokran tai muiden kulujen noustessa. Maksun muutoksista ilmoitetaan yhtä (1) kuukautta ennen korotuksen voimaan tuloa.</td>
                </tr>
                <tr>
                    <td><br>Vastuuhenkilöllä on oikeus irtisanoa sopimus päättymään yhden (1) kuukauden irtisanomisajalla. </td>
                </tr>
                <tr>
                    <td><br>Treenismaksun suuruus sopimuksen tekohetkellä on XX euroa per henkilö. Yhdistyksen hallituksen jäsenille treeniksen käyttömaksu on 0 euroa.</td>
                </tr>
            </table>

            <table class="bandi">
                <h4>Bändin nimi: </h4>
                <tr>
                    <td>Bändin jäsenet: X hlö (nimet listattu alla)</td>
                </tr>
                <tr>
                    <td> Treenismaksu yht: xx euroa / kk.</td>
                </tr>
            </table>

            <table class="sigut">
                <h4>Allekirjoitukset</h4>
                <tr>
                    <td>Helsingissä (tänään pvm)</td>
                </tr>
                <tr>
                    <td>Yhdistys</td>
                    <td>Vastuuhenkilö</td>
                </tr>
                <tr>
                    <td>_____________________</td>
                    <td>_____________________</td>
                </tr>
                <tr>
                    <td>Mari Korsu (puheenjohtaja)</td>
                    <td>nimi</td>
                </tr>
            </table>

            <?php
            include_once 'footer.php';
            ?>