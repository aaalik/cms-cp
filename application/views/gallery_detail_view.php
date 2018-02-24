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

					<!-- flash message -->
					<?php if($this->session->flashdata("msg")!=""){ ?>
                    	<?php echo $this->session->flashdata("msg") ?>
					<?php } ?>

					<div class="col-md-12">
						<div class="box box-primary">
							<div class="box-header with-border">
								<h3 class="box-title">Gallery Form Information</h3>
							</div>
							<form method="post" action="<?php echo base_url(); ?>gallery/editGallery?id=<?php echo $row->id_gallery?>" enctype="multipart/form-data">
								<table class="table table-bordered">
									<tbody>
										<tr>
											<th style="width:150px">TITLE</th>
											<td>
												<input type="text" class="form-control" name="title" value="<?php echo $row->title_gallery ?>">									
											</td>
										</tr>
										<tr style="height:50px">
											<th style="width:150px">IMAGE</th>
											<td>
												<input type="file" name="gallery">
												<p style="font-weight:bold;font-size:10px;margin-top:5px">*(Hanya file dengan type .jpg, kapasitas max. 200 Kb, panjang karakter 60, dan ukuran file 1000x438 px)</p>
                                                <p style="font-weight:bold;font-size:10px;margin-top:5px">*(Kosongkan jika tidak ingin diganti)</p>
			                                	<a href="<?php echo $userview_url.'asset/uploads/'.$row->img_gallery ?>" target="_blank"><img src="<?php echo $userview_url.'asset/gallery/'.$row->img_gallery ?>" height="100" /></a>
											</td>
										</tr>
										<tr>
											<th style="width:150px"></th>
											<td colspan="2" style="width:250px">												
												<input type="submit" class="btn btn-primary" value="Submit">
												<a href="<?php echo base_url()?>gallery/delete?id=<?php echo $row->id_gallery?>" class="btn btn-danger pull-right">Delete</a>                                                
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
