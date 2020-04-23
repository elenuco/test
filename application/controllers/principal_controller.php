<?php
defined('BASEPATH') or exit('No direct script access allowed');

class principal_controller extends CI_Controller
{
 
	function __construct() {
		parent:: __construct();
		$this->load->helper('form');
		$this->load->model('model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['css'] = $this->load->view('Layouts/css', NULL, TRUE);
      	$data['scripts'] = $this->load->view('Layouts/scripts', NULL, TRUE);
      	$data['header'] = $this->load->view('Layouts/header', NULL, TRUE);
		$data['footer'] = $this->load->view('Layouts/footer', NULL,TRUE);
	$this->load->view('menu',$data);
	}

public function users() {
		$data['css'] = $this->load->view('Layouts/css', NULL, TRUE);
        $data['scripts'] = $this->load->view('Layouts/scripts', NULL, TRUE);
        $data['header'] = $this->load->view('Layouts/header', NULL, TRUE);
		$data['footer'] = $this->load->view('Layouts/footer', NULL,TRUE);
		$users=$this->model->mostrar_user();
		$data['users']=$users;
		$this->load->view('mantenimientousers',$data);
	}
public function updateuser(){
	$data['id_usuario']=$_POST["id_usuario"];
	$data['codigo']=$_POST["codigo"];
	$data['nombre']=$_POST["nombre"];
	$data['clave']=$_POST["clave"];
	$this->usuarios_model->actualizar_usuario($data);
	redirect('/principal_control/');
}
public function accion_users(){
	    $data['css'] = $this->load->view('Layouts/css', NULL, TRUE);
        $data['scripts'] = $this->load->view('Layouts/scripts', NULL, TRUE);
        $data['header'] = $this->load->view('Layouts/header', NULL, TRUE);
		$data['footer'] = $this->load->view('Layouts/footer', NULL,TRUE);
		$data['idusr']=$this->model->obtener_usuario($_REQUEST["idusr"]);
		$this->load->view('updateuser',$data);
}
public function newuser(){
	$data['css'] = $this->load->view('Layouts/css', NULL, TRUE);
        $data['scripts'] = $this->load->view('Layouts/scripts', NULL, TRUE);
        $data['header'] = $this->load->view('Layouts/header', NULL, TRUE);
		$data['footer'] = $this->load->view('Layouts/footer', NULL,TRUE);
		$this->load->view('agregarusuario', $data);
}
}