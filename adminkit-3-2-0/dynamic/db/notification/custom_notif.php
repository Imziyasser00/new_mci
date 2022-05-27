<?php 



$i = 0;

//$query = mysqli_query($conn,"SELECT * FROM `notification` where  `service_id` = ".$_SESSION["service_id"]);
$query = mysqli_query($conn,"SELECT * FROM `notification` where 1");

while($not = $query->fetch_assoc()){
    $message =  $not["message"];
    $type =  $not["type"];
    $costum_not[$i]["message"] = $message;
    $costum_not[$i]["type"] = $type;
    $i++;
    $counter++;
}

?>