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
                            <h2 class="h2">Modifier un Sous-Service</h2>
                        </div>
                        <div class="card-body">
                            <?php 
                                    $sql = mysqli_query($conn,"SELECT * FROM sservice WHERE id = ".$_GET["id"]);
                                    while($obj = $sql->fetch_assoc()){
                            echo '<form action="db/modsservice.php" method="post">

                                <div class="row">
                                    <div class="col-md-1">

                                    </div>
                                    <div class="col-md-9 my-4   ">

                                        <label for="service">Nom du Service : </label>
                                        <input class="form-control" type="hidden" id="id" name="id"
                                            value="'.$_GET["id"].'" required>
                                        <input class="form-control" type="text" id="service" name="sservice_nom"
                                            value="'.$obj["nom"].'" required>

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