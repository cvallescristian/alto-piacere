<?php 
class Admin_model extends CI_Model{

	function registro_admin($data){
		$this->db->insert("Administrador",$data);
	}

	function login_admin($email,$pass){
		$query = $this->db->query("SELECT * FROM Administrador WHERE email = '$email' AND password='$pass' LIMIT 1");

		if ($query->num_rows()==0) {
			return false;
		}else{
			return $query->row();
		}
	}
	function add_slide(){
		$this->db->trans_start();
		$datos= array(
			'temp'=>1
			);
		$this->db->insert('Slide',$datos);
		$insert_id = $this->db->insert_id();
   		$this->db->trans_complete();
  
	 return  $insert_id;
	}
	function list_categoria(){
		$query = $this->db->query("SELECT * FROM Categoria ");
		return $query->result();
	}
	function list_producto(){
		$query = $this->db->query("SELECT * FROM Producto,Categoria WHERE Producto.categoria_id=Categoria.categoria_id");
		return $query->result();
	}
	function crear_producto($datos){
		$this->db->trans_start();
		$this->db->insert('Producto',$datos);
		$insert_id = $this->db->insert_id();
   		$this->db->trans_complete();
  
	 return  $insert_id;
	}
	function get_producto($id){
		$query = $this->db->query("SELECT * FROM Producto WHERE producto_id='$id' LIMIT 1");
		return $query->row();
	}
	function get_categoria($id){
		$query = $this->db->query("SELECT * FROM Categoria WHERE categoria_id='$id' LIMIT 1");
		return $query->row();
	}
	function actualizar_producto($datos,$id){
		$this->db->where('producto_id',$id);
		$this->db->update('Producto',$datos);
	}
	function borrar_producto($id){
		$this->db->where('producto_id',$id);
		$this->db->delete('Producto');
	}
	function crear_categoria($datos){
		$this->db->trans_start();
		$this->db->insert('Categoria',$datos);
		$insert_id = $this->db->insert_id();
   		$this->db->trans_complete();
  
	 return  $insert_id;
	}
	function actualizar_categoria($datos,$id){
		$this->db->where('categoria_id',$id);
		$this->db->update('Categoria',$datos);
	}
	function borrar_categoria($id){
		$this->db->where('categoria_id',$id);
		$this->db->delete('Categoria');
	}
	function list_promociones(){
		$query = $this->db->query("SELECT * FROM Promocion,Categoria WHERE Promocion.categoria_id=Categoria.categoria_id");
		return $query->result();
	}
	function crear_promocion($datos){
		$this->db->trans_start();
		$this->db->insert('Promocion',$datos);
		$insert_id = $this->db->insert_id();
   		$this->db->trans_complete();
  
	 return  $insert_id;
	}
	function get_promocion($id){
		$query = $this->db->query("SELECT * FROM Promocion WHERE promocion_id='$id' LIMIT 1");
		return $query->row();
	}
	function actualizar_promocion($datos,$id){
		$this->db->where('promocion_id',$id);
		$this->db->update('Promocion',$datos);
	}
	function borrar_promocion($id){
		$this->db->where('promocion_id',$id);
		$this->db->delete('Promocion');
	}
	function crear_galeria(){
		$datos = array(
			'temp' => 1
			);
		$this->db->trans_start();
		$this->db->insert('Galeria',$datos);
		$insert_id = $this->db->insert_id();
   		$this->db->trans_complete();
  
	 return  $insert_id;
	}
	function list_galeria(){
		$query = $this->db->query("SELECT * FROM Galeria");
		return $query->result();
	}
	function galeria_borrar($id){
		$this->db->where('galeria_id',$id);
		$this->db->delete('Galeria');	
	}
	function list_user(){
		$query = $this->db->query("SELECT * FROM Administrador");
		return $query->result();
	}
	function crear_user($datos){
		$this->db->trans_start();
		$this->db->insert('Administrador',$datos);
		$insert_id = $this->db->insert_id();
   		$this->db->trans_complete();
	}
	function borrar_user($id){
		$this->db->where('administrador_id',$id);
		$this->db->delete('Administrador');
	}
}