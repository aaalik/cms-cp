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
			<li><a href="<?php echo base_url(); ?>slidebanner"><i class="fa fa-inbox"></i>Slide Banner</a></li>
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
								<h3 class="box-title">Slide Banner Form Information</h3>
							</div>
							<table class="table table-bordered">
								<tbody>
									<tr>
										<th style="width:150px">TITLE</th>
										<td>
											<input type="text" class="form-control" name="title_wcs" value="">
											<div style="color:red"></div>
										</td>
									</tr>
									<tr>
										<th style="width:150px">URL</th>
										<td>
											<input type="text" class="form-control" name="url_wcs" value="">
											<div style="color:red"></div>
										</td>
									</tr>
									<tr style="height:50px">
										<th style="width:150px">BANNER (Desktop)</th>
										<td>
											<input type="file" name="banner_desktop_wcs">
											<p style="font-weight:bold;font-size:10px;margin-top:5px">*(Hanya file dengan type .jpg dan kapasitas max. 200 Kb, ukuran file 1366×520 px)</p>
											<div style="color:red"></div>
										</td>
									</tr>
									<tr style="height:50px">
										<th style="width:150px">BANNER (Mobile)</th>
										<td>
											<input type="file" name="banner_mobile_wcs">
											<p style="font-weight:bold;font-size:10px;margin-top:5px">*(Hanya file dengan type .jpg dan kapasitas max. 200 Kb, ukuran file 768x766 px)</p>
											<div style="color:red"></div>
										</td>
									</tr>
									<tr>
										<th style="width:150px">URUTAN</th>
										<td>
											<input style="width:60px;text-align:center" type="text" class="form-control" name="urutan_wcs" value="">
											<div style="color:red"></div>
										</td>
									</tr>
									<tr>
										<th style="width:150px">NEW_TAB</th>
										<td>
											<select name="newtab_wcs" class="form-control" id="newtab" style="width:200px;text-align:center">
												<option value="" selected="selected">Pilih New Tab</option>
												<option value="1">YA</option>
												<option value="2">Tidak</option>
											</select>
											<div style="color:red"></div>
										</td>
									</tr>
									<tr>
										<th style="width:150px">STATUS</th>
										<td>
											<select name="status_wcs" class="form-control" id="status" style="width:200px;text-align:center">
												<option value="" selected="selected">Pilih Status Banner</option>
												<option value="1">Aktif</option>
												<option value="2">Tidak Aktif</option>
											</select>
											<div style="color:red"></div>
										</td>
									</tr>
									<tr>
										<th style="width:150px"></th>
										<td colspan="2" style="width:250px">
											<input type="hidden" name="csrf_test_name" value="77ac91b6388cc7a2d54123c0537ee6e3" style="display: none">
											<input type="submit" class="btn btn-primary" value="Submit">
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
