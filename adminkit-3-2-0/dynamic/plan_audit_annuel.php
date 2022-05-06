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
                                    <h2 class="h2">Liste des Documents</h2>
                                </div>
                                <div class="col-md-3">

                                </div>
                                <div class="col-md-2 mt-2 mx-4 ">
                                    <div class="row">
                                        <?php 
                                    $query = mysqli_query($conn,"SELECT * FROM plandaudit where annee = ".$_GET["annee"]);
                                    $res = $query->fetch_assoc();
                                    if($res["cop"] == '0'){
                                        
                                        echo '<a id="des" href="db/plan_confirmed.php?annee='.$_GET["annee"].'"
                                        class="btn btn-success" >Confirmer le Plan d Audit</a>';
                                    }else{
                                        echo '<a id="activ" href="db/plan_desconfirmed.php?annee='.$_GET["annee"].'" class="btn btn-danger">Annuler la confirmation </a><button class="btn btn-success my-2" disabled="">Plan confirmé</button>';
                                    }
                                    ?>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <form id="desactive_form" action="db/desactiverDoc.php" method="post">
                            <div class="card-body">
                                <table class="table table-striped table-hover ">
                                    <thead>
                                        <tr>
                                            <th style="width:10%;">N°</th>
                                            <th style="width:25%">Sous Processus</th>
                                            <th style="width:15%">Date</th>
                                            <th style="width:20%">Auditeurs</th>
                                            <th style="width:15%">Durée</th>
                                            <th style="width:15%">Date effective</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php   
                                    
                                    $query = ("SELECT * FROM auditprevu where ann = ".$_GET["annee"]);
                                    $result = mysqli_query($conn,$query);
                                    while($obj = $result->fetch_assoc()){
                                        
                                        $num = $obj["numero"];

                                        $duree = $obj["duree"];
                                        
                                        $ddatep = $obj["ddatep"];
                                        
                                        $fdatep = $obj["fdatep"];

                                        $întervale = "<b> FROM : </b> ".$ddatep."<br><b> TO : </b> ".$fdatep;

                                        $id_sser = $obj["id_sservice"];
                                        
                                        $sql = mysqli_query($conn,"select nom from sservice where id=$id_sser");
                                        $sservice = $sql->fetch_assoc();
                                        $ssnom=utf8_encode($sservice['nom']);
                                        
                                        $auditeur = mysqli_query($conn,'select * from auditeurprevu where auditeurprevu.numero_audit="'.$num.'" order by fonction ASC');
                                        $a = array();
                                        while($auditeurs = $auditeur->fetch_assoc()){
                                            array_push($a,$auditeurs["id_auditeur"]);
                                        }

                                        $arr = array();

                                        
                                        foreach($a as $aud){
                                            
                                            $sql = mysqli_query($conn,"SELECT * FROM auditeur where id = ".$aud);
                                            $data = $sql->fetch_assoc();
                                            $name = $data["nom"]." ".$data["prenom"];
                                            array_push($arr,$name);
                                        }
                                        $list = "<b> RP : <b>" .$arr[0] . "<br><b> A : <b>".$arr[1].'<br><b> O : <b>'.$arr[2];
                                        
                                        
                                        echo '<tr>
                                        <td>'.$num.'</td>
                                        <td>'.$ssnom.'</td>
                                        <td>'.$întervale.'</td>';
                                        echo '<td>'.$list.'</td>
                                        <td>'.$duree.'</td>
                                        <td>'.$fdatep.'</td>
                                        ';      
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
<script src="js/desactive_file.js"></script>
<script src="js/app.js"></script>

</body>

</html>