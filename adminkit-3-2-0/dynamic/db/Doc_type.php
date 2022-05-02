<?php 

include("connexion.php");

$id = $_POST["type"];

header("Location: ../liste_Doc_Ser.php?type=".$id);

?>