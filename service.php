<?php include 'header.php';?>'
<script src="js/swalalert.js"></script>
<script src="js/notif.js"></script>
<?php
	require_once "config.php";
	if(isset($_POST['btnCreate'])){
							$sql = "SELECT * FROM tblclient WHERE client_id=?"; 
							if($stmt = mysqli_prepare($link, $sql)){
								mysqli_stmt_bind_param($stmt, "s", $_POST['$clientno']);
								if(mysqli_stmt_execute($stmt)){
									$result = mysqli_stmt_get_result($stmt);
									if(mysqli_num_rows ($result) != 1){ 
										$sql = "INSERT INTO tblclient (client_id, Fullname, Contact_number, Company_name, Company_Address, Service_Avail, Fabric_type, Clothing_type, Size, Quantity, Machine, Payment, Status) VALUES (?, ?, ?, ?, ?,?,?,?,?,?,?,?,?)";
										if($stmt = mysqli_prepare($link, $sql)){
											$status = "Pending";
											$date = date("m/d/Y");
											$time = date("h:i:sa");
											$clientno=	date("Y-mdhis");
											mysqli_stmt_bind_param($stmt, "sssssssssssss",$clientno, $_POST['txtFname'], $_POST['txtCno'], $_POST['txtCname'], $_POST['txtCAdd'], $_POST['cmbSA'], $_POST['cmbFT'], $_POST['cmbCT'],$_POST['cmbSZ'], $_POST['txtQ'], $_POST['cmbM'],$_POST['cmbPay'],$status);	
											if(mysqli_stmt_execute($stmt)){
												echo '<script>swalSuccess()</script>';
												exit();
													}
												
											else{
												echo "<script> alert('error on insert statement');
													  window.location.href='AdminTickets.php';
													  </script>";
											}
										}
									}
									else{
										echo "<script>alert('Equipments is already existing');
											  window.location.href='AdminTickets.php';
											  </script>";

									}

								}
								else{
									echo "<script>alert('Error on select statement');
										  window.location.href='AdminTickets.php';
											  </script>";
								}
								
							}
						}
						$displayonly=	date("Y-mdhis");
					
					?>

