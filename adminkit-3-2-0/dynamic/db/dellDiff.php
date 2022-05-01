<?php 

include("connexion.php");

$id = $_POST["Doc_id"];

mysqli_query($conn,"DELETE FROM `diff` WHERE id_doc = $id");

header("Location: ../DiffDoc.php");


?>