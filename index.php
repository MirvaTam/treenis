<?php
include_once 'header.php';
?>

<!-- Divin avaus tulee headeristä div class="wrapper"-->

<?php
if (isset($_GET["status"])) {
    if ($_GET["status"] == "loggedout") {
        echo "<p class='notify'>Olet kirjautunut ulos.</p>";
    }
    if ($_GET["status"] == "feedback") {
        echo "<p class='notify'>Kiitos palautteestasi!</p>";
    }
}
?>
<section class="flex_container">
    <div>
        <a id="logo" href="https://www.saromusiikki.fi/treenis" target="_blank">
            <img id="logo" src="../Sopimussivusto/images/saro_vaaka.jpg"></a>
    </div>
    <div>
        <h2>Tervetuloa Särön treenikselle</h2>
    </div>
    <div>
        <p>Tällä sivustolla voit tehdä treeniksen käyttösopimuksen,
            tulostaa ja allekirjoittaa sen ja toimittaa sitten treeniksen yhteyshenkilölle.<br>
            <br> Voit myös päivittää voimassa olevan sopimuksen tietoja.
        </p>
    </div>
    <div>
        <img id="iso_kuva" src="../Sopimussivusto/images/treenis4-jonnesippola.jpg" alt="musisoijia treenikämpällä">
    </div>
</section>

<?php
include_once 'footer.php';
?>

<!-- 
<section class="container">
    <button class="column" type="button"><a class="button" href='signup.php'>Luo uusi käyttäjä</a></button>
    <button class="column" type="button"><a class="button" href='login.php'>Kirjaudu sisään</a></button>

</section>
-->