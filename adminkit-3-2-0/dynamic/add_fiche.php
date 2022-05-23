<?php 
include_once("includes/header.php");
?>
<script type="text/javascript" src="./js/html2canvas.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js"
    integrity="sha384-NaWTHo/8YCBYJ59830LTz/P4aQZK1sS0SneOgAvhsIl3zBu8r9RevNg5lHCHAuQ/" crossorigin="anonymous">
</script>

<style>
.grid-container {
    display: grid;
    grid-template-columns: auto auto auto auto;

    padding: 10px;
}

.grid-container>div {
    border: 1px solid gray;
    background-color: rgba(255, 255, 255, 0.8);
    padding: 20px 0;
    font-size: 20px;
    font-weight: 500;
}

.center {
    text-align: center;
}

.left {
    text-align: left;
}

.item1 {
    grid-row: 1 / 3;
}

.item3 {
    display: flex;
    align-items: center;
    justify-content: center;
    grid-area: 1 / 4 / 4 / 5;

}

.item2 {
    grid-column: 2 / span 2;
}

.item4 {
    grid-column: 2 / span 2;
}

.item6 {
    grid-column: 2 / span 2;
}

.item11 {
    grid-column: 1 / span 2;
    text-align: left;
}


.item12 {
    grid-column: 3 / span 2;
    ;
}

.item13 {
    grid-column: 1 / span 4;
}

.item14 {
    grid-column: 1 /span 2;
}

.item15 {
    grid-column: 3 / span 2;
}

.item16 {
    grid-column: 1 /span 2;
}

.item17 {
    grid-column: 3 / span 2;
}

.item18 {
    grid-column: 1 / span 4;
}
</style>


