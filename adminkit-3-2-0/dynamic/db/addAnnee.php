<?php

include("connexion.php");

$annee = $_POST["annee"];
$ref = $_POST["reference"];
echo $annee;
echo $ref;

mysqli_query($conn,"INSERT INTO annee_document VALUES ('','$annee','$ref')");
echo "lol";


header("Location: ../listeAnnees.php")

?>