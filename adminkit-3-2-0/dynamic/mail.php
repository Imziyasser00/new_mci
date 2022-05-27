<?php 
include_once("includes/header.php");
?>


<div class="main">
    <?php include_once 'includes/up_bar.php'; ?>

    <main class="content">
        <div class="container-fluid p-0">

            <h1 class="h3 mb-3">Send mail</h1>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">@ E-mail</h5>
                        </div>
                        <?php
                        if(isset($_SESSION["mail_sent"]))
                        {
                            echo '
                            <div class="alert alert-success alert-dismissible" role="alert" style="margin : 2px 10px; padding-top :20px;padding-bottom : 20px;">
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" style="position : absolute; right : 0; padding-right : 30px;"></button>
                            <div class="alert-message">
                                <strong>Hello there!</strong> A simple success alert—check it out!
                            </div>
                        </div>
                        ';
                        }
                        ?>
                        <div class="card-body">
                            <form action="./db/mail.php" method="post">
                                <div class="row">
                                    <label for="Processus"> To :
                                    </label>

                                    <div class="cold-md-4">
                                        <select multiple placeholder="Native Select" data-search="true"
                                            data-silent-initial-value-set="true" id="example-select" name="mails[]">
                                            <?php
													
													$req1="select * from utilisateur order by nom";
                                                    $res = mysqli_query($conn,$req1);
													$nbr = mysqli_num_rows($res);
													if($nbr!=0){
														
                                                        while  ($obj = $res->fetch_assoc()) 
                                                        {
													$nom=$obj['nom'];																	
													$prenom=$obj['prenom'];																	
													$n=$obj['mail'];																	
													echo '<option value="'.$n.'">'.utf8_encode($nom." ".$prenom).'</option>';
																	
                                                                    
                                              } }
                                          ?>
                                        </select>
                                    </div>

                                    <div class="col-md-3 my-4">
                                        <label for="Prenom">Subject : </label>
                                        <input class="form-control" type="text" id="Subject" name="subject"
                                            placeholder="Subject" required>
                                    </div>

                                </div>
                                <div class="col-md-8">
                                    <label for="Message"> Message</label>
                                    <div>
                                        <textarea class="form-control" rows="2" placeholder="Message" name="message"
                                            style="height: 284px;"></textarea>
                                    </div>
                                </div>



                                <div class="row">

                                    <div class="row col-md-12">

                                        <input type="submit" value="Valider" name="send"
                                            class="btn btn-success mt-5 mb-3 col-md-12">
                                        <div class="col-md-1"></div>
                                    </div>


                                </div>
                            </form>
                        </div>
                        <div class="col-md-9 my-1">
                        </div>
                        <?php 
                        if(isset($_SESSION["mail_sent"]))
                        {
                            unset($_SESSION["mail_sent"]);
                        }
                        ?>
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
VirtualSelect.init({
    ele: '#example-select',
    multiple: true,
    search: true,
    placeholder: 'Select options here',
    hideClearButton: true

});
</script>

</body>


</html>