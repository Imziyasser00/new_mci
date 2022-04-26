<?php 

include("connexion.php");

$sql = mysqli_query($conn,"Select type from type");
$rows = array();
while($r = mysqli_fetch_assoc($sql)) {
    $rows[] = $r;
}

echo json_encode($rows,JSON_PRETTY_PRINT);
?>