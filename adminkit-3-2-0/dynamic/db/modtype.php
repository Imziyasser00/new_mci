<?php

include("connexion.php");


$nom = $_POST["type"];
$id = $_POST["id"];


$sql = mysqli_query($conn,"SELECT * FROM service");

$query = mysqli_query($conn,"SELECT * FROM type where id = ".$id);

$objet = $query->fetch_assoc();

while($obj = $sql->fetch_assoc()){
    rename("../Documents/".$obj["nom"]."/".$objet["type"],"../Documents/".$obj["nom"]."/".$nom);
}


 mysqli_query($conn,"UPDATE document  set lien = replace(lien,'".$objet["type"]."','".$nom."');");


mysqli_query($conn,"UPDATE `type` SET `type`='$nom' WHERE id = ".$id);





header("Location: ../TypeDoc.php");


?>