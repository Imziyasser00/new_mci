<?php 

include("connexion.php");

$service = $_POST["service"];

$type = $_POST["type"];

header("Location: ../Doc_type_s_liste.php?service=".$service."&type=".$type);

?>