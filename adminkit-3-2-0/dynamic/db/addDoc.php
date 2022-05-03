<?php 


include("connexion.php");

/*
$targetfolder = "../Documents/test/";


*/


$Etat = $_POST["Etat"];
$Service = $_POST["Ser"];
$DateApp_1 = $_POST["Date"];
$Revs = $_POST["Revs"];
$Assoc = $_POST["DocAss"];
$Type = $_POST["Type"];

$service_id = $_POST["Ser"];


//$time_input =  $time_input->format('Y-m-d');

$sqll = mysqli_query($conn,"SELECT * FROM service where id = $Service");
$data = $sqll->fetch_assoc();
$Service_nom = $data["nom"];

$DateApp =  new DateTime($DateApp_1);


$DateRev = $DateApp;

$DateRev->modify('+'.$Revs.'year');

$result = $DateRev->format('Y-m-d');



$targetfolder = "../Documents/$Service_nom/$Type/";
$link = "./Documents/$Service_nom/$Type/". basename( $_FILES['file']['name']) ;

$file_name = basename( $_FILES['file']['name']) ;

$targetfolder = $targetfolder . basename( $_FILES['file']['name']) ;

// echo basename( $_FILES['file']['name']);

if(move_uploaded_file($_FILES['file']['tmp_name'], $targetfolder))

{

//echo "The file ". basename( $_FILES['file']['name']). " is uploaded";



}

else {

echo "Problem uploading file";

}


if(mysqli_query($conn,"INSERT INTO `document`(`id_service`, `nom`, `type`, `filetype`, `lien`, `Etat`, `dateAPP`, `DATTREV`, `ajtpar`, `valide`, `active_type`, `annee_id`) VALUES ('$service_id','$file_name','$Type','pdf','$link','$Etat','$DateApp_1','$result','".$_SESSION["adp"]."','0','0','$Revs')")){

    echo "lol";
    echo $service_id.','.$file_name.','.$Type.',pdf,'.$link.','.$Etat.','.$DateApp_1.','.$result.','.$_SESSION["adp"].',0,1,'.$Revs;
}

?>