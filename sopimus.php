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

<section class="form">
    <form method="post">
    <label for="band">Treenaavan bändin nimi</label><br>    
    <input type="text" name="band" placeholder="Bändin nimi"autocomplete="off" autofocus><br>
    <label for="vastuuhlo">*Vastuuhenkilön nimi</label><br>    
    <input type="text" name="vastuuhlo" placeholder="Etunimi Sukunimi" autocomplete="off"><br>
    <label for="hetu">Vastuuhenkilön henkilötunnus</label><br>    
    <input type="text" name="hetu" placeholder="hetu" autocomplete="off"><br>
    <label for="email">*Vastuuhenkilön email</label><br>    
    <input type="text" name="email" placeholder="email" autocomplete="off"><br>
    <label for="puh">Vastuuhenkilön puhelinnumero</label><br>    
    <input type="text" name="puh" placeholder="puh.nro" autocomplete="off"><br>
   
    <label for="puh">Bändin jäsenten määrä</label><br>    
    <input type="text" name="puh" autocomplete="off"><br>
    <label for="puh">Bändin jäsen</label><br>    
    <input type="text" name="puh" autocomplete="off"><br>
    <label for="puh">Bändin jäsen</label><br>    
    <input type="text" name="puh" autocomplete="off"><br>
    <label for="puh">Bändin jäsen</label><br>    
    <input type="text" name="puh"  autocomplete="off"><br>
    <label for="puh">Bändin jäsen</label><br>    
    <input type="text" name="puh" autocomplete="off"><br>
    
        
    <br><button type="submit" name="submit">Luo uusi sopimus</button>
    </form>
    </section>

<?php
include_once 'footer.php';
?>