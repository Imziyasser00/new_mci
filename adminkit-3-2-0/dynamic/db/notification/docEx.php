<?php 



$i = 0;

$query = mysqli_query($conn,"SELECT * FROM `document`");

    while($obj = $query->fetch_assoc()){
        $date = $obj["DATTREV"];
        $time = strtotime($date);
       $today = date('Y-m-d');
      
       $newformat = date('Y-m-d',$time);
       

        if( $today < $newformat){
                $doc[$i]["nom"] = $obj["nom"];
                $doc[$i]["id"] = $obj["id"];
               
                $i++;
                $counter++;
                mysqli_query($conn,"UPDATE `document` SET `valide`='1' WHERE id = ".$obj["id"]);
        }
    }




?>