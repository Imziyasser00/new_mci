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
                            <form action="db/addservice.php" method="post">

                                <div class="row">
                                    <div class="col-md-1">

                                    </div>

                                    <div class="col-md-9 my-4   ">
                                        <label for="Prenom">Nom du Service : </label>
                                        <?php
                                        $id = $_GET["id"];
                                        while($obj = (mysqli_query($conn,"SELECT * FROM service WHERE id = ".$id))->fetch_assoc()){
                                            $name = $obj["nom"];
                                        }
                                        
                                        ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1">

                                    </div>
                                    <div class="col-md-9 my-2">

                                        <label for="nom">Réfèrence du service</label>
                                        <input class="form-control" type="text" id="ref" name="ref"
                                            placeholder="Reference" required>

                                    </div>
                                </div>




                                <div class="row">
                                    <div class="col-md-1">

                                    </div>

                                    <input type="submit" value="validerr" class="btn btn-success mt-4 mb-3">

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


</body>

</html>