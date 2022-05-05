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
                            <h2 class="h2">Modifier un Audit</h2>
                        </div>
                        <div class="card-body">
                            <form action="db/modAuditeur.php" method="post">

                                <div class="row">
                                    <div class="col-md-1">

                                    </div>
                                    <div class="col-md-9 my-4   ">

                                        <label for="Prenom">Nom : </label>
                                        <input type="hidden" value="<?php echo $_GET["id"]; ?>" name="id">
                                        <select name="name" class="form-control" id="Prenom" required>

                                            <?php
																	
											$req1="select * from utilisateur";
                                            $res = mysqli_query($conn,$req1);
											$nbr = mysqli_num_rows($res);
											if($nbr!=0){
												
                                                while  ($obj = $res->fetch_assoc()) 
                                                {
											$i=$obj['nom'];																	
											$prenom=$obj['prenom'];																	
											$n=$obj['id'];		
                                            if($n == $_GET["id"]){
                                                echo '<option value="'.$n.'" selected>'.utf8_encode($i).' '.utf8_encode($prenom).'</option>';
                                            }
                                            else{
                                                echo '<option value="'.$n.'" >'.utf8_encode($i).' '.utf8_encode($prenom).'</option>';
                                            }										
																	
                                                                    
                                          } }
                                          ?>
                                        </select>


                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1">

                                    </div>
                                    <div class="col-md-9 my-2">

                                        <label for="fonction">Fonction : </label>
                                        <select name="fonction" class="form-control" id="fonction" required>
                                            <?php 
                                            echo "<option value='1'";
                                            if($_GET["fonction"] == 1){
                                                echo " selected";
                                            }
                                             echo ">Responsable d'audit</option>
                                            <option value='2'";
                                            if($_GET["fonction"] == 2){
                                                echo " selected";
                                            }
                                            echo ">Auditeur</option>
                                            <option value='3'";
                                            if($_GET["fonction"] == 3){
                                                echo " selected";
                                            }
                                            echo ">Observateur</option>";
                                            ?>
                                        </select>

                                    </div>
                                </div>
                                <div class="col-md-2">

                                </div>
                                <div class="row">
                                    <div class="col-md-1">

                                    </div>
                                    <div class="col-md-9 my-2">

                                        <label> Qualification : </label>
                                        <?php 
                                        $str = $_GET["qlf"];
                                        $split = explode('||',$str);
                                        
                                        foreach ($split as &$value){
                                            $value = trim($value);
                                        }
                                       
                                        $result = mysqli_query($conn,"SELECT * FROM audit_type");
                                        while($obj = $result->fetch_assoc()){

                                            echo '<input class="check-input align-middle mx-3" name="chk[ ]" type="checkbox"
                                            value="'.$obj["type"].'"';
                                            if(in_array($obj["type"],$split)) echo "checked";
                                            echo '>'.$obj["type"];
                                        }
                                        ?>
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