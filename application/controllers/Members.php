<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Members extends CI_Controller {

	public function __construct() {

		parent::__construct();

		if ($this->_cekLogin() === FALSE) {
			
			redirect('../message', 'location');

		}

	} // end construct

	public function index() {

		$this->load->library('session');

		$lastfile	= $this->model->getMyLastFile($this->session->userdata('username'));

		$data = array(
			'visitor'	=> $this->model->countAllFileVisitor($this->session->userdata('username')),
			'files'		=> $this->model->countMyFiles($this->session->userdata('username')),
			'downloads'	=> $this->model->countAllFileDownload($this->session->userdata('username')),
			'donasi'	=> $this->model->countAllDonations($this->session->userdata('username')),
			'lastfile'	=> ($lastfile) ? $lastfile : array()
		);

		$this->load->view('members/partial/header');
		$this->load->view('members/partial/navbar');
		$this->load->view('members/dashboard', $data);
		$this->load->view('modal/contact_us');
		$this->load->view('modal/upload_file');
		$this->load->view('members/partial/footer');

	} // end index

	public function proseslogout() {

		$this->load->library('session');

		$this->session->unset_userdata(array('login_status', 'username', 'user_email', 'user_id', 'user_verify', 'guest_id'));

		redirect('../message/logout', 'location');
		
	} // end proseslogout

	public function myfiles() {
		
		$this->load->library('session');

		$data = array(
			'uname' => $this->session->userdata('username'),
			'files' => array()
		);

			$this->db->order_by('file_id', 'DESC');
			$this->db->where(array('file_user_uname' => $this->session->userdata('username'), 'file_delete' => '0'));
		$q = $this->db->get('tb_file');

		if ($q->num_rows() > 0) {
			
			$data['files']	= $q->result();

		}

		$this->load->view('members/partial/header');
		$this->load->view('members/partial/navbar');
		$this->load->view('members/myfiles', $data);
		$this->load->view('modal/contact_us');
		$this->load->view('modal/upload_file');
		$this->load->view('members/partial/footer');

	} // end myfiles

	public function myaccount() {

		$this->load->library('session');

		$data = array(
			'user' => $this->model->getDataUser($this->session->userdata('username')),
		);

		$this->load->view('members/partial/header');
		$this->load->view('members/partial/navbar');
		$this->load->view('members/myaccount', $data);
		$this->load->view('modal/contact_us');
		$this->load->view('modal/upload_file');
		$this->load->view('members/partial/footer');

	} // end myaccount

	public function sendverifikasiemail() {
		
		$this->model->sendVerifikasiEmail();

		redirect('../message/members_myaccount', 'location');

	} //end sendverifikasiemail

	public function update_account() {

		$this->load->helper('email');
		$userlama = $this->model->getDataUser($this->session->userdata('username'));

		$nama = trim(strtolower(htmlentities($this->input->post('txtname'))));
		$org  = trim(strtolower($this->input->post('txtorganisasi')));
		$web  = trim(strtolower(htmlentities($this->input->post('txtwebsite'))));
		$email= trim(strtolower(htmlentities($this->input->post('txtemail'))));
		$pass = hash($this->model->hashalgo, $this->input->post('txtpassword'));
		$about= trim(htmlentities($this->input->post('txtabout')));

		$data = array(
			'user_about' => $about
		);

		if (strtolower($userlama->user_nama) != $nama) {
			
			$data['user_nama']	= $nama;

		}

		if (strtolower($userlama->user_organisasi) != $org) {
			
			$data['user_organisasi'] = $org;

		}

		if (strtolower($userlama->user_website) != $web) {
			
			$data['user_website'] = $web;

		}

		if (valid_email($email) && $userlama->user_tgl_verify == NULL && strtolower($userlama->user_email) != $email) {
			
			$data['user_email'] = $email;

		}

		if ($this->input->post('txtpassword') != '' && $userlama->user_pass != $pass) {
			
			$data['user_pass'] = $pass;

		}

		$ubahdata = $this->model->change_account($data);

		redirect('../message/members_myaccount', 'location');

	} // end update_account

	public function changephoto() {

		$this->load->library('session');

		$newimage = rand(1, 29) .'.jpg';

			$this->db->set('user_avatar', $newimage);
			$this->db->where('user_id', $this->session->userdata('user_id'));
		$q = $this->db->update('tb_user');

		if ($q == 1) {
			
			redirect('../members/myaccount', 'location');

		} else {

			$this->session->set_flashdata('error', 'Gagal merubah photo profile!');
			redirect('../message/members_myaccount', 'location');

		}

	} // end changephoto

	public function uploadmyfile() {

		$this->load->library('session');
		$allowext = $this->config->item('shareku_ext');

		$datauser = $this->model->getDataUser($this->session->userdata('username'));

		if ($datauser && $datauser->user_tgl_verify) {

			$arramerge= array_merge($allowext['musik'], $allowext['doc'], $allowext['video'], $allowext['lainnya'], $allowext['gambar']);
			$allowext2 = implode('|', $arramerge);

			if (isset($_POST['submitku'])) {		
			
				$config['upload_path']          = './pathtofiles/';
				$config['allowed_types']        = $allowext2;
				$config['file_name']			= microtime() . '.txt';
				$config['max_size']             = 2000;

				$hasilupload = $this->model->uploadFile('fileupload', $config);
				
				if ($hasilupload) {

					$extfile = explode('.', $hasilupload['client_name']);
					$extfile = end($extfile);

					$datainsert = array(
						'file_nama' => $hasilupload['file_name'],
						'file_nama_asli' => strtolower($hasilupload['client_name']),
						'file_jenis'  => $this->_findTypeFile($extfile),
						'file_size' => $hasilupload['file_size'],
						'file_type' => $extfile
					);

					$addtofile = $this->model->add_myfile($datainsert);

					if ($addtofile) {
						
						$this->session->set_flashdata('success', 'Berhasil upload file!');

					} else {

						$this->session->set_flashdata('error', 'Gagal simpan file!');

					}

				} else {

					$this->session->set_flashdata('error', 'Gagal upload file!');

				}

			} else {

				$this->session->set_flashdata('error', 'Anda tidak memiliki akses!');

			}
		
		} else {

			$this->session->set_flashdata('error', 'Email belum diverfikasi!');

		}

		redirect('../message/members_myfiles', 'location');

	} // end uploadmyfile

	public function deletefile($id) {

		$this->load->library('session');

		$deletefile = $this->model->delete_myfile($id);

		if ($deletefile) {
			
			$this->session->set_flashdata('success', 'File berhasil dihapus!');

		} else {

			$this->session->set_flashdata('error', 'File gagal dihapus!');

		}

		redirect('../message/members_myfiles', 'location');

	} // end deletefile

	protected function _findTypeFile($extfile) {

		$allext = $this->config->item('shareku_ext');
		$newar	= explode('.', $extfile);
		$extfile= end($newar);

		$hasil  = 'lainnya';

		foreach ($allext as $key => $value) {
			
			$cari = array_search($extfile, $value);

			if($cari) {

				$hasil = $key;

			}

		}

		return $hasil;

	} // end _findTypeFile

	protected function _cekLogin() {

		$this->load->library('session');
		
		if ($this->session->userdata('login_status') && $this->session->userdata('username')) {
			
			return TRUE;

		} else {

			return FALSE;

		}


	} // end _cekLogin

}
