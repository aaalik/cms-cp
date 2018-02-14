<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Slide Banner
			<small>MJM Travel</small>
		</h1>
		<ol class="breadcrumb">
			<li>
				<a href="<?php echo base_url()?>">
					<i class="fa fa-dashboard"></i>Home</a>
			</li>
			<li class="active">Slide Banner</li>
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
								<h3 class="box-title">Filter Data</h3>
							</div>
							<!-- form start -->
							<form method="get" action="<?php echo base_url()?>slidebanner" class="form-horizontal">
								<div class="box-body">
									<div class="row">
										<div class="col-sm-3">
											<label for="exampleInputEmail1">Title</label>
											<input type="text" name="title" value="" class="form-control" />
										</div>
										<div class="col-sm-3">
											<label for="exampleInputEmail1">URL</label>
											<input type="text" name="url" value="" class="form-control" />
										</div>
										<div class="col-sm-3">
											<label for="exampleInputEmail1">New Tab</label>
											<select name="newtab" class="form-control">
												<option value="" selected="selected">Pilih New Tab</option>
												<option value="1">YA</option>
												<option value="2">Tidak</option>
											</select>
										</div>
										<div class="col-sm-3">
											<label for="exampleInputEmail1">Urutan</label>
											<input type="text" name="urutan" value="" class="form-control" />
										</div>
									</div>
									<br />
									<div class="row">
										<div class="col-sm-3">
											<label for="exampleInputEmail1">Status</label>
											<select name="status" class="form-control" id="status">
												<option value="" selected="selected">Pilih Status Banner</option>
												<option value="1">Aktif</option>
												<option value="2">Tidak Aktif</option>
											</select>
										</div>
									</div>
								</div>
								<div class="box-footer">
									<button type="submit" class="btn btn-primary">
										<i class="fa fa-search"></i> Cari</button>
									&nbsp;&nbsp;
									<a class="btn btn-primary" href="<?php echo base_url()?>slidebanner/add">
										<i class="fa fa-plus"></i> Tambah Banner
									</a>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="box">
					<div class="box-body table-responsive no-padding">
						<table class="table table-hover">
							<p style="font-weight: bold;text-decoration: underline;">Total Data : 0</p>
							<tr>
								<th class="text-center">ACTION</th>
								<th class="text-center">TITLE</th>
								<th class="text-center">URL</th>
								<th class="text-center">BANNER</th>
								<th class="text-center">NEW_TAB</th>
								<th class="text-center">URUTAN</th>
								<th class="text-center">STATUS</th>
							</tr>
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
