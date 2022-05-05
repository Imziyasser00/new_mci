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
                            <form action="db/transformer.php" method="post" id="myform">

                                <div class="row">
                                    <div class="col-md-1">

                                    </div>

                                    <div class="col-md-9 my-4   ">
                                        <label for="Prenom">Annee : </label>


                                        <?php $today = date("Y");?>
                                        <input id="Date" class="form-control" type="number" value="<?php echo $today;?>"
                                            name="Date" min="2016">

                                    </div>
                                </div>





                                <div class="row">
                                    <div class="col-md-1">

                                    </div>

                                    <input type="button" onclick="event.preventDefault(); myValidation();"
                                        value="validerr" class="btn btn-success mt-4 mb-3" id="sub">

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