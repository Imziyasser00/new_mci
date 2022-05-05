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
                                    <h2 class="h2">Diffusion par Document</h2>
                                </div>
                                <div class="col-md-5">

                                </div>


                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped table-hover ">
                                <thead>
                                    <tr>
                                        <th style="width:25%">nom du document</th>
                                        <th style="width:15%;">Service</th>
                                        <th style="width:15%">Type</th>
                                        <th style="width:15%;">Service</th>
                                        <th style="width:15%">Sous-Service</th>
                                        <th style="width: 10%;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $id_doc = $_GET["id"];
                                    
                                    error_reporting(E_ALL);
                                    ini_set('display_errors', 0);
                                    $query = mysqli_query($conn,"SELECT * FROM document where id = '$id_doc'");
                                    $obj = $query->fetch_assoc();
                                    $nomDoc = $obj["nom"];
                                    $type = $obj["type"];
                                    $id_serv = $obj["id_service"];
                                    $data = mysqli_query($conn,"SELECT * FROM service where id = $id_serv");
                                    $data_result = $data->fetch_assoc();
                                    $service_nom = $data_result["nom"];
                                    
                                   
                                    $qry = ("SELECT * FROM diff where id_doc = $id_doc");                                  
                                    $result = mysqli_query($conn,$qry);
                                    
                                    while($rs = $result->fetch_assoc()){
                                        
                                        echo '<tr>
                                        <td>'.$nomDoc.'
                                        <td>'.$service_nom.'</td>
                                        <td>'.$type.'</td>';
                                        $id_serv = $rs["id_serv"];
                                        $sqll = mysqli_query($conn,"SELECT * FROM sservice where id = $id_serv");
                                        $obbj = $sqll->fetch_assoc();
                                        $id_service = $obbj["id_service"];
                                        $nom_sserv = $obbj["nom"];
                                        $sql = mysqli_query($conn,"SELECT * FROM service where id = $id_service");
                                        $res = $sql->fetch_assoc();
                                        $nom_service = $res["nom"];
                                        echo '

                                        <td>'.$nom_service.'</td>
                                        <td>'.$nom_sserv.'</td>';
                                        
                                        echo '
                                        <td class="table-action"><a ';
                                        if(file_exists($obj['lien'])){
                                            echo "href='".$obj["lien"]."' target='_blank'";
                                        }
                                        else
                                        {
                                            echo "href = '#' class='file_not'";
                                        }

                                         echo '><i class="align-middle feather feather-trash align-middle" data-feather="eye"></i></a></td>
                                        
                                        
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