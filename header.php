<?php
					session_start();
						if(isset($_SESSION['username'])){
					?>
											
							<?php
									}
							else{
								header("location: login.php");
							}
						?>
            
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Print Manila
	</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<!--Sweetaler 2 -->
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script src="js/swalalert.js"></script>
	<!--Swiper -->
	<link rel="stylesheet"  href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
	<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

	
  </head>
  <style>
body {
	background: #eeeeee;
	font-family: 'Montserrat', sans-serif;
}
.navbar {
	color: #d30000;
	background: #f8f8f8!important;
	padding: 5px 16px;
	border-radius: 0;
	border: none;
	box-shadow: 0 0 4px rgba(0,0,0,.1);
}
.navbar img {
	width: 100%;
	height:30px;
	margin-right: 10px;
}
.navbar .navbar-brand {
	color: #525252;
	padding-left: 0;
	padding-right: 50px;
	font-size: 24px;		
}
.navbar .navbar-brand:hover, .navbar .navbar-brand:focus {
	color: #22201d;
}
.navbar .navbar-brand i {
	font-size: 25px;
	margin-right: 5px;
}
.navbar .nav-item i {
	font-size: 18px;
    color:#525252;
}
.navbar .nav-item span {
	position: relative;
    color:#525252;
	top: 3px;
}
.navbar .navbar-nav > a {
	color: #525252;
	padding: 8px 15px;
	font-size: 14px;		
}
.navbar .navbar-nav > a:hover, .navbar .navbar-nav > a:focus {
	color: #525252;
	text-shadow: 0 0 4px rgba(255,255,255,0.3);
}
.navbar .navbar-nav > a > i {
	display: block;
	text-align: center;
}
.navbar .dropdown-item i {
	font-size: 16px;
	min-width: 22px;
    color:#525252;
    
}
.navbar .dropdown-item .material-icons {
	font-size: 21px;
	line-height: 16px;
	vertical-align: middle;
	margin-top: -2px;
	
	
}
.navbar .nav-item.open > a, .navbar .nav-item.open > a:hover, .navbar .nav-item.open > a:focus {
	color: #ff9901;
	background: none !important;
}
.navbar .dropdown-menu {
	border-radius: 1px;
	border-color: #525252;
	box-shadow: 0 2px 8px rgba(0,0,0,.05);
}
.navbar .dropdown-menu a {
	color: #525252 !important;
	padding: 8px 20px;
	line-height: normal;
	font-size: 15px;
}
.navbar .dropdown-menu a:hover, .navbar .dropdown-menu a:focus {
	color: #ff9901 !important;
	background: transparent !important;
}
.navbar .navbar-nav .active a, .navbar .navbar-nav .active a:hover, .navbar .navbar-nav .active a:focus {
	color:#525252;;
	text-shadow: 0 0 4px rgba(255,255,255,0.2);
	background: transparent !important;
}
.navbar .navbar-nav .user-action {
	padding: 9px 15px;
	font-size: 15px;
	color: #525252;
	
	
}
.navbar .navbar-toggle {
	border-color: #fff;
	color:#ff9901;
}
.navbar .navbar-toggle .icon-bar {
	background: #fff;
}
.navbar .navbar-toggle:focus, .navbar .navbar-toggle:hover {
	background: transparent;
}
.navbar .navbar-nav .open .dropdown-menu {
	background: #faf7fd;
	border-radius: 1px;
	border-color: #faf7fd;
	box-shadow: 0 2px 8px rgba(0,0,0,.05);
}
.navbar .divider {
	background-color: #e9ecef !important;
}
@media (min-width: 1200px){
	.form-inline .input-group {
		width: 350px;
		margin-left: 30px;
	}
}
@media (max-width: 1199px){
	.navbar .navbar-nav > a > i {
		display: inline-block;			
		text-align: left;
		min-width: 30px;
		position: relative;
		top: 4px;
	}
	.navbar .navbar-collapse {
		border: none;
		box-shadow: none;
		padding: 0;
	}
	.navbar .navbar-form {
		border: none;			
		display: block;
		margin: 10px 0;
		padding: 0;
	}
	.navbar .navbar-nav {
		margin: 8px 0;
	}
	.navbar .navbar-toggle {
		margin-right: 0;
	}
	.input-group {
		width: 100%;
	}
}
footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            height: 50px;
			z-index: 1;
        }
		
