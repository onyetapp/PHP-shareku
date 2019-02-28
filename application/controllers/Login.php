<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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

	public function __construct() { // __construct() merupakan fungsi yang akan selalu di jalankan setiap script di bawahnya di jalankan

		parent::__construct();

		// selalu cek guest
		$this->model->cekGuest();

	} // end construct

	public function index()
	{
		
		if ($this->session->userdata('login_status') && $this->session->userdata('username')) {
			
			redirect('../members', 'location');
			exit();

		}

		$data = array(
			'active' => 'home'
		);

		$this->load->view('partial/header_landing');
		$this->load->view('landing_page/navbar', $data);
		$this->load->view('landing_page/container');
		$this->load->view('modal/contact_us');
		$this->load->view('modal/cara_unduh');
		$this->load->view('modal/cara_unggah');
		$this->load->view('modal/reset_pass');
		$this->load->view('partial/footer_landing');

	}
	//end of index
	
	public function proses() {

		$email = $this->input->post('txtemail');
		$email = html_escape(trim($email));

		$password = $this->input->post('txtpassword');
		$password = $password;

		if ($this->model->loginUser($email, $password)) {
			
			redirect('../members', 'location');

		} else {

			redirect('../message', 'location');

		}

	} // end proses - Proses Login

	public function prosesdaftar() {

		$nama	= $this->input->post('txtnama');
		$email	= $this->input->post('txtemail');
		$uname	= $this->input->post('txtuname');
		$pass	= $this->input->post('txtpassword');

		$this->model->daftarUser($nama, $email, $uname, $pass);

		redirect('../message', 'location');

	} // end prosesdaftar

	public function prosesdownload() {

		$this->load->library('session');
		$this->load->library('user_agent');

		$token	= $this->input->post('tokenfile');
		$exist 	= $this->model->getFileByToken($token);
		
		if ($exist) {
			
			$guest	= $this->model->cekGuest();

			$data_send	= array(

				'down_guest_id' => $guest->guest_id,
				'down_user_uname' => ($this->session->userdata('login_status')) ? $this->session->userdata('username') : '',
				'down_file_id' => $exist->file_id,
				'down_tgl' => now(),
				'down_ref' => ($this->agent->is_referral()) ? $this->agent->referrer() : 'shareku'
			
			);

			$insertq= $this->db->insert('tb_download', $data_send);

			if ($insertq == 1) {

				$this->load->helper('file');
				$this->load->library('zip');

				$read = read_file('./pathtofiles/'. $exist->file_nama);

				$this->zip->add_data($exist->file_nama_asli, $read);

				// Write the zip file to a folder on your server. Name it "my_backup.zip"
				// $this->zip->archive('my_backup.zip');

				// Download the file to your desktop. Name it "my_backup.zip"
				$this->zip->download('sharku.net_'. $exist->file_nama_asli .'.zip');	
			
			} else {

				$this->session->set_flashdata('error', 'Kesalahan Sistem Terjadi!');

				redirect('../message/files', 'location');

			}

		} else {

			$this->session->set_flashdata('error', 'Data File Tidak Ditemukan!');

			redirect('../message/files', 'location');

		}

	}

	public function prosesreset() {

		$this->load->library('session');

		$token	= $this->input->post('txttoken');
		$newpas = $this->input->post('txtpassword');
		$conpas = $this->input->post('txtconfirm');

		if ($newpas === $conpas) {
			
			$cekreset	= $this->model->resetPasswordProses($token, $newpas);

			if ($cekreset) {
				
				redirect('../message', 'location');

			} else {

				redirect('../message/login_formreset_'. $token, 'location');

			}

		} else {

			$this->session->set_flashdata('error', 'Password tidak sesuai!');
			redirect('../message/login_formreset_'. $token, 'location');

		}

	}

	public function contactMe() {

		$this->load->library('session');

		$nama	= trim($this->input->post('txtnama'));
		$email 	= $this->input->post('txtemail');
		$pesan 	= $this->input->post('txtmessage');
		$pesan 	= trim($pesan);

		if (isset($pesan) && $pesan != '' && isset($nama) && $nama != '') {
			
			$send 	= $this->model->sendMeEmail($email, $nama, $pesan);

		} else {

			$this->session->set_flashdata('error', 'Harap isi nama anda dan pesan anda!');

		}

		redirect('../message', 'location');

	}

	public function requestReset() {

		$email	= $this->input->post('txtemailreset');

		$send	= $this->model->resetPasswordRequest($email);

		redirect('../message', 'location');

	}

	public function formreset($token = 'ada') {

		$this->load->library('session');

		$cektoken	= $this->model->getResetData($token);

		if ($cektoken) {
			
			$data = array(
				'active'=> 'home',
				'token'	=> $token
			);

			$this->load->view('partial/header_landing');
			$this->load->view('landing_page/navbar', $data);
			$this->load->view('landing_page/form_reset');
			$this->load->view('modal/contact_us');
			$this->load->view('modal/cara_unduh');
			$this->load->view('modal/cara_unggah');
			$this->load->view('modal/reset_pass');
			$this->load->view('partial/footer_landing');

		} else {

			$this->session->set_flashdata('error', 'Anda tidak mempunya akses!');
			redirect('../message', 'location');

		}

	}
	
	public function files()
	{

		$getfile= $this->model->getFileList();
		$fileku = ($getfile) ? $getfile : array() ;

		$data = array(
			'active' => 'files',
			'allfile'=> $fileku
		);

		$this->load->view('partial/header_landing');
		$this->load->view('landing_page/navbar', $data);
		$this->load->view('landing_page/files_container');
		$this->load->view('modal/contact_us');
		$this->load->view('modal/cara_unduh');
		$this->load->view('modal/cara_unggah');
		$this->load->view('modal/reset_pass');
		$this->load->view('partial/footer_landing');

	}

	public function download($idfile) {

		$exist= $this->model->getFileByToken($idfile);

		if ($exist) {

			$this->model->addFileViewers($idfile);

			$data = array(
				'active' => 'detail',
				'fileid' => strtolower($idfile),
				'detail' => $exist
			);
	
			$this->load->view('partial/header_landing');
			$this->load->view('landing_page/navbar', $data);
			$this->load->view('landing_page/detail_files_container', $data);
			$this->load->view('modal/contact_us');
			$this->load->view('modal/cara_unduh');
			$this->load->view('modal/cara_unggah');
			$this->load->view('modal/reset_pass');
			$this->load->view('partial/footer_landing');

		} else {

			$this->load->library('session');

			$this->session->set_flashdata('error', 'Data File Tidak Ditemukan!');

			redirect('../message/files', 'location');

		}
		
	}

	public function verifyuser($token = 'tokenku') {

		$this->model->verifyUser($token);

		redirect('../message', 'location');

	}

	public function errorPage($redirect = '') {

		$this->load->library('session');

		$msg = '404 Halaman tidak ditemukan!';
		$red = str_ireplace('_', '/', $redirect);

		if ($this->session->flashdata('error')) {
			
			$msg = $this->session->flashdata('error');

		}

		if ($this->session->flashdata('success')) {
			
			$msg = $this->session->flashdata('success');

		}

		if (strtolower($redirect) === 'logout') {
			
			$msg = 'Berhasil Keluar!';
			$red = '';

		}

		$data = array(

			"message" => $msg,
			"redirect"=> $red

		);

		$this->load->view('partial/header_landing');
		$this->load->view('landing_page/wrong_pass_container', $data);
		$this->load->view('partial/footer_landing');

	}

}
