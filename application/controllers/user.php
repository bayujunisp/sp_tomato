<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');

		$this->load->model('model_admin');
		$this->load->model('model_user');

	}
	public function index()
	{
		$this->load->view('user/header');
		$this->load->view('user/home');
		$this->load->view('user/footer');


	}
	public function data_penyakit()
	{

		$data['hamapenyakit'] = $this->model_admin->get_all_hamapenyakit()->result_array();

		$this->load->view('user/header');
		$this->load->view('user/data_penyakit',$data);
		$this->load->view('user/footer');

	}
		public function detail_penyakit(){

		$penyakit = $this->uri->segment(3);
		$data['penyakit'] = $this->model_user->detail_penyakit($penyakit)->result_array();
		$this->load->view('user/header');
		$this->load->view('user/detail_penyakit',$data);
		$this->load->view('user/footer');

	}

	public function konsultasi()
	{

		$data['gejala'] = $this->model_admin->get_all_gejala()->result_array();

		$this->load->view('user/header');
		$this->load->view('user/konsultasi',$data);
		$this->load->view('user/footer');

	}

	public function diagnosa(){
			

		$gejala = $this->input->post('kode_gejala');
		$jumlah_dipilih = count($gejala);
       for($x=0;$x<$jumlah_dipilih;$x++){

       $query =	$this->db->query("select DISTINCT p.kode_hp, p.hamapenyakit from basispengetahuan b, hamapenyakit p where b.kode_gejala='$gejala[$x]' and p.kode_hp=b.kode_hp group by kode_hp limit 1");
			
		$data['hamapenyakit'] = $query->result();                 
		}


		$this->load->view('user/header');
		$this->load->view('user/diagnosa',$data);
		$this->load->view('user/footer');
            
	}

		public function detail_hp(){	

		$kode_hp = $this->uri->segment('3');
		$data['kode_hp'] = $kode_hp;

		$hp= $this->model_admin->get_hp($kode_hp)->row(); 
		$data['hamapenyakit'] = $hp->hamapenyakit; 
		$data['solusi'] = $hp->solusi;

		$data['gejala'] = $this->model_admin->get_gejala_hp($kode_hp)->result_array();

		$this->load->view('user/header');
		$this->load->view('user/detail_hp',$data);
		$this->load->view('user/footer');
		
	}


}