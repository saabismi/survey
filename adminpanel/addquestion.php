<?php

include_once "../data/functions.php";
include_once "../data/conn_db.php";

$kysymyslause = $_POST["kysymyslause"];
$tyyppi = $_POST["tyyppi"];

$addquestion = "INSERT INTO kysymys (kysymyslause, tyyppi) VALUES ('$kysymyslause', '$tyyppi');";

mysqli_query($conn, $addquestion);

header("Location: adminpanel.php?tiedotlahetetty");