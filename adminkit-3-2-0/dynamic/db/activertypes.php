<?php

include("connexion.php");

if(isset($_POST["chk"])){



$checkbox = $_POST['chk'] ; 

for ($i=0; $i<sizeof ($checkbox);$i++) {  
    echo $checkbox[$i];
    $query="UPDATE `type` SET `valide`='0' WHERE  id = ".$checkbox[$i];  
    mysqli_query($conn,$query);
    $sql = mysqli_query($conn,"SELECT * FROM type where id = ".$checkbox[$i]);
    while($obj = $sql->fetch_assoc()){
        echo $obj["type"];
        mysqli_query($conn,"UPDATE `document` SET `active_type` = '0' WHERE type = '".$obj["type"]."';");
    }
    
    }  
}
header("Location: ../TypeDoc.php");

?>