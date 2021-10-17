<?php

if (isset($_POST["submit"])){
  $band = $_POST['band'];
  $member = $_POST['member'];
 
  require_once 'dbcon.inc.php';
  require_once 'functions.inc.php';

  createMembers($conn, $band, $member);
  
  if ($_GET["error"] == "stmtfailed") {
    echo "<p class='notify'>Soittajatiedon lähetys ei onnistu, yhteysvirhe.</p>";
}else{
  header("location: ../sopimus.php?status=members");
  exit();
}
}