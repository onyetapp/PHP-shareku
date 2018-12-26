<?php
/*
//|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||\\
||:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::||
||:::- Write By -::::::::::::::::::::::::::::::::::::::::::::||
||:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::||
||::::::|      ::|  |::: ::|  |::::  ::|     ::|       ::::::||
||::::::| |::: ::| :: |: :::| |:::| :::| |:: :::::| :::::::::||
||::::::| |::: ::| ::: | ::::|    :::::|     :::::| :::::::::||
||::::::|______::|_::::__::::::| ::::::| |::::::::|_::©::::::||
||:::::::::::::::::::::::::::| ::::::::|_____::::::::::::::::||
||::::::::::::::::::::::|_____:::::::::::::::::::::::::::::::||
||:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::||
||:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::||
\\|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||//
                        =============
                        |||||||||||||
                        ||||\\|//||||
                      ////////|\\\\\\\\
                    =====================
website : https://bukalapak.com/u/onyetcorp
email : onyetcorp@gmail.com
no. HP : 08-222-187-4500 / 08-222-187-4400
nim : 18.11.0264
*/
defined('BASEPATH') OR exit('No direct script access allowed');

class Onyet_model extends CI_Model {
	
	protected $hashalgo = 'sha3-224';
	protected $emailsender = 'onyetcorp@gmail.com';
	
	public function __construct() {

		parent::__construct();

		$this->load->database();

	} // end construct

	// mencari Waktu
	public function getTimespan($format = '2018/12/10 00:00:00') {

		$date = date_create($format);
		return date_timestamp_get($date);

	}

	// Mulai Dari Cek Guest / Pengunjung
	public function cekGuest() {

		$timeku = mdate('%Y/%m/%d', now());
		$ipku	= $this->input->ip_address();
		$plat 	= $this->agent->platform();
		$agent	= $this->agent->agent_string();
		
		$timeku = $this->getTimespan($timeku);
				  
				  $this->db->where(array(
					  'guest_ip' => $ipku,
					  'guest_tgl_masuk >=' => $timeku 
				  ));
		$mquery	= $this->db->get('tb_guest');
		
		if ($mquery->num_rows() > 0) {
			
			return $mquery->row();

		} else {

			$minsert	= $this->db->insert('tb_guest', array(

				'guest_ip'	=> $ipku,
				'guest_tgl_masuk'	=> now(),
				'guest_platform'	=> $plat,
				'guest_agent'	=> $agent

			));

			if ($minsert == 1) {
				
				return $this->cekGuest();

			} else {

				return FALSE;

			}

		}

	} // end cekGuest

	public function loginUser($uname, $pass) {

		$username	= strtolower($this->_clearUnixChar($uname, array('@', '-', '_', '.')));
		$password	= $this->_clearUnixChar($pass, array(' '));
		$haspass	= hash($this->hashalgo, $password);
					
					  $this->db->where(array(
						  '(`user_uname`=\''. $username .'\' OR `user_email`=\''. $username .'\')',
						  'user_pass' => $haspass
					  ));
		$query_a	= $this->db->get('tb_user');
		$row_a		= $query_a->row();
		
		if (isset($row_a)) {
			
			if ($row_a->user_status == 'active') {

				$guest	= $this->cekGuest();
				$guestid= $row_a->user_guest_id;

				if ($guest) {
					
					$guestid	= $guest->guest_id;

				}

				$data	= array(
					'login_user_uname' => $row_a->user_uname,
					'login_tgl' => now(),
					'login_guest_id' => $guestid
				);

				$insertlogin	= $this->db->insert('tb_login', $data);

				if ($insertlogin == 1) {
					
					$this->session->set_userdata(array(
						'login_status' => TRUE,
						'username' => $row_a->user_uname,
						'user_email' => $row_a->user_email,
						'user_id' => $row_a->user_id,
						'guest_id' => $guest->guest_id,
						'user_verify' => $row_a->user_tgl_verify
					));

					$this->session->set_flashdata('success', 'Anda masuk sebagai ' . strtoupper($row_a->user_nama));

					return TRUE;

				} else {
					
					$this->session->set_flashdata('error', 'Gagal masuk, silahkan coba lagi!');

					return FALSE;

				}
			
			} else if ($row_a->user_status == 'block') {
				
				$this->session->set_flashdata('error', 'Akun anda telah diblokir!');

				return FALSE;

			} else {

				$this->session->set_flashdata('error', 'Anda tidak terdaftar!');

				return FALSE;

			}

		} else {

			$this->session->set_flashdata('error', 'Anda tidak terdaftar!');

			return FALSE;

		}

	} // end loginUser

