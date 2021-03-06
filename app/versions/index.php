<?php
include('../layout/nav.php');
$markets=querydb("SELECT * from markets");
$versions=querydb("SELECT * from versions");
$environments=querydb("SELECT * FROM environments");

?>			
			<!-- Right Sidebar Backdrop -->
			<div class="right-sidebar-backdrop"></div>
			<!-- /Right Sidebar Backdrop -->
			
			<!-- Main Content -->
			<div class="page-wrapper">
				<div class="container-fluid">
					
					<!-- Title -->
					<div class="row heading-bg">
						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						  <h5 class="txt-dark">form wizard</h5>
						</div>
						<!-- Breadcrumb -->
						<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						  <ol class="breadcrumb">
							<li><a href="index.html">Dashboard</a></li>
<!-- 							<li><a href="#"><span>Versions</span></a></li>
 -->							<li class="active"><span>Versions</span></li>
						  </ol>
						</div>
						<!-- /Breadcrumb -->
					</div>
					<!-- /Title -->
					
				
					<!-- Row -->
					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">Versioning and Releases</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<form id="example-advanced-form" action="#">
												<h3><span class="number"><i class="icon-user-following txt-black"></i></span><span class="head-font capitalize-font">Select Market</span></h3>
											<fieldset>
												<div class="row">
													<div class="col-sm-6">
														<div class="form-wrap">
															<div class="form-group">
													<label class="control-label mb-10"> Market</label>
													<select class="form-control select2" name="market">
														<option>Select</option>
															<?php while($row=mysqli_fetch_array($markets,MYSQLI_ASSOC)){?>
															<option value="<?php echo $row['id']?>"><?php echo $row['market']?></option>
															<?php }?>
														
														
													</select>
												</div>
															
														</div>
													</div>
												</div>
											</fieldset>
											<h3><span class="number"><i class="icon-user-following txt-black"></i></span><span class="head-font capitalize-font">Create Release</span></h3>
											<fieldset>
											<div class="row">
													<div class="col-sm-6">
														<div class="form-wrap">
															<div class="form-group">
													<label class="control-label mb-10"> Version</label>
													<select class="form-control select2" name="market">
														<option>Select</option>
															<?php while($row=mysqli_fetch_array($versions,MYSQLI_ASSOC)){?>
															<option value="<?php echo $row['id']?>"><?php echo $row['versionname']?></option>
															<?php }?>
														
														
													</select>
												</div>
																						<div class="row">
														<div class="col-md-10">
															<div class="panel panel-default card-view">
																<div class="panel-heading">
																	<div class="pull-left">
																		<h6 class="panel-title txt-dark">Release notes</h6>
																	</div>
																	<div class="clearfix"></div>
																</div>
																<div class="panel-wrapper collapse in">
																	<div class="panel-body">
																		<div class="summernote"></div>
																	</div>
																</div>
															</div>
														</div>
													</div>

												<script type="text/javascript">
													function as(){
														t=document.getElementById('t');
														t.style.backgroundColor='blue';
													}
												</script>	
														</div>
													</div>
												</div>
											</fieldset>
										 	
											<h3><span class="number"><i class="icon-bag txt-black"></i></span><span class="head-font capitalize-font">Deploy release</span></h3>
											<fieldset>
												<div class="row">
													<div class="col-sm-12">
														<div class="form-wrap">
															<div class="form-group">
																<label class="control-label mb-10" for="exampleCountry">Deploy to</label>
																<select class="form-control select2" name="environment">
														<option>Select</option>
															<?php while($row=mysqli_fetch_array($environments,MYSQLI_ASSOC)){?>
															<option value="<?php echo $row['id']?>"><?php echo $row['name']?></option>
															<?php }?>
														
								
													</select>
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
					<!-- /Row -->
					
				</div>
				
			<!-- Footer -->
			<footer class="footer container-fluid pl-30 pr-30">
				<div class="row">
					<div class="col-sm-12">
						<p>2018 &copy; Droopy. Pampered by Hencework</p>
					</div>
				</div>
			</footer>
			<!-- /Footer -->
				
			</div>
			<!-- /Main Content -->
		</div>
		<!-- /#wrapper -->
		
		<!-- JavaScript -->
		
		<!-- jQuery -->
		<script src="../vendors/bower_components/jquery/dist/jquery.min.js"></script>
		
		<!-- Bootstrap Core JavaScript -->
		<script src="../vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
		<script src="../vendors/bower_components/jasny-bootstrap/dist/js/jasny-bootstrap.min.js"></script>		
		
		<!-- Form Wizard JavaScript -->
		<script src="../vendors/bower_components/jquery.steps/build/jquery.steps.min.js"></script>
		<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js"></script>
		
		<!-- Form Wizard Data JavaScript -->
		<script src="../dist/js/form-wizard-data.js"></script>
		
		<!-- Data table JavaScript -->
		<script src="../vendors/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
		
		<!-- Bootstrap Touchspin JavaScript -->
		<script src="../vendors/bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js"></script>
		
		<!-- Starrr JavaScript -->
		<script src="../dist/js/starrr.js"></script>
		
		<!-- Slimscroll JavaScript -->
		<script src="../dist/js/jquery.slimscroll.js"></script>
	
		<!-- Fancy Dropdown JS -->
		<script src="../dist/js/dropdown-bootstrap-extended.js"></script>
		
		<!-- Owl JavaScript -->
		<script src="../vendors/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>
	
		<!-- Switchery JavaScript -->
		<script src="../vendors/bower_components/switchery/dist/switchery.min.js"></script>
	
		<!-- Init JavaScript -->
		<script src="dist/js/init.js"></script>
		<!-- Summernote Plugin JavaScript -->
		<script src="../vendors/bower_components/summernote/dist/summernote.min.js"></script>
				
		<!-- Summernote Wysuhtml5 Init JavaScript -->
		<script src="../dist/js/summernote-data.js"></script>