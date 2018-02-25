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
			<li class="active">Users</li>
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
								<h3 class="box-title">Filter Data</h3>
							</div>
							<!-- form start -->
							<form method="get" action="<?php echo base_url()?>admin/users" class="form-horizontal">
								<div class="box-body">
									<div class="row">
										<div class="col-sm-3">
											<label for="exampleInputEmail1">Email</label>
											<input type="text" name="email" value="<?php echo $email?>" class="form-control" />
										</div>
                                        <div class="col-sm-3">
											<label for="exampleInputEmail1">Name</label>
											<input type="text" name="name" value="<?php echo $name?>" class="form-control" />
										</div>
										<div class="col-sm-3">
											<label for="exampleInputEmail1">Status</label>
											<select name="status" class="form-control" id="status">
												<option value="">Pilih Status User</option>
												<option value="1"<?php if($status=="1"){ echo 'selected="selected"';}?>>Aktif</option>
												<option value="0"<?php if($status=="0"){ echo 'selected="selected"';}?>>Tidak Aktif</option>
											</select>
										</div>
									</div>								
								</div>
								<div class="box-footer">
									<button type="submit" class="btn btn-primary">
										<i class="fa fa-search"></i> Cari</button>
									&nbsp;&nbsp;
									<a class="btn btn-primary" href="<?php echo base_url()?>admin/users">
										<i class="fa fa-time"></i> Clear Filter
									</a>
									&nbsp;&nbsp;
									<a class="btn btn-primary" href="<?php echo base_url()?>admin/addUser">
										<i class="fa fa-plus"></i> Tambah User
									</a>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="box">
					<div class="box-body table-responsive no-padding">
						<table class="table table-hover">
							<p style="font-weight: bold;text-decoration: underline; padding-top: 5px; padding-left: 10px;">Total Data : <?php echo $row->num_rows(); ?></p>
							<tr>
								<th class="text-center" width="130">ACTION</th>
								<th class="text-center">NAMA</th>
								<th class="text-center">EMAIL</th>
								<th class="text-center">LEVEL</th>
								<th class="text-center">STATUS</th>
							</tr>
							<?php foreach ($row->result() as $key) {?>
							<tr>
								<td width="130">
									<a href="<?php echo base_url()?>admin/detailUser?id=<?php echo $key->id?>">
										<button class="btn btn-block btn-default btn-sm">
											<i class="fa fa-eye"></i> View Detail
										</button>
									</a>
								</td>
								<td class="text-center"><?php echo $key->name?></td>
								<td class="text-center"><?php echo $key->email?></td>
								<td class="text-center"><?php echo $key->level?></td>
								<td class="text-center"><?php echo $key->status?></td>									
							</tr>
							<?php }?>
						</table>
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->
			</div>
		</div>
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
