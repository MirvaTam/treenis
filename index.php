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
<div class="container">
    <h2>Tervetuloa Särön treenikselle</h2>
</div>

<div class="container">
    <p>Tällä sivustolla voit tehdä treeniksen käyttösopimuksen,
        tulostaa ja allekirjoittaa sen ja toimittaa sitten treeniksen yhteyshenkilölle.<br>
       <br> Voit myös päivittää oman sopimuksen tietoja.
    </p>
</div>



<div class="nappula">
    <button type="button"><a class="button" href='signup.php'>Luo uusi käyttäjä</a></button>
</div>

<div class="container">
    <button type="button"><a class="button" href='login.php'>Kirjaudu sisään</a></button>
</div>

<?php
include_once 'footer.php';
?>