.swiper{
	width:auto;
}
h1, h2, h3 {
  font-family: Raleway, Helvetica, sans-serif;
}
h2 {
  font-size: 28px;
  font-weight: bold;
  margin-bottom: 30px;
  margin-top: 0;
}
.padded {
  padding: 100px 0;
}
.container {
  background: #F4F4F4;

}
.avatar {
  width: 30px;
  border-radius: 50%;
}
.avatar-bordered {
  box-shadow: 0 1px 2px rgba(0,0,0,0.2);
  border: white 1px solid;
}
.avatar-large {
  width: 50px;
}

a.custom-card,
a.custom-card:hover {
  color: inherit;
}
a.custom-card{
	padding:50px;
}
main{
	min-height: 100vh;
    max-width: 100vw;
}
.content{
	background-color:white;
	padding-left:70px;
	padding-right:70px;
}
.swiper-button-next,
.swiper-button-prev {
    background-color: white;
    background-color: rgba(255, 255, 255, 0.5);
	top:260px;
    right:10px;
    padding: 30px;
    color: #000 !important;
    fill: black !important;
    stroke: black !important;
}
.swal-wide{
	width:80%;
}
table{
  margin: 10px 10px 10px 10px;
  height:90%;
  width:50%;
  overflow-y:scroll;
  position:static;
  display:block;
  }
  tr{
  border: 1px solid #ddd;
 
}

td {
  font-weight: 600;
  font-size: 13px;
  color:black; 
  padding: .625em ;
  text-align: center;

}

th{ 
  font-weight: 600;
  font-size: 11px;
  position: sticky;
  padding: .62em;
  text-align: center;
  top:0;
  width:1%;
  height:40px;  
  letter-spacing: .1em;
  text-transform: uppercase;
  background-color: #232323; 
  color:white;
  z-index: 1;
}
</style>
</head> 
<body>
<nav class="navbar navbar-expand-xl navbar-dark bg-dark">
	<a href="dashboard.php" ><img src="logo/prntmnl.png"></a>  		
	<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
		<span class="navbar-toggler-icon" style="background-color:#525252"></span>
	</button>
	<!-- Collection of nav links, forms, and other content for toggling -->
	<div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">		
		<form class="navbar-form form-inline">
			
		</form>
		<div class="navbar-nav ml-auto">
			<a href="dashboard.php" class="nav-item nav-link active"><i class="fa fa-tachometer"></i><span>Dashboard</span></a>
			<a href="service.php" class="nav-item nav-link"><i class="fa fa-briefcase"></i><span>Service</span></a>
			<a href="clients.php" class="nav-item nav-link"><i class="fa fa-users"></i><span>Clients</span></a>
			<a href="#" class="nav-item nav-link"><i class="fa fa-pie-chart"></i><span>Machine</span></a>
			<a href="#" class="nav-item nav-link"><i class="fa fa-briefcase"></i><span>Fabric</span></a>
			<a href="account.php" class="nav-item nav-link"><i class="fa fa-user-secret"></i><span>Account</span></a>				
			<div class="nav-item dropdown">
				<a href="#" data-toggle="dropdown" class="nav-item nav-link dropdown-toggle user-action"><i class="fa fa-user-circle-o" aria-hidden="true"> <?php echo $_SESSION['username'];?><b class="caret"></b></i></a>
				<div class="dropdown-menu">
					<a href="#" class="dropdown-item"><i class="fa fa-user-o"></i> Profile</a>
					<a href="#" class="dropdown-item"><i class="fa fa-calendar-o"></i> Calendar</a>
					<a href="#" class="dropdown-item"><i class="fa fa-sliders"></i> Settings</a>
					<div class="divider dropdown-divider"></div>
					<a href="logout.php" class="dropdown-item"><i class="material-icons">&#xE8AC;</i> Logout</a>
				</div>
			</div>
		</div>
	</div>
</nav>

