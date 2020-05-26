<?php
include_once "data/functions.php";

if (isset($_COOKIE["infosubmitted"])) {
html_header("Kysely");
?>

<form action="submitform.php" method="post">

<div class="card">
<h2>Aihealue 1</h2>
<p>Tässä aihealueessa tullaan kysymään kysymyksiä aiheesta lorem ipsum dolor.</p>
</div>

<?php
print $_COOKIE["vastaaja"] . " " . $_COOKIE["vastaaja_email"];
question(1);
question(2);
?>
<div class="card">
<h2>Aihealue 2</h2>
<p>Lorem ipsum dolor.</p>
</div>
<?php
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