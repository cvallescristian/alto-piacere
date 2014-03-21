<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Menu extends CI_Controller {

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
		//cargamos el modelo
		$data['indice']=3;
		$this->load->model("admin_model","uum");
		$data['lista_categoria']=$this->uum->list_categoria();
		$data['lista_producto']= $this->uum->list_producto();
		$data['informacion']= $this->uum->get_info();
		$this->load->view("layout/header",$data);
		$this->load->view('home/menu',$data);
		$this->load->view("layout/footer",$data);
	}
}
