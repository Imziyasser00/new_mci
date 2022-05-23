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
                            <h2 class="h2">Ajouter un Document</h2>
                        </div>
                        <div class="card-body">
                            <form action="db/addDoc.php" method="post" enctype="multipart/form-data">

                                <div class="row">
                                    <div class="col-md-1">

                                    </div>
                                    <div class="col-md-9 my-4">
                                        <label for="formFile" class="form-label">Document :</label>
                                        <input class="form-control" type="file" id="formFile" name="file">
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-1">

                                    </div>
                                    <div class="col-md-9 my-2">

                                        <label for="Etat">Etat</label>
                                        <select class="form-select" aria-label="Default select example" id="Etat"
                                            name="Etat">
                                            <option selected>Open this select menu</option>
                                            <option value="En cours d application">En cours d'application</option>
                                            <option value="En cours de revision">En cours de revision</option>
                                            <option value="Reconduit">Reconduit</option>
                                            <option value="Annule">Annule</option>
                                        </select>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-1">

                                    </div>

                                    <div class="col-md-9 my-2">

                                        <label for="Type">Type</label>
                                        <select class="form-select" aria-label="Default select example" id="Type"
                                            name="Type">
                                            <option selected>Open this select menu</option>
                                            <?php
                                            $query = mysqli_query($conn,"SELECT * FROM type");
                                            while($obj = $query->fetch_assoc()){
                                                echo '<option value="'.$obj["type"].'">'.$obj["type"].'</option>';
                                            }
                                            
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1">

                                    </div>

                                    <div class="col-md-9 my-2">

                                        <label for="Service">Service</label>
                                        <select class="form-select" aria-label="Default select example" id="Service"
                                            name="Ser">
                                            <option selected>Open this select menu</option>
                                            <?php
                                            $query = mysqli_query($conn,"SELECT * FROM service");
                                            while($obj = $query->fetch_assoc()){
                                                echo '<option value="'.$obj["id"].'">'.$obj["nom"].'</option>';
                                            }
                                            
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-9 my-2">
                                        <label for="Date">Date d'application</label>
                                        <?php $today = date("Y-n-j");?>
                                        <input id="Date" class="form-control" type="datetime-local"
                                            value="<?php echo $today;?>" name="Date">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1">

                                    </div>

                                    <div class="col-md-9 my-2">

                                        <label for="Revision">Révision aprés
                                        </label>
                                        <select id="Revision" class="form-select" aria-label="Default select example"
                                            name="Revs">
                                            <option selected>Open this select menu</option>
                                            <?php
                                            $query = mysqli_query($conn,"SELECT * FROM annee_document");
                                            while($obj = $query->fetch_assoc()){
                                                echo '<option value="'.$obj["annee"].'">'.$obj["Ref"].'</option>';
                                            }
                                            
                                            ?>
                                        </select>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-1">

                                    </div>
                                    <div class="col-md-9 my-2">
                                        <label for="Processus"> Documents associés
                                        </label>


                                        <div class="cold-md-12">
                                            <select multiple placeholder="Native Select" data-search="true"
                                                data-silent-initial-value-set="true" id="example-select"
                                                name="doc_ass[]">
                                                <?php
													
													$req1="select * from document";
                                                    $res = mysqli_query($conn,$req1);
													$nbr = mysqli_num_rows($res);
													if($nbr!=0){
														
                                                        while  ($obj = $res->fetch_assoc()) 
                                                        {
													$nom=$obj['nom'];																																	
													$n=$obj['id'];																	
													echo '<option value="'.$n.'">'.utf8_encode($nom).'</option>';
																	
                                                                    
                                              } }
                                          ?>
                                            </select>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-1">

                                    </div>

                                    <input type="submit" value="validerr" class="btn btn-success mt-4 mb-3">

                                </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </main>


    <?php include_once('includes/footer.php');  ?>
</div>
</div>
<script>
flatpickr("input[type=datetime-local]", {})
</script>

<script src=" js/app.js">
</script>
<script src="js/ajax.js"></script>
<script>
VirtualSelect.init({
    ele: '#example-select',
    multiple: true,
    search: true,
    placeholder: 'Select options here',
    hideClearButton: true
});
</script>


</body>

</html>