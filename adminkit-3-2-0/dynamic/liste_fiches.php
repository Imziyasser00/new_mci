<?php

use function PHPSTORM_META\map;

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
                                    <h2 class="h2">Liste des Fiche</h2>
                                </div>
                                <div class="col-md-5">

                                </div>

                                <div class="col-md-1 mt-2">

                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped table-hover ">
                                <thead>
                                    <tr>
                                        <th style="width:15%">N° d'audit</th>
                                        <th style="width:15%;">Processus</th>
                                        <th style="width:20%">Responsable d'audit</th>
                                        <th style="width:20%">Fiche d'audit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $annee = $_POST["annee"];
                                    
                                    $query = ("SELECT * FROM fichecreeoupas where CreeOuPas = 1");
                                    
                                    $result = mysqli_query($conn,$query);
                                    while($obj = $result->fetch_assoc()){
                                        $id_RA = $obj["i_RA"];
                                        $num = $obj["num"];
                                        $sql = mysqli_query($conn,"SELECT * FROM auditprevu where numero = '$num'");
                                        $data = $sql->fetch_assoc();
                                        $sqll = mysqli_query($conn,"SELECT * FROM sservice where id = ".$data["id_sservice"]);
                                        $ss = $sqll->fetch_assoc();
                                        
                                        echo '<tr>
                                        <td>'.$obj["num"].'</td>
                                        <td>'.$ss["nom"].'</td>
                                        <td>';
                                        
                                        $pp = mysqli_query($conn,"SELECT * FROM utilisateur WHERE id = $id_RA ");
                                        $pren = $pp->fetch_assoc();
                                        echo $pren["prenom"].' '.$pren["nom"].'</td> 
                                        
                                        <td class="table-action">
                                            <a class="confirmation" href="add_fiche.php?num='.$num.'"><i class="align-middle feather feather-trash align-middle" data-feather="eye"></i></a>
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