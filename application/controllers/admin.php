<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('admin/header_admin');
		$this->load->view('admin/index');
		$this->load->view('admin/footer_admin');
	}
	public function login(){
		$email = $this->input->post('email');
		$pass = md5($this->input->post('pass'));

		//cargamos el modelo
		$this->load->model("admin_model","uum");
		$return = $this->uum->login_admin($email,$pass);

		if ($return == false) {
			redirect(base_url('admin/index?err=1'),'refresh');
		}else{
			redirect(base_url('admin/dashboard'),'refresh');
		}
	}
	
	public function zeus(){ //para registrar un administrador
		$pass = md5("piacere.2014");
		$datos = array(
			'email' => 'pablo@metpizza.cl',
			'password' => $pass 
		);

		//cargamos el modelo
		$this->load->model("admin_model","uum");
		$this->uum->registro_admin($datos);
	}

	public function dashboard(){
		$this->load->view('admin/dashboard/header');
		$this->load->view('admin/dashboard/index');
		$this->load->view('admin/dashboard/footer');
	} 

	public function crear_slider(){
		$this->load->view('admin/dashboard/header');
		$this->load->view('admin/dashboard/crear_slider');
		$this->load->view('admin/dashboard/footer');
	}
	public function crear_slider_action(){
		
	}
}
