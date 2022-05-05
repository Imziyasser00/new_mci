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
                            <h2 class="h2">Plan d'audit annuel</h2>
                        </div>
                        <div class="card-body">
                            <form action="db/transformer2.php" method="post" id="myform">
                                <div class="row">
                                    <div class="col-md-1">

                                    </div>

                                    <div class="col-md-9 my-2">

                                        <label for="Revision">Annee :
                                        </label>
                                        <select id="Revision" class="form-select" aria-label="Default select example"
                                            name="annee">

                                            <?php
                                            $sql = mysqli_query($conn,"SELECT Distinct(ann) FROM auditprevu");
                                            while($data = $sql->fetch_assoc()){
                                                echo '<option value="'.$data["ann"].'">'.$data["ann"].'</option>';
                                            }
                                            
                                            ?>
                                        </select>
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