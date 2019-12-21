<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class auth extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');

		$this->load->model('model_login');


	}
	public function index()
	{

		$this->form_validation->set_rules('username', 'username', 'required|trim');
		$this->form_validation->set_rules('password','password','required|trim');

		if ($this->form_validation->run() == false)
		{

			$this->load->view('admin/login');

		} else{

			$username = $this->input->post('username');
			$password = $this->input->post('password');
			
			$cek = $this->model_login->check_user($username,$password)->num_rows();
			
			if($cek == 1) {

				$db = $this->model_login->check_user($username,$password)->row();


				$data_login= array('is_login'=>TRUE,
					'id_admin'  =>$db->id_admin);
				$this->session->set_userdata($data_login);

				$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					Selamat Datang!
				</div>
				');
				redirect('admin');

			} else { 

				$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					Invalid Username And Password!
				</div>
				');
				redirect('auth');

			}
		}
	}

	public function logout(){

		$this->session->sess_destroy();

		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			Logout Success!
		</div>
		');
		redirect('auth');

	}
}
