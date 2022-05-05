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

mysqli_query($conn,"INSERT INTO utilisateur VALUES('','$ser','$sser','$identifiant','$password','$nom','$prenom','$fonction','$mail',0)");

header("Location: ../listeUsers.php");







?>