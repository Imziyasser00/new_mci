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
                            <h2 class="h2">Ajouter un audit</h2>
                        </div>
                        <div class="card-body">
                            <form action="db/add_user.php" method="post">

                                <div class="row">
                                    <div class="col-md-1">

                                    </div>
                                    <div class="col-md-9 my-4   ">

                                        <label for="identifiant">Numero</label>
                                        <input class="form-control" type="text" id="identifiant" name="num"
                                            placeholder="Identifiant" required>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1">

                                    </div>

                                </div>


                                <div class="row">
                                    <div class="col-md-1">

                                    </div>
                                    <div class="col-md-9 my-2" id="">

                                        <label for="Processus">Processus</label>
                                        <select name="ser" class="form-control" onchange="getDepartements(this.value);"
                                            required>

                                            <?php
																	
												$req1="select * from service where id != 19 and id != 20 order by ref";
                                                $res = mysqli_query($conn,$req1);
												
												
													
                                                    while  ($obj = $res->fetch_assoc()) 
                                                    {
												$i=$obj['nom'];																	
												$n=$obj['id'];																	
												echo '<option value="'.$n.'">'.utf8_encode($i).'</option>';
												
                                                
                                            } 
                                          ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1">

                                    </div>
                                    <div class="col-md-9 my-2">
                                        <label for="sser">Sous Processus</label>
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


<script>
var requete = null;

function creerRequete() {
    try {
        requete = new XMLHttpRequest();
    } catch (microsoft) {
        try {
            requete = new ActiveXObject('Msxml2.XMLHTTP');
        } catch (autremicrosoft) {
            try {
                requete = new ActiveXObject('Microsoft.XMLHTTP');
            } catch (echec) {
                requete = null;
            }
        }
    }
    if (requete == null) {
        alert(
            'Impossible de cr�er l\'objet requ�te,\nVotre navigateur ne semble pas supporter les object XMLHttpRequest.'
        );
    }
}

function actualiserDepartements() {
    var listeDept = requete.responseText;
    var blocListe = document.getElementById('blocDepartements');
    blocListe.innerHTML = listeDept;
}


function getDepartements(idr) {
    if (idr == 'vide') {
        document.getElementById('blocDepartements').innerHTML = '';
    } else {
        var blocListe = document.getElementById('blocDepartements');
        blocListe.innerHTML = "Traitement en cours, veuillez patienter...";
        creerRequete();
        var url = 'sservice.php?idr=' + idr;
        requete.open('GET', url, true);
        requete.onreadystatechange = function() {
            if (requete.readyState == 4) {
                if (requete.status == 200) {
                    actualiserDepartements();
                }
            }
        };
        requete.send(null);
    }
}
</script>


</body>

</html>