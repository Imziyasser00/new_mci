<?php 

include("./connexion.php");
if(isset($_POST["Valider"])){
    echo $date = $_POST["date"];
    echo $heure = $_POST["heure"];
    
    
    print_r($presence = $_POST["presence"]);
    print_r($presence=explode(",",$presence[0]));
     $num = $_POST["num"];
    
    print_r($audite);
    mysqli_query($conn,"INSERT INTO `reunionouverture`(`date`, `time`, `numero`) VALUES ('$date','$heure','$num')");
    foreach($audite as $element){
        mysqli_query($conn,"INSERT INTO `presenceouverture`( `num_audit`, `id_utilisateur`) VALUES ('$num','$element')");
    }
    
    header("Location: ../add_fiche2.php?num=$num");
}else{
    mysqli_query($conn,"DELETE FROM `objectifaudit` WHERE num_audit = $num");
mysqli_query($conn,"DELETE FROM `fichdaudit` WHERE audit_num = $num");

    mysqli_query($conn,"DELETE * FROM `auditee` WHERE num_audit = $num");
    $num = $_POST["num"];

mysqli_query($conn,"DELETE * FROM `respentaudite` WHERE num_audit = $num");
header("Location: ../cree_fiche.php?num=$num");
}




?>