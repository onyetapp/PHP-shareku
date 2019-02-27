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
	
	public $hashalgo = 'sha3-224';
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
					
					  $this->db->or_where(array(
						  'user_uname' => $username,
						  'user_email' => $username
					  ));
		$query_a	= $this->db->get('tb_user');
		
		if ($query_a->num_rows() > 0) {
			
			$row_a		= $query_a->row();
			
			if ($row_a->user_status == 'active') {

				if ($row_a->user_pass === $haspass) {
					
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
				
				} else {

					$this->session->set_flashdata('error', 'Username atau Password salah!');

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

		if (valid_email($email) && isset($nama) && isset($pass) && isset($uname) && strlen($uname) <= 12 && strlen($nama) >= 3 && strlen($pass) >= 5 && strlen($uname) >= 4) {
			
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
					'user_status' => $status,
					'user_avatar' => rand(1, 29) . '.jpg'

				);

				$insertq= $this->db->insert('tb_user', $data);

				if ($insertq == 1) {

					$this->sendVerifikasiEmail($data);

					return TRUE;

				} else {

					$this->session->set_flashdata('error', 'Gagal mendaftar, kesalahan sistem!');

					return FALSE;

				}

			}

		} else {

			$this->session->set_flashdata('error', 'Data Tidak Valid. Username min 4 - max 12 Karakter, Nama min 3 Karakter, Password min 5 Karakter, <br>Email harus valid, Nama dan Password wajib di isi!');

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

				$this->session->set_flashdata('success', 'Email berhasil diverifikasi!');

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

	public function sendVerifikasiEmail($userdata = NULL) {

		$this->load->library('session');

		if ($userdata === NULL) {
			
			$userdata = $this->_cekUser($this->session->userdata('username'), $this->session->userdata('user_email'));

			$userdata = (array) $userdata;

		}

		$new_token	= $this->_createToken(24);

		$data	= array(
			'verify_token' => $new_token,
			'verify_user_uname' => $userdata['user_uname'],
			'verify_tgl_expired' => $this->getTimespan(date('Y/m/d', strtotime(mdate('%Y/%m/%d', now()) . ' + 2 day'))),
			'verify_status' => 'wait'
		);

		$cekverify	= $this->db->insert('tb_verify', $data);

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
					<td>'. strtoupper($userdata['user_nama']) .'</td>
				</tr>
				<tr>
					<th>Email</th>
					<td>'. $userdata['user_email'] .'</td>
				</tr>
				<tr>
					<th>Password</th>
					<td>*******</td>
				</tr>
			</table>
			</body>
			</html>
			';

			if ($this->_sendEmail($userdata['user_email'], 'onyetcorp@gmail.com', 'Konfirmasi Email Anda', $micin, $userdata['user_nama'])) {
				
				$this->session->set_flashdata('success', 'Berhasil Mendaftar, Silahkan Cek Email Anda!');

				return TRUE;

			} else {

				$this->session->set_flashdata('error', 'Gagal mengirim Email konfirmasi!');
				
				return FALSE;

			}				

		} else {

			$this->session->set_flashdata('error', 'Gagal membuat Email konfirmasi!');

			return FALSE;

		}

	} // end sendVerifikasiEmail

	public function sendMeEmail($pengirim, $subject, $message) {

		$this->load->helper('email');
		$this->load->library('session');

		$penerima	= array('dian.wibowo@clickoding.id');
		$pengirim 	= $this->_clearUnixChar($pengirim, array('@', '.', '_', '-'));
		$subject 	= 'Shareku K&S : '. htmlentities($subject);
		$message	= htmlentities($message);

		if (valid_email($pengirim)) {
			
			$send = $this->_sendEmail($penerima[rand(0, (count($penerima) - 1))], $pengirim, $subject, $message, 'Shareku Team', ucfirst($subject));

			if ($send) {
				
				$this->session->set_flashdata('success', 'Email berhasil dikirim, Terimakasih ^-^)/');

				return TRUE;

			} else {

				$this->session->set_flashdata('error', 'Pesan anda gagal terkirim T_T)9 !');

				return FALSE;

			}

		} else {

			$this->session->set_flashdata('error', 'Pastikan Email Valid!');

			return FALSE;

		}

	} // end sendMeEmail

	public function resetPasswordRequest($email) {

		$this->load->helper('email');
		$this->load->library('session');

		if (valid_email($email)) {
			
			$email 		= $this->_clearUnixChar($email, array('@', '.', '_', '-'));
			$cekuser	= $this->_cekUser($email, $email);

			if ($cekuser) {
				
				$new_token	= $this->_createToken(24);

				$data2	= array(
					'reset_token' => $new_token,
					'reset_user_uname' => $cekuser->user_uname,
					'reset_tgl_request' => now(),
					'reset_tgl_expired' => $this->getTimespan(date('Y/m/d', strtotime(mdate('%Y/%m/%d', now()) . ' + 2 day')))
				);

				$cekverify	= $this->db->insert('tb_reset_pwd', $data2);

				if ($cekverify == 1) {
					
					$micin 	= '
					<html>
					<head>
					<title>Reset Passwrod Anda - SHareku</title>
					</head>
					<body>
					<p>Kami mendapatkan permintaan untuk me-reset <strong>Kata Sandi</strong> anda.</p>
					<p>Bila anda tidak merasa melakukan reset Kata Sandi, abaikan email ini.</p>
					<h3>Klik pada link dibawah ini untuk reset kata sandi akun anda :</h3>
					<a href="'. base_url('login/formreset/' . $new_token) .'" style="text-decoration: none;">Atur Ulang Kata Sandi</a>
					<p>Profile Anda </p>
					<table>
						<tr>
							<th>Nama</th>
							<td>'. strtoupper($cekuser->user_nama) .'</td>
						</tr>
						<tr>
							<th>Email</th>
							<td>'. $cekuser->user_email .'</td>
						</tr>
						<tr>
							<th>Username</th>
							<td>'. strtoupper($cekuser->user_uname) .'</td>
						</tr>
					</table>
					</body>
					</html>
					';

					if ($this->_sendEmail($email, 'onyetcorp@gmail.com', 'Konfirmasi Email Anda', $micin, $cekuser->user_nama)) {
						
						$this->session->set_flashdata('success', 'Berhasil meminta setel ulang kata sandi, <br>Silahkan Cek Email Anda!');

					}		
					
					return TRUE;

				}

			} else {

				$this->session->set_flashdata('error', 'Email anda tidak terdaftar!');
				return FALSE;

			}

		} else {

			$this->session->set_flashdata('error', 'Email harus valid!');
			return FALSE;

		}

	} // end resetPasswordRequest

	public function resetPasswordProses($token, $newpassword) {

		$this->load->library('session');

		$hashp	= hash($this->hashalgo, $newpassword);

		$newtoken	= $this->_clearUnixChar($token);

			$this->db->where(array(
				'reset_token' => $newtoken,
				'reset_tgl_expired >=' => now()
			));
		$q	= $this->db->get('tb_reset_pwd');

		if ($q->num_rows() > 0) {
			
			$q = $q->row();
			$cekuser	= $this->_cekUser($q->reset_user_uname, $q->reset_user_uname);

			if ($cekuser) {

					$this->db->set('reset_tgl_sukses', now());
					$this->db->where('reset_id', $q->reset_id);
				$this->db->update('tb_reset_pwd');

					$this->db->set('user_pass', $hashp);
					$this->db->where('user_id', $cekuser->user_id);
				$this->db->update('tb_user');

				$this->session->set_flashdata('success', 'Berhasil atur ulang kata sandi!');
				return TRUE;

			} else {

				$this->session->set_flashdata('error', 'User tidak terdaftar!');
				return FALSE;

			}

		} else {

			$this->session->set_flashdata('error', 'Permintaan sudah kadaluarsa!');
			return FALSE;

		}

	} //  end resetPasswordProses

	public function getResetData($token) {

		$newtoken	= $this->_clearUnixChar($token);

			$this->db->where(array(
				'reset_token' => $newtoken
			));
		$q	= $this->db->get('tb_reset_pwd');

		if ($q->num_rows() > 0) {
			
			return $q->row();

		} else {

			return FALSE;

		}

	} // end getResetData

	public function getFileList() {

			 $this->db->order_by('file_id', 'DESC');
			 $this->db->where('file_delete', '0');
		$q = $this->db->get('tb_file');

		if ($q->num_rows() > 0) {

			return $q->result();

		} else {

			return FALSE;

		}

	} // end getFileList

	public function countDownloadByID($id) {

		$id = $this->_clearUnixChar($id);

			$this->db->where('down_file_id', $id);
		$q = $this->db->get('tb_download')->num_rows();

		return $q;

	} // end countDownloadByID

	public function getDataUser($uname) {

		$findby	= $this->_clearUnixChar($uname, array('@', '.', '_', '-'));

			$this->db->or_where(array(
				'user_id' 	=> $findby,
				'user_uname'=> $findby,
				'user_email'=> $findby
			));
		$q	= $this->db->get('tb_user');

		if ($q->num_rows() > 0) {
			
			return $q->row();

		} else {

			return FALSE;

		}

	} // end getDataUser

	public function getFileByToken($token) {

			 $this->db->where(array('file_token' => $this->_clearUnixChar($token), 'file_delete' => '0'));
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

	public function uploadFIle($nameform, $config) {

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload($nameform))
		{

			// $error = array('error' => $this->upload->display_errors());
			return FALSE;

		}
		else
		{
			$data = $this->upload->data();
			/* Result :
				Array ( 
					[file_name] => 0_68193600_1545025357.txt 
					[file_type] => image/jpeg 
					[file_path] => E:/LOCALSERVER/wamp/www/shareku/170220181106/ 
					[full_path] => E:/LOCALSERVER/wamp/www/shareku/170220181106/0_68193600_1545025357.txt 
					[raw_name] => 0_68193600_1545025357 
					[orig_name] => 0_68193600_1545025357.txt 
					[client_name] => exhausteddribbblefinal2.jpg 
					[file_ext] => .txt 
					[file_size] => 182.23 
					[is_image] => 1 
					[image_width] => 1600 
					[image_height] => 1200 
					[image_type] => jpeg 
					[image_size_str] => width="1600" height="1200" 
				)
			*/
			return $data;

		}

	} // end uploadFIle

	/* Admin Members */
	public function countMyFiles($uname) {

		$username	= $this->_clearUnixChar($uname);

			$this->db->where(array('file_user_uname' => $username, 'file_delete' => '0'));
		$q = $this->db->get('tb_file');

		return $q->num_Rows();

	} // end countMyFiles

	public function countAllFileVisitor($uname) {

		$username	= $this->_clearUnixChar($uname);

		$q = $this->db->query('SELECT SUM(`file_view`) AS `total` FROM `tb_file` WHERE `file_delete`="0" AND `file_user_uname`="'. $username .'" GROUP BY `file_user_uname`;');
		
		if ($q->num_rows() > 0) {
				
			$q = $q->row();

			return $q->total;

		} else {

			return 0;

		}
	} // end countAllFileVisitor

	public function countAllFileDownload($uname) {

		$username	= $this->_clearUnixChar($uname);

		$q = $this->db->query('SELECT COUNT(*) AS `total` FROM `tb_file` LEFT JOIN `tb_download` ON `tb_file`.`file_id`=`tb_download`.`down_file_id` WHERE `tb_file`.`file_delete`="0" AND `tb_file`.`file_user_uname`="'. $username .'";');
		
		if ($q->num_rows() > 0) {
				
			$q = $q->row();

			return $q->total;

		} else {

			return 0;

		}

	} // end countAllFileDownload

	public function countAllDonations($uname) {

		$username	= $this->_clearUnixChar($uname);

		$q = $this->db->query('SELECT SUM(`donasi_jumlah`) AS `total` FROM `tb_donasi` WHERE `donasi_user_uname`="'. $username .'" GROUP BY `donasi_user_uname`;');
		
		if ($q->num_rows() > 0) {
				
			$q = $q->row();

			return $q->total;

		} else {

			return 0;

		}

	} // end countAllDonations

	public function getMyLastFile($uname) {

		$username = $this->_clearUnixChar($uname);

			$this->db->limit(5);
			$this->db->order_by('file_id', 'DESC');
			$this->db->where(array('file_user_uname' => $username, 'file_delete' => '0'));
		$q = $this->db->get('tb_file');

		if ($q->num_rows() > 0) {
			
			return $q->result();

		} else {

			return FALSE;

		}

	} // end getMyLastFile

	public function add_myfile($data) {

		$this->load->library('session');

		if (is_array($data)) {
			
			$data['file_nama_asli'] = $this->_clearUnixChar($data['file_nama_asli'], array('_', '.'));
			$data['file_user_uname']= $this->session->userdata('username');
			$data['file_token']		= $this->_tokenFileMaker(5);
			$data['file_tgl_upload']= now();
			$data['file_view']		= 0;

			$q = $this->db->insert('tb_file', $data);

			if ($q == 1) {
				
				return TRUE;

			} else {

				unlink('./1996022518110264/'. $data['file_nama']);
				return FALSE;

			}

		} else {

			return FALSE;

		}

	} // end add_myfile

	public function delete_myfile($idfile) {

		$this->load->library('session');
		$this->load->helper('file');

		$uname = $this->session->userdata('username');
		$idfile= $this->_clearUnixChar($idfile);

			$this->db->where(array('file_id' => $idfile, 'file_user_uname' => $uname));
		$cek = $this->db->get('tb_file');

		if ($cek->num_rows() > 0) {

			$detailfile = $cek->row();

				$this->db->set('file_delete', '1');
				$this->db->where(array(
					'file_id' => $idfile,
					'file_user_uname' => $uname
				));
			$u = $this->db->update('tb_file');

			if ($u == 1) {
				
				unlink('./1996022518110264/'. $detailfile->file_nama);

			}

			return TRUE;
			
		} else {

			return FALSE;

		}
		

	} // end delete_myfile

	public function change_account($data) {

		$this->load->library('session');

		if (isset($data['user_email'])) {
			
			$data['user_email'] = $this->_clearUnixChar($data['user_email'], array('.', '@', '_', '-'));

		}

		if (isset($data['user_nama'])) {
			
			$data['user_nama'] = $this->_clearUnixChar($data['user_nama'], array(' '));

		}

		if (isset($data['user_organisasi'])) {
			
			$data['user_organisasi'] = $this->_clearUnixChar($data['user_organisasi'], array(' ', '.'));

		}

		if (isset($data['user_website'])) {
			
			$data['user_website'] = $this->_clearUnixChar($data['user_website'], array(':', '/', '_', '.', '-'));

		}

				$this->db->set($data);
				$this->db->where('user_id', $this->session->userdata('user_id'));
		$update = $this->db->update('tb_user');

		if ($update == 1) {
			
			$this->session->set_flashdata('success', 'Berhasil update akun anda!');
			return TRUE;

		} else {
		
			$this->session->set_flashdata('error', 'Gagal ubah akun anda!');
			return FALSE;
		
		}

	} // end change_account

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

	protected function _sendEmail($to, $from, $subject, $message, $nama_penerima = 'Pendatang Baru', $nama_pengirim = 'Shareku Team') {

		// To send HTML mail, the Content-type header must be set
		$headers[] = 'MIME-Version: 1.0';
		$headers[] = 'Content-type: text/html; charset=iso-8859-1';

		// Additional headers
		$headers[] = 'To: '. $nama_penerima .'<'. $from .'>';
		$headers[] = 'From: '. $nama_pengirim .' <'. $this->emailsender .'>';
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

			 $this->db->or_where(
				array(
					'user_email' => $email,
					'user_uname' => $uname
				)
			 );
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

			$newarr = array();

			foreach ($unixChar as $key => $value) {
				
				$nilai = TRUE;

				foreach ($not as $key2 => $value2) {
					
					if ($value == $value2) {
						
						$nilai = FALSE;

					}

				}

				if ($nilai) {
					
					$newarr[] = $value;

				}

			}

			$unixChar = $newarr;

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

		$escape		= str_ireplace($unixChar, '', $escape);

		return $escape;

	} // end _clearUnixChar

} // end Class Onyet_Model
