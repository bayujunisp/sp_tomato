<?php  ?>
<br><br>
<div class="container">
	
        <form method="post" action="<?php echo base_url()?>user/diagnosa">

        <table id="table" class="table table-bordered">
        	<thead>
        		<th>Kode Gejala</th>
        		<th>Gejala</th>
        		<th>Ya</th>
        	</thead>
        	<tbody>
            <?php 
            foreach ($gejala as $data) {
					?>
        	<tr>
        		<td><?= $data['kode_gejala']; ?></td>
        		<td><?= $data['gejala']; ?></td>
        		<td><input type='checkbox' value="<?= $data['kode_gejala']; ?>" name="kode_gejala[]" /></td>
        		</tr>
        	<?php } ?>
            </tbody>
        </table>
        	<button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
</div>

    <script type="text/javascript">
        $(document).ready( function () {
            $('#table').DataTable({"pageLength": 50});
        } );

    </script>