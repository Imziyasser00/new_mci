<?php 

include("connexion.php");


$query = "DELETE FROM `service` WHERE id = ".$_GET['id'].";";
mysqli_query($conn,$query);

header("Location: ../listeServices.php");


?>