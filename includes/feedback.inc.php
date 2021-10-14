<?php

if (isset($_POST["submit"])){
  $feedback_txt = $_POST['palaute'];
  $feedback_email = $_POST['email'];
 
  require_once 'dbcon.inc.php';
  require_once 'functions.inc.php';

  createFeedback($conn, $feedback_txt, $feedback_email);
  
  if ($_GET["error"] == "stmtfailed") {
    echo "<p class='notify'>Palautteen lähetys ei onnistu, yhteysvirhe.</p>";
}else{
  header("location: ../index.php?status=feedback");
  exit();
}
}