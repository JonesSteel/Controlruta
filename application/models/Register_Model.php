<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Register_Model extends CI_Model {

	public function insert($rfc, $name, $a_paterno, $a_materno, $nivel_acceso, $password) {
		$data = array(
			'rfc' 		   => $rfc,
			'nombre'       => $name,
			'a_paterno'    => $a_paterno,
			'a_materno'    => $a_materno,
			'nivel_acceso' => $nivel_acceso,
			'password' 	   => $password
		);

		$this->db->insert('usuarios', $data);
		return true;
	}
}
