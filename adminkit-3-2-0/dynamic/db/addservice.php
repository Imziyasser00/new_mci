<?php 

include("connexion.php");

$nom = $_POST["service_nom"];
$ref = $_POST["ref"];
$verifier=mysqli_query($conn,"SELECT * from service where service.nom='$nom' or service.ref='$ref'");
$nbr=mysqli_num_rows($verifier);
if($nbr == 0){					
    mkdir('../Documents/'.$nom.'', 0777);
    mkdir('../Documents/'.$nom.'/FAP/', 0777);				
    mkdir('../Documents/'.$nom.'/FAP/Archive/', 0777);				
    $res = mysqli_query($conn,"select type as nom from type");				
        while($obj=$res->fetch_assoc()){
        $nomtype=$obj['nom'];
        mkdir('../Documents/'.$nom.'/'.$nomtype.'', 0777);					
        mkdir('../Documents/'.$nom.'/'.$nomtype.'/Archive/', 0777);					
        }
        echo $ref;
        echo $nom;
        mysqli_query($conn,"INSERT INTO `service`(`nom`, `ref`, `valide`) VALUES ('$nom','$ref','0')");
       		
       
        
    }
    else{
    echo '<script language="javascript" type="text/javascript">
alert("Le nom ou bien la réfèrence du service déjà éxistante ");</script>';
    }

header("Location: ../listeServices.php");




?>