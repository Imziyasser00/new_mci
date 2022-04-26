<?php 

include("connexion.php");


$type = $_POST["type"];

$result = mysqli_query($conn,"INSERT INTO `type`(`type`) VALUES ('$type')");

$sql = mysqli_query($conn,"SELECT * FROM service");

while($bj = $sql->fetch_assoc()){
    $nom = $bj["nom"];
    echo $nom;
    mkdir('../Documents/'.$nom.'/'.$type.'/', 0777);				
    mkdir('../Documents/'.$nom.'/'.$type.'/Archive/', 0777);
}

header("Location: ../TypeDoc.php");



?>