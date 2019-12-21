<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');

		$this->load->model('model_login');

		$this->load->model('model_admin');

		$id_admin = $this->session->userdata('id_admin');

		$this->db->where('id_admin',$id_admin);
		$db = $this->db->get('admin')->row();

		if (!$this->session->userdata('id_admin') == TRUE) {
			redirect('auth');
		}

	}
	public function index()
	{

		$id_admin = $this->session->userdata('id_admin');

		$db = $this->model_admin->get_admin($id_admin)->row(); 
		$data['nama_admin'] = $db->nama_admin;
		$data['gejala'] = $this->model_admin->get_all_gejala()->num_rows();
		$data['hamapenyakit'] = $this->model_admin->get_all_hamapenyakit()->num_rows();

		$this->load->view('admin/navbar',$data);
		$this->load->view('admin/sidebar',$data);
		$this->load->view('admin/dashboard_admin',$data);
		$this->load->view('admin/footer');
		
	}

	public function profile()
	{

		$id_admin = $this->session->userdata('id_admin');

		$db = $this->model_admin->get_admin($id_admin)->row(); 
		$data['nama_admin'] = $db->nama_admin;

		$data['admin'] = $this->model_admin->get_admin($id_admin)->result_array();


		$this->load->view('admin/navbar',$data);
		$this->load->view('admin/sidebar',$data);
		$this->load->view('admin/profile',$data);
		$this->load->view('admin/footer');
		
	}	

	public function edit_admin(){

		$delete = $this->model_admin->edit_admin();

		if ($delete['result'] == 'success') {

			
			
				$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				Edit Data Profile Success!
			</div>
			');
				redirect('admin/profile');
			
		}else{
			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				Edit Profile Failed!
			</div>
			');
				redirect('admin/profile');

		}

	}

	
	public function gejala(){	

		$id_admin = $this->session->userdata('id_admin');

		$db = $this->model_admin->get_admin($id_admin)->row(); 
		$data['nama_admin'] = $db->nama_admin; 
		$data['gejala'] = $this->model_admin->get_all_gejala()->result_array();

		$this->load->view('admin/navbar',$data);
		$this->load->view('admin/sidebar',$data);
		$this->load->view('admin/gejala',$data);
		$this->load->view('admin/footer');		
		
	}

	public function add_gejala(){

		$add = $this->model_admin->add_gejala();

		if ($add['result'] == 'success') {

			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				Add Gejala Success!
			</div>
			');
			redirect('admin/gejala');

		}else{
			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				Add Gejala Failed!
			</div>
			');
			redirect('admin/gejala');
		}

	}

	public function delete_gejala(){

		$delete = $this->model_admin->delete_gejala();

		if ($delete['result'] == 'success') {

			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				Delete Gejala Success!
			</div>
			');
			redirect('admin/gejala');

		}else{
			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				Delete Gejala Failed!
			</div>
			');
			redirect('admin/gejala');
		}

	}
	public function edit_gejala(){

		$delete = $this->model_admin->edit_gejala();

		

		if ($delete['result'] == 'success') {

			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				Edit Gejala Success!
			</div>
			');
			

			redirect('admin/gejala');

		}else{
			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				Edit Gejala Failed!
			</div>
			');

		}

	}

	public function hamapenyakit(){	

		$id_admin = $this->session->userdata('id_admin');

		$db = $this->model_admin->get_admin($id_admin)->row(); 
		$data['nama_admin'] = $db->nama_admin; 
		$data['hamapenyakit'] = $this->model_admin->get_all_hamapenyakit()->result_array();

		$this->load->view('admin/navbar',$data);
		$this->load->view('admin/sidebar',$data);
		$this->load->view('admin/hamapenyakit',$data);
		$this->load->view('admin/footer');		
		
	}

	public function add_hamapenyakit(){

		$add = $this->model_admin->add_hamapenyakit();

		if ($add['result'] == 'success') {

			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				Add Hama Dan Penyakit Success!
			</div>
			');
			redirect('admin/hamapenyakit');

		}else{
			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				Add Hama Dan Penyakit Failed!
			</div>
			');
			redirect('admin/hamapenyakit');
		}

	}

	public function delete_hamapenyakit(){

		$delete = $this->model_admin->delete_hamapenyakit();

		if ($delete['result'] == 'success') {

			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				Delete Hama Dan Penyakit Success!
			</div>
			');
			redirect('admin/hamapenyakit');

		}else{
			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				Delete Hama Dan Penyakit Failed!
			</div>
			');
			redirect('admin/hamapenyakit');
		}

	}
	public function edit_hamapenyakit(){

		$delete = $this->model_admin->edit_hamapenyakit();

		

		if ($delete['result'] == 'success') {

			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				Edit Hama Dan Penyakit Success!
			</div>
			');
			

			redirect('admin/hamapenyakit');

		}else{
			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				Edit Hama Dan Penyakit Failed!
			</div>
			');

		}

	}

		public function detail_hp(){	

		$id_admin = $this->session->userdata('id_admin');
		$db = $this->model_admin->get_admin($id_admin)->row(); 
		$data['nama_admin'] = $db->nama_admin;

		$kode_hp = $this->uri->segment('3');
		$data['kode_hp'] = $kode_hp;

		$hp= $this->model_admin->get_hp($kode_hp)->row(); 
		$data['hamapenyakit'] = $hp->hamapenyakit; 

		$data['gejala'] = $this->model_admin->get_gejala_hp($kode_hp)->result_array();
		$data['all_gejala'] = $this->model_admin->get_all_gejala()->result_array();

		$this->load->view('admin/navbar',$data);
		$this->load->view('admin/sidebar',$data);
		$this->load->view('admin/detail_hp',$data);
		$this->load->view('admin/footer');		
		
	}

	public function add_basispengetahuan(){

		$kode_hp = $this->input->post('kode_hp');
		$add = $this->model_admin->add_basispengetahuan();

		if ($add['result'] == 'success') {

			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				Add Gejala Success!
			</div>
			');
			redirect('admin/detail_hp/'.$kode_hp);

		}else{
			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				Add Gejala Failed!
			</div>
			');
			redirect('admin/detail_hp'.$kode_hp);
		}

	}

	public function delete_basispengetahuan(){

		
		$kode_hp = $this->input->post('kode_hp');
		$delete = $this->model_admin->delete_basispengetahuan();

		if ($delete['result'] == 'success') {

			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				Delete Basis Pengetahuan Success!
			</div>
			');
			redirect('admin/detail_hp/'.$kode_hp);

		}else{
			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				Delete Basis Pengetahuan Failed!
			</div>
			');
			redirect('admin/detail_hp/'.$kode_hp);
		}

	}

}
