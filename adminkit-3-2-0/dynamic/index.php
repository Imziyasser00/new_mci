<?php 
include_once("includes/header.php");

?>



<div class="main">
    <?php include_once 'includes/up_bar.php'; ?>

    <?php

$query = "SELECT * FROM `pq_mmi` Where Ref = 'PQ';";
$result = mysqli_query($conn,$query);
while($obj = $result->fetch_assoc()){
    $pq_name = $obj["name"];
    $pq_path = $obj["path"];
    $_SESSION["pq_name"] = $pq_name;
    $_SESSION["pq_path"] = $pq_path;
}

$query = "SELECT * FROM `pq_mmi` Where Ref = 'MMI';";
$result = mysqli_query($conn,$query);
while($obj = $result->fetch_assoc()){
    $mmi_name = $obj["name"];
    $mmi_path = $obj["path"];
    $_SESSION["mmi_name"] = $mmi_name;
    $_SESSION["mmi_path"] = $mmi_path;
}



?>

    <main class="content col-md-12">
        <div class="container-fluid p-0 ">
            <div class="row">

                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">
                                    <h1 class="h1 mb-3 py-2 py-md-2 strong-tag"> Système Management Intégré </h1>
                                </div>
                                <div class="card-subtitle text-muted">
                                    <h4 class="mt-1 pt-1 pt-md-1 strong-tag"> Qualité Sécurité et Environnement
                                    </h4>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="row">
                        <div class="col-md-6">

                            <h4 class="my-4 px-4 text-info">
                                Bienvenue sur le portail web du : Système Management Intégré
                            </h4>
                        </div>

                        <div class="col-md-12">
                            <h5 class="text-muted my-3 px-4"> Le portail est conçu pour permettre le partage du système
                                documentaire et le suivi des
                                indicateurs de mesure et des plans d'action. Les pages, les documents et les résultats
                                dans les tableaux de bord sont affichés selon votre fonction et service.</h5>
                        </div>

                        <div class="col-md-6">

                            <h4 class="py-4 px-3"><i class="fa-solid fa-list-check mx-2"></i>Consulter la <a
                                    href="<?php echo $pq_path.$pq_name ?>" target="_blank">Politique
                                    QSE</a>
                                <?php if($_SESSION['adp'] == 3){echo '<i data-toggle="modal" data-target="#myModal" style="cursor:pointer;color : blue;" class="fa-solid fa-pen-to-square mx-2"></i>';} ?>et
                                le <a href="<?php echo $mmi_path.$mmi_name ?>" target="_blank">Manuel
                                    Management
                                    intégré</a><?php if($_SESSION['adp'] == 3){echo '<i data-toggle="modal" data-target="#myModal2" style="cursor:pointer;color : blue;" class="fa-solid fa-pen-to-square mx-2"></i>';} ?>
                            </h4>

                        </div>
                        <div class="col-md-6">

                            <h4 class="py-4 px-3"><i class="fa-solid fa-map mx-2"></i>Suivre les plannings et les
                                Résultats des audits internes .</h4>


                        </div>


                    </div>
                    <div class="row">


                        <div class="col-md-6">

                            <h4 class="py-4 px-3"><i class="fa-solid fa-file-arrow-down mx-2"></i>Télécharger des
                                documents (FAP, Processus, Procédure, Instruction,
                                Formaulaire ...) .</h4>

                        </div>
                        <div class="col-md-6">

                            <h4 class="py-4 px-3"> <i class="fa-solid fa-diamond-turn-right mx-2"></i> Suivre les
                                plans d'action en cours et leur clôture, Suivre les plans
                                d'amélioration </h4>


                        </div>


                    </div>
                    <div class="row">


                        <div class="col-md-6">

                            <h4 class="py-4 px-3"><i class="fa-solid fa-arrow-right mx-2"></i>Suivre en temps réel les
                                indicateurs .</h4>

                        </div>
                    </div>
                </div>

            </div>

            <!-- The Modal 1 -->
            <div class="modal" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Politique QSE </h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <!-- Modal body -->
                        <div class="modal-body">
                            <form method="post" action="" enctype="multipart/form-data">
                                <div class="row">
                                    <label for="mon_fichier">Fichier (formats pdf) :</label>
                                    <input type="file" name="mon_fichier" id="mon_fichier" />
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-6">
                                        <input type="submit" name="pq" value="Envoyer" class="btn btn-primary" />
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- The Modal 2 -->
            <div class="modal" id="myModal2">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Manuel
                                Management
                                intégré</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <!-- Modal body -->
                        <div class="modal-body">
                            <form method="post" action="" enctype="multipart/form-data">
                                <div class="row">
                                    <label for="mon_fichier">Fichier (formats pdf) :</label>
                                    <input type="file" name="mon_fichier" id="mon_fichier" />
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-6">
                                        <input type="submit" name="mmi" value="Envoyer" class="btn btn-primary" />
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

    </main>

    <?php include_once('includes/footer.php');  ?>
    <?php
    if(isset($_POST["pq"])){

        
        if(isset($_FILES['mon_fichier']))
 {
    $files = glob($pq_path.'*'); // get all file names

    foreach($files as $file){
      echo "lol"; // iterate files
      
      if(is_file($file)) {
          // delete file
          unlink($file);
        }
    }
    $dossier = $pq_path;
    $fichier = basename($_FILES['mon_fichier']['name']);    
      
     if(move_uploaded_file($_FILES['mon_fichier']['tmp_name'], $dossier . $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné.
     {
        
        }
        else //Sinon (la fonction renvoie FALSE).
        {
            echo 'Echec de l\'upload !';
        }
        
        $query = "UPDATE `pq_mmi` SET `name`='".$_FILES["mon_fichier"]['name']."' WHERE Ref = 'PQ'";
        $result = mysqli_query($conn,$query);
        
    }
   
    }
    if(isset($_POST["mmi"])){

        
        if(isset($_FILES['mon_fichier']))
 {
    $files = glob($mmi_path.'*'); // get all file names

    foreach($files as $file){
      echo "lol"; // iterate files
      
      if(is_file($file)) {
          // delete file
          unlink($file);
        }
    }
    $dossier = $mmi_path;
    $fichier = basename($_FILES['mon_fichier']['name']);    
      
     if(move_uploaded_file($_FILES['mon_fichier']['tmp_name'], $dossier . $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné.
     {
        
        }
        else //Sinon (la fonction renvoie FALSE).
        {
            echo 'Echec de l\'upload !';
        }
        
        $query = "UPDATE `pq_mmi` SET `name`='".$_FILES["mon_fichier"]['name']."' WHERE Ref = 'MMI'";
        
    }
    
    }
    ?>
</div>
</div>


<script src="js/app.js"></script>

</body>

</html>