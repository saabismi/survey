<!DOCTYPE html>
<html lang="en">
<head>
<title>Kysely - hallintapaneeli</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="../data/styles.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="../data/favicon.ico" type="image/x-icon">
<link rel="icon" href="../data/favicon.ico" type="image/x-icon">
<?php
include_once "../data/functions.php";
?>
</head>

<body>

<div class="header">
Kysely - hallintapaneeli
</div>

<div class="grid-container">

<div class="grid-header">
Admin control panel
</div>

<div class="grid-content">

<div class="card">
<h2>Lisää uusi kysymys tietokantaan:</h2>
<form action="addquestion.php" method="post">
<label>Kysymyslause:</label>
<input type="text" name="kysymyslause" required autocomplete="off">
<br>
<label>Tyyppi:</label>
<br>
<select name="tyyppi" required>
    <option value="radio">Radionappi</option>
    <!--<option value="dropdown">Alasvetolista (dropdown list)</option>-->
</select>
<br>
<br>
<input type="submit" name="submit" value="Lähetä tiedot">
</form>
</div>

<div class="card">
<h2>Lisää uusi vastausvaihtoehto tietokantaan</h2>
<form action="addchoice.php" method="post">
<label>Vastausvaihtoehdon teksti:</label>
<input type="text" name="teksti" required autocompelete="off">
<br>
<label>Luonne (väri):</label>
<br>
<select name="luonne" required>
    <option value="harmaa">Harmaa</option>
    <option value="vihrea">Vihreä</option>
    <option value="oranssi">Oranssi</option>
    <option value="keltainen">Keltainen</option>
    <option value="punainen">Punainen</option>
</select>
<br>
<br>
<input type="submit" name="submit" value="Lähetä tiedot">
</form>
</div>

<div class="card">
<h2>Liitä kysymys ja vastausvaihtoehto toisiinsa</h2>
<p>⚠️ Huomioi, että vastausvaihtoehdot on lisättävä siinä järjestyksessä kuin haluat niiden esiintyvän sivulla.</p>
<form action="kysvveliitos.php" method="post">
<p>
<label>Kysymyksen ID:</label>
<br>
<input type="text" name="kys_id" required>
</p>
<label>Vastausvaihtoehdon ID:</label>
<br>
<input type="text" name="vve_id" required>
</p>

<input type="submit" name="submit" value="Lähetä tiedot">
</form>
</div>

</div>

</div>

</div>

</body>

</html>