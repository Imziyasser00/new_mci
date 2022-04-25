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
                            <h2 class="h2">Liste des Utilisateurs</h2>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped table-hover ">
                                <thead>
                                    <tr>
                                        <th style="width:15%;">Identifiant</th>
                                        <th style="width:15%">Nom</th>
                                        <th style="width:15%">Prenom</th>
                                        <th style="width:25%">Service</th>
                                        <th style="width:35%">Fonction</th>
                                        <th style="width:25%">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php   
                                    
                                    $query = ("select utilisateur.id as id, utilisateur.username as username, utilisateur.fonction as fonction,utilisateur.nom as nom,utilisateur.prenom as prenom,service.nom as serv from utilisateur,service where utilisateur.id_service=service.id");
                                    $result = mysqli_query($conn,$query);
                                    while($obj = $result->fetch_assoc()){
                                        echo '<tr>
                                        <td>'.$obj['username'].'</td>
                                        <td>'.$obj['nom'].'</td>
                                        <td>'.$obj['prenom'].'</td>
                                        <td>'.$obj['serv'].'</td>
                                        <td>'.$obj['fonction'].'</td>
                                        <td class="table-action">
                                            <a href="moduser.php?id='.$obj["id"].'"><i class="align-middle feather feather-trash align-middle" data-feather="edit-2"></i></a>
                                            <a href="db/deleteUser.php?id='.$obj["id"].'"><i class="align-middle" data-feather="trash-2"></i></a>
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