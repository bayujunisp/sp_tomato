<?php 
/**
* 
*/
class model_user extends CI_Model
{	

	function diagnosa(){

		$gejala = $this->input->post('kode_gejala');
		$jumlah_dipilih = count($gejala);
       for($x=0;$x<$jumlah_dipilih;$x++){

       	$this->db->query("select DISTINCT p.kode_hp, p.hamapenyakit from basispengetahuan b, hamapenyakit p where b.kode_gejala='$gejala[$x]' and p.kode_hp=b.kode_hp group by kode_hp");
       	
		return $this->db->get();               
		}

	} 

}