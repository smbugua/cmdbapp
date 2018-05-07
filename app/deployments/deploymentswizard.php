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
										<form id="example-advanced-form" action="#">
											<h3><span class="number"><i class="icon-user-following txt-black"></i></span><span class="head-font capitalize-font">Version Overview</span></h3>
											<fieldset>
												<div class="row">
													<div class="col-sm-6">
														<div class="form-wrap">
																	<div class="form-group">
																<div class="input-group">
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
																	
																	<input type="text" class="form-control required" style="color:green" name="version" id="version" placeholder="Version" value="0.0 (No Previos Release exists)" readonly="" disabled="">
																	<?php } elseif($v>0){ ?>
																	<input type="text" class="form-control required"  name="version" id="version" placeholder="" value="<?php echo $v?>" readonly="" disabled="" >
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
												<div class="button-box"> 
													<a id="select-all" class="btn btn-danger btn-outline mr-10 mt-15" href="#">Test Connection all</a> 
													<textarea id="console" class="form-control" cols="10" rows="5" readonly=""></textarea>
												</div>
											</div>
															</div>
															
															
														</div>
													</div>
												</div>
											</fieldset>
										 
											<h3><span class="number"><i class="icon-credit-card txt-black"></i></span><span class="head-font capitalize-font">payment</span></h3>
												<fieldset>
												<!--CREDIT CART PAYMENT-->
												<div class="row">
													<div class="col-sm-12">
														<div class="form-group">
															<label class="control-label mb-10" for="CreditCardType">card type:</label>
															<select id="CreditCardType" name="CreditCardType" class="form-control required">
																<option value="5">Visa</option>
																<option value="6">MasterCard</option>
																<option value="7">American Express</option>
																<option value="8">Discover</option>
															</select>
														</div>
														<div class="form-group">
															<label class="control-label mb-10" for="cardNo">Credit Card Number:</label>
															<input type="text" id="cardNo" data-mask="9999-9999-9999-9999" class="form-control required" name="car_number" value="" />
														</div>
														<div class="form-group">
															<label class="control-label mb-10" for="cvv">card cvv:</label>
															<input type="text" id="cvv" class="form-control  required" data-mask="999" name="car_code" value="" />
														</div>
														<div class="form-group">
															<label class="control-label mb-10">expiration date:</label>
															<div class="row">
																<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
																	<select class="form-control required" name="month">
																		<option value="">Month</option>
																		<option value="1">01</option>
																		<option value="2">02</option>
																		<option value="3">03</option>
																		<option value="4">04</option>
																		<option value="5">05</option>
																		<option value="6">06</option>
																	</select>
																</div>
																<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
																	<select class="form-control required" name="year">
																		<option value="1">Year</option>
																		<option value="2">2001</option>
																	</select>
																</div>
															</div>
														</div>
														<div class="form-group mb-0">
															<div class="row">
																<div class="col-md-12">
																	<ul class="cards">
																		<li class="visa hand"><img src="../img/1-s.png" alt="card"/></li>
																		<li class="mastercard hand"><img src="../img/2-s.png" alt="card"/></li>
																		<li class="amex hand"><img src="../img/3-s.png" alt="card"/></li>
																		<li class="amex hand"><img src="../img/4-s.png" alt="card"/></li>
																		</ul>
																	<div class="clearfix"></div>
																</div>
															</div>
														</div>
														
													</div>
												</div>
												<!--CREDIT CART PAYMENT END-->
											</fieldset>
										 
											<h3><span class="number"><i class="icon-basket-loaded txt-black"></i></span><span class="head-font capitalize-font">review cart</span></h3>
											<fieldset>
													<table class="table display product-overview" id="datable_1">
														<thead>
															<tr>
																<th>Photo</th>
																<th>Product</th>
																<th>Quantity</th>
																<th>price</th>
																<th>Actions</th>
															</tr>
														</thead>
														<tfoot>
															<tr>
																<th colspan="3">Subtotal:</th>
																<th></th>
																<th></th>
															</tr>
														</tfoot>
														<tbody>
															<tr>
																<td>
																	<img src="../img/chair.jpg" alt="iMac" width="80">
																</td>
																<td>Rounded Chair</td>
																<td>
																<input class="vertical-spin" type="text" data-bts-button-down-class="btn btn-default"   data-bts-button-up-class="btn btn-default" value="20" name="vertical-spin">
																</td>
																<td>$400</td>
																
																<td><a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></a></td>
															</tr>
															<tr>
																<td>
																	<img src="../img/chair2.jpg" alt="iMac" width="80">
																</td>
																<td>Rounded Chair</td>
																<td>
																	<input class="vertical-spin" type="text" data-bts-button-down-class="btn btn-default"   data-bts-button-up-class="btn btn-default" value="10" name="vertical-spin">
																</td>
																<td>$450</td>
																<td><a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></a></td>
															</tr>
															<tr>
																<td>
																	<img src="../img/chair3.jpg" alt="iMac" width="80">
																</td>
																<td>Rounded Chair</td>
																<td>
																<input class="vertical-spin" type="text" data-bts-button-down-class="btn btn-default"   data-bts-button-up-class="btn btn-default" value="15" name="vertical-spin">
																</td>
																<td>$470</td>
																
																<td><a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></a></td>
															</tr>
														</tbody>
													</table>
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