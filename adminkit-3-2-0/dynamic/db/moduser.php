<?php

include("connexion.php");


$prenom = $_POST["Prenom"];
$nom = $_POST["nom"];
$identifiant = $_POST["identifiant"];
$password = $_POST["password"];
$fonction = $_POST["fonction"];
$mail = $_POST["mail"];
$ser = $_POST["ser"];
$sser = $_POST["sser"];
$id = $_POST["id"];

echo $id;

mysqli_query($conn,"UPDATE `utilisateur` SET `id_service`='$ser',`id_sservice`='$sser',`username`='$identifiant',`mdp`='$password',`nom`='$nom',`prenom`='$prenom',`fonction`='$fonction',`mail`='$mail' WHERE id = ".$id);
echo "lol";

header("Location: ../listeUsers.php");


?>