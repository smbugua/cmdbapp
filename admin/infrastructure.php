<?php
include('../layout/nav.php');
?>
<div class="right-sidebar-backdrop"></div>
		<!-- /Right Sidebar Backdrop -->

        <!-- Main Content -->
		<div class="page-wrapper">
            <div class="container-fluid pt-25">
				<!-- Row -->
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
													<span class="weight-500 uppercase-font block font-13">Markets</span>
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
													<span class="txt-dark block counter"><span class="counter-anim"><?php echo get_nodes()?></span></span>
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
													<span class="txt-dark block counter"><span class="counter-anim"><?php  echo get_apps()?></span></span>
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
				
				<!-- Row -->
				<div class="row">
						<div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
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
										<a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false" role="button"><i class="zmdi zmdi-more-vert"></i></a>
										<ul class="dropdown-menu bullet dropdown-menu-right"  role="menu">
											<li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-reply" aria-hidden="true"></i>Devices</a></li>
											<li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-share" aria-hidden="true"></i>General</a></li>
											<li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-trash" aria-hidden="true"></i>Referral</a></li>
										</ul>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
                                <div class="panel-body">
									<ul>
										<a href="../markets/create_market.php" class=" btn btn-info btn-outline btn-rounded">Add Market</a> 
										<a href="../environments/create_environment.php" class=" btn btn-primary btn-outline btn-rounded">Add Environment</a>  
										<a href="../nodes/create_node.php" class=" btn btn-success btn-outline btn-rounded">Add Node</a> 
										<a href="../apps/create_app.php" class=" btn btn-danger btn-outline btn-rounded">Add App</a> 
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
                    </div>
				
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
						<div class="panel panel-default card-view bg-green">
							<div class="panel-wrapper collapse in">
                                <div class="panel-body sm-data-box-1">
									<span class="uppercase-font weight-500 font-14 block text-center txt-light">Deployments</span>	
									<div class="cus-sat-stat weight-500 txt-light text-center mt-5">
										<span class="counter-anim">93.13</span><span>%</span>
									</div>
									<div class="progress-anim mt-20">
										<div class="progress">
											<div class="progress-bar progress-bar-light
											wow animated progress-animated" role="progressbar" aria-valuenow="93.12" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
									<ul class="flex-stat txt-light mt-5">
										<li>
											<span class="block">Previous</span>
											<span class="block weight-500 font-15">79.82</span>
										</li>
										<li>
											<span class="block">% Change</span>
											<span class="block weight-500 font-15">+14.29</span>
										</li>
										<li>
											<span class="block">Trend</span>
											<span class="block">
												<i class="zmdi zmdi-trending-up font-20"></i>
											</span>
										</li>
									</ul>
								</div>
                            </div>
                        </div>
                    </div>
                    
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">    
						<div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">Apps</h6>
								</div>
								<div class="pull-right">
									<!--<a href="#" class="pull-left inline-block mr-15">
										<i class="zmdi zmdi-download"></i>
									</a> -->
									<a href="#" class="pull-left inline-block close-panel" data-effect="fadeOut">
										<i class="zmdi zmdi-close"></i>
									</a>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<div>
										<?php 
										$results=querydb("SELECT name from apps order by name asc ");
										$no=1;
										while( $row=mysqli_fetch_array($results,MYSQLI_ASSOC)){ ?>
										<span class="pull-left inline-block capitalize-font txt-dark">
											<?php echo $row['name']?>
										</span>
										<div class="clearfix"></div>
										<hr class="light-grey-hr row mt-10 mb-10"/>
										<span class="pull-left inline-block capitalize-font txt-dark">
											<?php } $no ++; ?>
										</span>
										<!--<div class="clearfix"></div>
										<hr class="light-grey-hr row mt-10 mb-10"/>
										<span class="pull-left inline-block capitalize-font txt-dark">
											CDR-Parser
										</span>
										<div class="clearfix"></div>
										<hr class="light-grey-hr row mt-10 mb-10"/>
										<span class="pull-left inline-block capitalize-font txt-dark">
											Float Manager
										</span>
										<div class="clearfix"></div> -->
									</div>
								</div>	
							</div>
						</div>
					</div>
				
				</div>
				<!-- /Row -->
				
				<!-- Row -->
				<div class="row">
					<div class="col-lg-8 col-md-7 col-sm-12 col-xs-12">
						<div class="panel panel-default card-view panel-refresh">
							<div class="refresh-container">
								<div class="la-anim-1"></div>
							</div>
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">Markets</h6>
								</div>
								<div class="pull-right">
									<a href="#" class="pull-left inline-block refresh mr-15">
										<i class="zmdi zmdi-replay"></i>
									</a>
									<a href="#" class="pull-left inline-block full-screen mr-15">
										<i class="zmdi zmdi-fullscreen"></i>
									</a>
									<div class="pull-left inline-block dropdown">
										<a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false" role="button"><i class="zmdi zmdi-more-vert"></i></a>
										<ul class="dropdown-menu bullet dropdown-menu-right"  role="menu">
											<li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-reply" aria-hidden="true"></i>Edit</a></li>
											<li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-share" aria-hidden="true"></i>Delete</a></li>
											<li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-trash" aria-hidden="true"></i>New</a></li>
										</ul>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body row pa-0">
									<div class="table-wrap">
										<div class="table-responsive">
											<table class="table table-hover mb-0">
												<thead>
													<tr>
														<th>Market</th>
														<th>Abbreviation</th>
														<th>Environments</th>
														<th>Endpoints</th>
														<th>Status</th>
													</tr>
												</thead>
												<tbody>

												<?php  
												$r=querydb("SELECT id,market,mkt FROM markets order by market asc");
												while($row=mysqli_fetch_assoc($r)){
												?>
													<tr>
														<td><span class="txt-dark weight-500"><?php echo $row['market']?></span></td>
														<td><?php echo $row['mkt']?></td>
														<td><span class="txt-success"><i class="zmdi zmdi-caret-up mr-10 font-20"></i><span><?php echo get_envs()?></span></span></td>
														<td>
															<span class="txt-dark weight-500"><?php echo get_nodes()?></span>
														</td>
														<td>
															<span class="label label-primary">active</span>
														</td>
													</tr>
													<?php }?>
												</tbody>
											</table>
										</div>
									</div>	
								</div>	
							</div>
						</div>
					</div>
				
				</div>	
				<!-- Row -->
			</div>
			


<?= include('../layout/footer.php');