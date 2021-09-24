<?php
include_once "data/functions.php";

if (isset($_COOKIE["infosubmitted"])) {
html_header("Kysely");
?>

<form action="submitform.php" method="post">

<?php
otsikko("Aihelaue 1", "Tulemme kysymyään sinulta jotain kysymyksiä");
#tämä alla oleva rivi on testausta varten, poistetaan lähitulevaisuudessa
#print $_COOKIE["vastaaja"] . " " . $_COOKIE["vastaaja_email"];
question(1);
question(2);
otsikko("Aihealue 2", "Lorem ipsum dolor sit amet.");
question(3);
?>


<div class="card">
<h2>Kyselyn lähettäminen</h2>

    <input class="personalq" type="submit" name="submitname" value="Lähetä kysely"></input>
        <label id="submitnote">⚠️ Kyselyn voi lähettää vain kerran.</label>
        
</div>

</form>

<?php
footer();
} else {
html_header("Kysely - ongelma havaittu");
?>
<div class="card">
<h3 class="punainen">Mahdollisia syitä tämän sivun näkymiselle:</h3>
<ul>
<li class="punainen">Et ole syöttänyt nimeäsi ja sähköpostiosoitettasi</li>
<li class="punainen">Olet jo täyttänyt kyselyn</li>
</ul>
<?php
}
?>