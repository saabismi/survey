<?php

include_once "../data/functions.php";
include_once "../data/conn_db.php";

$teksti = $_POST["teksti"];
$luonne = $_POST["luonne"];

$sql = "INSERT INTO vastausvaihtoehto (teksti, luonne) VALUES ('$teksti', '$luonne');";

mysqli_query($conn, $sql);

header("Location: index.php?tiedotlahetetty");