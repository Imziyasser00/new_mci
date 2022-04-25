		<?php 
		include_once("includes/header.php");
		?>



		<div class="main">
		    <?php include_once 'includes/up_bar.php'; ?>

		    <main class="content">
		        <div class="container-fluid p-0">

		            <h1 class="h3 mb-3"><strong>Analytics</strong> Dashboard</h1>

		            <div class="row">
		                <div class="col-md-12">
		                    <div class="w-100">
		                        <div class="row">
		                            <div class="col-md-3">
		                                <div class="card">
		                                    <div class="card-body">
		                                        <div class="row">
		                                            <div class="col mt-0">
		                                                <h5 class="card-title">Documents</h5>
		                                            </div>
		                                            <div class="col-auto">
		                                                <div class="stat text-primary">
		                                                    <i class="align-middle" data-feather="book"></i>
		                                                </div>
		                                            </div>
		                                        </div>
		                                        <h1 class="mt-1 mb-3"><?php 
													$query = "SELECT count(*) as cnt FROM `document`;";
													$result = mysqli_query($conn,$query);
													while($obj=$result->fetch_assoc()){
														echo $obj["cnt"];
													}
													?></h1>

		                                    </div>
		                                </div>
		                            </div>
		                            <div class="col-md-3">
		                                <div class="card">
		                                    <div class="card-body">
		                                        <div class="row">
		                                            <div class="col mt-0">
		                                                <h5 class="card-title">Users</h5>
		                                            </div>

		                                            <div class="col-auto">
		                                                <div class="stat text-primary">
		                                                    <i class="align-middle" data-feather="users"></i>
		                                                </div>
		                                            </div>
		                                        </div>
		                                        <h1 class="mt-1 mb-3"><?php 
													$query = "SELECT count(*) as cnt FROM `utilisateur`;";
													$result = mysqli_query($conn,$query);
													while($obj=$result->fetch_assoc()){
														echo $obj["cnt"];
													}
													?></h1>
		                                    </div>
		                                </div>
		                            </div>
		                            <div class="col-md-3">
		                                <div class="card">
		                                    <div class="card-body">
		                                        <div class="row">
		                                            <div class="col mt-0">
		                                                <h5 class="card-title">Services</h5>
		                                            </div>

		                                            <div class="col-auto">
		                                                <div class="stat text-primary">
		                                                    <i class="align-middle" data-feather="info"></i>
		                                                </div>
		                                            </div>
		                                        </div>
		                                        <h1 class="mt-1 mb-3"><?php 
													$query = "SELECT count(*) as cnt FROM `service`;";
													$result = mysqli_query($conn,$query);
													while($obj=$result->fetch_assoc()){
														echo $obj["cnt"];
													}
													?></h1>
		                                    </div>
		                                </div>
		                            </div>
		                            <div class="col-md-3">
		                                <div class="card">
		                                    <div class="card-body">
		                                        <div class="row">
		                                            <div class="col mt-0">
		                                                <h5 class="card-title">Sous-Services</h5>
		                                            </div>

		                                            <div class="col-auto">
		                                                <div class="stat text-primary">
		                                                    <i class="align-middle" data-feather="layers"></i>
		                                                </div>
		                                            </div>
		                                        </div>
		                                        <h1 class="mt-1 mb-3"><?php 
													$query = "SELECT count(*) as cnt FROM `sservice`;";
													$result = mysqli_query($conn,$query);
													while($obj=$result->fetch_assoc()){
														echo $obj["cnt"];
													}
													?></h1>
		                                    </div>
		                                </div>
		                            </div>
		                        </div>
		                    </div>
		                </div>


		            </div>

		            <div class="row">


		                <div class="col-12 col-md-6 col-xxl-3 d-flex order-1 order-xxl-1">
		                    <div class="card flex-fill">
		                        <div class="card-header">

		                            <h5 class="card-title mb-0">Calendar</h5>
		                        </div>
		                        <div class="card-body d-flex">
		                            <div class="align-self-center w-100">
		                                <div class="chart">
		                                    <div id="datetimepicker-dashboard"></div>
		                                </div>
		                            </div>
		                        </div>
		                    </div>
		                </div>
		                <div class="col-12 col-lg-8 col-xxl-9 d-flex">
		                    <div class="card flex-fill">
		                        <div class="card-header">

		                            <h5 class="card-title mb-0">Latest Visitors</h5>
		                        </div>
		                        <table class="table table-hover my-0">
		                            <thead>
		                                <tr>
		                                    <th>Name</th>
		                                    <th class="d-none d-xl-table-cell">Username</th>
		                                    <th class="d-none d-xl-table-cell">Fonction</th>
		                                    <th class="d-none d-xl-table-cell">Date</th>
		                                    <th>Status</th>
		                                </tr>
		                            </thead>
		                            <tbody>
		                                <?php
										$query = "SELECT * FROM visitors_saver ORDER BY id DESC	";
										$result = mysqli_query($conn,$query);
										while($obj = $result->fetch_assoc()){
											$sql = mysqli_query($conn,"SELECT * FROM utilisateur where id = ".$obj["user_id"]);
											while($rst = $sql->fetch_assoc()){
												echo '<tr>
		                                    <td>'.$rst["nom"].' '.$rst["prenom"].'</td>
		                                    <td class="d-none d-xl-table-cell">'.$rst["username"].'</td>
		                                    <td class="d-none d-xl-table-cell">'.$rst["fonction"].'</td>
											<td class="d-none d-md-table-cell">'.$obj["Date"].'</td>';
											if($obj["state"] == 1){
												echo '<td><span class="badge bg-success">Connected</span></td></tr>';
											}
											else{
												echo '<td><span class="badge bg-danger">Disconnected</span></td></tr>';
											}
		                                    
		                                    
		                                
											}
											
										}
?>

		                            </tbody>
		                        </table>
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
document.addEventListener("DOMContentLoaded", function() {
    var date = new Date(Date.now());
    var defaultDate = date.getUTCFullYear() + "-" + (date.getUTCMonth() + 1) +
        "-" + date.getUTCDate();
    document.getElementById("datetimepicker-dashboard").flatpickr({
        inline: true,
        prevArrow: "<span title=\"Previous month\">&laquo;</span>",
        nextArrow: "<span title=\"Next month\">&raquo;</span>",
        defaultDate: defaultDate
    });
});
		</script>

		</body>

		</html>