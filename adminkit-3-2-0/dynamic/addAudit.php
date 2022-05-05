<?php 
include_once("includes/header.php");
?>



<div class="main">
    <?php include_once 'includes/up_bar.php'; 
   ?>

    <main class="content">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="h2">Ajouter un audit</h2>
                        </div>
                        <div class="card-body">
                            <form action="db/add_audit.php" method="post" id="myform">

                                <div class="row">
                                    <div class="col-md-1">

                                    </div>
                                    <div class="col-md-9 my-4   ">

                                        <label for="identifiant">Numero</label>
                                        <input class="form-control" type="text" name="num" placeholder="Numero" id="num"
                                            required>

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
                                    <div class="col-md-9 my-2" id="">

                                        <label for="Processus">Responsable d'audit
                                        </label>
                                        <select name="Responsable d'audit" id="Responsable_audit" class="form-control"
                                            required>

                                            <?php
																	
												$req1="select * from auditeur";
                                                $res = mysqli_query($conn,$req1);
												
												
													
                                                    while  ($obj = $res->fetch_assoc()) 
                                                    {
												$i=$obj['nom'];																	
												$j=$obj['prenom'];																	
												$n=$obj['id'];																	
												echo '<option value="'.$n.'">'.utf8_encode($i).' '.utf8_encode($j).'</option>';
												
                                                
                                            } 
                                          ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-1">

                                    </div>
                                    <div class="col-md-9 my-2" id="">

                                        <label for="Processus">Auditeur

                                        </label>
                                        <select name="Auditeur" id="Auditeur" class="form-control" required>

                                            <?php
																	
												$req1="select * from auditeur";
                                                $res = mysqli_query($conn,$req1);
												
												
													
                                                    while  ($obj = $res->fetch_assoc()) 
                                                    {
												$i=$obj['nom'];																	
												$j=$obj['prenom'];																	
												$n=$obj['id'];																	
												echo '<option value="'.$n.'">'.utf8_encode($i).' '.utf8_encode($j).'</option>';
												
                                                
                                            } 
                                          ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1">

                                    </div>
                                    <div class="col-md-9 my-2" id="">

                                        <label for="Processus">Observateur

                                        </label>
                                        <select name="observateur" id="observateur" class="form-control" required>

                                            <?php
																	
												$req1="select * from auditeur";
                                                $res = mysqli_query($conn,$req1);
												
												
													
                                                    while  ($obj = $res->fetch_assoc()) 
                                                    {
												$i=$obj['nom'];																	
												$j=$obj['prenom'];																	
												$n=$obj['id'];																	
												echo '<option value="'.$n.'">'.utf8_encode($i).' '.utf8_encode($j).'</option>';
												
                                                
                                            } 
                                          ?>
                                        </select>

                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-4">

                                    </div>
                                    Choisir un interval de temps .
                                </div>

                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-4 my-2">
                                        <label for="Date">Date d'application</label>
                                        <?php $today = date("Y-n-j");?>
                                        <input id="Date" class="form-control" type="datetime-local"
                                            value="<?php echo $today;?>" name="Date">
                                    </div>
                                    <div class="col-md-1">

                                    </div>
                                    <div class="col-md-4 my-2">
                                        <label for="Date">Date d'application</label>
                                        <?php $today = date("Y-n-j");?>
                                        <input id="Date" class="form-control" type="datetime-local"
                                            value="<?php echo $today;?>" name="Date">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1">

                                    </div>
                                    <div class="col-md-5 my-4">
                                        <label for="duration">Dureation : </label>
                                        <input type="hidden" name="example4"
                                            style="width: 20px; padding : 20px; height:20px;" />

                                    </div>

                                </div>


                                <div class="row">
                                    <div class="col-md-1">

                                    </div>

                                    <input type="button" onclick="event.preventDefault(); myValidation();"
                                        value="valider" class="btn btn-success mt-4 mb-3">

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


    <?php include_once('./includes/footer.php');  ?>
</div>
</div>

<script src="js/app.js">
</script>
<script>
flatpickr("input[type=datetime-local]", {})
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="js/jquery.durationpicker.js"></script>
<script>
$(document).ready(function() {

    $('input[name=example4]').durationpicker({
            showDays: false
        })
        .on("change", function() {
            $('#btn-example4').text("Duration (secs): " + $(this).val());
        });

});
</script>

<script>
function myValidation() {
    var observateur = $('#observateur').val();
    console.log(observateur);
    var Respo = $('#Responsable_audit').val();
    console.log(Respo);
    var Aud = $('#Auditeur').val();
    console.log(Aud);
    if ((observateur == Respo) || (observateur == Aud) || (Aud == Respo)) {
        alert("Un auditeur ne peut pas faire deux  fonctions dans le meme audit");
    }
    var xhr = new XMLHttpRequest();

    form = $("#myform");

    xhr.open("POST", "./db/audit_number_json.php");

    xhr.onload = function() {

        var jsvar = this.response;

        jsvar = JSON.parse(jsvar);
        console.log(jsvar[0].type);

        var d = 0;


        var type = $("#num").val();
        if (type[0] == '0') {
            type = type.substr(1);
        }

        console.log(type)
        if (!confirm("Are you sure ?")) {
            return false;
        } else {
            for (i = 0; i < jsvar.length; i++) {
                if (jsvar[i].numero_audit[0] == '0') {
                    jsvar[i].numero_audit = jsvar[i].numero_audit.substr(1);
                }
            }
            console.log(jsvar);
            for (i = 0; i < jsvar.length; i++) {

                if (jsvar[i].numero_audit == type) {
                    d = 1;
                    alert("Erreur! Le plan est déja validé impossible de le modifier.");
                    return false;
                }
            }
            if (d == 0) {
                form.submit();
            }

        }


    }
    xhr.send();
    return false;
















}
</script>

</body>

</html>