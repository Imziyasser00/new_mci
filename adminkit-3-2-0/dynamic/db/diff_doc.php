<?php

include("connexion.php");

if(isset($_POST["chk"])){

$doc_id = $_POST["id_doc"];

$checkbox = $_POST['chk']; 

$type = $_POST["type"];

for ($i=0; $i<sizeof ($checkbox);$i++) {  
    
    echo $checkbox[$i];
    
    $query="INSERT INTO `diff`(`id_doc`, `id_serv`, `doc_type`) VALUES ('$doc_id','$checkbox[$i]','$type')";  
    mysqli_query($conn,$query);
    
    echo "<br>".$type;
    echo "<br>".$doc_id;
    
    }  
}




header("Location: ../DiffDoc.php?id=".$doc_id);

?>