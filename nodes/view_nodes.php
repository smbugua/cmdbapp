<?php
include('../layout/nav.php');
$results=querydb("SELECT n.name as nodename,n.ipaddress as ipaddress, m.market as marketname , me.name as marketenvironment from nodes n inner join markets_environments me on me.id =n.market_environment_id  inner join markets m on m.id=me.marketid order by m.market  asc");
?>
<div class="right-sidebar-backdrop"></div>
<!-- Main Content -->
			<div class="page-wrapper">
				<div class="container-fluid">
					
					<!-- Title -->
					<div class="row heading-bg">
						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
							<h5 class="txt-dark">Nodes</h5>
						</div>
					
						<!-- Breadcrumb -->
						<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
							<ol class="breadcrumb">
								<li><a href="index.php">Dashboard</a></li>
								<li><a href="../admin/infrastructure.php"><span>Infrastructure</span></a></li>
								<li class="active"><span>Nodes</span></li>
							</ol>
						</div>
						<!-- /Breadcrumb -->
					
					</div>
				
				<!-- Row -->
				<div class="row">
					<div class="col-sm-12">
						<div class="panel panel-default card-view">
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<div class="table-wrap">
										<div class="table-responsive">
											<table id="example" class="table table-hover display  pb-30" >
												<thead>
													<tr>
														<th>No</th>
														<th>Market name</th>
														<th>Market environment</th>
														<th>Node name</th>
														<th>IP Address</th>
														<th>Port</th>
														<th>Edit</th>
														<th>Deactvate</th>
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
														<td><?php echo $row['marketname']?></td>
														<td><?php echo $row['marketenvironment']?></td>
														<td><?php echo $row['nodename']?></td>
														<td><?php echo $row['ipaddress']?></td>
														<td><a href="edit_nodes.php?<?php echo $row['id']?>" ><i class="fa fa-edit"></i> Edit</a>  </td>
														<td><a href="../controllers/marketcontrolclass.php?<?php echo $row['id']?>&&action=deactivatenode"  ><i class="fa fa-trash"></i> De-Activate</a>  </td>
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
