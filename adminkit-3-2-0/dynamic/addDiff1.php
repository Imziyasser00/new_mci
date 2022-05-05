<?php 
include_once("includes/header.php");

?>



<div class="main">
    <?php include_once 'includes/up_bar.php'; ?>

    <main class="content">
        <div class="container-fluid p-0">

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-6 mt-2">
                                    <h2 class="h2">Liste des Services</h2>
                                </div>
                                <div class="col-md-3">

                                </div>
                                <div class="col-md-2 mx-2">
                                    <div class="row d-flex justify-content-end">
                                        <div class="col-md-2 mx-2">
                                            <input id="activeSubmit" type="submit" class="mt-3 btn btn-success"
                                                value="Ajouter">
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="row">

                                <div class="col-md-3 mt-4">
                                    <input class="form-control" type="text" name="search" placeholder="Search" required
                                        id="myInput">

                                </div>
                            </div>

                        </div>
                        <form id="active_form" action="db/diff_doc.php" method="post">
                            <div class="card-body">
                                <input type="hidden" value="<?php echo $_GET["id"]; ?>" name="id_doc">
                                <input type="hidden" value="<?php echo $_GET["type"]; ?>" name="type">
                                <table class="table table-striped table-hover " id="myTable">
                                    <thead>
                                        <tr>
                                            <th style="width:25%;">Service</th>
                                            <th style="width:25%">Sous-Service</th>
                                            <th style="width: 15%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php   
                                    error_reporting(E_ALL);
                                    ini_set('display_errors', 0);
                                    $query = ("SELECT * FROM sservice");
                                    $result = mysqli_query($conn,$query);
                                    while($obj = $result->fetch_assoc()){
                                        $sql = mysqli_query($conn,"SELECT * FROM service WHERE id = ".$obj["id_service"]);
                                        $service = $sql->fetch_assoc();                                      
                                        $name = $service["nom"];
                                        echo '<tr>
                                        <td>'.$name.'</td>
                                        <td>'.$obj['nom'].'</td>';
                                        echo '<td><input class="check-input align-middle mx-3" name="chk[ ]" type="checkbox" value="'.$obj["id"].'"></td>
                                        </tr>';
                                    }
                                    ?>

                                    </tbody>
                                </table>
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
$(document).ready(function() {
    $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable tbody tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});
</script>
<script src="js/addDiff.js"></script>
<script src="js/app.js"></script>

</body>

</html>