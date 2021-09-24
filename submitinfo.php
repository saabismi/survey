<?php

$cookie1_name = "vastaaja";
$cookie1_value = $_POST["vastaaja"];
setcookie($cookie1_name, $cookie1_value); #eväste- vastaaja

$cookie2_name = "vastaaja_email";
$cookie2_value = $_POST["vastaaja_email"];
setcookie($cookie2_name, $cookie2_value); #eväste- vastaaja_email

$submitinfo = $_POST["submit"];

$cookie3_name = "infosubmitted";
$cookie3_value = $_POST["submit"];
setcookie($cookie3_name, $cookie3_value); #eväste, jotta tiedetään onko nimi ja email submitted

header("Location: survey.php");