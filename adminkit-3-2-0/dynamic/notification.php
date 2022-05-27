<?php 
include_once("includes/header.php");
?>


<div class="main">
    <?php include_once 'includes/up_bar.php'; ?>

    <main class="content">
        <div class="container-fluid p-0">

            <h1 class="h3 mb-3">Notification</h1>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <form action="./db/create_notif.php" method="post">

                                <h5 class="card-title mb-0">Services</h5>
                                <div class="cold-md-4 my-2">
                                    <select multiple placeholder="Native Select" data-search="true"
                                        data-silent-initial-value-set="true" id="example-select" name="services[]">
                                        <?php
													
													$req1="select * from service order by nom";
                                                    $res = mysqli_query($conn,$req1);
													$nbr = mysqli_num_rows($res);
													if($nbr!=0){
														
                                                        while  ($obj = $res->fetch_assoc()) 
                                                        {
													$nom=$obj['nom'];																	
																													
													$n=$obj['id'];																	
													echo '<option value="'.$n.'">'.utf8_encode($nom).'</option>';
                                                    
                                                    
                                              } }
                                          ?>
                                    </select>
                                </div>

                                <h5 class="card-title mt-3">Message</h5>
                                <div class="cold-md-4 my-2">
                                    <textarea class="form-control" rows="2" placeholder="Message" name="message"
                                        style="height: 284px;"></textarea>
                                </div>
                                <h5 class="card-title mt-3">Type</h5>
                                <div class="cold-md-4 my-2">
                                    <select class="form-control mb-3" name="type">
                                        <option selected="">Open this select menu</option>
                                        <option value="1">Warning</option>
                                        <option value="2">Danger</option>
                                        <option value="3">Primary</option>
                                        <option value="4">Success</option>
                                    </select>
                                </div>
                                <div>

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
                        <div class="card-body">
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