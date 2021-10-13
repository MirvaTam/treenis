<?php
include_once 'header.php';
?>
<!-- Divin avaus tulee headeristä div class="wrapper"-->

<?php
if (isset($_GET["error"])){
    if ($_GET["error"] == "emptyinput"){
        echo "<p class='notify'>Fill in all fields</p>";
    }
    /*else if ($_GET["error"] == "invaliduid"){
        echo "<p class='notify'>invaliduid</p>";
    }*/
    else if ($_GET["error"] == "wronglogin"){
        echo "<p class='notify'>wronglogin</p>";
    }
    else if ($_GET["error"] == "none"){
        echo "<p class='notify'>User logged in</p>";
    }
}
?>

<div class="container">
    <h2>Kirjaudu sisään</h2>
</div>
<div class="container">
    <h5> Kirjaudu sisään, niin pääset katsomaan sopimusta ja tekemään siihen muutoksia.</h5>
</div>

<section class="form">
    <form action="includes/login.inc.php" method="post">
        <input type="text" name="uid" placeholder="Email/Käyttäjänimi" autocomplete="off" autofocus>
        <br><input type="password" name="pwd" placeholder="Salasana" autocomplete="off">
        <br><button type="submit" name="submit">Kirjaudu sisään</button>
    </form>

</section>



<?php
include_once 'footer.php';
?>