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
		    <li class="active">Detail</li>
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
							<form method="post" action="<?php echo base_url()?>slidebanner/editBanner?id=<?php echo $row->id_banner?>" enctype="multipart/form-data">							
								<table class="table table-bordered">
									<tbody>
										<tr>
											<th style="width:150px">TITLE</th>
											<td>
												<input type="text" class="form-control" name="title" value="<?php echo $row->title_banner ?>" required>
												
											</td>
										</tr>
										<tr style="height:50px">
											<th style="width:150px">BANNER</th>
											<td>
												<input type="file" name="banner">
												<p style="font-weight:bold;font-size:10px;margin-top:5px">*(Hanya file dengan type .jpg, kapasitas max. 200 Kb, panjang karakter 60, dan ukuran file 1000x438 px)</p>												
												<p style="font-weight:bold;font-size:10px;margin-top:5px">*(Kosongkan jika tidak ingin diganti)</p>
			                                	<a href="<?php echo $userview_url.'asset/banner/'.$row->img_banner ?>" target="_blank"><img src="<?php echo $userview_url.'asset/banner/'.$row->img_banner ?>" height="100" /></a>												
											</td>
										</tr>
										<tr>
											<th style="width:150px">URUTAN</th>
											<td>
												<input style="width:60px;text-align:center" type="number" class="form-control" name="order" value="<?php echo $row->order_banner ?>" required>
												
											</td>
										</tr>
										<tr>
											<th style="width:150px">STATUS</th>
											<td>
												<select name="status" class="form-control" id="status" style="width:200px;text-align:center" required>
													<option value="" >Pilih Status Banner</option>
													<option value="1" <?php if($row->status_banner=="1"){ echo 'selected="selected"';}?>>Aktif</option>
													<option value="0" <?php if($row->status_banner=="0"){ echo 'selected="selected"';}?>>Tidak Aktif</option>
												</select>
											</td>
										</tr>
										<tr>
											<th style="width:150px"></th>
											<td colspan="2" style="width:250px">											
												<input type="submit" class="btn btn-primary" value="Submit">
												<a href="<?php echo base_url()?>slidebanner/delete?id=<?php echo $row->id_banner?>" class="btn btn-danger pull-right">Delete</a>
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
