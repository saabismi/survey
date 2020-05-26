<?php

include_once "../data/functions.php";
include_once "../data/conn_db.php";

$kys_id = $_POST["kys_id"];
$vve_id = $_POST["vve_id"];

$liitoskysvve  = "INSERT INTO kys_vve (kys_id, vve_id) VALUES ('$kys_id', '$vve_id');";

mysqli_query($conn, $liitoskysvve);

header("Location: adminpanel.php?tiedotlahetetty");