<?php
include_once "data/conn_db.php";
include_once "data/functions.php";

$vastaaja = $_COOKIE["vastaaja"];
$vastaaja_email = $_COOKIE["vastaaja_email"];

$tarkistaEmail = "SELECT vastaaja_email FROM vastaus WHERE vastaaja_email = $vastaaja_email;";
$tarkistaEmailQuery = mysqli_query($conn, $tarkistaEmail);
$emailMaara = mysqli_num_rows($tarkistaEmailQuery);

if ($emailMaara < 1) {

foreach ($_POST as $kys => $vve) {

    print $kys . " ja " . $vve . "<br>";

    $lahetaVastaus = "INSERT INTO vastaus (vastaaja, vastaaja_email, kys_id, vve_id) VALUES ('$vastaaja', '$vastaaja_email', '$kys', '$vve');";

    if (isset($_COOKIE["infosubmitted"])) {

        if ($emailMaara < 1) {

        mysqli_query($conn, $lahetaVastaus);
        print "Tietokantaan lisätty onnistuneesti: " . $kys . " ja " . $vve . "<br>";

        } else {
            header("Location: failed.php?email_already_submitted");
        }

    }

}

setcookie("infosubmitted", null);

header("Location: thankyou.php?success");

} else {

header("Location: failed.php?email_already_submitted");

}