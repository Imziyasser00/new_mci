<?php 

include("connexion.php");

$num = $_POST["num"];

header("Location: ../add_fiche.php?num=".$num);



?>