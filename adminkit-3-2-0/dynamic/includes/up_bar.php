<?php 
include("./db/notification/not_fiche_cree_ou_pas.php");
include("./db/notification/docEx.php");
?>
<nav class="navbar navbar-expand navbar-light navbar-bg">
    <a class="sidebar-toggle js-sidebar-toggle">
        <i class="hamburger align-self-center"></i>
    </a>

    <div class="navbar-collapse collapse">
        <ul class="navbar-nav navbar-align">
            <li class="nav-item dropdown">
                <a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-bs-toggle="dropdown">
                    <div class="position-relative">
                        <i class="align-middle" data-feather="bell"></i>
                        <span class="indicator"><?php echo $counter; ?></span>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="alertsDropdown">
                    <div class="dropdown-menu-header">
                        <?php echo $counter; ?> New Notifications
                    </div>

                    <div class="list-group">

                        <?php  
                        if(isset($num)){
                            foreach ($num as $arr) {
                                echo '<a href="cree_fiche.php?num='.$arr.'" class="list-group-item">
                                <div class="row g-0 align-items-center">
                                    <div class="col-2">
                                        <i class="text-warning" data-feather="bell"></i>
                                    </div>
                                    <div class="col-10">
                                        <div class="text-dark">Fiche d audit</div>
                                        <div class="text-muted small mt-1">Vous étes responsable d audit N° '.$arr.'</div>
                                    </div>
                                </div>
                            </a>';
                            }
                        }
                        
                        
                        ?>
                        <?php  
                        if(isset($doc)){
                            foreach ($doc as $arr) {
                                echo ' <a href="" class="list-group-item">
                                <div class="row g-0 align-items-center">
                                    <div class="col-2">
                                        <i class="text-danger" data-feather="alert-circle"></i>
                                    </div>
                                    <div class="col-10">
                                        <div class="text-dark">Document Expiré</div>
                                        <div class="text-muted small mt-1">le document '.$arr['nom'].'est expiré
                                        </div>
                                        
                                    </div>
                                </div>
                            </a>';
                            }
                        
                        
                        }
                            
                        ?>
                        <?php  
                        if(isset($reminder)){
                            foreach ($reminder as $arr) {
                                echo ' <a href="#" class="list-group-item">
                                <div class="row g-0 align-items-center">
                                    <div class="col-2">
                                        <i class="text-primary" data-feather="alert-octagon"></i>
                                    </div>
                                    <div class="col-10">
                                        <div class="text-dark">'.$arr["nom"].'</div>
                                    </div>
                                </div>
                            </a>';
                            }
                        
                        
                        }
                            
                        ?>


                        <a href="#" class="list-group-item">
                            <div class="row g-0 align-items-center">
                                <div class="col-2">
                                    <i class="text-success" data-feather="user-plus"></i>
                                </div>
                                <div class="col-10">
                                    <div class="text-dark">New connection</div>
                                    <div class="text-muted small mt-1">Christina accepted your request.</div>
                                    <div class="text-muted small mt-1">14h ago</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="dropdown-menu-footer">
                        <a href="all_notifications.php" class="text-muted">Show all notifications</a>
                    </div>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                    <i class="align-middle" data-feather="settings"></i>
                </a>

                <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                    <img src="img/avatars/avatar.jpg" class="avatar img-fluid rounded me-1" alt="Charles Hall" />
                    <span class="text-dark"><?php echo $_SESSION["nom"]." ".$_SESSION["prenom"]; ?></span>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href="pages-profile.html"><i class="align-middle me-1"
                            data-feather="user"></i> Profile</a>
                    <a class="dropdown-item" href="./tableau-de-bord.php"><i class="align-middle me-1"
                            data-feather="pie-chart"></i>
                        Analytics</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="change_password.php"><i class="align-middle me-1"
                            data-feather="settings"></i>
                        modifier mot de passe</a>
                    <a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="help-circle"></i>
                        Help Center</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="db/logout.php">Log out</a>
                </div>
            </li>
        </ul>
    </div>
</nav>