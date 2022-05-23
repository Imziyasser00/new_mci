<?php 


include("connexion.php");

/*
$targetfolder = "../Documents/test/";


*/


 $Etat = $_POST["Etat"];
 $Service = $_POST["Ser"];
 $DateApp_1 = $_POST["Date"];
 $Revs = $_POST["Revs"];
 $Type = $_POST["Type"];
 $service_id = $_POST["Ser"];
 
 
 //$time_input =  $time_input->format('Y-m-d');
 
$sqll = mysqli_query($conn,"SELECT * FROM service where id = $Service");
 $data = $sqll->fetch_assoc();
 $Service_nom = $data["nom"];

$DateApp =  new DateTime($DateApp_1); 


 $DateRev = $DateApp;

$DateRev->modify('+'.$Revs.'year');

 $DateRev = $DateRev->format('Y-m-d');




 $targetfolder = "../Documents/$Service_nom/$Type/";
 $link = "./Documents/$Service_nom/$Type/". basename( $_FILES['file']['name']) ;

echo $file_name = basename( $_FILES['file']['name']) ;
$file_name = trim($file_name, '.pdf');

 $targetfolder = $targetfolder . basename( $_FILES['file']['name']) ;

// echo basename( $_FILES['file']['name']);

if(move_uploaded_file($_FILES['file']['tmp_name'], $targetfolder))

{

//echo "The file ". basename( $_FILES['file']['name']). " is uploaded";



}

else {

echo "Problem uploading file";

}


mysqli_query($conn,"INSERT INTO `document`(`id_service`, `nom` , `type`, `filetype`, `lien`,`Etat`, `dateAPP`, `DATTREV`, `ajtpar`, `valide`, `active_type`, `annee_id`) VALUES ('$Service','$file_name','$Type','pdf','".utf8_encode($link)."','$Etat','$DateApp_1','$DateRev','5','0','0','5')");

    echo "lol";
   

$con = mysqli_query($conn,"SELECT * FROM document order by id DESC LIMIT 1");
$ff = $con->fetch_assoc();
$id_doc =  $ff["id"];
$id_doc++;
 $id_doc;
$doc = $_POST["doc_ass"];
$doc=explode(",",$doc[0]);
foreach($doc as $ele){
    mysqli_query($conn,"INSERT INTO `liaison`(`id_doc`, `id_anx`) VALUES ('$id_doc','$ele')");
}



?>