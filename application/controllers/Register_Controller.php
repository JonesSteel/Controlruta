<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Register_Controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('register_model');
	}

	public function index()
	{
		$this->load->view('register');
	}

	public function register() {
		$rfc = $this->input->post('rfc');
		$nombre = $this->input->post('name');
		$a_paterno = $this->input->post('a_paterno');
		$a_materno = $this->input->post('a_materno');
		$nivel_acceso = $this->input->post('nivel_acceso');
		$password = $this->input->post('password');

		if (($rfc == ")||($nombre == ")||($a_paterno == ")||($a_materno == ")||($nivel_acceso == ")||($password == ")){
			echo 'Ha ocurrido un error!';
		} else {
			$data = $this->model->insert($rfc, $nombre, $a_paterno, $a_materno, $nivel_acceso, $password);

			if ($data == 'true') {
				echo 'El registro se ha realizado con éxito';
			} else {
				echo 'Ha ocurrido un error en el registro';
			}
		}
	}
}
