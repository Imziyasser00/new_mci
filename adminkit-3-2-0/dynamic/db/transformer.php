<?php 

include("connexion.php");

$date = $_POST["Date"];

header("Location: ../addAudit.php?annee=".$date);

?>