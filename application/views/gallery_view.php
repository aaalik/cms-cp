<div class="content-wrapper" style="min-height: 758px;">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Gallery
			<small>MJM Travel</small>
		</h1>
		<ol class="breadcrumb">
			<li>
				<a href="<?php echo base_url()?>">
					<i class="fa fa-dashboard"></i>Home</a>
			</li>
			<li class="active">Gallery</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">
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
							<form method="get" action="<?php echo base_url()?>gallery" class="form-horizontal">
								<div class="box-body">
									<div class="row">
										<div class="col-sm-3">
											<label for="exampleInputEmail1">Title</label>
											<input type="text" class="form-control" name="title" value="<?php echo $title?>">
										</div>
									</div>
								</div>

								<div class="box-footer">
									<button type="submit" class="btn btn-primary">
										<i class="fa fa-search"></i> Cari</button>
									&nbsp;&nbsp;
									<a class="btn btn-primary" href="<?php echo base_url()?>gallery/add">
										<i class="fa fa-plus"></i> Tambah Images
									</a>
								</div>
							</form>
						</div>
					</div>
				</div>

				<div class="box">
					<div class="box-body table-responsive no-padding">
						<p style="font-weight: bold;text-decoration: underline; padding-top: 5px; padding-left: 10px;">Total Data : <?php echo $row->num_rows(); ?></p>						
						<table class="table table-hover">
							<tbody>
								<tr>
									<th class="text-center">ACTION</th>
									<th class="text-center">TITLE</th>
									<th class="text-center">PUBLISH DATE</th>
									<th class="text-center">IMAGE</th>
								</tr>
								<?php foreach ($row->result() as $key) {?>
								<tr>
									<td width="130">
										<a href="<?php echo base_url()?>gallery/detail?id=<?php echo $key->id_gallery?>">
											<button class="btn btn-block btn-default btn-sm">
												<i class="fa fa-eye"></i> View Detail
											</button>
										</a>
									</td>
									<td class="text-center"><?php echo $key->title_gallery?></td>
									<td class="text-center"><?php echo $key->upload_date?></td>
									<td class="text-center"><?php echo $key->img_gallery?></td>
								</tr>
								<?php }?>
							</tbody>
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
