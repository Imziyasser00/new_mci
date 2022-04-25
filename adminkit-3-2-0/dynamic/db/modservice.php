<?php

include("connexion.php");


$nom = $_POST["service_nom"];
$ref = $_POST["ref"];
$id = $_POST["id"];


echo $id;

mysqli_query($conn,"UPDATE `service` SET `nom`='$nom',`ref`='$ref' WHERE id = ".$id);

header("Location: ../listeServices.php");


?>