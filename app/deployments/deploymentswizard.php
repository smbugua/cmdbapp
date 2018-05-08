<?php 
include('../layout/nav.php');
if (!$_POST) {
	ob_start();
	header("Location : ../layouts/noentry.php");
	ob_end_flush();
}elseif ($_POST) {
$appid=$_POST['appid'];
$marketenvid=$_POST['marketid'];
$versions=processquery("SELECT version from versions where marketid='$marketenvid' && appid='$appid' order by id desc limit 1");
$v=$versions['version'];
$app=processquery("SELECT name FROM apps where id='$appid'");
$market=processquery("SELECT m.market as marketname,me.name as envname from markets m inner join markets_environments me on me.marketid=m.id where me.id='$marketenvid'");
$nodequery=querydb("SELECT * FROM nodes where market_environment_id ='$marketenvid'");

	?>
		<!-- vector map CSS -->
		<link href="../vendors/bower_components/jquery-wizard.js/css/wizard.css" rel="stylesheet" type="text/css"/>
		
		<!-- jquery-steps css -->
		<link rel="stylesheet" href="../vendors/bower_components/jquery.steps/demo/css/jquery.steps.css">

		<!-- bootstrap-touchspin CSS -->
		<link href="../vendors/bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css" rel="stylesheet" type="text/css"/>

		<div class="right-sidebar-backdrop"></div>
			<!-- /Right Sidebar Backdrop -->
			
			<!-- Main Content -->
			<div class="page-wrapper">
				<div class="container-fluid">
	<!-- Row -->
					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">Release Wizard</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<form id="example-advanced-form" action="../controllers/deploymentsclass.php?action=queue" method="post">
											<h3><span class="number"><i class="icon-user-following txt-black"></i></span><span class="head-font capitalize-font">Version Overview</span></h3>
											<fieldset>
												<div class="row">
													<div class="col-sm-6">
														<div class="form-wrap">
																	<div class="form-group">
																<div class="input-group">
																	<input type="text" name="marketenvid" class="hidden" value="<?php echo $marketenvid?>">
																	<input type="text" name="appid" class="hidden" value="<?php echo $appid?>">
																	<div class="input-group-addon"><i class="icon-globe"></i>
																		<label> Market : <?php echo $market['marketname'] ?></label><br>
																		<p>Environment : <?php echo $market['envname'] ?></p> <br>
																		<p>Application: <?php echo $app['name'] ?></p>
																	</div>
																</div>
															</div>
																<div class="form-group">
																<div class="input-group">
																	<div class="input-group-addon"><i class="icon-lock"></i>
																		<label>Most Recent Version</label>
																	</div>
																	<?php
																		if ($v<=0){
																	?>
																	
																	<input type="text" class="form-control required" style="color:green" name="preversion" id="version" placeholder="Version" value="0.0 (No Previos Release exists)" readonly="" disabled="">
																	<?php } elseif($v>0){ ?>
																	<input type="text" class="form-control required"  name="preversion" id="version" placeholder="" value="<?php echo $v?>" readonly="" disabled="" >
																	<?php }?>
																</div>
															</div>
															<div class="form-group">
																<div class="input-group">
																	<div class="input-group-addon"><i class="icon-lock"></i>
																		<label>Version         </label>
																	</div>
																	
																	<input type="text" class="form-control required" style="color: red"  name="version" id="version" placeholder="Version (start with 1.0)">
																</div>
															</div>
																<div class="form-group">
																<div class="input-group">
																	<div class="input-group-addon"><i class="icon-lock"></i>
																		<label>Release Notes</label>
																	</div>
																	
																	<textarea class="form-control" style="color: green" name="notes" cols="5" rows="9" required=""></textarea>
																</div>
															</div>
														</div>
													</div>
												</div>
											</fieldset>
										 	
											<h3><span class="number"><i class="icon-bag txt-black"></i></span><span class="head-font capitalize-font">Choose Nodes</span></h3>
											<fieldset>
												<div class="row">
													<div class="col-sm-12">
														<div class="form-wrap">
															<div class="form-group">
																<div class="row mt-40">
											<div class="col-sm-12">
												<table class="table table-bordered">
													<thead>
														<th>#</th>
														<th>Endpoint Name</th>
														<th>Host IP Address</th>
														<th>Check</th>
													</thead>
													<tbody>
																																					
												<?php
												$no=1; 
												while($node=mysqli_fetch_array($nodequery,MYSQLI_ASSOC)){ ?>
												<tr>
													<td><?php echo $no++?></td>
													<td> <?php echo $node['name']?></td>
													<td> <?php echo $node['ipaddress']?></td>
													<td><input type="checkbox" name="nodes[]" value="<?php echo $node['id']?>"></td>
													<td></td>
												<?php }?>
													</tbody>
			
												</table>
												
											</div>
															</div>
															
															
														</div>
													</div>
												</div>
											</fieldset>
										 
											<h3><span class="number"><i class="icon-credit-card txt-black"></i></span><span class="head-font capitalize-font">Config File Operations</span></h3>
												<fieldset>
												<!--CREDIT CART PAYMENT-->
												<div class="row">
													<div class="col-sm-12">
														<div class="form-group">
															<div class="button-box"> 
													<a id="select-all" class="btn btn-danger  mr-10 mt-15" href="#">Queue For Deployment</a>
													<a id="select-all" class="btn btn-success  mr-10 mt-15" href="../scripts/filescript.php?marketenvid=<?php echo $marketenvid?>&&appid=<?php echo $appid?>" target="_blank">Generate File</a> 
													<a id="select-all" class="btn btn-info  mr-10 mt-15" href="../phpshell/phpshell.php" target="blank">Got to Shell</a> 
												</div>
														</div>
														
														
													</div>
												</div>
												<!--CREDIT CART PAYMENT END-->
											</fieldset>
										 
											
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>


					<!-- Form Wizard JavaScript -->
		<script src="../vendors/bower_components/jquery.steps/build/jquery.steps.min.js"></script>
		<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js"></script>
		
		<!-- Form Wizard Data JavaScript -->
		<script src="../dist/js/form-wizard-data.js"></script>
		
		<!-- Data table JavaScript -->
		<script src="../vendors/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
		
		<!-- Bootstrap Touchspin JavaScript -->
		<script src="../vendors/bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js"></script>

		<!-- Form Advance Init JavaScript -->
		<script src="../dist/js/form-advance-data.js"> </script>
<?php	
}
?>