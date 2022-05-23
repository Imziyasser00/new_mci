<?php 



$i = 0;
function dateDiffInDays($date1, $date2) 
  {
      // Calculating the difference in timestamps
      $diff = strtotime($date2) - strtotime($date1);
  
      // 1 day = 24 hours
      // 24 * 60 * 60 = 86400 seconds
      return abs(round($diff / 86400));
  }
  

$query = mysqli_query($conn,"SELECT * FROM document where valide='0' ");

    while($obj = $query->fetch_assoc()){
        $date = $obj["DATTREV"];
        $time = strtotime($date);
       $today = date('Y-m-d');
      
       $newformat = date('Y-m-d',$time);
       

        if( $today > $newformat){
                $doc[$i]["nom"] = $obj["nom"];
                $doc[$i]["id"] = $obj["id"];
                $id_doc = $obj["id"];
                $link = $obj["lien"];
                $prelink =  trim($link, $doc[$i]["nom"]);
                $archive_link = $prelink.'Archive/'.$obj["nom"];
                $archive_link = '.'.$archive_link;

                if(rename($link,$archive_link) ) {  
                    echo "File moved!";  
                }  
                $i++;
                $counter++;
                mysqli_query($conn,"UPDATE `document` SET `valide`='1' , `lien` = '$archive_link' WHERE id = ".$obj["id"]);
                mysqli_query($conn,"INSERT INTO `archive`(`id_doc`) VALUES ('د$id_doc')");

        }
        if(dateDiffInDays($newformat,$today) == 30){
            $reminder[$i]["nom"] = $obj["nom"];
            $reminder[$i]["id"] = $obj["id"];
        }
        
    }




?>