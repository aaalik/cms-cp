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
					<i class="fa fa-inbox"></i>Paket</a>
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
								<h3 class="box-title">Paket Form Information</h3>
							</div>
							<form method="post" action="<?php echo base_url()?>paket/addpaket" enctype="multipart/form-data">
								<table class="table table-bordered">
									<tbody>
										<tr>
											<th style="width:150px">TITLE</th>
											<td>
												<input type="text" class="form-control" name="title" value="" required>
												<div style="color:red"></div>
											</td>
										</tr>
										<tr style="height:50px">
											<th style="width:150px">BANNER</th>
											<td>
												<input type="file" name="banner" required>
												<p style="font-weight:bold;font-size:10px;margin-top:5px">*(Hanya file dengan type .jpg dan kapasitas max. 200 Kb, ukuran file 1000x438 px)</p>
												<div style="color:red"></div>
											</td>
										</tr>
										<tr>
											<th style="width:150px">HARGA</th>
											<td>
												<input type="number" class="form-control" name="harga" value="" required>
												<div style="color:red"></div>
											</td>
										</tr>
										<tr>
											<th style="width:150px">TANGGAL KEBERANGKATAN</th>
											<td>
												<input type="date" class="form-control" name="tgl_berangkat" value="" required>
												<div style="color:red"></div>
											</td>
										</tr>
										<tr>
											<th style="width:150px">DESKRIPSI</th>
											<td>
												<textarea class="form-control" rows="25" name="deskripsi" id="deskripsi" required></textarea>
												<div style="color:red"></div>
											</td>
										</tr>
										<tr>
											<th style="width:150px">ITINERARY</th>
											<td>
												<textarea class="form-control" rows="25" name="itinerary" id="itinerary" required></textarea>
												<div style="color:red"></div>
											</td>
										</tr>
										<tr>
											<th style="width:150px">FASILITAS</th>
											<td>
												<textarea class="form-control" rows="25" name="fasilitas" id="fasilitas" required></textarea>
												<div style="color:red"></div>
											</td>
										</tr>
										<tr>
											<th style="width:150px">KETENTUAN</th>
											<td>
												<textarea class="form-control" rows="25" name="ketentuan" id="ketentuan" required></textarea>
												<div style="color:red"></div>
											</td>
										</tr>
										<tr>
											<th style="width:150px">STATUS</th>
											<td>
												<select name="status" class="form-control" id="status" style="width:200px;text-align:center" required>
													<option value="" selected="selected">Pilih Status News</option>
													<option value="1">Aktif</option>
													<option value="0">Tidak Aktif</option>
												</select>
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
