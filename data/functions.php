<?php

include_once "conn_db.php";

function html_header($title) {

print "
<!DOCTYPE html>
<html lang=\"en\">
<head>
<title>" . $title ."</title>
<meta charset=\"UTF-8\">
<link rel=\"stylesheet\" href=\"data/styles.css\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<link rel=\"shortcut icon\" href=\"favicon.ico\" type=\"image/x-icon\">
<link rel=\"icon\" href=\"favicon.ico\" type=\"image/x-icon\">
</head>

<body>

<div class=\"header\">
" . $title . "
</div>

<div class=\"grid-container\">

<div class=\"grid-header\">
" . $title . "
</div>
<div class=\"grid-content\">
";

}

function footer() {

print 
"
</div>

</div>

</body>

</html>
";

}

function question($idkys) {
    global $conn;
    $kyslause = "SELECT kysymyslause FROM kysymys WHERE kys_id = $idkys";
    $kysquery = mysqli_query($conn, $kyslause);

    print "<div class=\"card\">
    "; #kortti alkaa

    #printtaa kyssäri, joka vastaa annettua kys_id
    if (mysqli_num_rows($kysquery) > 0) {
        while ($rivi = mysqli_fetch_assoc($kysquery)) {
            print "<p>" . $rivi["kysymyslause"] . "</p>
            ";
        }
    }

    print "<input type=\"hidden\" name=\"" . $idkys . "\" value=\"". $idkys ."\">
            ";

    print "<input type=\"hidden\" name=\"vastaaja\" value=\"". $_COOKIE["vastaaja"] ."\">
            ";

    print "<input type=\"hidden\" name=\"vastaaja_email\" value=\"". $_COOKIE["vastaaja_email"] ."\">
            ";

    #printtaa vastausvaihtoehdot

    $vveMaara = "SELECT vve_id FROM kys_vve WHERE kys_id = $idkys;";
    $vveMaaraQuery = mysqli_query($conn, $vveMaara);
    $vveMaaraLuku = mysqli_num_rows($vveMaaraQuery);

    $vveSisalto = "SELECT vve_id, teksti, luonne FROM vastausvaihtoehto WHERE vve_id IN (SELECT vve_id FROM kys_vve WHERE kys_id = $idkys);";
    $vveSisaltoQuery = mysqli_query($conn, $vveSisalto);
    $vveSisaltoLuku = mysqli_num_rows($vveSisaltoQuery);
    
    if ($vveMaaraLuku > 0) {
        while ($rivi = mysqli_fetch_assoc($vveSisaltoQuery)) {
            
            print "<label class=\"" . $rivi['luonne'] . "\"><input type=\"radio\" name=\"" . $idkys . "\" value=\"" . $rivi['vve_id'] . "\">" . $rivi['teksti'] . "</label>
            ";

        }
    }
     
    print "</div>
    "; #kortti loppuu
}

function otsikko($otsikko, $teksti) {
    print "
    <div class=\"card\">
    <h2>" . $otsikko . "</h2>
    <p>" . $teksti . "</p>
    </div>";
}
