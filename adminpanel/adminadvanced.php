<!DOCTYPE html>
<html lang="en">
<head>
<title>Survey - Advanced admin settings</title>
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
Survey - Advanced admin settings
</div>

<div class="grid-container">

<div class="grid-header">
Header is broken
</div>

<div class="grid-content">

<div class="card">
<h2>Taulujen nollaaminen</h2>
<p>Taulujen tyhjentäminen ja ID-sarakkeiden AUTO INCREMENT -määritteen nollaaminen.</p>

<form action="resetdb.php" method="post">
<select name="nollattava">
    <option value="kysymys">kysymys</option>
    <option value="vastausvaihtoehto">vastausvaihtoehto</option>
    <option value="vastaus">vastaus</option>
</select>
<input type="submit" name="submit" value="Nollaa valittu taulu">
</form>

</div>

</div>

</div>

</div>

</body>

</html>