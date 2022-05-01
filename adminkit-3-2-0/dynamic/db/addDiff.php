<?php 

include("connexion.php");


$id = $_POST["Doc_id"];

$type = $_POST["type"];

echo $id;


header("Location: ../addDiff1.php?id=".$id."&type=".$type);

?>