<main>

	<div class="swiper mySwiper "><br>
	<h2 class="text-center" style="font-weight:800; padding:20px 20px 20px 20px;">CUSTOM CLOTHING & UNIFORM SELECTIONS</h2>
	<div class="swiper-wrapper">	 
			<div class="swiper-slide">
				<div class="content">
						<a href="#" class="custom-card">
						<div class="card" style="width: 15rem; display: inline-block;">
							<img class="card-img-top" src="pic/tshirt.jpg" alt="Card image cap">
							<div class="card-body">
							<h5 class="card-title text-center">Silk Screen</h5>
							</div>
						</div>
						</a>
						<a onclick="swalpopup()" class="custom-card">
						<div class="card" style="width: 15rem; display: inline-block;">
							<img class="card-img-top" src="pic/tshirt2.jpg" alt="Card image cap">
							<div class="card-body">
							<h5 class="card-title text-center">Heat Press</h5>
							</div>
						</div>
						</a>
						<a href="" class="custom-card">
						<div class="card" style="width: 15rem; display: inline-block;">
							<img class="card-img-top" src="pic/tshirt3.jpg" alt="Card image cap">
							<div class="card-body">
							<h5 class="card-title text-center">Sublimation</h5>
							</div>
						</div>
						</a>
						<a href="" class="custom-card">
						<div class="card" style="width: 15rem; display: inline-block;">
							<img class="card-img-top" src="pic/tshirt4.jpg" alt="Card image cap">
							<div class="card-body">
							<h5 class="card-title text-center">DTG</h5>
							</div>
						</div>
						</a>
				</div>
			</div>
			<div class="swiper-slide">
				<div class="content">
						<a href="#" class="custom-card">
						<div class="card" style="width: 15rem; display: inline-block;">
							<img class="card-img-top" src="pic/tshirt5.jpg" alt="Card image cap">
							<div class="card-body">
							<h5 class="card-title text-center">Inkjet</h5>
							</div>
						</div>
						</a>
						<a href="" class="custom-card">
						<div class="card" style="width: 15rem; display: inline-block;">
							<img class="card-img-top" src="pic/tshirt6.jpg" alt="Card image cap">
							<div class="card-body">
							<h5 class="card-title text-center">Vinyl</h5>
							</div>
						</div>
						</a>
						<a href="" class="custom-card">
						<div class="card" style="width: 15rem; display: inline-block;">
							<img class="card-img-top" src="pic/tshirt7.jpg" alt="Card image cap">
							<div class="card-body">
							<h5 class="card-title text-center">Stencil</h5>
							</div>
						</div>
						</a>
						<a href="" class="custom-card">
						<div class="card" style="width: 15rem; display: inline-block;">
							<img class="card-img-top" src="pic/tshirt8.jpg" alt="Card image cap">
							<div class="card-body">
							<h5 class="card-title text-center">Plastisol</h5>
							</div>
						</div>
						</a>
				</div>
			</div>

	</div>
	<div class="swiper-button-next"></div>
		<div class="swiper-button-prev"></div>
		<div class="swiper-pagination"></div>
	</div>	
	<div class="swiper mySwiper"><br>
	<h2 class="text-center" style="font-weight:800; padding:20px 20px 20px 20px;">CUSTOM EMBROIDERY</h2>
	<div class="swiper-wrapper">	 
	<div class="swiper-slide">
				<div class="content">
						<a href="#" class="custom-card">
						<div class="card" style="width: 15rem; display: inline-block;">
							<img class="card-img-top" src="pic/emb1.jpg" alt="Card image cap">
							<div class="card-body">
							<h5 class="card-title text-center">Counted Thread Embroidery</h5>
							</div>
						</div>
						</a>
						<a onclick="swalpopup()" class="custom-card">
						<div class="card" style="width: 15rem; display: inline-block;">
							<img class="card-img-top" src="pic/emb2.jpg" alt="Card image cap">
							<div class="card-body">
							<h5 class="card-title text-center">Outline Embroidery</h5>
							</div>
						</div>
						</a>
						<a href="" class="custom-card">
						<div class="card" style="width: 15rem; display: inline-block;">
							<img class="card-img-top" src="pic/emb3.jpg" alt="Card image cap">
							<div class="card-body">
							<h5 class="card-title text-center">Whitework Embroidery</h5>
							</div>
						</div>
						</a>
						<a href="" class="custom-card">
						<div class="card" style="width: 15rem; display: inline-block;">
							<img class="card-img-top" src="pic/emb4.jpg" alt="Card image cap">
							<div class="card-body">
							<h5 class="card-title text-center">Candlewicking Embroidery</h5>
							</div>
						</div>
						</a>
				</div>
			</div>
			<div class="swiper-slide">
				<div class="content">
						<a href="#" class="custom-card">
						<div class="card" style="width: 15rem; display: inline-block;">
							<img class="card-img-top" src="pic/emb5.jpg" alt="Card image cap">
							<div class="card-body">
							<h5 class="card-title text-center">Patchwork Embroidery</h5>
							</div>
						</div>
						</a>
						<a onclick="swalpopup()" class="custom-card">
						<div class="card" style="width: 15rem; display: inline-block;">
							<img class="card-img-top" src="pic/emb6.jpg" alt="Card image cap">
							<div class="card-body">
							<h5 class="card-title text-center">Shadow Work Embroidery</h5>
							</div>
						</div>
						</a>
						<a href="" class="custom-card">
						<div class="card" style="width: 15rem; display: inline-block;">
							<img class="card-img-top" src="pic/emb7.jpg" alt="Card image cap">
							<div class="card-body">
							<h5 class="card-title text-center">Fish Scale Embroidery</h5>
							</div>
						</div>
						</a>
						<a href="" class="custom-card">
						<div class="card" style="width: 15rem; display: inline-block;">
							<img class="card-img-top" src="pic/emb8.jpg" alt="Card image cap">
							<div class="card-body">
							<h5 class="card-title text-center">Patch<br> Embroidery</h5>
							</div>
						</div>
						</a>
				</div>
			</div>

	</div>
	<div class="swiper-button-next"></div>
		<div class="swiper-button-prev"></div>
		<div class="swiper-pagination"></div>
	</div>	

		<!-- Initialize Swiper -->
	<script>
	var swiper = new Swiper(".mySwiper", {
		slidesPerView: 1,
		spaceBetween: 30,
		loop: true,
		pagination: {
		el: ".swiper-pagination",
		clickable: true,
		},
		navigation: {
		nextEl: ".swiper-button-next",
		prevEl: ".swiper-button-prev",
		},
	});
	</script>
		

</main>

<?php include 'footer.php';?>