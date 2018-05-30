<?php
include('../layout/nav.php');
$id=$_REQUEST['id'];
$market=$_REQUEST['market'];
$query=querydb("SELECT mep.id as mepid ,me.name as marketenvironmentname , p.name as parametername ,mep.parametervalue as pvalue ,me.datemodifed as datemodified from markets_environments me inner join market_environment_parameters mep on mep.marketenvironmentid=me.id inner join parameters p on p.id=mep.parameterid where mepid='$id'");
$query2=querydb("SELECT  p.id as pid ,p.name as pname  FROM parameters p inner join  market_environment_parameters mep  where mep.parameterid=p.id && p.id ='$id'");
$appid=querydb("SELECT * from market_environment_parameters where id = '$id'");
?>
<div class="right-sidebar-backdrop"></div>
<!-- Main Content -->
			<div class="page-wrapper">
				<div class="container-fluid">
					
					<!-- Title -->
					<div class="row heading-bg">
						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
							<h5 class="txt-dark">Edit Market Parameters</h5>
						</div>
					
						<!-- Breadcrumb -->
						<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
							<ol class="breadcrumb">
								<li><a href="index.php">Dashboard</a></li>
								<li><a href="../admin/infrastructure.php"><span>Market Parameters</span></a></li>
								<li class="active"><span>Edit Market Parameters</span></li>
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
													<form action="<?php $exec->editObject('editmarketparameters',$id)?>" method="post">
																		<div class="form-wrap mt-40">

															<input type="text" name="market" value="<?php echo $market?>" class="hidden">
																			<label class="control-label mb-10">Parameter Name</label>
																			<div class="form-group">
																				<select class="form-control" name="parameterid" disabled="">
																				<?php while($r=mysqli_fetch_array($query2,MYSQLI_ASSOC)){ ?>
																				<option value="<?php echo $r['pid']?>"><?php echo $r['pname']?></option>
																				<?php }?>
																				</select>
																			</div>
																		</div>
																		<div class="form-group">
																			<label class="control-label mb-10">Parameter Value</label>
																			<div class="form-group">
																				<input type="text" placeholder="" id="cc"  name="parametervalue" required="" class="form-control">
																			</div>
																		</div>
																		<div class="form-group">
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
						