<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Data Admin
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="#">Admin</a></li>
			<li class="active">Data Admin</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="box-header">
						
					</div>
					<!-- /.box-header -->
					<div class="box-body">

						<?= $this->session->flashdata('message')?>

						<?php 
							$no = 1;
							foreach ($admin as $data) {

								?> 

						<form action="<?php echo base_url()?>admin/edit_admin" method="POST">
							<input type="hidden" name="id_admin" value="<?= $data['id_admin'];?>">

							<div class="form-group">
								<label for="email">Username:</label>
								<input type="text" name="username" class="form-control" id="email" value="<?= $data['username']; ?>">
							</div>

							<div class="form-group">
								<label for="email">Password:</label>
								<input type="password" name="password" class="form-control" id="email" value="<?= $data['password']; ?>">
							</div>

							<div class="form-group">
								<label for="email">Nama Admin:</label>
								<input type="text" name="nama_admin" class="form-control" id="email" value="<?= $data['nama_admin']; ?>">
							</div>

						<button type="submit" class="btn btn-primary">Submit</button>
					</form>

								<?php  } ?>
							
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->
			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->




