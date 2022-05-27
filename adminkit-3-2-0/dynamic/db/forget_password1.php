<?php 

include("connexion.php");

$id = $_POST["id"];

$password = $_POST["password"];

mysqli_query($conn,"UPDATE `utilisateur` SET `mdp`='$password' WHERE id = $id");

header("Location: ../pages-sign-in.php");

?>