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
    $sql = mysqli_query($conn,"SELECT * FROM document where id = ".$doc_id);
    $data = $sql->fetch_assoc();
    $sqll = mysqli_query($conn,"SELECT * FROM utilisateur where id_sservice = ".$checkbox[$i]);
    $data_sql = $sqll->fetch_assoc();
    $to = '"'.$data_sql["mail"].'"';
    $subject = "Diffusion Doc";
    $message = "
    <html>
    <head>
    <title>Diffusion Document</title>
    </head>
    <body>
    <p>Documents</p>
    <table>
    <tr>
    <th>nom</th>
    <th>type</th>
    <th>lien</th>
    </tr>
    <tr>
    <td>".$data["nom"]."</td>
    <td>".$data["type"]."</td>
    <td><a href = '".$data["lien"]."'> Voir </a> </td>
    </tr>
    </table>
    </body>
    </html>
    ";
    error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");
        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        
        // More headers
        $headers .= "studlib00@gmail.com" . "\r\n";
        $headers .= 'Cc: '.$data_sql["mail"]."\r\n";
        echo $to;
        echo "<br>";
        echo $subject;
        echo "<br>";
        echo $message;
        echo "<br>";
        echo $headers;
        echo "<br>";
        
        if(mail($to,$subject,$message,$headers)){
            echo "done";
        }
        
    
    }  
}








//header("Location: ../DiffDoc.php?id=".$doc_id);

?>