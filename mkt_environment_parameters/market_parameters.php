<?php
include('../layout/nav.php');
$market=$_POST['market'];
$query=querydb("SELECT p.parameterid from market_environment_parameters where paramenterid not in (SELECT parameterid from market_environment_parameters where  marketid='$market') ");
$query2=querydb("SELECT p.name as pname ,p.value as pvalue from parameters php inner join market_environment_parameters me on me.paramterid=p.id where me.marketid='$market'");
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
					  <h5 class="txt-dark"><?php echo $market?></h5>
					</div>
					<!-- Breadcrumb -->
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
					  <ol class="breadcrumb">
						<li><a href="index.html">Dashboard</a></li>
						<li><a href="#"><span>apps</span></a></li>
						<li class="active"><span>inbox</span></li>
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
													Compose
													</a>
													<!-- Modal -->
													<div aria-hidden="true" role="dialog" tabindex="-1" id="myModal" class="modal fade" style="display: none;">
														<div class="modal-dialog">
															<div class="modal-content">
																<div class="modal-header">
																	<button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
																	<h4 class="modal-title">Compose</h4>
																</div>
																<div class="modal-body">
																	<form role="form" class="form-horizontal">
																		<div class="form-group">
																			<label class="col-lg-2 control-label">To</label>
																			<div class="col-lg-10">
																				<input type="text" placeholder="" id="inputEmail1" class="form-control">
																			</div>
																		</div>
																		<div class="form-group">
																			<label class="col-lg-2 control-label">Cc / Bcc</label>
																			<div class="col-lg-10">
																				<input type="text" placeholder="" id="cc" class="form-control">
																			</div>
																		</div>
																		<div class="form-group">
																			<label class="col-lg-2 control-label">Subject</label>
																			<div class="col-lg-10">
																				<input type="text" placeholder="" id="inputPassword1" class="form-control">
																			</div>
																		</div>
																		<div class="form-group">
																			<label class="col-lg-2 control-label">Message</label>
																			<div class="col-lg-10">
																				<textarea class="textarea_editor form-control" rows="15" placeholder="Enter text ..."></textarea>
																			</div>
																		</div>
																		<div class="form-group">
																			<div class="col-lg-offset-2 col-lg-10">
																				<div class="fileupload btn btn-info btn-anim mr-10"><i class="fa fa-paperclip"></i><span class="btn-text">attachments</span>
																					<input type="file" class="upload">
																				</div>
																				
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
												<ul class="inbox-nav mb-30">
													<li class="active">
														<a href="#"><i class="zmdi zmdi-inbox"></i> Inbox <span class="label label-danger ml-10">2</span></a>
													</li>
													<li>
														<a href="#"><i class="zmdi zmdi-email-open"></i> Sent Mail</a>
													</li>
													<li>
														<a href="#"><i class="zmdi zmdi-bookmark-outline"></i> Important</a>
													</li>
													<li>
														<a href="#"><i class="zmdi zmdi-folder-outline"></i> Drafts <span class="label label-info ml-10">30</span></a>
													</li>
													<li>
														<a href="#"><i class="zmdi zmdi-delete"></i> Trash</a>
													</li>
												</ul>
												<h6 class="pl-15 mb-20">Labels</h6>
												<ul class="inbox-nav mb-30">
													<li> <a href="#"> <i class=" fa fa-stop txt-danger"></i> Work </a> </li>
													<li> <a href="#"> <i class=" fa fa-stop txt-success"></i> Design </a> </li>
													<li> <a href="#"> <i class=" fa fa-stop txt-info "></i> Family </a>
													</li>
													<li> <a href="#"> <i class=" fa fa-stop txt-warning "></i> Friends </a>
													</li>
													<li> <a href="#"> <i class=" fa fa-stop txt-primary "></i> Office </a>
													</li>
												</ul>
												<h6 class="pl-15 mb-20">online</h6>
													<ul class="chat-list-wrap">
													<li class="chat-list">
														<div class="chat-body">
															<a href="javascript:void(0)">
																<div class="chat-data">
																	<img class="user-img img-circle"  src="../img/user.png" alt="user"/>
																	<div class="user-data">
																		<span class="name block capitalize-font">Clay Masse</span>
																		<span class="time block truncate txt-grey">No one saves us but ourselves.</span>
																	</div>
																	<div class="status away"></div>
																	<div class="clearfix"></div>
																</div>
															</a>
															<a href="javascript:void(0)">
																<div class="chat-data">
																	<img class="user-img img-circle"  src="../img/user1.png" alt="user"/>
																	<div class="user-data">
																		<span class="name block capitalize-font">Evie Ono</span>
																		<span class="time block truncate txt-grey">Unity is strength</span>
																	</div>
																	<div class="status offline"></div>
																	<div class="clearfix"></div>
																</div>
															</a>
															<a href="javascript:void(0)">
																<div class="chat-data">
																	<img class="user-img img-circle"  src="../img/user2.png" alt="user"/>
																	<div class="user-data">
																		<span class="name block capitalize-font">Madalyn Rascon</span>
																		<span class="time block truncate txt-grey">Respect yourself if you would have others respect you.</span>
																	</div>
																	<div class="status online"></div>
																	<div class="clearfix"></div>
																</div>
															</a>
															<a href="javascript:void(0)">
																<div class="chat-data">
																	<img class="user-img img-circle"  src="../img/user3.png" alt="user"/>
																	<div class="user-data">
																		<span class="name block capitalize-font">Mitsuko Heid</span>
																		<span class="time block truncate txt-grey">I’m thankful.</span>
																	</div>
																	<div class="status online"></div>
																	<div class="clearfix"></div>
																</div>
															</a>
															<a href="javascript:void(0)">
																<div class="chat-data">
																	<img class="user-img img-circle"  src="../img/user.png" alt="user"/>
																	<div class="user-data">
																		<span class="name block capitalize-font">Ezequiel Merideth</span>
																		<span class="time block truncate txt-grey">Patience is bitter.</span>
																	</div>
																	<div class="status offline"></div>
																	<div class="clearfix"></div>
																</div>
															</a>
														</div>
													</li>
												</ul>
										</aside>
															
											<aside class="col-lg-9 col-md-8 pl-0">
												<div class="panel panel-refresh pa-0">
													<div class="refresh-container">
														<div class="la-anim-1"></div>
													</div>
													<div class="panel-heading pt-20 pb-20 pl-15 pr-15">
														<div class="pull-left">
															<h6 class="panel-title txt-dark">inbox</h6>
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
																		<input type="checkbox" id="checkbox051"/>
																		<label for="checkbox051"></label>
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
																		<a data-toggle="dropdown" href="#" class="btn  blue">
																		Move to
																		<i class="fa fa-angle-down "></i>
																		</a>
																		<ul class="dropdown-menu">
																			<li><a href="#">Personal</a></li>
																			<li><a href="#">Social</a></li>
																			<li class="divider"></li>
																			<li><a href="#">Promotional</a></li>
																			<li class="divider"></li>
																			<li><a href="#">Updates</a></li>
																		</ul>
																	</div>
																	<div class="btn-group">
																		<a data-toggle="dropdown" href="#" class="btn  blue" aria-expanded="false">
																		More
																		<i class="fa fa-angle-down "></i>
																		</a>
																		<ul class="dropdown-menu">
																			<li><a href="#"><i class="fa fa-pencil"></i> Mark as Read</a></li>
																			<li><a href="#"><i class="fa fa-ban"></i> Spam</a></li>
																			<li class="divider"></li>
																			<li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
																		</ul>
																	</div>
																</div>
																<ul class="unstyled inbox-pagination">
																	<li><span>1-10 of 234</span></li>
																	<li>
																		<a class="pl-15 pr-15" href="#"><i class="fa fa-angle-left  pagination-left"></i></a>
																	</li>
																	<li>
																		<a href="#"><i class="fa fa-angle-right pagination-right"></i></a>
																	</li>
																</ul>
															</div>
															<div class="table-responsive mb-0">
																<table class="table table-inbox table-hover mb-0">
																	<tbody>
																		<tr class="unread">
																			<td class="inbox-small-cells">
																				<div class="checkbox checkbox-default inline-block">
																					<input type="checkbox" id="checkbox012"/>
																					<label for="checkbox012"></label>
																				</div>
																				<i class="zmdi zmdi-star inline-block font-16"></i>
																			</td>
																			<td class="view-message  dont-show">Clay Masse<span class="label label-warning pull-right">new</span></td>
																			<td class="view-message ">Added a new class: Login Class Fast Site</td>
																			<td class="view-message  text-right">
																				<i class="zmdi zmdi-attachment inline-block mr-15 font-16"></i>
																				<span  class="time-chat-history inline-block">9:27 AM</span>
																			</td>
																		</tr>
																		<tr class="unread">
																			<td class="inbox-small-cells">
																				<div class="checkbox checkbox-default inline-block">
																					<input type="checkbox" id="checkbox013"/>
																					<label for="checkbox013"></label>
																				</div>
																				<i class="zmdi zmdi-star inline-block font-16"></i>
																			</td>
																			
																			<td class="view-message dont-show">Evie Ono</td>
																			<td class="view-message">Improve the search presence of WebSite
																			<td class="view-message text-right">
																				<span  class="time-chat-history inline-block">April 01</span>
																			</td>
																		</tr>
																		<tr class="">
																			<td class="inbox-small-cells">
																				<div class="checkbox checkbox-default inline-block">
																					<input type="checkbox" id="checkbox014"/>
																					<label for="checkbox014"></label>
																				</div>
																				<i class="zmdi zmdi-star inline-block font-16"></i>
																			</td>
																			
																			<td class="view-message dont-show">Madalyn Rascon</td>
																			<td class="view-message">Last Chance: Upgrade to Pro for </td>
																			<td class="view-message text-right">
																				<i class="zmdi zmdi-attachment inline-block mr-15 font-16"></i>
																				<span  class="time-chat-history inline-block">March 15</span>
																			</td>
																		</tr>
																		<tr class="">
																			<td class="inbox-small-cells">
																				<div class="checkbox checkbox-default inline-block">
																					<input type="checkbox" id="checkbox015"/>
																					<label for="checkbox015"></label>
																				</div>
																				<i class="zmdi zmdi-star inline-block font-16 inbox-started"></i>
																			</td>
																			
																			<td class="view-message dont-show">Mitsuko Heid</td>
																			<td class="view-message">Boost Your Website Traffic</td>
																			<td class="view-message text-right">
																				<i class="zmdi zmdi-attachment inline-block mr-15 font-16"></i>
																				<span  class="time-chat-history inline-block">April 01</span>
																			</td>
																		</tr>
																		<tr class="">
																			<td class="inbox-small-cells">
																				<div class="checkbox checkbox-default inline-block">
																					<input type="checkbox" id="checkbox016"/>
																					<label for="checkbox016"></label>
																				</div>
																				<i class="zmdi zmdi-star inline-block font-16 inbox-started"></i>
																			</td>
																			<td class="view-message dont-show">Ezequiel Merideth<span class="label label-primary pull-right">social</span></td>
																			<td class="view-message">Stop wasting your visitors </td>
																			<td class="view-message text-right">
																				<i class="zmdi zmdi-attachment inline-block mr-15 font-16"></i>
																				<span  class="time-chat-history inline-block">March 01</span>
																			</td>
																		</tr>
																		<tr class="">
																			<td class="inbox-small-cells">
																				<div class="checkbox checkbox-default inline-block">
																					<input type="checkbox" id="checkbox0116"/>
																					<label for="checkbox0116"></label>
																				</div>
																				<i class="zmdi zmdi-star inline-block font-16"></i>
																			</td>
																			<td class="view-message dont-show">Jonnie Madalyn </td>
																			<td class="view-message">New WOW Slider v7.8 - 67% off</td>
																			<td class="view-message text-right">
																				<span  class="time-chat-history inline-block">March 14</span>
																			</td>
																		</tr>
																		<tr class="unread">
																			<td class="inbox-small-cells">
																				<div class="checkbox checkbox-default inline-block">
																					<input type="checkbox" id="checkbox018"/>
																					<label for="checkbox018"></label>
																				</div>
																				<i class="zmdi zmdi-star inline-block font-16 inbox-started"></i>
																			</td>
																			<td class="view-message dont-show">Angelic Lauver<span class="label label-primary pull-right">social</span></td>
																			<td class="view-message">The One Sign Your Co-Worker Will Stab</td>
																			<td class="view-message text-right">
																				<i class="zmdi zmdi-attachment inline-block mr-15 font-16"></i>
																				<span  class="time-chat-history inline-block">Feb 19</span>
																			</td>
																		</tr>
																		<tr class="unread">
																			<td class="inbox-small-cells">
																				<div class="checkbox checkbox-default inline-block">
																					<input type="checkbox" id="checkbox019"/>
																					<label for="checkbox019"></label>
																				</div>
																				<i class="zmdi zmdi-star inline-block font-16"></i>
																			</td>
																			
																			<td class="view-message dont-show">Priscila Shy</td>
																			<td class="view-message view-message">Welcome to the Drupal Community</td>
																			<td class="view-message text-right">
																				<span  class="time-chat-history inline-block">March 04</span>
																			</td>
																		</tr>
																		<tr class="">
																			<td class="inbox-small-cells">
																				<div class="checkbox checkbox-default inline-block">
																					<input type="checkbox" id="checkbox022"/>
																					<label for="checkbox022"></label>
																				</div>
																				<i class="zmdi zmdi-star inline-block font-16"></i>
																			</td>
																			
																			<td class="view-message dont-show">Linda Stack</td>
																			<td class="view-message view-message">Somebody requested a new password </td>
																			<td class="view-message text-right">
																				<span  class="time-chat-history inline-block">June 13</span>
																			</td>
																		</tr>
																		<tr class="">
																			<td class="inbox-small-cells">
																				<div class="checkbox checkbox-default inline-block">
																					<input type="checkbox" id="checkbox032"/>
																					<label for="checkbox032"></label>
																				</div>
																				<i class="zmdi zmdi-star inline-block font-16 inbox-started"></i>
																			</td>
																			
																			<td class="view-message dont-show">John Doe</td>
																			<td class="view-message view-message">Password successfully changed</td>
																			<td class="view-message text-right">
																				<span  class="time-chat-history inline-block">April 01</span>
																			</td>
																		</tr>
																		<tr class="">
																			<td class="inbox-small-cells">
																				<div class="checkbox checkbox-default inline-block">
																					<input type="checkbox" id="checkbox0015"/>
																					<label for="checkbox0015"></label>
																				</div>
																				<i class="zmdi zmdi-star inline-block font-16 inbox-started"></i>
																			</td>
																			
																			<td class="view-message dont-show">Mitsuko Heid<span class="label label-success pull-right">promotional</span></td>
																			<td class="view-message">Boost Your Website Traffic</td>
																			<td class="view-message text-right">
																				<i class="zmdi zmdi-attachment inline-block mr-15 font-16"></i>
																				<span  class="time-chat-history inline-block">April 01</span>
																			</td>
																		</tr>
																		<tr class="">
																			<td class="inbox-small-cells">
																				<div class="checkbox checkbox-default inline-block">
																					<input type="checkbox" id="checkbox0016"/>
																					<label for="checkbox0016"></label>
																				</div>
																				<i class="zmdi zmdi-star inline-block font-16 inbox-started"></i>
																			</td>
																			<td class="view-message dont-show">Ezequiel Merideth</td>
																			<td class="view-message">Stop wasting your visitors </td>
																			<td class="view-message text-right">
																				<i class="zmdi zmdi-attachment inline-block mr-15 font-16"></i>
																				<span  class="time-chat-history inline-block">March 01</span>
																			</td>
																		</tr>
																		<tr class="">
																			<td class="inbox-small-cells">
																				<div class="checkbox checkbox-default inline-block">
																					<input type="checkbox" id="checkbox10015"/>
																					<label for="checkbox10015"></label>
																				</div>
																				<i class="zmdi zmdi-star inline-block font-16 inbox-started"></i>
																			</td>
																			
																			<td class="view-message dont-show">Mitsuko Heid</td>
																			<td class="view-message">Boost Your Website Traffic</td>
																			<td class="view-message text-right">
																				<i class="zmdi zmdi-attachment inline-block mr-15 font-16"></i>
																				<span  class="time-chat-history inline-block">April 01</span>
																			</td>
																		</tr>
																		<tr class="">
																			<td class="inbox-small-cells">
																				<div class="checkbox checkbox-default inline-block">
																					<input type="checkbox" id="checkbox01126"/>
																					<label for="checkbox01126"></label>
																				</div>
																				<i class="zmdi zmdi-star inline-block font-16 inbox-started"></i>
																			</td>
																			<td class="view-message dont-show">Ezequiel Merideth</td>
																			<td class="view-message">Stop wasting your visitors </td>
																			<td class="view-message text-right">
																				<i class="zmdi zmdi-attachment inline-block mr-15 font-16"></i>
																				<span  class="time-chat-history inline-block">March 01</span>
																			</td>
																		</tr>
																		<tr class="">
																			<td class="inbox-small-cells">
																				<div class="checkbox checkbox-default inline-block">
																					<input type="checkbox" id="checkbox0145"/>
																					<label for="checkbox0145"></label>
																				</div>
																				<i class="zmdi zmdi-star inline-block font-16 inbox-started"></i>
																			</td>
																			
																			<td class="view-message dont-show">Mitsuko Heid</td>
																			<td class="view-message">Boost Your Website Traffic</td>
																			<td class="view-message text-right">
																				<i class="zmdi zmdi-attachment inline-block mr-15 font-16"></i>
																				<span  class="time-chat-history inline-block">April 01</span>
																			</td>
																		</tr>
																		<tr class="">
																			<td class="inbox-small-cells">
																				<div class="checkbox checkbox-default inline-block">
																					<input type="checkbox" id="checkbox0156"/>
																					<label for="checkbox0156"></label>
																				</div>
																				<i class="zmdi zmdi-star inline-block font-16 inbox-started"></i>
																			</td>
																			<td class="view-message dont-show">Ezequiel Merideth<span class="label label-primary pull-right">social</span></td>
																			<td class="view-message">Stop wasting your visitors </td>
																			<td class="view-message text-right">
																				<i class="zmdi zmdi-attachment inline-block mr-15 font-16"></i>
																				<span  class="time-chat-history inline-block">March 01</span>
																			</td>
																		</tr>
																		<tr class="">
																			<td class="inbox-small-cells">
																				<div class="checkbox checkbox-default inline-block">
																					<input type="checkbox" id="checkbox0175"/>
																					<label for="checkbox0175"></label>
																				</div>
																				<i class="zmdi zmdi-star inline-block font-16 inbox-started"></i>
																			</td>
																			
																			<td class="view-message dont-show">Mitsuko Heid</td>
																			<td class="view-message">Boost Your Website Traffic</td>
																			<td class="view-message text-right">
																				<i class="zmdi zmdi-attachment inline-block mr-15 font-16"></i>
																				<span  class="time-chat-history inline-block">April 01</span>
																			</td>
																		</tr>
																		<tr class="">
																			<td class="inbox-small-cells">
																				<div class="checkbox checkbox-default inline-block">
																					<input type="checkbox" id="checkbox01216"/>
																					<label for="checkbox01216"></label>
																				</div>
																				<i class="zmdi zmdi-star inline-block font-16 inbox-started"></i>
																			</td>
																			<td class="view-message dont-show">Ezequiel Merideth</td>
																			<td class="view-message">Stop wasting your visitors </td>
																			<td class="view-message text-right">
																				<i class="zmdi zmdi-attachment inline-block mr-15 font-16"></i>
																				<span  class="time-chat-history inline-block">March 01</span>
																			</td>
																		</tr>
																		<tr class="">
																			<td class="inbox-small-cells">
																				<div class="checkbox checkbox-default inline-block">
																					<input type="checkbox" id="checkbox2015"/>
																					<label for="checkbox2015"></label>
																				</div>
																				<i class="zmdi zmdi-star inline-block font-16 inbox-started"></i>
																			</td>
																			
																			<td class="view-message dont-show">Mitsuko Heid</td>
																			<td class="view-message">Boost Your Website Traffic</td>
																			<td class="view-message text-right">
																				<i class="zmdi zmdi-attachment inline-block mr-15 font-16"></i>
																				<span  class="time-chat-history inline-block">April 01</span>
																			</td>
																		</tr>
																		<tr class="">
																			<td class="inbox-small-cells">
																				<div class="checkbox checkbox-default inline-block">
																					<input type="checkbox" id="checkbox4016"/>
																					<label for="checkbox4016"></label>
																				</div>
																				<i class="zmdi zmdi-star inline-block font-16 inbox-started"></i>
																			</td>
																			<td class="view-message dont-show">Ezequiel Merideth<span class="label label-primary pull-right">social</span></td>
																			<td class="view-message">Stop wasting your visitors </td>
																			<td class="view-message text-right">
																				<i class="zmdi zmdi-attachment inline-block mr-15 font-16"></i>
																				<span  class="time-chat-history inline-block">March 01</span>
																			</td>
																		</tr>
																		<tr class="">
																			<td class="inbox-small-cells">
																				<div class="checkbox checkbox-default inline-block">
																					<input type="checkbox" id="checkbox6015"/>
																					<label for="checkbox6015"></label>
																				</div>
																				<i class="zmdi zmdi-star inline-block font-16 inbox-started"></i>
																			</td>
																			
																			<td class="view-message dont-show">Mitsuko Heid</td>
																			<td class="view-message">Boost Your Website Traffic</td>
																			<td class="view-message text-right">
																				<i class="zmdi zmdi-attachment inline-block mr-15 font-16"></i>
																				<span  class="time-chat-history inline-block">April 01</span>
																			</td>
																		</tr>
																		<tr class="">
																			<td class="inbox-small-cells">
																				<div class="checkbox checkbox-default inline-block">
																					<input type="checkbox" id="checkbox32016"/>
																					<label for="checkbox32016"></label>
																				</div>
																				<i class="zmdi zmdi-star inline-block font-16 inbox-started"></i>
																			</td>
																			<td class="view-message dont-show">Ezequiel Merideth</td>
																			<td class="view-message">Stop wasting your visitors </td>
																			<td class="view-message text-right">
																				<i class="zmdi zmdi-attachment inline-block mr-15 font-16"></i>
																				<span  class="time-chat-history inline-block">March 01</span>
																			</td>
																		</tr>
																		<tr class="">
																			<td class="inbox-small-cells">
																				<div class="checkbox checkbox-default inline-block">
																					<input type="checkbox" id="checkbox32015"/>
																					<label for="checkbox32015"></label>
																				</div>
																				<i class="zmdi zmdi-star inline-block font-16 inbox-started"></i>
																			</td>
																			
																			<td class="view-message dont-show">Mitsuko Heid</td>
																			<td class="view-message">Boost Your Website Traffic</td>
																			<td class="view-message text-right">
																				<i class="zmdi zmdi-attachment inline-block mr-15 font-16"></i>
																				<span  class="time-chat-history inline-block">April 01</span>
																			</td>
																		</tr>
																		<tr class="">
																			<td class="inbox-small-cells">
																				<div class="checkbox checkbox-default inline-block">
																					<input type="checkbox" id="checkbox06616"/>
																					<label for="checkbox06616"></label>
																				</div>
																				<i class="zmdi zmdi-star inline-block font-16 inbox-started"></i>
																			</td>
																			<td class="view-message dont-show">Ezequiel Merideth</td>
																			<td class="view-message">Stop wasting your visitors </td>
																			<td class="view-message text-right">
																				<i class="zmdi zmdi-attachment inline-block mr-15 font-16"></i>
																				<span  class="time-chat-history inline-block">March 01</span>
																			</td>
																		</tr>
																		
																		<tr class="">
																			<td class="inbox-small-cells">
																				<div class="checkbox checkbox-default inline-block">
																					<input type="checkbox" id="checkbox66015"/>
																					<label for="checkbox66015"></label>
																				</div>
																				<i class="zmdi zmdi-star inline-block font-16 inbox-started"></i>
																			</td>
																			
																			<td class="view-message dont-show">Mitsuko Heid</td>
																			<td class="view-message">Boost Your Website Traffic</td>
																			<td class="view-message text-right">
																				<i class="zmdi zmdi-attachment inline-block mr-15 font-16"></i>
																				<span  class="time-chat-history inline-block">April 01</span>
																			</td>
																		</tr>
																		<tr class="">
																			<td class="inbox-small-cells">
																				<div class="checkbox checkbox-default inline-block">
																					<input type="checkbox" id="checkbox99016"/>
																					<label for="checkbox99016"></label>
																				</div>
																				<i class="zmdi zmdi-star inline-block font-16 inbox-started"></i>
																			</td>
																			<td class="view-message dont-show">Ezequiel Merideth</td>
																			<td class="view-message">Stop wasting your visitors </td>
																			<td class="view-message text-right">
																				<i class="zmdi zmdi-attachment inline-block mr-15 font-16"></i>
																				<span  class="time-chat-history inline-block">March 01</span>
																			</td>
																		</tr>
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
			