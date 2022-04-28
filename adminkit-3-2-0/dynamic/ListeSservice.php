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
                                    <h2 class="h2">Liste des Sous-Services</h2>
                                </div>
                                <div class="col-md-5">

                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="ListeSservice1.php" method="post">
                                <select name="ser" class="form-control mb-5" onchange="getDepartements(this.value);"
                                     required>

                                    <?php
										
										$req1="select * from service where id != 19 and id != 20 order by ref";
                                        $res = mysqli_query($conn,$req1);
										$nbr = mysqli_num_rows($res);
										if($nbr!=0){
                                         while  ($obj = $res->fetch_assoc()) {
										$i=$obj['nom'];																	
										$n=$obj['id'];																	
										echo '<option value="'.$n.'">'.utf8_encode($i).'</option>';
                                            } 
                                        }
                                          ?>
                                </select>
                                <div>
                                    <input class="col-md-12 btn btn-success mb-2" type="submit" value="valider">
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

<script src="js/app.js"></script>

</body>

</html>