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
					<!-- flash message -->
					<?php if($this->session->flashdata("msg")!=""){ ?>
                    	<?php echo $this->session->flashdata("msg") ?>
					<?php } ?>
					
					<div class="col-md-12">
						<div class="box box-primary">
							<div class="box-header with-border">
								<h3 class="box-title">Slide Banner Form Information</h3>
							</div>
							<form method="post" action="<?php echo base_url()?>slidebanner/addBanner" enctype="multipart/form-data">							
								<table class="table table-bordered">
									<tbody>
										<tr>
											<th style="width:150px">TITLE</th>
											<td>
												<input type="text" class="form-control" name="title" value="<?php echo $this->session->flashdata("title") ?>" required>
												<div style="color:red"></div>
											</td>
										</tr>
										<tr style="height:50px">
											<th style="width:150px">BANNER</th>
											<td>
												<input type="file" name="banner" required>
												<p style="font-weight:bold;font-size:10px;margin-top:5px">*(Hanya file dengan type .jpg dan kapasitas max. 200 Kb, ukuran file 768x766 px)</p>
												<div style="color:red"></div>
											</td>
										</tr>
										<tr>
											<th style="width:150px">URUTAN</th>
											<td>
												<input style="width:60px;text-align:center" type="number" class="form-control" name="order" value="<?php echo $this->session->flashdata("order") ?>" required>
												<div style="color:red"></div>
											</td>
										</tr>
										<tr>
											<th style="width:150px">STATUS</th>
											<td>
												<select name="status" class="form-control" id="status" style="width:200px;text-align:center" required>
													<option value="">Pilih Status Banner</option>
													<option value="1" <?php if($this->session->flashdata("status")=="1"){ echo 'selected="selected"';} ?>>Aktif</option>
													<option value="0" <?php if($this->session->flashdata("status")=="0"){ echo 'selected="selected"';} ?>>Tidak Aktif</option>
												</select>
												<div style="color:red"></div>
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
