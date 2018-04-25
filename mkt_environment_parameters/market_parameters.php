
<?php
include('../layout/nav.php');
$market=$_GET['market'];
$mkt=mysqli_fetch_array(querydb("SELECT name from markets_environments where marketid='$market'"));
$query=querydb("SELECT  me.name as marketenvironmentname , p.name as parametername ,mep.parametervalue as pvalue from markets_environments me inner join market_environment_parameters mep on mep.marketenvironmentid=me.id inner join parameters p on p.id=mep.parameterid where me.id='$market'  ");
$query2=querydb("SELECT  p.id as pid ,p.name as pname  FROM parameters p where p.id not in (SELECT mep.parameterid  FROM market_environment_parameters mep where mep.marketenvironmentid='$market')");
$m=mysqli_fetch_array($query,MYSQLI_ASSOC);

?>

	<!-- Bootstrap Wysihtml5 css -->
	<link rel="stylesheet" href="../vendors/bower_components/bootstrap3-wysihtml5-bower/dist/bootstrap3-wysihtml5.css" />

<!-- Right Sidebar Backdrop -->
		<div class="right-sidebar-backdrop"></div>
		<!-- /Right Sidebar Backdrop -->

        <!-- Main Content -->
		<div class="page-wrapper">
            <div class="container-fluid">
				<!-- Title -->
				<div class="row heading-bg">
					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
					  <h5 class="txt-dark"><?php echo $mkt['name']?></h5>
					</div>
					<!-- Breadcrumb -->
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
					  <ol class="breadcrumb">
						<li><a href="index.html">Dashboard</a></li>
						<li><a href="#"><span>apps</span></a></li>
						<li class="active"><span>Settings</span></li>
					  </ol>
					</div>
					<!-- /Breadcrumb -->
				</div>
				<!-- /Title -->
				
				<!-- Row -->
				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-default card-view pa-0">
							<div class="panel-wrapper collapse in">
								<div class="panel-body pa-0">
									<div class="mail-box">
										<div class="row">
											<aside class="col-lg-3 col-md-4 pr-0">
												<div class="mt-20 mb-20 ml-15 mr-15">
													<a href="#myModal" data-toggle="modal"  title="Compose"    class="btn btn-success btn-block">
													Add Parameter
													</a>
													<!-- Modal -->
													<div aria-hidden="true" role="dialog" tabindex="-1" id="myModal" class="modal fade" style="display: none;">
														<div class="modal-dialog">
															<div class="modal-content">
																<div class="modal-header">
																	<button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
																	<h4 class="modal-title">Add Market Parameter</h4>
																</div>
																<div class="modal-body">
																	<form role="form" class="form-horizontal" method="post" action="../controllers/marketcontrolclass.php?action=addmarketparamter&&id=<?php echo $market?>">
																		<div class="form-group">
																			<label class="col-lg-2 control-label">Parameter Name</label>
																			<div class="col-lg-10">
																				<select class="form-control" name="parameterid">
																				<?php while($r=mysqli_fetch_array($query2,MYSQLI_ASSOC)){ ?>
																				<option value="<?php echo $r['pid']?>"><?php echo $r['pname']?></option>
																				<?php }?>
																				</select>
																			</div>
																		</div>
																		<div class="form-group">
																			<label class="col-lg-2 control-label">Value</label>
																			<div class="col-lg-10">
																				<input type="text" placeholder="" id="cc"  name="parametervalue" required="" class="form-control">
																			</div>
																		</div>
																		<div class="form-group">
																			<div class="col-lg-offset-2 col-lg-10">
																				
																				<button class="btn btn-success" type="submit">Send</button>
																			</div>
																		</div>
																	</form>
																</div>
															</div>
															<!-- /.modal-content -->
														</div>
														<!-- /.modal-dialog -->
													</div>
													<!-- /.modal -->
												</div>
												
												</ul>
										</aside>
															
											<aside class="col-lg-9 col-md-8 pl-0">
												<div class="panel panel-refresh pa-0">
													<div class="refresh-container">
														<div class="la-anim-1"></div>
													</div>
													<div class="panel-heading pt-20 pb-20 pl-15 pr-15">
														<div class="pull-left">
															<h6 class="panel-title txt-dark"> <?php echo $mkt['name']?> MARKET PARAMETERS </h6>
														</div>
														<div class="pull-right">
															<form role="search" class="inbox-search inline-block pull-left mr-15">
																<div class="input-group">
																	<input name="example-input1-group2" class="form-control" placeholder="Search" type="text">
																	<span class="input-group-btn">
																	<button type="button" class="btn  btn-default" data-target="#search_form" data-toggle="collapse" aria-label="Close" aria-expanded="true"><i class="zmdi zmdi-search"></i></button>
																	</span>
																</div>
															</form>
															<a href="#" class="pull-left inline-block refresh">
																<i class="zmdi zmdi-replay"></i>
															</a>
														</div>
														<div class="clearfix"></div>
													</div>
													<div class="panel-wrapper collapse in">
														<div class="panel-body inbox-body pa-0">
															<div class="mail-option pl-15 pr-15">
																<div class="chk-all">
																	<div class="checkbox checkbox-default inline-block">
																		
																	</div>
																	<div class="btn-group">
																		<a data-toggle="dropdown" href="#" class="btn  all" aria-expanded="false">
																		All
																		<i class="fa fa-angle-down "></i>
																		</a>
																		<ul class="dropdown-menu">
																			<li><a href="#"> None</a></li>
																			<li><a href="#"> Read</a></li>
																			<li><a href="#"> Unread</a></li>
																		</ul>
																	</div>
																	<div class="btn-group">
																		
																	</div>
																	<div class="btn-group">
																		
																	</div>
																</div>
																
															</div>
															<div class="table-responsive mb-0">
																<table class="table table-inbox table-hover mb-0">
																	<THEAD>
																		<th></th>
																		<th>PARAMETER NAME</th>
																		<th>PARAMETER VALUE</th>
																		<th>DATE ADDED</th>
																	</THEAD>
																	<tbody>
																		<?php 
																		$no=1;
																		while($p=mysqli_fetch_array($query,MYSQLI_ASSOC)){?>
																		<tr class="unread">
																			<td class="inbox-small-cells">
																				<?php echo $no ?>
																				</div>
																				
																			</td>
																			<td class="view-message  dont-show"><?php echo $p['parametername']?><span class="label label-warning pull-right"></span></td>
																			<td class="view-message "><?php echo $p['parametervalue']?></td>
																			<td class="view-message  text-right">
																				<span  class="time-chat-history inline-block"><?php echo $p['datemodified']?></span>
																			</td>
																		</tr>
																		<?php } $no++?>
																		
																	</tbody>
																</table>
															</div>
														</div>
													</div>
												</div>
											</aside>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Row -->
			</div>
