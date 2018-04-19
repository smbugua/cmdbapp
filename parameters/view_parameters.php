<?php
include('../layout/nav.php');
$results=querydb("SELECT name from parameters order by name asc ");
?>
<div class="right-sidebar-backdrop"></div>
<!-- Main Content -->
			<div class="page-wrapper">
				<div class="container-fluid">
					
					<!-- Title -->
					<div class="row heading-bg">
						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
							<h5 class="txt-dark">Parameters</h5>
						</div>
					
						<!-- Breadcrumb -->
						<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
							<ol class="breadcrumb">
								<li><a href="index.php">Dashboard</a></li>
								<li><a href="../admin/infrastructure.php"><span>Infrastructure</span></a></li>
								<li class="active"><span>Apps</span></li>
							</ol>
						</div>
						<!-- /Breadcrumb -->
					
					</div>
				
				<!-- Row -->
				<div class="row">
					<div class="col-sm-6">
						<div class="panel panel-default card-view">
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<div class="table-wrap">
										<div class="table-responsive">
											<table id="example" class="table table-hover display  pb-30" >
												<thead>
													<tr>
														<th>Parameter Name</th>
													</tr>
												</thead>
												<tfoot>
												</tfoot>
												<tbody>
													<?php 
													$no=1;
													while( $row=mysqli_fetch_array($results,MYSQLI_ASSOC)){ ?>
													<tr>
														<td><?php echo $no ?></td>
														<td><?php echo $row['name']?></td>
													<!--	<td><a href="edit_nodes.php?<?php echo $row['id']?>" ><i class="fa fa-edit"></i> Edit</a>  </td>
														<td><a href="../controllers/marketcontrolclass.php?<?php echo $row['id']?>&&action=deactivatenode"  ><i class="fa fa-trash"></i> De-Activate</a>  </td> -->
													</tr>

													<?php } $no ++; ?>
												</tbody>
											</table>
										</div>
									</div>
									</div>
									</div>
									</div>
									</div>
									</div>
											<!-- /Row -->
		

<?php include('../layout/footer.php');?>

</div>
