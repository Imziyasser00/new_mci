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
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <meta name="keywords"
        content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="img/icons/icon-48x48.png" />

    <link rel="canonical" href="https://demo-basic.adminkit.io/" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <title>M C I</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>

    <link href="css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <!--      Scripts       -->


</head>
<?php 

include("db/file_system.php");

?>

<body data-theme="dark">
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
                            <li class="sidebar-link"><a class="sidebar-link" href="listeDocuments.php"><i
                                        class="align-middle" data-feather="align-justify"></i><span
                                        class="align-middle"> Liste des
                                        Document</span></a>
                            </li>
                            <li class="sidebar-link"><span class="align-middle"><a class="sidebar-link"
                                        href="TypeDoc.php"><i class="align-middle"
                                            data-feather="align-justify"></i>Types des documents</a></span></li>
                            <li class="sidebar-link"><span class="align-middle"><a class="sidebar-link"
                                        href="listeAnnees.php"><i class="align-middle"
                                            data-feather="align-justify"></i>Liste des Années</a></span></li>
                            <li class="sidebar-link"><span class="align-middle"><a class="sidebar-link"
                                        href="newDoc.php"><i class="align-middle" data-feather="plus-circle"></i>Nouveau
                                        document</a></span></li>
                        </div>
                        <li class="sidebar-link" id="diff_down"><i class="align-middle"
                                data-feather="corner-right-down"></i> <span class="align-middle">Gestion des
                                diffusions</span></li>
                        <div id="dif_down" style="display:none;" class="serv_down">
                            <li class="sidebar-link"><a class="sidebar-link" href="diffServ.php"><i class="align-middle"
                                        data-feather="align-justify"></i><span class="align-middle"> Diffusion par
                                        Service</span></a>
                            </li>
                            <li class="sidebar-link"><span class="align-middle"><a class="sidebar-link"
                                        href="DiffDoc.php"><i class="align-middle"
                                            data-feather="align-justify"></i>Diffusion par Document</a></span></li>
                            <li class="sidebar-link"><span class="align-middle"><a class="sidebar-link"
                                        href="addDiff.php"><i class="align-middle"
                                            data-feather="plus-circle"></i>Ajouter
                                        diffusion</a></span></li>
                            <li class="sidebar-link"><span class="align-middle"><a class="sidebar-link"
                                        href="delDiff.php"><i class="align-middle"
                                            data-feather="minus-circle"></i>Annuler
                                        diffusion</a></span></li>
                        </div>
                        <li class="sidebar-link" id="ad_aud"><i class="align-middle"
                                data-feather="corner-right-down"></i> <span class="align-middle">Gestion des
                                audits</span></li>
                        <div id="aud_ad_down" style="display:none;" class="serv_down">
                            <li class="sidebar-link" style="margin-left: -20px;"><a class="sidebar-link"
                                    href="liste_qualif_audits.php"><i class="align-middle"
                                        data-feather="align-justify"></i><span class="align-middle"> Qualifications des
                                        audits</span></a>
                            </li>

                        </div>
                    </ul>


                    <li id="doc_top" class="sidebar-item">
                        <div id="" class="sidebar-link">
                            <i class="align-middle" data-feather="folder"></i> <span
                                class="align-middle">Documents</span>
                        </div>

                    </li>

                    <ul id="Doc" class="doc_down">
                        <li class="sidebar-link" id="ad_down"><a href="<?php echo $pq_path.$pq_name ?>"
                                class="sidebar-link"><i class="align-middle" data-feather="file"></i> <span
                                    class="align-middle">Politique
                                    QSE</span></a>
                        </li>
                        <li class="sidebar-link" id="service_down"><a href="Politique_Qse.php" class="sidebar-link"><i
                                    class="align-middle" data-feather="file"></i>
                                <span class="align-middle">Plan d'orientation
                                    stratégique</span></a>
                        </li>
                        <li class="sidebar-link" id="service_down"><a href="<?php echo $mmi_path.$mmi_name ?>"
                                class="sidebar-link"><i class="align-middle" data-feather="file"></i>
                                <span class="align-middle">Manuel Management intégré</span></a>
                        </li>
                        <li class="sidebar-link" id="file_down"><a href="Doc_liste.php" class="sidebar-link"><i
                                    class="align-middle" data-feather="align-justify"></i> <span
                                    class="align-middle">Liste des
                                    documents</span></a>
                        </li>

                    </ul>

                    <li id="man_top"
                        class="sidebar-item <?php echo (basename($_SERVER['PHP_SELF'])=="listeUsers.php"||"")?"active":""; ?>">
                        <div id="" class="sidebar-link">
                            <i class="align-middle" data-feather="settings"></i> <span
                                class="align-middle">Administration</span>
                        </div>

                    </li>

                    <ul id="Man">
                        <li class="sidebar-link" id="audit_int"><i class="align-middle"
                                data-feather="corner-right-down"></i> <span class="align-middle">Audit interne</span>
                        </li>
                        <div id="audit_interne">
                            <li class="sidebar-link"><a class="sidebar-link" href="liste_auditeur.php"><i
                                        class="align-middle" data-feather="align-justify"></i><span
                                        class="align-middle"> Liste des
                                        Auditeurs</span></a>
                            </li>
                            <li class="sidebar-link"><a class="sidebar-link" href="liste_audits.php"><i
                                        class="align-middle" data-feather="align-justify"></i><span
                                        class="align-middle"> Liste des
                                        Audits</span></a>
                            </li>
                            <li class="sidebar-link"><a class="sidebar-link" href="plan_annee.php"><i
                                        class="align-middle" data-feather="layout"></i><span class="align-middle"> Plan
                                        Audit</span></a>
                            </li>

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
                            <li class="sidebar-link"><a class="sidebar-link" href="listeDocuments.php"><i
                                        class="align-middle" data-feather="align-justify"></i><span
                                        class="align-middle"> Liste des
                                        Document</span></a>
                            </li>
                            <li class="sidebar-link"><span class="align-middle"><a class="sidebar-link"
                                        href="TypeDoc.php"><i class="align-middle"
                                            data-feather="align-justify"></i>Types des documents</a></span></li>
                            <li class="sidebar-link"><span class="align-middle"><a class="sidebar-link"
                                        href="listeAnnees.php"><i class="align-middle"
                                            data-feather="align-justify"></i>Liste des Années</a></span></li>
                            <li class="sidebar-link"><span class="align-middle"><a class="sidebar-link"
                                        href="newDoc.php"><i class="align-middle" data-feather="plus-circle"></i>Nouveau
                                        document</a></span></li>
                        </div>
                        <li class="sidebar-link" id="diff_down"><i class="align-middle"
                                data-feather="corner-right-down"></i> <span class="align-middle">Gestion des
                                diffusions</span></li>
                        <div id="dif_down" style="display:none;" class="serv_down">
                            <li class="sidebar-link"><a class="sidebar-link" href="diffServ.php"><i class="align-middle"
                                        data-feather="align-justify"></i><span class="align-middle"> Diffusion par
                                        Service</span></a>
                            </li>
                            <li class="sidebar-link"><span class="align-middle"><a class="sidebar-link"
                                        href="DiffDoc.php"><i class="align-middle"
                                            data-feather="align-justify"></i>Diffusion par Document</a></span></li>
                            <li class="sidebar-link"><span class="align-middle"><a class="sidebar-link"
                                        href="addDiff.php"><i class="align-middle"
                                            data-feather="plus-circle"></i>Ajouter
                                        diffusion</a></span></li>
                            <li class="sidebar-link"><span class="align-middle"><a class="sidebar-link"
                                        href="delDiff.php"><i class="align-middle"
                                            data-feather="minus-circle"></i>Annuler
                                        diffusion</a></span></li>
                        </div>
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