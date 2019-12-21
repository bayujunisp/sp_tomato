<br><br>
<div class="container">
<h2><b>Hasil Diagnosa</b></h2>
<hr>
	<table id="example1" class="table table-bordered table-striped">
		<thead>
			<tr>
				<th>NO</th>
				<th>Kode Hama Dan Penyakit</th>
				<th>Nama Penyakit</th>
				<th>Detail</th>
			</tr>
		</thead>
		<tbody>
         <?php		

			$no = 1;
			foreach ($hamapenyakit as $hamapenyakit) {
	
              ?>
                <tr>
                	<td><?php echo $no; ?></td>
                	<td><?php echo $hamapenyakit->kode_hp;  ?></td>
                	<td><?php echo $hamapenyakit->hamapenyakit;  ?></td>
                    <td>
                        <a href="<?php echo base_url()?>user/detail_hp/<?= $hamapenyakit->kode_hp; ?>" class="btn btn-primary"><span class="fa fa-search"></span></a></td>
                </tr>
                <?php $no++; } ?>
                

            </tbody>
        </table>
        <a href="<?php echo base_url()?>user/konsultasi" class="btn btn-primary btn-lg"><span class="fa fa-arrow-left"></span> Konsultasi Lagi</a>
    </div>
    <br><br><br><br><br>
    <br><br><br><br><br>
    <br><br><br><br><br>
    <br><br><br>