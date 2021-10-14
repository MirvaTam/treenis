<?php
include_once 'header.php';
?>

<!-- Divin avaus tulee headeristä div class="wrapper"-->

<div class="container">
    <h2>Särö treenismaksusopimus - luo FORMI tiedonsyöttöön<br>

        <?php
        if (isset($_SESSION["useruid"])) {
            echo "Olet kirjautunut sisään nimellä: " . $_SESSION["useruid"] . "</h2>";
        }
        ?>
</div>

<section class="form-vastuuhlo">
    <form method="post">
    <label for="band">1 Treenaavan bändin nimi</label><br>
        <input type="text" name="band" placeholder="Bändin nimi" autocomplete="off"><br>
        <label for="email">2 Vastuuhenkilön email</label><br>
        <input type="text" name="email" placeholder="email" autocomplete="off"><br>

        <label for="Startdate">3 Sopimuksen aloitus pvm</label><br>
        <input type="date" name="StartDate" placeholder="aloitus pvm" autocomplete="off"><br>
        <label for="EndDate">4 Sopimuksen lopetus pvm (piilota)</label><br>
        <input type="date" name="EndDate" placeholder="lopetus pvm" autocomplete="off"><br>


        <label for="vastuuhlo">*Vastuuhenkilön nimi</label><br>
        <input type="text" name="vastuuhlo" placeholder="Etunimi Sukunimi" autocomplete="off"><br>
        <label for="hetu">Vastuuhenkilön henkilötunnus</label><br>
        <input type="text" name="hetu" placeholder="hetu" autocomplete="off"><br>
        <label for="puh">Vastuuhenkilön puhelinnumero</label><br>
        <input type="text" name="puh" placeholder="puh.nro" autocomplete="off"><br>
       
        <br><button type="submit" name="submit">Tallenna sopimuksen perus tiedot</button>
    </form>
</section>

<section class="form-bandi">
    <form method="post">
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
        <label for="nimi1">Bändin jäsenen nimi</label><br>
        <input type="text" name="nimi1" autocomplete="off"><br>
        <label for="nimi2">Bändin jäsenen nimi</label><br>
        <input type="text" name="nimi2" autocomplete="off"><br>
        <label for="nimi3">Bändin jäsenen nimi</label><br>
        <input type="text" name="nimi3" autocomplete="off"><br>
        <label for="nimi4">Bändin jäsenen nimi</label><br>
        <input type="text" name="nimi4" autocomplete="off"><br>
        <label for="nimi5">Bändin jäsenen nimi</label><br>
        <input type="text" name="nimi5" autocomplete="off"><br>
        <label for="nimi6">Bändin jäsenen nimi</label><br>
        <input type="text" name="nimi6" autocomplete="off"><br>
        <br><button type="submit" name="submit">Tallenna bändiläisten tiedot</button>
    </form>
</section>

<?php
include_once 'footer.php';
?>