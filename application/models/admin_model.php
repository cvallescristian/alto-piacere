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
			return true;
		}
	}
}