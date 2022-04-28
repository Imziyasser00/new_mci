<?php

include("connexion.php");


$nom = $_POST["sservice_nom"];
$id = $_POST["id"];




mysqli_query($conn,"UPDATE `sservice` SET `nom`='$nom' WHERE id = ".$id);


header("Location: ../listeSservice.php");


?>