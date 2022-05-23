<?php 

include("connexion.php");

$id = $_POST["id"];

$name = $_POST["name"];

$result = mysqli_query($conn,"SELECT * FROM utilisateur where id = $name");

$data = $result->fetch_assoc();


$nom = $data["nom"];

$prenom = $data["prenom"];


$fonction = $_POST["fonction"];

$done = '';


if(isset($_POST["chk"])){



    $checkbox = $_POST['chk'] ; 
    
    
    for ($i=0; $i<sizeof ($checkbox);$i++) {  
        
        $done .= $checkbox[$i];
        if($i < (sizeof($checkbox)-1)){
            $done .= ' || ';
        }
        
    }
}

echo $id;

echo $prenom;
echo $nom;
echo $fonction;
echo $done;
echo $name;

mysqli_query($conn,"UPDATE `auditeur` SET `nom`='$nom',`prenom`='$prenom',`fonction`='$fonction',`Qualification`='$done'WHERE `id_utilisateur`='$id'");

header("Location: ../liste_auditeur.php");

?>