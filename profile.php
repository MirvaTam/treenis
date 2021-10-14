<?php
include_once 'header.php';
?>

<!-- Divin avaus tulee headeristä div class="wrapper"-->
        
<div class="container">
    <h2>Särö treenismaksusopimus - Taulukko katselemiseen - noutaa tiedot<br>
    <?php
          if (isset($_SESSION["username"])) {
          echo "Olet kirjautunut sisään nimellä: " . $_SESSION["username"] . "</h2>";
        }
    ?>
</div>
    
    <table class="osapuolet">
        <h4>Sopimusosapuolet</h4>
        <th>Tilan haltija: <br>(myöhemmin Yhdistys)</th>
        <th>Treeniksen käyttäjä: <br>(myöhemmin Vastuuhenkilö)</th>

        <tr>
            <td>Särö (Tyttöjen rokkileiriyhdistys ry)</td>
            <td>Käyttäjä vastuuhlö nimi</td>
        </tr>

        <tr>
            <td>Y-tunnus: 2743674-4</td>
            <td>puh.nro</td>
        </tr>

        <tr>
            <td>info@saromusiikki.fi</td>
            <td>email</td>
        </tr>
    </table>

    <table class="maksu">
        <h4>Treenismaksu</h4>
        <tr>
            <td>Treenismaksu määräytyy bändin jäsenmäärän mukaisesti. <br>
                Treenismaksu maksetaan kalenterikuukausittain. Maksun eräpäivä on joka kk 2. päivä. <br>
                Vastuuhenkilön tulee maksaa treenismaksu kokonaisuudessaan yhdistyksen tilille.</td>
        </tr>
        <tr>
            <td><br>Yhdistyksellä on oikeus korottaa tai laskea treenismaksua treeniksen käyttäjien määrän muuttuessa tai tilan vuokran tai muiden kulujen noustessa. Maksun muutoksista ilmoitetaan yhtä (1) kuukautta ennen korotuksen voimaan tuloa.</td>
        </tr>
        <tr>
            <td><br>Vastuuhenkilöllä on oikeus irtisanoa sopimus päättymään yhden (1) kuukauden irtisanomisajalla. </td>
        </tr>
        <tr>
            <td><br>Treenismaksun suuruus sopimuksen tekohetkellä on XX euroa per henkilö. Yhdistyksen hallituksen jäsenille treeniksen käyttömaksu on 0 euroa.</td>
        </tr>
    </table>

    <table class="bandi">
        <h4>Bändin nimi: </h4>
        <tr>
            <td>Bändin jäsenet: X hlö (nimet listattu alla)</td>
        </tr>
        <tr>
            <td> Treenismaksu yht: xx euroa / kk.</td>
        </tr>
        <tr>
            <td>nimi</td>
        </tr>
        <tr>
            <td>nimi</td>
        </tr>
        <tr>
            <td>nimi</td>
        </tr>
    </table>

    <table class="sigut">
        <h4>Allekirjoitukset</h4>
        <tr><td>Helsingissä (tänään pvm)</td></tr>
        <tr><td>Yhdistys</td><td>Vastuuhenkilö</td></tr>
        <tr><td>_____________________</td><td>_____________________</td></tr>
        <tr><td>Mari Korsu (puheenjohtaja)</td><td>nimi</td></tr>
    </table>

<?php
include_once 'footer.php';
?>