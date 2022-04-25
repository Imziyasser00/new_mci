<?php


$idr = isset($_GET['idr']) ? $_GET['idr'] : false;
if(false !== $idr)
{

include_once '../db/connexion.php';
	
    
    $rech_dept ="SELECT `id`, `nom` FROM `sservice` WHERE `id_service` = $idr ";
    $rech_dept = mysqli_query($conn,$rech_dept);
    while($objs = $rech_dept->fetch_assoc()){
        $id=$objs['id'];
		$nom=$objs['nom'];
        echo'<option value="'.$id.'">'.utf8_encode($nom).'</option>';
    }

    	



		
        
    
}

?>