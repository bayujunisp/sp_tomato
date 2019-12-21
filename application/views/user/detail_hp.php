
<br><br><br>
<div class="container">
	
	<h2><b><?php echo $hamapenyakit; ?></b></h2>
	<hr>
	<h3>Gejala</h3>
	<table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Gejala</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                $no = 1;
                foreach ($gejala as $data) {

                  ?>
                  <tr>
                    <td><?php echo $no; ?></td>
                    <td><?= $data['gejala']; ?></td>
                  </tr>
                  <?php $no++; } ?>
                  </tbody>
                  </table>
     <hr>

			<div class="form-group row">
				<label for="inputEmail3" class="col-sm-2 col-form-label"><b>Solusi Penyakit</b></label>
				<div class="col-sm-10">
					<?php echo $solusi; ?>
				</div>
			</div>


</div>
<br><br><br>
