<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fi">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Särö Treenis</title>
  <link rel="stylesheet" href="../Sopimussivusto/css/style.css" />
</head>

<body>
  <!-- NAVIGOINTIPALKKI-->
  <header class="nav">
    <input type="checkbox" id="nav-check" />

    <div class="nav-header">
      <div class="nav-title">Särö Treenis</div>
    </div>

    <div class="nav-btn">
      <label for="nav-check">
        <span></span>
        <span></span>
        <span></span>
      </label>
    </div>

    <div class="nav-links">
      <ul>
        <li><a class="active" href="index.php">Etusivu</a></li>
        <li><a href='lista.php'>Lista</a></li>
        <?php
        if (isset($_SESSION["useruid"])) {
          echo "<li><a href='tulosta.php'>Näytä sopimus</a></li>";
          echo "<li><a href='oma.php'>Omat tiedot</a></li>";
          echo "<li><a href='includes/logout.inc.php'>Kirjaudu ulos</a></li>";
        } else {
          echo "<li><a href='signup.php'>Luo käyttäjä</a></li>";
          echo "<li><a href='login.php'>Kirjaudu</a></li>";
        }
        ?>
        <?php
        /*if ($_SESSION["useruid"] = 'admin') {
          echo "<li><a href='lista.php'>Lista</a></li>";
          echo "<li><a href='tulosta.php'>Tulosta sopimus</a></li>";
          echo "<li><a href='oma.php'>Omat tiedot</a></li>";
          echo "<li><a href='includes/logout.inc.php'>Kirjaudu ulos</a></li>";
        } else {
          echo "<li><a href='signup.php'>Luo käyttäjä</a></li>";
          echo "<li><a href='login.php'>Kirjaudu</a></li>";
        }*/
        ?>
      </ul>
    </div>
  </header>
  <div class="wrapper">
    <!-- MUISTA tämä eka div-pitää tulla mukaan -->