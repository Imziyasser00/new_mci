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
                                    <a href="addAuditType.php" class="btn btn-primary">Ajouter</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped table-hover ">
                                <thead>
                                    <tr>
                                        <th style="width:15%">Id</th>
                                        <th style="width:15%;">Type</th>
                                        <th style="width:20%">Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query = ("SELECT * FROM audit_type");
                                    
                                    $result = mysqli_query($conn,$query);
                                    while($obj = $result->fetch_assoc()){
                                        echo '<tr>
                                        
                                        
                                        <td>'.$obj["id"].'</td>
                                        <td>'.$obj['type'].'</td>
                                        
                                        <td class="table-action">
                                            <a class="confirmation" href="modAuditType.php?id='.$obj["id"].'"><i class="align-middle feather feather-trash align-middle" data-feather="edit-2"></i></a>
                                            <a  class="confirmation" href="db/deleteAuditType.php?id='.$obj["id"].'"><i class="align-middle" data-feather="trash-2"></i></a>
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