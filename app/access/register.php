<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<title>Mo-De CMDB</title>
		<meta name="description" content="Droopy is a Dashboard & Admin Site Responsive Template by hencework." />
		<meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Droopy Admin, Droopyadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
		<meta name="author" content="hencework"/>
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="icon" href="../favicon.ico" type="image/x-icon">
		<link href="../dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="../dist/css/basic-admin.min.css" rel="stylesheet" type="text/css">
	<link href="../dist/css/fancy-buttons.css" rel="stylesheet" type="text/css">
	<link href="../dist/css/fancy-dropdown.min.css" rel="stylesheet" type="text/css">
	<link href="../dist/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="../dist/css/pe-icon-7-stoke.css" rel="stylesheet" type="text/css">
	<link href="../dist/css/pe-icon-7-styles.css" rel="stylesheet" type="text/css">
		<!-- vector map CSS -->
		<link href="../vendors/bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css" rel="stylesheet" type="text/css"/>
		
		
		
		<!-- Custom CSS -->
		<link href="../dist/css/style.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<!--Preloader-->
		<div class="preloader-it">
			<div class="la-anim-1"></div>
		</div>
		<!--/Preloader-->
		
		<div class="wrapper  pa-0">
			<header class="sp-header">
				<div class="sp-logo-wrap pull-left">
					<a href="index.html">
						<img class="brand-img mr-10" src="../img/logo.png" alt="brand"/>
						<span class="brand-text">Mo-De CMDB</span>
					</a>
				</div>
				<div class="form-group mb-0 pull-right">
					<span class="inline-block pr-10">Already have an account?</span>
					<a class="inline-block btn btn-success btn-rounded btn-outline" href="index.php">Sign In</a>
				</div>
				<div class="clearfix"></div>
			</header>
			
			<!-- Main Content -->
			<div class="page-wrapper pa-0 ma-0 auth-page">
				<div class="container-fluid">
					<!-- Row -->
					<div class="table-struct full-width full-height">
						<div class="table-cell vertical-align-middle auth-form-wrap">
							<div class="auth-form  ml-auto mr-auto no-float">
								<div class="row">
									<div class="col-sm-12 col-xs-12">
										<div class="mb-30">
											<h3 class="text-center txt-dark mb-10">Sign up to Mo-de CMDB</h3>
											<h6 class="text-center nonecase-font txt-grey">Enter your details below</h6>
										</div>	
										<div class="form-wrap">
											<form action="../controllers/usercontrolclass.php?action=signup" method="post">
												<div class="form-group">
													<label class="control-label mb-10" for="exampleInputName_1">Username</label>
													<input type="text" class="form-control" name="username" required="" id="exampleInputName_1" placeholder="Username">
												</div>
												<div class="form-group">
													<label class="control-label mb-10" for="exampleInputEmail_2">Email address</label>
													<input type="email" class="form-control" name="email" required="" id="exampleInputEmail_2" placeholder="Enter email">
												</div>
												<div class="form-group">
													<label class="pull-left control-label mb-10" for="exampleInputpwd_2">Password</label>
													<input type="password" class="form-control" name="password" required="" id="password" placeholder="Enter pwd" >
												</div>

												<div class="form-group" id="alertpass">
													
												</div>
												<div class="form-group">
													<label class="pull-left control-label mb-10" for="exampleInputpwd_3">Confirm Password</label>
													<input type="password" class="form-control" name="password2" required="" id="password2" placeholder="Enter pwd" onkeyup="passwordchecker()">
												</div>
												<div class="form-group">
													<!-- <div class="checkbox checkbox-primary pr-10 pull-left">
														<input id="checkbox_2" required="" type="checkbox">
														<label for="checkbox_2"> I agree to all <span class="txt-primary">Terms</span></label>
													</div> -->
													<div class="clearfix"></div>
												</div>
												<div class="form-group text-center">
													<button type="submit" class="btn btn-success btn-rounded">sign Up</button>
												</div>
											</form>
										</div>
									</div>	
								</div>
							</div>
						</div>
					</div>
					<!-- /Row -->	
				</div>
				
			</div>
			<!-- /Main Content -->
		
		</div>
		<!-- /#wrapper -->
		





		<!-- JavaScript -->
		
		<!-- jQuery -->
		<script src="../vendors/bower_components/jquery/dist/jquery.min.js"></script>
		<!--password verfier-->
<script type="text/javascript">
	 function passwordchecker(){
	 	var a = document.getElementById('password').value;
	 	var b = document.getElementById('password2').value;
	 	if (b!=a) {
				document.getElementById('alertpass').innerHTML="<span style='color: red;'>**Passwords Do Not Match!</span>";
			}else if(a==b){
				document.getElementById('alertpass').innerHTML="<span style='color: green;'>**Passwords Match!</span>";
			}
	 }
</script>
		<!-- Bootstrap Core JavaScript -->
		<script src="../vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
		<script src="../vendors/bower_components/jasny-bootstrap/dist/js/jasny-bootstrap.min.js"></script>
		
		<!-- Slimscroll JavaScript -->
		<script src="../dist/js/jquery.slimscroll.js"></script>
		
		<!-- Init JavaScript -->
		<script src="../dist/js/init.js"></script>
	</body>
</html>
