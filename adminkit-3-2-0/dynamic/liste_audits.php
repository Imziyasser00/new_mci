<?php 
include_once("includes/header.php");
?>


<div class="main">
    <?php include_once 'includes/up_bar.php';
    error_reporting(0); ?>

    <main class="content">
        <div class="container-fluid p-0">

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-6 mt-2">
                                    <h2 class="h2">Liste des Audits</h2>
                                </div>
                                <div class="col-md-5">

                                </div>

                                <div class="col-md-1 mt-2">
                                    <a href="annee_selector.php" class="btn btn-primary">Ajouter</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped table-hover ">
                                <thead>
                                    <tr>
                                        <th style="width:15%">Id</th>
                                        <th style="width:15%;">Auditeur</th>
                                        <th style="width:20%">Numero_audit</th>
                                        <th style="width:20%">Année</th>
                                        <th style="width:10%">Fonction</th>
                                        <th style="width:10%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query = ("SELECT * FROM auditeurprevu");
                                    
                                    $result = mysqli_query($conn,$query);
                                    while($obj = $result->fetch_assoc()){
                                        echo '<tr>
                                        <td>'.$obj["id"].'</td>';
                                        
                                        $sql = mysqli_query($conn,"SELECT * FROM utilisateur where id = ".$obj["id_auditeur"]);
                                        $data = $sql->fetch_assoc();
                                        echo '
                                        <td>'.$data["prenom"].' '.$data["nom"].'</td>
                                        <td>'.$obj['numero_audit'].'</td>
                                        <td>'.$obj['ann'].'</td>
                                        <td>'.$obj['fonction'].'</td>
                                        <td class="table-action">
                                            <a class="confirmation" href="modAnnee.php?id='.$obj["id"].'"><i class="align-middle feather feather-trash align-middle" data-feather="edit-2"></i></a>
                                            <a  class="confirmation" href="db/deleteSservice.php?id='.$obj["id"].'"><i class="align-middle" data-feather="trash-2"></i></a>
                                        </td>
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