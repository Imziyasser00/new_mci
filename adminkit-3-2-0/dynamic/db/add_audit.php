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

$ann = $_POST["ann"];


echo $num . " " . $ser . " " . " " . $sser . " " . $Respo . " " . $Auditeur . " " . $observateur . " " . $from . " " . $to . " " . $duration;
$m = floor(($duration%3600)/60);
$h = floor(($duration%86400)/3600);

echo $h .'h'. $m;

$from = strtotime($from);

$from = date('d/m/Y',$from);


$to = strtotime($to);

$to = date('d/m/Y',$to);

mysqli_query($conn,"INSERT INTO `auditprevu`(`ann`, `numero`, `duree`, `id_service`, `id_sservice`, `ddatep`, `fdatep`) VALUES ('$ann','$num','".$h."H".$m."','$ser','$sser','$from','$to')");

echo '<br>'.$from.'<br>';

header("Location: ../liste_audits.php");


?>