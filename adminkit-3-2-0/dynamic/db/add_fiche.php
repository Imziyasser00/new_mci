<?php 

include("./connexion.php");

echo $date = $_POST["date"];
echo $lieu = $_POST["lieu"];
echo $objectif = $_POST["objectif"];
echo $ident = $_POST["ident"];
echo $resp = $_POST["resp"];
print_r($audite = $_POST["audite"]);
print_r($audite=explode(",",$audite[0]));
echo $num = $_POST["num"];
echo $id_Ra = $_POST["id_Ra"];
echo $id_ss = $_POST["id_ss"];
print_r($audite);
mysqli_query($conn,"INSERT INTO `objectifaudit`(`objectif`, `num_audit`) VALUES ('$objectif','$num')");
mysqli_query($conn,"INSERT INTO `fichdaudit`(`id_RA`, `id_ss`, `date`, `lieu`, `idr`, `audit_num`) VALUES ('$id_Ra','$id_ss','$date','$lieu','$ident','$num')");
foreach($audite as $element){
    mysqli_query($conn,"INSERT INTO `auditee`(`num_audit`, `id_utilisateur`) VALUES ('$num','$element')");
}
mysqli_query($conn,"INSERT INTO `respentaudite`(`id_utilisateur`, `num_audit`) VALUES ('$resp','$num')");
header("Location: ../add_fiche1.php?num=$num");


?>