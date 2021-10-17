<?php
include_once 'header.php';
?>

<!-- Divin avaus tulee headeristä div class="wrapper"-->
<!-- OTSIKKO JA ILMOITUKSIA -->
<div class="container">
    <h2>Särö treenismaksusopimus - luo FORMI tiedonsyöttöön<br>

        <?php
        if (isset($_SESSION["username"])) {
            echo "Olet kirjautunut sisään nimellä: " . $_SESSION["username"] . "</h2>";
        }
        if (isset($_GET["status"])) {
            if ($_GET["status"] == 'sopimus') {
                echo "<p class='notify'>Sopimus luotu!</p>";
            }
        }
        ?>
</div>

<p>Ehkä voisi tehdä yhden sivun, josta pääsee tekemään sopparin, katsomaan ja muokkaamaan.
    <br>Eli ekaa kertaa sivulta löytyy vain Luo sopimus nappula, myöhemmin, vain muokkaa ja katso nappula.
</p>
<!-- BÄNDIN TIEDOT SOPIMUKSEEN -->
<section class="form-vastuuhlo">
    <form action="includes/sopimus.inc.php" method="post">

        <label for="band">Treenaavan bändin nimi</label><br>
        <input type="text" name="band" placeholder="Bändin nimi" autocomplete="off"><br>

        <label for="startdate">Sopimuksen aloitus pvm</label><br>
        <input type="date" name="startdate" placeholder="aloitus pvm" autocomplete="off"><br>

        <label for="tel">Vastuuhenkilön puhelinnumero</label><br>
        <input type="number" name="tel" placeholder="puh.nro" autocomplete="off"><br>

        <label for="jasenmaara">Bändin jäsenten määrä</label><br>
        <select type="number" name="jasenmaara">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
        </select>
        <br><button type="submit" name="submit">Tallenna sopimuksen perustiedot</button>
    </form>
</section>
<?php
if (isset($_GET["status"])) {
    if ($_GET["status"] == "band") {
        echo "<br><p class='notify'>Olet syöttänyt uuden bändin.</p><br>";
    }
}
?>
<!-- BÄNDIN JÄSENET SOPIMUKSEEN -->
<p>Syötä tähän bändin jäsenet.</p>

<section class="form-jasenet">

    <form action="includes/members.inc.php" method="post">
        <input type="text" name="band" placeholder="Kirjoita tähän bändin nimi">
        <input type="text" name="member" placeholder="Kirjoita tähän bändin jäsenen nimi" autocomplete="off">
        <br><button type="submit" name="submit">Tallenna soittajan tiedot</button>
    </form>

</section>

<?php
if (isset($_GET["status"])) {
    if ($_GET["status"] == "members") {
        echo "<br><p class='notify'>Olet syöttänyt uuden bändin jäsenen.</p><br>";
    }
}
?>

<?php
include_once 'footer.php';
?>