	public function daftarUser($nama, $email, $uname, $pass) {

		$this->load->helper('email');

		if (valid_email($email) && isset($nama) && isset($pass) && isset($uname) && strlen($uname) <= 12) {
			
			$nama	= strtolower($this->_clearUnixChar($nama, array(' ')));
			$email	= strtolower($this->_clearUnixChar($email, array('@', '.', '_', '-')));
			$uname	= strtolower($this->_clearUnixChar($uname));
			$pass	= $this->_clearUnixChar($pass, array(' '));
			$hashp	= hash($this->hashalgo, $pass);
			$tgldaf = now();
			$status = 'active';
			
			$cekuser	= $this->_cekUser($uname, $email);
			$cekguest	= $this->cekGuest();

			$guestid 	= ($cekguest) ? $cekguest->guest_id : NULL ;

			if ($cekuser) {
				
				$this->session->set_flashdata('error', 'Username atau email telah terdaftar!');

				return FALSE;

			} else {

				$data	= array(

					'user_uname' => $uname,
					'user_email' => $email,
					'user_pass' => $hashp,
					'user_nama' => $nama,
					'user_guest_id' => $guestid,
					'user_tgl_daftar' => $tgldaf,
					'user_tgl_verify' => NULL,
					'user_status' => $status

				);

				$insertq= $this->db->insert('tb_user', $data);

				if ($insertq == 1) {

					$new_token	= $this->_createToken(24);

					$data2	= array(
						'verify_token' => $new_token,
						'verify_user_uname' => $uname,
						'verify_tgl_expired' => $this->getTimespan(date('Y/m/d', strtotime(mdate('%Y/%m/%d', now()) . ' + 2 day'))),
						'verify_status' => 'wait'
					);

					$cekverify	= $this->db->insert('tb_verify', $data2);

					if ($cekverify == 1) {
						
						$micin 	= '
						<html>
						<head>
						<title>Konfirmasi Email Anda - SHareku</title>
						</head>
						<body>
						<p>Kami ucapkan <strong>Terimaksih dan Selamat Bergabung</strong> dengan Shareku</p>
						<p>Berikut Kami kirimkan link untuk konfirmasi emailmu.</p>
						<h3>Klik pada link dibawah ini untuk konfirmasi alamat email :</h3>
						<a href="'. base_url('login/verifyuser/' . $new_token) .'" style="text-decoration: none;">Konfimasi EMail</a>
						<p>Profile Anda </p>
						<table>
							<tr>
								<th>Nama</th>
								<td>'. strtoupper($nama) .'</td>
							</tr>
							<tr>
								<th>Email</th>
								<td>'. $email .'</td>
							</tr>
							<tr>
								<th>Password</th>
								<td>'. strtoupper($pass[0]) .'*******</td>
							</tr>
						</table>
						</body>
						</html>
						';

						if ($this->_sendEmail($email, 'Konfirmasi Email Anda', $micin, $nama)) {
							
							$this->session->set_flashdata('success', 'Berhasil Mendaftar, Silahkan Cek Email Anda!');

						}						

					}

					return TRUE;

				} else {

					$this->session->set_flashdata('error', 'Gagal mendaftar, kesalahan sistem!');

					return FALSE;

				}

			}

		} else {

			$this->session->set_flashdata('error', 'Data Tidak Valid. Username max 12 Karakter, Email harus valid, Nama dan Password wajib di isi!');

			return FALSE;

		}

	} // end daftarUser

	public function verifyUser($token) {
		
		$token	= $this->_clearUnixChar($token);

			 $this->db->where(array(
				 'verify_token' => $token,
				 'verify_tgl_expired >=' => now(),
				 'verify_status' => 'wait'
			 ));
		$q = $this->db->get('tb_verify')->row();

		if (isset($q)) {

				 $this->db->set('user_tgl_verify', now());
				 $this->db->where('user_uname', $q->verify_user_uname);
			$w = $this->db->update('tb_user');

			if ($w == 1) {
				
				$this->db->set('verify_status', 'done');
				$this->db->where('verify_id', $q->verify_id);
				$this->db->update('tb_verify');

				$this->session->set_flashdata('success', 'User berhasil diverifikasi!');

				return TRUE;

			} else {

				$this->session->set_flashdata('error', 'Gagal verifikasi user!');

				return FALSE;

			}

		} else {

			$this->session->set_flashdata('error', 'Token tidak berlaku!');

			return FALSE;

		}

	} // end verifyUser

