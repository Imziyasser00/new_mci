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
                                            <option value="En cours d'application">En cours d'application</option>
                                            <option value="En cours de revision">En cours de revision</option>
                                            <option value="Reconduit">Reconduit</option>
                                            <option value="Perime">Perime</option>
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
                                                echo '<option value="'.$obj["nom"].'">'.$obj["nom"].'</option>';
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

                                        <label for="Docass">Documents associés
                                        </label>
                                        <select class="form-select" aria-label="Default select example" id="Docass"
                                            name="DocAss">
                                            <option value="0">Aucun document associé</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="13">13</option>
                                            <option value="14">14</option>
                                            <option value="15">15</option>
                                            <option value="16">16</option>
                                            <option value="17">17</option>
                                            <option value="18">18</option>
                                            <option value="19">19</option>
                                            <option value="20">20</option>
                                            <option value="21">21</option>
                                            <option value="22">22</option>
                                            <option value="23">23</option>
                                            <option value="24">24</option>
                                            <option value="25">25</option>
                                            <option value="26">26</option>
                                            <option value="27">27</option>
                                            <option value="28">28</option>
                                            <option value="29">29</option>
                                            <option value="30">30</option>
                                            <option value="31">31</option>
                                            <option value="32">32</option>
                                            <option value="33">33</option>
                                            <option value="34">34</option>
                                            <option value="35">35</option>
                                            <option value="36">36</option>
                                            <option value="37">37</option>
                                            <option value="38">38</option>
                                            <option value="39">39</option>
                                        </select>
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


</body>

</html>