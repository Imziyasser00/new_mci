<?php 

include("connexion.php");



$annee = $_POST["annee"];


header("Location: ../plan_audit_annuel.php?annee=".$annee);


?>