<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Change Password
			<small>MJM Travel</small>
		</h1>
		<ol class="breadcrumb">
			<li>
				<a href="<?php echo base_url()?>">
					<i class="fa fa-dashboard"></i>Home</a>
			</li>
			<li><i class="active"></i>Change Password</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content container-fluid">
		<div class="container-fluid half-padding">
			<div class="template template__blank">
				<div class="row">
					<!-- flash message -->
					<?php if($this->session->flashdata("msg")!=""){ ?>
                    	<?php echo $this->session->flashdata("msg") ?>
					<?php } ?>
					
					<div class="col-md-12">
						<div class="box box-primary">
							<div class="box-header with-border">
								<h3 class="box-title">Change Password Form Information</h3>
							</div>
							<form method="post" action="<?php echo base_url()?>user/changePass">							
								<table class="table table-bordered">
									<tbody>
										<tr>
											<th style="width:50px">OLD PASSWORD</th>
											<td>
												<input type="password" class="form-control" name="oldpass" style="width:300px" value="" required>			
											</td>
										</tr>
										<tr>
											<th style="width:50px">PASSWORD</th>
											<td>
												<input type="password" class="form-control" name="password" style="width:300px" value="" required>
											</td>
										</tr>
                                        <tr>
											<th style="width:50px">CONFIRM PASSWORD</th>
											<td>
												<input type="password" class="form-control" name="password2" style="width:300px" value="" required>
											</td>
										</tr>
										<tr>
											<th style="width:150px"></th>
											<td colspan="2" style="width:250px">											
												<input type="submit" class="btn btn-primary" value="Submit">
											</td>
										</tr>
									</tbody>
								</table>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
