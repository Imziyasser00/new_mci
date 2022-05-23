<?php 
include_once("includes/header.php");
?>


<div class="main">
    <?php include_once 'includes/up_bar.php'; ?>

    <main class="content">
        <div class="container-fluid p-0">

            <h1 class="h3 mb-3">Modifier mot de passe</h1>

            <div class="row">
                <div class="col-6">
                    <div class="card">
                        <div class="col-md-1">

                        </div>
                        <form action="./db/change_password.php" method="POST" id="form">
                            <div class="col-md-12">
                                <?php 
                                if(isset($_SESSION["pwd_done"])){
                                    echo '<div class="alert alert-success alert-dismissible mt-4 " role="alert">
                                    <div class="row">
                                    <div class="alert-icon">
                                        
                                    </div>
                                    <div class="alert-message">
                                        <strong>Hello there!</strong> Mot de passe est changé
                                    </div>
                                    </div>
                                </div>';
                                }
                                ?>
                                <div class="card-body">
                                    <label for="pwd1">Mot de passe : </label>
                                    <input class="form-control" type="password" id="pwd1" name="pwd1"
                                        placeholder="Mot de passe" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="card-body">
                                    <label for="pwd1">confirme mot de passe : </label>
                                    <input class="form-control" type="password" id="pwd2" name="pwd2"
                                        placeholder="confirme mot de passe" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <input type="submit" value="valider" class="btn btn-success col-md-12 mb-4 mt-4 mb-1">
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

<script src="js/app.js"></script>
<script>
$(document).ready(function() {

    //option A
    $("#form").submit(function(e) {
        var pwd1 = $('#pwd1').val();
        var pwd2 = $('#pwd2').val();
        if (pwd1 != pwd2) {
            alert("mot de passe incorrect");
            e.preventDefault();
        } else {
            e.submit();
        }
    });
});
</script>

</body>

</html>