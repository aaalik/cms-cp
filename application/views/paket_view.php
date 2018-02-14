<div class="content-wrapper" style="min-height: 758px;">
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
			<li class="active">Paket</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid half-padding">

			<div class="template template__blank">
				<div class="row">
					<div class="col-md-12">
						<div class="box box-primary">
							<div class="box-header with-border">
								<h3 class="box-title">Filter Data</h3>
							</div>
							<!-- form start -->
							<form method="get" action="<?php echo base_url()?>paket" class="form-horizontal">

								<div class="box-body">

									<div class="row">
										<div class="col-sm-3">
											<label for="exampleInputEmail1">Title</label>
											<input type="text" name="title" value="" class="form-control">
										</div>

									</div>

								</div>

								<div class="box-footer">
									<button type="submit" class="btn btn-primary">
										<i class="fa fa-search"></i> Cari</button>
									&nbsp;&nbsp;
									<a class="btn btn-primary" href="<?php echo base_url()?>paket/add">
										<i class="fa fa-plus"></i> Tambah News
									</a>
								</div>
							</form>
						</div>
					</div>
				</div>

				<div class="box">
					<div class="box-body table-responsive no-padding">
						<p style="font-weight: bold;text-decoration: underline;">Total Data : 1</p>
						<table class="table table-hover">


							<tbody>
								<tr>
									<th class="text-center">ACTION</th>
									<th class="text-center" colspan="3">TITLE</th>
									<th class="text-center">PUBLISH DATE</th>
									<th class="text-center">STATUS</th>
								</tr>
								<tr>
									<td>
										<a href="<?php echo base_url()?>paket/view?id=1">
											<button class="btn btn-block btn-default btn-sm">
												<i class="fa fa-eye"></i> View Detail</button>
										</a>
									</td>
									<td class="text-center" colspan="3">Anton</td>
									<td class="text-center">2018-02-09 10:49:14</td>
									<td class="text-center">1</td>
								</tr>

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
