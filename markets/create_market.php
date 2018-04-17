<?php
include('../layout/nav.php');
?>
<div class="right-sidebar-backdrop"></div>
<!-- Main Content -->
			<div class="page-wrapper">
				<div class="container-fluid">
					
					<!-- Title -->
					<div class="row heading-bg">
						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
							<h5 class="txt-dark">Create Market</h5>
						</div>
					
						<!-- Breadcrumb -->
						<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
							<ol class="breadcrumb">
								<li><a href="index.html">Dashboard</a></li>
								<li><a href="#"><span>form</span></a></li>
								<li class="active"><span>form-layout</span></li>
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
										<h6 class="panel-title txt-dark">Form with icon</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="row">
											<div class="col-sm-12 col-xs-12">
												<div class="form-wrap">
													<form>
														<div class="form-group">
															<label class="control-label mb-10" for="exampleInputuname_1">User Name</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="icon-user"></i></div>
																<input type="text" class="form-control" id="exampleInputuname_1" placeholder="Username">
															</div>
														</div>
														<div class="form-group">
															<label class="control-label mb-10" for="exampleInputEmail_1">Email address</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="icon-envelope-open"></i></div>
																<input type="email" class="form-control" id="exampleInputEmail_1" placeholder="Enter email">
															</div>
														</div>
														<div class="form-group">
															<label class="control-label mb-10" for="exampleInputpwd_1">Password</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="icon-lock"></i></div>
																<input type="password" class="form-control" id="exampleInputpwd_1" placeholder="Enter email">
															</div>
														</div>
														<div class="form-group">
															<label class="control-label mb-10" for="exampleInputpwd_2">Confirm Password</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="icon-lock"></i></div>
																<input type="password" class="form-control" id="exampleInputpwd_2" placeholder="Enter email">
															</div>
														</div>
														<div class="form-group">
															<label class="control-label mb-10">Gender</label>
															<div>
																<div class="radio">
																	<input type="radio" name="radio1" id="radio_1" value="option1" checked="">
																	<label for="radio_1">
																	M
																	</label>
																</div>
																<div class="radio">
																	<input type="radio" name="radio1" id="radio_2" value="option2" checked="">
																	<label for="radio_2">
																	F
																	</label>
																</div>
															</div>
														</div>
														<div class="form-group">
															<div class="checkbox checkbox-success">
																<input id="checkbox_1" type="checkbox">
																<label for="checkbox_1"> Remember me </label>
															</div>
														</div>
														<button type="submit" class="btn btn-success mr-10">Submit</button>
														<button type="submit" class="btn btn-default">Cancel</button>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>