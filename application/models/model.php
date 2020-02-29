<?php
class model extends CI_Model{
	
	public function mostrar_user (){
		$users=$this->db->get('usuarios');
		return $users->result();
	}

	public function mostrar_roles (){
		$roles=$this->db->get('opciones_menu');
		return $roles->result();
	}

	public function insertar_usuarios ($data){
		$this->db->set('codigo',$data['codigo']);
		$this->db->set('name',$data['nombre']);
		$this->db->set('clave',sha1(md5($data['clave'])));
		$this->db->insert('usuarios');
	}
	
	public function insertar_rol ($data){
		$this->db->set('rol',$data['rol']);
		$this->db->insert('roles');
	}
	
	public function obtener_usuario ($id_usuario){
		$this->db->where('idusr',$id_usuario);
		$usuarios=$this->db->get('usuarios');
		return $usuarios->result();
	}

	public function obtener_opciones ($id_rol){
		$this->db->where('id_rol',$id_rol);
		$roles=$this->db->get('roles');
		return $roles->result();
	}

	public function actualizar_usuario ($data){
		$this->db->set('username',$data['username']);
		$this->db->set('password',sha1(md5($data['password'])));
		$this->db->set('email',$data['email']);
		$this->db->set('rol_id',$data['rol_id']);
		$this->db->where('id_usuario',$data['id_usuario']);
		$this->db->update('usuarios');
	}

	public function actualizar_rol (){
		$this->db->set('rol',$data['rol']);
		$this->db->update('rol',$data);
	}

	public function delete_usuario($id_usuario){
		$this->db->where('id_usuario',$id_usuario);
		$this->db->delete('usuarios');
	}

	
}
?>