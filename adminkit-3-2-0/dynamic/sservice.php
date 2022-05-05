<?php 


include("db/connexion.php");
$sql = mysqli_query($conn,"SELECT * FROM sservice where id_service = ".$_GET["idr"]);
while($object = $sql->fetch_assoc()){
    echo '<option value="'.$object["id"].'">'.utf8_encode($object["nom"]).'</option>';
}


?>