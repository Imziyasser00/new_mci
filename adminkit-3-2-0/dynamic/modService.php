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
                            <h2 class="h2">Modifier un Service</h2>
                        </div>
                        <div class="card-body">
                            <?php 
                            
                            $sql = mysqli_query($conn,"SELECT * FROM service WHERE id = ".$_GET["id"]);
                            while($obj = $sql->fetch_assoc()){
                    echo '<form action="db/modservice.php" method="post">

                        <div class="row">
                            <div class="col-md-1">

                            </div>
                            <div class="col-md-9 my-4   ">

                                <label for="service">Nom du Service : </label>
                                <input class="form-control" type="hidden" id="id" name="id"
                                    value="'.$_GET["id"].'">
                                <input class="form-control" type="text" id="service" name="service_nom"
                                    value="'.$obj["nom"].'" required>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-1">

                            </div>
                            <div class="col-md-9 my-2">

                                <label for="ref">Réfèrence du service</label>
                                <input class="form-control" type="text" id="ref" name="ref"
                                    value="'.$obj["ref"].'" required>

                            </div>
                        </div>




                        <div class="row">
                            <div class="col-md-1">

                            </div>

                            <input type="submit" value="validerr" class="btn btn-success mt-4 mb-3">

                        </div>
                    </form>';}?>
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