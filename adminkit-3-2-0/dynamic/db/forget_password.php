<?php 

include("connexion.php");

$email = $_POST["mail"];

if($query = mysqli_query($conn,"SELECT * FROM utilisateur where mail = '$email'")){

    
    $rows = mysqli_num_rows($query);
    
        $data = $query->fetch_assoc();
        $to = $email;
        $subject = "Password Reset";
        $id = $data["id"];
        $txt = "Click on the link below to reset your password : <br> <a href='http://localhost/new_mci/adminkit-3-2-0/dynamic/forget_password2.php?id=$id' >Reset password </a>";
        $headers =  "From: noreply@mci-santeanimale.com" . "\r\n";
        $headers .= "Content-Type: text/html; charset=\"iso-8859-1\"";
        mail($to,$subject,$txt,$headers);
        header("Location: ../forget_password1.php");
}else{
    $_SESSION["mail_incorrect"] = "The Email is incorrect or doesn't exist";
    header("Location: ../forget_password.php");
}




?>