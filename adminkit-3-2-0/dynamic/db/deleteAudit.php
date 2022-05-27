<?php 

include("connexion.php");

$num = $_GET["id"];
$annee = $_GET["annee"];

if(mysqli_query($conn,"SELECT * FROM plandaudit where annee = $annee and cop = 0")){
    mysqli_query($conn,"DELETE FROM `auditprevu` WHERE numero = $num");
    mysqli_query($conn,"DELETE FROM `auditeurprevu` WHERE numero_audit = $num");
    mysqli_query($conn,"DELETE FROM `fichecreeoupas` WHERE num = $num");
    if($_SESSION["pln"]){
        session_unset($_SESSION["pln"]);
    }
}else{
    $_SESSION["pln"] = "confirmed";
}






header("Location: ../liste_audits.php");


?>