<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {


	public function index()
	{
		if ($this->session->userdata('id')!=null) {
			redirect(base_url('admin/dashboard'),'refresh');
		}else{
			$this->load->view('admin/header_admin');
			$this->load->view('admin/index');
			$this->load->view('admin/footer_admin');
		}
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
			$this->session->all_userdata();
			$this->session->set_userdata('id', $return->administrador_id);
			$this->session->set_userdata('nombre', $return->nombre);
			$this->session->set_userdata('email', $return->email);
			$this->session->set_userdata('tipo', $return->admin);
			redirect(base_url('admin/dashboard'),'refresh');
		}
	}
	public function logout(){
		$this->session->all_userdata();
		$this->session->unset_userdata('id');
		$this->session->unset_userdata('nombre');
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('tipo');
		redirect(base_url('admin'),'refresh');
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
		if ($this->session->userdata('id')==null) {
			redirect(base_url('admin'),'refresh');
		}else{
			$data['indice'] = 1;
			$this->load->view('admin/dashboard/header',$data);
			$this->load->view('admin/dashboard/index',$data);
			$this->load->view('admin/dashboard/footer');
		}
	} 

	public function crear_slider(){
		if ($this->session->userdata('id')==null) {
			redirect(base_url('admin'),'refresh');
		}else{
			$data['indice']=1;
			$this->load->view('admin/dashboard/header');
			$this->load->view('admin/dashboard/crear_slider');
			$this->load->view('admin/dashboard/footer');
		}
	}
	public function crear_slider_action(){
		//cargamos el modelo
		$this->load->model('admin_model',"uum");
		$id= $this->uum->add_slide();
		move_uploaded_file($_FILES['userfile']['tmp_name'], "images/slide/$id".".png");
		//redirect(base_url('admin/dashboard'),'refresh');
	}
	public function productos(){
		if ($this->session->userdata('id')==null) {
			redirect(base_url('admin'),'refresh');
		}else{
		$data['indice'] = 3;
			//cargamos el modelo
			$this->load->model('admin_model',"uum");
			$data['lista_producto']= $this->uum->list_producto();
			$data['lista_categoria']= $this->uum->list_categoria();
			$this->load->view('admin/dashboard/header',$data);
			$this->load->view('admin/productos/index',$data);
			$this->load->view('admin/dashboard/footer');
		}
	}

	public function producto_crear(){
		if ($this->session->userdata('id')==null) {
			redirect(base_url('admin'),'refresh');
		}else{
			$data['indice'] = 3;

			//cargamos el modelo
			$this->load->model('admin_model',"uum");
			$data['lista_categoria']= $this->uum->list_categoria();
			$this->load->view('admin/dashboard/header',$data);
			$this->load->view('admin/productos/crear',$data);
			$this->load->view('admin/dashboard/footer');
		}
	}
	public function producto_crear_action(){
		$datos = array(
			'nombre_producto' => $this->input->post('nombre_producto'),
			'categoria_id' => $this->input->post('categoria_id'),
			'ingredientes' => $this->input->post('ingredientes'),
			'precio_producto' => $this->input->post('precio')

		);

		//cargamos el modelo
		$this->load->model('admin_model',"uum");
		$this->uum->crear_producto($datos);

		redirect(base_url('admin/productos?sus=1'),'refresh');	
	}

	public function producto_editar(){
		if ($this->session->userdata('id')==null) {
			redirect(base_url('admin'),'refresh');
		}else{
			$data['indice'] = 3;

			$id = $this->input->get('id');
			//cargamos el modelo
			$this->load->model('admin_model',"uum");
			$data['producto']= $this->uum->get_producto($id);
			$data['lista_categoria']= $this->uum->list_categoria();
			$this->load->view('admin/dashboard/header',$data);
			$this->load->view('admin/productos/editar',$data);
			$this->load->view('admin/dashboard/footer');
		}
	}
	public function producto_editar_action(){
		$id = $this->input->post('producto_id');
		$datos = array(
			'nombre_producto' => $this->input->post('nombre_producto'),
			'categoria_id' => $this->input->post('categoria_id'),
			'ingredientes' => $this->input->post('ingredientes'),
			'precio_producto' => $this->input->post('precio')

		);
		$this->load->model('admin_model',"uum");
		$this->uum->actualizar_producto($datos,$id);
		redirect(base_url('admin/productos?sus=2'),'refresh');
	}
	public function producto_borrar(){
		$id = $this->input->get('id');
		//cargamos el modelo
		$this->load->model('admin_model',"uum");
		$this->uum->borrar_producto($id);
		redirect(base_url('admin/productos?sus=3'),'refresh');
	}
	public function categorias(){
		if ($this->session->userdata('id')==null) {
			redirect(base_url('admin'),'refresh');
		}else{
			$data['indice'] = 2;

			$id = $this->input->get('id');
			//cargamos el modelo
			$this->load->model('admin_model',"uum");
			$data['lista_categoria']= $this->uum->list_categoria();
			$this->load->view('admin/dashboard/header',$data);
			$this->load->view('admin/categorias/index',$data);
			$this->load->view('admin/dashboard/footer');
		}
	}
	public function categoria_crear(){
		if ($this->session->userdata('id')==null) {
			redirect(base_url('admin'),'refresh');
		}else{
			$data['indice'] = 2;
			$this->load->view('admin/dashboard/header',$data);
			$this->load->view('admin/categorias/crear',$data);
			$this->load->view('admin/dashboard/footer');
		}
	}
	public function categoria_crear_action(){
		$datos = array(
			'nombre_categoria' => $this->input->post('nombre_categoria')
		);
		$this->load->model('admin_model',"uum");
		$this->uum->crear_categoria($datos);
		redirect(base_url('admin/categorias?sus=1'),'refresh');
	}
	public function categoria_editar(){
		if ($this->session->userdata('id')==null) {
			redirect(base_url('admin'),'refresh');
		}else{
			$id = $this->input->get('id');
			$data['indice'] = 2;
			//cargamos la base de datos 
			$this->load->model('admin_model',"uum");
			$data['categoria']=$this->uum->get_categoria($id);
			$this->load->view('admin/dashboard/header',$data);
			$this->load->view('admin/categorias/editar',$data);
			$this->load->view('admin/dashboard/footer');
		}
	}
	public function categoria_editar_action(){
		$id = $this->input->post('categoria_id');
		$datos = array(
			'nombre_categoria' => $this->input->post('nombre_categoria')
		);
		$this->load->model('admin_model',"uum");
		$this->uum->actualizar_categoria($datos,$id);
		redirect(base_url('admin/categorias?sus=2'),'refresh');
	}
	public function categoria_borrar(){
		$id = $this->input->get('id');
		//cargamos el modelo
		$this->load->model('admin_model',"uum");
		$this->uum->borrar_categoria($id);
		redirect(base_url('admin/categorias?sus=3'),'refresh');
	}
	public function promociones(){
		if ($this->session->userdata('id')==null) {
			redirect(base_url('admin'),'refresh');
		}else{
			$data['indice'] = 4;

			//cargamos la base de datos
			$this->load->model('admin_model',"uum");
			$data['lista_promociones']=$this->uum->list_promociones();
			$this->load->view('admin/dashboard/header',$data);
			$this->load->view('admin/promociones/index',$data);
			$this->load->view('admin/dashboard/footer');
		}
	}
	public function promocion_crear(){
		if ($this->session->userdata('id')==null) {
			redirect(base_url('admin'),'refresh');
		}else{
			$data['indice'] = 4;

			//cargamos el modelo
			$this->load->model('admin_model',"uum");
			$data['lista_categoria']= $this->uum->list_categoria();
			$this->load->view('admin/dashboard/header',$data);
			$this->load->view('admin/promociones/crear',$data);
			$this->load->view('admin/dashboard/footer');
		}
	}
	public function promocion_crear_action(){
		$datos = array(
			'titulo' => $this->input->post('nombre_producto'),
			'categoria_id' => $this->input->post('categoria_id'),
			'descripcion' => $this->input->post('descripcion'),
			'precio' => $this->input->post('precio')
		);

		//cargamos el modelo
		$this->load->model('admin_model',"uum");
		$id=$this->uum->crear_promocion($datos);
		move_uploaded_file($_FILES['foto']['tmp_name'], "images/promocion/$id".".png");

		redirect(base_url('admin/promociones?sus=1'),'refresh');	
	}
	public function promocion_editar(){
		if ($this->session->userdata('id')==null) {
			redirect(base_url('admin'),'refresh');
		}else{
			$id = $this->input->get('id');
			$data['indice'] = 4;
			//cargamos la base de datos 
			$this->load->model('admin_model',"uum");
			$data['promocion']=$this->uum->get_promocion($id);
			$data['lista_categoria']= $this->uum->list_categoria();
			$this->load->view('admin/dashboard/header',$data);
			$this->load->view('admin/promociones/editar',$data);
			$this->load->view('admin/dashboard/footer');
		}
	}
	public function promocion_editar_action(){
		$datos = array(
			'titulo' => $this->input->post('nombre_producto'),
			'categoria_id' => $this->input->post('categoria_id'),
			'descripcion' => $this->input->post('descripcion'),
			'precio' => $this->input->post('precio')
		);

		//cargamos el modelo
		$id=$this->input->post('promocion_id');
		$this->load->model('admin_model',"uum");
		$this->uum->actualizar_promocion($datos,$id);
		move_uploaded_file($_FILES['foto']['tmp_name'], "images/promocion/$id".".png");

		redirect(base_url('admin/promociones?sus=2'),'refresh');	
	}
	public function promocion_borrar(){
		$id = $this->input->get('id');
		//cargamos el modelo
		$this->load->model('admin_model',"uum");
		$this->uum->borrar_promocion($id);
		redirect(base_url('admin/promociones?sus=3'),'refresh');
	}
	public function galeria(){
		if ($this->session->userdata('id')==null) {
			redirect(base_url('admin'),'refresh');
		}else{
		$data['indice'] = 5;

			//cargamos el modelo
			$this->load->model('admin_model',"uum");
			$data['lista_galeria']= $this->uum->list_galeria();
			$this->load->view('admin/dashboard/header',$data);
			$this->load->view('admin/galeria/index',$data);
			$this->load->view('admin/dashboard/footer');
		}
	}
	public function galeria_crear(){
		if ($this->session->userdata('id')==null) {
			redirect(base_url('admin'),'refresh');
		}else{
			$data['indice'] = 5;

			//cargamos el modelo
			$this->load->model('admin_model',"uum");

			$this->load->view('admin/dashboard/header',$data);
			$this->load->view('admin/galeria/crear',$data);
			$this->load->view('admin/dashboard/footer');
		}
	}
	public function galeria_crear_action(){
		//cargamos el modelo
		$this->load->model('admin_model',"uum");
		$id=$this->uum->crear_galeria();
		move_uploaded_file($_FILES['photo']['tmp_name'], "images/galeria/$id".".png");
		redirect(base_url('admin/galeria'),'refresh');
	}
	public function galeria_editar(){
		if ($this->session->userdata('id')==null) {
			redirect(base_url('admin'),'refresh');
		}else{
			$data['indice'] = 5;

			//cargamos el modelo
			$this->load->model('admin_model',"uum");
			$data['galeria_id']=$this->input->get('id');
			$this->load->view('admin/dashboard/header',$data);
			$this->load->view('admin/galeria/editar',$data);
			$this->load->view('admin/dashboard/footer');
		}

	}
	public function galeria_editar_action(){
		$id=$this->input->post('galeria_id');
		move_uploaded_file($_FILES['photo']['tmp_name'], "images/galeria/$id".".png");

		redirect(base_url('admin/galeria?sus=2'),'refresh');	
	}
	public function galeria_borrar(){
		//cargamos el modelo
		$id = $this->input->get('id');
		$this->load->model('admin_model',"uum");
		$this->uum->galeria_borrar($id);
		redirect(base_url('admin/galeria?sus=3'),'refresh');
	}
	public function user(){
		if ($this->session->userdata('id')==null || $this->session->userdata('tipo')!=1) {
			redirect(base_url('admin'),'refresh');
		}else{
			$data['indice'] = 6;

			//cargamos la base de datos
			$this->load->model('admin_model',"uum");
			$data['lista_user']=$this->uum->list_user();
			$this->load->view('admin/dashboard/header',$data);
			$this->load->view('admin/user/index',$data);
			$this->load->view('admin/dashboard/footer');
		}
	}
	public function user_crear(){
		if ($this->session->userdata('id')==null || $this->session->userdata('tipo')!=1) {
			redirect(base_url('admin'),'refresh');
		}else{
			$data['indice'] = 6;
			$this->load->view('admin/dashboard/header',$data);
			$this->load->view('admin/user/crear',$data);
			$this->load->view('admin/dashboard/footer');
		}
	}
	public function user_crear_action(){
		$p= md5($this->input->post('password'));
		$datos = array(
			'nombre' => $this->input->post('nombre'),
			'email' => $this->input->post('email')
		);
		//cargamos la base de datos
		$this->load->model('admin_model',"uum");
		$this->uum->crear_user($datos);
		redirect(base_url('admin/user'),'refresh');
	}
	public function user_borrar(){
		$id = $this->input->get('id');
		$this->load->model('admin_model',"uum");
		$this->uum->borrar_user($id);
		redirect(base_url('admin/user'),'refresh');
	}
}
