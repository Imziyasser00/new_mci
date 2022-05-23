<?php 
include_once("includes/header.php");
?>


<div class="main">
    <?php include_once 'includes/up_bar.php';
    error_reporting(0); ?>

    <main class="content">
        <div class="container-fluid p-0">

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-6 mt-2">
                                    <h2 class="h2">Liste des Audits</h2>
                                </div>
                                <div class="col-md-5">

                                </div>

                                <div class="col-md-1 mt-2">
                                    <a href="annee_selector.php" class="btn btn-primary">Ajouter</a>
                                </div>
                            </div>
                        </div>
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
                                        <th style="width:10%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php   
                                    
                                    $query = ("SELECT * FROM auditprevu");
                                    $result = mysqli_query($conn,$query);
                                    while($obj = $result->fetch_assoc()){
                                        
                                        $num = $obj["numero"];

                                        $duree = $obj["duree"];
                                        
                                        $ddatep = $obj["ddatep"];
                                        $annee = $obj["ann"];
                                        
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
                                        $list = "<b> RP : <b>" .$arr[0] . "<br><b> A : <b>".$arr[1].'<br>';

                                         array_shift($arr);
                                         array_shift($arr);
                                        foreach($arr as $el){
                                            $list.='<b> O : <b>'.$el.'<br>';
                                        }
                                        
                                        
                                        echo '<tr>
                                        <td>'.$num.'</td>
                                        <td>'.$ssnom.'</td>
                                        <td>'.$întervale.'</td>';
                                        echo '<td>'.$list.'</td>
                                        <td>'.$duree.'</td>
                                        <td>'.$fdatep.'</td>
                                        <td class="table-action">
                                            <a href="modAudit.php?id='.$num.'&annee='.$annee.'&ra='.$a[0].'&au='.$a[1].'&ob='.$a[2].'" class="confirmation"><i class="align-middle feather feather-trash align-middle" data-feather="edit-2"></i></a>
                                            <a href="db/deleteAudit.php?id='.$num.'" class="confirmation"><i class="align-middle" data-feather="trash-2"></i></a>
                                        </td>
                                        ';      
                                    }
                                    ?>

                                </tbody>
                            </table>
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