<?php include 'header.php';?>
<script src="js/modal.js"></script>
<?php

$databaseHost = '127.0.0.1:4307';   
$databaseName = 'xdtcomp';  
$databaseUsername = 'adminXDT';    
$databasePassword = 'xdtcpa123';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
 
 
$sql1 = "SELECT * FROM tblaccount ";
$sql2 = "SELECT * FROM tblequipment ";


 
$mysqliAccount = $mysqli->query($sql1);
$mysqliEquipment = $mysqli->query($sql2);
$Account_rows_count_value = mysqli_num_rows($mysqliAccount);
$Equipment_rows_count_value = mysqli_num_rows($mysqliEquipment);
	echo"<br>";
	echo "<content id='mainContent'>";
	echo"<div class='boxbox'>";
		echo"<div class='row justify-content-md-center'>";
			echo"<div class='col-md-3'>";
				echo"<div class='card text-center'>";
					echo"<div class='card-header bg-info text-white'>";
						echo"<div class='row-1'>";
							echo"<div class='col'>";
									echo"<i class='fa fa-user fa-2x'></i>";
								echo"</div>";
								echo"<div class='col'>"."<h3 class='display-5 '>".$Account_rows_count_value."</div>";
								echo"<h6> Total Account </h6>";	
					
								echo"</div>";
							echo"</div>";
						
									echo"<div class='card-footer'>";
										echo"<h6>". 
											"<a  class='text-primary' data-toggle='modal' data-target='#exampleModalLong'>View Details <i class='fas fa-arrow-alt-circle-right'></i></a>";
										echo"</h6>";
										
					echo"</div>";
				echo"</div>";
					
			echo"</div>";
			echo"<div class='col-md-3'>";
				echo"<div class='card text-center'>";
					echo"<div class='card-header bg-success text-white'>";
						echo"<div class='row-1'>";
							echo"<div class='col'>";
									echo"<i class='fa fa-users fa-2x'></i>";
								echo"</div>";
								echo"<div class='col'>"."<h3 class='display-5 '>".$Equipment_rows_count_value."</div>";
								echo"<h6> Total Clients</h6>";	
					
								echo"</div>";
							echo"</div>";
						
									echo"<div class='card-footer'>";
										echo"<h6>". 
											"<a type='button' data-toggle='modal' data-target='#ModalEquipment' class='text-success'>View Details <i class='fas fa-arrow-alt-circle-right'></i></a>";
										echo"</h6>";
										
					echo"</div>";
				echo"</div>";
					
			echo"</div>";
			echo"</div>";

			echo"<br>";
			echo"<div class='row justify-content-md-center'>";
			echo"<div class='col-md-3'>";
				echo"<div class='card text-center'>";
					echo"<div class='card-header bg-danger text-white'>";
						echo"<div class='row-1'>";
							echo"<div class='col'>";
									echo"<i class='fa fa-briefcase fa-2x'></i>";
								echo"</div>";
								echo"<div class='col'>"."<h3 class='display-5 '>".$Equipment_rows_count_value."</div>";
								echo"<h6> Total Fabric </h6>";	
					
								echo"</div>";
							echo"</div>";
						
									echo"<div class='card-footer'>";
										echo"<h6>". 
											"<a href='#' class='text-danger'>View Details <i class='fas fa-arrow-alt-circle-right'></i></a>";
										echo"</h6>";
										
					echo"</div>";
				echo"</div>";
					
			echo"</div>";
			
			echo"<div class='col-md-3'>";
				echo"<div class='card text-center'>";
					echo"<div class='card-header bg-warning text-white'>";
						echo"<div class='row-1'>";
							echo"<div class='col'>";
									echo"<i class='fa fa-cogs fa-2x'></i>";
								echo"</div>";
								echo"<div class='col'>"."<h3 class='display-5 '>".$Equipment_rows_count_value."</div>";
								echo"<h6> Total Machine </h6>";	
					
								echo"</div>";
							echo"</div>";
						
									echo"<div class='card-footer'>";
										echo"<h6>". 
											"<a href='#' class='text-warning'>View Details <i class='fas fa-arrow-alt-circle-right'></i></a>";
										echo"</h6>";
										
					echo"</div>";
				echo"</div>";
					
			echo"</div>";
	
		echo"</div>";
					
	echo "</content>";
					
$mysqli->close();	
?>

<?php include 'footer.php';?>


 
	
