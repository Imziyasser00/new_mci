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
                                    <h2 class="h2">Plan</h2>
                                </div>
                                <div class="col-md-4">

                                </div>

                            </div>
                        </div>
                        <form id="desactive_form" action="db/desactiverDoc.php" method="post">
                            <div class="card-body">
                                <table class="table table-striped table-hover ">
                                    <thead>
                                        <tr>
                                            <th style="width:20%;">Sous-Service</th>
                                            <th style="width:30%">Nom</th>
                                            <th style="width:10%">Type</th>
                                            <th style="width:10%">Etat</th>
                                            <th style="width:10%">Date App</th>
                                            <th style="width:10%">Date Revs</th>
                                            <th style="width:25%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php   
                                    $type = $_GET["type"];
                                    $service = $_GET["service"];
                                    $query = ("SELECT * FROM document where valide = '0' and active_type = '0' and type = '$type' and id_service = $service");
                                    $result = mysqli_query($conn,$query);
                                    while($obj = $result->fetch_assoc()){
                                        
                                        $sql = mysqli_query($conn,"SELECT * FROM service WHERE id = ".$service);
                                        while($ser = $sql->fetch_assoc()){
                                            $name = $ser["nom"];
                                        }
                                        echo '<tr>
                                        <td>'.$name.'</td>
                                        <td>'.$obj['nom'].'</td>
                                        <td>'.$type.'</td>';
                                        if($obj['Etat'] == "P?rim?") {
                                            echo '<td>Perimé</td>';}
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
                                            
                                        </td>
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
<script src="js/desactive_file.js"></script>
<script src="js/app.js"></script>

</body>

</html>