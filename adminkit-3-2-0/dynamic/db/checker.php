<?php
include("connexion.php");
if (!isset($_SESSION['nom'])) {
    header("Location: pages-sign-in.php");
}

?>