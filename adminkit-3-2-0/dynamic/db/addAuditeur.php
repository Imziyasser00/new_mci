<?php

include("connexion.php");

$name = $_POST["name"];

$result = mysqli_query($conn,"SELECT * FROM utilisateur where id = $name");

$data = $result->fetch_assoc();

$nom = $data["nom"];
$prenom = $data["prenom"];

$fonction = $_POST["fonction"];

$done = "";

if(isset($_POST["chk"])){



$checkbox = $_POST['chk'] ; 

for ($i=0; $i<sizeof ($checkbox);$i++) {  
    
    $done .= $checkbox[$i];
    if($i < (sizeof($checkbox)-1)){
        $done .= ' || ';
    }
    
}

    mysqli_query($conn,"INSERT INTO `auditeur`( `nom`, `prenom`, `fonction`, `Qualification`, `id_utilisateur`) VALUES ('$nom','$prenom','$fonction','$done','$name')");



header("Location: ../liste_auditeur.php");
}
?>