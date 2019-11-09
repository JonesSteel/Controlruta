<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Login_Controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
	}

	public function index()
	{
		$this->load->view('login');
	}
}
