<?php  
include_once 'db/checker.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
    <meta name="author" content="AdminKit">
    <meta name="keywords"
        content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="img/icons/icon-48x48.png" />

    <link rel="canonical" href="https://demo-basic.adminkit.io/" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <title>M C I</title>

    <link href="css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <!--      Scripts       -->



</head>

<body>
    <div class="wrapper">
        <nav id="sidebar" class="sidebar js-sidebar">
            <div class="sidebar-content js-simplebar">
                <a class="sidebar-brand" href="index.php">
                    <span class="align-middle">M C I</span>
                </a>

                <ul class="sidebar-nav">
                    <li class="sidebar-header">
                        Pages
                    </li>

                    <li class="sidebar-item <?php echo (basename($_SERVER['PHP_SELF'])=="index.php")?"active":""; ?>">
                        <a class="sidebar-link" href="index.php">
                            <i class="align-middle" data-feather="home"></i> <span class="align-middle">Acceuil</span>
                        </a>
                    </li>
                    <li
                        class="sidebar-item <?php echo (basename($_SERVER['PHP_SELF'])=="tableau-de-bord.php")?"active":""; ?>">
                        <a class="sidebar-link" href="tableau-de-bord.php">
                            <i class="align-middle" data-feather="sliders"></i> <span
                                class="align-middle">Dashboard</span>
                        </a>
                    </li>



                    <li id="admin"
                        class="sidebar-item <?php echo (basename($_SERVER['PHP_SELF'])=="listeUsers.php"||"")?"active":""; ?>">
                        <div id="" class="sidebar-link">
                            <i class="align-middle" data-feather="user"></i> <span
                                class="align-middle">Administration</span>
                        </div>

                    </li>

                    <ul id="test">
                        <li class="sidebar-link" id="ad_down"><i class="align-middle"
                                data-feather="corner-right-down"></i> <span class="align-middle">Gestion des
                                utilisateurs</span></li>
                        <div id="admin_down">
                            <li class="sidebar-link"><a class="sidebar-link" href="listeUsers.php"><i
                                        class="align-middle" data-feather="align-justify"></i><span
                                        class="align-middle"> Liste des
                                        utilisateurs</span></a>
                            </li>
                            <li class="sidebar-link"><span class="align-middle"><a class="sidebar-link"
                                        href="addUser.php"><i class="align-middle"
                                            data-feather="plus-circle"></i>Ajouter un
                                        Utilisateur</a></span></li>
                        </div>
                        <li class="sidebar-link" id="service_down"><i class="align-middle"
                                data-feather="corner-right-down"></i> <span class="align-middle">Gestion des
                                service</span></li>
                        <div id="serv_down" style="display:none;" class="serv_down">
                            <li class="sidebar-link"><a class="sidebar-link" href="listeServices.php"><i
                                        class="align-middle" data-feather="align-justify"></i><span
                                        class="align-middle"> Liste des
                                        services</span></a>
                            </li>
                            <li class="sidebar-link"><span class="align-middle"><a class="sidebar-link"
                                        href="ListeSservice.php"><i class="align-middle"
                                            data-feather="align-justify"></i>Liste
                                        des
                                        sous-services</a></span></li>
                        </div>
                        <li class="sidebar-link" id="document_down"><i class="align-middle"
                                data-feather="corner-right-down"></i> <span class="align-middle">Gestion des
                                documents</span></li>
                        <div id="doc_down" style="display:none;" class="serv_down">
                            <li class="sidebar-link"><a class="sidebar-link" href="listeServices.php"><i
                                        class="align-middle" data-feather="align-justify"></i><span
                                        class="align-middle"> Liste des
                                        services</span></a>
                            </li>
                            <li class="sidebar-link"><span class="align-middle"><a class="sidebar-link"
                                        href="ListeSservice.php"><i class="align-middle"
                                            data-feather="align-justify"></i>Liste
                                        des
                                        sous-services</a></span></li>
                        </div>
                        <li class="sidebar-link"><i class="align-middle" data-feather="corner-right-down"></i> <span
                                class="align-middle">Gestion des diffusions</span></li>
                    </ul>



                    <li
                        class="sidebar-item <?php echo (basename($_SERVER['PHP_SELF'])=="pages-blank.php")?"active":""; ?>">
                        <a class="sidebar-link" href="pages-blank.php">
                            <i class="align-middle" data-feather="book"></i> <span class="align-middle">Blank</span>
                        </a>

                    </li>


                </ul>
            </div>
        </nav>