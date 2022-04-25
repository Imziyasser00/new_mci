<?php 

include("connexion.php");



if(isset($_POST["upload_pq"])){

 /* $files = glob('../'.$_SESSION["pq_path"].'*'); // get all file names

foreach($files as $file){
  echo "lol"; // iterate files
  
  if(is_file($file)) {
     // delete file
    unlink($file);
  }
   }
    echo "lol";
    if ($_FILES['uploaded_file']['type'] == "application/pdf") {
      $source_file = $_FILES['oq']['tmp_name'];
      $dest_file = "../".$_SESSION["pq_path"].$_FILES['pdfFile']['name'];
  
      if (file_exists($dest_file)) {
        print "The file name already exists!!";
      }
      else {
        move_uploaded_file( $source_file, $dest_file )
        or die ("Error!!");
        if($_FILES['pdfFile']['error'] == 0) {
          print "Pdf file uploaded successfully!";
          print "<b><u>Details : </u></b><br/>";
          print "File Name : ".$_FILES['pq']['name']."<br.>"."<br/>";
          print "File Size : ".$_FILES['pq']['size']." bytes"."<br/>";
          print "File location : upload/".$_FILES['pq']['name']."<br/>";
        }
      }
    }
    else {
      if ( $_FILES['pq']['type'] != "application/pdf") {
        print "Error occured while uploading file : ".$_FILES['pq']['name']."<br/>";
        print "Invalid  file extension, should be pdf !!"."<br/>";
        print "Error Code : ".$_FILES['pq']['error']."<br/>";
      }
    }
 
    //$query = "UPDATE `pq_mmi` SET `name`='' WHERE 1";*/
}


?>