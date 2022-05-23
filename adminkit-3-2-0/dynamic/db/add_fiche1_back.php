<?php 


$num = $_GET["num"];
$connexion = new PDO('mysql:host=localhost;dbname=mci', 'root', '');
$arr = array();
$selectall=$connexion->prepare("SELECT * FROM objectifaudit where num_audit	 like ?");
$selectall->execute(array($num));
$objt = $selectall->Fetch(PDO::FETCH_ASSOC);
$objectif =  $objt["objectif"];


$fich=$connexion->prepare("SELECT * FROM fichdaudit where audit_num like ?");
$fich->execute(array($num));
$fiche = $fich->Fetch(PDO::FETCH_ASSOC);
$id_RA =  $fiche["id_RA"];
$id_ss =  $fiche["id_ss"];
$id_date =  $fiche["date"];
$lieu =  $fiche["lieu"];
$idr =  $fiche["idr"];
$idd = array();
$aud=$connexion->prepare("SELECT * FROM auditee where num_audit like ?");
$aud->execute(array($num));
while($dd = $aud->Fetch(PDO::FETCH_ASSOC)){
    $obj =  $dd["id_utilisateur"];
    array_push($idd,$obj);
}

$resp=$connexion->prepare("SELECT * FROM respentaudite where num_audit like ?");
$resp->execute(array($num));
$resp_id = $resp->Fetch(PDO::FETCH_ASSOC);
$respp = $resp_id["id_utilisateur"];


array_push($arr,$lieu,$objectif,$idr,$respp,$idd,$id_date);






?>