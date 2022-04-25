<?php 

include("connexion.php");


$query = "DELETE FROM `utilisateur` WHERE id = ".$_GET['id'].";";
mysqli_query($conn,$query);

header("Location: ../listeUsers.php");


?>