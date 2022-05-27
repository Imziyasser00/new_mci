<?php 

include("./connexion.php");
$num = $_POST["num"];
if(isset($_POST{"Valider"})){

    echo $date = $_POST["date"];
    echo $heure = $_POST["heure"];
    
    
    print_r($presence = $_POST["presenceClo"]);
    print_r($presence=explode(",",$presence[0]));
     
     print_r($presence);
     mysqli_query($conn,"INSERT INTO `reunioncloture`(`date`, `time`, `numero`) VALUES ('$date','$heure','$num')");
     foreach($presence as $element){
         mysqli_query($conn,"INSERT INTO `presencecloture`( `num_audit`, `id_utilisateur`) VALUES ('$num','$element')");
        }
        mysqli_query($conn,"UPDATE fichecreeoupas  SET CreeOuPas = 1  where num='$num'");
        
        header("Location: ../add_fiche.php?num=$num");
        
    }else{
        
        mysqli_query($conn,"DELETE * FROM  `reunionouverture`WHERE numero = $num");
        
        mysqli_query($conn,"DELETE * FROM  `presenceouverture`WHERE num_audit = $num");
        header("Location: ../add_fiche1.php?num=$num");
}


?>