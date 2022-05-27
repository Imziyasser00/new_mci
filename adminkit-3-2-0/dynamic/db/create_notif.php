<?php 

include("connexion.php");

$services = $_POST["services"];

print_r($services);

$services = explode(',',$services[0]);

$message= $_POST["message"];

$type = $_POST["type"];

foreach($services as $el){
    mysqli_query($conn,"INSERT INTO `notification`(`message`, `service_id`, `type`) VALUES ('$message','$el','$type')");
}

header("Location: ../notification.php");



?>