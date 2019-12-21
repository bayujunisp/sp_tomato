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
        <!--  <?php		

			$no = 1;
			foreach ($hamapenyakit as $data) {
	
              ?>
                <tr>
                	<td><?php echo $no; ?></td>
                	<td><?= $data['kode_hp'];  ?></td>
                	<td><?= $data['hamapenyakit'];  ?></td>
                	<td><a href="<?php echo base_url()?>user/detail_diagnosa/<?= $data['kode_hp']; ?>"></a></td>
                </tr>
                <?php $no++; } ?> -->
                <?php  

                $konek_db = mysqli_connect('localhost','root','','sp_tomato');
                $gejala = $_POST['kode_gejala'];
                $jumlah_dipilih = count($gejala);
                for($x=0;$x<$jumlah_dipilih;$x++){
                	$tampil ="select DISTINCT p.kode_hp, p.hamapenyakit from basispengetahuan b, hamapenyakit p where b.kode_gejala='$gejala[$x]' and p.kode_hp=b.kode_hp group by kode_hp";
                	$result = mysqli_query($konek_db, $tampil);
                	$hasil  = mysqli_fetch_array($result);   

                }
                echo "
                <tr>  
                	<td>".$x."</td>
                	<td>".$hasil['kode_hp']."</td>
                	<td>".$hasil['hamapenyakit']."</td> 
                	<td><a href=\"hasildiagnosa.php?id=".$hasil['kode_hp']."\" class='btn btn-primary'><i class='fa fa-search'></i></a></td>
                </tr>   

                ";


                ?>

            </tbody>
        </table>
        <a href="<?php echo base_url()?>user/konsultasi" class="btn btn-primary btn-lg"><span class="fa fa-arrow-left"></span> Konsultasi Lagi</a>
    </div>
    <br><br><br><br><br>
    <br><br><br><br><br>
    <br><br><br><br><br>
    <br><br><br>