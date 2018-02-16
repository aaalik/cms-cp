<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Paket
			<small>MJM Travel</small>
		</h1>
		<ol class="breadcrumb">
			<li>
				<a href="<?php echo base_url()?>">
					<i class="fa fa-dashboard"></i>Home</a>
			</li>
			<li>
				<a href="<?php echo base_url(); ?>paket">
					<i class="fa fa-inbox"></i>Gallery</a>
			</li>
			<li class="active">Tambah</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content container-fluid">
		<div class="container-fluid half-padding">
			<div class="template template__blank">
				<div class="row">
					<div class="col-md-12">
						<div class="box box-primary">
							<div class="box-header with-border">
								<h3 class="box-title">Gallery Form Information</h3>
							</div>
							<form method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>gallery/add">
								<table class="table table-bordered">
									<tbody>
										<tr>
											<th style="width:150px">DESCRIPTION</th>
											<td>
												<input type="text" class="form-control" name="title" value="">
												<div style="color:red"></div>
											</td>
										</tr>
										<tr style="height:50px">
											<th style="width:150px">IMAGE</th>
											<td>
												<input type="file" name="banner_desktop">
												<p style="font-weight:bold;font-size:10px;margin-top:5px">*(Hanya file dengan type .jpg dan kapasitas max. 200 Kb)</p>
												<div style="color:red"></div>
											</td>
										</tr>
										<tr>
											<th style="width:150px"></th>
											<td colspan="2" style="width:250px">
												<input type="hidden" name="csrf_test_name" value="d746bdc9c4a19661cc8f79fc7c7e22d6" style="display: none">
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
