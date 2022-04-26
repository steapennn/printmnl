<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        
      

        <script src="https://kit.fontawesome.com/5845bc1bb6.js"
                crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@600&display=swap" 
              rel="stylesheet" />

              <!--bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
       
        <!--sweet alert -->
        <script src="sweetalert2/dist/sweetalert2.all.min.js"></script>
        <script src="js/swalalert.js"></script>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <title>Transparent Login Page using HTML/CSS</title>

    </head>

    <body>
  
    <div class="container">	
        
  	<div class="form" id="fourm">	
			<form class="ams" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method = "POST">
            <img src="./pic/bg.jpg" alt="printmnl">
				<div class="row">
					<div class="form-group col-12">
						<h1>Login</h1>
						<hr>
					</div>
             		<div class="form-group col-12">
						<label>Username:</label>
						<input type = "text"  class="form-control" name = "txtusername" required> 
					</div>

					<div class="form-group col-12">
						<label>Password:</label>
						<input type = "password" name = "txtpassword" class="form-control" name="password" required autocomplete="current-password"></input>
						        			<script> 
											const togglePasswordEye = '<i class="fa fa-eye toggle-password-eye"></i>';
											const togglePasswordEyeSlash = '<i class="fa fa-eye-slash toggle-password-eye"></i>';

														$(togglePasswordEyeSlash).insertAfter('input[type=password]');
														$('input[type=password]').addClass('hidden-pass-input')

														$('body').on('click', '.toggle-password-eye', function (e) {
															let password = $(this).prev('.hidden-pass-input');

															if (password.attr('type') === 'password') {
																password.attr('type', 'text');
																$(this).addClass('fa-eye').removeClass('fa-eye-slash');
															} else {
																password.attr('type', 'password');
																$(this).addClass('fa-eye-slash').removeClass('fa-eye');
															}
														})
											</script>
											
					</div>
					

					<div class="form-group col-12">
						<br><input type = "submit" name = "btnsubmit" class="btn btn-dark" value = "Login">
					</div>
													
				</div>

				
		
	</div>
    </body>
    
    <?php
if(isset($_POST['btnsubmit'])){	
	require_once "config.php";
	$sql = "SELECT * FROM tblaccount WHERE username = ? AND password = ? AND status = 'ACTIVE'";
	if($stmt = mysqli_prepare($link, $sql)){
		mysqli_stmt_bind_param($stmt, "ss", $_POST['txtusername'], $_POST['txtpassword']);
		if(mysqli_stmt_execute($stmt)){
			$result = mysqli_stmt_get_result($stmt);
			if(mysqli_num_rows($result) > 0){	
				$account = mysqli_fetch_array($result, MYSQLI_ASSOC);
				session_start();
				$_SESSION['username'] = $_POST['txtusername'];
				$_SESSION['usertype'] = $account['usertype'];
					if($_SESSION['usertype'] == 'ADMINISTRATOR'){
						echo '<script>swalCorrect()</script>';
						exit();
					}
					elseif($_SESSION['usertype'] == 'FINANCE'){
						header("Location:FinanceEquipments");
						exit();
					}
					else{
						header("Location:UserEquipments");
						exit();
					}			

			}
			else{
  				echo '<script>alert("Incorrect login credentials or account is inactive")</script>';
			
		}
	}
	else{
		echo '<script>alert("Error on select statement"</script>';
	}
}
}
?>



</html>
