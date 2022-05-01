<?php 
include_once("includes/header.php");
?>


<div class="main">
    <?php include_once 'includes/up_bar.php'; ?>

    <main class="content">
        <div class="container-fluid p-0">

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-6 mt-2">
                                    <h2 class="h2">Diffusion par Sous-Service</h2>
                                </div>
                                <div class="col-md-5">

                                </div>


                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped table-hover ">
                                <thead>
                                    <tr>
                                        <th style="width:15%">Id</th>
                                        <th style="width:15%">Service</th>
                                        <th style="width:15%;">Sous-Service</th>
                                        <th style="width:25%">Type de Document</th>
                                        <th style="width:5%">Nom</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $id_sser = $_GET["id"];
                                    
                                    error_reporting(E_ALL);
                                    ini_set('display_errors', 0);
                                    $query = mysqli_query($conn,"SELECT * FROM sservice where id = '$id_sser'");
                                    $obj = $query->fetch_assoc();
                                    $id_ser = $obj["id_service"];
                                    $sql = mysqli_query($conn,"SELECT * FROM service where id = '$id_ser'");
                                    $object = $sql->fetch_assoc();
                                    $service =  $object["nom"];
                                    ?>
                                    <?php
                                    $qry = ("SELECT * FROM diff where id_serv = $id_sser");                                  
                                    $result = mysqli_query($conn,$qry);
                                    while($rs = $result->fetch_assoc()){
                                        
                                        echo '<tr>
                                        <td>'.$rs["id_doc"].'
                                        <td>'.$service.'</td>';
                                        $sqll = mysqli_query($conn,"SELECT * FROM sservice where id = $id_sser");
                                        $obbj = $sqll->fetch_assoc();
                                        $name = $obbj["nom"];
                                        echo '

                                        <td>'.$name.'</td>';
                                        $sqll = mysqli_query($conn,"SELECT * FROM document where id  = ".$rs["id_doc"]);
                                        $obbj = $sqll->fetch_assoc();
                                        
                                       
                                        $type = $obbj["type"];
                                        $nom = $obbj["nom"];
                                        echo '
                                        <td>'.$type.'</td>
                                        <td>'.$nom.'</td>
                                        
                                    </tr>';
                                    }
                                             
                                    ?>

                                </tbody>
                            </table>
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