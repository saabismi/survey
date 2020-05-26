<?php
include_once "data/functions.php";
if (isset($_COOKIE["vastaaja_email"])) {
html_header("Kysely - olet jo täyttänyt kyselyn");
print "<div class=\"card\"><p class=\"punainen\">Olet jo täyttänyt kyselyn! Kyselyn voi täyttää vain kerran.</p></div>";
} else {
html_header("Kysely - tervetuloa kyselyyn");
?>

<div class="card">

<p><strong>Tervetuloa testikyselyyn.</strong>
Sinulta tullaan kysymään erinäisiä kysymyksiä erinäisistä aihepiireistä. Lorem ipsum dolor sit amet.</p>

<form action="submitinfo.php" method="post">

<div class="question">
<label>Ole hyvä ja syötä nimesi:</label>
<br>
<input type="text" name="vastaaja" placeholder="Etunimi Sukunimi" class="personalq" required autocomplete="off">
<br>
<label>Ole hyvä ja syötä sähköpostiosoitteesi:</label>
<br>      
<input type="text" name="vastaaja_email" placeholder="joku@esimerkki.fi" class="personalq" required autocomplete="off"> 
</div>
<br>
<input class="personalq" type="submit" name="submit" value="Seuraava vaihe"></input>

</form>

</div>

<?php
footer();
}
?>