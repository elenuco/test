<?php
defined('BASEPATH') or exit('No direct script access allowed');

class principal_controller extends CI_Controller
{

	public function index()
	{
		$data['css'] = $this->load->view('layouts/css', NULL, TRUE);
      	$data['scripts'] = $this->load->view('layouts/scripts', NULL, TRUE);
      	$data['header'] = $this->load->view('layouts/header', NULL, TRUE);
		$data['footer'] = $this->load->view('layouts/footer', NULL,TRUE);
		$this->load->view('menu',$data);
	}

	public function users() {
		$data['css'] = $this->load->view('layouts/css', NULL, TRUE);
        $data['scripts'] = $this->load->view('layouts/scripts', NULL, TRUE);
        $data['header'] = $this->load->view('layouts/header', NULL, TRUE);
		$data['footer'] = $this->load->view('layouts/footer', NULL,TRUE);
		$this->load->view('mantenimientousers',$data);
	}
}