	public function getFileList() {

			 $this->db->order_by('file_id', 'DESC');
		$q = $this->db->get('tb_file');

		if ($q->num_rows() > 0) {

			return $q->result();

		} else {

			return FALSE;

		}

	} // end getFileList

	public function getFileByToken($token) {

			 $this->db->where('file_token', $this->_clearUnixChar($token));
		$q = $this->db->get('tb_file');

		if ($q->num_rows() > 0) {
			
			return $q->row();

		} else {

			return FALSE;

		}

	} // end getFileByToken

	public function addFileViewers($token) {

		$cektoken	= $this->getFileByToken($token);

		if ($cektoken) {
			
				 $this->db->set('file_view', ($cektoken->file_view + 1));
			$q = $this->db->update('tb_file');

		} else {

			return FALSE;

		}

	} // end addFileViewers

	/* Fungsi Pendukung */

	protected function _createToken($length = 128) {

		// $microtime 	= microtime();
		// $randstring = substr(str_shuffle(MD5($microtime)), 0, $length);
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomString = '';

		for ($i = 0; $i < $length; $i++) {
		
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		
		}

		return $randomString;

	} // end _createToken

	protected function _tokenFileMaker($token = NULL) {

		$this->load->library('session');

		$length	= 5;
		$fail	= (isset($_SESSION['fail_token_maker'])) ? $this->session->userdata('fail_token_maker') : 0 ;
		$token 	= (isset($token)) ? $this->_createToken($length) : $token;

		if (($fail % 20) == 0) {

			$length	= $length + 1;

		}

			 $this->db->where('file_token', $token);
		$q = $this->db->get('tb_file')->row();

		if (isset($q)) {
			
			$this->session->set_userdata('fail_token_maker', ($fail + 1));

			$this->_tokenFileMaker($this->_createToken($length));

		} else {

			$this->session->unset_userdata('fail_token_maker');

			return $token;

		}

	} // end _tokenFileMaker

	protected function _sendEmail($to, $subject, $message, $nama_penerima = 'Pendatang Baru') {

		// To send HTML mail, the Content-type header must be set
		$headers[] = 'MIME-Version: 1.0';
		$headers[] = 'Content-type: text/html; charset=iso-8859-1';

		// Additional headers
		$headers[] = 'To: '. $nama_penerima .'<onyetcorp@gmail.com>';
		$headers[] = 'From: Shareku Team <'. $this->$emailsender .'>';
		//$headers[] = 'Cc: birthdayarchive@example.com';
		//$headers[] = 'Bcc: birthdaycheck@example.com';

		// Mail it
		if (mail($to, $subject, $message, implode("\r\n", $headers))) {

			return TRUE;

		} else {

			return FALSE;

		}
	
	} // end sendEmail

	protected function _cekUser($uname, $email) { // semua data yang dimasukan hasur sudah di clear unix char

			 $this->db->or_where('user_email', $email);
			 $this->db->where('user_uname', $uname);
		$q = $this->db->get('tb_user');

		$r = $q->row();

		if (isset($r)) {
			
			return $r;

		} else {

			return FALSE;

		}

	} // end _cekUser

	protected function _clearUnixChar($char = 'onyetcorp', $not = array()) {

		$escape		= $char;
		$unixChar 	= array('`', '~', '!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '-', '_', '+', '=', '\'', '"', '/', '\\', '.', ',', '{', '}', '[', ']', '|', '?', '/', ' ', '<', '>');
		
		$x = count($not);

		if ($x > 0) {

			$newArr	= array();

			for ($y=0; $y < $x; $y++) { 
				
				foreach ($unixChar as $key => $value) {
					
					if ($not[$y] != $value) {
						
						$newArr[]	= $value;

					}

				}

			}

			$unixChar = $newArr;

		}

		if (is_bool($char)) {
			
			$escape = ($char) ? 'TRUE' : 'FALSE';

		}

		if (is_array($char) || is_callable($char) || is_iterable($char) || is_object($char)) {
			
			$escape = json_encode($char);

		}

		if (is_null($char)) {
			
			$escape = 'NULL';

		}

		$escape		= (string) $escape;
		$escape		= trim($escape);

		$escape		= str_replace($unixChar, '', $escape);

		return $escape;

	} // end _clearUnixChar

} // end Class Onyet_Model
