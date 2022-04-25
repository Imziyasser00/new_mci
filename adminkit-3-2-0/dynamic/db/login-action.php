<?php 
include("connexion.php");

if(isset($_POST["connecter"])){
    $username = htmlspecialchars($_POST["username"]);
    $password = htmlspecialchars($_POST["password"]);
    $query = "SELECT id , id_service as service_id , id_sservice as sous_service_id , nom , prenom , adoupas as adp FROM `utilisateur` WHERE `username` = '".$username."' and `mdp`= '".$password."';";
    $result = mysqli_query($conn,$query);
    if($result->num_rows > 0) {
        while($obj = $result->fetch_assoc()){
            $_SESSION["user_id"] = $obj["id"];
            $_SESSION["service_id"] = $obj["service_id"];
            $_SESSION["sous_service_id"] = $obj["sous_service_id"];
            $_SESSION["nom"] = $obj["nom"];
            $_SESSION["prenom"] = $obj["prenom"];
            $_SESSION["adp"] = $obj["adp"];
        }
        $date = date('d F, Y');
        echo $date;
        echo $_SESSION["user_id"];
        mysqli_query($conn,"INSERT INTO `visitors_saver`(`user_id`, `Date`, `state`) VALUES ('".$_SESSION["user_id"]."','$date','1')");
        header("Location: ../index.php");

    }
    else
    {
        $_SESSION["error"] = "Identifiant ou mot de passe invalide";
    }
}

?>