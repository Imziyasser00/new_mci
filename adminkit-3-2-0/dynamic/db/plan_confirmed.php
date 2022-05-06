<?php 

include("connexion.php");

$ann = $_GET["annee"];

mysqli_query($conn,"UPDATE `plandaudit` SET `cop`='1' WHERE annee = $ann");

$confirmaud = mysqli_query($conn,"select numero,id_sservice from auditprevu where  ann=$ann");

while($data = $confirmaud->fetch_assoc()){
    $num = $data["numero"];
    $id_sservice = $data['id_sservice'];
    $sservice = mysqli_query($conn,"select nom from sservice where id=$id_sservice");
    $result = $sservice->fetch_assoc();
    $sservice_nom = utf8_encode($result["nom"]);
    $func1 = mysqli_query($conn,"select * from auditeurprevu where  ann=$ann and numero_audit='".$num."' and fonction='1'");
    $RAA = $func1->fetch_assoc();
    $RA = $RAA["id_auditeur"];
    $selectaudi = mysqli_query($conn,"select nom, prenom from auditeur where id=$RA");
    $sel = $selectaudi->fetch_assoc();
    $aud_nom = $sel["nom"];
    $aud_prenom = $sel["prenom"];
    $sel_utilisateur = mysqli_query($conn,"select id , mail from utilisateur where nom='".$aud_nom."' and prenom='".$aud_prenom."'");
    $sel_id = $sel_utilisateur->fetch_assoc();
    $i_ra = $sel_id["id"];
    $mail = $sel_id["mail"];
    $add_fiche = mysqli_query($conn,"INSERT INTO fichecreeoupas VALUES ('',$ann,'$num',1,$i_ra)");
    $to = $mail;
	$subject = "Audit ".$num;
    $txt = 'Vous etes responsable d\'audit n° '.$num.' du processus '.$sservice_nom.' <br>veuillez <a href="http://localhost/new_mci/adminkit-3-2-0/dynamic/">vous connecter</a> pour renseigner la fiche d\'audit.
<br><br>Merci de ne pas répondre à ce courriel!<br><br>SMI Q.S.E.<br>M.C.I Santé Animale ';
								$headers =  "From: noreply@mci-santeanimale.com" . "\r\n";
$headers .= "Content-Type: text/html; charset=\"iso-8859-1\"";
mail($to,$subject,$txt,$headers);
$func1 = mysqli_query($conn,"select * from auditeurprevu where  ann=$ann and numero_audit='".$num."' and fonction='2'");
    $RAA = $func1->fetch_assoc();
    $RA = $RAA["id_auditeur"];
    $selectaudi = mysqli_query($conn,"select nom, prenom from auditeur where id=$RA");
    $sel = $selectaudi->fetch_assoc();
    $aud_nom = $sel["nom"];
    $aud_prenom = $sel["prenom"];
    $sel_utilisateur = mysqli_query($conn,"select id , mail from utilisateur where nom='".$aud_nom."' and prenom='".$aud_prenom."'");
    $sel_id = $sel_utilisateur->fetch_assoc();
    $i_ra = $sel_id["id"];
    $mail = $sel_id["mail"];
    
    $to = $mail;
	$subject = "Audit ".$num;
    $txt = 'Vous etes responsable d\'audit n° '.$num.' du processus '.$sservice_nom.' <br>veuillez <a href="http://localhost/new_mci/adminkit-3-2-0/dynamic/">vous connecter</a> pour renseigner la fiche d\'audit.
<br><br>Merci de ne pas répondre à ce courriel!<br><br>SMI Q.S.E.<br>M.C.I Santé Animale ';
								$headers =  "From: noreply@mci-santeanimale.com" . "\r\n";
$headers .= "Content-Type: text/html; charset=\"iso-8859-1\"";
mail($to,$subject,$txt,$headers);
$func1 = mysqli_query($conn,"select * from auditeurprevu where  ann=$ann and numero_audit='".$num."' and fonction='3'");
    $RAA = $func1->fetch_assoc();
    $RA = $RAA["id_auditeur"];
    $selectaudi = mysqli_query($conn,"select nom, prenom from auditeur where id=$RA");
    $sel = $selectaudi->fetch_assoc();
    $aud_nom = $sel["nom"];
    $aud_prenom = $sel["prenom"];
    $sel_utilisateur = mysqli_query($conn,"select id , mail from utilisateur where nom='".$aud_nom."' and prenom='".$aud_prenom."'");
    $sel_id = $sel_utilisateur->fetch_assoc();
    $i_ra = $sel_id["id"];
    $mail = $sel_id["mail"];
    
    $to = $mail;
	$subject = "Audit ".$num;
    $txt = 'Vous etes responsable d\'audit n° '.$num.' du processus '.$sservice_nom.' <br>veuillez <a href="http://localhost/new_mci/adminkit-3-2-0/dynamic/">vous connecter</a> pour renseigner la fiche d\'audit.
<br><br>Merci de ne pas répondre à ce courriel!<br><br>SMI Q.S.E.<br>M.C.I Santé Animale ';
								$headers =  "From: noreply@mci-santeanimale.com" . "\r\n";
$headers .= "Content-Type: text/html; charset=\"iso-8859-1\"";
mail($to,$subject,$txt,$headers);
    
    
}

//header("Location: ../plan_audit_annuel.php?annee=".$ann);
?>