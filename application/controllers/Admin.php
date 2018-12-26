<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{

		$data = array(
			'active' => 'dashboard'
		);

		$this->load->view('partial/header_admin');
		$this->load->view('admin_page/navbar_admin', $data);
		$this->load->view('admin_page/container_admin');
		$this->load->view('partial/footer_admin');
	}
	public function files()
	{
		
		$data = array(
			'active' => 'files'
		);

		$this->load->view('partial/header_admin');
		$this->load->view('admin_page/navbar_admin', $data);
		$this->load->view('admin_page/container_files');
		$this->load->view('partial/footer_admin');
	}
	public function profile()
	{
		
		$data = array(
			'active' => 'profile'
		);

		$this->load->view('partial/header_admin');
		$this->load->view('admin_page/navbar_admin', $data);
		$this->load->view('admin_page/profile');
		$this->load->view('partial/footer_admin');
	}
	public function upload()
	{
		
		$data = array(
			'active' => 'upload'
		);

		$this->load->view('partial/header_admin');
		$this->load->view('admin_page/navbar_admin', $data);
		$this->load->view('admin_page/upload');
		$this->load->view('partial/footer_admin');
	}

	public function contoh() {

		$this->load->view('contohhtml');

	}

	//end of index
		
}
