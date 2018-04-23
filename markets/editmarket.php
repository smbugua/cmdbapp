<?php
include('../layout/nav.php');
$id=$_REQUEST['id'];
$row=processquery("SELECT * from markets where id='$id' ");
?>
<div class="right-sidebar-backdrop"></div>
<!-- Main Content -->
			<div class="page-wrapper">
				<div class="container-fluid">
					
					<!-- Title -->
					<div class="row heading-bg">
						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
							<h5 class="txt-dark">Edit Market</h5>
						</div>
					
						<!-- Breadcrumb -->
						<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
							<ol class="breadcrumb">
								<li><a href="index.php">Dashboard</a></li>
								<li><a href="../admin/infrastructure.php"><span>Infrastructure</span></a></li>
								<li class="active"><span>Edit Market</span></li>
							</ol>
						</div>
						<!-- /Breadcrumb -->
					
					</div>
					<!-- /Title -->
					
					<!-- Row -->
					<div class="row">
						<div class="col-md-6">
							<div class="panel panel-default card-view">
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="row">
											<div class="col-sm-12 col-xs-12">
												<div class="form-wrap">
													<form action="<?php $exec->editObject('editmarket',$id)?>" method="post">
														<div class="form-group">
															<label class="control-label mb-10"  for="exampleInputuname_1">Market Name</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="icon-user"></i></div>
																<input type="text" class="form-control" id="exampleInputuname_1" name="market" value="<?php echo $row['market']?>">
															</div>
														</div>
															<div class="form-group">
															<label class="control-label mb-10"  for="exampleInputuname_1">Market Abbreviation</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="icon-user"></i></div>
																<input type="text" class="form-control" name="mkt" id="exampleInputuname_1" value="<?php echo $row['mkt']?>" >
															</div>
														</div>
														
														
														
												
														<button type="submit" class="btn btn-success mr-10" name="addmarket">Edit</button>
														<button type="submit" class="btn btn-default" name="cancel">Cancel</button>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php include_once('../layout/footer.php');?>