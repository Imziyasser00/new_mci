<?php 

include("connexion.php");

$annee = $_POST["annee"];

$ref = $_POST["reference"];

$old_annee = $_POST["old_annee"];

$reff = mysqli_real_escape_string($conn,$ref);

$id = $_POST["id"];


mysqli_query($conn,"UPDATE `annee_document` SET `annee`='$annee',`Ref`='$reff' WHERE id = $id");

$query = mysqli_query($conn,"SELECT *  FROM document WHERE  annee_id = $id");




echo $id;   

while($obj = $query->fetch_assoc()){


     $dateRev =  new DateTime($obj["DATTREV"]);

     print_r($dateRev);
    


    if($old_annee < $annee){
        $diff =  $annee - $old_annee;
        echo $diff;
        $dateRev->modify('+'.$diff.'year');
    }
    else{
        $diff = $old_annee - $annee;
        $dateRev->modify('-'.$diff.'year');
    }
    
    $dateRev =  $dateRev->format('Y-m-d');
    
    echo $dateRev;

    mysqli_query($conn,"UPDATE `document` SET `DATTREV`='$dateRev' WHERE id = ".$obj["id"]);

}

header("Location: ../listeAnnees.php");

?>