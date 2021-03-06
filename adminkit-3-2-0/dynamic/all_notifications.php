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

                        <div class="card-body">
                            <?php  
                        if(isset($costum_not)){
                            foreach ($costum_not as $arr) {
                                echo ' <a href="" class="list-group-item mt-1" style="height:70px;display:flex;align-items:center;">
                                <div class="row g-0 align-items-center">
                                    <div class="col-2">
                                        <i class="text-';
                                        if($arr["type"] == 1){
                                            echo "warning";
                                        }elseif($arr["type"] == 2){
                                            echo "danger";
                                        }elseif($arr["type"] == 3){
                                            echo "primary";
                                        }else{
                                            echo "success";
                                        }
                                        echo '" data-feather="alert-circle"  style="margin-right : 50px;"></i>
                                    </div>
                                    <div class="col-10">
                                        <div class="text-dark">Notification</div>
                                        <div class="text-muted small mt-1"> '.$arr['message'].'
                                        </div>
                                        
                                    </div>
                                </div>
                            </a>';
                            }
                        
                        
                        }
                            
                        ?>
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
                                        <div class="text-muted small mt-1">Vous ??tes responsable d audit N?? '.$arr.'</div>
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
                                        <div class="text-dark">Document Expir??</div>
                                        <div class="text-muted small mt-1">le document '.$arr['nom'].'est expir??
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