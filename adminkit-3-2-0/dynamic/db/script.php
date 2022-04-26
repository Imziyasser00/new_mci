<?php 

include("connexion.php");

$query = mysqli_query($conn,"SELECT * FROM service");




while($obj = $query->fetch_assoc()){
    $nom = $obj["nom"];
    mkdir('../Documents/'.$nom.'', 0777);
    mkdir('../Documents/'.$nom.'/FAP/', 0777);				
    mkdir('../Documents/'.$nom.'/FAP/Archive/', 0777);				
    $res = mysqli_query($conn,"select type as nom from type");				
        while($obj=$res->fetch_assoc()){
        $nomtype=$obj['nom'];
        mkdir('../Documents/'.$nom.'/'.$nomtype.'', 0777);					
        mkdir('../Documents/'.$nom.'/'.$nomtype.'/Archive/', 0777);					
        }
    
}






?>