<?php

include("connexion.php");

$sql = mysqli_query($conn,"UPDATE `visitors_saver` SET `state`='0' WHERE `user_id` = ".$_SESSION["user_id"]);

session_destroy();

header("Location: ../pages-sign-in.php");





?>