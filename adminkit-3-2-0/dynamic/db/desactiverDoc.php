<?php

include("connexion.php");

if(isset($_POST["chk"])){



$checkbox = $_POST['chk'] ; 

for ($i=0; $i<sizeof ($checkbox);$i++) {  
    echo $checkbox[$i];
    $query="UPDATE `document` SET `valide`='1' WHERE  id = ".$checkbox[$i];  
    mysqli_query($conn,$query);
    
    }  
}
header("Location: ../desactivated_files.php");

?>