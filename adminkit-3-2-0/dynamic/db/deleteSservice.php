<?php 

include("connexion.php");


$query = "DELETE FROM `sservice` WHERE id = ".$_GET['id'].";";
mysqli_query($conn,$query);

header("Location: ../listeSservice.php");

?>