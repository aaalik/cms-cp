<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Manage Users
			<small>MJM Travel</small>
		</h1>
		<ol class="breadcrumb">
			<li>
				<a href="<?php echo base_url()?>">
					<i class="fa fa-dashboard"></i>Home</a>
			</li>
			<li><a href="<?php echo base_url(); ?>admin/users"><i class="fa fa-inbox"></i>Users</a></li>
		    <li class="active">Tambah</li>
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
								<h3 class="box-title">Add User Form Information</h3>
							</div>
							<form method="post" action="<?php echo base_url()?>admin/addUserf">							
								<table class="table table-bordered">
									<tbody>
										<tr>
											<th style="width:50px">NAME</th>
											<td>
												<input type="text" class="form-control" name="name" style="width:300px" value="<?php echo $this->session->flashdata('name')?>" required>												
											</td>
										</tr>
										<tr>
											<th style="width:50px">EMAIL</th>
											<td>
												<input type="email" class="form-control" name="email" style="width:300px" value="<?php echo $this->session->flashdata('email')?>" required>			
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
											<th style="width:50px">STATUS</th>
											<td>
												<select name="status" class="form-control" id="status" style="width:200px;text-align:center" required>
													<option value="">Pilih Status User</option>
													<option value="1" <?php if($this->session->flashdata('status')=="1"){echo 'selected="selected"';}?>>Aktif</option>
													<option value="0" <?php if($this->session->flashdata('status')=="0"){echo 'selected="selected"';}?>>Tidak Aktif</option>
												</select>											
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
