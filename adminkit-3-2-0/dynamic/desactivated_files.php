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
                                    <h2 class="h2">Liste des Documents</h2>
                                </div>
                                <div class="col-md-4">

                                </div>
                                <div class="col-md-1 mt-2 mx-5 ">
                                    <input id="activeSubmit" type="submit" class="btn btn-success" value="Activer">
                                </div>
                            </div>
                        </div>
                        <form id="active_form" action="db/activerDoc.php" method="post">
                            <div class="card-body">
                                <table class="table table-striped table-hover ">
                                    <thead>
                                        <tr>
                                            <th style="width:15%;">Sous-Service</th>
                                            <th style="width:20%">Nom</th>
                                            <th style="width:15%">Type</th>
                                            <th style="width:15%">Etat</th>
                                            <th style="width:10%">Date App</th>
                                            <th style="width:10%">Date Revs</th>
                                            <th style="width:15%">Action</th>
                                            <th style="width: 15%">Activer</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php   
                                    
                                    $query = ("SELECT * FROM document where `valide`='1' or active_type = '1'");
                                    $result = mysqli_query($conn,$query);
                                    while($obj = $result->fetch_assoc()){
                                        $sql = mysqli_query($conn,"SELECT * FROM service WHERE id = ".$obj["id_service"]);
                                        $service = $sql->fetch_assoc();
                                            $name = $service["nom"];
                                        
                                        echo '<tr>
                                        <td>'.$name.'</td>
                                        <td>'.$obj['nom'].'</td>
                                        <td>'.$obj['type'].'</td>';
                                        if($obj['Etat'] == "P?rim?") {
                                            echo '<td>Perim??</td>';}
                                            else{
                                            echo '<td>'.$obj["Etat"].'</td>';
                                            }
                                        echo '<td>'.$obj['dateAPP'].'</td>
                                        <td>'.$obj['DATTREV'].'</td>
                                        <td class="table-action"><a ';
                                           if(file_exists($obj['lien'])){
                                               echo "href='".$obj["lien"]."' target='_blank'";
                                           }
                                           else
                                           {
                                               echo "href = '#' class='file_not'";
                                           }

                                            echo '><i class="align-middle feather feather-trash align-middle" data-feather="eye"></i></a>
                                            <a class="confirmation" href="moduser.php?id='.$obj["id"].'"><i class="align-middle feather feather-trash align-middle" data-feather="edit-2"></i></a>
                                            <a class="confirmation" href="db/deleteUser.php?id='.$obj["id"].'"><i class="align-middle" data-feather="trash-2"></i></a>
                                        </td><td><label width="100%" height="100%"><input class="check-input align-middle mx-3" name="chk[ ]" type="checkbox" value="'.$obj["id"].'"><label></td>
                                    </tr>';
                                    }
                                             
                                    ?>

                                    </tbody>
                                </table>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </main>
    <?php include_once('includes/footer.php');  ?>
</div>
</div>
<script src="js/active_file.js"></script>
<script src="js/app.js"></script>

</body>

</html>