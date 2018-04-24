<?php
include('../layout/nav.php');
$roles=querydb("SELECT * FROM roles");
?>

	
		
		<!-- select2 CSS -->
		<link href="../vendors/bower_components/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css"/>
		

<!-- Right Sidebar Backdrop -->
			<div class="right-sidebar-backdrop"></div>
			<!-- /Right Sidebar Backdrop -->
				
			<!-- Main Content -->
			<div class="page-wrapper">
				<div class="container-fluid">
					
					<!-- Title -->
					<div class="row heading-bg">
						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
							<h5 class="txt-dark">Add new user</h5>
						</div>
					
						<!-- Breadcrumb -->
						<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
							<ol class="breadcrumb">
								<li><a href="index.php">Dashboard</a></li>
								<li><a href="#"><span>Admin</span></a></li>
								<li class="active"><span>Add User</span></li>
							</ol>
						</div>
						<!-- /Breadcrumb -->
					
					</div>
					<!-- /Title -->
					
					<!-- Row -->
					<div class="row">
						
						
						<div class="col-md-6">
							<div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">Add User</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="form-wrap mt-40">
											<form action="../controllers/usercontrolclass.php?action=adduser" method="post">
												<div class="form-group">
													<label class="control-label mb-10" for="exampleInputName_1">Name</label>
													<input type="text" class="form-control" name="name" required="" id="exampleInputName_1" placeholder="name">
												</div>												
												<div class="form-group">
													<label class="control-label mb-10" for="exampleInputName_1">Username</label>
													<input type="text" class="form-control" name="username" required="" id="exampleInputName_1" placeholder="Username">
												</div>
												<div class="form-group">
													<label class="control-label mb-10" for="exampleInputEmail_2">Email address</label>
													<input type="email" class="form-control" name="email" required="" id="exampleInputEmail_2" placeholder="Enter email">
												</div>
												<div class="form-group">
													<label class="control-label mb-10">Roles</label>
													<select class="form-control select2" name="roles">
														<option>Select</option>
														<optgroup label="Roles">
															<?php while($row=mysqli_fetch_array($roles,MYSQLI_ASSOC)){?>
															<option value="<?php echo $row['id']?>"><?php echo $row['name']?></option>
															<?php }?>
														</optgroup>
														
														
													</select>
												</div>

												<div class="form-group text-center">
													<button type="submit" class="btn btn-success btn-rounded" name="adduser">Add User</button>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					</div>
					<!-- /Row -->

<?php include('../layout/footer.php');?>
	
		<!-- Select2 JavaScript -->
		<script src="../vendors/bower_components/select2/dist/js/select2.full.min.js"></script>
		
		<!-- Bootstrap Select JavaScript -->
		<script src="../vendors/bower_components/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
		
		<!-- Bootstrap Tagsinput JavaScript -->
		<script src="../vendors/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
		
		<!-- Bootstrap Touchspin JavaScript -->
		<script src="../vendors/bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js"></script>
		
		<!-- Multiselect JavaScript -->
		<script src="../vendors/bower_components/multiselect/js/jquery.multi-select.js"></script>
		
		 
		<!-- Bootstrap Switch JavaScript -->
		<script src="../vendors/bower_components/bootstrap-switch/dist/js/bootstrap-switch.min.js"></script>