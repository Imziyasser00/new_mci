<?php 

include("connexion.php");

$ann = $_GET["annee"];

mysqli_query($conn,"UPDATE `plandaudit` SET `cop`='0' WHERE annee = $ann");

header("Location: ../plan_audit_annuel.php?annee=".$ann);


?>