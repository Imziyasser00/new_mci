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
                            <h2 class="h2">Ajouter un utilisateur</h2>
                        </div>
                        <div class="card-body">
                            <form action="db/add_user.php" method="post">
                                <div class="row">
                                    <div class="col-md-1">

                                    </div>
                                    <div class="col-md-4">
                                        <label for="Prenom">Prenom</label>
                                        <input class="form-control" type="text" id="Prenom" name="Prenom"
                                            placeholder="Prenom" required>
                                    </div>
                                    <div class="col-md-1">

                                    </div>
                                    <div class="col-md-4">
                                        <label for="nom">Nom</label>
                                        <input class="form-control" type="text" id="nom" name="nom" placeholder="Nom"
                                            required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1">

                                    </div>
                                    <div class="col-md-9 my-4   ">

                                        <label for="identifiant">Identifiant</label>
                                        <input class="form-control" type="text" id="identifiant" name="identifiant"
                                            placeholder="Identifiant" required>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1">

                                    </div>
                                    <div class="col-md-9 my-2">

                                        <label for="password">Password</label>
                                        <input class="form-control" type="password" id="password" name="password"
                                            placeholder="Password" required>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1">

                                    </div>
                                    <div class="col-md-9 my-2">

                                        <label for="fonction">Fonction</label>
                                        <input class="form-control" type="text" id="fonction" name="fonction"
                                            placeholder="Fonction" required>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1">

                                    </div>
                                    <div class="col-md-9 my-2">

                                        <label for="mail">Adresse Mail</label>
                                        <input class="form-control" type="email" id="mail" name="mail"
                                            placeholder="Email" required>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1">

                                    </div>
                                    <div class="col-md-9 my-2">

                                        <label for="Processus">Processus</label>
                                        <select name="ser" class="form-control" onchange="getDepartements(this.value);"
                                            required>

                                            <?php
																	
																	$req1="select * from service where id != 19 and id != 20 order by ref";
                                                                    $res = mysqli_query($conn,$req1);
																	$nbr = mysqli_num_rows($res);
																	if($nbr!=0){
																		
                                                                        while  ($obj = $res->fetch_assoc()) 
                                                                        {
																	$i=$obj['nom'];																	
																	$n=$obj['id'];																	
																	echo '<option value="'.$n.'">'.utf8_encode($i).'</option>';
																	
                                                                    
                                                                } }
                                          ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1">

                                    </div>
                                    <div class="col-md-9 my-2">
                                        <label for="Processus">Sous Processus</label>
                                        <select name="sser" id="blocDepartements" class="form-control">
                                        </select>
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