<?php 

include("./connexion.php");

$pwd1= $_POST["pwd1"];
$pwd2 = $_POST["pwd2"];

$id = $_SESSION["user_id"];

if($pwd1 == $pwd2){
    mysqli_query($conn,"UPDATE `utilisateur` SET `mdp`='$pwd1' WHERE id = $id");
}
header("Location: ../change_password.php");
$_SESSION["pwd_done"] = "done";


?>