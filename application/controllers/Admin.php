<?php
class Admin extends CI_Controller{

	public function __construct(){

		parent::__construct();
	}


	public function index(){
		$this->load->view('layouts/admin/admin');

	}

	public function login(){
		$this->load->view('layouts/admin/login_page');

	}

}
?>