<div class="main">
    <?php include_once 'includes/up_bar.php'; ?>

    <main class="content">
        <div class="container-fluid p-0">

            <?php 
        $num = $_GET["num"];
        ?>

            <h1 class="h3 mb-3"><i class="align-middle" data-feather="file-text"></i> Fiche n°
                <?php echo $_GET["num"]; ?></h1>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <button class="btn btn-danger" style="padding: 8px 35px;" onclick="saveDoc()">PDF</button>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-2">
                                </div>
                                <div class="col-md-8">
                                    <div class="grid-container" id="content">
                                        <div class="item1 center"><img src="./img/Mci_logo.png" alt="mci logo"
                                                width="130px">
                                        </div>
                                        <div class="item2 center">FORMULAIRE</div>
                                        <div class="item3 center">
                                            <p style="font-style:italic;">Management QSE</p>
                                        </div>
                                        <div class="item4 center">FICHE D’AUDIT INTERNE</div>
                                        <div class="item5 center">Référence</div>
                                        <div class="item6 center">FOR-QSE 032 b</div>
                                        <div class="item7 center">Page/pages</div>
                                        <div class="item8 center">01/01</div>
                                        <div class="item9 center">Date d'application</div>
                                        <div class="item10 center">26/02/2013</div>
                                        <div class="item11 left" style="padding-left: 10px;">Date de l'audit :
                                            <?php 
                                            $connexion = new PDO('mysql:host=localhost;dbname=mci', 'root', '');
                                            $selectall=$connexion->prepare("select date  , idr from fichdaudit where audit_num like ?");
		                                    $selectall->execute(array($num));
		                                    $objt = $selectall->Fetch(PDO::FETCH_ASSOC);
		                                    echo $date = $objt['date'];

                                            
                                            $idr = $objt["idr"];
                                            ?></div>
                                        <div class="item12 left" style="padding-left: 10px;">Responsable d'audit :
                                            <?php 
                                            $result = mysqli_query($conn,"select id_auditeur from auditeurprevu where numero_audit='$num' and fonction='1'");
                                            $obj = $result->fetch_assoc();
                                            $r1=$obj['id_auditeur'];
                                            $sql = mysqli_query($conn,"select nom , prenom from auditeur where id=$r1");
                                            $object = $sql->fetch_assoc();
                                            $full_name = $object["nom"]." ".$object["prenom"];
                                            echo $full_name;
                                            ?></div>
                                        <div class="item13" style="padding-left: 10px;"> Champ de l’activité auditée :
                                            <?php 
                                            $result = mysqli_query($conn,"select id_sservice from auditprevu where numero='$num'");
                                            $obj = $result->fetch_assoc();
                                            $r2 = $obj['id_sservice'];
                                            $sql = mysqli_query($conn,"select nom from sservice where id=$r2");
                                            $object = $sql->fetch_assoc();
                                            $sserv_name = $object["nom"];
                                            echo $sserv_name;
                                            ?></div>
                                        <div class="item13" style="padding-left: 10px;"> Objectifs de l’audit :
                                            <?php 
                                            $result = mysqli_query($conn,"select objectif from objectifaudit where num_audit='$num'");
                                            while($obj = $result->fetch_assoc()){
                                                $objectif = $obj["objectif"];
                                            }
                                            echo $objectif;
                                            ?></div>
                                        <div class="item13" style="padding-left: 10px;"> Identification des documents de
                                            référence :
                                            <?php
                                             echo $idr; 
                                             ?></div>
                                        <div class="item14" style="padding: 20px;"> Auditeurs : <br>
                                            <?php 
                                            $result = mysqli_query($conn,"select id,id_auditeur, fonction,numero_audit  
                                            from auditeurprevu where auditeurprevu.numero_audit='".$num."' 
                                            and fonction != 1 order by id");
                                            $list2='';
                                            while($auditeurs1 = $result->fetch_assoc()){
                                                $id=$auditeurs1['id'];
							                    $auditeurs['fonction']=$auditeurs1['fonction'];
							                    $auditeurs['id_auditeur']=$auditeurs1['id_auditeur'];
							                    $r1=$auditeurs['id_auditeur'];
                                                $sql = mysqli_query($conn,"select nom,prenom from auditeur where auditeur.id=$r1");
                                                $auditeurselect = $sql->fetch_assoc();
                                                $auditeurs['nom']=$auditeurselect['nom'];
												$auditeurs['prenom']=$auditeurselect['prenom'];
												$auditeurs['complet']=$auditeurs['nom'].'.'.$auditeurselect['prenom'];
												$list2.='<br>&nbsp;'.$auditeurs['complet'];
                                            }
                                            echo $list2;
                                            ?>
                                            <br>
                                            Visa : <br>
                                        </div>
                                        <div class="item15" style="padding: 20px;"> Audités :
                                            <?php 
                                            $selectall=$connexion->prepare("select id, id_utilisateur ,num_audit  from auditee where num_audit like ? order by id");
		                                    $selectall->execute(array($num));
		                                    
                                            
                                            $list3='';
                                            while($auditees1 = $selectall->Fetch(PDO::FETCH_ASSOC)){
                                                $auditees['id_utilisateur']=$auditees1['id_utilisateur'];
                                                $r3=$auditees['id_utilisateur'];  
                                                  
                                                $sql = mysqli_query($conn,"select nom,prenom from utilisateur where id=$r3");
                                                $auditeeselect = $sql->fetch_assoc();
                                                $audites['nom']=$auditeeselect['nom'];
												$audites['prenom']=$auditeeselect['prenom'];
												$audites['complet']=$audites['nom'].' '.$auditeeselect['prenom'];
												$list3.='<br>&nbsp;'.$audites['complet'];
                                            }
                                            echo $list3;
                                            ?>
                                            <br>

                                            Responsable : <br>

                                            Visa : <br>
                                        </div>
                                        <div class="item16" style="padding: 20px;"> Réunion d’ouverture :
                                            <br>
                                            <?php
				                                $selectouverture=mysqli_query($conn,"select date , time from reunionouverture where numero='$num'");
				                                $ouverture = $selectouverture->fetch_assoc();
				                                $dateo=$ouverture['date'];
				                                $time=$ouverture['time'];
				                            ?>


                                            Date : <?php echo $dateo ?>
                                            <br>
                                            Heure : <?php echo $time ?>

                                            <br>
                                        </div>
                                        <div class="item17" style="padding: 20px;"> Présence souhaitée de :
                                            <?php 
                                            $result = mysqli_query($conn,"select id, id_utilisateur ,num_audit  from presenceouverture where presenceouverture.num_audit='".$num."' order by id");
                                            $list5='';
                                            while($souhaites = $result->fetch_assoc()){
                                                $souhaite['id_utilisateur']=$souhaites['id_utilisateur'];
								                 $r6=$souhaite['id_utilisateur'];								
								        	    $Selectsouhaite=mysqli_query($conn,"select nom , prenom from utilisateur where utilisateur.id=$r6");
								        		$souhaitess = $Selectsouhaite->fetch_assoc();
								        		$souhaitessss['nom']=$souhaitess['nom'];
								        		$souhaitessss['prenom']=$souhaitess['prenom'];
								        		$souhaitessss['complet']=$souhaitess['nom'].' '.$souhaitess['prenom'];
								        		$list5.='<br>&nbsp;'.$souhaitessss['complet'].'  ';
                                            }
                                            echo $list5;
                                            ?>


                                            <br>
                                        </div>
                                        <div class="item16" style="padding: 20px;"> Réunion de clôture :
                                            <br>
                                            <?php
				                                $selectcloture=mysqli_query($conn,"select date , time from reunioncloture where numero='$num'");
				                                $cloture = $selectcloture->fetch_assoc();
				                                $dateclo=$cloture['date'];
				                                $timeclo=$cloture['time'];
				                            ?>


                                            Date : <?php echo $dateclo ?>
                                            <br>
                                            Heure : <?php echo $timeclo ?>

                                            <br>
                                        </div>
                                        <div class="item17" style="padding: 20px;"> Présence souhaitée de :
                                            <?php 
                                            $result = mysqli_query($conn,"select id, id_utilisateur ,num_audit  from presencecloture where presencecloture.num_audit='".$num."' order by id");
                                            $list4='';
                                            while($souhaites = $result->fetch_assoc()){
                                                $souhaite['id_utilisateur']=$souhaites['id_utilisateur'];
								                 $r6=$souhaite['id_utilisateur'];								
								        	    $Selectsouhaite=mysqli_query($conn,"select nom , prenom from utilisateur where utilisateur.id=$r6");
								        		$souhaitess = $Selectsouhaite->fetch_assoc();
								        		$souhaitessss['nom']=$souhaitess['nom'];
								        		$souhaitessss['prenom']=$souhaitess['prenom'];
								        		$souhaitessss['complet']=$souhaitess['nom'].' '.$souhaitess['prenom'];
								        		$list4.='<br>&nbsp;'.$souhaitessss['complet'].'  ';
                                            }
                                            echo $list4;
                                            ?>


                                            <br>
                                        </div>
                                        <div class="item18" style="padding: 20px;">
                                            Conclusions de l'auditeur vis à vis de l'activité auditée :
                                            <br>
                                            <br>

                                            Les activités et résultats audités satisfont aux dispositions préétablies ?
                                            <br>
                                            <br>

                                            .

                                            <br>
                                            <br>
                                            Ces dispositions sont mises en œuvre de façon efficace et aptes à atteindre
                                            les objectifs?
                                            <br>
                                            <br>

                                            .
                                            <br>
                                            <br>
                                        </div>

                                    </div>

                                </div>

                            </div>
                            <div id="editors"></div>



                        </div>
                        <div class="col-md-2">
                        </div>
                    </div>



                    <script type="text/javascript">
                    var pdf = new jsPDF('p', 'px', [1720, 1357]);

                    function saveDoc() {
                        window.html2canvas = html2canvas
                        const doc = document.getElementById("content");

                        if (doc) {
                            console.log("div is ");
                            console.log(doc);
                            console.log("hellowww");



                            pdf.html(document.getElementById('content'), {
                                callback: function(pdf) {
                                    pdf.save('DOC.pdf');
                                }
                            })
                        }
                    }
                    </script>

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

<script src="js/pdf.js"></script>
</body>

</html>