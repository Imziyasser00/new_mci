<?php

include("connexion.php");

$id = $_POST["service_id"];

$sserv_nom = $_POST["sserv"];

mysqli_query($conn,"INSERT INTO sservice VALUES ('','$id','$sserv_nom')");
echo "lol";
echo $id;
echo $sserv_nom;

header("Location: ../ListeSserive.php")

?>