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
                            <h2 class="h2">Modification</h2>
                        </div>
                        <div class="card-body">
                            <form action="db/modAnnee.php" method="post">

                                <div class="row">
                                    <div class="col-md-1">

                                    </div>
                                    <?php 
                                    $sql = mysqli_query($conn,"SELECT * FROM annee_document where id = ".$_GET["id"]);
                                    $obj = $sql->fetch_assoc();
                                    ?>
                                    <input type="hidden" name="id" value="<?php echo $obj["id"] ?>">

                                    <div class="col-md-9 my-4   ">
                                        <label for="Prenom">Annee : </label>
                                        <input class="form-control" type="hidden" id="annee" name="old_annee"
                                            placeholder="Annee" min="0" value="<?php echo $obj["annee"]; ?>">
                                        <input class="form-control" type="number" id="annee" name="annee"
                                            placeholder="Annee" min="0" value="<?php echo $obj["annee"]; ?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1">

                                    </div>
                                    <div class="col-md-9 my-2">

                                        <label for="nom">Reference : </label>
                                        <input class="form-control" type="text" id="ref" name="reference"
                                            placeholder="Reference" value="<?php echo $obj["Ref"]; ?>">

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