<?php

include("connexion.php");


$nom = $_POST["service_nom"];
$ref = $_POST["ref"];
$id = $_POST["id"];



$result = mysqli_query($conn,"SELECT * FROM service WHERE id = ".$id);

$obj =$result->fetch_assoc();

echo $obj["nom"];

$sql = mysqli_query($conn,"UPDATE document  set lien = replace(lien,'".$obj["nom"]."','".$nom."');");

rename("../Documents/".$obj["nom"],"../Documents/".$nom);

mysqli_query($conn,"UPDATE `service` SET `nom`='$nom',`ref`='$ref' WHERE id = ".$id);


//header("Location: ../listeServices.php");


?>