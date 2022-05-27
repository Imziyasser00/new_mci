<?php 
include("connexion.php");

$mails = $_POST["mails"];

$mails = explode(',',$mails[0]);

echo $subject = $_POST["subject"];

echo $message = $_POST["message"];

foreach($mails as $el){
    $to = $el;
    $subject = $subject;
    $txt = $message;
    $headers =  "From: noreply@mci-santeanimale.com" . "\r\n";
    $headers .= "Content-Type: text/html; charset=\"iso-8859-1\"";
    if(mail($to,$subject,$txt,$headers)){
        $_SESSION["mail_sent"] = " mail sent ";
    }
}



header("Location: ../mail.php")

?>