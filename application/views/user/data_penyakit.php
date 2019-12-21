<script type="text/javascript" src="<?php echo base_url()?>assets/chartjs/Chart.js"></script>
<div class="container">
	<br><br>
	<h1 class="display-5 header">Data Hama Dan Penyakit</h1>
	<hr>
	<table id="table_hamapenyakit" class="table table-bordered table-striped">
		<thead>
			<tr>
				<th>No</th>
				<th>Kode Hama Dan Penyakit</th>
				<th>Hama Dan Penyakit</th>
				<th>Option</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			$no = 1;
			foreach ($hamapenyakit as $data) {

				?>
				<tr>
					<td><?php echo $no; ?></td>
					<td><?= $data['kode_hp']; ?></td>
					<td><?= $data['hamapenyakit']; ?></td>
					<td>
						<a href="<?php echo base_url()?>user/detail_hp/<?= $data['kode_hp']; ?>" class="btn btn-primary"><span class="fa fa-search"></span></a>
					</td>
				</tr>
				<?php $no++; } ?>
			</tbody>
		</table>
		
</div>

	<script type="text/javascript">
		$(document).ready( function () {
			$('#table_hamapenyakit').DataTable();
		} );

	</script>