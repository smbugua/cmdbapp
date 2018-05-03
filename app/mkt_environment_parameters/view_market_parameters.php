<?php
include('../layout/nav.php');
$envs=querydb("SELECT * FROM environments");
$markets=querydb("SELECT * FROM markets_environments");

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
							<h5 class="txt-dark">View market parameters</h5>
						</div>
					
						<!-- Breadcrumb -->
						<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
							<ol class="breadcrumb">
								<li><a href="index.php">Dashboard</a></li>
								<li><a href="#"><span>Market parameters</span></a></li>
								<li class="active"><span>View market parameters</span></li>
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
										<h6 class="panel-title txt-dark">View market parameters</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="form-wrap mt-40">
											<form method="get" action="market_parameters.php"> 
												
												<div class="form-group">
													<label class="control-label mb-10">Market</label>
													<select class="form-control select2" name="market">
														<option>Select</option>
														<!--<optgroup label="Markets"> -->
															<?php while($row=mysqli_fetch_array($markets,MYSQLI_ASSOC)){?>
															<option value="<?php echo $row['id']?>"><?php echo $row['name']?></option>
															<?php }?>
														</optgroup>
														
														
													</select>
												</div>

														<button type="submit" class="btn btn-success mr-10" >View</button>
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