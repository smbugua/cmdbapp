<?php
include('../layout/nav.php');
$results=querydb("SELECT u.id , u.name as name, u.username as username, r.name as role from roles r inner join user_role ur on r.id=ur.roleid inner join users u on u.id=ur.userid where u.status = 1 order by u.name asc");
?>
<div class="right-sidebar-backdrop"></div>
<!-- Main Content -->
			<div class="page-wrapper">
				<div class="container-fluid">
					
					<!-- Title -->
					<div class="row heading-bg">
						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
							<h5 class="txt-dark">Deactivated Users</h5>
						</div>
					
						<!-- Breadcrumb -->
						<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
							<ol class="breadcrumb">
								<li><a href="index.php">Dashboard</a></li>
								<li><a href="../admin/infrastructure.php"><span>Infrastructure</span></a></li>
								<li class="active"><span>Deactivated Users</span></li>
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
														<th>Name</th>
														<th>Username</th>
														<th>Role</th>
														<th>Activate</th>
													</tr>
												</thead>
												<tfoot>
												</tfoot>
												<tbody>
													<?php 

													$no=1;
													while( $row=mysqli_fetch_array($results,MYSQLI_ASSOC)){ 
															$id= $row['id'];
														?>
													<tr>

														<td><?php echo $no++ ?></td>
														<td><?php echo $row['name']?></td>
														<td><?php echo $row['username']?></td>
														<td><?php echo $row['role']?></td>
														<td><a href="../controllers/updatecontroller.php?id=<?php echo $row['id']?>&&action=activateuser"  ><i class="fa fa-trash"></i> Activate</a>  </td>
													</tr>

													<?php } ?>
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
