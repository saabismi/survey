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

    #print $kys . " ja " . $vve . "<br>";

    $lahetaVastaus = "INSERT INTO vastaus (vastaaja, vastaaja_email, kys_id, vve_id) VALUES ('$vastaaja', '$vastaaja_email', '$kys', '$vve');";

    if (isset($_COOKIE["infosubmitted"])) {

        if ($emailMaara < 1) {

        mysqli_query($conn, $lahetaVastaus);


        } else {
            html_header("Kysely - vastausten lähettäminen epäonnistui");
            print "<div class=\"card\"><p class=\"punainen\">Olet jo täyttänyt kyselyn! Kyselyn voi täyttää vain kerran.</p></div>
            <div class=\"card\">
            <p>Mikäli luulet tämän virheilmoituksen johtuvan jostakin muusta syystä, otathan yhteyttä kyselyn laatijaan:</p>
            <p>vilho.syvahuoko@gmail.com</p>
            </div>";
            footer();

        }

    }

}

html_header("Kysely - vastaukset lähetetty");
        print "<div class=\"card\">
            <h1 style=\"font-weight:normal;\">Kiitos kyselyn täyttämisestä!</h1>
            <h3 style=\"font-weight:normal;\">Kyselyvastauksesi on nyt lähetetty ja voit turvallisesti sulkea tämän selainikkunan.</h3>
            </div>";
            footer();

setcookie("infosubmitted", null);

} else {

            html_header("Kysely - vastausten lähettäminen epäonnistui");
            print "<div class=\"card\"><p class=\"punainen\">Olet jo täyttänyt kyselyn! Kyselyn voi täyttää vain kerran.</p></div>
            <div class=\"card\">
            <p>Mikäli luulet tämän virheilmoituksen johtuvan jostakin muusta syystä, otathan yhteyttä kyselyn laatijaan:</p>
            <p>vilho.syvahuoko@gmail.com</p>
            </div>";
            footer();
}