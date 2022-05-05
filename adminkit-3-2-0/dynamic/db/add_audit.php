<?php 

include("connexion.php");

$num = $_POST["num"];

$ser = $_POST["ser"];

$sser = $_POST["sser"];

$Respo = $_POST["Respo"];

$Auditeur = $_POST["Auditeur"];

$observateur = $_POST["observateur"];

$from = $_POST["from"];

$to = $_POST["to"];

$duration = $_POST["example4"];


echo $num . " " . $ser . " " . " " . $sser . " " . $Respo . " " . $Auditeur . " " . $observateur . " " . $from . " " . $to . " " . $duration;
echo '<br>'.gmdate("H:i", $duration);


?>