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
                            <h2 class="h2">Ajouter un Sous-Service</h2>
                        </div>
                        <div class="card-body">
                            <form action="db/addfiche.php" method="post" id="myform">

                                <div class="row">
                                    <div class="col-md-1">

                                    </div>

                                    <div class="col-md-9 my-4   ">
                                        <label for="Prenom">Annee : </label>

                                        <select id="Revision" class="form-select" aria-label="Default select example"
                                            name="num">


                                            <?php
                                            $sql = mysqli_query($conn,"select * from auditeur where id_utilisateur = ".$_SESSION["user_id"]);
                                            $result = $sql->fetch_assoc();
                                            $query = mysqli_query($conn,"select numero_audit from auditeurprevu where id_auditeur=".$result["id"]);
                                            while($obj = $query->fetch_assoc()){
                                                $n=$obj['numero_audit'];
                                                $n = $n;
                                                $query = mysqli_query($conn,"select * from fichecreeoupas where CreeOuPas=1 and num='1/29'");
                                                echo '<option value="">'.$obj['numero_audit'].'</option>';
                                                while($object = $query->fetch_assoc()){
                                                    echo '<option value="'.$object["annee"].'">'.$n.'</option>';
                                                }   
                                            }
                                            
                                            ?>
                                        </select>



                                    </div>
                                </div>





                                <div class="row">
                                    <div class="col-md-1">

                                    </div>

                                    <input type="submit" value="validerr" class="btn btn-success mt-4 mb-3" id="sub">

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

<script src="js/app.js">
</script>
<script src="js/ajax.js"></script>
<script src="js/annee_selector.js">


</script>
<script>
flatpickr("input[type=datetime-local]", {})
</script>

</body>

</html>