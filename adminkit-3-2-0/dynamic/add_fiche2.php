<?php 
include_once("includes/header.php");
?>


<div class="main">
    <?php include_once 'includes/up_bar.php'; ?>


    <main class="content">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="h3"> <i class="align-middle" data-feather="file-text"></i>Fiche d'audit NR
                                <?php echo $_GET["num"]; ?></h3>
                            <h4>Réunion de clôture :</h4>
                        </div>
                        <div class="card-body">
                            <form action="db/add_fiche2.php" method="post">
                                <div class="row">
                                    <div class="col-md-1">

                                    </div>
                                    <div class="col-md-4">


                                        <?php 
                                        $sql = mysqli_query($conn,"SELECT * FROM auditeurprevu WHERE numero_audit = '".$_GET["num"]."' and fonction = 1");
                                        $data = $sql->fetch_assoc();
                                        $query = mysqli_query($conn,"SELECT * FROM auditeur WHERE id = ".$data["id_auditeur"]);
                                        $obj = $query->fetch_assoc();
                                        echo '<input class="form-control" type="hidden" id="Prenom" 
                                        value="'.$obj["nom"].' '.$obj["prenom"].'" disabled><input class="form-control" type="hidden" id="Prenom" name="id_Ra"
                                        value="'.$obj["id"].'" >';
                                        ?>

                                    </div>

                                    <div class="col-md-4">

                                        <?php 
                                        $sql = mysqli_query($conn,"SELECT * FROM auditprevu WHERE numero = '".$_GET["num"]."'");
                                        $data = $sql->fetch_assoc();
                                        $id_sservice = $data["id_sservice"];    
                                        $id_service = $data["id_service"];
                                        $query = mysqli_query($conn,"SELECT * FROM sservice WHERE id = ".$id_sservice);
                                        $obj = $query->fetch_assoc();
                                        echo '<input class="form-control" type="hidden" id="Prenom" 
                                        value="'.$obj["nom"].'" disabled><input class="form-control" type="hidden" id="Prenom" name="id_ss"
                                        value="'.$obj["id"].'" >';
                                        ?>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1">

                                    </div>
                                    <div class="col-md-9 my-4   ">

                                        <label for="identifiant">Date </label>
                                        <?php $today = date("Y-n-j");
                                        $num = $_GET["num"];?>
                                        <input type="hidden" value="<?php echo $num?>" name="num">
                                        <input id="Date" class="form-control" type="datetime-local"
                                            value="<?php echo $today;?>" name="date">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-1">

                                    </div>
                                    <div class="col-md-9 my-2">

                                        <label for="password">Heure : </label>
                                        <input class="form-control" type="time" id="password" name="heure"
                                            placeholder="Lieu" required>

                                    </div>
                                </div>



                                <div class="row">
                                    <div class="col-md-1">

                                    </div>


                                    <div class="col-md-9 my-2">
                                        <label for="Processus"> Présence souhaitée :
                                        </label>
                                        <input type="hidden" name="num" value="<?php echo $_GET["num"] ?>">

                                        <div class="cold-md-9">
                                            <select multiple placeholder="Native Select" data-search="false"
                                                data-silent-initial-value-set="true" id="example-select"
                                                name="presenceClo[]">
                                                <?php
													
													$req1="select * from utilisateur order by nom";
                                                    $res = mysqli_query($conn,$req1);
													$nbr = mysqli_num_rows($res);
													if($nbr!=0){
														
                                                        while  ($obj = $res->fetch_assoc()) 
                                                        {
													$nom=$obj['nom'];																	
													$prenom=$obj['prenom'];																	
													$n=$obj['id'];																	
													echo '<option value="'.$n.'">'.utf8_encode($nom." ".$prenom).'</option>';
																	
                                                                    
                                              } }
                                          ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="row col-md-12">
                                        <div class="col-md-1"></div>
                                        <input type="submit" value="Back" class="btn btn-danger mt-5 mb-3 col-md-4">
                                        <div class="col-md-1"></div>
                                        <input type="submit" value="Valider" name="Valider"
                                            class="btn btn-success mt-5 mb-3 col-md-4">
                                        <div class="col-md-1"></div>
                                    </div>


                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


    <?php include_once('includes/footer.php');  ?>
</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta3/js/bootstrap-select.min.js"></script>
<script>
$(document).ready(function() {

    $('input[name=from]').durationpicker({
            showDays: false
        })
        .on("change", function() {
            $('#btn-example4').text("Duration (secs): " + $(this).val());
        });

});
</script>

<script>
VirtualSelect.init({
    ele: '#example-select',
    multiple: true,
    search: true,
    placeholder: 'Select options here',
    hideClearButton: true

});
</script>

<script>
flatpickr("input[type=datetime-local]", {})
</script>
<script src="js/app.js">
</script>
<script src="js/ajax.js"></script>


</body>

</html>s