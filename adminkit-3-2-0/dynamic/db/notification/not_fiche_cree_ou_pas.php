<?php 


$counter = 0;

$query = mysqli_query($conn,"SELECT * FROM fichecreeoupas where i_RA =  ". $_SESSION["user_id"] . " and CreeOuPas = 0");

$rows = mysqli_num_rows($query);
$i = 0;

if($rows != 0 ){
    while($obj = $query->fetch_assoc()){
        $num[$i] = $obj["num"];
        $i++;
        $counter++;
    }
}




?>