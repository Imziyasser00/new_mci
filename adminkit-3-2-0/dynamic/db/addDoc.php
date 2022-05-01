<?php 


include("connexion.php");

/*
$targetfolder = "../Documents/test/";


*/


$Etat = $_POST["Etat"];
$Service = $_POST["Ser"];
$DateApp = $_POST["Date"];
$Revs = $_POST["Revs"];
$Assoc = $_POST["DocAss"];
$Type = $_POST["Type"];

$service_id = $_POST["service_id"];


//$time_input =  $time_input->format('Y-m-d');

$DateApp =  new DateTime($DateApp);

$DateRev = $DateApp;

$DateRev->modify('+'.$Revs.'year');


print_r($DateRev);

$targetfolder = "../Documents/$Service/$Type/";

$targetfolder = $targetfolder . basename( $_FILES['file']['name']) ;

echo basename( $_FILES['file']['name']);

if(move_uploaded_file($_FILES['file']['tmp_name'], $targetfolder))

{

echo "The file ". basename( $_FILES['file']['name']). " is uploaded";

}

else {

echo "Problem uploading file";

}

//mysqli_query($conn,"INSERT INTO `document`(`id_service`, `nom`, `type`, `filetype`, `lien`, `Etat`, `dateAPP`, `DATTREV`, `ajtpar`, `valide`, `active_type`, `annee_id`) VALUES ('$service_id','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]','[value-10]','[value-11]','[value-12]','[value-13]')");

?>