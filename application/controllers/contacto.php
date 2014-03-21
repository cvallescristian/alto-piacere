<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contacto extends CI_Controller {

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
		$data['indice']=7;
		$this->load->model("admin_model","uum");
		$data['informacion']= $this->uum->get_info();
		$this->load->view("layout/header",$data);
		$this->load->view('home/contacto');
		$this->load->view("layout/footer");
	}
	public function enviar(){
		$mensaje ="El mensaje es : \n\n".$this->input->post('mensaje');
		$to = "valles.cristian1992@gmail.com";
		$subject = "Mensaje de contacto desde el sitio de ".$this->input->post('email');
		mail($to,$subject,$mensaje);

		echo "<script>alert('Mensaje enviado con exito')</script>";
		redirect(base_url('contacto'),'refresh');
	}
}
