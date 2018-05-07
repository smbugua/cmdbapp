<?php
include('../layout/nav.php');
$result=querydb("SELECT id,name FROM apps order by name asc;");
$result2=querydb("SELECT id,name FROM markets_environments order by name asc");

?>
<div class="right-sidebar-backdrop"></div>
		<!-- /Right Sidebar Backdrop -->

		<!-- Summernote css -->
		<link rel="stylesheet" href="../vendors/bower_components/summernote/dist/summernote.css" />	

		<!-- select2 CSS -->
		<link href="http://cdnjs.cloudflare.com/ajax/libs/select2/3.2/select2.css" rel="stylesheet"/>

        <!-- Main Content -->
		<div class="page-wrapper">
			<div class="container-fluid pt-25">
		<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
						<div class="panel panel-default card-view pa-0">
							<div class="panel-wrapper collapse in">
								<div class="panel-body pa-0">
									<div class="sm-data-box">
										<div class="container-fluid">
											<div class="row">
												<div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
													<span class="txt-dark block counter"><span class="counter-anim"><?php echo  get_markets()?></span></span>
													<span class="weight-500 uppercase-font block font-13">Versions</span>
												</div>
												<div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
													<i class="icon-user-following data-right-rep-icon txt-light-grey"></i>
												</div>
											</div>	
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
						<div class="panel panel-default card-view pa-0">
							<div class="panel-wrapper collapse in">
								<div class="panel-body pa-0">
									<div class="sm-data-box">
										<div class="container-fluid">
											<div class="row">
												<div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
													<span class="txt-dark block counter"><span class="counter-anim"><?php echo  get_envs()?></span></span>
													<span class="weight-500 uppercase-font block">Environments</span>
												</div>
												<div class="col-xs-6 text-center  pl-0 pr-0 pt-25  data-wrap-right">
													<div class="sp-small-chart" id="sparkline_4" ></div>
												</div>
											</div>	
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
						<div class="panel panel-default card-view pa-0">
							<div class="panel-wrapper collapse in">
								<div class="panel-body pa-0">
									<div class="sm-data-box">
										<div class="container-fluid">
											<div class="row">
												<div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
													<span class="txt-dark block counter"><span class="counter-anim"><?php   echo get_nodes() ?></span></span>
													<span class="weight-500 uppercase-font block">Nodes</span>
												</div>
												<div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
													<i class="icon-control-rewind data-right-rep-icon txt-light-grey"></i>
												</div>
											</div>	
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
						<div class="panel panel-default card-view pa-0">
							<div class="panel-wrapper collapse in">
								<div class="panel-body pa-0">
									<div class="sm-data-box">
										<div class="container-fluid">
											<div class="row">
												<div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
													<span class="txt-dark block counter"><span class="counter-anim"><?php  ?></span></span>
													<span class="weight-500 uppercase-font block">Applications</span>
												</div>
												<div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
													<i class="icon-layers data-right-rep-icon txt-light-grey"></i>
												</div>
											</div>	
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Row -->
				<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
						<div class="panel panel-default card-view pa-0">
							<div class="panel-wrapper collapse in">
								<div class="panel-body pa-0">
									<div class="sm-data-box">
										<div class="container-fluid">
											<div class="row">
												<div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
													<span class="txt-dark block counter"><span class="counter-anim"><?php   ?></span></span>
													<span class="weight-500 uppercase-font block font-13">DEPLOYMENTS</span>
												</div>
												<div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
													<i class="icon-user-following data-right-rep-icon txt-light-grey"></i>
												</div>
											</div>	
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
						<div class="panel panel-default card-view pa-0">
							<div class="panel-wrapper collapse in">
								<div class="panel-body pa-0">
									<div class="sm-data-box">
										<div class="container-fluid">
											<div class="row">
												<div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
													<span class="txt-dark block counter"><span class="counter-anim"><?php  ?></span></span>
													<span class="weight-500 uppercase-font block">Versions</span>
												</div>
												<div class="col-xs-6 text-center  pl-0 pr-0 pt-25  data-wrap-right">
													<div class="sp-small-chart" id="sparkline_4" ></div>
												</div>
											</div>	
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
						<div class="panel panel-default card-view pa-0">
							<div class="panel-wrapper collapse in">
								<div class="panel-body pa-0">
									<div class="sm-data-box">
										<div class="container-fluid">
											<div class="row">
												<div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
													<span class="txt-dark block counter"><span class="counter-anim"><?php ?></span></span>
													<span class="weight-500 uppercase-font block">Successful</span>
												</div>
												<div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
													<i class="icon-control-rewind data-right-rep-icon txt-light-grey"></i>
												</div>
											</div>	
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
						<div class="panel panel-default card-view pa-0">
							<div class="panel-wrapper collapse in">
								<div class="panel-body pa-0">
									<div class="sm-data-box">
										<div class="container-fluid">
											<div class="row">
												<div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
													<span class="txt-dark block counter"><span class="counter-anim"><?php  echo get_apps()?></span></span>
													<span class="weight-500 uppercase-font block">Rollbacks</span>
												</div>
												<div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
													<i class="icon-layers data-right-rep-icon txt-light-grey"></i>
												</div>
											</div>	
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

					<div class="row">
						<!--div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
                        <div class="panel panel-default card-view panel-refresh">
							<div class="refresh-container">
								<div class="la-anim-1"></div>
							</div>
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">Actions</h6>
								</div>
								<div class="pull-right">
									<a href="#" class="pull-left inline-block refresh mr-15">
										<i class="zmdi zmdi-replay"></i>
									</a>
									<a href="#" class="pull-left inline-block full-screen mr-15">
										<i class="zmdi zmdi-fullscreen"></i>
									</a>
									<div class="pull-left inline-block dropdown">
									
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
                                <div class="panel-body">
									<ul>
										<a href="../versions/index.php" class=" btn btn-info btn-outline btn-rounded">Version</a> 
										<a href="../environments/create_environment.php" class=" btn btn-primary btn-outline btn-rounded">Release</a>  
										<a href="../nodes/create_node.php" class=" btn btn-success btn-outline btn-rounded">Files</a> 
										<a href="../apps/create_app.php" class=" btn btn-danger btn-outline btn-rounded">Test Nodes</a> 
									</ul>
									<ul class="flex-stat mt-40">
										<li>
											<span class="block">Users</span>
											<span class="block txt-dark weight-500 font-18"><span class="counter-anim"><?php echo get_users()?></span></span>
										</li>
										<li>
											<span class="block">Monthly Users</span>
											<span class="block txt-dark weight-500 font-18"><span class="counter-anim">1,23,432</span></span>
										</li>
										<li>
											<span class="block">Trend</span>
											<span class="block">
												<i class="zmdi zmdi-trending-up txt-success font-24"></i>
											</span>
										</li>
									</ul>
								</div>
							</div>
                        </div>
                    </div-->


 											<div class="col-md-4">
							<div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">Actions</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div  class="panel-wrapper collapse in">
									<div  class="panel-body">
										<!-- sample modal content -->
										<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
														<h5 class="modal-title" id="myModalLabel">Project Options</h5>

													<form action="../deployments/deploymentswizard.php" method="post" >
													</div>
													<div class="modal-body">
														<h5 class="mb-15">Active Projects and Environments</h5>
														<label>Applications</label>
														<select class="form-control" name="appid">
															<?php while ($apps=mysqli_fetch_array($result,MYSQLI_ASSOC)) { ?>
																<option value="<?php echo $apps['id']?>"><?php echo $apps['name']?></option>
														<?php } ?>
														</select>
														<label>Market Environments</label>
														<select class="form-control select2" name="me_id" id="el">
															<?php while ($mkt=mysqli_fetch_array($result2,MYSQLI_ASSOC)) { ?>
																<option value="<?php echo $mkt['id']?>"><?php echo $mkt['name']?></option>
														<?php } ?>
														</select>
													</div>
													<div class="modal-footer">
														<button  class="btn btn-info" type="submit">Next</button>
													</div>
												</div>
											</form>
												<!-- /.modal-content -->
											</div>
											<!-- /.modal-dialog -->
										</div>
										<!-- /.modal -->
										<!-- Button trigger modal -->
										<a data-toggle="modal" data-target="#myModal" class="btn btn-success">Choose Project To Deploy</a>  
									</div>
								</div>
							</div>
						</div>

                    </div>
				<!-- /Row -->



				<script type="text/javascript">
					function as(){
						t=document.getElementById('t');
						t.style.backgroundColor='blue';
					}


					// In your Javascript (external .js resource or <script> tag)
$(document).ready(function() {
    

  $('#e1').select2({

    });
		
});

		</script>


<?php include('../layout/footer.php');?>
		<!-- Summernote Plugin JavaScript -->
		<script src="../vendors/bower_components/summernote/dist/summernote.min.js"></script>
	<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/select2/3.2/select2.css"></script>


		<!-- Summernote Wysuhtml5 Init JavaScript -->
		<script src="../dist/js/summernote-data.js"></script>