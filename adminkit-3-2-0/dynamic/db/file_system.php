<?php

$query = "SELECT * FROM `pq_mmi` Where Ref = 'PQ';";
$result = mysqli_query($conn,$query);
while($obj = $result->fetch_assoc()){
    $pq_name = $obj["name"];
    $pq_path = $obj["path"];
    $_SESSION["pq_name"] = $pq_name;
    $_SESSION["pq_path"] = $pq_path;
}

$query = "SELECT * FROM `pq_mmi` Where Ref = 'MMI';";
$result = mysqli_query($conn,$query);
while($obj = $result->fetch_assoc()){
    $mmi_name = $obj["name"];
    $mmi_path = $obj["path"];
    $_SESSION["mmi_name"] = $mmi_name;
    $_SESSION["mmi_path"] = $mmi_path;
}



?>