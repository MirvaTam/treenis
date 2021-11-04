<?php
include_once 'header.php';
?>
<!-- Divin avaus tulee headeristä div class="wrapper"-->

<?php
if (isset($_GET["error"])) {
    if ($_GET["error"] == "emptyinput") {
        echo "<p class='notify'>Fill in all fields</p>";
    }
    /*else if ($_GET["error"] == "invaliduid"){
        echo "<p class='notify'>invaliduid</p>";
    }*/ else if ($_GET["error"] == "wronglogin") {
        echo "<p class='notify'>wronglogin</p>";
    } else if ($_GET["error"] == "none") {
        echo "<p class='notify'>User logged in</p>";
    }
}
?>

<section class="flex_container">
    <div>
        <h2>Kirjaudu sisään</h2>
    </div>
    
    <div>
        <h5> Kirjaudu sisään, niin pääset katsomaan sopimusta ja tekemään siihen muutoksia.</h5>
    </div>

    <div class="form-yellow">
        <form action="includes/login.inc.php" method="post">
            <input type="text" name="uid" placeholder="Käyttäjänimi" autocomplete="off" autofocus required>
            <br><input type="password" name="pwd" placeholder="Salasana" autocomplete="off" required>
            <br><button type="submit" name="submit">Kirjaudu sisään</button>
        </form>
    </div>
</section>



<?php
include_once 'footer.php';
?>