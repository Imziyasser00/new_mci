<?php 
include_once("includes/header.php");
?>


<div class="main">
    <?php include_once 'includes/up_bar.php'; ?>

    <main class="content">
        <div class="container-fluid p-0">

            <h1 class="h3 mb-3">All Notifications</h1>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0"></h5>
                        </div>
                        <div class="card-body">
                            <?php  
                        if(isset($num)){
                            foreach ($num as $arr) {
                                echo '<a href="cree_fiche.php?num='.$arr.'" class="list-group-item mt-2" style="height:70px;display:flex;align-items:center;">
                                <div class="row g-0 align-items-center">
                                    <div class="col-2">
                                        <i class="text-warning" data-feather="bell" style="margin-right : 50px;"></i>
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
                                echo ' <a href="" class="list-group-item mt-2" style="height:70px;display:flex;align-items:center;">
                                <div class="row g-0 align-items-center">
                                    <div class="col-2">
                                        <i class="text-danger" data-feather="alert-circle"  style="margin-right : 50px;"></i>
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
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>

    <?php include_once('includes/footer.php');  ?>
</div>
</div>

<script src="js/app.js"></script>

</body>

</html>