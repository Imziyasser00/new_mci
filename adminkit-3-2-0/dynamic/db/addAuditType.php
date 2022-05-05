<?php 

include("connexion.php");

$qualification = $_POST["qualification"];

mysqli_query($conn,"INSERT INTO `audit_type`(`type`) VALUES ('$qualification') ");

header("Location: ../liste_qualif_audits.php");

?>