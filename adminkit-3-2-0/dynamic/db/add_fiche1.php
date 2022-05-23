<?php 

include("./connexion.php");
if(isset($_POST["Valider"])){
    echo $date = $_POST["date"];
    echo $heure = $_POST["heure"];
    
    
    print_r($presence = $_POST["presence"]);
    print_r($presence=explode(",",$presence[0]));
    $num = $_GET["num"];
    print_r($presence);
    mysqli_query($conn,"INSERT INTO `reunionouverture`(`date`, `time`, `numero`) VALUES ('$date','$heure','$num')");
    foreach($presencex as $element){
        mysqli_query($conn,"INSERT INTO `presenceouverture`( `num_audit`, `id_utilisateur`) VALUES ('$num','$element')");
    }
    
    header("Location: ../add_fiche2.php?num=$num");
}else{
    $num = $_POST["num"];
    echo $num;
header("Location: ./add_fiche.php?num=".$num."&action=back");
}




?>