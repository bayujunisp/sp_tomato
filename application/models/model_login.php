<?php 
/**
* 
*/
class model_login extends CI_Model
{	

	public function check_user($username,$password) {

		$this->db->select('*');
		$this->db->from('admin');
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		
		return $this->db->get();

     }

}
?>