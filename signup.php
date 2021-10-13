<?php
include_once 'header.php';
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

<div class="container">
    <h2>Luo uusi käyttäjä (bändisopparin tekemistä varten)</h2>
</div><div>
    <h5> divi ilman classia ja background tulee wrapperista.
        En halua tähän vaan tuon h2 otsikon alle kappaletekstinä mutta rivitettynä.
        Käyttäjä on bändin vastuuhenkilö, jonka nimissä treeniksen käyttösopimus tehdään.</h5>
</div>

<section class="form">
    <form action="includes/signup.inc.php" method="post">
        <input type="text" name="name" placeholder="Etunimi Sukunimi" autocomplete="off" autofocus>
        <br><input type="text" name="email" placeholder="Email" autocomplete="off">
        <br><input type="text" name="uid" placeholder="Käyttäjänimi" autocomplete="off">
        <br><input type="password" name="pwd" placeholder="Salasana" autocomplete="off">
        <br><input type="password" name="pwdrepeat" placeholder="Salasana uudelleen" autocomplete="off">
        <br><button type="submit" name="submit">Luo uusi käyttäjä</button>
    </form>
    </section>



<?php
include_once 'footer.php';
?>