<?php 

include("connexion.php");

$sql = mysqli_query($conn,"Select numero_audit from auditeurprevu");
$rows = array();
while($r = mysqli_fetch_assoc($sql)) {
    $rows[] = $r;
}

echo json_encode($rows,JSON_PRETTY_PRINT);
?>