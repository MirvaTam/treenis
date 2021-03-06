<?php
include_once 'header.php';
require_once 'mailer/user_activation.php';
?>
<!-- Divin avaus tulee headeristä div class="wrapper"-->
<?php
if (isset($_GET["error"])){
    if ($_GET["error"] == "emptyinput"){
        echo "<p class='notify'>Fill in all fields</p>";
    }
    else if ($_GET["error"] == "invaliduid"){
        echo "<p class='notify'>Choose another uid username</p>";
    }
    else if ($_GET["error"] == "invalidemail"){
        echo "<p class='notify'>invalidemail</p>";
    }
    else if ($_GET["error"] == "pwdnomatch"){
        echo "<p class='notify'>pwdnomatch</p>";
    }
    else if ($_GET["error"] == "usernametaken"){
        echo "<p class='notify'>usernametaken</p>";
    }
    else if ($_GET["error"] == "stmtfailed"){
        echo "<p class='notify'>stmtfailed</p>";
    }
    else if ($_GET["error"] == "none"){
        echo "<p class='notify'>User signed up</p>";
    }
}
?>
<section class="flex_container">
<div>
    <h2>Luo uusi käyttäjä</h2>
</div><div>
    <p> Käyttäjä on bändin vastuuhenkilö, jonka nimissä treeniksen käyttösopimus tehdään. Täytä vastuuhenkilön tiedot tähän ja pääset tekemään bändille treeniksen käytöstä sopimuksen.</p>
</div>

<div class="form-yellow">
    <form action="includes/signup.inc.php" method="post">
        <input type="text" name="name" placeholder="Etunimi Sukunimi" autocomplete="off" required autofocus>
        <br><input type="text" name="email" placeholder="Email" autocomplete="off" required>
        <br><input type="text" name="uid" placeholder="Käyttäjänimi" autocomplete="off" required>
        <br><input type="password" name="pwd" placeholder="Salasana" autocomplete="off" required>
        <br><input type="password" name="pwdrepeat" placeholder="Salasana uudelleen" autocomplete="off" required>
        <br><button type="submit" name="submit">Luo uusi käyttäjä</button>
    </form>
</div>
</section>



<?php
include_once 'footer.php';
?>