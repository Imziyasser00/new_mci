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
                                    <h2 class="h2">Les Types des documents</h2>
                                </div>
                                <div class="col-md-1">

                                </div>
                                <div class="col-md-4 mx-5">
                                    <div class="row d-flex justify-content-end">
                                        <div class="col-md-2 mx-4">
                                            <a href="addType.php" class="confirmation btn btn-primary">Ajouter</a>
                                        </div>
                                        <div class="col-md-2 ">
                                            <input id="des" type="submit" class="btn btn-danger" value="Desactiver">
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <form id="desactive_form" action="db/desactivate_type.php" method="post">
                            <div class="card-body">
                                <div class="form-group">
                                    <!--		Show Numbers Of Rows 		-->
                                    <select class="form-control" name="state" id="maxRows">
                                        <option value="5000">Show ALL Rows</option>
                                        <option value="5">5</option>
                                        <option value="10">10</option>
                                        <option value="15">15</option>
                                        <option value="20">20</option>
                                        <option value="50">50</option>
                                        <option value="70">70</option>
                                        <option value="100">100</option>
                                    </select>

                                </div>
                                <table class="table table-striped table-hover " id="table-id">
                                    <thead>
                                        <tr>
                                            <th style="width:15%">Id</th>
                                            <th style="width:25%;">Type</th>
                                            <th style="width:15%;">Action</th>
                                            <th style="width: 15%">Activer</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php   
                                    
                                    $query = ("SELECT * FROM type where valide = '0'");
                                    $result = mysqli_query($conn,$query);
                                    while($obj = $result->fetch_assoc()){
                                        echo '<tr>
                                        <td>'.$obj['id'].'</td>
                                        <td>'.$obj['type'].'</td>
                                        <td class="table-action">
                                            <a class="confirmation" href="modType.php?id='.$obj["id"].'"><i class="align-middle feather feather-trash align-middle" data-feather="edit-2"></i></a>
                                            <a class="confirmation" href="db/delType.php?id='.$obj["id"].'"><i class="align-middle" data-feather="trash-2"></i></a>
                                        </td>
                                        <td><input class="check-input align-middle mx-3" name="chk[ ]" type="checkbox" value="'.$obj["id"].'"></td>
                                    </tr>';
                                    }
                                             
                                    ?>

                                    </tbody>
                                </table>
                            </div>

                            <div class='col-md-12 js-center btn'>
                                <nav>
                                    <ul class="pagination">
                                        <li data-page="prev">
                                            <span>
                                                < <span class="sr-only">(current)
                                            </span></span>
                                        </li>

                                        <li data-page="next" id="prev">
                                            <span> > <span class="sr-only active">(current)</span></span>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                    </div>
                </div>
            </div>

        </div>
    </main>


    <?php include_once('includes/footer.php');  ?>
</div>
</div>
<script src="js/desactive_type.js"></script>
<script src="js/app.js"></script>


</body>

</html>