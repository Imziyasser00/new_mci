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
                            <h2 class="h2">Qualification Audit</h2>
                        </div>
                        <div class="card-body">
                            <form action="db/addAuditType.php" method="post">

                                <div class="row">
                                    <div class="col-md-1">

                                    </div>
                                    <div class="col-md-9 my-4   ">

                                        <label for="Prenom">Qualification : </label>
                                        <input class="form-control" type="text" id="service" name="qualification"
                                            placeholder="Qualification" required>

                                    </div>
                                </div>





                                <div class="row">
                                    <div class="col-md-1">

                                    </div>

                                    <input type="submit" value="valider" class="btn btn-success mt-4 mb-3">

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