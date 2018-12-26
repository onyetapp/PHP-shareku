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
	
	public function files()
	{
		$data = array(
			'active' => 'files'
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
		$data = array(
			'active' => 'detail',
			'fileid' => str_replace('fileme-', '', $idfile)
		);
		$this->load->view('partial/header_landing');
		$this->load->view('landing_page/navbar', $data);
		$this->load->view('landing_page/detail_files_container', $data);
		$this->load->view('modal/contact_us');
		$this->load->view('modal/cara_unduh');
		$this->load->view('modal/cara_unggah');
		$this->load->view('modal/reset_pass');
		$this->load->view('partial/footer_landing');

	}

	public function create() {

		$rute = [
			[
				"Bujur"=> "109.254960",
				"Lintang"=> "-7.442500",
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"id"=> "1"
			],
			[
				"Bujur"=> "109.255239",
				"Lintang"=> "-7.442543",
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"id"=> "2"
			],
			[
				"Bujur"=> "109.255518",
				"Lintang"=> "-7.442458",
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"id"=> "3"
			],
			[
				"Bujur"=> "109.255690",
				"Lintang"=> "-7.442330",
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"id"=> "4"
			],
			[
				"Bujur"=> "109.255818",
				"Lintang"=> "-7.442117",
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"id"=> "5"
			],
			[
				"Bujur"=> "109.256076",
				"Lintang"=> "-7.441947",
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"id"=> "6"
			],
			[
				"Bujur"=> "109.230663",
				"Lintang"=> "-7.416201",
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"id"=> "7"
			],
			[
				"Bujur"=> "109.229799",
				"Lintang"=> "-7.419626",
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"id"=> "8"
			],
			[
				"Bujur"=> "109.226910",
				"Lintang"=> "-7.419128",
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"id"=> "9"
			],
			[
				"Bujur"=> "109.256312",
				"Lintang"=> "-7.441926",
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"id"=> "10"
			],
			[
				"Bujur"=> "109.256591",
				"Lintang"=> "-7.441947",
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"id"=> "11"
			],
			[
				"Bujur"=> "109.256827",
				"Lintang"=> "-7.441990",
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"id"=> "12"
			],
			[
				"Bujur"=> "109.257106",
				"Lintang"=> "-7.441968",
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"id"=> "13"
			],
			[
				"Bujur"=> "109.257342",
				"Lintang"=> "-7.442011",
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"id"=> "14"
			],
			[
				"Bujur"=> "109.257535",
				"Lintang"=> "-7.442245",
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"id"=> "15"
			],
			[
				"Bujur"=> "109.257514",
				"Lintang"=> "-7.442522",
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"id"=> "16"
			],
			[
				"Bujur"=> "109.257514",
				"Lintang"=> "-7.442820",
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"id"=> "17"
			],
			[
				"Bujur"=> "109.257514",
				"Lintang"=> "-7.443394",
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"id"=> "18"
			],
			[
				"Bujur"=> "109.257492",
				"Lintang"=> "-7.443713",
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"id"=> "19"
			],
			[
				"Bujur"=> "109.257492",
				"Lintang"=> "-7.444011",
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"id"=> "20"
			],
			[
				"Bujur"=> "109.257471",
				"Lintang"=> "-7.444330",
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"id"=> "21"
			],
			[
				"Bujur"=> "109.257385",
				"Lintang"=> "-7.444628",
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"id"=> "22"
			],
			[
				"Bujur"=> "109.257106",
				"Lintang"=> "-7.444713",
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"id"=> "23"
			],
			[
				"Bujur"=> "109.256763",
				"Lintang"=> "-7.444777",
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"id"=> "24"
			],
			[
				"Bujur"=> "109.256484",
				"Lintang"=> "-7.444947",
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"id"=> "25"
			],
			[
				"Bujur"=> "109.257363",
				"Lintang"=> "-7.443990",
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"id"=> "26"
			],
			[
				"Bujur"=> "109.257084",
				"Lintang"=> "-7.443777",
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"id"=> "27"
			],
			[
				"Bujur"=> "109.254939",
				"Lintang"=> "-7.443054",
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"id"=> "28"
			],
			[
				"Bujur"=> "109.256505",
				"Lintang"=> "-7.443862",
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"id"=> "29"
			],
			[
				"Bujur"=> "109.256505",
				"Lintang"=> "-7.444117",
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"id"=> "30"
			],
			[
				"Bujur"=> "109.256505",
				"Lintang"=> "-7.444437",
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"id"=> "31"
			],
			[
				"Bujur"=> "109.255110",
				"Lintang"=> "-7.443075",
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"id"=> "32"
			],
			[
				"Bujur"=> "109.255411",
				"Lintang"=> "-7.443160",
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"id"=> "33"
			],
			[
				"Bujur"=> "109.255647",
				"Lintang"=> "-7.443288",
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"id"=> "34"
			],
			[
				"Bujur"=> "109.255668",
				"Lintang"=> "-7.443543",
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"id"=> "35"
			],
			[
				"Bujur"=> "109.255690",
				"Lintang"=> "-7.443888",
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"id"=> "36"
			],
			[
				"Bujur"=> "109.255711",
				"Lintang"=> "-7.444181",
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"id"=> "37"
			],
			[
				"Bujur"=> "109.25569",
				"Lintang"=> "-7.444458",
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"id"=> "38"
			],
			[
				"Bujur"=> "109.255861",
				"Lintang"=> "-7.444756",
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"id"=> "39"
			],
			[
				"Bujur"=> "109.256205",
				"Lintang"=> "-7.444756",
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"id"=> "40"
			],
			[
				"Bujur"=> "109.256441",
				"Lintang"=> "-7.445117",
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"id"=> "41"
			],
			[
				"Bujur"=> "109.256419",
				"Lintang"=> "-7.445437",
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"id"=> "42"
			],
			[
				"Bujur"=> "109.256441",
				"Lintang"=> "-7.445777",
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"id"=> "43"
			],
			[
				"Bujur"=> "109.256462",
				"Lintang"=> "-7.446224",
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"id"=> "44"
			],
			[
				"Bujur"=> "109.256441",
				"Lintang"=> "-7.446564",
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"id"=> "45"
			],
			[
				"Bujur"=> "109.237713",
				"Lintang"=> "-7.423049",
				"Rute"=> "Jl. Adhyaksa",
				"id"=> "46"
			],
			[
				"Bujur"=> "109.237841",
				"Lintang"=> "-7.423102",
				"Rute"=> "Jl. Adhyaksa",
				"id"=> "47"
			],
			[
				"Bujur"=> "109.237970",
				"Lintang"=> "-7.423155",
				"Rute"=> "Jl. Adhyaksa",
				"id"=> "48"
			],
			[
				"Bujur"=> "109.238099",
				"Lintang"=> "-7.423176",
				"Rute"=> "Jl. Adhyaksa",
				"id"=> "49"
			],
			[
				"Bujur"=> "109.238228",
				"Lintang"=> "-7.423187",
				"Rute"=> "Jl. Adhyaksa",
				"id"=> "50"
			],
			[
				"Bujur"=> "109.238356",
				"Lintang"=> "-7.423230",
				"Rute"=> "Jl. Adhyaksa",
				"id"=> "51"
			],
			[
				"Bujur"=> "109.238496",
				"Lintang"=> "-7.423272",
				"Rute"=> "Jl. Adhyaksa",
				"id"=> "52"
			],
			[
				"Bujur"=> "109.238614",
				"Lintang"=> "-7.423336",
				"Rute"=> "Jl. Adhyaksa",
				"id"=> "53"
			],
			[
				"Bujur"=> "109.239097",
				"Lintang"=> "-7.423549",
				"Rute"=> "Jl. Adhyaksa",
				"id"=> "54"
			],
			[
				"Bujur"=> "109.239247",
				"Lintang"=> "-7.423570",
				"Rute"=> "Jl. Adhyaksa",
				"id"=> "55"
			],
			[
				"Bujur"=> "109.239386",
				"Lintang"=> "-7.423559",
				"Rute"=> "Jl. Adhyaksa",
				"id"=> "56"
			],
			[
				"Bujur"=> "109.239504",
				"Lintang"=> "-7.423613",
				"Rute"=> "Jl. Adhyaksa",
				"id"=> "57"
			],
			[
				"Bujur"=> "109.239816",
				"Lintang"=> "-7.423687",
				"Rute"=> "Jl. Adhyaksa",
				"id"=> "58"
			],
			[
				"Bujur"=> "109.239966",
				"Lintang"=> "-7.423730",
				"Rute"=> "Jl. Adhyaksa",
				"id"=> "59"
			],
			[
				"Bujur"=> "109.240095",
				"Lintang"=> "-7.423751",
				"Rute"=> "Jl. Adhyaksa",
				"id"=> "60"
			],
			[
				"Bujur"=> "109.240234",
				"Lintang"=> "-7.423751",
				"Rute"=> "Jl. Adhyaksa",
				"id"=> "61"
			],
			[
				"Bujur"=> "109.240395",
				"Lintang"=> "-7.423783",
				"Rute"=> "Jl. Adhyaksa",
				"id"=> "62"
			],
			[
				"Bujur"=> "109.240545",
				"Lintang"=> "-7.423815",
				"Rute"=> "Jl. Adhyaksa",
				"id"=> "63"
			],
			[
				"Bujur"=> "109.240706",
				"Lintang"=> "-7.423847",
				"Rute"=> "Jl. Adhyaksa",
				"id"=> "64"
			],
			[
				"Bujur"=> "109.240846",
				"Lintang"=> "-7.423868",
				"Rute"=> "Jl. Adhyaksa",
				"id"=> "65"
			],
			[
				"Bujur"=> "109.240931",
				"Lintang"=> "-7.423538",
				"Rute"=> "Jl. Adhyaksa",
				"id"=> "66"
			],
			[
				"Bujur"=> "109.240953",
				"Lintang"=> "-7.423347",
				"Rute"=> "Jl. Adhyaksa",
				"id"=> "67"
			],
			[
				"Bujur"=> "109.240803",
				"Lintang"=> "-7.423251",
				"Rute"=> "Jl. Adhyaksa",
				"id"=> "68"
			],
			[
				"Bujur"=> "109.240610",
				"Lintang"=> "-7.423645",
				"Rute"=> "Jl. Adhyaksa",
				"id"=> "69"
			],
			[
				"Bujur"=> "109.240599",
				"Lintang"=> "-7.423559",
				"Rute"=> "Jl. Adhyaksa",
				"id"=> "70"
			],
			[
				"Bujur"=> "109.240599",
				"Lintang"=> "-7.423698",
				"Rute"=> "Jl. Adhyaksa",
				"id"=> "71"
			],
			[
				"Bujur"=> "109.240695",
				"Lintang"=> "-7.423070",
				"Rute"=> "Jl. Adhyaksa",
				"id"=> "72"
			],
			[
				"Bujur"=> "109.240728",
				"Lintang"=> "-7.422836",
				"Rute"=> "Jl. Adhyaksa",
				"id"=> "73"
			],
			[
				"Bujur"=> "109.240717",
				"Lintang"=> "-7.422623",
				"Rute"=> "Jl. Adhyaksa",
				"id"=> "74"
			],
			[
				"Bujur"=> "109.241318",
				"Lintang"=> "-7.423432",
				"Rute"=> "Jl. Adhyaksa",
				"id"=> "75"
			],
			[
				"Bujur"=> "109.241446",
				"Lintang"=> "-7.423442",
				"Rute"=> "Jl. Adhyaksa",
				"id"=> "76"
			],
			[
				"Bujur"=> "109.241586",
				"Lintang"=> "-7.423474",
				"Rute"=> "Jl. Adhyaksa",
				"id"=> "77"
			],
			[
				"Bujur"=> "109.241725",
				"Lintang"=> "-7.423517",
				"Rute"=> "Jl. Adhyaksa",
				"id"=> "78"
			],
			[
				"Bujur"=> "109.241897",
				"Lintang"=> "-7.423528",
				"Rute"=> "Jl. Adhyaksa",
				"id"=> "79"
			],
			[
				"Bujur"=> "109.242047",
				"Lintang"=> "-7.423581",
				"Rute"=> "Jl. Adhyaksa",
				"id"=> "80"
			],
			[
				"Bujur"=> "109.242176",
				"Lintang"=> "-7.423623",
				"Rute"=> "Jl. Adhyaksa",
				"id"=> "81"
			],
			[
				"Bujur"=> "109.236715",
				"Lintang"=> "-7.426719",
				"Rute"=> "Jl. Merdeka",
				"id"=> "82"
			],
			[
				"Bujur"=> "109.236758",
				"Lintang"=> "-7.426570",
				"Rute"=> "Jl. Merdeka",
				"id"=> "83"
			],
			[
				"Bujur"=> "109.236854",
				"Lintang"=> "-7.426411",
				"Rute"=> "Jl. Merdeka",
				"id"=> "84"
			],
			[
				"Bujur"=> "109.236908",
				"Lintang"=> "-7.426272",
				"Rute"=> "Jl. Merdeka",
				"id"=> "85"
			],
			[
				"Bujur"=> "109.236972",
				"Lintang"=> "-7.426113",
				"Rute"=> "Jl. Merdeka",
				"id"=> "86"
			],
			[
				"Bujur"=> "109.237026",
				"Lintang"=> "-7.425932",
				"Rute"=> "Jl. Merdeka",
				"id"=> "87"
			],
			[
				"Bujur"=> "109.237015",
				"Lintang"=> "-7.425751",
				"Rute"=> "Jl. Merdeka",
				"id"=> "88"
			],
			[
				"Bujur"=> "109.237080",
				"Lintang"=> "-7.425421",
				"Rute"=> "Jl. Merdeka",
				"id"=> "89"
			],
			[
				"Bujur"=> "109.237112",
				"Lintang"=> "-7.425208",
				"Rute"=> "Jl. Merdeka",
				"id"=> "90"
			],
			[
				"Bujur"=> "109.237133",
				"Lintang"=> "-7.425049",
				"Rute"=> "Jl. Merdeka",
				"id"=> "91"
			],
			[
				"Bujur"=> "109.237155",
				"Lintang"=> "-7.424868",
				"Rute"=> "Jl. Merdeka",
				"id"=> "92"
			],
			[
				"Bujur"=> "109.237241",
				"Lintang"=> "-7.424496",
				"Rute"=> "Jl. Merdeka",
				"id"=> "93"
			],
			[
				"Bujur"=> "109.237305",
				"Lintang"=> "-7.424081",
				"Rute"=> "Jl. Merdeka",
				"id"=> "94"
			],
			[
				"Bujur"=> "109.237326",
				"Lintang"=> "-7.423847",
				"Rute"=> "Jl. Merdeka",
				"id"=> "95"
			],
			[
				"Bujur"=> "109.237348",
				"Lintang"=> "-7.423634",
				"Rute"=> "Jl. Merdeka",
				"id"=> "96"
			],
			[
				"Bujur"=> "109.237369",
				"Lintang"=> "-7.423442",
				"Rute"=> "Jl. Merdeka",
				"id"=> "97"
			],
			[
				"Bujur"=> "109.237412",
				"Lintang"=> "-7.423240",
				"Rute"=> "Jl. Merdeka",
				"id"=> "98"
			],
			[
				"Bujur"=> "109.237444",
				"Lintang"=> "-7.423070",
				"Rute"=> "Jl. Merdeka",
				"id"=> "99"
			],
			[
				"Bujur"=> "109.237487",
				"Lintang"=> "-7.422868",
				"Rute"=> "Jl. Merdeka",
				"id"=> "100"
			],
			[
				"Bujur"=> "109.237509",
				"Lintang"=> "-7.422623",
				"Rute"=> "Jl. Merdeka",
				"id"=> "101"
			],
			[
				"Bujur"=> "109.237541",
				"Lintang"=> "-7.422389",
				"Rute"=> "Jl. Merdeka",
				"id"=> "102"
			],
			[
				"Bujur"=> "109.237584",
				"Lintang"=> "-7.422208",
				"Rute"=> "Jl. Merdeka",
				"id"=> "103"
			],
			[
				"Bujur"=> "109.237616",
				"Lintang"=> "-7.421996",
				"Rute"=> "Jl. Merdeka",
				"id"=> "104"
			],
			[
				"Bujur"=> "109.237659",
				"Lintang"=> "-7.421793",
				"Rute"=> "Jl. Merdeka",
				"id"=> "105"
			],
			[
				"Bujur"=> "109.227148",
				"Lintang"=> "-7.419145",
				"Rute"=> "Jl. Gatot Subroto",
				"id"=> "106"
			],
			[
				"Bujur"=> "109.227309",
				"Lintang"=> "-7.419198",
				"Rute"=> "Jl. Gatot Subroto",
				"id"=> "107"
			],
			[
				"Bujur"=> "109.227459",
				"Lintang"=> "-7.419209",
				"Rute"=> "Jl. Gatot Subroto",
				"id"=> "108"
			],
			[
				"Bujur"=> "109.227610",
				"Lintang"=> "-7.419262",
				"Rute"=> "Jl. Gatot Subroto",
				"id"=> "109"
			],
			[
				"Bujur"=> "109.227749",
				"Lintang"=> "-7.419304",
				"Rute"=> "Jl. Gatot Subroto",
				"id"=> "110"
			],
			[
				"Bujur"=> "109.227803",
				"Lintang"=> "-7.419283",
				"Rute"=> "Jl. Gatot Subroto",
				"id"=> "111"
			],
			[
				"Bujur"=> "109.227953",
				"Lintang"=> "-7.419336",
				"Rute"=> "Jl. Gatot Subroto",
				"id"=> "112"
			],
			[
				"Bujur"=> "109.228092",
				"Lintang"=> "-7.419389",
				"Rute"=> "Jl. Gatot Subroto",
				"id"=> "113"
			],
			[
				"Bujur"=> "109.228243",
				"Lintang"=> "-7.419411",
				"Rute"=> "Jl. Gatot Subroto",
				"id"=> "114"
			],
			[
				"Bujur"=> "109.228361",
				"Lintang"=> "-7.419443",
				"Rute"=> "Jl. Gatot Subroto",
				"id"=> "115"
			],
			[
				"Bujur"=> "109.228446",
				"Lintang"=> "-7.419475",
				"Rute"=> "Jl. Gatot Subroto",
				"id"=> "116"
			],
			[
				"Bujur"=> "109.228597",
				"Lintang"=> "-7.419485",
				"Rute"=> "Jl. Gatot Subroto",
				"id"=> "117"
			],
			[
				"Bujur"=> "109.228725",
				"Lintang"=> "-7.419549",
				"Rute"=> "Jl. Gatot Subroto",
				"id"=> "118"
			],
			[
				"Bujur"=> "109.228897",
				"Lintang"=> "-7.419538",
				"Rute"=> "Jl. Gatot Subroto",
				"id"=> "119"
			],
			[
				"Bujur"=> "109.229208",
				"Lintang"=> "-7.419623",
				"Rute"=> "Jl. Gatot Subroto",
				"id"=> "120"
			],
			[
				"Bujur"=> "109.229348",
				"Lintang"=> "-7.419698",
				"Rute"=> "Jl. Gatot Subroto",
				"id"=> "121"
			],
			[
				"Bujur"=> "109.229498",
				"Lintang"=> "-7.419687",
				"Rute"=> "Jl. Gatot Subroto",
				"id"=> "122"
			],
			[
				"Bujur"=> "109.229648",
				"Lintang"=> "-7.419751",
				"Rute"=> "Jl. Gatot Subroto",
				"id"=> "123"
			],
			[
				"Bujur"=> "109.229788",
				"Lintang"=> "-7.419730",
				"Rute"=> "Jl. Gatot Subroto",
				"id"=> "124"
			],
			[
				"Bujur"=> "109.230882",
				"Lintang"=> "-7.420049",
				"Rute"=> "Jl. Gatot Subroto",
				"id"=> "125"
			],
			[
				"Bujur"=> "109.231043",
				"Lintang"=> "-7.420092",
				"Rute"=> "Jl. Gatot Subroto",
				"id"=> "126"
			],
			[
				"Bujur"=> "109.231204",
				"Lintang"=> "-7.420134",
				"Rute"=> "Jl. Gatot Subroto",
				"id"=> "127"
			],
			[
				"Bujur"=> "109.231365",
				"Lintang"=> "-7.420155",
				"Rute"=> "Jl. Gatot Subroto",
				"id"=> "128"
			],
			[
				"Bujur"=> "109.231504",
				"Lintang"=> "-7.420187",
				"Rute"=> "Jl. Gatot Subroto",
				"id"=> "129"
			],
			[
				"Bujur"=> "109.231633",
				"Lintang"=> "-7.420230",
				"Rute"=> "Jl. Gatot Subroto",
				"id"=> "130"
			],
			[
				"Bujur"=> "109.231805",
				"Lintang"=> "-7.420304",
				"Rute"=> "Jl. Gatot Subroto",
				"id"=> "131"
			],
			[
				"Bujur"=> "109.232094",
				"Lintang"=> "-7.420336",
				"Rute"=> "Jl. Gatot Subroto",
				"id"=> "132"
			],
			[
				"Bujur"=> "109.232255",
				"Lintang"=> "-7.420368",
				"Rute"=> "Jl. Gatot Subroto",
				"id"=> "133"
			],
			[
				"Bujur"=> "109.232395",
				"Lintang"=> "-7.420432",
				"Rute"=> "Jl. Gatot Subroto",
				"id"=> "134"
			],
			[
				"Bujur"=> "109.232534",
				"Lintang"=> "-7.420485",
				"Rute"=> "Jl. Gatot Subroto",
				"id"=> "135"
			],
			[
				"Bujur"=> "109.232695",
				"Lintang"=> "-7.420528",
				"Rute"=> "Jl. Gatot Subroto",
				"id"=> "136"
			],
			[
				"Bujur"=> "109.233532",
				"Lintang"=> "-7.420709",
				"Rute"=> "Jl. Gatot Subroto",
				"id"=> "137"
			],
			[
				"Bujur"=> "109.233682",
				"Lintang"=> "-7.420741",
				"Rute"=> "Jl. Gatot Subroto",
				"id"=> "138"
			],
			[
				"Bujur"=> "109.233832",
				"Lintang"=> "-7.420772",
				"Rute"=> "Jl. Gatot Subroto",
				"id"=> "139"
			],
			[
				"Bujur"=> "109.233972",
				"Lintang"=> "-7.420826",
				"Rute"=> "Jl. Gatot Subroto",
				"id"=> "140"
			],
			[
				"Bujur"=> "109.234122",
				"Lintang"=> "-7.420826",
				"Rute"=> "Jl. Gatot Subroto",
				"id"=> "141"
			],
			[
				"Bujur"=> "109.234251",
				"Lintang"=> "-7.420847",
				"Rute"=> "Jl. Gatot Subroto",
				"id"=> "142"
			],
			[
				"Bujur"=> "109.234379",
				"Lintang"=> "-7.420858",
				"Rute"=> "Jl. Gatot Subroto",
				"id"=> "143"
			],
			[
				"Bujur"=> "109.234508",
				"Lintang"=> "-7.420900",
				"Rute"=> "Jl. Gatot Subroto",
				"id"=> "144"
			],
			[
				"Bujur"=> "109.234658",
				"Lintang"=> "-7.420932",
				"Rute"=> "Jl. Gatot Subroto",
				"id"=> "145"
			],
			[
				"Bujur"=> "109.237370",
				"Lintang"=> "-7.416269",
				"Rute"=> "Jl. Ksatrian",
				"id"=> "146"
			],
			[
				"Bujur"=> "109.237327",
				"Lintang"=> "-7.416418",
				"Rute"=> "Jl. Ksatrian",
				"id"=> "147"
			],
			[
				"Bujur"=> "109.237327",
				"Lintang"=> "-7.416567",
				"Rute"=> "Jl. Ksatrian",
				"id"=> "148"
			],
			[
				"Bujur"=> "109.237284",
				"Lintang"=> "-7.416684",
				"Rute"=> "Jl. Ksatrian",
				"id"=> "149"
			],
			[
				"Bujur"=> "109.237252",
				"Lintang"=> "-7.416864",
				"Rute"=> "Jl. Ksatrian",
				"id"=> "150"
			],
			[
				"Bujur"=> "109.237220",
				"Lintang"=> "-7.417003",
				"Rute"=> "Jl. Ksatrian",
				"id"=> "151"
			],
			[
				"Bujur"=> "109.237166",
				"Lintang"=> "-7.417343",
				"Rute"=> "Jl. Ksatrian",
				"id"=> "152"
			],
			[
				"Bujur"=> "109.237091",
				"Lintang"=> "-7.417492",
				"Rute"=> "Jl. Ksatrian",
				"id"=> "153"
			],
			[
				"Bujur"=> "109.237026",
				"Lintang"=> "-7.417652",
				"Rute"=> "Jl. Ksatrian",
				"id"=> "154"
			],
			[
				"Bujur"=> "109.237026",
				"Lintang"=> "-7.417811",
				"Rute"=> "Jl. Ksatrian",
				"id"=> "155"
			],
			[
				"Bujur"=> "109.236951",
				"Lintang"=> "-7.417960",
				"Rute"=> "Jl. Ksatrian",
				"id"=> "156"
			],
			[
				"Bujur"=> "109.236908",
				"Lintang"=> "-7.418120",
				"Rute"=> "Jl. Ksatrian",
				"id"=> "157"
			],
			[
				"Bujur"=> "109.236876",
				"Lintang"=> "-7.418279",
				"Rute"=> "Jl. Ksatrian",
				"id"=> "158"
			],
			[
				"Bujur"=> "109.236844",
				"Lintang"=> "-7.418450",
				"Rute"=> "Jl. Ksatrian",
				"id"=> "159"
			],
			[
				"Bujur"=> "109.236758",
				"Lintang"=> "-7.418631",
				"Rute"=> "Jl. Ksatrian",
				"id"=> "160"
			],
			[
				"Bujur"=> "109.236705",
				"Lintang"=> "-7.418854",
				"Rute"=> "Jl. Ksatrian",
				"id"=> "161"
			],
			[
				"Bujur"=> "109.236662",
				"Lintang"=> "-7.419014",
				"Rute"=> "Jl. Ksatrian",
				"id"=> "162"
			],
			[
				"Bujur"=> "109.236619",
				"Lintang"=> "-7.419163",
				"Rute"=> "Jl. Ksatrian",
				"id"=> "163"
			],
			[
				"Bujur"=> "109.236565",
				"Lintang"=> "-7.419333",
				"Rute"=> "Jl. Ksatrian",
				"id"=> "164"
			],
			[
				"Bujur"=> "109.236554",
				"Lintang"=> "-7.419482",
				"Rute"=> "Jl. Ksatrian",
				"id"=> "165"
			],
			[
				"Bujur"=> "109.236544",
				"Lintang"=> "-7.419588",
				"Rute"=> "Jl. Ksatrian",
				"id"=> "166"
			],
			[
				"Bujur"=> "109.236490",
				"Lintang"=> "-7.419705",
				"Rute"=> "Jl. Ksatrian",
				"id"=> "167"
			],
			[
				"Bujur"=> "109.236469",
				"Lintang"=> "-7.419854",
				"Rute"=> "Jl. Ksatrian",
				"id"=> "168"
			],
			[
				"Bujur"=> "109.236447",
				"Lintang"=> "-7.420014",
				"Rute"=> "Jl. Ksatrian",
				"id"=> "169"
			],
			[
				"Bujur"=> "109.236393",
				"Lintang"=> "-7.420152",
				"Rute"=> "Jl. Ksatrian",
				"id"=> "170"
			],
			[
				"Bujur"=> "109.236361",
				"Lintang"=> "-7.420333",
				"Rute"=> "Jl. Ksatrian",
				"id"=> "171"
			],
			[
				"Bujur"=> "109.236308",
				"Lintang"=> "-7.420471",
				"Rute"=> "Jl. Ksatrian",
				"id"=> "172"
			],
			[
				"Bujur"=> "109.236275",
				"Lintang"=> "-7.420641",
				"Rute"=> "Jl. Ksatrian",
				"id"=> "173"
			],
			[
				"Bujur"=> "109.236254",
				"Lintang"=> "-7.420801",
				"Rute"=> "Jl. Ksatrian",
				"id"=> "174"
			],
			[
				"Bujur"=> "109.236233",
				"Lintang"=> "-7.420971",
				"Rute"=> "Jl. Ksatrian",
				"id"=> "175"
			],
			[
				"Bujur"=> "109.236200",
				"Lintang"=> "-7.421088",
				"Rute"=> "Jl. Ksatrian",
				"id"=> "176"
			],
			[
				"Bujur"=> "109.236147",
				"Lintang"=> "-7.421216",
				"Rute"=> "Jl. Ksatrian",
				"id"=> "177"
			],
			[
				"Bujur"=> "109.230736",
				"Lintang"=> "-7.416199",
				"Rute"=> "Jl. Dr. Angka",
				"id"=> "178"
			],
			[
				"Bujur"=> "109.230918",
				"Lintang"=> "-7.416177",
				"Rute"=> "Jl. Dr. Angka",
				"id"=> "179"
			],
			[
				"Bujur"=> "109.231090",
				"Lintang"=> "-7.416167",
				"Rute"=> "Jl. Dr. Angka",
				"id"=> "180"
			],
			[
				"Bujur"=> "109.231261",
				"Lintang"=> "-7.416135",
				"Rute"=> "Jl. Dr. Angka",
				"id"=> "181"
			],
			[
				"Bujur"=> "109.231433",
				"Lintang"=> "-7.416103",
				"Rute"=> "Jl. Dr. Angka",
				"id"=> "182"
			],
			[
				"Bujur"=> "109.231615",
				"Lintang"=> "-7.416092",
				"Rute"=> "Jl. Dr. Angka",
				"id"=> "183"
			],
			[
				"Bujur"=> "109.231798",
				"Lintang"=> "-7.416071",
				"Rute"=> "Jl. Dr. Angka",
				"id"=> "184"
			],
			[
				"Bujur"=> "109.231969",
				"Lintang"=> "-7.416082",
				"Rute"=> "Jl. Dr. Angka",
				"id"=> "185"
			],
			[
				"Bujur"=> "109.232109",
				"Lintang"=> "-7.416029",
				"Rute"=> "Jl. Dr. Angka",
				"id"=> "186"
			],
			[
				"Bujur"=> "109.232248",
				"Lintang"=> "-7.416050",
				"Rute"=> "Jl. Dr. Angka",
				"id"=> "187"
			],
			[
				"Bujur"=> "109.232399",
				"Lintang"=> "-7.416039",
				"Rute"=> "Jl. Dr. Angka",
				"id"=> "188"
			],
			[
				"Bujur"=> "109.232570",
				"Lintang"=> "-7.416029",
				"Rute"=> "Jl. Dr. Angka",
				"id"=> "189"
			],
			[
				"Bujur"=> "109.232688",
				"Lintang"=> "-7.416039",
				"Rute"=> "Jl. Dr. Angka",
				"id"=> "190"
			],
			[
				"Bujur"=> "109.232828",
				"Lintang"=> "-7.416039",
				"Rute"=> "Jl. Dr. Angka",
				"id"=> "191"
			],
			[
				"Bujur"=> "109.232989",
				"Lintang"=> "-7.416060",
				"Rute"=> "Jl. Dr. Angka",
				"id"=> "192"
			],
			[
				"Bujur"=> "109.233150",
				"Lintang"=> "-7.415997",
				"Rute"=> "Jl. Dr. Angka",
				"id"=> "193"
			],
			[
				"Bujur"=> "109.233332",
				"Lintang"=> "-7.415965",
				"Rute"=> "Jl. Dr. Angka",
				"id"=> "294"
			],
			[
				"Bujur"=> "109.233482",
				"Lintang"=> "-7.415954",
				"Rute"=> "Jl. Dr. Angka",
				"id"=> "195"
			],
			[
				"Bujur"=> "109.233622",
				"Lintang"=> "-7.415975",
				"Rute"=> "Jl. Dr. Angka",
				"id"=> "196"
			],
			[
				"Bujur"=> "109.233933",
				"Lintang"=> "-7.415943",
				"Rute"=> "Jl. Dr. Angka",
				"id"=> "197"
			],
			[
				"Bujur"=> "109.234072",
				"Lintang"=> "-7.415933",
				"Rute"=> "Jl. Dr. Angka",
				"id"=> "198"
			],
			[
				"Bujur"=> "109.234244",
				"Lintang"=> "-7.415922",
				"Rute"=> "Jl. Dr. Angka",
				"id"=> "199"
			],
			[
				"Bujur"=> "109.234383",
				"Lintang"=> "-7.415954",
				"Rute"=> "Jl. Dr. Angka",
				"id"=> "200"
			],
			[
				"Bujur"=> "109.234501",
				"Lintang"=> "-7.415922",
				"Rute"=> "Jl. Dr. Angka",
				"id"=> "201"
			],
			[
				"Bujur"=> "109.234641",
				"Lintang"=> "-7.415943",
				"Rute"=> "Jl. Dr. Angka",
				"id"=> "202"
			],
			[
				"Bujur"=> "109.234920",
				"Lintang"=> "-7.415975",
				"Rute"=> "Jl. Dr. Angka",
				"id"=> "203"
			],
			[
				"Bujur"=> "109.235092",
				"Lintang"=> "-7.415986",
				"Rute"=> "Jl. Dr. Angka",
				"id"=> "204"
			],
			[
				"Bujur"=> "109.235242",
				"Lintang"=> "-7.416007",
				"Rute"=> "Jl. Dr. Angka",
				"id"=> "205"
			],
			[
				"Bujur"=> "109.235360",
				"Lintang"=> "-7.416007",
				"Rute"=> "Jl. Dr. Angka",
				"id"=> "206"
			],
			[
				"Bujur"=> "109.235499",
				"Lintang"=> "-7.416007",
				"Rute"=> "Jl. Dr. Angka",
				"id"=> "207"
			],
			[
				"Bujur"=> "109.235628",
				"Lintang"=> "-7.416039",
				"Rute"=> "Jl. Dr. Angka",
				"id"=> "208"
			],
			[
				"Bujur"=> "109.235778",
				"Lintang"=> "-7.416018",
				"Rute"=> "Jl. Dr. Angka",
				"id"=> "209"
			],
			[
				"Bujur"=> "109.235928",
				"Lintang"=> "-7.416050",
				"Rute"=> "Jl. Dr. Angka",
				"id"=> "210"
			],
			[
				"Bujur"=> "109.236089",
				"Lintang"=> "-7.416039",
				"Rute"=> "Jl. Dr. Angka",
				"id"=> "211"
			],
			[
				"Bujur"=> "109.236250",
				"Lintang"=> "-7.416050",
				"Rute"=> "Jl. Dr. Angka",
				"id"=> "212"
			],
			[
				"Bujur"=> "109.236486",
				"Lintang"=> "-7.416060",
				"Rute"=> "Jl. Dr. Angka",
				"id"=> "213"
			],
			[
				"Bujur"=> "109.236636",
				"Lintang"=> "-7.416071",
				"Rute"=> "Jl. Dr. Angka",
				"id"=> "214"
			],
			[
				"Bujur"=> "109.236776",
				"Lintang"=> "-7.416071",
				"Rute"=> "Jl. Dr. Angka",
				"id"=> "215"
			],
			[
				"Bujur"=> "109.236915",
				"Lintang"=> "-7.416092",
				"Rute"=> "Jl. Dr. Angka",
				"id"=> "216"
			],
			[
				"Bujur"=> "109.237055",
				"Lintang"=> "-7.416124",
				"Rute"=> "Jl. Dr. Angka",
				"id"=> "217"
			],
			[
				"Bujur"=> "109.237613",
				"Lintang"=> "-7.416135",
				"Rute"=> "Jl. Dr. Angka",
				"id"=> "218"
			],
			[
				"Bujur"=> "109.237752",
				"Lintang"=> "-7.416167",
				"Rute"=> "Jl. Dr. Angka",
				"id"=> "219"
			],
			[
				"Bujur"=> "109.237870",
				"Lintang"=> "-7.416199",
				"Rute"=> "Jl. Dr. Angka",
				"id"=> "220"
			],
			[
				"Bujur"=> "109.238053",
				"Lintang"=> "-7.416231",
				"Rute"=> "Jl. Dr. Angka",
				"id"=> "221"
			],
			[
				"Bujur"=> "109.238171",
				"Lintang"=> "-7.416241",
				"Rute"=> "Jl. Dr. Angka",
				"id"=> "222"
			],
			[
				"Bujur"=> "109.238332",
				"Lintang"=> "-7.416241",
				"Rute"=> "Jl. Dr. Angka",
				"id"=> "223"
			],
			[
				"Bujur"=> "109.238611",
				"Lintang"=> "-7.416252",
				"Rute"=> "Jl. Dr. Angka",
				"id"=> "224"
			],
			[
				"Bujur"=> "109.238761",
				"Lintang"=> "-7.416284",
				"Rute"=> "Jl. Dr. Angka",
				"id"=> "225"
			],
			[
				"Bujur"=> "109.238900",
				"Lintang"=> "-7.416284",
				"Rute"=> "Jl. Dr. Angka",
				"id"=> "226"
			],
			[
				"Bujur"=> "109.239050",
				"Lintang"=> "-7.416305",
				"Rute"=> "Jl. Dr. Angka",
				"id"=> "227"
			],
			[
				"Bujur"=> "109.239211",
				"Lintang"=> "-7.416326",
				"Rute"=> "Jl. Dr. Angka",
				"id"=> "228"
			],
			[
				"Bujur"=> "109.239362",
				"Lintang"=> "-7.416337",
				"Rute"=> "Jl. Dr. Angka",
				"id"=> "229"
			],
			[
				"Bujur"=> "109.239501",
				"Lintang"=> "-7.416369",
				"Rute"=> "Jl. Dr. Angka",
				"id"=> "230"
			],
			[
				"Bujur"=> "109.239801",
				"Lintang"=> "-7.416358",
				"Rute"=> "Jl. Dr. Angka",
				"id"=> "231"
			],
			[
				"Bujur"=> "109.239941",
				"Lintang"=> "-7.416401",
				"Rute"=> "Jl. Dr. Angka",
				"id"=> "232"
			],
			[
				"Bujur"=> "109.240080",
				"Lintang"=> "-7.416401",
				"Rute"=> "Jl. Dr. Angka",
				"id"=> "233"
			],
			[
				"Bujur"=> "109.240241",
				"Lintang"=> "-7.416422",
				"Rute"=> "Jl. Dr. Angka",
				"id"=> "234"
			],
			[
				"Bujur"=> "109.240359",
				"Lintang"=> "-7.416454",
				"Rute"=> "Jl. Dr. Angka",
				"id"=> "235"
			],
			[
				"Bujur"=> "109.240520",
				"Lintang"=> "-7.416475",
				"Rute"=> "Jl. Dr. Angka",
				"id"=> "236"
			],
			[
				"Bujur"=> "109.240681",
				"Lintang"=> "-7.416497",
				"Rute"=> "Jl. Dr. Angka",
				"id"=> "237"
			],
			[
				"Bujur"=> "109.240831",
				"Lintang"=> "-7.416507",
				"Rute"=> "Jl. Dr. Angka",
				"id"=> "238"
			],
			[
				"Bujur"=> "109.240992",
				"Lintang"=> "-7.416497",
				"Rute"=> "Jl. Dr. Angka",
				"id"=> "239"
			],
			[
				"Bujur"=> "109.241164",
				"Lintang"=> "-7.416507",
				"Rute"=> "Jl. Dr. Angka",
				"id"=> "240"
			],
			[
				"Bujur"=> "109.241293",
				"Lintang"=> "-7.416582",
				"Rute"=> "Jl. Dr. Angka",
				"id"=> "241"
			],
			[
				"Bujur"=> "109.241443",
				"Lintang"=> "-7.416560",
				"Rute"=> "Jl. Dr. Angka",
				"id"=> "242"
			],
			[
				"Bujur"=> "109.241743",
				"Lintang"=> "-7.416571",
				"Rute"=> "Jl. Dr. Angka",
				"id"=> "243"
			],
			[
				"Bujur"=> "109.241894",
				"Lintang"=> "-7.416614",
				"Rute"=> "Jl. Dr. Angka",
				"id"=> "244"
			],
			[
				"Bujur"=> "109.242430",
				"Lintang"=> "-7.416656",
				"Rute"=> "Jl. Dr. Angka",
				"id"=> "245"
			],
			[
				"Bujur"=> "109.242580",
				"Lintang"=> "-7.416667",
				"Rute"=> "Jl. Dr. Angka",
				"id"=> "246"
			],
			[
				"Bujur"=> "109.242752",
				"Lintang"=> "-7.416709",
				"Rute"=> "Jl. Dr. Angka",
				"id"=> "247"
			],
			[
				"Bujur"=> "109.242945",
				"Lintang"=> "-7.416699",
				"Rute"=> "Jl. Dr. Angka",
				"id"=> "248"
			],
			[
				"Bujur"=> "109.243138",
				"Lintang"=> "-7.416720",
				"Rute"=> "Jl. Dr. Angka",
				"id"=> "249"
			],
			[
				"Bujur"=> "109.243321",
				"Lintang"=> "-7.416720",
				"Rute"=> "Jl. Dr. Angka",
				"id"=> "250"
			],
			[
				"Bujur"=> "109.243449",
				"Lintang"=> "-7.416795",
				"Rute"=> "Jl. Dr. Angka",
				"id"=> "251"
			],
			[
				"Bujur"=> "109.243621",
				"Lintang"=> "-7.416773",
				"Rute"=> "Jl. Dr. Angka",
				"id"=> "252"
			],
			[
				"Bujur"=> "109.243771",
				"Lintang"=> "-7.416837",
				"Rute"=> "Jl. Dr. Angka",
				"id"=> "253"
			],
			[
				"Bujur"=> "109.244050",
				"Lintang"=> "-7.416880",
				"Rute"=> "Jl. Dr. Angka",
				"id"=> "254"
			],
			[
				"Bujur"=> "109.244211",
				"Lintang"=> "-7.416890",
				"Rute"=> "Jl. Dr. Angka",
				"id"=> "255"
			],
			[
				"Bujur"=> "109.244372",
				"Lintang"=> "-7.416912",
				"Rute"=> "Jl. Dr. Angka",
				"id"=> "256"
			],
			[
				"Bujur"=> "109.244565",
				"Lintang"=> "-7.416901",
				"Rute"=> "Jl. Dr. Angka",
				"id"=> "257"
			],
			[
				"Bujur"=> "109.230795",
				"Lintang"=> "-7.410562",
				"Rute"=> "Jl. Jend. Ahmad Yani",
				"id"=> "258"
			],
			[
				"Bujur"=> "109.230816",
				"Lintang"=> "-7.410764",
				"Rute"=> "Jl. Jend. Ahmad Yani",
				"id"=> "259"
			],
			[
				"Bujur"=> "109.230784",
				"Lintang"=> "-7.410955",
				"Rute"=> "Jl. Jend. Ahmad Yani",
				"id"=> "260"
			],
			[
				"Bujur"=> "109.230784",
				"Lintang"=> "-7.411136",
				"Rute"=> "Jl. Jend. Ahmad Yani",
				"id"=> "261"
			],
			[
				"Bujur"=> "109.230773",
				"Lintang"=> "-7.411296",
				"Rute"=> "Jl. Jend. Ahmad Yani",
				"id"=> "262"
			],
			[
				"Bujur"=> "109.230773",
				"Lintang"=> "-7.411466",
				"Rute"=> "Jl. Jend. Ahmad Yani",
				"id"=> "263"
			],
			[
				"Bujur"=> "109.230752",
				"Lintang"=> "-7.411658",
				"Rute"=> "Jl. Jend. Ahmad Yani",
				"id"=> "264"
			],
			[
				"Bujur"=> "109.230752",
				"Lintang"=> "-7.411838",
				"Rute"=> "Jl. Jend. Ahmad Yani",
				"id"=> "265"
			],
			[
				"Bujur"=> "109.230752",
				"Lintang"=> "-7.412030",
				"Rute"=> "Jl. Jend. Ahmad Yani",
				"id"=> "266"
			],
			[
				"Bujur"=> "109.230720",
				"Lintang"=> "-7.412232",
				"Rute"=> "Jl. Jend. Ahmad Yani",
				"id"=> "267"
			],
			[
				"Bujur"=> "109.230709",
				"Lintang"=> "-7.412456",
				"Rute"=> "Jl. Jend. Ahmad Yani",
				"id"=> "268"
			],
			[
				"Bujur"=> "109.23072",
				"Lintang"=> "-7.412647",
				"Rute"=> "Jl. Jend. Ahmad Yani",
				"id"=> "269"
			],
			[
				"Bujur"=> "109.230677",
				"Lintang"=> "-7.412828",
				"Rute"=> "Jl. Jend. Ahmad Yani",
				"id"=> "270"
			],
			[
				"Bujur"=> "109.230655",
				"Lintang"=> "-7.41303",
				"Rute"=> "Jl. Jend. Ahmad Yani",
				"id"=> "271"
			],
			[
				"Bujur"=> "109.230698",
				"Lintang"=> "-7.413519",
				"Rute"=> "Jl. Jend. Ahmad Yani",
				"id"=> "272"
			],
			[
				"Bujur"=> "109.230677",
				"Lintang"=> "-7.413711",
				"Rute"=> "Jl. Jend. Ahmad Yani",
				"id"=> "273"
			],
			[
				"Bujur"=> "109.230623",
				"Lintang"=> "-7.413913",
				"Rute"=> "Jl. Jend. Ahmad Yani",
				"id"=> "274"
			],
			[
				"Bujur"=> "109.230612",
				"Lintang"=> "-7.414126",
				"Rute"=> "Jl. Jend. Ahmad Yani",
				"id"=> "275"
			],
			[
				"Bujur"=> "109.230569",
				"Lintang"=> "-7.414892",
				"Rute"=> "Jl. Jend. Ahmad Yani",
				"id"=> "276"
			],
			[
				"Bujur"=> "109.230559",
				"Lintang"=> "-7.415094",
				"Rute"=> "Jl. Jend. Ahmad Yani",
				"id"=> "277"
			],
			[
				"Bujur"=> "109.23058",
				"Lintang"=> "-7.415296",
				"Rute"=> "Jl. Jend. Ahmad Yani",
				"id"=> "278"
			],
			[
				"Bujur"=> "109.230569",
				"Lintang"=> "-7.415498",
				"Rute"=> "Jl. Jend. Ahmad Yani",
				"id"=> "279"
			],
			[
				"Bujur"=> "109.230548",
				"Lintang"=> "-7.415701",
				"Rute"=> "Jl. Jend. Ahmad Yani",
				"id"=> "280"
			],
			[
				"Bujur"=> "109.230548",
				"Lintang"=> "-7.415913",
				"Rute"=> "Jl. Jend. Ahmad Yani",
				"id"=> "281"
			],
			[
				"Bujur"=> "109.230516",
				"Lintang"=> "-7.416115",
				"Rute"=> "Jl. Jend. Ahmad Yani",
				"id"=> "282"
			],
			[
				"Bujur"=> "109.230537",
				"Lintang"=> "-7.416328",
				"Rute"=> "Jl. Jend. Ahmad Yani",
				"id"=> "283"
			],
			[
				"Bujur"=> "109.230542",
				"Lintang"=> "-7.416528",
				"Rute"=> "Jl. Jend. Ahmad Yani",
				"id"=> "284"
			],
			[
				"Bujur"=> "109.230511",
				"Lintang"=> "-7.416703",
				"Rute"=> "Jl. Jend. Ahmad Yani",
				"id"=> "285"
			],
			[
				"Bujur"=> "109.23049",
				"Lintang"=> "-7.4169",
				"Rute"=> "Jl. Jend. Ahmad Yani",
				"id"=> "286"
			],
			[
				"Bujur"=> "109.230427",
				"Lintang"=> "-7.417107",
				"Rute"=> "Jl. Jend. Ahmad Yani",
				"id"=> "287"
			],
			[
				"Bujur"=> "109.230396",
				"Lintang"=> "-7.417365",
				"Rute"=> "Jl. Jend. Ahmad Yani",
				"id"=> "288"
			],
			[
				"Bujur"=> "109.230386",
				"Lintang"=> "-7.417541",
				"Rute"=> "Jl. Jend. Ahmad Yani",
				"id"=> "289"
			],
			[
				"Bujur"=> "109.230407",
				"Lintang"=> "-7.417716",
				"Rute"=> "Jl. Jend. Ahmad Yani",
				"id"=> "290"
			],
			[
				"Bujur"=> "109.230281",
				"Lintang"=> "-7.418223",
				"Rute"=> "Jl. Jend. Ahmad Yani",
				"id"=> "291"
			],
			[
				"Bujur"=> "109.230073",
				"Lintang"=> "-7.418936",
				"Rute"=> "Jl. Jend. Ahmad Yani",
				"id"=> "292"
			],
			[
				"Bujur"=> "109.229979",
				"Lintang"=> "-7.419143",
				"Rute"=> "Jl. Jend. Ahmad Yani",
				"id"=> "293"
			],
			[
				"Bujur"=> "109.229875",
				"Lintang"=> "-7.419443",
				"Rute"=> "Jl. Jend. Ahmad Yani",
				"id"=> "294"
			],
			[
				"Bujur"=> "109.229844",
				"Lintang"=> "-7.419618",
				"Rute"=> "Jl. Jend. Ahmad Yani",
				"id"=> "295"
			],
			[
				"Bujur"=> "109.226905",
				"Lintang"=> "-7.419175",
				"Rute"=> "Jl. Jend. Ahmad Yani",
				"id"=> "296"
			],
			[
				"Bujur"=> "109.226884",
				"Lintang"=> "-7.419345",
				"Rute"=> "Jl. Jend. Ahmad Yani",
				"id"=> "297"
			],
			[
				"Bujur"=> "109.226862",
				"Lintang"=> "-7.419526",
				"Rute"=> "Jl. Jend. Ahmad Yani",
				"id"=> "298"
			],
			[
				"Bujur"=> "109.226798",
				"Lintang"=> "-7.419717",
				"Rute"=> "Jl. RA Wiryaatmaja",
				"id"=> "299"
			],
			[
				"Bujur"=> "109.226712",
				"Lintang"=> "-7.420143",
				"Rute"=> "Jl. RA Wiryaatmaja",
				"id"=> "300"
			],
			[
				"Bujur"=> "109.22669",
				"Lintang"=> "-7.420313",
				"Rute"=> "Jl. RA Wiryaatmaja",
				"id"=> "301"
			],
			[
				"Bujur"=> "109.226626",
				"Lintang"=> "-7.420494",
				"Rute"=> "Jl. RA Wiryaatmaja",
				"id"=> "302"
			],
			[
				"Bujur"=> "109.226572",
				"Lintang"=> "-7.420686",
				"Rute"=> "Jl. RA Wiryaatmaja",
				"id"=> "203"
			],
			[
				"Bujur"=> "109.226519",
				"Lintang"=> "-7.420866",
				"Rute"=> "Jl. RA Wiryaatmaja",
				"id"=> "304"
			],
			[
				"Bujur"=> "109.226497",
				"Lintang"=> "-7.421047",
				"Rute"=> "Jl. RA Wiryaatmaja",
				"id"=> "305"
			],
			[
				"Bujur"=> "109.226454",
				"Lintang"=> "-7.421239",
				"Rute"=> "Jl. RA Wiryaatmaja",
				"id"=> "306"
			],
			[
				"Bujur"=> "109.226272",
				"Lintang"=> "-7.421962",
				"Rute"=> "Jl. RA Wiryaatmaja",
				"id"=> "307"
			],
			[
				"Bujur"=> "109.226251",
				"Lintang"=> "-7.422143",
				"Rute"=> "Jl. RA Wiryaatmaja",
				"id"=> "308"
			],
			[
				"Bujur"=> "109.226229",
				"Lintang"=> "-7.422367",
				"Rute"=> "Jl. RA Wiryaatmaja",
				"id"=> "309"
			],
			[
				"Bujur"=> "109.226164",
				"Lintang"=> "-7.422569",
				"Rute"=> "Jl. RA Wiryaatmaja",
				"id"=> "310"
			],
			[
				"Bujur"=> "109.226121",
				"Lintang"=> "-7.42275",
				"Rute"=> "Jl. RA Wiryaatmaja",
				"id"=> "311"
			],
			[
				"Bujur"=> "109.226068",
				"Lintang"=> "-7.422952",
				"Rute"=> "Jl. RA Wiryaatmaja",
				"id"=> "312"
			],
			[
				"Bujur"=> "109.226046",
				"Lintang"=> "-7.423101",
				"Rute"=> "Jl. RA Wiryaatmaja",
				"id"=> "313"
			],
			[
				"Bujur"=> "109.225939",
				"Lintang"=> "-7.423537",
				"Rute"=> "Jl. RA Wiryaatmaja",
				"id"=> "314"
			],
			[
				"Bujur"=> "109.225821",
				"Lintang"=> "-7.423909",
				"Rute"=> "Jl. RA Wiryaatmaja",
				"id"=> "315"
			],
			[
				"Bujur"=> "109.225767",
				"Lintang"=> "-7.424005",
				"Rute"=> "Jl. RA Wiryaatmaja",
				"id"=> "316"
			],
			[
				"Bujur"=> "109.213207",
				"Lintang"=> "-7.42234",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "317"
			],
			[
				"Bujur"=> "109.214924",
				"Lintang"=> "-7.42266",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "318"
			],
			[
				"Bujur"=> "109.215064",
				"Lintang"=> "-7.422702",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "319"
			],
			[
				"Bujur"=> "109.215235",
				"Lintang"=> "-7.422745",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "320"
			],
			[
				"Bujur"=> "109.215707",
				"Lintang"=> "-7.422862",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "321"
			],
			[
				"Bujur"=> "109.215868",
				"Lintang"=> "-7.422862",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "322"
			],
			[
				"Bujur"=> "109.216008",
				"Lintang"=> "-7.422883",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "323"
			],
			[
				"Bujur"=> "109.216169",
				"Lintang"=> "-7.422915",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "324"
			],
			[
				"Bujur"=> "109.216287",
				"Lintang"=> "-7.422979",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "325"
			],
			[
				"Bujur"=> "109.216791",
				"Lintang"=> "-7.423096",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "326"
			],
			[
				"Bujur"=> "109.217129",
				"Lintang"=> "-7.423173",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "327"
			],
			[
				"Bujur"=> "109.217322",
				"Lintang"=> "-7.423216",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "328"
			],
			[
				"Bujur"=> "109.217526",
				"Lintang"=> "-7.423258",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "329"
			],
			[
				"Bujur"=> "109.21773",
				"Lintang"=> "-7.423333",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "330"
			],
			[
				"Bujur"=> "109.217912",
				"Lintang"=> "-7.423364",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "331"
			],
			[
				"Bujur"=> "109.218202",
				"Lintang"=> "-7.42346",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "332"
			],
			[
				"Bujur"=> "109.218352",
				"Lintang"=> "-7.423481",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "333"
			],
			[
				"Bujur"=> "109.218845",
				"Lintang"=> "-7.423524",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "334"
			],
			[
				"Bujur"=> "109.219017",
				"Lintang"=> "-7.423567",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "335"
			],
			[
				"Bujur"=> "109.219543",
				"Lintang"=> "-7.423599",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "336"
			],
			[
				"Bujur"=> "109.219693",
				"Lintang"=> "-7.42363",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "337"
			],
			[
				"Bujur"=> "109.219833",
				"Lintang"=> "-7.423641",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "338"
			],
			[
				"Bujur"=> "109.220069",
				"Lintang"=> "-7.423652",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "339"
			],
			[
				"Bujur"=> "109.221571",
				"Lintang"=> "-7.423726",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "340"
			],
			[
				"Bujur"=> "109.221807",
				"Lintang"=> "-7.423726",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "341"
			],
			[
				"Bujur"=> "109.223078",
				"Lintang"=> "-7.423755",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "342"
			],
			[
				"Bujur"=> "109.223335",
				"Lintang"=> "-7.423745",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "443"
			],
			[
				"Bujur"=> "109.223539",
				"Lintang"=> "-7.423809",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "344"
			],
			[
				"Bujur"=> "109.223765",
				"Lintang"=> "-7.423809",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "345"
			],
			[
				"Bujur"=> "109.223968",
				"Lintang"=> "-7.423841",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "346"
			],
			[
				"Bujur"=> "109.224205",
				"Lintang"=> "-7.423883",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "347"
			],
			[
				"Bujur"=> "109.224623",
				"Lintang"=> "-7.423947",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "348"
			],
			[
				"Bujur"=> "109.224859",
				"Lintang"=> "-7.423968",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "349"
			],
			[
				"Bujur"=> "109.225052",
				"Lintang"=> "-7.423979",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "350"
			],
			[
				"Bujur"=> "109.225524",
				"Lintang"=> "-7.424075",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "351"
			],
			[
				"Bujur"=> "109.225717",
				"Lintang"=> "-7.424128",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "352"
			],
			[
				"Bujur"=> "109.227026",
				"Lintang"=> "-7.424394",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "353"
			],
			[
				"Bujur"=> "109.227176",
				"Lintang"=> "-7.424468",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "354"
			],
			[
				"Bujur"=> "109.227563",
				"Lintang"=> "-7.424511",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "355"
			],
			[
				"Bujur"=> "109.227734",
				"Lintang"=> "-7.424575",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "356"
			],
			[
				"Bujur"=> "109.227949",
				"Lintang"=> "-7.424575",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "357"
			],
			[
				"Bujur"=> "109.228271",
				"Lintang"=> "-7.42466",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "358"
			],
			[
				"Bujur"=> "109.228442",
				"Lintang"=> "-7.424702",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "359"
			],
			[
				"Bujur"=> "109.228625",
				"Lintang"=> "-7.424713",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "360"
			],
			[
				"Bujur"=> "109.228796",
				"Lintang"=> "-7.424766",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "361"
			],
			[
				"Bujur"=> "109.229",
				"Lintang"=> "-7.42483",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "362"
			],
			[
				"Bujur"=> "109.229172",
				"Lintang"=> "-7.424873",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "363"
			],
			[
				"Bujur"=> "109.229644",
				"Lintang"=> "-7.424947",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "364"
			],
			[
				"Bujur"=> "109.229805",
				"Lintang"=> "-7.42499",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "365"
			],
			[
				"Bujur"=> "109.230009",
				"Lintang"=> "-7.425043",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "366"
			],
			[
				"Bujur"=> "109.230213",
				"Lintang"=> "-7.425053",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "367"
			],
			[
				"Bujur"=> "109.230427",
				"Lintang"=> "-7.42516",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "368"
			],
			[
				"Bujur"=> "109.230642",
				"Lintang"=> "-7.425192",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "359"
			],
			[
				"Bujur"=> "109.230835",
				"Lintang"=> "-7.425234",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "370"
			],
			[
				"Bujur"=> "109.231103",
				"Lintang"=> "-7.425298",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "371"
			],
			[
				"Bujur"=> "109.231328",
				"Lintang"=> "-7.425319",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "372"
			],
			[
				"Bujur"=> "109.231597",
				"Lintang"=> "-7.425394",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "373"
			],
			[
				"Bujur"=> "109.231811",
				"Lintang"=> "-7.425447",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "374"
			],
			[
				"Bujur"=> "109.233035",
				"Lintang"=> "-7.425765",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "375"
			],
			[
				"Bujur"=> "109.233357",
				"Lintang"=> "-7.425829",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "376"
			],
			[
				"Bujur"=> "109.233743",
				"Lintang"=> "-7.425914",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "377"
			],
			[
				"Bujur"=> "109.234087",
				"Lintang"=> "-7.426084",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "378"
			],
			[
				"Bujur"=> "109.234494",
				"Lintang"=> "-7.426169",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "379"
			],
			[
				"Bujur"=> "109.234816",
				"Lintang"=> "-7.426318",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "380"
			],
			[
				"Bujur"=> "109.23516",
				"Lintang"=> "-7.426424",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "381"
			],
			[
				"Bujur"=> "109.236972",
				"Lintang"=> "-7.426991",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "382"
			],
			[
				"Bujur"=> "109.237315",
				"Lintang"=> "-7.427076",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "383"
			],
			[
				"Bujur"=> "109.237702",
				"Lintang"=> "-7.427161",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "384"
			],
			[
				"Bujur"=> "109.238045",
				"Lintang"=> "-7.427289",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "385"
			],
			[
				"Bujur"=> "109.23841",
				"Lintang"=> "-7.427331",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "386"
			],
			[
				"Bujur"=> "109.238774",
				"Lintang"=> "-7.427438",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "387"
			],
			[
				"Bujur"=> "109.241607",
				"Lintang"=> "-7.427927",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "388"
			],
			[
				"Bujur"=> "109.241929",
				"Lintang"=> "-7.427906",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "389"
			],
			[
				"Bujur"=> "109.242294",
				"Lintang"=> "-7.427884",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "390"
			],
			[
				"Bujur"=> "109.242701",
				"Lintang"=> "-7.427821",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "391"
			],
			[
				"Bujur"=> "109.243023",
				"Lintang"=> "-7.427821",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "392"
			],
			[
				"Bujur"=> "109.243409",
				"Lintang"=> "-7.427821",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "393"
			],
			[
				"Bujur"=> "109.243838",
				"Lintang"=> "-7.427842",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "394"
			],
			[
				"Bujur"=> "109.244225",
				"Lintang"=> "-7.427842",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "395"
			],
			[
				"Bujur"=> "109.244675",
				"Lintang"=> "-7.427821",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "396"
			],
			[
				"Bujur"=> "109.24504",
				"Lintang"=> "-7.427863",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "397"
			],
			[
				"Bujur"=> "109.245491",
				"Lintang"=> "-7.427863",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "398"
			],
			[
				"Bujur"=> "109.245877",
				"Lintang"=> "-7.427863",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "399"
			],
			[
				"Bujur"=> "109.247422",
				"Lintang"=> "-7.427735",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "400"
			],
			[
				"Bujur"=> "109.247765",
				"Lintang"=> "-7.427757",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "401"
			],
			[
				"Bujur"=> "109.248151",
				"Lintang"=> "-7.427757",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "402"
			],
			[
				"Bujur"=> "109.248538",
				"Lintang"=> "-7.427757",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "403"
			],
			[
				"Bujur"=> "109.248795",
				"Lintang"=> "-7.427735",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "404"
			],
			[
				"Bujur"=> "109.249096",
				"Lintang"=> "-7.427735",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "405"
			],
			[
				"Bujur"=> "109.249718",
				"Lintang"=> "-7.427757",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "406"
			],
			[
				"Bujur"=> "109.250061",
				"Lintang"=> "-7.427714",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "407"
			],
			[
				"Bujur"=> "109.250426",
				"Lintang"=> "-7.42765",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "408"
			],
			[
				"Bujur"=> "109.250748",
				"Lintang"=> "-7.427714",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "409"
			],
			[
				"Bujur"=> "109.251456",
				"Lintang"=> "-7.427672",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "410"
			],
			[
				"Bujur"=> "109.251842",
				"Lintang"=> "-7.427629",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "411"
			],
			[
				"Bujur"=> "109.252164",
				"Lintang"=> "-7.42765",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "412"
			],
			[
				"Bujur"=> "109.252507",
				"Lintang"=> "-7.42765",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "413"
			],
			[
				"Bujur"=> "109.252829",
				"Lintang"=> "-7.427693",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "414"
			],
			[
				"Bujur"=> "109.253151",
				"Lintang"=> "-7.42765",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "415"
			],
			[
				"Bujur"=> "109.253559",
				"Lintang"=> "-7.42765",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "416"
			],
			[
				"Bujur"=> "109.253924",
				"Lintang"=> "-7.427608",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "417"
			],
			[
				"Bujur"=> "109.254267",
				"Lintang"=> "-7.427608",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "418"
			],
			[
				"Bujur"=> "109.25446",
				"Lintang"=> "-7.42782",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "419"
			],
			[
				"Bujur"=> "109.254525",
				"Lintang"=> "-7.42814",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "420"
			],
			[
				"Bujur"=> "109.254653",
				"Lintang"=> "-7.42865",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "421"
			],
			[
				"Bujur"=> "109.256799",
				"Lintang"=> "-7.431268",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "422"
			],
			[
				"Bujur"=> "109.257056",
				"Lintang"=> "-7.431544",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "423"
			],
			[
				"Bujur"=> "109.257743",
				"Lintang"=> "-7.432246",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "424"
			],
			[
				"Bujur"=> "109.257936",
				"Lintang"=> "-7.432523",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "425"
			],
			[
				"Bujur"=> "109.258215",
				"Lintang"=> "-7.432799",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "426"
			],
			[
				"Bujur"=> "109.258473",
				"Lintang"=> "-7.433076",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "427"
			],
			[
				"Bujur"=> "109.258752",
				"Lintang"=> "-7.43331",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "428"
			],
			[
				"Bujur"=> "109.258473",
				"Lintang"=> "-7.433119",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "429"
			],
			[
				"Bujur"=> "109.258752",
				"Lintang"=> "-7.433331",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "430"
			],
			[
				"Bujur"=> "109.259009",
				"Lintang"=> "-7.433587",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "431"
			],
			[
				"Bujur"=> "109.259224",
				"Lintang"=> "-7.433863",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "432"
			],
			[
				"Bujur"=> "109.259803",
				"Lintang"=> "-7.434395",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "433"
			],
			[
				"Bujur"=> "109.260533",
				"Lintang"=> "-7.435204",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "434"
			],
			[
				"Bujur"=> "109.260747",
				"Lintang"=> "-7.435438",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "435"
			],
			[
				"Bujur"=> "109.261005",
				"Lintang"=> "-7.435693",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "436"
			],
			[
				"Bujur"=> "109.261498",
				"Lintang"=> "-7.436119",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "437"
			],
			[
				"Bujur"=> "109.261734",
				"Lintang"=> "-7.436459",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "438"
			],
			[
				"Bujur"=> "109.262035",
				"Lintang"=> "-7.436693",
				"Rute"=> "Jl. Jenderal Sudirman",
				"id"=> "439"
			],
			[
				"Bujur"=> "109.200922",
				"Lintang"=> "-7.420596",
				"Rute"=> "Jl. Yos Sudarso",
				"id"=> "440"
			],
			[
				"Bujur"=> "109.201244",
				"Lintang"=> "-7.42066",
				"Rute"=> "Jl. Yos Sudarso",
				"id"=> "441"
			],
			[
				"Bujur"=> "109.201587",
				"Lintang"=> "-7.420745",
				"Rute"=> "Jl. Yos Sudarso",
				"id"=> "442"
			],
			[
				"Bujur"=> "109.201845",
				"Lintang"=> "-7.42083",
				"Rute"=> "Jl. Yos Sudarso",
				"id"=> "443"
			],
			[
				"Bujur"=> "109.202167",
				"Lintang"=> "-7.42083",
				"Rute"=> "Jl. Yos Sudarso",
				"id"=> "444"
			],
			[
				"Bujur"=> "109.202467",
				"Lintang"=> "-7.420851",
				"Rute"=> "Jl. Yos Sudarso",
				"id"=> "445"
			],
			[
				"Bujur"=> "109.202832",
				"Lintang"=> "-7.420873",
				"Rute"=> "Jl. Yos Sudarso",
				"id"=> "446"
			],
			[
				"Bujur"=> "109.203132",
				"Lintang"=> "-7.420915",
				"Rute"=> "Jl. Yos Sudarso",
				"id"=> "447"
			],
			[
				"Bujur"=> "109.203497",
				"Lintang"=> "-7.420958",
				"Rute"=> "Jl. Yos Sudarso",
				"id"=> "448"
			],
			[
				"Bujur"=> "109.203819",
				"Lintang"=> "-7.421064",
				"Rute"=> "Jl. Yos Sudarso",
				"id"=> "449"
			],
			[
				"Bujur"=> "109.204141",
				"Lintang"=> "-7.421085",
				"Rute"=> "Jl. Yos Sudarso",
				"id"=> "450"
			],
			[
				"Bujur"=> "109.204441",
				"Lintang"=> "-7.421043",
				"Rute"=> "Jl. Yos Sudarso",
				"id"=> "451"
			],
			[
				"Bujur"=> "109.204763",
				"Lintang"=> "-7.421128",
				"Rute"=> "Jl. Yos Sudarso",
				"id"=> "452"
			],
			[
				"Bujur"=> "109.205085",
				"Lintang"=> "-7.421256",
				"Rute"=> "Jl. Yos Sudarso",
				"id"=> "453"
			],
			[
				"Bujur"=> "109.205364",
				"Lintang"=> "-7.421256",
				"Rute"=> "Jl. Yos Sudarso",
				"id"=> "454"
			],
			[
				"Bujur"=> "109.20693",
				"Lintang"=> "-7.421511",
				"Rute"=> "Jl. Yos Sudarso",
				"id"=> "455"
			],
			[
				"Bujur"=> "109.208948",
				"Lintang"=> "-7.421809",
				"Rute"=> "Jl. Yos Sudarso",
				"id"=> "456"
			],
			[
				"Bujur"=> "109.209312",
				"Lintang"=> "-7.421851",
				"Rute"=> "Jl. Yos Sudarso",
				"id"=> "457"
			],
			[
				"Bujur"=> "109.209591",
				"Lintang"=> "-7.421936",
				"Rute"=> "Jl. Yos Sudarso",
				"id"=> "458"
			],
			[
				"Bujur"=> "109.209935",
				"Lintang"=> "-7.421894",
				"Rute"=> "Jl. Yos Sudarso",
				"id"=> "459"
			],
			[
				"Bujur"=> "109.210278",
				"Lintang"=> "-7.421894",
				"Rute"=> "Jl. Yos Sudarso",
				"id"=> "460"
			],
			[
				"Bujur"=> "109.199061",
				"Lintang"=> "-7.420232",
				"Rute"=> "Karanglewas",
				"id"=> "461"
			],
			[
				"Bujur"=> "109.201034",
				"Lintang"=> "-7.420614",
				"Rute"=> "Karanglewas",
				"id"=> "462"
			],
			[
				"Bujur"=> "109.203266",
				"Lintang"=> "-7.421125",
				"Rute"=> "Karanglewas",
				"id"=> "463"
			],
			[
				"Bujur"=> "109.196915",
				"Lintang"=> "-7.421466",
				"Rute"=> "Karanglewas",
				"id"=> "464"
			],
			[
				"Bujur"=> "109.197601",
				"Lintang"=> "-7.423849",
				"Rute"=> "Karanglewas",
				"id"=> "465"
			],
			[
				"Bujur"=> "109.200005",
				"Lintang"=> "-7.423849",
				"Rute"=> "Karanglewas",
				"id"=> "466"
			],
			[
				"Bujur"=> "109.202065",
				"Lintang"=> "-7.42453",
				"Rute"=> "Karanglewas",
				"id"=> "467"
			],
			[
				"Bujur"=> "109.204125",
				"Lintang"=> "-7.425891",
				"Rute"=> "Karanglewas",
				"id"=> "468"
			],
			[
				"Bujur"=> "109.206013",
				"Lintang"=> "-7.427083",
				"Rute"=> "Karanglewas",
				"id"=> "469"
			],
			[
				"Bujur"=> "109.20876",
				"Lintang"=> "-7.427423",
				"Rute"=> "Karanglewas",
				"id"=> "470"
			],
			[
				"Bujur"=> "109.210648",
				"Lintang"=> "-7.428274",
				"Rute"=> "Karanglewas",
				"id"=> "471"
			],
			[
				"Bujur"=> "109.211507",
				"Lintang"=> "-7.431168",
				"Rute"=> "Karanglewas",
				"id"=> "472"
			],
			[
				"Bujur"=> "109.215456",
				"Lintang"=> "-7.437636",
				"Rute"=> "Karanglewas",
				"id"=> "473"
			],
			[
				"Bujur"=> "109.200691",
				"Lintang"=> "-7.411422",
				"Rute"=> "Karanglewas",
				"id"=> "474"
			],
			[
				"Bujur"=> "109.205669",
				"Lintang"=> "-7.412103",
				"Rute"=> "Karanglewas",
				"id"=> "475"
			],
			[
				"Bujur"=> "109.210819",
				"Lintang"=> "-7.412103",
				"Rute"=> "Karanglewas",
				"id"=> "476"
			],
			[
				"Bujur"=> "109.216484",
				"Lintang"=> "-7.411592",
				"Rute"=> "Karanglewas",
				"id"=> "477"
			],
			[
				"Bujur"=> "109.195752",
				"Lintang"=> "-7.419467",
				"Rute"=> "Monumen Panglima Besar Jenderal Soedirman",
				"id"=> "478"
			],
			[
				"Bujur"=> "109.195902",
				"Lintang"=> "-7.419552",
				"Rute"=> "Monumen Panglima Besar Jenderal Soedirman",
				"id"=> "479"
			],
			[
				"Bujur"=> "109.196063",
				"Lintang"=> "-7.419594",
				"Rute"=> "Monumen Panglima Besar Jenderal Soedirman",
				"id"=> "480"
			],
			[
				"Bujur"=> "109.196202",
				"Lintang"=> "-7.419658",
				"Rute"=> "Monumen Panglima Besar Jenderal Soedirman",
				"id"=> "481"
			],
			[
				"Bujur"=> "109.196374",
				"Lintang"=> "-7.419701",
				"Rute"=> "Monumen Panglima Besar Jenderal Soedirman",
				"id"=> "482"
			],
			[
				"Bujur"=> "109.196535",
				"Lintang"=> "-7.419775",
				"Rute"=> "Monumen Panglima Besar Jenderal Soedirman",
				"id"=> "483"
			],
			[
				"Bujur"=> "109.196696",
				"Lintang"=> "-7.419807",
				"Rute"=> "Monumen Panglima Besar Jenderal Soedirman",
				"id"=> "484"
			],
			[
				"Bujur"=> "109.233385",
				"Lintang"=> "-7.427017",
				"Rute"=> "Jl. Kolonel Sugiono",
				"id"=> "485"
			],
			[
				"Bujur"=> "109.233557",
				"Lintang"=> "-7.42707",
				"Rute"=> "Jl. Kolonel Sugiono",
				"id"=> "486"
			],
			[
				"Bujur"=> "109.233729",
				"Lintang"=> "-7.427155",
				"Rute"=> "Jl. Kolonel Sugiono",
				"id"=> "487"
			],
			[
				"Bujur"=> "109.234061",
				"Lintang"=> "-7.427304",
				"Rute"=> "Jl. Kolonel Sugiono",
				"id"=> "488"
			],
			[
				"Bujur"=> "109.234244",
				"Lintang"=> "-7.427368",
				"Rute"=> "Jl. Kolonel Sugiono",
				"id"=> "489"
			],
			[
				"Bujur"=> "109.234415",
				"Lintang"=> "-7.427453",
				"Rute"=> "Jl. Kolonel Sugiono",
				"id"=> "490"
			],
			[
				"Bujur"=> "109.234619",
				"Lintang"=> "-7.427506",
				"Rute"=> "Jl. Kolonel Sugiono",
				"id"=> "491"
			],
			[
				"Bujur"=> "109.234844",
				"Lintang"=> "-7.427549",
				"Rute"=> "Jl. Kolonel Sugiono",
				"id"=> "492"
			],
			[
				"Bujur"=> "109.235059",
				"Lintang"=> "-7.427591",
				"Rute"=> "Jl. Kolonel Sugiono",
				"id"=> "493"
			],
			[
				"Bujur"=> "109.235209",
				"Lintang"=> "-7.427644",
				"Rute"=> "Jl. Kolonel Sugiono",
				"id"=> "494"
			],
			[
				"Bujur"=> "109.235392",
				"Lintang"=> "-7.427698",
				"Rute"=> "Jl. Kolonel Sugiono",
				"id"=> "495"
			],
			[
				"Bujur"=> "109.235595",
				"Lintang"=> "-7.427719",
				"Rute"=> "Jl. Kolonel Sugiono",
				"id"=> "496"
			],
			[
				"Bujur"=> "109.234072",
				"Lintang"=> "-7.427123",
				"Rute"=> "Jl. Kolonel Sugiono",
				"id"=> "497"
			],
			[
				"Bujur"=> "109.234287",
				"Lintang"=> "-7.427006",
				"Rute"=> "Jl. Kolonel Sugiono",
				"id"=> "498"
			],
			[
				"Bujur"=> "109.234544",
				"Lintang"=> "-7.426921",
				"Rute"=> "Jl. Kolonel Sugiono",
				"id"=> "499"
			],
			[
				"Bujur"=> "109.234759",
				"Lintang"=> "-7.426900",
				"Rute"=> "Jl. Kolonel Sugiono",
				"id"=> "500"
			],
			[
				"Bujur"=> "109.234930",
				"Lintang"=> "-7.426442",
				"Rute"=> "Jl. Kolonel Sugiono",
				"id"=> "501"
			],
			[
				"Bujur"=> "109.234909",
				"Lintang"=> "-7.426655",
				"Rute"=> "Jl. Kolonel Sugiono",
				"id"=> "502"
			],
			[
				"Bujur"=> "109.234887",
				"Lintang"=> "-7.426836",
				"Rute"=> "Jl. Kolonel Sugiono",
				"id"=> "503"
			],
			[
				"Bujur"=> "109.235048",
				"Lintang"=> "-7.427038",
				"Rute"=> "Jl. Kolonel Sugiono",
				"id"=> "504"
			],
			[
				"Bujur"=> "109.235220",
				"Lintang"=> "-7.427176",
				"Rute"=> "Jl. Kolonel Sugiono",
				"id"=> "505"
			],
			[
				"Bujur"=> "109.235381",
				"Lintang"=> "-7.427315",
				"Rute"=> "Jl. Kolonel Sugiono",
				"id"=> "506"
			],
			[
				"Bujur"=> "109.235563",
				"Lintang"=> "-7.427474",
				"Rute"=> "Jl. Kolonel Sugiono",
				"id"=> "507"
			],
			[
				"Bujur"=> "109.235724",
				"Lintang"=> "-7.427613",
				"Rute"=> "Jl. Kolonel Sugiono",
				"id"=> "508"
			],
			[
				"Bujur"=> "109.235885",
				"Lintang"=> "-7.427751",
				"Rute"=> "Jl. Kolonel Sugiono",
				"id"=> "508"
			],
			[
				"Bujur"=> "109.235982",
				"Lintang"=> "-7.427815",
				"Rute"=> "Jl. Kolonel Sugiono",
				"id"=> "510"
			],
			[
				"Bujur"=> "109.236379",
				"Lintang"=> "-7.427910",
				"Rute"=> "Jl. Kolonel Sugiono",
				"id"=> "511"
			],
			[
				"Bujur"=> "109.236604",
				"Lintang"=> "-7.427974",
				"Rute"=> "Jl. Kolonel Sugiono",
				"id"=> "512"
			],
			[
				"Bujur"=> "109.237226",
				"Lintang"=> "-7.428145",
				"Rute"=> "Jl. Kolonel Sugiono",
				"id"=> "513"
			],
			[
				"Bujur"=> "109.237398",
				"Lintang"=> "-7.428208",
				"Rute"=> "Jl. Kolonel Sugiono",
				"id"=> "514"
			],
			[
				"Bujur"=> "109.237956",
				"Lintang"=> "-7.428389",
				"Rute"=> "Jl. Kolonel Sugiono",
				"id"=> "515"
			],
			[
				"Bujur"=> "109.238235",
				"Lintang"=> "-7.428496",
				"Rute"=> "Jl. Kolonel Sugiono",
				"id"=> "516"
			],
			[
				"Bujur"=> "109.238406",
				"Lintang"=> "-7.428581",
				"Rute"=> "Jl. Kolonel Sugiono",
				"id"=> "517"
			],
			[
				"Bujur"=> "109.238803",
				"Lintang"=> "-7.428751",
				"Rute"=> "Jl. Kolonel Sugiono",
				"id"=> "518"
			],
			[
				"Bujur"=> "109.238964",
				"Lintang"=> "-7.428836",
				"Rute"=> "Jl. Kolonel Sugiono",
				"id"=> "519"
			],
			[
				"Bujur"=> "109.239147",
				"Lintang"=> "-7.428910",
				"Rute"=> "Jl. Kolonel Sugiono",
				"id"=> "520"
			],
			[
				"Bujur"=> "109.239297",
				"Lintang"=> "-7.428985",
				"Rute"=> "Jl. Kolonel Sugiono",
				"id"=> "521"
			],
			[
				"Bujur"=> "109.239479",
				"Lintang"=> "-7.429113",
				"Rute"=> "Jl. Kolonel Sugiono",
				"id"=> "522"
			],
			[
				"Bujur"=> "109.239705",
				"Lintang"=> "-7.429145",
				"Rute"=> "Jl. Kolonel Sugiono",
				"id"=> "523"
			],
			[
				"Bujur"=> "109.239866",
				"Lintang"=> "-7.429240",
				"Rute"=> "Jl. Kolonel Sugiono",
				"id"=> "524"
			],
			[
				"Bujur"=> "109.240059",
				"Lintang"=> "-7.429315",
				"Rute"=> "Jl. Kolonel Sugiono",
				"id"=> "525"
			],
			[
				"Bujur"=> "109.240220",
				"Lintang"=> "-7.429368",
				"Rute"=> "Jl. Kolonel Sugiono",
				"id"=> "526"
			],
			[
				"Bujur"=> "109.240445",
				"Lintang"=> "-7.429411",
				"Rute"=> "Jl. Kolonel Sugiono",
				"id"=> "527"
			],
			[
				"Bujur"=> "109.240606",
				"Lintang"=> "-7.429496",
				"Rute"=> "Jl. Kolonel Sugiono",
				"id"=> "528"
			],
			[
				"Bujur"=> "109.239093",
				"Lintang"=> "-7.429081",
				"Rute"=> "Jl. Kolonel Sugiono",
				"id"=> "529"
			],
			[
				"Bujur"=> "109.239104",
				"Lintang"=> "-7.429272",
				"Rute"=> "Jl. Kolonel Sugiono",
				"id"=> "530"
			],
			[
				"Bujur"=> "109.239061",
				"Lintang"=> "-7.429474",
				"Rute"=> "Jl. Kolonel Sugiono",
				"id"=> "531"
			],
			[
				"Bujur"=> "109.239007",
				"Lintang"=> "-7.429698",
				"Rute"=> "Jl. Kolonel Sugiono",
				"id"=> "532"
			],
			[
				"Bujur"=> "109.238954",
				"Lintang"=> "-7.429879",
				"Rute"=> "Jl. Kolonel Sugiono",
				"id"=> "533"
			],
			[
				"Bujur"=> "109.238900",
				"Lintang"=> "-7.430060",
				"Rute"=> "Jl. Kolonel Sugiono",
				"id"=> "534"
			],
			[
				"Bujur"=> "109.238868",
				"Lintang"=> "-7.430241",
				"Rute"=> "Jl. Kolonel Sugiono",
				"id"=> "535"
			],
			[
				"Bujur"=> "109.238825",
				"Lintang"=> "-7.430379",
				"Rute"=> "Jl. Kolonel Sugiono",
				"id"=> "536"
			],
			[
				"Bujur"=> "109.243596",
				"Lintang"=> "-7.429155",
				"Rute"=> "Jl. Situmpur",
				"id"=> "537"
			],
			[
				"Bujur"=> "109.243403",
				"Lintang"=> "-7.429176",
				"Rute"=> "Jl. Situmpur",
				"id"=> "538"
			],
			[
				"Bujur"=> "109.243167",
				"Lintang"=> "-7.429198",
				"Rute"=> "Jl. Situmpur",
				"id"=> "539"
			],
			[
				"Bujur"=> "109.242952",
				"Lintang"=> "-7.429176",
				"Rute"=> "Jl. Situmpur",
				"id"=> "540"
			],
			[
				"Bujur"=> "109.242770",
				"Lintang"=> "-7.429240",
				"Rute"=> "Jl. Situmpur",
				"id"=> "541"
			],
			[
				"Bujur"=> "109.242545",
				"Lintang"=> "-7.429229",
				"Rute"=> "Jl. Situmpur",
				"id"=> "542"
			],
			[
				"Bujur"=> "109.242351",
				"Lintang"=> "-7.429261",
				"Rute"=> "Jl. Situmpur",
				"id"=> "543"
			],
			[
				"Bujur"=> "109.242158",
				"Lintang"=> "-7.429336",
				"Rute"=> "Jl. Situmpur",
				"id"=> "544"
			],
			[
				"Bujur"=> "109.242083",
				"Lintang"=> "-7.429485",
				"Rute"=> "Jl. Situmpur",
				"id"=> "545"
			],
			[
				"Bujur"=> "109.242094",
				"Lintang"=> "-7.429666",
				"Rute"=> "Jl. Situmpur",
				"id"=> "546"
			],
			[
				"Bujur"=> "109.242083",
				"Lintang"=> "-7.429730",
				"Rute"=> "Jl. Situmpur",
				"id"=> "547"
			],
			[
				"Bujur"=> "109.241912",
				"Lintang"=> "-7.430070",
				"Rute"=> "Jl. Situmpur",
				"id"=> "548"
			],
			[
				"Bujur"=> "109.241297",
				"Lintang"=> "-7.430401",
				"Rute"=> "Jl. Situmpur",
				"id"=> "549"
			],
			[
				"Bujur"=> "109.241147",
				"Lintang"=> "-7.430412",
				"Rute"=> "Jl. Situmpur",
				"id"=> "550"
			],
			[
				"Bujur"=> "109.240841",
				"Lintang"=> "-7.430417",
				"Rute"=> "Jl. Situmpur",
				"id"=> "551"
			],
			[
				"Bujur"=> "109.240718",
				"Lintang"=> "-7.430412",
				"Rute"=> "Jl. Situmpur",
				"id"=> "552"
			],
			[
				"Bujur"=> "109.243905",
				"Lintang"=> "-7.429120",
				"Rute"=> "Jl. Pramuka",
				"id"=> "553"
			],
			[
				"Bujur"=> "109.244120",
				"Lintang"=> "-7.429158",
				"Rute"=> "Jl. Pramuka",
				"id"=> "554"
			],
			[
				"Bujur"=> "109.244399",
				"Lintang"=> "-7.429285",
				"Rute"=> "Jl. Pramuka",
				"id"=> "555"
			],
			[
				"Bujur"=> "109.246609",
				"Lintang"=> "-7.429541",
				"Rute"=> "Jl. Pramuka",
				"id"=> "556"
			],
			[
				"Bujur"=> "109.246974",
				"Lintang"=> "-7.429583",
				"Rute"=> "Jl. Pramuka",
				"id"=> "557"
			],
			[
				"Bujur"=> "109.247789",
				"Lintang"=> "-7.429711",
				"Rute"=> "Jl. Pramuka",
				"id"=> "558"
			],
			[
				"Bujur"=> "109.248240",
				"Lintang"=> "-7.429711",
				"Rute"=> "Jl. Pramuka",
				"id"=> "559"
			],
			[
				"Bujur"=> "109.248562",
				"Lintang"=> "-7.429753",
				"Rute"=> "Jl. Pramuka",
				"id"=> "560"
			],
			[
				"Bujur"=> "109.249012",
				"Lintang"=> "-7.429711",
				"Rute"=> "Jl. Pramuka",
				"id"=> "561"
			],
			[
				"Bujur"=> "109.249463",
				"Lintang"=> "-7.429626",
				"Rute"=> "Jl. Pramuka",
				"id"=> "562"
			],
			[
				"Bujur"=> "109.249956",
				"Lintang"=> "-7.429583",
				"Rute"=> "Jl. Pramuka",
				"id"=> "563"
			],
			[
				"Bujur"=> "109.250343",
				"Lintang"=> "-7.429541",
				"Rute"=> "Jl. Pramuka",
				"id"=> "564"
			],
			[
				"Bujur"=> "109.250793",
				"Lintang"=> "-7.429434",
				"Rute"=> "Jl. Pramuka",
				"id"=> "565"
			],
			[
				"Bujur"=> "109.251244",
				"Lintang"=> "-7.429370",
				"Rute"=> "Jl. Pramuka",
				"id"=> "566"
			],
			[
				"Bujur"=> "109.251630",
				"Lintang"=> "-7.429264",
				"Rute"=> "Jl. Pramuka",
				"id"=> "567"
			],
			[
				"Bujur"=> "109.252059",
				"Lintang"=> "-7.429221",
				"Rute"=> "Jl. Pramuka",
				"id"=> "568"
			],
			[
				"Bujur"=> "109.252746",
				"Lintang"=> "-7.429221",
				"Rute"=> "Jl. Pramuka",
				"id"=> "569"
			],
			[
				"Bujur"=> "109.253175",
				"Lintang"=> "-7.429158",
				"Rute"=> "Jl. Pramuka",
				"id"=> "570"
			],
			[
				"Bujur"=> "109.254012",
				"Lintang"=> "-7.429115",
				"Rute"=> "Jl. Pramuka",
				"id"=> "571"
			],
			[
				"Bujur"=> "109.254570",
				"Lintang"=> "-7.429072",
				"Rute"=> "Jl. Pramuka",
				"id"=> "572"
			],
			[
				"Bujur"=> "109.248690",
				"Lintang"=> "-7.427966",
				"Rute"=> "Jl. D.I. Panjaitan",
				"id"=> "573"
			],
			[
				"Bujur"=> "109.248741",
				"Lintang"=> "-7.428358",
				"Rute"=> "Jl. D.I. Panjaitan",
				"id"=> "574"
			],
			[
				"Bujur"=> "109.248698",
				"Lintang"=> "-7.428847",
				"Rute"=> "Jl. D.I. Panjaitan",
				"id"=> "575"
			],
			[
				"Bujur"=> "109.248720",
				"Lintang"=> "-7.429273",
				"Rute"=> "Jl. D.I. Panjaitan",
				"id"=> "576"
			],
			[
				"Bujur"=> "109.248720",
				"Lintang"=> "-7.429826",
				"Rute"=> "Jl. D.I. Panjaitan",
				"id"=> "577"
			],
			[
				"Bujur"=> "109.248763",
				"Lintang"=> "-7.430230",
				"Rute"=> "Jl. D.I. Panjaitan",
				"id"=> "578"
			],
			[
				"Bujur"=> "109.248741",
				"Lintang"=> "-7.430741",
				"Rute"=> "Jl. D.I. Panjaitan",
				"id"=> "579"
			],
			[
				"Bujur"=> "109.248784",
				"Lintang"=> "-7.431209",
				"Rute"=> "Jl. D.I. Panjaitan",
				"id"=> "580"
			],
			[
				"Bujur"=> "109.248763",
				"Lintang"=> "-7.431571",
				"Rute"=> "Jl. D.I. Panjaitan",
				"id"=> "581"
			],
			[
				"Bujur"=> "109.248763",
				"Lintang"=> "-7.431932",
				"Rute"=> "Jl. D.I. Panjaitan",
				"id"=> "582"
			],
			[
				"Bujur"=> "109.248827",
				"Lintang"=> "-7.433188",
				"Rute"=> "Jl. D.I. Panjaitan",
				"id"=> "583"
			],
			[
				"Bujur"=> "109.248870",
				"Lintang"=> "-7.433932",
				"Rute"=> "Jl. D.I. Panjaitan",
				"id"=> "584"
			],
			[
				"Bujur"=> "109.248870",
				"Lintang"=> "-7.434422",
				"Rute"=> "Jl. D.I. Panjaitan",
				"id"=> "585"
			],
			[
				"Bujur"=> "109.248881",
				"Lintang"=> "-7.435704",
				"Rute"=> "Jl. D.I. Panjaitan",
				"id"=> "586"
			],
			[
				"Bujur"=> "109.248881",
				"Lintang"=> "-7.436193",
				"Rute"=> "Jl. D.I. Panjaitan",
				"id"=> "587"
			],
			[
				"Bujur"=> "109.248838",
				"Lintang"=> "-7.436661",
				"Rute"=> "Jl. D.I. Panjaitan",
				"id"=> "588"
			],
			[
				"Bujur"=> "109.248902",
				"Lintang"=> "-7.437108",
				"Rute"=> "Jl. D.I. Panjaitan",
				"id"=> "589"
			],
			[
				"Bujur"=> "109.248497",
				"Lintang"=> "-7.423523",
				"Rute"=> "Jl. Brigjen. Katamso",
				"id"=> "590"
			],
			[
				"Bujur"=> "109.248518",
				"Lintang"=> "-7.423693",
				"Rute"=> "Jl. Brigjen. Katamso",
				"id"=> "591"
			],
			[
				"Bujur"=> "109.248540",
				"Lintang"=> "-7.423874",
				"Rute"=> "Jl. Brigjen. Katamso",
				"id"=> "592"
			],
			[
				"Bujur"=> "109.248668",
				"Lintang"=> "-7.425076",
				"Rute"=> "Jl. Brigjen. Katamso",
				"id"=> "593"
			],
			[
				"Bujur"=> "109.248636",
				"Lintang"=> "-7.425619",
				"Rute"=> "Jl. Brigjen. Katamso",
				"id"=> "594"
			],
			[
				"Bujur"=> "109.248625",
				"Lintang"=> "-7.425778",
				"Rute"=> "Jl. Brigjen. Katamso",
				"id"=> "595"
			],
			[
				"Bujur"=> "109.246078",
				"Lintang"=> "-7.425060",
				"Rute"=> "Jl. Moch.Iksan",
				"id"=> "596"
			],
			[
				"Bujur"=> "109.246164",
				"Lintang"=> "-7.425055",
				"Rute"=> "Jl. Moch.Iksan",
				"id"=> "597"
			],
			[
				"Bujur"=> "109.246250",
				"Lintang"=> "-7.425066",
				"Rute"=> "Jl. Moch.Iksan",
				"id"=> "598"
			],
			[
				"Bujur"=> "109.246346",
				"Lintang"=> "-7.425055",
				"Rute"=> "Jl. Moch.Iksan",
				"id"=> "599"
			],
			[
				"Bujur"=> "109.246459",
				"Lintang"=> "-7.425034",
				"Rute"=> "Jl. Moch.Iksan",
				"id"=> "560"
			],
			[
				"Bujur"=> "109.246583",
				"Lintang"=> "-7.425039",
				"Rute"=> "Jl. Moch.Iksan",
				"id"=> "601"
			],
			[
				"Bujur"=> "109.246711",
				"Lintang"=> "-7.425013",
				"Rute"=> "Jl. Moch.Iksan",
				"id"=> "602"
			],
			[
				"Bujur"=> "109.246851",
				"Lintang"=> "-7.425002",
				"Rute"=> "Jl. Moch.Iksan",
				"id"=> "603"
			],
			[
				"Bujur"=> "109.247350",
				"Lintang"=> "-7.424981",
				"Rute"=> "Jl. Moch.Iksan",
				"id"=> "604"
			],
			[
				"Bujur"=> "109.247452",
				"Lintang"=> "-7.424970",
				"Rute"=> "Jl. Moch.Iksan",
				"id"=> "605"
			],
			[
				"Bujur"=> "109.244055",
				"Lintang"=> "-7.423268",
				"Rute"=> "Jl. Komisaris Bambang Suprapto",
				"id"=> "606"
			],
			[
				"Bujur"=> "109.244238",
				"Lintang"=> "-7.423321",
				"Rute"=> "Jl. Komisaris Bambang Suprapto",
				"id"=> "607"
			],
			[
				"Bujur"=> "109.244635",
				"Lintang"=> "-7.423385",
				"Rute"=> "Jl. Komisaris Bambang Suprapto",
				"id"=> "608"
			],
			[
				"Bujur"=> "109.244881",
				"Lintang"=> "-7.423406",
				"Rute"=> "Jl. Komisaris Bambang Suprapto",
				"id"=> "609"
			],
			[
				"Bujur"=> "109.245332",
				"Lintang"=> "-7.423460",
				"Rute"=> "Jl. Komisaris Bambang Suprapto",
				"id"=> "610"
			],
			[
				"Bujur"=> "109.245847",
				"Lintang"=> "-7.423470",
				"Rute"=> "Jl. Komisaris Bambang Suprapto",
				"id"=> "611"
			],
			[
				"Bujur"=> "109.246072",
				"Lintang"=> "-7.423460",
				"Rute"=> "Jl. Komisaris Bambang Suprapto",
				"id"=> "612"
			],
			[
				"Bujur"=> "109.246405",
				"Lintang"=> "-7.423449",
				"Rute"=> "Jl. Komisaris Bambang Suprapto",
				"id"=> "613"
			],
			[
				"Bujur"=> "109.246662",
				"Lintang"=> "-7.423449",
				"Rute"=> "Jl. Komisaris Bambang Suprapto",
				"id"=> "614"
			],
			[
				"Bujur"=> "109.247199",
				"Lintang"=> "-7.423406",
				"Rute"=> "Jl. Komisaris Bambang Suprapto",
				"id"=> "615"
			],
			[
				"Bujur"=> "109.247435",
				"Lintang"=> "-7.423417",
				"Rute"=> "Jl. Komisaris Bambang Suprapto",
				"id"=> "616"
			],
			[
				"Bujur"=> "109.247746",
				"Lintang"=> "-7.423364",
				"Rute"=> "Jl. Komisaris Bambang Suprapto",
				"id"=> "617"
			],
			[
				"Bujur"=> "109.248057",
				"Lintang"=> "-7.423364",
				"Rute"=> "Jl. Komisaris Bambang Suprapto",
				"id"=> "618"
			],
			[
				"Bujur"=> "109.248282",
				"Lintang"=> "-7.423353",
				"Rute"=> "Jl. Komisaris Bambang Suprapto",
				"id"=> "619"
			],
			[
				"Bujur"=> "109.248594",
				"Lintang"=> "-7.423332",
				"Rute"=> "Jl. Komisaris Bambang Suprapto",
				"id"=> "620"
			],
			[
				"Bujur"=> "109.248926",
				"Lintang"=> "-7.423300",
				"Rute"=> "Jl. Komisaris Bambang Suprapto",
				"id"=> "621"
			],
			[
				"Bujur"=> "109.249194",
				"Lintang"=> "-7.423279",
				"Rute"=> "Jl. Komisaris Bambang Suprapto",
				"id"=> "622"
			],
			[
				"Bujur"=> "109.249430",
				"Lintang"=> "-7.423289",
				"Rute"=> "Jl. Komisaris Bambang Suprapto",
				"id"=> "623"
			],
			[
				"Bujur"=> "109.250031",
				"Lintang"=> "-7.423257",
				"Rute"=> "Jl. Komisaris Bambang Suprapto",
				"id"=> "624"
			],
			[
				"Bujur"=> "109.250299",
				"Lintang"=> "-7.423204",
				"Rute"=> "Jl. Komisaris Bambang Suprapto",
				"id"=> "625"
			],
			[
				"Bujur"=> "109.250557",
				"Lintang"=> "-7.423204",
				"Rute"=> "Jl. Komisaris Bambang Suprapto",
				"id"=> "626"
			],
			[
				"Bujur"=> "109.250804",
				"Lintang"=> "-7.423172",
				"Rute"=> "Jl. Komisaris Bambang Suprapto",
				"id"=> "627"
			],
			[
				"Bujur"=> "109.251115",
				"Lintang"=> "-7.423172",
				"Rute"=> "Jl. Komisaris Bambang Suprapto",
				"id"=> "628"
			],
			[
				"Bujur"=> "109.248669",
				"Lintang"=> "-7.421598",
				"Rute"=> "Jl. Komisaris Bambang Suprapto",
				"id"=> "629"
			],
			[
				"Bujur"=> "109.248658",
				"Lintang"=> "-7.421874",
				"Rute"=> "Jl. Komisaris Bambang Suprapto",
				"id"=> "630"
			],
			[
				"Bujur"=> "109.248722",
				"Lintang"=> "-7.422140",
				"Rute"=> "Jl. Komisaris Bambang Suprapto",
				"id"=> "631"
			],
			[
				"Bujur"=> "109.248701",
				"Lintang"=> "-7.422417",
				"Rute"=> "Jl. Komisaris Bambang Suprapto",
				"id"=> "632"
			],
			[
				"Bujur"=> "109.248733",
				"Lintang"=> "-7.422694",
				"Rute"=> "Jl. Komisaris Bambang Suprapto",
				"id"=> "633"
			],
			[
				"Bujur"=> "109.248733",
				"Lintang"=> "-7.423151",
				"Rute"=> "Jl. Komisaris Bambang Suprapto",
				"id"=> "634"
			],
			[
				"Bujur"=> "109.251233",
				"Lintang"=> "-7.423261",
				"Rute"=> "Jl. Mt Haryono",
				"id"=> "635"
			],
			[
				"Bujur"=> "109.251222",
				"Lintang"=> "-7.423867",
				"Rute"=> "Jl. Mt Haryono",
				"id"=> "636"
			],
			[
				"Bujur"=> "109.251222",
				"Lintang"=> "-7.424623",
				"Rute"=> "Jl. Mt Haryono",
				"id"=> "637"
			],
			[
				"Bujur"=> "109.251212",
				"Lintang"=> "-7.424857",
				"Rute"=> "Jl. Mt Haryono",
				"id"=> "638"
			],
			[
				"Bujur"=> "109.251228",
				"Lintang"=> "-7.425195",
				"Rute"=> "Jl. Mt Haryono",
				"id"=> "639"
			],
			[
				"Bujur"=> "109.251174",
				"Lintang"=> "-7.425588",
				"Rute"=> "Jl. Mt Haryono",
				"id"=> "640"
			],
			[
				"Bujur"=> "109.251195",
				"Lintang"=> "-7.425780",
				"Rute"=> "Jl. Mt Haryono",
				"id"=> "641"
			],
			[
				"Bujur"=> "109.251217",
				"Lintang"=> "-7.425950",
				"Rute"=> "Jl. Mt Haryono",
				"id"=> "642"
			],
			[
				"Bujur"=> "109.251174",
				"Lintang"=> "-7.426173",
				"Rute"=> "Jl. Mt Haryono",
				"id"=> "643"
			],
			[
				"Bujur"=> "109.251185",
				"Lintang"=> "-7.426376",
				"Rute"=> "Jl. Mt Haryono",
				"id"=> "644"
			],
			[
				"Bujur"=> "109.251174",
				"Lintang"=> "-7.426546",
				"Rute"=> "Jl. Mt Haryono",
				"id"=> "645"
			],
			[
				"Bujur"=> "109.251153",
				"Lintang"=> "-7.426759",
				"Rute"=> "Jl. Mt Haryono",
				"id"=> "646"
			],
			[
				"Bujur"=> "109.251174",
				"Lintang"=> "-7.427205",
				"Rute"=> "Jl. Mt Haryono",
				"id"=> "647"
			],
			[
				"Bujur"=> "109.251174",
				"Lintang"=> "-7.427354",
				"Rute"=> "Jl. Mt Haryono",
				"id"=> "648"
			],
			[
				"Bujur"=> "109.251153",
				"Lintang"=> "-7.427514",
				"Rute"=> "Jl. Mt Haryono",
				"id"=> "649"
			],
			[
				"Bujur"=> "109.248667",
				"Lintang"=> "-7.426255",
				"Rute"=> "Pasar Wage Purwokerto",
				"id"=> "650"
			],
			[
				"Bujur"=> "109.248672",
				"Lintang"=> "-7.426340",
				"Rute"=> "Pasar Wage Purwokerto",
				"id"=> "651"
			],
			[
				"Bujur"=> "109.248688",
				"Lintang"=> "-7.426665",
				"Rute"=> "Pasar Wage Purwokerto",
				"id"=> "652"
			],
			[
				"Bujur"=> "109.248726",
				"Lintang"=> "-7.427213",
				"Rute"=> "Pasar Wage Purwokerto",
				"id"=> "653"
			],
			[
				"Bujur"=> "109.248726",
				"Lintang"=> "-7.427330",
				"Rute"=> "Pasar Wage Purwokerto",
				"id"=> "654"
			],
			[
				"Bujur"=> "109.248715",
				"Lintang"=> "-7.427484",
				"Rute"=> "Pasar Wage Purwokerto",
				"id"=> "655"
			],
			[
				"Bujur"=> "109.248715",
				"Lintang"=> "-7.427558",
				"Rute"=> "Pasar Wage Purwokerto",
				"id"=> "656"
			],
			[
				"Bujur"=> "109.248720",
				"Lintang"=> "-7.427628",
				"Rute"=> "Pasar Wage Purwokerto",
				"id"=> "657"
			],
			[
				"Bujur"=> "109.254960",
				"Lintang"=> "-7.442500",
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"id"=> "658"
			],
			[
				"Bujur"=> "109.255239",
				"Lintang"=> "-7.442543",
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"id"=> "659"
			],
			[
				"Bujur"=> "109.255690",
				"Lintang"=> "-7.442330",
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"id"=> "660"
			],
			[
				"Bujur"=> "109.255818",
				"Lintang"=> "-7.442117",
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"id"=> "661"
			],
			[
				"Bujur"=> "109.256076",
				"Lintang"=> "-7.441947",
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"id"=> "662"
			],
			[
				"Bujur"=> "109.229799",
				"Lintang"=> "-7.419626",
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"id"=> "663"
			],
			[
				"Bujur"=> "109.256312",
				"Lintang"=> "-7.441926",
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"id"=> "664"
			],
			[
				"Bujur"=> "109.256827",
				"Lintang"=> "-7.441990",
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"id"=> "665"
			],
			[
				"Bujur"=> "109.257514",
				"Lintang"=> "-7.442522",
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"id"=> "666"
			],
			[
				"Bujur"=> "109.257514",
				"Lintang"=> "-7.443394",
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"id"=> "667"
			],
			[
				"Bujur"=> "109.257492",
				"Lintang"=> "-7.444011",
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"id"=> "668"
			],
			[
				"Bujur"=> "109.257385",
				"Lintang"=> "-7.444628",
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"id"=> "669"
			],
			[
				"Bujur"=> "109.256763",
				"Lintang"=> "-7.444777",
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"id"=> "670"
			],
			[
				"Bujur"=> "109.257363",
				"Lintang"=> "-7.443990",
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"id"=> "671"
			],
			[
				"Bujur"=> "109.254939",
				"Lintang"=> "-7.443054",
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"id"=> "672"
			],
			[
				"Bujur"=> "109.256505",
				"Lintang"=> "-7.444117",
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"id"=> "673"
			],
			[
				"Bujur"=> "109.255110",
				"Lintang"=> "-7.443075",
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"id"=> "674"
			],
			[
				"Bujur"=> "109.255647",
				"Lintang"=> "-7.443288",
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"id"=> "675"
			],
			[
				"Bujur"=> "109.255690",
				"Lintang"=> "-7.443888",
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"id"=> "676"
			],
			[
				"Bujur"=> "109.255690",
				"Lintang"=> "-7.444458",
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"id"=> "677"
			],
			[
				"Bujur"=> "109.256205",
				"Lintang"=> "-7.444756",
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"id"=> "678"
			],
			[
				"Bujur"=> "109.256419",
				"Lintang"=> "-7.445437",
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"id"=> "679"
			],
			[
				"Bujur"=> "109.256441",
				"Lintang"=> "-7.446564",
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"id"=> "680"
			],
			[
				"Bujur"=> "109.243552",
				"Lintang"=> "-7.447986",
				"Rute"=> "Jl. Sultan Agung",
				"id"=> "681"
			],
			[
				"Bujur"=> "109.243917",
				"Lintang"=> "-7.448007",
				"Rute"=> "Jl. Sultan Agung",
				"id"=> "682"
			],
			[
				"Bujur"=> "109.244324",
				"Lintang"=> "-7.448049",
				"Rute"=> "Jl. Sultan Agung",
				"id"=> "683"
			],
			[
				"Bujur"=> "109.244711",
				"Lintang"=> "-7.448071",
				"Rute"=> "Jl. Sultan Agung",
				"id"=> "684"
			],
			[
				"Bujur"=> "109.245161",
				"Lintang"=> "-7.448092",
				"Rute"=> "Jl. Sultan Agung",
				"id"=> "685"
			],
			[
				"Bujur"=> "109.245548",
				"Lintang"=> "-7.448135",
				"Rute"=> "Jl. Sultan Agung",
				"id"=> "686"
			],
			[
				"Bujur"=> "109.245977",
				"Lintang"=> "-7.448113",
				"Rute"=> "Jl. Sultan Agung",
				"id"=> "687"
			],
			[
				"Bujur"=> "109.246384",
				"Lintang"=> "-7.448156",
				"Rute"=> "Jl. Sultan Agung",
				"id"=> "688"
			],
			[
				"Bujur"=> "109.246835",
				"Lintang"=> "-7.448241",
				"Rute"=> "Jl. Sultan Agung",
				"id"=> "689"
			],
			[
				"Bujur"=> "109.247264",
				"Lintang"=> "-7.448305",
				"Rute"=> "Jl. Sultan Agung",
				"id"=> "690"
			],
			[
				"Bujur"=> "109.247715",
				"Lintang"=> "-7.448262",
				"Rute"=> "Jl. Sultan Agung",
				"id"=> "691"
			],
			[
				"Bujur"=> "109.248144",
				"Lintang"=> "-7.448241",
				"Rute"=> "Jl. Sultan Agung",
				"id"=> "692"
			],
			[
				"Bujur"=> "109.248745",
				"Lintang"=> "-7.448209",
				"Rute"=> "Jl. Sultan Agung",
				"id"=> "693"
			],
			[
				"Bujur"=> "109.249517",
				"Lintang"=> "-7.448166",
				"Rute"=> "Jl. Sultan Agung",
				"id"=> "694"
			],
			[
				"Bujur"=> "109.250247",
				"Lintang"=> "-7.447996",
				"Rute"=> "Jl. Sultan Agung",
				"id"=> "695"
			],
			[
				"Bujur"=> "109.250933",
				"Lintang"=> "-7.447698",
				"Rute"=> "Jl. Sultan Agung",
				"id"=> "696"
			],
			[
				"Bujur"=> "109.251749",
				"Lintang"=> "-7.447486",
				"Rute"=> "Jl. Sultan Agung",
				"id"=> "697"
			],
			[
				"Bujur"=> "109.253594",
				"Lintang"=> "-7.447230",
				"Rute"=> "Jl. Sultan Agung",
				"id"=> "698"
			],
			[
				"Bujur"=> "109.255525",
				"Lintang"=> "-7.446805",
				"Rute"=> "Jl. Sultan Agung",
				"id"=> "699"
			],
			[
				"Bujur"=> "109.256384",
				"Lintang"=> "-7.446805",
				"Rute"=> "Jl. Sultan Agung",
				"id"=> "700"
			],
			[
				"Bujur"=> "109.257242",
				"Lintang"=> "-7.446975",
				"Rute"=> "Jl. Sultan Agung",
				"id"=> "701"
			],
			[
				"Bujur"=> "109.257972",
				"Lintang"=> "-7.447103",
				"Rute"=> "Jl. Sultan Agung",
				"id"=> "702"
			],
			[
				"Bujur"=> "109.258701",
				"Lintang"=> "-7.447528",
				"Rute"=> "Jl. Sultan Agung",
				"id"=> "703"
			],
			[
				"Bujur"=> "109.263122",
				"Lintang"=> "-7.449868",
				"Rute"=> "Jl. Sultan Agung",
				"id"=> "704"
			],
			[
				"Bujur"=> "109.263765",
				"Lintang"=> "-7.450166",
				"Rute"=> "Jl. Sultan Agung",
				"id"=> "705"
			],
			[
				"Bujur"=> "109.264195",
				"Lintang"=> "-7.451017",
				"Rute"=> "Jl. Sultan Agung",
				"id"=> "706"
			],
			[
				"Bujur"=> "109.264796",
				"Lintang"=> "-7.452422",
				"Rute"=> "Jl. Sultan Agung",
				"id"=> "707"
			],
			[
				"Bujur"=> "109.265225",
				"Lintang"=> "-7.453230",
				"Rute"=> "Jl. Sultan Agung",
				"id"=> "708"
			],
			[
				"Bujur"=> "109.265911",
				"Lintang"=> "-7.454549",
				"Rute"=> "Jl. Sultan Agung",
				"id"=> "709"
			],
			[
				"Bujur"=> "109.266384",
				"Lintang"=> "-7.455102",
				"Rute"=> "Jl. Sultan Agung",
				"id"=> "710"
			],
			[
				"Bujur"=> "109.244394",
				"Lintang"=> "-7.442777",
				"Rute"=> "Jl. Kyai H. Wachid Hasyim",
				"id"=> "711"
			],
			[
				"Bujur"=> "109.244485",
				"Lintang"=> "-7.442788",
				"Rute"=> "Jl. Kyai H. Wachid Hasyim",
				"id"=> "712"
			],
			[
				"Bujur"=> "109.244571",
				"Lintang"=> "-7.442799",
				"Rute"=> "Jl. Kyai H. Wachid Hasyim",
				"id"=> "713"
			],
			[
				"Bujur"=> "109.244673",
				"Lintang"=> "-7.442799",
				"Rute"=> "Jl. Kyai H. Wachid Hasyim",
				"id"=> "714"
			],
			[
				"Bujur"=> "109.244769",
				"Lintang"=> "-7.442793",
				"Rute"=> "Jl. Kyai H. Wachid Hasyim",
				"id"=> "715"
			],
			[
				"Bujur"=> "109.244850",
				"Lintang"=> "-7.442804",
				"Rute"=> "Jl. Kyai H. Wachid Hasyim",
				"id"=> "716"
			],
			[
				"Bujur"=> "109.244962",
				"Lintang"=> "-7.442820",
				"Rute"=> "Jl. Kyai H. Wachid Hasyim",
				"id"=> "717"
			],
			[
				"Bujur"=> "109.245139",
				"Lintang"=> "-7.442820",
				"Rute"=> "Jl. Kyai H. Wachid Hasyim",
				"id"=> "718"
			],
			[
				"Bujur"=> "109.245236",
				"Lintang"=> "-7.442825",
				"Rute"=> "Jl. Kyai H. Wachid Hasyim",
				"id"=> "719"
			],
			[
				"Bujur"=> "109.245359",
				"Lintang"=> "-7.442831",
				"Rute"=> "Jl. Kyai H. Wachid Hasyim",
				"id"=> "720"
			],
			[
				"Bujur"=> "109.245483",
				"Lintang"=> "-7.442831",
				"Rute"=> "Jl. Kyai H. Wachid Hasyim",
				"id"=> "721"
			],
			[
				"Bujur"=> "109.245590",
				"Lintang"=> "-7.442836",
				"Rute"=> "Jl. Kyai H. Wachid Hasyim",
				"id"=> "722"
			],
			[
				"Bujur"=> "109.245703",
				"Lintang"=> "-7.442847",
				"Rute"=> "Jl. Kyai H. Wachid Hasyim",
				"id"=> "723"
			],
			[
				"Bujur"=> "109.245831",
				"Lintang"=> "-7.442836",
				"Rute"=> "Jl. Kyai H. Wachid Hasyim",
				"id"=> "724"
			],
			[
				"Bujur"=> "109.245960",
				"Lintang"=> "-7.442863",
				"Rute"=> "Jl. Kyai H. Wachid Hasyim",
				"id"=> "725"
			],
			[
				"Bujur"=> "109.243765",
				"Lintang"=> "-7.427975",
				"Rute"=> "Jl. S. Parman",
				"id"=> "726"
			],
			[
				"Bujur"=> "109.243722",
				"Lintang"=> "-7.428379",
				"Rute"=> "Jl. S. Parman",
				"id"=> "727"
			],
			[
				"Bujur"=> "109.243732",
				"Lintang"=> "-7.428687",
				"Rute"=> "Jl. S. Parman",
				"id"=> "278"
			],
			[
				"Bujur"=> "109.243754",
				"Lintang"=> "-7.429007",
				"Rute"=> "Jl. S. Parman",
				"id"=> "729"
			],
			[
				"Bujur"=> "109.243754",
				"Lintang"=> "-7.429315",
				"Rute"=> "Jl. S. Parman",
				"id"=> "730"
			],
			[
				"Bujur"=> "109.243775",
				"Lintang"=> "-7.429517",
				"Rute"=> "Jl. S. Parman",
				"id"=> "731"
			],
			[
				"Bujur"=> "109.243732",
				"Lintang"=> "-7.429741",
				"Rute"=> "Jl. S. Parman",
				"id"=> "732"
			],
			[
				"Bujur"=> "109.243711",
				"Lintang"=> "-7.430336",
				"Rute"=> "Jl. S. Parman",
				"id"=> "733"
			],
			[
				"Bujur"=> "109.243743",
				"Lintang"=> "-7.430624",
				"Rute"=> "Jl. S. Parman",
				"id"=> "734"
			],
			[
				"Bujur"=> "109.243743",
				"Lintang"=> "-7.431081",
				"Rute"=> "Jl. S. Parman",
				"id"=> "735"
			],
			[
				"Bujur"=> "109.243775",
				"Lintang"=> "-7.431400",
				"Rute"=> "Jl. S. Parman",
				"id"=> "736"
			],
			[
				"Bujur"=> "109.243797",
				"Lintang"=> "-7.431773",
				"Rute"=> "Jl. S. Parman",
				"id"=> "737"
			],
			[
				"Bujur"=> "109.243818",
				"Lintang"=> "-7.432092",
				"Rute"=> "Jl. S. Parman",
				"id"=> "738"
			],
			[
				"Bujur"=> "109.243872",
				"Lintang"=> "-7.432422",
				"Rute"=> "Jl. S. Parman",
				"id"=> "739"
			],
			[
				"Bujur"=> "109.243818",
				"Lintang"=> "-7.433049",
				"Rute"=> "Jl. S. Parman",
				"id"=> "740"
			],
			[
				"Bujur"=> "109.243883",
				"Lintang"=> "-7.433549",
				"Rute"=> "Jl. S. Parman",
				"id"=> "741"
			],
			[
				"Bujur"=> "109.243936",
				"Lintang"=> "-7.433911",
				"Rute"=> "Jl. S. Parman",
				"id"=> "742"
			],
			[
				"Bujur"=> "109.243990",
				"Lintang"=> "-7.434879",
				"Rute"=> "Jl. S. Parman",
				"id"=> "743"
			],
			[
				"Bujur"=> "109.243979",
				"Lintang"=> "-7.435252",
				"Rute"=> "Jl. S. Parman",
				"id"=> "744"
			],
			[
				"Bujur"=> "109.244076",
				"Lintang"=> "-7.435901",
				"Rute"=> "Jl. S. Parman",
				"id"=> "745"
			],
			[
				"Bujur"=> "109.244065",
				"Lintang"=> "-7.436337",
				"Rute"=> "Jl. S. Parman",
				"id"=> "746"
			],
			[
				"Bujur"=> "109.244151",
				"Lintang"=> "-7.437347",
				"Rute"=> "Jl. S. Parman",
				"id"=> "747"
			],
			[
				"Bujur"=> "109.244172",
				"Lintang"=> "-7.437656",
				"Rute"=> "Jl. S. Parman",
				"id"=> "748"
			],
			[
				"Bujur"=> "109.244162",
				"Lintang"=> "-7.438411",
				"Rute"=> "Jl. S. Parman",
				"id"=> "749"
			],
			[
				"Bujur"=> "109.244215",
				"Lintang"=> "-7.438358",
				"Rute"=> "Jl. S. Parman",
				"id"=> "750"
			],
			[
				"Bujur"=> "109.244205",
				"Lintang"=> "-7.438613",
				"Rute"=> "Jl. S. Parman",
				"id"=> "751"
			],
			[
				"Bujur"=> "109.244205",
				"Lintang"=> "-7.438890",
				"Rute"=> "Jl. S. Parman",
				"id"=> "752"
			],
			[
				"Bujur"=> "109.243717",
				"Lintang"=> "-7.427616",
				"Rute"=> "Jl. Jendral Suprapto",
				"id"=> "753"
			],
			[
				"Bujur"=> "109.243739",
				"Lintang"=> "-7.427286",
				"Rute"=> "Jl. Jendral Suprapto",
				"id"=> "754"
			],
			[
				"Bujur"=> "109.243749",
				"Lintang"=> "-7.426957",
				"Rute"=> "Jl. Jendral Suprapto",
				"id"=> "755"
			],
			[
				"Bujur"=> "109.243739",
				"Lintang"=> "-7.426691",
				"Rute"=> "Jl. Jendral Suprapto",
				"id"=> "756"
			],
			[
				"Bujur"=> "109.243717",
				"Lintang"=> "-7.426010",
				"Rute"=> "Jl. Jendral Suprapto",
				"id"=> "757"
			],
			[
				"Bujur"=> "109.243739",
				"Lintang"=> "-7.425457",
				"Rute"=> "Jl. Jendral Suprapto",
				"id"=> "758"
			],
			[
				"Bujur"=> "109.243728",
				"Lintang"=> "-7.425159",
				"Rute"=> "Jl. Jendral Suprapto",
				"id"=> "759"
			],
			[
				"Bujur"=> "109.243782",
				"Lintang"=> "-7.424648",
				"Rute"=> "Jl. Jendral Suprapto",
				"id"=> "760"
			],
			[
				"Bujur"=> "109.243889",
				"Lintang"=> "-7.423861",
				"Rute"=> "Jl. Jendral Suprapto",
				"id"=> "761"
			],
			[
				"Bujur"=> "109.243878",
				"Lintang"=> "-7.423669",
				"Rute"=> "Jl. Jendral Suprapto",
				"id"=> "762"
			],
			[
				"Bujur"=> "109.243921",
				"Lintang"=> "-7.423435",
				"Rute"=> "Jl. Jendral Suprapto",
				"id"=> "763"
			],
			[
				"Bujur"=> "109.243948",
				"Lintang"=> "-7.423095",
				"Rute"=> "Jl. Overste Isdiman",
				"id"=> "764"
			],
			[
				"Bujur"=> "109.243969",
				"Lintang"=> "-7.422712",
				"Rute"=> "Jl. Overste Isdiman",
				"id"=> "765"
			],
			[
				"Bujur"=> "109.244120",
				"Lintang"=> "-7.421669",
				"Rute"=> "Jl. Overste Isdiman",
				"id"=> "766"
			],
			[
				"Bujur"=> "109.244162",
				"Lintang"=> "-7.421318",
				"Rute"=> "Jl. Overste Isdiman",
				"id"=> "767"
			],
			[
				"Bujur"=> "109.244216",
				"Lintang"=> "-7.420978",
				"Rute"=> "Jl. Overste Isdiman",
				"id"=> "768"
			],
			[
				"Bujur"=> "109.244302",
				"Lintang"=> "-7.420414",
				"Rute"=> "Jl. Overste Isdiman",
				"id"=> "769"
			],
			[
				"Bujur"=> "109.244302",
				"Lintang"=> "-7.420041",
				"Rute"=> "Jl. Overste Isdiman",
				"id"=> "770"
			],
			[
				"Bujur"=> "109.244345",
				"Lintang"=> "-7.419722",
				"Rute"=> "Jl. Overste Isdiman",
				"id"=> "771"
			],
			[
				"Bujur"=> "109.244377",
				"Lintang"=> "-7.419414",
				"Rute"=> "Jl. Overste Isdiman",
				"id"=> "772"
			],
			[
				"Bujur"=> "109.244409",
				"Lintang"=> "-7.419063",
				"Rute"=> "Jl. Overste Isdiman",
				"id"=> "773"
			],
			[
				"Bujur"=> "109.244441",
				"Lintang"=> "-7.418754",
				"Rute"=> "Jl. Overste Isdiman",
				"id"=> "774"
			],
			[
				"Bujur"=> "109.244463",
				"Lintang"=> "-7.418467",
				"Rute"=> "Jl. Overste Isdiman",
				"id"=> "775"
			],
			[
				"Bujur"=> "109.244517",
				"Lintang"=> "-7.418116",
				"Rute"=> "Jl. Overste Isdiman",
				"id"=> "776"
			],
			[
				"Bujur"=> "109.244592",
				"Lintang"=> "-7.417807",
				"Rute"=> "Jl. Overste Isdiman",
				"id"=> "777"
			],
			[
				"Bujur"=> "109.244592",
				"Lintang"=> "-7.417477",
				"Rute"=> "Jl. Overste Isdiman",
				"id"=> "778"
			],
			[
				"Bujur"=> "109.244602",
				"Lintang"=> "-7.417179",
				"Rute"=> "Jl. Overste Isdiman",
				"id"=> "779"
			],
			[
				"Bujur"=> "109.244677",
				"Lintang"=> "-7.417030",
				"Rute"=> "Jl. Overste Isdiman",
				"id"=> "780"
			],
			[
				"Bujur"=> "109.245306",
				"Lintang"=> "-7.403413",
				"Rute"=> "Jl. Profesor DR. HR Boenyamin",
				"id"=> "781"
			],
			[
				"Bujur"=> "109.245306",
				"Lintang"=> "-7.404392",
				"Rute"=> "Jl. Profesor DR. HR Boenyamin",
				"id"=> "782"
			],
			[
				"Bujur"=> "109.245306",
				"Lintang"=> "-7.404775",
				"Rute"=> "Jl. Profesor DR. HR Boenyamin",
				"id"=> "783"
			],
			[
				"Bujur"=> "109.245392",
				"Lintang"=> "-7.405541",
				"Rute"=> "Jl. Profesor DR. HR Boenyamin",
				"id"=> "784"
			],
			[
				"Bujur"=> "109.245435",
				"Lintang"=> "-7.406392",
				"Rute"=> "Jl. Profesor DR. HR Boenyamin",
				"id"=> "785"
			],
			[
				"Bujur"=> "109.245435",
				"Lintang"=> "-7.407243",
				"Rute"=> "Jl. Profesor DR. HR Boenyamin",
				"id"=> "786"
			],
			[
				"Bujur"=> "109.245521",
				"Lintang"=> "-7.408094",
				"Rute"=> "Jl. Profesor DR. HR Boenyamin",
				"id"=> "787"
			],
			[
				"Bujur"=> "109.245478",
				"Lintang"=> "-7.408945",
				"Rute"=> "Jl. Profesor DR. HR Boenyamin",
				"id"=> "788"
			],
			[
				"Bujur"=> "109.245478",
				"Lintang"=> "-7.410052",
				"Rute"=> "Jl. Profesor DR. HR Boenyamin",
				"id"=> "789"
			],
			[
				"Bujur"=> "109.245349",
				"Lintang"=> "-7.411031",
				"Rute"=> "Jl. Profesor DR. HR Boenyamin",
				"id"=> "790"
			],
			[
				"Bujur"=> "109.245263",
				"Lintang"=> "-7.411882",
				"Rute"=> "Jl. Profesor DR. HR Boenyamin",
				"id"=> "791"
			],
			[
				"Bujur"=> "109.245220",
				"Lintang"=> "-7.412775",
				"Rute"=> "Jl. Profesor DR. HR Boenyamin",
				"id"=> "792"
			],
			[
				"Bujur"=> "109.244920",
				"Lintang"=> "-7.415159",
				"Rute"=> "Jl. Profesor DR. HR Boenyamin",
				"id"=> "793"
			],
			[
				"Bujur"=> "109.244877",
				"Lintang"=> "-7.415882",
				"Rute"=> "Jl. Profesor DR. HR Boenyamin",
				"id"=> "794"
			],
			[
				"Bujur"=> "109.244748",
				"Lintang"=> "-7.416254",
				"Rute"=> "Jl. Profesor DR. HR Boenyamin",
				"id"=> "795"
			],
			[
				"Bujur"=> "109.232738",
				"Lintang"=> "-7.387921",
				"Rute"=> "Jl. Moh. Besar",
				"id"=> "796"
			],
			[
				"Bujur"=> "109.233102",
				"Lintang"=> "-7.387857",
				"Rute"=> "Jl. Moh. Besar",
				"id"=> "797"
			],
			[
				"Bujur"=> "109.234862",
				"Lintang"=> "-7.387581",
				"Rute"=> "Jl. Moh. Besar",
				"id"=> "798"
			],
			[
				"Bujur"=> "109.235313",
				"Lintang"=> "-7.387581",
				"Rute"=> "Jl. Moh. Besar",
				"id"=> "799"
			],
			[
				"Bujur"=> "109.235913",
				"Lintang"=> "-7.387560",
				"Rute"=> "Jl. Moh. Besar",
				"id"=> "800"
			],
			[
				"Bujur"=> "109.236729",
				"Lintang"=> "-7.387602",
				"Rute"=> "Jl. Moh. Besar",
				"id"=> "801"
			],
			[
				"Bujur"=> "109.237136",
				"Lintang"=> "-7.387623",
				"Rute"=> "Jl. Moh. Besar",
				"id"=> "802"
			],
			[
				"Bujur"=> "109.237716",
				"Lintang"=> "-7.387602",
				"Rute"=> "Jl. Moh. Besar",
				"id"=> "803"
			],
			[
				"Bujur"=> "109.238274",
				"Lintang"=> "-7.387645",
				"Rute"=> "Jl. Moh. Besar",
				"id"=> "804"
			],
			[
				"Bujur"=> "109.238789",
				"Lintang"=> "-7.387666",
				"Rute"=> "Jl. Moh. Besar",
				"id"=> "805"
			],
			[
				"Bujur"=> "109.239390",
				"Lintang"=> "-7.387730",
				"Rute"=> "Jl. Moh. Besar",
				"id"=> "806"
			],
			[
				"Bujur"=> "109.239797",
				"Lintang"=> "-7.387751",
				"Rute"=> "Jl. Moh. Besar",
				"id"=> "807"
			],
			[
				"Bujur"=> "109.240398",
				"Lintang"=> "-7.387772",
				"Rute"=> "Jl. Moh. Besar",
				"id"=> "808"
			],
			[
				"Bujur"=> "109.240892",
				"Lintang"=> "-7.387815",
				"Rute"=> "Jl. Moh. Besar",
				"id"=> "809"
			],
			[
				"Bujur"=> "109.241428",
				"Lintang"=> "-7.387836",
				"Rute"=> "Jl. Moh. Besar",
				"id"=> "810"
			],
			[
				"Bujur"=> "109.242029",
				"Lintang"=> "-7.387836",
				"Rute"=> "Jl. Moh. Besar",
				"id"=> "811"
			],
			[
				"Bujur"=> "109.242479",
				"Lintang"=> "-7.387815",
				"Rute"=> "Jl. Moh. Besar",
				"id"=> "812"
			],
			[
				"Bujur"=> "109.242994",
				"Lintang"=> "-7.387794",
				"Rute"=> "Jl. Moh. Besar",
				"id"=> "813"
			],
			[
				"Bujur"=> "109.231111",
				"Lintang"=> "-7.407339",
				"Rute"=> "Jl. Pol. Soemarto",
				"id"=> "814"
			],
			[
				"Bujur"=> "109.231154",
				"Lintang"=> "-7.406743",
				"Rute"=> "Jl. Pol. Soemarto",
				"id"=> "815"
			],
			[
				"Bujur"=> "109.231197",
				"Lintang"=> "-7.406148",
				"Rute"=> "Jl. Pol. Soemarto",
				"id"=> "816"
			],
			[
				"Bujur"=> "109.231262",
				"Lintang"=> "-7.405616",
				"Rute"=> "Jl. Pol. Soemarto",
				"id"=> "817"
			],
			[
				"Bujur"=> "109.231390",
				"Lintang"=> "-7.403828",
				"Rute"=> "Jl. Pol. Soemarto",
				"id"=> "819"
			],
			[
				"Bujur"=> "109.231423",
				"Lintang"=> "-7.403323",
				"Rute"=> "Jl. Pol. Soemarto",
				"id"=> "820"
			],
			[
				"Bujur"=> "109.231508",
				"Lintang"=> "-7.402238",
				"Rute"=> "Jl. Pol. Soemarto",
				"id"=> "821"
			],
			[
				"Bujur"=> "109.231637",
				"Lintang"=> "-7.401663",
				"Rute"=> "Jl. Pol. Soemarto",
				"id"=> "822"
			],
			[
				"Bujur"=> "109.231680",
				"Lintang"=> "-7.400322",
				"Rute"=> "Jl. Pol. Soemarto",
				"id"=> "822"
			],
			[
				"Bujur"=> "109.231766",
				"Lintang"=> "-7.399259",
				"Rute"=> "Jl. Pol. Soemarto",
				"id"=> "823"
			],
			[
				"Bujur"=> "109.231809",
				"Lintang"=> "-7.398663",
				"Rute"=> "Jl. Pol. Soemarto",
				"id"=> "824"
			],
			[
				"Bujur"=> "109.231938",
				"Lintang"=> "-7.397897",
				"Rute"=> "Jl. Pol. Soemarto",
				"id"=> "825"
			],
			[
				"Bujur"=> "109.226672",
				"Lintang"=> "-7.424752",
				"Rute"=> "Jl. Mayjend Sutoyo",
				"id"=> "826"
			],
			[
				"Bujur"=> "109.226608",
				"Lintang"=> "-7.424985",
				"Rute"=> "Jl. Mayjend Sutoyo",
				"id"=> "827"
			],
			[
				"Bujur"=> "109.226565",
				"Lintang"=> "-7.425272",
				"Rute"=> "Jl. Mayjend Sutoyo",
				"id"=> "828"
			],
			[
				"Bujur"=> "109.226533",
				"Lintang"=> "-7.425740",
				"Rute"=> "Jl. Mayjend Sutoyo",
				"id"=> "829"
			],
			[
				"Bujur"=> "109.226415",
				"Lintang"=> "-7.426304",
				"Rute"=> "Jl. Mayjend Sutoyo",
				"id"=> "830"
			],
			[
				"Bujur"=> "109.226340",
				"Lintang"=> "-7.426677",
				"Rute"=> "Jl. Mayjend Sutoyo",
				"id"=> "831"
			],
			[
				"Bujur"=> "109.226136",
				"Lintang"=> "-7.427602",
				"Rute"=> "Jl. Mayjend Sutoyo",
				"id"=> "832"
			],
			[
				"Bujur"=> "109.226114",
				"Lintang"=> "-7.427847",
				"Rute"=> "Jl. Mayjend Sutoyo",
				"id"=> "833"
			],
			[
				"Bujur"=> "109.225943",
				"Lintang"=> "-7.428514",
				"Rute"=> "Jl. Mayjend Sutoyo",
				"id"=> "834"
			],
			[
				"Bujur"=> "109.225857",
				"Lintang"=> "-7.428876",
				"Rute"=> "Jl. Mayjend Sutoyo",
				"id"=> "835"
			],
			[
				"Bujur"=> "109.225750",
				"Lintang"=> "-7.429227",
				"Rute"=> "Jl. Mayjend Sutoyo",
				"id"=> "836"
			],
			[
				"Bujur"=> "109.225642",
				"Lintang"=> "-7.429504",
				"Rute"=> "Jl. Mayjend Sutoyo",
				"id"=> "837"
			],
			[
				"Bujur"=> "109.225503",
				"Lintang"=> "-7.429727",
				"Rute"=> "Jl. Mayjend Sutoyo",
				"id"=> "838"
			],
			[
				"Bujur"=> "109.225267",
				"Lintang"=> "-7.430131",
				"Rute"=> "Jl. Mayjend Sutoyo",
				"id"=> "839"
			],
			[
				"Bujur"=> "109.225052",
				"Lintang"=> "-7.430387",
				"Rute"=> "Jl. Mayjend Sutoyo",
				"id"=> "840"
			],
			[
				"Bujur"=> "109.224323",
				"Lintang"=> "-7.431419",
				"Rute"=> "Jl. Mayjend Sutoyo",
				"id"=> "841"
			],
			[
				"Bujur"=> "109.225321",
				"Lintang"=> "-7.430086",
				"Rute"=> "Jl. Pahlawan",
				"id"=> "842"
			],
			[
				"Bujur"=> "109.225077",
				"Lintang"=> "-7.430373",
				"Rute"=> "Jl. Pahlawan",
				"id"=> "843"
			],
			[
				"Bujur"=> "109.224864",
				"Lintang"=> "-7.430735",
				"Rute"=> "Jl. Pahlawan",
				"id"=> "844"
			],
			[
				"Bujur"=> "109.224513",
				"Lintang"=> "-7.431158",
				"Rute"=> "Jl. Pahlawan",
				"id"=> "845"
			],
			[
				"Bujur"=> "109.224224",
				"Lintang"=> "-7.431596",
				"Rute"=> "Jl. Pahlawan",
				"id"=> "846"
			],
			[
				"Bujur"=> "109.223858",
				"Lintang"=> "-7.432019",
				"Rute"=> "Jl. Pahlawan",
				"id"=> "847"
			],
			[
				"Bujur"=> "109.223386",
				"Lintang"=> "-7.432291",
				"Rute"=> "Jl. Pahlawan",
				"id"=> "848"
			],
			[
				"Bujur"=> "109.223051",
				"Lintang"=> "-7.432653",
				"Rute"=> "Jl. Pahlawan",
				"id"=> "849"
			],
			[
				"Bujur"=> "109.222807",
				"Lintang"=> "-7.433016",
				"Rute"=> "Jl. Pahlawan",
				"id"=> "850"
			],
			[
				"Bujur"=> "109.222579",
				"Lintang"=> "-7.433529",
				"Rute"=> "Jl. Pahlawan",
				"id"=> "851"
			],
			[
				"Bujur"=> "109.222350",
				"Lintang"=> "-7.433892",
				"Rute"=> "Jl. Pahlawan",
				"id"=> "852"
			],
			[
				"Bujur"=> "109.222038",
				"Lintang"=> "-7.434379",
				"Rute"=> "Jl. Pahlawan",
				"id"=> "853"
			],
			[
				"Bujur"=> "109.221840",
				"Lintang"=> "-7.434862",
				"Rute"=> "Jl. Pahlawan",
				"id"=> "854"
			],
			[
				"Bujur"=> "109.221597",
				"Lintang"=> "-7.435285",
				"Rute"=> "Jl. Pahlawan",
				"id"=> "855"
			],
			[
				"Bujur"=> "109.221459",
				"Lintang"=> "-7.435663",
				"Rute"=> "Jl. Pahlawan",
				"id"=> "856"
			],
			[
				"Bujur"=> "109.221094",
				"Lintang"=> "-7.436267",
				"Rute"=> "Jl. Pahlawan",
				"id"=> "857"
			],
			[
				"Bujur"=> "109.220896",
				"Lintang"=> "-7.436886",
				"Rute"=> "Jl. Pahlawan",
				"id"=> "858"
			],
			[
				"Bujur"=> "109.220561",
				"Lintang"=> "-7.437415",
				"Rute"=> "Jl. Pahlawan",
				"id"=> "859"
			],
			[
				"Bujur"=> "109.220073",
				"Lintang"=> "-7.438336",
				"Rute"=> "Jl. Pahlawan",
				"id"=> "860"
			],
			[
				"Bujur"=> "109.220104",
				"Lintang"=> "-7.438655",
				"Rute"=> "Jl. Gerilya",
				"id"=> "861"
			],
			[
				"Bujur"=> "109.220641",
				"Lintang"=> "-7.438804",
				"Rute"=> "Jl. Gerilya",
				"id"=> "862"
			],
			[
				"Bujur"=> "109.221199",
				"Lintang"=> "-7.439080",
				"Rute"=> "Jl. Gerilya",
				"id"=> "863"
			],
			[
				"Bujur"=> "109.221864",
				"Lintang"=> "-7.439208",
				"Rute"=> "Jl. Gerilya",
				"id"=> "864"
			],
			[
				"Bujur"=> "109.222529",
				"Lintang"=> "-7.439463",
				"Rute"=> "Jl. Gerilya",
				"id"=> "865"
			],
			[
				"Bujur"=> "109.223173",
				"Lintang"=> "-7.439676",
				"Rute"=> "Jl. Gerilya",
				"id"=> "866"
			],
			[
				"Bujur"=> "109.223667",
				"Lintang"=> "-7.439889",
				"Rute"=> "Jl. Gerilya",
				"id"=> "867"
			],
			[
				"Bujur"=> "109.224074",
				"Lintang"=> "-7.440208",
				"Rute"=> "Jl. Gerilya",
				"id"=> "868"
			],
			[
				"Bujur"=> "109.224739",
				"Lintang"=> "-7.440591",
				"Rute"=> "Jl. Gerilya",
				"id"=> "869"
			],
			[
				"Bujur"=> "109.225405",
				"Lintang"=> "-7.440974",
				"Rute"=> "Jl. Gerilya",
				"id"=> "870"
			],
			[
				"Bujur"=> "109.226091",
				"Lintang"=> "-7.441378",
				"Rute"=> "Jl. Gerilya",
				"id"=> "871"
			],
			[
				"Bujur"=> "109.226756",
				"Lintang"=> "-7.441761",
				"Rute"=> "Jl. Gerilya",
				"id"=> "872"
			],
			[
				"Bujur"=> "109.227529",
				"Lintang"=> "-7.441995",
				"Rute"=> "Jl. Gerilya",
				"id"=> "873"
			],
			[
				"Bujur"=> "109.228323",
				"Lintang"=> "-7.442123",
				"Rute"=> "Jl. Gerilya",
				"id"=> "874"
			],
			[
				"Bujur"=> "109.229052",
				"Lintang"=> "-7.442165",
				"Rute"=> "Jl. Gerilya",
				"id"=> "875"
			],
			[
				"Bujur"=> "109.229696",
				"Lintang"=> "-7.442208",
				"Rute"=> "Jl. Gerilya",
				"id"=> "876"
			],
			[
				"Bujur"=> "109.231198",
				"Lintang"=> "-7.442399",
				"Rute"=> "Jl. Gerilya",
				"id"=> "877"
			],
			[
				"Bujur"=> "109.231906",
				"Lintang"=> "-7.442442",
				"Rute"=> "Jl. Gerilya",
				"id"=> "878"
			],
			[
				"Bujur"=> "109.232550",
				"Lintang"=> "-7.442548",
				"Rute"=> "Jl. Gerilya",
				"id"=> "879"
			],
			[
				"Bujur"=> "109.233301",
				"Lintang"=> "-7.442442",
				"Rute"=> "Jl. Gerilya",
				"id"=> "880"
			],
			[
				"Bujur"=> "109.234117",
				"Lintang"=> "-7.442506",
				"Rute"=> "Jl. Gerilya",
				"id"=> "881"
			],
			[
				"Bujur"=> "109.234825",
				"Lintang"=> "-7.442527",
				"Rute"=> "Jl. Gerilya",
				"id"=> "882"
			],
			[
				"Bujur"=> "109.235511",
				"Lintang"=> "-7.442378",
				"Rute"=> "Jl. Gerilya",
				"id"=> "883"
			],
			[
				"Bujur"=> "109.236069",
				"Lintang"=> "-7.441995",
				"Rute"=> "Jl. Gerilya",
				"id"=> "884"
			],
			[
				"Bujur"=> "109.236971",
				"Lintang"=> "-7.441697",
				"Rute"=> "Jl. Gerilya",
				"id"=> "885"
			],
			[
				"Bujur"=> "109.238516",
				"Lintang"=> "-7.441293",
				"Rute"=> "Jl. Gerilya",
				"id"=> "886"
			],
			[
				"Bujur"=> "109.239760",
				"Lintang"=> "-7.440931",
				"Rute"=> "Jl. Gerilya",
				"id"=> "887"
			],
			[
				"Bujur"=> "109.243880",
				"Lintang"=> "-7.439761",
				"Rute"=> "Jl. Gerilya",
				"id"=> "888"
			],
			[
				"Bujur"=> "109.244159",
				"Lintang"=> "-7.439740",
				"Rute"=> "Jl. Gerilya",
				"id"=> "889"
			],
			[
				"Bujur"=> "109.254610",
				"Lintang"=> "-7.438567",
				"Rute"=> "Jl. Suwatio",
				"id"=> "890"
			],
			[
				"Bujur"=> "109.254717",
				"Lintang"=> "-7.439142",
				"Rute"=> "Jl. Suwatio",
				"id"=> "891"
			],
			[
				"Bujur"=> "109.254782",
				"Lintang"=> "-7.439738",
				"Rute"=> "Jl. Suwatio",
				"id"=> "892"
			],
			[
				"Bujur"=> "109.254674",
				"Lintang"=> "-7.439121",
				"Rute"=> "Jl. Suwatio",
				"id"=> "893"
			],
			[
				"Bujur"=> "109.254760",
				"Lintang"=> "-7.439738",
				"Rute"=> "Jl. Suwatio",
				"id"=> "894"
			],
			[
				"Bujur"=> "109.254825",
				"Lintang"=> "-7.440184",
				"Rute"=> "Jl. Suwatio",
				"id"=> "895"
			],
			[
				"Bujur"=> "109.254782",
				"Lintang"=> "-7.440801",
				"Rute"=> "Jl. Suwatio",
				"id"=> "896"
			],
			[
				"Bujur"=> "109.254825",
				"Lintang"=> "-7.441418",
				"Rute"=> "Jl. Suwatio",
				"id"=> "897"
			],
			[
				"Bujur"=> "109.254825",
				"Lintang"=> "-7.442099",
				"Rute"=> "Jl. Suwatio",
				"id"=> "898"
			],
			[
				"Bujur"=> "109.254782",
				"Lintang"=> "-7.442631",
				"Rute"=> "Jl. Suwatio",
				"id"=> "899"
			],
			[
				"Bujur"=> "109.254717",
				"Lintang"=> "-7.443610",
				"Rute"=> "Jl. Suwatio",
				"id"=> "900"
			],
			[
				"Bujur"=> "109.254653",
				"Lintang"=> "-7.444163",
				"Rute"=> "Jl. Suwatio",
				"id"=> "901"
			],
			[
				"Bujur"=> "109.254524",
				"Lintang"=> "-7.444844",
				"Rute"=> "Jl. Suwatio",
				"id"=> "902"
			],
			[
				"Bujur"=> "109.254417",
				"Lintang"=> "-7.445504",
				"Rute"=> "Jl. Suwatio",
				"id"=> "903"
			],
			[
				"Bujur"=> "109.254331",
				"Lintang"=> "-7.446142",
				"Rute"=> "Jl. Suwatio",
				"id"=> "904"
			],
			[
				"Bujur"=> "109.254181",
				"Lintang"=> "-7.446844",
				"Rute"=> "Jl. Suwatio",
				"id"=> "905"
			],
			[
				"Bujur"=> "109.248919",
				"Lintang"=> "-7.439120",
				"Rute"=> "Jl. Hos. Notosuwiryo",
				"id"=> "906"
			],
			[
				"Bujur"=> "109.248983",
				"Lintang"=> "-7.439631",
				"Rute"=> "Jl. Hos. Notosuwiryo",
				"id"=> "907"
			],
			[
				"Bujur"=> "109.249069",
				"Lintang"=> "-7.440227",
				"Rute"=> "Jl. Hos. Notosuwiryo",
				"id"=> "908"
			],
			[
				"Bujur"=> "109.249219",
				"Lintang"=> "-7.440886",
				"Rute"=> "Jl. Hos. Notosuwiryo",
				"id"=> "909"
			],
			[
				"Bujur"=> "109.249348",
				"Lintang"=> "-7.441333",
				"Rute"=> "Jl. Hos. Notosuwiryo",
				"id"=> "910"
			],
			[
				"Bujur"=> "109.249541",
				"Lintang"=> "-7.441844",
				"Rute"=> "Jl. Hos. Notosuwiryo",
				"id"=> "911"
			],
			[
				"Bujur"=> "109.249777",
				"Lintang"=> "-7.443227",
				"Rute"=> "Jl. Hos. Notosuwiryo",
				"id"=> "912"
			],
			[
				"Bujur"=> "109.249885",
				"Lintang"=> "-7.443801",
				"Rute"=> "Jl. Hos. Notosuwiryo",
				"id"=> "913"
			],
			[
				"Bujur"=> "109.249949",
				"Lintang"=> "-7.444397",
				"Rute"=> "Jl. Hos. Notosuwiryo",
				"id"=> "914"
			],
			[
				"Bujur"=> "109.249992",
				"Lintang"=> "-7.445014",
				"Rute"=> "Jl. Hos. Notosuwiryo",
				"id"=> "915"
			],
			[
				"Bujur"=> "109.249992",
				"Lintang"=> "-7.445822",
				"Rute"=> "Jl. Hos. Notosuwiryo",
				"id"=> "916"
			],
			[
				"Bujur"=> "109.250056",
				"Lintang"=> "-7.446397",
				"Rute"=> "Jl. Hos. Notosuwiryo",
				"id"=> "917"
			],
			[
				"Bujur"=> "109.250314",
				"Lintang"=> "-7.446737",
				"Rute"=> "Jl. Hos. Notosuwiryo",
				"id"=> "918"
			],
			[
				"Bujur"=> "109.250550",
				"Lintang"=> "-7.447099",
				"Rute"=> "Jl. Hos. Notosuwiryo",
				"id"=> "919"
			],
			[
				"Bujur"=> "109.250807",
				"Lintang"=> "-7.447482",
				"Rute"=> "Jl. Hos. Notosuwiryo",
				"id"=> "920"
			],
			[
				"Bujur"=> "109.229719",
				"Lintang"=> "-7.420031",
				"Rute"=> "Jl. Masjid",
				"id"=> "921"
			],
			[
				"Bujur"=> "109.229783",
				"Lintang"=> "-7.420276",
				"Rute"=> "Jl. Masjid",
				"id"=> "922"
			],
			[
				"Bujur"=> "109.229751",
				"Lintang"=> "-7.420617",
				"Rute"=> "Jl. Masjid",
				"id"=> "923"
			],
			[
				"Bujur"=> "109.229719",
				"Lintang"=> "-7.420957",
				"Rute"=> "Jl. Masjid",
				"id"=> "924"
			],
			[
				"Bujur"=> "109.229676",
				"Lintang"=> "-7.421234",
				"Rute"=> "Jl. Masjid",
				"id"=> "924"
			],
			[
				"Bujur"=> "109.229590",
				"Lintang"=> "-7.421542",
				"Rute"=> "Jl. Masjid",
				"id"=> "926"
			],
			[
				"Bujur"=> "109.229579",
				"Lintang"=> "-7.422276",
				"Rute"=> "Jl. Masjid",
				"id"=> "927"
			],
			[
				"Bujur"=> "109.229612",
				"Lintang"=> "-7.422521",
				"Rute"=> "Jl. Masjid",
				"id"=> "928"
			],
			[
				"Bujur"=> "109.229612",
				"Lintang"=> "-7.422787",
				"Rute"=> "Jl. Masjid",
				"id"=> "929"
			],
			[
				"Bujur"=> "109.229579",
				"Lintang"=> "-7.423074",
				"Rute"=> "Jl. Masjid",
				"id"=> "930"
			],
			[
				"Bujur"=> "109.229558",
				"Lintang"=> "-7.423351",
				"Rute"=> "Jl. Masjid",
				"id"=> "931"
			],
			[
				"Bujur"=> "109.229579",
				"Lintang"=> "-7.423638",
				"Rute"=> "Jl. Masjid",
				"id"=> "932"
			],
			[
				"Bujur"=> "109.229547",
				"Lintang"=> "-7.423978",
				"Rute"=> "Jl. Masjid",
				"id"=> "933"
			],
			[
				"Bujur"=> "109.229569",
				"Lintang"=> "-7.424287",
				"Rute"=> "Jl. Masjid",
				"id"=> "934"
			],
			[
				"Bujur"=> "109.229547",
				"Lintang"=> "-7.424798",
				"Rute"=> "Jl. Masjid",
				"id"=> "935"
			],
			[
				"Bujur"=> "109.243500",
				"Lintang"=> "-7.416879",
				"Rute"=> "Jl. Jatiwinangun",
				"id"=> "936"
			],
			[
				"Bujur"=> "109.243479",
				"Lintang"=> "-7.417071",
				"Rute"=> "Jl. Jatiwinangun",
				"id"=> "937"
			],
			[
				"Bujur"=> "109.243468",
				"Lintang"=> "-7.417326",
				"Rute"=> "Jl. Jatiwinangun",
				"id"=> "938"
			],
			[
				"Bujur"=> "109.243425",
				"Lintang"=> "-7.417624",
				"Rute"=> "Jl. Jatiwinangun",
				"id"=> "939"
			],
			[
				"Bujur"=> "109.243382",
				"Lintang"=> "-7.417922",
				"Rute"=> "Jl. Jatiwinangun",
				"id"=> "940"
			],
			[
				"Bujur"=> "109.243350",
				"Lintang"=> "-7.418252",
				"Rute"=> "Jl. Jatiwinangun",
				"id"=> "941"
			],
			[
				"Bujur"=> "109.243264",
				"Lintang"=> "-7.418688",
				"Rute"=> "Jl. Jatiwinangun",
				"id"=> "942"
			],
			[
				"Bujur"=> "109.243242",
				"Lintang"=> "-7.418964",
				"Rute"=> "Jl. Jatiwinangun",
				"id"=> "943"
			],
			[
				"Bujur"=> "109.243200",
				"Lintang"=> "-7.419230",
				"Rute"=> "Jl. Jatiwinangun",
				"id"=> "944"
			],
			[
				"Bujur"=> "109.243114",
				"Lintang"=> "-7.419879",
				"Rute"=> "Jl. Jatiwinangun",
				"id"=> "945"
			],
			[
				"Bujur"=> "109.243114",
				"Lintang"=> "-7.420124",
				"Rute"=> "Jl. Jatiwinangun",
				"id"=> "946"
			],
			[
				"Bujur"=> "109.242996",
				"Lintang"=> "-7.420699",
				"Rute"=> "Jl. Jatiwinangun",
				"id"=> "947"
			],
			[
				"Bujur"=> "109.242942",
				"Lintang"=> "-7.421060",
				"Rute"=> "Jl. Jatiwinangun",
				"id"=> "948"
			],
			[
				"Bujur"=> "109.242824",
				"Lintang"=> "-7.421816",
				"Rute"=> "Jl. Jatiwinangun",
				"id"=> "949"
			],
			[
				"Bujur"=> "109.242738",
				"Lintang"=> "-7.422465",
				"Rute"=> "Jl. Jatiwinangun",
				"id"=> "950"
			],
			[
				"Bujur"=> "109.242652",
				"Lintang"=> "-7.422826",
				"Rute"=> "Jl. Jatiwinangun",
				"id"=> "951"
			],
			[
				"Bujur"=> "109.240852",
				"Lintang"=> "-7.424228",
				"Rute"=> "Jl. Pierre Tendean",
				"id"=> "952"
			],
			[
				"Bujur"=> "109.240830",
				"Lintang"=> "-7.424452",
				"Rute"=> "Jl. Pierre Tendean",
				"id"=> "953"
			],
			[
				"Bujur"=> "109.240787",
				"Lintang"=> "-7.424760",
				"Rute"=> "Jl. Pierre Tendean",
				"id"=> "954"
			],
			[
				"Bujur"=> "109.240723",
				"Lintang"=> "-7.425005",
				"Rute"=> "Jl. Pierre Tendean",
				"id"=> "955"
			],
			[
				"Bujur"=> "109.240718",
				"Lintang"=> "-7.425082",
				"Rute"=> "Jl. Pierre Tendean",
				"id"=> "956"
			],
			[
				"Bujur"=> "109.240696",
				"Lintang"=> "-7.425380",
				"Rute"=> "Jl. Pierre Tendean",
				"id"=> "957"
			],
			[
				"Bujur"=> "109.240589",
				"Lintang"=> "-7.426018",
				"Rute"=> "Jl. Pierre Tendean",
				"id"=> "958"
			],
			[
				"Bujur"=> "109.240557",
				"Lintang"=> "-7.426295",
				"Rute"=> "Jl. Pierre Tendean",
				"id"=> "959"
			],
			[
				"Bujur"=> "109.240503",
				"Lintang"=> "-7.426593",
				"Rute"=> "Jl. Pierre Tendean",
				"id"=> "960"
			],
			[
				"Bujur"=> "109.240471",
				"Lintang"=> "-7.426870",
				"Rute"=> "Jl. Pierre Tendean",
				"id"=> "961"
			],
			[
				"Bujur"=> "109.240482",
				"Lintang"=> "-7.427359",
				"Rute"=> "Jl. Pierre Tendean",
				"id"=> "962"
			],
			[
				"Bujur"=> "109.240514",
				"Lintang"=> "-7.427763",
				"Rute"=> "Jl. Pierre Tendean",
				"id"=> "963"
			],
			[
				"Bujur"=> "109.240717",
				"Lintang"=> "-7.428063",
				"Rute"=> "Jl. Perintis Kemerdekaan",
				"id"=> "964"
			],
			[
				"Bujur"=> "109.240738",
				"Lintang"=> "-7.428872",
				"Rute"=> "Jl. Perintis Kemerdekaan",
				"id"=> "965"
			],
			[
				"Bujur"=> "109.240717",
				"Lintang"=> "-7.429425",
				"Rute"=> "Jl. Perintis Kemerdekaan",
				"id"=> "966"
			],
			[
				"Bujur"=> "109.240674",
				"Lintang"=> "-7.430255",
				"Rute"=> "Jl. Perintis Kemerdekaan",
				"id"=> "967"
			],
			[
				"Bujur"=> "109.240674",
				"Lintang"=> "-7.430829",
				"Rute"=> "Jl. Perintis Kemerdekaan",
				"id"=> "968"
			],
			[
				"Bujur"=> "109.240609",
				"Lintang"=> "-7.431489",
				"Rute"=> "Jl. Perintis Kemerdekaan",
				"id"=> "969"
			],
			[
				"Bujur"=> "109.240566",
				"Lintang"=> "-7.432106",
				"Rute"=> "Jl. Perintis Kemerdekaan",
				"id"=> "970"
			],
			[
				"Bujur"=> "109.240502",
				"Lintang"=> "-7.432617",
				"Rute"=> "Jl. Perintis Kemerdekaan",
				"id"=> "971"
			],
			[
				"Bujur"=> "109.240373",
				"Lintang"=> "-7.433212",
				"Rute"=> "Jl. Perintis Kemerdekaan",
				"id"=> "972"
			],
			[
				"Bujur"=> "109.240245",
				"Lintang"=> "-7.434021",
				"Rute"=> "Jl. Perintis Kemerdekaan",
				"id"=> "973"
			],
			[
				"Bujur"=> "109.240137",
				"Lintang"=> "-7.434680",
				"Rute"=> "Jl. Perintis Kemerdekaan",
				"id"=> "974"
			],
			[
				"Bujur"=> "109.240030",
				"Lintang"=> "-7.435234",
				"Rute"=> "Jl. Perintis Kemerdekaan",
				"id"=> "975"
			],
			[
				"Bujur"=> "109.239773",
				"Lintang"=> "-7.435681",
				"Rute"=> "Jl. Perintis Kemerdekaan",
				"id"=> "976"
			],
			[
				"Bujur"=> "109.239150",
				"Lintang"=> "-7.436255",
				"Rute"=> "Jl. Perintis Kemerdekaan",
				"id"=> "977"
			],
			[
				"Bujur"=> "109.238743",
				"Lintang"=> "-7.436617",
				"Rute"=> "Jl. Perintis Kemerdekaan",
				"id"=> "978"
			],
			[
				"Bujur"=> "109.237992",
				"Lintang"=> "-7.437170",
				"Rute"=> "Jl. Perintis Kemerdekaan",
				"id"=> "979"
			],
			[
				"Bujur"=> "109.237477",
				"Lintang"=> "-7.437617",
				"Rute"=> "Jl. Perintis Kemerdekaan",
				"id"=> "980"
			],
			[
				"Bujur"=> "109.236554",
				"Lintang"=> "-7.438383",
				"Rute"=> "Jl. Perintis Kemerdekaan",
				"id"=> "981"
			],
			[
				"Bujur"=> "109.235867",
				"Lintang"=> "-7.438851",
				"Rute"=> "Jl. Perintis Kemerdekaan",
				"id"=> "982"
			],
			[
				"Bujur"=> "109.235223",
				"Lintang"=> "-7.439447",
				"Rute"=> "Jl. Perintis Kemerdekaan",
				"id"=> "983"
			],
			[
				"Bujur"=> "109.235245",
				"Lintang"=> "-7.440431",
				"Rute"=> "Jl. Perintis Kemerdekaan",
				"id"=> "984"
			],
			[
				"Bujur"=> "109.235417",
				"Lintang"=> "-7.441197",
				"Rute"=> "Jl. Perintis Kemerdekaan",
				"id"=> "985"
			],
			[
				"Bujur"=> "109.235502",
				"Lintang"=> "-7.441665",
				"Rute"=> "Jl. Perintis Kemerdekaan",
				"id"=> "986"
			],
			[
				"Bujur"=> "109.242857",
				"Lintang"=> "-7.451942",
				"Rute"=> "Jl. Lesanpura",
				"id"=> "987"
			],
			[
				"Bujur"=> "109.243179",
				"Lintang"=> "-7.452028",
				"Rute"=> "Jl. Lesanpura",
				"id"=> "988"
			],
			[
				"Bujur"=> "109.243480",
				"Lintang"=> "-7.452113",
				"Rute"=> "Jl. Lesanpura",
				"id"=> "989"
			],
			[
				"Bujur"=> "109.243791",
				"Lintang"=> "-7.452134",
				"Rute"=> "Jl. Lesanpura",
				"id"=> "990"
			],
			[
				"Bujur"=> "109.244070",
				"Lintang"=> "-7.452049",
				"Rute"=> "Jl. Lesanpura",
				"id"=> "991"
			],
			[
				"Bujur"=> "109.244413",
				"Lintang"=> "-7.451910",
				"Rute"=> "Jl. Lesanpura",
				"id"=> "992"
			],
			[
				"Bujur"=> "109.244713",
				"Lintang"=> "-7.451708",
				"Rute"=> "Jl. Lesanpura",
				"id"=> "993"
			],
			[
				"Bujur"=> "109.244971",
				"Lintang"=> "-7.451559",
				"Rute"=> "Jl. Lesanpura",
				"id"=> "994"
			],
			[
				"Bujur"=> "109.245346",
				"Lintang"=> "-7.451379",
				"Rute"=> "Jl. Lesanpura",
				"id"=> "995"
			],
			[
				"Bujur"=> "109.245658",
				"Lintang"=> "-7.451219",
				"Rute"=> "Jl. Lesanpura",
				"id"=> "996"
			],
			[
				"Bujur"=> "109.246253",
				"Lintang"=> "-7.451163",
				"Rute"=> "Jl. Lesanpura",
				"id"=> "997"
			],
			[
				"Bujur"=> "109.246714",
				"Lintang"=> "-7.451195",
				"Rute"=> "Jl. Lesanpura",
				"id"=> "998"
			],
			[
				"Bujur"=> "109.247122",
				"Lintang"=> "-7.451216",
				"Rute"=> "Jl. Lesanpura",
				"id"=> "999"
			],
			[
				"Bujur"=> "109.247519",
				"Lintang"=> "-7.451248",
				"Rute"=> "Jl. Lesanpura",
				"id"=> "1000"
			],
			[
				"Bujur"=> "109.248238",
				"Lintang"=> "-7.451312",
				"Rute"=> "Jl. Lesanpura",
				"id"=> "1001"
			],
			[
				"Bujur"=> "109.248699",
				"Lintang"=> "-7.451333",
				"Rute"=> "Jl. Lesanpura",
				"id"=> "1002"
			],
			[
				"Bujur"=> "109.249043",
				"Lintang"=> "-7.451373",
				"Rute"=> "Jl. Lesanpura",
				"id"=> "1003"
			],
			[
				"Bujur"=> "109.249450",
				"Lintang"=> "-7.451355",
				"Rute"=> "Jl. Lesanpura",
				"id"=> "1004"
			],
			[
				"Bujur"=> "109.249847",
				"Lintang"=> "-7.451333",
				"Rute"=> "Jl. Lesanpura",
				"id"=> "1005"
			],
			[
				"Bujur"=> "109.250824",
				"Lintang"=> "-7.451291",
				"Rute"=> "Jl. Lesanpura",
				"id"=> "1006"
			],
			[
				"Bujur"=> "109.251199",
				"Lintang"=> "-7.451280",
				"Rute"=> "Jl. Lesanpura",
				"id"=> "1007"
			],
			[
				"Bujur"=> "109.251703",
				"Lintang"=> "-7.451248",
				"Rute"=> "Jl. Lesanpura",
				"id"=> "1008"
			],
			[
				"Bujur"=> "109.252090",
				"Lintang"=> "-7.451238",
				"Rute"=> "Jl. Lesanpura",
				"id"=> "1009"
			],
			[
				"Bujur"=> "109.252637",
				"Lintang"=> "-7.451291",
				"Rute"=> "Jl. Lesanpura",
				"id"=> "1010"
			],
			[
				"Bujur"=> "109.253216",
				"Lintang"=> "-7.451376",
				"Rute"=> "Jl. Lesanpura",
				"id"=> "1011"
			],
			[
				"Bujur"=> "109.253710",
				"Lintang"=> "-7.451482",
				"Rute"=> "Jl. Lesanpura",
				"id"=> "1012"
			],
			[
				"Bujur"=> "109.253978",
				"Lintang"=> "-7.451599",
				"Rute"=> "Jl. Lesanpura",
				"id"=> "1013"
			],
			[
				"Bujur"=> "109.254386",
				"Lintang"=> "-7.451791",
				"Rute"=> "Jl. Lesanpura",
				"id"=> "1014"
			],
			[
				"Bujur"=> "109.254600",
				"Lintang"=> "-7.451770",
				"Rute"=> "Jl. Lesanpura",
				"id"=> "1015"
			],
			[
				"Bujur"=> "109.246407",
				"Lintang"=> "-7.453308",
				"Rute"=> "PERUMAHAN PURI TELUK KELURAHAN TELUK KEC. PURWOKERTO SELATAN",
				"id"=> "1016"
			],
			[
				"Bujur"=> "109.246410",
				"Lintang"=> "-7.453202",
				"Rute"=> "PERUMAHAN PURI TELUK KELURAHAN TELUK KEC. PURWOKERTO SELATAN",
				"id"=> "1017"
			],
			[
				"Bujur"=> "109.246413",
				"Lintang"=> "-7.453109",
				"Rute"=> "PERUMAHAN PURI TELUK KELURAHAN TELUK KEC. PURWOKERTO SELATAN",
				"id"=> "1018"
			],
			[
				"Bujur"=> "109.246413",
				"Lintang"=> "-7.453000",
				"Rute"=> "PERUMAHAN PURI TELUK KELURAHAN TELUK KEC. PURWOKERTO SELATAN",
				"id"=> "1019"
			],
			[
				"Bujur"=> "109.246402",
				"Lintang"=> "-7.452880",
				"Rute"=> "PERUMAHAN PURI TELUK KELURAHAN TELUK KEC. PURWOKERTO SELATAN",
				"id"=> "1020"
			],
			[
				"Bujur"=> "109.246413",
				"Lintang"=> "-7.452773",
				"Rute"=> "PERUMAHAN PURI TELUK KELURAHAN TELUK KEC. PURWOKERTO SELATAN",
				"id"=> "1021"
			],
			[
				"Bujur"=> "109.246327",
				"Lintang"=> "-7.452715",
				"Rute"=> "PERUMAHAN PURI TELUK KELURAHAN TELUK KEC. PURWOKERTO SELATAN",
				"id"=> "1022"
			],
			[
				"Bujur"=> "109.246179",
				"Lintang"=> "-7.452739",
				"Rute"=> "PERUMAHAN PURI TELUK KELURAHAN TELUK KEC. PURWOKERTO SELATAN",
				"id"=> "1023"
			],
			[
				"Bujur"=> "109.24615",
				"Lintang"=> "-7.452577",
				"Rute"=> "PERUMAHAN PURI TELUK KELURAHAN TELUK KEC. PURWOKERTO SELATAN",
				"id"=> "1024"
			],
			[
				"Bujur"=> "109.246131",
				"Lintang"=> "-7.452484",
				"Rute"=> "PERUMAHAN PURI TELUK KELURAHAN TELUK KEC. PURWOKERTO SELATAN",
				"id"=> "1025"
			],
			[
				"Bujur"=> "109.245922",
				"Lintang"=> "-7.452481",
				"Rute"=> "PERUMAHAN PURI TELUK KELURAHAN TELUK KEC. PURWOKERTO SELATAN",
				"id"=> "1026"
			],
			[
				"Bujur"=> "109.245739",
				"Lintang"=> "-7.452492",
				"Rute"=> "PERUMAHAN PURI TELUK KELURAHAN TELUK KEC. PURWOKERTO SELATAN",
				"id"=> "1027"
			],
			[
				"Bujur"=> "109.245651",
				"Lintang"=> "-7.452566",
				"Rute"=> "PERUMAHAN PURI TELUK KELURAHAN TELUK KEC. PURWOKERTO SELATAN",
				"id"=> "1028"
			],
			[
				"Bujur"=> "109.245664",
				"Lintang"=> "-7.452763",
				"Rute"=> "PERUMAHAN PURI TELUK KELURAHAN TELUK KEC. PURWOKERTO SELATAN",
				"id"=> "1029"
			],
			[
				"Bujur"=> "109.245764",
				"Lintang"=> "-7.452736",
				"Rute"=> "PERUMAHAN PURI TELUK KELURAHAN TELUK KEC. PURWOKERTO SELATAN",
				"id"=> "1030"
			],
			[
				"Bujur"=> "109.245911",
				"Lintang"=> "-7.452734",
				"Rute"=> "PERUMAHAN PURI TELUK KELURAHAN TELUK KEC. PURWOKERTO SELATAN",
				"id"=> "1031"
			],
			[
				"Bujur"=> "109.246026",
				"Lintang"=> "-7.452728",
				"Rute"=> "PERUMAHAN PURI TELUK KELURAHAN TELUK KEC. PURWOKERTO SELATAN",
				"id"=> "1032"
			],
			[
				"Bujur"=> "109.245946",
				"Lintang"=> "-7.452880",
				"Rute"=> "PERUMAHAN PURI TELUK KELURAHAN TELUK KEC. PURWOKERTO SELATAN",
				"id"=> "1033"
			],
			[
				"Bujur"=> "109.245957",
				"Lintang"=> "-7.453023",
				"Rute"=> "PERUMAHAN PURI TELUK KELURAHAN TELUK KEC. PURWOKERTO SELATAN",
				"id"=> "1034"
			],
			[
				"Bujur"=> "109.246123",
				"Lintang"=> "-7.453071",
				"Rute"=> "PERUMAHAN PURI TELUK KELURAHAN TELUK KEC. PURWOKERTO SELATAN",
				"id"=> "1035"
			],
			[
				"Bujur"=> "109.246260",
				"Lintang"=> "-7.453066",
				"Rute"=> "PERUMAHAN PURI TELUK KELURAHAN TELUK KEC. PURWOKERTO SELATAN",
				"id"=> "1036"
			],
			[
				"Bujur"=> "109.235717",
				"Lintang"=> "-7.442498",
				"Rute"=> "Jl. Kh. Agus Salim",
				"id"=> "1037"
			],
			[
				"Bujur"=> "109.235792",
				"Lintang"=> "-7.442839",
				"Rute"=> "Jl. Kh. Agus Salim",
				"id"=> "1038"
			],
			[
				"Bujur"=> "109.235845",
				"Lintang"=> "-7.443201",
				"Rute"=> "Jl. Kh. Agus Salim",
				"id"=> "1039"
			],
			[
				"Bujur"=> "109.235942",
				"Lintang"=> "-7.443552",
				"Rute"=> "Jl. Kh. Agus Salim",
				"id"=> "1040"
			],
			[
				"Bujur"=> "109.235985",
				"Lintang"=> "-7.443881",
				"Rute"=> "Jl. Kh. Agus Salim",
				"id"=> "1041"
			],
			[
				"Bujur"=> "109.236081",
				"Lintang"=> "-7.444201",
				"Rute"=> "Jl. Kh. Agus Salim",
				"id"=> "1042"
			],
			[
				"Bujur"=> "109.236189",
				"Lintang"=> "-7.444477",
				"Rute"=> "Jl. Kh. Agus Salim",
				"id"=> "1043"
			],
			[
				"Bujur"=> "109.236296",
				"Lintang"=> "-7.444733",
				"Rute"=> "Jl. Kh. Agus Salim",
				"id"=> "1044"
			],
			[
				"Bujur"=> "109.236468",
				"Lintang"=> "-7.445243",
				"Rute"=> "Jl. Kh. Agus Salim",
				"id"=> "1045"
			],
			[
				"Bujur"=> "109.236682",
				"Lintang"=> "-7.445552",
				"Rute"=> "Jl. Kh. Agus Salim",
				"id"=> "1046"
			],
			[
				"Bujur"=> "109.236929",
				"Lintang"=> "-7.445892",
				"Rute"=> "Jl. Kh. Agus Salim",
				"id"=> "1047"
			],
			[
				"Bujur"=> "109.237519",
				"Lintang"=> "-7.446477",
				"Rute"=> "Jl. Kh. Agus Salim",
				"id"=> "1048"
			],
			[
				"Bujur"=> "109.237841",
				"Lintang"=> "-7.446722",
				"Rute"=> "Jl. Kh. Agus Salim",
				"id"=> "1049"
			],
			[
				"Bujur"=> "109.238163",
				"Lintang"=> "-7.446999",
				"Rute"=> "Jl. Kh. Agus Salim",
				"id"=> "1050"
			],
			[
				"Bujur"=> "109.238474",
				"Lintang"=> "-7.447264",
				"Rute"=> "Jl. Kh. Agus Salim",
				"id"=> "1051"
			],
			[
				"Bujur"=> "109.238796",
				"Lintang"=> "-7.447541",
				"Rute"=> "Jl. Kh. Agus Salim",
				"id"=> "1052"
			],
			[
				"Bujur"=> "109.236360",
				"Lintang"=> "-7.445573",
				"Rute"=> "Jl. Kh. Agus Salim",
				"id"=> "1053"
			],
			[
				"Bujur"=> "109.236264",
				"Lintang"=> "-7.446020",
				"Rute"=> "Jl. Kh. Agus Salim",
				"id"=> "1054"
			],
			[
				"Bujur"=> "109.236242",
				"Lintang"=> "-7.446299",
				"Rute"=> "Jl. Kh. Agus Salim",
				"id"=> "1055"
			],
			[
				"Bujur"=> "109.236146",
				"Lintang"=> "-7.446788",
				"Rute"=> "Jl. Kh. Agus Salim",
				"id"=> "1056"
			],
			[
				"Bujur"=> "109.236071",
				"Lintang"=> "-7.447288",
				"Rute"=> "Jl. Kh. Agus Salim",
				"id"=> "1057"
			],
			[
				"Bujur"=> "109.235953",
				"Lintang"=> "-7.447788",
				"Rute"=> "Jl. Kh. Agus Salim",
				"id"=> "1058"
			],
			[
				"Bujur"=> "109.235867",
				"Lintang"=> "-7.448288",
				"Rute"=> "Jl. Kh. Agus Salim",
				"id"=> "1059"
			],
			[
				"Bujur"=> "109.235759",
				"Lintang"=> "-7.448831",
				"Rute"=> "Jl. Kh. Agus Salim",
				"id"=> "1060"
			],
			[
				"Bujur"=> "109.235684",
				"Lintang"=> "-7.449384",
				"Rute"=> "Jl. Kh. Agus Salim",
				"id"=> "1061"
			],
			[
				"Bujur"=> "109.235566",
				"Lintang"=> "-7.450108",
				"Rute"=> "Jl. Kh. Agus Salim",
				"id"=> "1062"
			],
			[
				"Bujur"=> "109.235470",
				"Lintang"=> "-7.450522",
				"Rute"=> "Jl. Kh. Agus Salim",
				"id"=> "1063"
			],
			[
				"Bujur"=> "109.235384",
				"Lintang"=> "-7.450959",
				"Rute"=> "Jl. Kh. Agus Salim",
				"id"=> "1064"
			],
			[
				"Bujur"=> "109.222674",
				"Lintang"=> "-7.419003",
				"Rute"=> "Jl. Pemuda",
				"id"=> "1065"
			],
			[
				"Bujur"=> "109.223017",
				"Lintang"=> "-7.418854",
				"Rute"=> "Jl. Pemuda",
				"id"=> "1066"
			],
			[
				"Bujur"=> "109.223318",
				"Lintang"=> "-7.418726",
				"Rute"=> "Jl. Pemuda",
				"id"=> "1067"
			],
			[
				"Bujur"=> "109.223704",
				"Lintang"=> "-7.418598",
				"Rute"=> "Jl. Pemuda",
				"id"=> "1068"
			],
			[
				"Bujur"=> "109.224004",
				"Lintang"=> "-7.418503",
				"Rute"=> "Jl. Pemuda",
				"id"=> "1069"
			],
			[
				"Bujur"=> "109.224337",
				"Lintang"=> "-7.418343",
				"Rute"=> "Jl. Pemuda",
				"id"=> "1070"
			],
			[
				"Bujur"=> "109.224552",
				"Lintang"=> "-7.418247",
				"Rute"=> "Jl. Pemuda",
				"id"=> "1071"
			],
			[
				"Bujur"=> "109.225120",
				"Lintang"=> "-7.418183",
				"Rute"=> "Jl. Pemuda",
				"id"=> "1072"
			],
			[
				"Bujur"=> "109.225442",
				"Lintang"=> "-7.418332",
				"Rute"=> "Jl. Pemuda",
				"id"=> "1073"
			],
			[
				"Bujur"=> "109.225732",
				"Lintang"=> "-7.418471",
				"Rute"=> "Jl. Pemuda",
				"id"=> "1074"
			],
			[
				"Bujur"=> "109.225978",
				"Lintang"=> "-7.418577",
				"Rute"=> "Jl. Pemuda",
				"id"=> "1075"
			],
			[
				"Bujur"=> "109.226343",
				"Lintang"=> "-7.418779",
				"Rute"=> "Jl. Pemuda",
				"id"=> "1076"
			],
			[
				"Bujur"=> "109.226622",
				"Lintang"=> "-7.418917",
				"Rute"=> "Jl. Pemuda",
				"id"=> "1077"
			],
			[
				"Bujur"=> "109.226837",
				"Lintang"=> "-7.419034",
				"Rute"=> "Jl. Pemuda",
				"id"=> "1078"
			],
			[
				"Bujur"=> "109.261920",
				"Lintang"=> "-7.427259",
				"Rute"=> "Jl. Adipati Mersi",
				"id"=> "1079"
			],
			[
				"Bujur"=> "109.262242",
				"Lintang"=> "-7.427217",
				"Rute"=> "Jl. Adipati Mersi",
				"id"=> "1080"
			],
			[
				"Bujur"=> "109.262575",
				"Lintang"=> "-7.427195",
				"Rute"=> "Jl. Adipati Mersi",
				"id"=> "1081"
			],
			[
				"Bujur"=> "109.262575",
				"Lintang"=> "-7.427195",
				"Rute"=> "Jl. Adipati Mersi",
				"id"=> "1082"
			],
			[
				"Bujur"=> "109.262865",
				"Lintang"=> "-7.427174",
				"Rute"=> "Jl. Adipati Mersi",
				"id"=> "1083"
			],
			[
				"Bujur"=> "109.263476",
				"Lintang"=> "-7.427121",
				"Rute"=> "Jl. Adipati Mersi",
				"id"=> "1084"
			],
			[
				"Bujur"=> "109.263766",
				"Lintang"=> "-7.427099",
				"Rute"=> "Jl. Adipati Mersi",
				"id"=> "1085"
			],
			[
				"Bujur"=> "109.264270",
				"Lintang"=> "-7.427068",
				"Rute"=> "Jl. Adipati Mersi",
				"id"=> "1086"
			],
			[
				"Bujur"=> "109.264538",
				"Lintang"=> "-7.427068",
				"Rute"=> "Jl. Adipati Mersi",
				"id"=> "1087"
			],
			[
				"Bujur"=> "109.264839",
				"Lintang"=> "-7.427078",
				"Rute"=> "Jl. Adipati Mersi",
				"id"=> "1088"
			],
			[
				"Bujur"=> "109.265193",
				"Lintang"=> "-7.427025",
				"Rute"=> "Jl. Adipati Mersi",
				"id"=> "1089"
			],
			[
				"Bujur"=> "109.265590",
				"Lintang"=> "-7.427014",
				"Rute"=> "Jl. Adipati Mersi",
				"id"=> "1090"
			],
			[
				"Bujur"=> "109.265933",
				"Lintang"=> "-7.426982",
				"Rute"=> "Jl. Adipati Mersi",
				"id"=> "1091"
			],
			[
				"Bujur"=> "109.266384",
				"Lintang"=> "-7.426919",
				"Rute"=> "Jl. Adipati Mersi",
				"id"=> "1092"
			],
			[
				"Bujur"=> "109.266695",
				"Lintang"=> "-7.426887",
				"Rute"=> "Jl. Adipati Mersi",
				"id"=> "1093"
			],
			[
				"Bujur"=> "109.266952",
				"Lintang"=> "-7.427004",
				"Rute"=> "Jl. Adipati Mersi",
				"id"=> "1094"
			],
			[
				"Bujur"=> "109.267038",
				"Lintang"=> "-7.427312",
				"Rute"=> "Jl. Adipati Mersi",
				"id"=> "1095"
			],
			[
				"Bujur"=> "109.267145",
				"Lintang"=> "-7.427642",
				"Rute"=> "Jl. Adipati Mersi",
				"id"=> "1096"
			],
			[
				"Bujur"=> "109.267360",
				"Lintang"=> "-7.427940",
				"Rute"=> "Jl. Adipati Mersi",
				"id"=> "1097"
			],
			[
				"Bujur"=> "109.267575",
				"Lintang"=> "-7.428110",
				"Rute"=> "Jl. Adipati Mersi",
				"id"=> "1098"
			],
			[
				"Bujur"=> "109.267768",
				"Lintang"=> "-7.428291",
				"Rute"=> "Jl. Adipati Mersi",
				"id"=> "1099"
			],
			[
				"Bujur"=> "109.263139",
				"Lintang"=> "-7.415844",
				"Rute"=> "Jl. Senopati",
				"id"=> "1100"
			],
			[
				"Bujur"=> "109.263450",
				"Lintang"=> "-7.415791",
				"Rute"=> "Jl. Senopati",
				"id"=> "1101"
			],
			[
				"Bujur"=> "109.263761",
				"Lintang"=> "-7.415706",
				"Rute"=> "Jl. Senopati",
				"id"=> "1102"
			],
			[
				"Bujur"=> "109.264341",
				"Lintang"=> "-7.415387",
				"Rute"=> "Jl. Senopati",
				"id"=> "1103"
			],
			[
				"Bujur"=> "109.264587",
				"Lintang"=> "-7.415174",
				"Rute"=> "Jl. Senopati",
				"id"=> "1104"
			],
			[
				"Bujur"=> "109.264759",
				"Lintang"=> "-7.415099",
				"Rute"=> "Jl. Senopati",
				"id"=> "1105"
			],
			[
				"Bujur"=> "109.265306",
				"Lintang"=> "-7.414897",
				"Rute"=> "Jl. Senopati",
				"id"=> "1106"
			],
			[
				"Bujur"=> "109.265596",
				"Lintang"=> "-7.414876",
				"Rute"=> "Jl. Senopati",
				"id"=> "1107"
			],
			[
				"Bujur"=> "109.265875",
				"Lintang"=> "-7.414770",
				"Rute"=> "Jl. Senopati",
				"id"=> "1108"
			],
			[
				"Bujur"=> "109.266272",
				"Lintang"=> "-7.414653",
				"Rute"=> "Jl. Senopati",
				"id"=> "1109"
			],
			[
				"Bujur"=> "109.266572",
				"Lintang"=> "-7.414610",
				"Rute"=> "Jl. Senopati",
				"id"=> "1110"
			],
			[
				"Bujur"=> "109.267044",
				"Lintang"=> "-7.414461",
				"Rute"=> "Jl. Senopati",
				"id"=> "1111"
			],
			[
				"Bujur"=> "109.268074",
				"Lintang"=> "-7.414248",
				"Rute"=> "Jl. Senopati",
				"id"=> "1112"
			],
			[
				"Bujur"=> "109.261054",
				"Lintang"=> "-7.420017",
				"Rute"=> "Jl. Martadireja II",
				"id"=> "1113"
			],
			[
				"Bujur"=> "109.261204",
				"Lintang"=> "-7.420911",
				"Rute"=> "Jl. Martadireja II",
				"id"=> "1114"
			],
			[
				"Bujur"=> "109.261226",
				"Lintang"=> "-7.421400",
				"Rute"=> "Jl. Martadireja II",
				"id"=> "1115"
			],
			[
				"Bujur"=> "109.261290",
				"Lintang"=> "-7.422038",
				"Rute"=> "Jl. Martadireja II",
				"id"=> "1116"
			],
			[
				"Bujur"=> "109.261333",
				"Lintang"=> "-7.422655",
				"Rute"=> "Jl. Martadireja II",
				"id"=> "1117"
			],
			[
				"Bujur"=> "109.261376",
				"Lintang"=> "-7.423187",
				"Rute"=> "Jl. Martadireja II",
				"id"=> "1118"
			],
			[
				"Bujur"=> "109.261440",
				"Lintang"=> "-7.423868",
				"Rute"=> "Jl. Martadireja II",
				"id"=> "1119"
			],
			[
				"Bujur"=> "109.261483",
				"Lintang"=> "-7.424400",
				"Rute"=> "Jl. Martadireja II",
				"id"=> "1120"
			],
			[
				"Bujur"=> "109.261547",
				"Lintang"=> "-7.424847",
				"Rute"=> "Jl. Martadireja II",
				"id"=> "1121"
			],
			[
				"Bujur"=> "109.261633",
				"Lintang"=> "-7.425634",
				"Rute"=> "Jl. Martadireja II",
				"id"=> "1122"
			],
			[
				"Bujur"=> "109.261741",
				"Lintang"=> "-7.426379",
				"Rute"=> "Jl. Martadireja II",
				"id"=> "1123"
			],
			[
				"Bujur"=> "109.261762",
				"Lintang"=> "-7.426783",
				"Rute"=> "Jl. Martadireja II",
				"id"=> "1124"
			],
			[
				"Bujur"=> "109.242143",
				"Lintang"=> "-7.430115",
				"Rute"=> "Jl. Martadireja II",
				"id"=> "1125"
			],
			[
				"Bujur"=> "109.242256",
				"Lintang"=> "-7.430195",
				"Rute"=> "Jl. Kongsen",
				"id"=> "1126"
			],
			[
				"Bujur"=> "109.242368",
				"Lintang"=> "-7.430243",
				"Rute"=> "Jl. Kongsen",
				"id"=> "1127"
			],
			[
				"Bujur"=> "109.242502",
				"Lintang"=> "-7.430301",
				"Rute"=> "Jl. Kongsen",
				"id"=> "1128"
			],
			[
				"Bujur"=> "109.242658",
				"Lintang"=> "-7.430344",
				"Rute"=> "Jl. Kongsen",
				"id"=> "1129"
			],
			[
				"Bujur"=> "109.242894",
				"Lintang"=> "-7.430471",
				"Rute"=> "Jl. Kongsen",
				"id"=> "1130"
			],
			[
				"Bujur"=> "109.243023",
				"Lintang"=> "-7.430530",
				"Rute"=> "Jl. Kongsen",
				"id"=> "1131"
			],
			[
				"Bujur"=> "109.243205",
				"Lintang"=> "-7.430604",
				"Rute"=> "Jl. Kongsen",
				"id"=> "1132"
			],
			[
				"Bujur"=> "109.243339",
				"Lintang"=> "-7.430647",
				"Rute"=> "Jl. Kongsen",
				"id"=> "1133"
			],
			[
				"Bujur"=> "109.243500",
				"Lintang"=> "-7.430716",
				"Rute"=> "Jl. Kongsen",
				"id"=> "1134"
			],
			[
				"Bujur"=> "109.243623",
				"Lintang"=> "-7.430775",
				"Rute"=> "Jl. Kongsen",
				"id"=> "1135"
			],
			[
				"Bujur"=> "109.251203",
				"Lintang"=> "-7.414703",
				"Rute"=> "Arcawinangun",
				"id"=> "1136"
			],
			[
				"Bujur"=> "109.252533",
				"Lintang"=> "-7.414576",
				"Rute"=> "Arcawinangun",
				"id"=> "1137"
			],
			[
				"Bujur"=> "109.253391",
				"Lintang"=> "-7.413767",
				"Rute"=> "Arcawinangun",
				"id"=> "1138"
			],
			[
				"Bujur"=> "109.255537",
				"Lintang"=> "-7.412873",
				"Rute"=> "Arcawinangun",
				"id"=> "1139"
			],
			[
				"Bujur"=> "109.256739",
				"Lintang"=> "-7.411682",
				"Rute"=> "Arcawinangun",
				"id"=> "1140"
			],
			[
				"Bujur"=> "109.257683",
				"Lintang"=> "-7.410320",
				"Rute"=> "Arcawinangun",
				"id"=> "1141"
			],
			[
				"Bujur"=> "109.258541",
				"Lintang"=> "-7.409171",
				"Rute"=> "Arcawinangun",
				"id"=> "1142"
			],
			[
				"Bujur"=> "109.260687",
				"Lintang"=> "-7.407894",
				"Rute"=> "Arcawinangun",
				"id"=> "1143"
			],
			[
				"Bujur"=> "109.263777",
				"Lintang"=> "-7.412533",
				"Rute"=> "Arcawinangun",
				"id"=> "1144"
			],
			[
				"Bujur"=> "109.264807",
				"Lintang"=> "-7.413384",
				"Rute"=> "Arcawinangun",
				"id"=> "1145"
			],
			[
				"Bujur"=> "109.266996",
				"Lintang"=> "-7.416788",
				"Rute"=> "Arcawinangun",
				"id"=> "1146"
			],
			[
				"Bujur"=> "109.267554",
				"Lintang"=> "-7.419469",
				"Rute"=> "Arcawinangun",
				"id"=> "1147"
			],
			[
				"Bujur"=> "109.264163",
				"Lintang"=> "-7.419597",
				"Rute"=> "Arcawinangun",
				"id"=> "1148"
			],
			[
				"Bujur"=> "109.263863",
				"Lintang"=> "-7.421555",
				"Rute"=> "Arcawinangun",
				"id"=> "1149"
			],
			[
				"Bujur"=> "109.262232",
				"Lintang"=> "-7.420789",
				"Rute"=> "Arcawinangun",
				"id"=> "1150"
			],
			[
				"Bujur"=> "109.260301",
				"Lintang"=> "-7.421342",
				"Rute"=> "Arcawinangun",
				"id"=> "1151"
			],
			[
				"Bujur"=> "109.258198",
				"Lintang"=> "-7.422023",
				"Rute"=> "Arcawinangun",
				"id"=> "1152"
			],
			[
				"Bujur"=> "109.256138",
				"Lintang"=> "-7.421512",
				"Rute"=> "Arcawinangun",
				"id"=> "1153"
			],
			[
				"Bujur"=> "109.251632",
				"Lintang"=> "-7.418746",
				"Rute"=> "Arcawinangun",
				"id"=> "1154"
			],
			[
				"Bujur"=> "109.250773",
				"Lintang"=> "-7.416150",
				"Rute"=> "Arcawinangun",
				"id"=> "1155"
			],
			[
				"Bujur"=> "109.273008",
				"Lintang"=> "-7.412351",
				"Rute"=> "Dukuhwaluh",
				"id"=> "1156"
			],
			[
				"Bujur"=> "109.272965",
				"Lintang"=> "-7.412862",
				"Rute"=> "Dukuhwaluh",
				"id"=> "1157"
			],
			[
				"Bujur"=> "109.272965",
				"Lintang"=> "-7.413372",
				"Rute"=> "Dukuhwaluh",
				"id"=> "1158"
			],
			[
				"Bujur"=> "109.272880",
				"Lintang"=> "-7.415075",
				"Rute"=> "Dukuhwaluh",
				"id"=> "1159"
			],
			[
				"Bujur"=> "109.272923",
				"Lintang"=> "-7.416351",
				"Rute"=> "Dukuhwaluh",
				"id"=> "1160"
			],
			[
				"Bujur"=> "109.272322",
				"Lintang"=> "-7.417415",
				"Rute"=> "Dukuhwaluh",
				"id"=> "1161"
			],
			[
				"Bujur"=> "109.271077",
				"Lintang"=> "-7.417926",
				"Rute"=> "Dukuhwaluh",
				"id"=> "1162"
			],
			[
				"Bujur"=> "109.270348",
				"Lintang"=> "-7.419033",
				"Rute"=> "Dukuhwaluh",
				"id"=> "1163"
			],
			[
				"Bujur"=> "109.270305",
				"Lintang"=> "-7.420182",
				"Rute"=> "Dukuhwaluh",
				"id"=> "1164"
			],
			[
				"Bujur"=> "109.267043",
				"Lintang"=> "-7.416692",
				"Rute"=> "Dukuhwaluh",
				"id"=> "1165"
			],
			[
				"Bujur"=> "109.263309",
				"Lintang"=> "-7.412181",
				"Rute"=> "Dukuhwaluh",
				"id"=> "1166"
			],
			[
				"Bujur"=> "109.262279",
				"Lintang"=> "-7.411117",
				"Rute"=> "Dukuhwaluh",
				"id"=> "1167"
			],
			[
				"Bujur"=> "109.268030",
				"Lintang"=> "-7.402052",
				"Rute"=> "Dukuhwaluh",
				"id"=> "1168"
			],
			[
				"Bujur"=> "109.273738",
				"Lintang"=> "-7.405882",
				"Rute"=> "Dukuhwaluh",
				"id"=> "1169"
			],
			[
				"Bujur"=> "109.274081",
				"Lintang"=> "-7.407840",
				"Rute"=> "Dukuhwaluh",
				"id"=> "1179"
			],
			[
				"Bujur"=> "109.263830",
				"Lintang"=> "-7.427322",
				"Rute"=> "Mersi",
				"id"=> "1171"
			],
			[
				"Bujur"=> "109.262843",
				"Lintang"=> "-7.427066",
				"Rute"=> "Mersi",
				"id"=> "1172"
			],
			[
				"Bujur"=> "109.263443",
				"Lintang"=> "-7.427109",
				"Rute"=> "Mersi",
				"id"=> "1173"
			],
			[
				"Bujur"=> "109.263915",
				"Lintang"=> "-7.427024",
				"Rute"=> "Mersi",
				"id"=> "1174"
			],
			[
				"Bujur"=> "109.264473",
				"Lintang"=> "-7.427109",
				"Rute"=> "Mersi",
				"id"=> "1175"
			],
			[
				"Bujur"=> "109.265074",
				"Lintang"=> "-7.426981",
				"Rute"=> "Mersi",
				"id"=> "1176"
			],
			[
				"Bujur"=> "109.265761",
				"Lintang"=> "-7.426981",
				"Rute"=> "Mersi",
				"id"=> "1177"
			],
			[
				"Bujur"=> "109.267992",
				"Lintang"=> "-7.426768",
				"Rute"=> "Mersi",
				"id"=> "1178"
			],
			[
				"Bujur"=> "109.266726",
				"Lintang"=> "-7.440791",
				"Rute"=> "Jl. Sunan Kalijaga",
				"id"=> "1179"
			],
			[
				"Bujur"=> "109.266790",
				"Lintang"=> "-7.441280",
				"Rute"=> "Jl. Sunan Kalijaga",
				"id"=> "1180"
			],
			[
				"Bujur"=> "109.266941",
				"Lintang"=> "-7.441961",
				"Rute"=> "Jl. Sunan Kalijaga",
				"id"=> "1181"
			],
			[
				"Bujur"=> "109.267069",
				"Lintang"=> "-7.442706",
				"Rute"=> "Jl. Sunan Kalijaga",
				"id"=> "1182"
			],
			[
				"Bujur"=> "109.267026",
				"Lintang"=> "-7.443642",
				"Rute"=> "Jl. Sunan Kalijaga",
				"id"=> "1183"
			],
			[
				"Bujur"=> "109.266984",
				"Lintang"=> "-7.444514",
				"Rute"=> "Jl. Sunan Kalijaga",
				"id"=> "1184"
			],
			[
				"Bujur"=> "109.267026",
				"Lintang"=> "-7.445301",
				"Rute"=> "Jl. Sunan Kalijaga",
				"id"=> "1185"
			],
			[
				"Bujur"=> "109.267091",
				"Lintang"=> "-7.446642",
				"Rute"=> "Jl. Sunan Kalijaga",
				"id"=> "1186"
			],
			[
				"Bujur"=> "109.267091",
				"Lintang"=> "-7.447472",
				"Rute"=> "Jl. Sunan Kalijaga",
				"id"=> "1187"
			],
			[
				"Bujur"=> "109.267026",
				"Lintang"=> "-7.448386",
				"Rute"=> "Jl. Sunan Kalijaga",
				"id"=> "1188"
			],
			[
				"Bujur"=> "109.266898",
				"Lintang"=> "-7.449147",
				"Rute"=> "Jl. Sunan Kalijaga",
				"id"=> "1189"
			],
			[
				"Bujur"=> "109.266919",
				"Lintang"=> "-7.450041",
				"Rute"=> "Jl. Sunan Kalijaga",
				"id"=> "1190"
			],
			[
				"Bujur"=> "109.266898",
				"Lintang"=> "-7.450807",
				"Rute"=> "Jl. Sunan Kalijaga",
				"id"=> "1191"
			],
			[
				"Bujur"=> "109.266855",
				"Lintang"=> "-7.451509",
				"Rute"=> "Jl. Sunan Kalijaga",
				"id"=> "1192"
			],
			[
				"Bujur"=> "109.266790",
				"Lintang"=> "-7.452275",
				"Rute"=> "Jl. Sunan Kalijaga",
				"id"=> "1193"
			],
			[
				"Bujur"=> "109.266769",
				"Lintang"=> "-7.453360",
				"Rute"=> "Jl. Sunan Kalijaga",
				"id"=> "1194"
			],
			[
				"Bujur"=> "109.266747",
				"Lintang"=> "-7.454062",
				"Rute"=> "Jl. Sunan Kalijaga",
				"id"=> "1195"
			],
			[
				"Bujur"=> "109.266726",
				"Lintang"=> "-7.454998",
				"Rute"=> "Jl. Sunan Kalijaga",
				"id"=> "1196"
			],
			[
				"Bujur"=> "109.240727",
				"Lintang"=> "-7.428090",
				"Rute"=> "Jl. Perintis Kemerdekaan",
				"id"=> "1197"
			],
			[
				"Bujur"=> "109.240706",
				"Lintang"=> "-7.428877",
				"Rute"=> "Jl. Perintis Kemerdekaan",
				"id"=> "198"
			],
			[
				"Bujur"=> "109.240663",
				"Lintang"=> "-7.430239",
				"Rute"=> "Jl. Perintis Kemerdekaan",
				"id"=> "1199"
			],
			[
				"Bujur"=> "109.240599",
				"Lintang"=> "-7.430813",
				"Rute"=> "Jl. Perintis Kemerdekaan",
				"id"=> "1200"
			],
			[
				"Bujur"=> "109.240577",
				"Lintang"=> "-7.431494",
				"Rute"=> "Jl. Perintis Kemerdekaan",
				"id"=> "1201"
			],
			[
				"Bujur"=> "109.240577",
				"Lintang"=> "-7.432133",
				"Rute"=> "Jl. Perintis Kemerdekaan",
				"id"=> "1202"
			],
			[
				"Bujur"=> "109.240491",
				"Lintang"=> "-7.432558",
				"Rute"=> "Jl. Perintis Kemerdekaan",
				"id"=> "1203"
			],
			[
				"Bujur"=> "109.240363",
				"Lintang"=> "-7.433324",
				"Rute"=> "Jl. Perintis Kemerdekaan",
				"id"=> "1204"
			],
			[
				"Bujur"=> "109.240234",
				"Lintang"=> "-7.434090",
				"Rute"=> "Jl. Perintis Kemerdekaan",
				"id"=> "1205"
			],
			[
				"Bujur"=> "109.240105",
				"Lintang"=> "-7.434771",
				"Rute"=> "Jl. Perintis Kemerdekaan",
				"id"=> "1206"
			],
			[
				"Bujur"=> "109.239998",
				"Lintang"=> "-7.435473",
				"Rute"=> "Jl. Perintis Kemerdekaan",
				"id"=> "1207"
			],
			[
				"Bujur"=> "109.239075",
				"Lintang"=> "-7.436324",
				"Rute"=> "Jl. Perintis Kemerdekaan",
				"id"=> "1208"
			],
			[
				"Bujur"=> "109.238603",
				"Lintang"=> "-7.436707",
				"Rute"=> "Jl. Perintis Kemerdekaan",
				"id"=> "1209"
			],
			[
				"Bujur"=> "109.238002",
				"Lintang"=> "-7.437197",
				"Rute"=> "Jl. Perintis Kemerdekaan",
				"id"=> "1210"
			],
			[
				"Bujur"=> "109.237423",
				"Lintang"=> "-7.437665",
				"Rute"=> "Jl. Perintis Kemerdekaan",
				"id"=> "1211"
			],
			[
				"Bujur"=> "109.236693",
				"Lintang"=> "-7.438197",
				"Rute"=> "Jl. Perintis Kemerdekaan",
				"id"=> "1212"
			],
			[
				"Bujur"=> "109.236168",
				"Lintang"=> "-7.438681",
				"Rute"=> "Jl. Perintis Kemerdekaan",
				"id"=> "1213"
			],
			[
				"Bujur"=> "109.235245",
				"Lintang"=> "-7.439468",
				"Rute"=> "Jl. Perintis Kemerdekaan",
				"id"=> "1214"
			],
			[
				"Bujur"=> "109.235181",
				"Lintang"=> "-7.440170",
				"Rute"=> "Jl. Perintis Kemerdekaan",
				"id"=> "1215"
			],
			[
				"Bujur"=> "109.235374",
				"Lintang"=> "-7.440979",
				"Rute"=> "Jl. Perintis Kemerdekaan",
				"id"=> "1216"
			],
			[
				"Bujur"=> "109.235502",
				"Lintang"=> "-7.441553",
				"Rute"=> "Jl. Perintis Kemerdekaan",
				"id"=> "1217"
			],
			[
				"Bujur"=> "109.235567",
				"Lintang"=> "-7.441893",
				"Rute"=> "Jl. Perintis Kemerdekaan",
				"id"=> "1218"
			],
			[
				"Bujur"=> "109.239191",
				"Lintang"=> "-7.436437",
				"Rute"=> "Jl. Patriot",
				"id"=> "1219"
			],
			[
				"Bujur"=> "109.239159",
				"Lintang"=> "-7.436714",
				"Rute"=> "Jl. Patriot",
				"id"=> "1220"
			],
			[
				"Bujur"=> "109.239191",
				"Lintang"=> "-7.437075",
				"Rute"=> "Jl. Patriot",
				"id"=> "1221"
			],
			[
				"Bujur"=> "109.239213",
				"Lintang"=> "-7.437395",
				"Rute"=> "Jl. Patriot",
				"id"=> "1222"
			],
			[
				"Bujur"=> "109.239213",
				"Lintang"=> "-7.437778",
				"Rute"=> "Jl. Patriot",
				"id"=> "1223"
			],
			[
				"Bujur"=> "109.239202",
				"Lintang"=> "-7.438012",
				"Rute"=> "Jl. Patriot",
				"id"=> "1224"
			],
			[
				"Bujur"=> "109.239299",
				"Lintang"=> "-7.438895",
				"Rute"=> "Jl. Patriot",
				"id"=> "1225"
			],
			[
				"Bujur"=> "109.239299",
				"Lintang"=> "-7.439214",
				"Rute"=> "Jl. Patriot",
				"id"=> "1226"
			],
			[
				"Bujur"=> "109.239320",
				"Lintang"=> "-7.439554",
				"Rute"=> "Jl. Patriot",
				"id"=> "1227"
			],
			[
				"Bujur"=> "109.239342",
				"Lintang"=> "-7.439863",
				"Rute"=> "Jl. Patriot",
				"id"=> "1228"
			],
			[
				"Bujur"=> "109.239384",
				"Lintang"=> "-7.440086",
				"Rute"=> "Jl. Patriot",
				"id"=> "1229"
			],
			[
				"Bujur"=> "109.239406",
				"Lintang"=> "-7.440469",
				"Rute"=> "Jl. Patriot",
				"id"=> "1230"
			],
			[
				"Bujur"=> "109.239438",
				"Lintang"=> "-7.440831",
				"Rute"=> "Jl. Patriot",
				"id"=> "1231"
			],
			[
				"Bujur"=> "109.226881",
				"Lintang"=> "-7.424429",
				"Rute"=> "Jl. Jenderal Sudirman Timur",
				"id"=> "1232"
			],
			[
				"Bujur"=> "109.227621",
				"Lintang"=> "-7.424530",
				"Rute"=> "Jl. Jenderal Sudirman Timur",
				"id"=> "1233"
			],
			[
				"Bujur"=> "109.228308",
				"Lintang"=> "-7.424679",
				"Rute"=> "Jl. Jenderal Sudirman Timur",
				"id"=> "1234"
			],
			[
				"Bujur"=> "109.228994",
				"Lintang"=> "-7.424807",
				"Rute"=> "Jl. Jenderal Sudirman Timur",
				"id"=> "1235"
			],
			[
				"Bujur"=> "109.229617",
				"Lintang"=> "-7.425020",
				"Rute"=> "Jl. Jenderal Sudirman Timur",
				"id"=> "1236"
			],
			[
				"Bujur"=> "109.230067",
				"Lintang"=> "-7.425084",
				"Rute"=> "Jl. Jenderal Sudirman Timur",
				"id"=> "1237"
			],
			[
				"Bujur"=> "109.232857",
				"Lintang"=> "-7.425679",
				"Rute"=> "Jl. Jenderal Sudirman Timur",
				"id"=> "1238"
			],
			[
				"Bujur"=> "109.233436",
				"Lintang"=> "-7.425871",
				"Rute"=> "Jl. Jenderal Sudirman Timur",
				"id"=> "1239"
			],
			[
				"Bujur"=> "109.234037",
				"Lintang"=> "-7.426062",
				"Rute"=> "Jl. Jenderal Sudirman Timur",
				"id"=> "1240"
			],
			[
				"Bujur"=> "109.234531",
				"Lintang"=> "-7.426211",
				"Rute"=> "Jl. Jenderal Sudirman Timur",
				"id"=> "1241"
			],
			[
				"Bujur"=> "109.235196",
				"Lintang"=> "-7.426381",
				"Rute"=> "Jl. Jenderal Sudirman Timur",
				"id"=> "1242"
			],
			[
				"Bujur"=> "109.224008",
				"Lintang"=> "-7.439720",
				"Rute"=> "Tanjung",
				"id"=> "1243"
			],
			[
				"Bujur"=> "109.224866",
				"Lintang"=> "-7.440189",
				"Rute"=> "Tanjung",
				"id"=> "1244"
			],
			[
				"Bujur"=> "109.221176",
				"Lintang"=> "-7.440699",
				"Rute"=> "Tanjung",
				"id"=> "1245"
			],
			[
				"Bujur"=> "109.229373",
				"Lintang"=> "-7.444327",
				"Rute"=> "Tanjung",
				"id"=> "1246"
			],
			[
				"Bujur"=> "109.231047",
				"Lintang"=> "-7.445220",
				"Rute"=> "Tanjung",
				"id"=> "1247"
			],
			[
				"Bujur"=> "109.216884",
				"Lintang"=> "-7.436880",
				"Rute"=> "Tanjung",
				"id"=> "1248"
			],
			[
				"Bujur"=> "109.219030",
				"Lintang"=> "-7.438029",
				"Rute"=> "Tanjung",
				"id"=> "1249"
			],
			[
				"Bujur"=> "109.219759",
				"Lintang"=> "-7.438369",
				"Rute"=> "Tanjung",
				"id"=> "1250"
			],
			[
				"Bujur"=> "109.220875",
				"Lintang"=> "-7.438795",
				"Rute"=> "Tanjung",
				"id"=> "1251"
			],
			[
				"Bujur"=> "109.221691",
				"Lintang"=> "-7.439220",
				"Rute"=> "Tanjung",
				"id"=> "1252"
			],
			[
				"Bujur"=> "109.223064",
				"Lintang"=> "-7.439689",
				"Rute"=> "Tanjung",
				"id"=> "1253"
			],
			[
				"Bujur"=> "109.224223",
				"Lintang"=> "-7.440284",
				"Rute"=> "Tanjung",
				"id"=> "1254"
			],
			[
				"Bujur"=> "109.225253",
				"Lintang"=> "-7.440965",
				"Rute"=> "Tanjung",
				"id"=> "1255"
			],
			[
				"Bujur"=> "109.227270",
				"Lintang"=> "-7.441859",
				"Rute"=> "Tanjung",
				"id"=> "1256"
			],
			[
				"Bujur"=> "109.230532",
				"Lintang"=> "-7.442284",
				"Rute"=> "Tanjung",
				"id"=> "1257"
			],
			[
				"Bujur"=> "109.231562",
				"Lintang"=> "-7.442369",
				"Rute"=> "Tanjung",
				"id"=> "1258"
			],
			[
				"Bujur"=> "109.232506",
				"Lintang"=> "-7.442369",
				"Rute"=> "Tanjung",
				"id"=> "1259"
			],
			[
				"Bujur"=> "109.219906",
				"Lintang"=> "-7.438721",
				"Rute"=> "Jl. Patikraja - Purwokerto",
				"id"=> "1260"
			],
			[
				"Bujur"=> "109.219648",
				"Lintang"=> "-7.439232",
				"Rute"=> "Jl. Patikraja - Purwokerto",
				"id"=> "1261"
			],
			[
				"Bujur"=> "109.219391",
				"Lintang"=> "-7.439849",
				"Rute"=> "Jl. Patikraja - Purwokerto",
				"id"=> "1262"
			],
			[
				"Bujur"=> "109.218833",
				"Lintang"=> "-7.440764",
				"Rute"=> "Jl. Patikraja - Purwokerto",
				"id"=> "1263"
			],
			[
				"Bujur"=> "109.218404",
				"Lintang"=> "-7.441721",
				"Rute"=> "Jl. Patikraja - Purwokerto",
				"id"=> "1264"
			],
			[
				"Bujur"=> "109.218017",
				"Lintang"=> "-7.442296",
				"Rute"=> "Jl. Patikraja - Purwokerto",
				"id"=> "1265"
			],
			[
				"Bujur"=> "109.217717",
				"Lintang"=> "-7.443061",
				"Rute"=> "Jl. Patikraja - Purwokerto",
				"id"=> "1266"
			],
			[
				"Bujur"=> "109.217481",
				"Lintang"=> "-7.443827",
				"Rute"=> "Jl. Patikraja - Purwokerto",
				"id"=> "1267"
			],
			[
				"Bujur"=> "109.217245",
				"Lintang"=> "-7.444593",
				"Rute"=> "Jl. Patikraja - Purwokerto",
				"id"=> "1268"
			],
			[
				"Bujur"=> "109.217009",
				"Lintang"=> "-7.445359",
				"Rute"=> "Jl. Patikraja - Purwokerto",
				"id"=> "1269"
			],
			[
				"Bujur"=> "109.216698",
				"Lintang"=> "-7.446269",
				"Rute"=> "Jl. Patikraja - Purwokerto",
				"id"=> "1270"
			],
			[
				"Bujur"=> "109.21644",
				"Lintang"=> "-7.447035",
				"Rute"=> "Jl. Patikraja - Purwokerto",
				"id"=> "1271"
			],
			[
				"Bujur"=> "109.216483",
				"Lintang"=> "-7.447546",
				"Rute"=> "Jl. Patikraja - Purwokerto",
				"id"=> "1272"
			],
			[
				"Bujur"=> "109.216505",
				"Lintang"=> "-7.447907",
				"Rute"=> "Jl. Patikraja - Purwokerto",
				"id"=> "1273"
			],
			[
				"Bujur"=> "109.200059",
				"Lintang"=> "-7.480368",
				"Rute"=> "Jl. Raya Notog",
				"id"=> "1274"
			],
			[
				"Bujur"=> "109.200327",
				"Lintang"=> "-7.480559",
				"Rute"=> "Jl. Raya Notog",
				"id"=> "1275"
			],
			[
				"Bujur"=> "109.200574",
				"Lintang"=> "-7.480719",
				"Rute"=> "Jl. Raya Notog",
				"id"=> "1276"
			],
			[
				"Bujur"=> "109.200885",
				"Lintang"=> "-7.480953",
				"Rute"=> "Jl. Raya Notog",
				"id"=> "1277"
			],
			[
				"Bujur"=> "109.201239",
				"Lintang"=> "-7.481187",
				"Rute"=> "Jl. Raya Notog",
				"id"=> "1278"
			],
			[
				"Bujur"=> "109.201711",
				"Lintang"=> "-7.481570",
				"Rute"=> "Jl. Raya Notog",
				"id"=> "1279"
			],
			[
				"Bujur"=> "109.202688",
				"Lintang"=> "-7.482006",
				"Rute"=> "Jl. Raya Notog",
				"id"=> "1280"
			],
			[
				"Bujur"=> "109.203106",
				"Lintang"=> "-7.482155",
				"Rute"=> "Jl. Raya Notog",
				"id"=> "1281"
			],
			[
				"Bujur"=> "109.203407",
				"Lintang"=> "-7.482312",
				"Rute"=> "Jl. Raya Notog",
				"id"=> "1282"
			],
			[
				"Bujur"=> "109.203761",
				"Lintang"=> "-7.482450",
				"Rute"=> "Jl. Raya Notog",
				"id"=> "1283"
			],
			[
				"Bujur"=> "109.204179",
				"Lintang"=> "-7.482641",
				"Rute"=> "Jl. Raya Notog",
				"id"=> "1284"
			],
			[
				"Bujur"=> "109.204619",
				"Lintang"=> "-7.482854",
				"Rute"=> "Jl. Raya Notog",
				"id"=> "1285"
			],
			[
				"Bujur"=> "109.205059",
				"Lintang"=> "-7.482961",
				"Rute"=> "Jl. Raya Notog",
				"id"=> "1286"
			],
			[
				"Bujur"=> "109.203010",
				"Lintang"=> "-7.482163",
				"Rute"=> "Jl. Raya Notog",
				"id"=> "1287"
			],
			[
				"Bujur"=> "109.203460",
				"Lintang"=> "-7.482333",
				"Rute"=> "Jl. Raya Notog",
				"id"=> "1288"
			],
			[
				"Bujur"=> "109.203857",
				"Lintang"=> "-7.482514",
				"Rute"=> "Jl. Raya Notog",
				"id"=> "1289"
			],
			[
				"Bujur"=> "109.204190",
				"Lintang"=> "-7.482610",
				"Rute"=> "Jl. Raya Notog",
				"id"=> "1290"
			],
			[
				"Bujur"=> "109.204662",
				"Lintang"=> "-7.482875",
				"Rute"=> "Jl. Raya Notog",
				"id"=> "1291"
			],
			[
				"Bujur"=> "109.205027",
				"Lintang"=> "-7.482971",
				"Rute"=> "Jl. Raya Notog",
				"id"=> "1292"
			],
			[
				"Bujur"=> "109.205424",
				"Lintang"=> "-7.483078",
				"Rute"=> "Jl. Raya Notog",
				"id"=> "1293"
			],
			[
				"Bujur"=> "109.206818",
				"Lintang"=> "-7.483344",
				"Rute"=> "Jl. Raya Notog",
				"id"=> "1294"
			],
			[
				"Bujur"=> "109.207366",
				"Lintang"=> "-7.483482",
				"Rute"=> "Jl. Raya Notog",
				"id"=> "1295"
			],
			[
				"Bujur"=> "109.208277",
				"Lintang"=> "-7.483397",
				"Rute"=> "Jl. Raya Notog",
				"id"=> "1296"
			],
			[
				"Bujur"=> "109.209919",
				"Lintang"=> "-7.483359",
				"Rute"=> "Jl. Raya Notog",
				"id"=> "1297"
			],
			[
				"Bujur"=> "109.212065",
				"Lintang"=> "-7.482615",
				"Rute"=> "Jl. Raya Notog",
				"id"=> "1298"
			],
			[
				"Bujur"=> "109.262542",
				"Lintang"=> "-7.437363",
				"Rute"=> "Jl. Suparjo Rustam",
				"id"=> "1299"
			],
			[
				"Bujur"=> "109.263637",
				"Lintang"=> "-7.437512",
				"Rute"=> "Jl. Suparjo Rustam",
				"id"=> "1230"
			],
			[
				"Bujur"=> "109.264967",
				"Lintang"=> "-7.437640",
				"Rute"=> "Jl. Suparjo Rustam",
				"id"=> "1301"
			],
			[
				"Bujur"=> "109.266319",
				"Lintang"=> "-7.438023",
				"Rute"=> "Jl. Suparjo Rustam",
				"id"=> "1302"
			],
			[
				"Bujur"=> "109.268744",
				"Lintang"=> "-7.439491",
				"Rute"=> "Jl. Suparjo Rustam",
				"id"=> "1303"
			],
			[
				"Bujur"=> "109.269452",
				"Lintang"=> "-7.440214",
				"Rute"=> "Jl. Suparjo Rustam",
				"id"=> "1304"
			],
			[
				"Bujur"=> "109.269194",
				"Lintang"=> "-7.439970",
				"Rute"=> "Jl. Suparjo Rustam",
				"id"=> "1305"
			],
			[
				"Bujur"=> "109.270696",
				"Lintang"=> "-7.441417",
				"Rute"=> "Jl. Suparjo Rustam",
				"id"=> "1306"
			],
			[
				"Bujur"=> "109.272670",
				"Lintang"=> "-7.443332",
				"Rute"=> "Jl. Suparjo Rustam",
				"id"=> "1307"
			],
			[
				"Bujur"=> "109.273400",
				"Lintang"=> "-7.444055",
				"Rute"=> "Jl. Suparjo Rustam",
				"id"=> "1308"
			],
			[
				"Bujur"=> "109.274516",
				"Lintang"=> "-7.445246",
				"Rute"=> "Jl. Suparjo Rustam",
				"id"=> "1309"
			],
			[
				"Bujur"=> "109.275674",
				"Lintang"=> "-7.446225",
				"Rute"=> "Jl. Suparjo Rustam",
				"id"=> "1310"
			],
			[
				"Bujur"=> "109.276490",
				"Lintang"=> "-7.447204",
				"Rute"=> "Jl. Suparjo Rustam",
				"id"=> "1311"
			],
			[
				"Bujur"=> "109.277734",
				"Lintang"=> "-7.448225",
				"Rute"=> "Jl. Suparjo Rustam",
				"id"=> "1312"
			],
			[
				"Bujur"=> "109.278936",
				"Lintang"=> "-7.449459",
				"Rute"=> "Jl. Suparjo Rustam",
				"id"=> "1313"
			],
			[
				"Bujur"=> "109.280223",
				"Lintang"=> "-7.450608",
				"Rute"=> "Jl. Suparjo Rustam",
				"id"=> "1314"
			],
			[
				"Bujur"=> "109.281382",
				"Lintang"=> "-7.451714",
				"Rute"=> "Jl. Suparjo Rustam",
				"id"=> "1315"
			],
			[
				"Bujur"=> "109.282927",
				"Lintang"=> "-7.453246",
				"Rute"=> "Jl. Suparjo Rustam",
				"id"=> "1316"
			],
			[
				"Bujur"=> "109.284172",
				"Lintang"=> "-7.454608",
				"Rute"=> "Jl. Suparjo Rustam",
				"id"=> "1317"
			],
			[
				"Bujur"=> "109.285459",
				"Lintang"=> "-7.455757",
				"Rute"=> "Jl. Suparjo Rustam",
				"id"=> "1318"
			],
			[
				"Bujur"=> "109.287262",
				"Lintang"=> "-7.457672",
				"Rute"=> "Jl. Suparjo Rustam",
				"id"=> "1319"
			],
			[
				"Bujur"=> "109.289107",
				"Lintang"=> "-7.457672",
				"Rute"=> "Jl. Suparjo Rustam",
				"id"=> "1320"
			],
			[
				"Bujur"=> "109.291510",
				"Lintang"=> "-7.457544",
				"Rute"=> "Jl. Suparjo Rustam",
				"id"=> "1321"
			],
			[
				"Bujur"=> "109.293999",
				"Lintang"=> "-7.457629",
				"Rute"=> "Jl. Suparjo Rustam",
				"id"=> "1322"
			],
			[
				"Bujur"=> "109.296317",
				"Lintang"=> "-7.457587",
				"Rute"=> "Jl. Suparjo Rustam",
				"id"=> "1323"
			],
			[
				"Bujur"=> "109.298420",
				"Lintang"=> "-7.457799",
				"Rute"=> "Jl. Suparjo Rustam",
				"id"=> "1324"
			],
			[
				"Bujur"=> "109.298978",
				"Lintang"=> "-7.460012",
				"Rute"=> "Jl. Suparjo Rustam",
				"id"=> "1325"
			],
			[
				"Bujur"=> "109.298978",
				"Lintang"=> "-7.462055",
				"Rute"=> "Jl. Suparjo Rustam",
				"id"=> "1326"
			],
			[
				"Bujur"=> "109.299321",
				"Lintang"=> "-7.464650",
				"Rute"=> "Jl. Suparjo Rustam",
				"id"=> "1327"
			],
			[
				"Bujur"=> "109.299664",
				"Lintang"=> "-7.467587",
				"Rute"=> "Jl. Suparjo Rustam",
				"id"=> "1328"
			],
			[
				"Bujur"=> "109.298782",
				"Lintang"=> "-7.460754",
				"Rute"=> "Pasar Sokaraja",
				"id"=> "1329"
			],
			[
				"Bujur"=> "109.298755",
				"Lintang"=> "-7.460722",
				"Rute"=> "Pasar Sokaraja",
				"id"=> "1330"
			],
			[
				"Bujur"=> "109.298749",
				"Lintang"=> "-7.460557",
				"Rute"=> "Pasar Sokaraja",
				"id"=> "1331"
			],
			[
				"Bujur"=> "109.298642",
				"Lintang"=> "-7.460450",
				"Rute"=> "Pasar Sokaraja",
				"id"=> "1332"
			],
			[
				"Bujur"=> "109.298363",
				"Lintang"=> "-7.460461",
				"Rute"=> "Pasar Sokaraja",
				"id"=> "1333"
			],
			[
				"Bujur"=> "109.298020",
				"Lintang"=> "-7.460493",
				"Rute"=> "Pasar Sokaraja",
				"id"=> "1334"
			],
			[
				"Bujur"=> "109.297875",
				"Lintang"=> "-7.460546",
				"Rute"=> "Pasar Sokaraja",
				"id"=> "1335"
			],
			[
				"Bujur"=> "109.297880",
				"Lintang"=> "-7.460743",
				"Rute"=> "Pasar Sokaraja",
				"id"=> "1336"
			],
			[
				"Bujur"=> "109.297907",
				"Lintang"=> "-7.460966",
				"Rute"=> "Pasar Sokaraja",
				"id"=> "1337"
			],
			[
				"Bujur"=> "109.297939",
				"Lintang"=> "-7.461333",
				"Rute"=> "Pasar Sokaraja",
				"id"=> "1338"
			],
			[
				"Bujur"=> "109.298122",
				"Lintang"=> "-7.461424",
				"Rute"=> "Pasar Sokaraja",
				"id"=> "1339"
			],
			[
				"Bujur"=> "109.298411",
				"Lintang"=> "-7.461424",
				"Rute"=> "Pasar Sokaraja",
				"id"=> "1340"
			],
			[
				"Bujur"=> "109.298664",
				"Lintang"=> "-7.461397",
				"Rute"=> "Pasar Sokaraja",
				"id"=> "1341"
			],
			[
				"Bujur"=> "109.298798",
				"Lintang"=> "-7.461371",
				"Rute"=> "Pasar Sokaraja",
				"id"=> "1342"
			],
			[
				"Bujur"=> "109.298792",
				"Lintang"=> "-7.461179",
				"Rute"=> "Pasar Sokaraja",
				"id"=> "1343"
			],
			[
				"Bujur"=> "109.298798",
				"Lintang"=> "-7.460908",
				"Rute"=> "Pasar Sokaraja",
				"id"=> "1344"
			],
			[
				"Bujur"=> "109.222423",
				"Lintang"=> "-7.419144",
				"Rute"=> "Jl. St.",
				"id"=> "1345"
			],
			[
				"Bujur"=> "109.222284",
				"Lintang"=> "-7.419378",
				"Rute"=> "Jl. St.",
				"id"=> "1346"
			],
			[
				"Bujur"=> "109.222230",
				"Lintang"=> "-7.419825",
				"Rute"=> "Jl. St.",
				"id"=> "1347"
			],
			[
				"Bujur"=> "109.222262",
				"Lintang"=> "-7.420144",
				"Rute"=> "Jl. St.",
				"id"=> "1348"
			],
			[
				"Bujur"=> "109.222305",
				"Lintang"=> "-7.420357",
				"Rute"=> "Jl. St.",
				"id"=> "1349"
			],
			[
				"Bujur"=> "109.222273",
				"Lintang"=> "-7.420899",
				"Rute"=> "Jl. St.",
				"id"=> "1350"
			],
			[
				"Bujur"=> "109.222262",
				"Lintang"=> "-7.421421",
				"Rute"=> "Jl. St.",
				"id"=> "1351"
			],
			[
				"Bujur"=> "109.222273",
				"Lintang"=> "-7.421782",
				"Rute"=> "Jl. St.",
				"id"=> "1352"
			],
			[
				"Bujur"=> "109.222337",
				"Lintang"=> "-7.422218",
				"Rute"=> "Jl. St.",
				"id"=> "1353"
			],
			[
				"Bujur"=> "109.222423",
				"Lintang"=> "-7.422612",
				"Rute"=> "Jl. St.",
				"id"=> "1354"
			],
			[
				"Bujur"=> "109.222455",
				"Lintang"=> "-7.423016",
				"Rute"=> "Jl. St.",
				"id"=> "1355"
			],
			[
				"Bujur"=> "109.222541",
				"Lintang"=> "-7.423602",
				"Rute"=> "Jl. St.",
				"id"=> "1356"
			],
			[
				"Bujur"=> "109.222466",
				"Lintang"=> "-7.420367",
				"Rute"=> "Jl. St.",
				"id"=> "1357"
			],
			[
				"Bujur"=> "109.222670",
				"Lintang"=> "-7.420655",
				"Rute"=> "Jl. St.",
				"id"=> "1358"
			],
			[
				"Bujur"=> "109.222659",
				"Lintang"=> "-7.421016",
				"Rute"=> "Jl. St.",
				"id"=> "1359"
			],
			[
				"Bujur"=> "109.222627",
				"Lintang"=> "-7.421442",
				"Rute"=> "Jl. St.",
				"id"=> "1360"
			],
			[
				"Bujur"=> "109.222573",
				"Lintang"=> "-7.421729",
				"Rute"=> "Jl. St.",
				"id"=> "1361"
			],
			[
				"Bujur"=> "109.222348",
				"Lintang"=> "-7.421793",
				"Rute"=> "Jl. St.",
				"id"=> "1362"
			],
			[
				"Bujur"=> "109.224783",
				"Lintang"=> "-7.407930",
				"Rute"=> "Jl. Kober",
				"id"=> "1363"
			],
			[
				"Bujur"=> "109.224923",
				"Lintang"=> "-7.408526",
				"Rute"=> "Jl. Kober",
				"id"=> "1364"
			],
			[
				"Bujur"=> "109.224869",
				"Lintang"=> "-7.408760",
				"Rute"=> "Jl. Kober",
				"id"=> "1365"
			],
			[
				"Bujur"=> "109.224773",
				"Lintang"=> "-7.408973",
				"Rute"=> "Jl. Kober",
				"id"=> "1366"
			],
			[
				"Bujur"=> "109.224655",
				"Lintang"=> "-7.409420",
				"Rute"=> "Jl. Kober",
				"id"=> "1367"
			],
			[
				"Bujur"=> "109.224462",
				"Lintang"=> "-7.409888",
				"Rute"=> "Jl. Kober",
				"id"=> "1368"
			],
			[
				"Bujur"=> "109.224322",
				"Lintang"=> "-7.410228",
				"Rute"=> "Jl. Kober",
				"id"=> "1369"
			],
			[
				"Bujur"=> "109.224193",
				"Lintang"=> "-7.410632",
				"Rute"=> "Jl. Kober",
				"id"=> "1370"
			],
			[
				"Bujur"=> "109.224043",
				"Lintang"=> "-7.411058",
				"Rute"=> "Jl. Kober",
				"id"=> "1371"
			],
			[
				"Bujur"=> "109.223764",
				"Lintang"=> "-7.411611",
				"Rute"=> "Jl. Kober",
				"id"=> "1372"
			],
			[
				"Bujur"=> "109.223635",
				"Lintang"=> "-7.411973",
				"Rute"=> "Jl. Kober",
				"id"=> "1373"
			],
			[
				"Bujur"=> "109.223249",
				"Lintang"=> "-7.412835",
				"Rute"=> "Jl. Kober",
				"id"=> "1374"
			],
			[
				"Bujur"=> "109.223067",
				"Lintang"=> "-7.413388",
				"Rute"=> "Jl. Kober",
				"id"=> "1375"
			],
			[
				"Bujur"=> "109.222981",
				"Lintang"=> "-7.413750",
				"Rute"=> "Jl. Kober",
				"id"=> "1376"
			],
			[
				"Bujur"=> "109.222788",
				"Lintang"=> "-7.414367",
				"Rute"=> "Jl. Kober",
				"id"=> "1377"
			],
			[
				"Bujur"=> "109.222756",
				"Lintang"=> "-7.414888",
				"Rute"=> "Jl. Kober",
				"id"=> "1378"
			],
			[
				"Bujur"=> "109.222713",
				"Lintang"=> "-7.415622",
				"Rute"=> "Jl. Kober",
				"id"=> "1379"
			],
			[
				"Bujur"=> "109.222681",
				"Lintang"=> "-7.416122",
				"Rute"=> "Jl. Kober",
				"id"=> "1380"
			],
			[
				"Bujur"=> "109.222659",
				"Lintang"=> "-7.416686",
				"Rute"=> "Jl. Kober",
				"id"=> "1381"
			],
			[
				"Bujur"=> "109.222638",
				"Lintang"=> "-7.417133",
				"Rute"=> "Jl. Kober",
				"id"=> "1382"
			],
			[
				"Bujur"=> "109.222584",
				"Lintang"=> "-7.417601",
				"Rute"=> "Jl. Kober",
				"id"=> "1383"
			],
			[
				"Bujur"=> "109.222552",
				"Lintang"=> "-7.418165",
				"Rute"=> "Jl. Kober",
				"id"=> "1384"
			],
			[
				"Bujur"=> "109.222530",
				"Lintang"=> "-7.418591",
				"Rute"=> "Jl. Kober",
				"id"=> "1385"
			],
			[
				"Bujur"=> "109.222520",
				"Lintang"=> "-7.418984",
				"Rute"=> "Jl. Kober",
				"id"=> "1386"
			],
			[
				"Bujur"=> "109.216216",
				"Lintang"=> "-7.409463",
				"Rute"=> "Jl. Kamandaka",
				"id"=> "1387"
			],
			[
				"Bujur"=> "109.217311",
				"Lintang"=> "-7.409315",
				"Rute"=> "Jl. Kamandaka",
				"id"=> "1388"
			],
			[
				"Bujur"=> "109.217912",
				"Lintang"=> "-7.409166",
				"Rute"=> "Jl. Kamandaka",
				"id"=> "1389"
			],
			[
				"Bujur"=> "109.218512",
				"Lintang"=> "-7.409038",
				"Rute"=> "Jl. Kamandaka",
				"id"=> "1390"
			],
			[
				"Bujur"=> "109.219607",
				"Lintang"=> "-7.408740",
				"Rute"=> "Jl. Kamandaka",
				"id"=> "1391"
			],
			[
				"Bujur"=> "109.220208",
				"Lintang"=> "-7.408634",
				"Rute"=> "Jl. Kamandaka",
				"id"=> "1392"
			],
			[
				"Bujur"=> "109.221044",
				"Lintang"=> "-7.408357",
				"Rute"=> "Jl. Kamandaka",
				"id"=> "1393"
			],
			[
				"Bujur"=> "109.221624",
				"Lintang"=> "-7.408272",
				"Rute"=> "Jl. Kamandaka",
				"id"=> "1394"
			],
			[
				"Bujur"=> "109.222289",
				"Lintang"=> "-7.408197",
				"Rute"=> "Jl. Kamandaka",
				"id"=> "1395"
			],
			[
				"Bujur"=> "109.222804",
				"Lintang"=> "-7.408112",
				"Rute"=> "Jl. Kamandaka",
				"id"=> "1396"
			],
			[
				"Bujur"=> "109.223448",
				"Lintang"=> "-7.408027",
				"Rute"=> "Jl. Kamandaka",
				"id"=> "1397"
			],
			[
				"Bujur"=> "109.224285",
				"Lintang"=> "-7.407963",
				"Rute"=> "Jl. Kamandaka",
				"id"=> "1398"
			],
			[
				"Bujur"=> "109.225272",
				"Lintang"=> "-7.407793",
				"Rute"=> "Jl. Kamandaka",
				"id"=> "1399"
			],
			[
				"Bujur"=> "109.218132",
				"Lintang"=> "-7.398014",
				"Rute"=> "Universitas Wijaya Kusuma Purwokerto",
				"id"=> "1400"
			],
			[
				"Bujur"=> "109.218024",
				"Lintang"=> "-7.398716",
				"Rute"=> "Universitas Wijaya Kusuma Purwokerto",
				"id"=> "1401"
			],
			[
				"Bujur"=> "109.217853",
				"Lintang"=> "-7.399418",
				"Rute"=> "Universitas Wijaya Kusuma Purwokerto",
				"id"=> "1402"
			],
			[
				"Bujur"=> "109.217703",
				"Lintang"=> "-7.399950",
				"Rute"=> "Universitas Wijaya Kusuma Purwokerto",
				"id"=> "1403"
			],
			[
				"Bujur"=> "109.217638",
				"Lintang"=> "-7.400461",
				"Rute"=> "Universitas Wijaya Kusuma Purwokerto",
				"id"=> "1404"
			],
			[
				"Bujur"=> "109.217539",
				"Lintang"=> "-7.401054",
				"Rute"=> "Universitas Wijaya Kusuma Purwokerto",
				"id"=> "1405"
			],
			[
				"Bujur"=> "109.218882",
				"Lintang"=> "-7.394165",
				"Rute"=> "Jl. Raya Beji Karangsalam",
				"id"=> "1406"
			],
			[
				"Bujur"=> "109.218775",
				"Lintang"=> "-7.394676",
				"Rute"=> "Jl. Raya Beji Karangsalam",
				"id"=> "1407"
			],
			[
				"Bujur"=> "109.218646",
				"Lintang"=> "-7.395400",
				"Rute"=> "Jl. Raya Beji Karangsalam",
				"id"=> "1408"
			],
			[
				"Bujur"=> "109.218496",
				"Lintang"=> "-7.396081",
				"Rute"=> "Jl. Raya Beji Karangsalam",
				"id"=> "1409"
			],
			[
				"Bujur"=> "109.218367",
				"Lintang"=> "-7.396698",
				"Rute"=> "Jl. Raya Beji Karangsalam",
				"id"=> "1410"
			],
			[
				"Bujur"=> "109.218174",
				"Lintang"=> "-7.397634",
				"Rute"=> "Jl. Raya Beji Karangsalam",
				"id"=> "1411"
			],
			[
				"Bujur"=> "109.218003",
				"Lintang"=> "-7.398443",
				"Rute"=> "Jl. Raya Beji Karangsalam",
				"id"=> "1412"
			],
			[
				"Bujur"=> "109.217895",
				"Lintang"=> "-7.399081",
				"Rute"=> "Jl. Raya Beji Karangsalam",
				"id"=> "1413"
			],
			[
				"Bujur"=> "109.217788",
				"Lintang"=> "-7.399847",
				"Rute"=> "Jl. Raya Beji Karangsalam",
				"id"=> "1414"
			],
			[
				"Bujur"=> "109.217552",
				"Lintang"=> "-7.400677",
				"Rute"=> "Jl. Raya Beji Karangsalam",
				"id"=> "1415"
			],
			[
				"Bujur"=> "109.217466",
				"Lintang"=> "-7.401422",
				"Rute"=> "Jl. Raya Beji Karangsalam",
				"id"=> "1416"
			],
			[
				"Bujur"=> "109.217316",
				"Lintang"=> "-7.402188",
				"Rute"=> "Jl. Raya Beji Karangsalam",
				"id"=> "1417"
			],
			[
				"Bujur"=> "109.217166",
				"Lintang"=> "-7.402698",
				"Rute"=> "Jl. Raya Beji Karangsalam",
				"id"=> "1418"
			],
			[
				"Bujur"=> "109.244592",
				"Lintang"=> "-7.400143",
				"Rute"=> "SPN Purwokerto",
				"id"=> "1419"
			],
			[
				"Bujur"=> "109.242531",
				"Lintang"=> "-7.399887",
				"Rute"=> "SPN Purwokerto",
				"id"=> "1420"
			],
			[
				"Bujur"=> "109.237123",
				"Lintang"=> "-7.399122",
				"Rute"=> "SPN Purwokerto",
				"id"=> "1421"
			],
			[
				"Bujur"=> "109.235149",
				"Lintang"=> "-7.398611",
				"Rute"=> "SPN Purwokerto",
				"id"=> "1422"
			],
			[
				"Bujur"=> "109.233260",
				"Lintang"=> "-7.398015",
				"Rute"=> "SPN Purwokerto",
				"id"=> "1423"
			],
			[
				"Bujur"=> "109.231887",
				"Lintang"=> "-7.397590",
				"Rute"=> "SPN Purwokerto",
				"id"=> "1424"
			],
			[
				"Bujur"=> "109.231629",
				"Lintang"=> "-7.401420",
				"Rute"=> "SPN Purwokerto",
				"id"=> "1425"
			],
			[
				"Bujur"=> "109.231458",
				"Lintang"=> "-7.403378",
				"Rute"=> "SPN Purwokerto",
				"id"=> "1426"
			],
			[
				"Bujur"=> "109.231458",
				"Lintang"=> "-7.405506",
				"Rute"=> "SPN Purwokerto",
				"id"=> "1427"
			],
			[
				"Bujur"=> "109.236424",
				"Lintang"=> "-7.399037",
				"Rute"=> "Jl. Riyanto",
				"id"=> "1428"
			],
			[
				"Bujur"=> "109.236821",
				"Lintang"=> "-7.399122",
				"Rute"=> "Jl. Riyanto",
				"id"=> "1429"
			],
			[
				"Bujur"=> "109.237067",
				"Lintang"=> "-7.399165",
				"Rute"=> "Jl. Riyanto",
				"id"=> "1430"
			],
			[
				"Bujur"=> "109.237293",
				"Lintang"=> "-7.399196",
				"Rute"=> "Jl. Riyanto",
				"id"=> "1431"
			],
			[
				"Bujur"=> "109.237711",
				"Lintang"=> "-7.399303",
				"Rute"=> "Jl. Riyanto",
				"id"=> "1432"
			],
			[
				"Bujur"=> "109.238033",
				"Lintang"=> "-7.399420",
				"Rute"=> "Jl. Riyanto",
				"id"=> "1433"
			],
			[
				"Bujur"=> "109.238312",
				"Lintang"=> "-7.399441",
				"Rute"=> "Jl. Riyanto",
				"id"=> "1434"
			],
			[
				"Bujur"=> "109.238688",
				"Lintang"=> "-7.399462",
				"Rute"=> "Jl. Riyanto",
				"id"=> "1435"
			],
			[
				"Bujur"=> "109.239095",
				"Lintang"=> "-7.399441",
				"Rute"=> "Jl. Riyanto",
				"id"=> "1436"
			],
			[
				"Bujur"=> "109.239342",
				"Lintang"=> "-7.399452",
				"Rute"=> "Jl. Riyanto",
				"id"=> "1437"
			],
			[
				"Bujur"=> "109.239653",
				"Lintang"=> "-7.399473",
				"Rute"=> "Jl. Riyanto",
				"id"=> "1438"
			],
			[
				"Bujur"=> "109.240168",
				"Lintang"=> "-7.399473",
				"Rute"=> "Jl. Riyanto",
				"id"=> "1438"
			],
			[
				"Bujur"=> "109.240544",
				"Lintang"=> "-7.399537",
				"Rute"=> "Jl. Riyanto",
				"id"=> "1440"
			],
			[
				"Bujur"=> "109.241123",
				"Lintang"=> "-7.399728",
				"Rute"=> "Jl. Riyanto",
				"id"=> "1441"
			],
			[
				"Bujur"=> "109.241380",
				"Lintang"=> "-7.399792",
				"Rute"=> "Jl. Riyanto",
				"id"=> "1442"
			],
			[
				"Bujur"=> "109.241659",
				"Lintang"=> "-7.399835",
				"Rute"=> "Jl. Riyanto",
				"id"=> "1443"
			],
			[
				"Bujur"=> "109.242250",
				"Lintang"=> "-7.399888",
				"Rute"=> "Jl. Riyanto",
				"id"=> "1444"
			],
			[
				"Bujur"=> "109.242668",
				"Lintang"=> "-7.399920",
				"Rute"=> "Jl. Riyanto",
				"id"=> "1445"
			],
			[
				"Bujur"=> "109.243194",
				"Lintang"=> "-7.400005",
				"Rute"=> "Jl. Riyanto",
				"id"=> "1446"
			],
			[
				"Bujur"=> "109.244578",
				"Lintang"=> "-7.400154",
				"Rute"=> "Jl. Riyanto",
				"id"=> "1447"
			],
			[
				"Bujur"=> "109.244857",
				"Lintang"=> "-7.400165",
				"Rute"=> "Jl. Riyanto",
				"id"=> "1448"
			],
			[
				"Bujur"=> "109.243521",
				"Lintang"=> "-7.416869",
				"Rute"=> "Jl. Jatiwinangun",
				"id"=> "1449"
			],
			[
				"Bujur"=> "109.243500",
				"Lintang"=> "-7.417198",
				"Rute"=> "Jl. Jatiwinangun",
				"id"=> "1450"
			],
			[
				"Bujur"=> "109.243457",
				"Lintang"=> "-7.417464",
				"Rute"=> "Jl. Jatiwinangun",
				"id"=> "1451"
			],
			[
				"Bujur"=> "109.243382",
				"Lintang"=> "-7.417805",
				"Rute"=> "Jl. Jatiwinangun",
				"id"=> "1452"
			],
			[
				"Bujur"=> "109.243350",
				"Lintang"=> "-7.418177",
				"Rute"=> "Jl. Jatiwinangun",
				"id"=> "1453"
			],
			[
				"Bujur"=> "109.243318",
				"Lintang"=> "-7.418443",
				"Rute"=> "Jl. Jatiwinangun",
				"id"=> "1454"
			],
			[
				"Bujur"=> "109.243253",
				"Lintang"=> "-7.418784",
				"Rute"=> "Jl. Jatiwinangun",
				"id"=> "1455"
			],
			[
				"Bujur"=> "109.243257",
				"Lintang"=> "-7.419262",
				"Rute"=> "Jl. Jatiwinangun",
				"id"=> "1456"
			],
			[
				"Bujur"=> "109.243124",
				"Lintang"=> "-7.419794",
				"Rute"=> "Jl. Jatiwinangun",
				"id"=> "1457"
			],
			[
				"Bujur"=> "109.243082",
				"Lintang"=> "-7.420316",
				"Rute"=> "Jl. Jatiwinangun",
				"id"=> "1458"
			],
			[
				"Bujur"=> "109.242996",
				"Lintang"=> "-7.420741",
				"Rute"=> "Jl. Jatiwinangun",
				"id"=> "1459"
			],
			[
				"Bujur"=> "109.242931",
				"Lintang"=> "-7.421124",
				"Rute"=> "Jl. Jatiwinangun",
				"id"=> "1460"
			],
			[
				"Bujur"=> "109.242899",
				"Lintang"=> "-7.421337",
				"Rute"=> "Jl. Jatiwinangun",
				"id"=> "1461"
			],
			[
				"Bujur"=> "109.242867",
				"Lintang"=> "-7.421752",
				"Rute"=> "Jl. Jatiwinangun",
				"id"=> "1462"
			],
			[
				"Bujur"=> "109.242824",
				"Lintang"=> "-7.422060",
				"Rute"=> "Jl. Jatiwinangun",
				"id"=> "1463"
			],
			[
				"Bujur"=> "109.242738",
				"Lintang"=> "-7.422475",
				"Rute"=> "Jl. Jatiwinangun",
				"id"=> "1464"
			],
			[
				"Bujur"=> "109.242663",
				"Lintang"=> "-7.422858",
				"Rute"=> "Jl. Jatiwinangun",
				"id"=> "1465"
			],
			[
				"Bujur"=> "109.225410",
				"Lintang"=> "-7.407756",
				"Rute"=> "Jl. Bobosan",
				"id"=> "1466"
			],
			[
				"Bujur"=> "109.225764",
				"Lintang"=> "-7.407788",
				"Rute"=> "Jl. Bobosan",
				"id"=> "1467"
			],
			[
				"Bujur"=> "109.226193",
				"Lintang"=> "-7.407766",
				"Rute"=> "Jl. Bobosan",
				"id"=> "1468"
			],
			[
				"Bujur"=> "109.226579",
				"Lintang"=> "-7.407809",
				"Rute"=> "Jl. Bobosan",
				"id"=> "1469"
			],
			[
				"Bujur"=> "109.227062",
				"Lintang"=> "-7.407883",
				"Rute"=> "Jl. Bobosan",
				"id"=> "1470"
			],
			[
				"Bujur"=> "109.227416",
				"Lintang"=> "-7.408032",
				"Rute"=> "Jl. Bobosan",
				"id"=> "1471"
			],
			[
				"Bujur"=> "109.227738",
				"Lintang"=> "-7.408149",
				"Rute"=> "Jl. Bobosan",
				"id"=> "1472"
			],
			[
				"Bujur"=> "109.228124",
				"Lintang"=> "-7.408362",
				"Rute"=> "Jl. Bobosan",
				"id"=> "1473"
			],
			[
				"Bujur"=> "109.228575",
				"Lintang"=> "-7.408522",
				"Rute"=> "Jl. Bobosan",
				"id"=> "1474"
			],
			[
				"Bujur"=> "109.228961",
				"Lintang"=> "-7.408522",
				"Rute"=> "Jl. Bobosan",
				"id"=> "1475"
			],
			[
				"Bujur"=> "109.229347",
				"Lintang"=> "-7.408543",
				"Rute"=> "Jl. Bobosan",
				"id"=> "1476"
			],
			[
				"Bujur"=> "109.229626",
				"Lintang"=> "-7.407851",
				"Rute"=> "Jl. Bobosan",
				"id"=> "1477"
			],
			[
				"Bujur"=> "109.229841",
				"Lintang"=> "-7.407575",
				"Rute"=> "Jl. Bobosan",
				"id"=> "1478"
			],
			[
				"Bujur"=> "109.230291",
				"Lintang"=> "-7.407532",
				"Rute"=> "Jl. Bobosan",
				"id"=> "1479"
			],
			[
				"Bujur"=> "109.230656",
				"Lintang"=> "-7.407522",
				"Rute"=> "Jl. Bobosan",
				"id"=> "1480"
			],
			[
				"Bujur"=> "109.23100",
				"Lintang"=> "-7.407596",
				"Rute"=> "Jl. Bobosan",
				"id"=> "1481"
			],
			[
				"Bujur"=> "109.238705",
				"Lintang"=> "-7.409987",
				"Rute"=> "Jl. Karang Kobar",
				"id"=> "1482"
			],
			[
				"Bujur"=> "109.238597",
				"Lintang"=> "-7.410307",
				"Rute"=> "Jl. Karang Kobar",
				"id"=> "1483"
			],
			[
				"Bujur"=> "109.238576",
				"Lintang"=> "-7.410690",
				"Rute"=> "Jl. Karang Kobar",
				"id"=> "1484"
			],
			[
				"Bujur"=> "109.238469",
				"Lintang"=> "-7.411104",
				"Rute"=> "Jl. Karang Kobar",
				"id"=> "1485"
			],
			[
				"Bujur"=> "109.238372",
				"Lintang"=> "-7.411519",
				"Rute"=> "Jl. Karang Kobar",
				"id"=> "1486"
			],
			[
				"Bujur"=> "109.238254",
				"Lintang"=> "-7.411817",
				"Rute"=> "Jl. Karang Kobar",
				"id"=> "1487"
			],
			[
				"Bujur"=> "109.238179",
				"Lintang"=> "-7.412062",
				"Rute"=> "Jl. Karang Kobar",
				"id"=> "1488"
			],
			[
				"Bujur"=> "109.238039",
				"Lintang"=> "-7.412637",
				"Rute"=> "Jl. Karang Kobar",
				"id"=> "1489"
			],
			[
				"Bujur"=> "109.237921",
				"Lintang"=> "-7.413115",
				"Rute"=> "Jl. Karang Kobar",
				"id"=> "1490"
			],
			[
				"Bujur"=> "109.237814",
				"Lintang"=> "-7.413466",
				"Rute"=> "Jl. Karang Kobar",
				"id"=> "1491"
			],
			[
				"Bujur"=> "109.237750",
				"Lintang"=> "-7.413807",
				"Rute"=> "Jl. Karang Kobar",
				"id"=> "1492"
			],
			[
				"Bujur"=> "109.237675",
				"Lintang"=> "-7.414179",
				"Rute"=> "Jl. Karang Kobar",
				"id"=> "1493"
			],
			[
				"Bujur"=> "109.237664",
				"Lintang"=> "-7.414647",
				"Rute"=> "Jl. Karang Kobar",
				"id"=> "1494"
			],
			[
				"Bujur"=> "109.237621",
				"Lintang"=> "-7.415094",
				"Rute"=> "Jl. Karang Kobar",
				"id"=> "1495"
			],
			[
				"Bujur"=> "109.237524",
				"Lintang"=> "-7.415520",
				"Rute"=> "Jl. Karang Kobar",
				"id"=> "1496"
			],
			[
				"Bujur"=> "109.237524",
				"Lintang"=> "-7.415520",
				"Rute"=> "Jl. Karang Kobar",
				"id"=> "1497"
			],
			[
				"Bujur"=> "109.282328",
				"Lintang"=> "-7.536256",
				"Rute"=> "Jl. Karang Wangkal",
				"id"=> "1498"
			],
			[
				"Bujur"=> "109.282328",
				"Lintang"=> "-7.536650",
				"Rute"=> "Jl. Karang Wangkal",
				"id"=> "1499"
			],
			[
				"Bujur"=> "109.282145",
				"Lintang"=> "-7.536894",
				"Rute"=> "Jl. Karang Wangkal",
				"id"=> "1500"
			],
			[
				"Bujur"=> "109.282027",
				"Lintang"=> "-7.537160",
				"Rute"=> "Jl. Karang Wangkal",
				"id"=> "1501"
			],
			[
				"Bujur"=> "109.281984",
				"Lintang"=> "-7.537415",
				"Rute"=> "Jl. Karang Wangkal",
				"id"=> "1502"
			],
			[
				"Bujur"=> "109.281898",
				"Lintang"=> "-7.537820",
				"Rute"=> "Jl. Karang Wangkal",
				"id"=> "1503"
			],
			[
				"Bujur"=> "109.281845",
				"Lintang"=> "-7.538139",
				"Rute"=> "Jl. Karang Wangkal",
				"id"=> "1504"
			],
			[
				"Bujur"=> "109.281813",
				"Lintang"=> "-7.538500",
				"Rute"=> "Jl. Karang Wangkal",
				"id"=> "1505"
			],
			[
				"Bujur"=> "109.281748",
				"Lintang"=> "-7.539043",
				"Rute"=> "Jl. Karang Wangkal",
				"id"=> "1506"
			],
			[
				"Bujur"=> "109.281770",
				"Lintang"=> "-7.539372",
				"Rute"=> "Jl. Karang Wangkal",
				"id"=> "1507"
			],
			[
				"Bujur"=> "109.281813",
				"Lintang"=> "-7.539691",
				"Rute"=> "Jl. Karang Wangkal",
				"id"=> "1508"
			],
			[
				"Bujur"=> "109.281748",
				"Lintang"=> "-7.540117",
				"Rute"=> "Jl. Karang Wangkal",
				"id"=> "1509"
			],
			[
				"Bujur"=> "109.281791",
				"Lintang"=> "-7.540574",
				"Rute"=> "Jl. Karang Wangkal",
				"id"=> "1510"
			],
			[
				"Bujur"=> "109.281974",
				"Lintang"=> "-7.541021",
				"Rute"=> "Jl. Karang Wangkal",
				"id"=> "1511"
			],
			[
				"Bujur"=> "109.282135",
				"Lintang"=> "-7.541361",
				"Rute"=> "Jl. Karang Wangkal",
				"id"=> "1512"
			],
			[
				"Bujur"=> "109.282467",
				"Lintang"=> "-7.541532",
				"Rute"=> "Jl. Karang Wangkal",
				"id"=> "1513"
			],
			[
				"Bujur"=> "109.282660",
				"Lintang"=> "-7.541819",
				"Rute"=> "Jl. Karang Wangkal",
				"id"=> "1514"
			],
			[
				"Bujur"=> "109.250385",
				"Lintang"=> "-7.402278",
				"Rute"=> "Jl. DR. Soeparno",
				"id"=> "1515"
			],
			[
				"Bujur"=> "109.250460",
				"Lintang"=> "-7.402672",
				"Rute"=> "Jl. DR. Soeparno",
				"id"=> "1516"
			],
			[
				"Bujur"=> "109.250599",
				"Lintang"=> "-7.403204",
				"Rute"=> "Jl. DR. Soeparno",
				"id"=> "1517"
			],
			[
				"Bujur"=> "109.250825",
				"Lintang"=> "-7.403619",
				"Rute"=> "Jl. DR. Soeparno",
				"id"=> "1518"
			],
			[
				"Bujur"=> "109.251168",
				"Lintang"=> "-7.404034",
				"Rute"=> "Jl. DR. Soeparno",
				"id"=> "1519"
			],
			[
				"Bujur"=> "109.251393",
				"Lintang"=> "-7.404310",
				"Rute"=> "Jl. DR. Soeparno",
				"id"=> "1520"
			],
			[
				"Bujur"=> "109.251565",
				"Lintang"=> "-7.404566",
				"Rute"=> "Jl. DR. Soeparno",
				"id"=> "1521"
			],
			[
				"Bujur"=> "109.251737",
				"Lintang"=> "-7.404885",
				"Rute"=> "Jl. DR. Soeparno",
				"id"=> "1522"
			],
			[
				"Bujur"=> "109.251930",
				"Lintang"=> "-7.405321",
				"Rute"=> "Jl. DR. Soeparno",
				"id"=> "1523"
			],
			[
				"Bujur"=> "109.252134",
				"Lintang"=> "-7.405789",
				"Rute"=> "Jl. DR. Soeparno",
				"id"=> "1524"
			],
			[
				"Bujur"=> "109.252294",
				"Lintang"=> "-7.406172",
				"Rute"=> "Jl. DR. Soeparno",
				"id"=> "1523"
			],
			[
				"Bujur"=> "109.252466",
				"Lintang"=> "-7.406555",
				"Rute"=> "Jl. DR. Soeparno",
				"id"=> "1524"
			],
			[
				"Bujur"=> "109.252648",
				"Lintang"=> "-7.406938",
				"Rute"=> "Jl. DR. Soeparno",
				"id"=> "1525"
			],
			[
				"Bujur"=> "109.252745",
				"Lintang"=> "-7.407172",
				"Rute"=> "Jl. DR. Soeparno",
				"id"=> "1526"
			],
			[
				"Bujur"=> "109.252885",
				"Lintang"=> "-7.407502",
				"Rute"=> "Jl. DR. Soeparno",
				"id"=> "1527"
			],
			[
				"Bujur"=> "109.253024",
				"Lintang"=> "-7.407885",
				"Rute"=> "Jl. DR. Soeparno",
				"id"=> "1528"
			],
			[
				"Bujur"=> "109.253174",
				"Lintang"=> "-7.408194",
				"Rute"=> "Jl. DR. Soeparno",
				"id"=> "1529"
			],
			[
				"Bujur"=> "109.253346",
				"Lintang"=> "-7.408640",
				"Rute"=> "Jl. DR. Soeparno",
				"id"=> "1532"
			],
			[
				"Bujur"=> "109.253528",
				"Lintang"=> "-7.409087",
				"Rute"=> "Jl. DR. Soeparno",
				"id"=> "1533"
			],
			[
				"Bujur"=> "109.253700",
				"Lintang"=> "-7.409428",
				"Rute"=> "Jl. DR. Soeparno",
				"id"=> "1534"
			],
			[
				"Bujur"=> "109.253904",
				"Lintang"=> "-7.409970",
				"Rute"=> "Jl. DR. Soeparno",
				"id"=> "1535"
			],
			[
				"Bujur"=> "109.253968",
				"Lintang"=> "-7.410513",
				"Rute"=> "Jl. DR. Soeparno",
				"id"=> "1536"
			],
			[
				"Bujur"=> "109.254000",
				"Lintang"=> "-7.410864",
				"Rute"=> "Jl. DR. Soeparno",
				"id"=> "1537"
			],
			[
				"Bujur"=> "109.254033",
				"Lintang"=> "-7.411364",
				"Rute"=> "Jl. DR. Soeparno",
				"id"=> "1538"
			],
			[
				"Bujur"=> "109.254054",
				"Lintang"=> "-7.412066",
				"Rute"=> "Jl. DR. Soeparno",
				"id"=> "1539"
			],
			[
				"Bujur"=> "109.254054",
				"Lintang"=> "-7.412545",
				"Rute"=> "Jl. DR. Soeparno",
				"id"=> "1540"
			],
			[
				"Bujur"=> "109.254086",
				"Lintang"=> "-7.413417",
				"Rute"=> "Jl. DR. Soeparno",
				"id"=> "1541"
			],
			[
				"Bujur"=> "109.254118",
				"Lintang"=> "-7.413928",
				"Rute"=> "Jl. DR. Soeparno",
				"id"=> "1542"
			],
			[
				"Bujur"=> "109.254118",
				"Lintang"=> "-7.414471",
				"Rute"=> "Jl. DR. Soeparno",
				"id"=> "1543"
			],
			[
				"Bujur"=> "109.254118",
				"Lintang"=> "-7.414949",
				"Rute"=> "Jl. DR. Soeparno",
				"id"=> "1544"
			],
			[
				"Bujur"=> "109.254108",
				"Lintang"=> "-7.415652",
				"Rute"=> "Jl. DR. Soeparno",
				"id"=> "1545"
			],
			[
				"Bujur"=> "109.254118",
				"Lintang"=> "-7.416152",
				"Rute"=> "Jl. DR. Soeparno",
				"id"=> "1546"
			],
			[
				"Bujur"=> "109.254140",
				"Lintang"=> "-7.416769",
				"Rute"=> "Jl. DR. Soeparno",
				"id"=> "1547"
			],
			[
				"Bujur"=> "109.254161",
				"Lintang"=> "-7.416811",
				"Rute"=> "Jl. DR. Soeparno",
				"id"=> "1548"
			],
			[
				"Bujur"=> "109.254247",
				"Lintang"=> "-7.417567",
				"Rute"=> "Jl. DR. Soeparno",
				"id"=> "1549"
			],
			[
				"Bujur"=> "109.254311",
				"Lintang"=> "-7.417971",
				"Rute"=> "Jl. DR. Soeparno",
				"id"=> "1550"
			],
			[
				"Bujur"=> "109.254344",
				"Lintang"=> "-7.418354",
				"Rute"=> "Jl. DR. Soeparno",
				"id"=> "1551"
			],
			[
				"Bujur"=> "109.254429",
				"Lintang"=> "-7.418928",
				"Rute"=> "Jl. DR. Soeparno",
				"id"=> "1552"
			],
			[
				"Bujur"=> "109.254483",
				"Lintang"=> "-7.419588",
				"Rute"=> "Jl. DR. Soeparno",
				"id"=> "1553"
			],
			[
				"Bujur"=> "109.254537",
				"Lintang"=> "-7.419960",
				"Rute"=> "Jl. DR. Soeparno",
				"id"=> "1554"
			],
			[
				"Bujur"=> "109.254547",
				"Lintang"=> "-7.420226",
				"Rute"=> "Jl. DR. Soeparno",
				"id"=> "1555"
			],
			[
				"Bujur"=> "109.254612",
				"Lintang"=> "-7.420982",
				"Rute"=> "Jl. DR. Soeparno",
				"id"=> "1556"
			],
			[
				"Bujur"=> "109.254687",
				"Lintang"=> "-7.421535",
				"Rute"=> "Jl. DR. Soeparno",
				"id"=> "1557"
			],
			[
				"Bujur"=> "109.254719",
				"Lintang"=> "-7.421769",
				"Rute"=> "Jl. DR. Soeparno",
				"id"=> "1558"
			],
			[
				"Bujur"=> "109.254773",
				"Lintang"=> "-7.422163",
				"Rute"=> "Jl. DR. Soeparno",
				"id"=> "1559"
			],
			[
				"Bujur"=> "109.254859",
				"Lintang"=> "-7.422578",
				"Rute"=> "Jl. DR. Soeparno",
				"id"=> "1560"
			],
			[
				"Bujur"=> "109.254880",
				"Lintang"=> "-7.422758",
				"Rute"=> "Jl. DR. Soeparno",
				"id"=> "1561"
			],
			[
				"Bujur"=> "109.254937",
				"Lintang"=> "-7.423103",
				"Rute"=> "Jl. Kaliputih",
				"id"=> "1562"
			],
			[
				"Bujur"=> "109.254980",
				"Lintang"=> "-7.423529",
				"Rute"=> "Jl. Kaliputih",
				"id"=> "1563"
			],
			[
				"Bujur"=> "109.255066",
				"Lintang"=> "-7.423869",
				"Rute"=> "Jl. Kaliputih",
				"id"=> "1564"
			],
			[
				"Bujur"=> "109.255173",
				"Lintang"=> "-7.424252",
				"Rute"=> "Jl. Kaliputih",
				"id"=> "1565"
			],
			[
				"Bujur"=> "109.255259",
				"Lintang"=> "-7.424614",
				"Rute"=> "Jl. Kaliputih",
				"id"=> "1566"
			],
			[
				"Bujur"=> "109.255345",
				"Lintang"=> "-7.425082",
				"Rute"=> "Jl. Kaliputih",
				"id"=> "1567"
			],
			[
				"Bujur"=> "109.255452",
				"Lintang"=> "-7.425529",
				"Rute"=> "Jl. Kaliputih",
				"id"=> "1568"
			],
			[
				"Bujur"=> "109.255581",
				"Lintang"=> "-7.426146",
				"Rute"=> "Jl. Kaliputih",
				"id"=> "1569"
			],
			[
				"Bujur"=> "109.255581",
				"Lintang"=> "-7.426593",
				"Rute"=> "Jl. Kaliputih",
				"id"=> "1570"
			],
			[
				"Bujur"=> "109.248762",
				"Lintang"=> "-7.426175",
				"Rute"=> "Jl. Vihara",
				"id"=> "1571"
			],
			[
				"Bujur"=> "109.248977",
				"Lintang"=> "-7.426175",
				"Rute"=> "Jl. Vihara",
				"id"=> "1572"
			],
			[
				"Bujur"=> "109.249213",
				"Lintang"=> "-7.426143",
				"Rute"=> "Jl. Vihara",
				"id"=> "1573"
			],
			[
				"Bujur"=> "109.249427",
				"Lintang"=> "-7.426122",
				"Rute"=> "Jl. Vihara",
				"id"=> "1574"
			],
			[
				"Bujur"=> "109.249685",
				"Lintang"=> "-7.426111",
				"Rute"=> "Jl. Vihara",
				"id"=> "1575"
			],
			[
				"Bujur"=> "109.250082",
				"Lintang"=> "-7.426079",
				"Rute"=> "Jl. Vihara",
				"id"=> "1576"
			],
			[
				"Bujur"=> "109.250543",
				"Lintang"=> "-7.426048",
				"Rute"=> "Jl. Vihara",
				"id"=> "1577"
			],
			[
				"Bujur"=> "109.250833",
				"Lintang"=> "-7.426037",
				"Rute"=> "Jl. Vihara",
				"id"=> "1578"
			],
			[
				"Bujur"=> "109.245661",
				"Lintang"=> "-7.405760",
				"Rute"=> "Jl. Cendrawasih",
				"id"=> "1579"
			],
			[
				"Bujur"=> "109.245790",
				"Lintang"=> "-7.406739",
				"Rute"=> "Jl. Cendrawasih",
				"id"=> "1580"
			],
			[
				"Bujur"=> "109.245876",
				"Lintang"=> "-7.407761",
				"Rute"=> "Jl. Cendrawasih",
				"id"=> "1581"
			],
			[
				"Bujur"=> "109.245961",
				"Lintang"=> "-7.408697",
				"Rute"=> "Jl. Cendrawasih",
				"id"=> "1582"
			],
			[
				"Bujur"=> "109.246348",
				"Lintang"=> "-7.409803",
				"Rute"=> "Jl. Cendrawasih",
				"id"=> "1583"
			],
			[
				"Bujur"=> "109.245919",
				"Lintang"=> "-7.410952",
				"Rute"=> "Jl. Cendrawasih",
				"id"=> "1584"
			],
			[
				"Bujur"=> "109.246734",
				"Lintang"=> "-7.411335",
				"Rute"=> "Jl. Cendrawasih",
				"id"=> "1585"
			],
			[
				"Bujur"=> "109.247549",
				"Lintang"=> "-7.412059",
				"Rute"=> "Jl. Cendrawasih",
				"id"=> "1586"
			],
			[
				"Bujur"=> "109.234359",
				"Lintang"=> "-7.392869",
				"Rute"=> "Sumampir",
				"id"=> "1587"
			],
			[
				"Bujur"=> "109.234402",
				"Lintang"=> "-7.393720",
				"Rute"=> "Sumampir",
				"id"=> "1588"
			],
			[
				"Bujur"=> "109.234444",
				"Lintang"=> "-7.394656",
				"Rute"=> "Sumampir",
				"id"=> "1589"
			],
			[
				"Bujur"=> "109.234530",
				"Lintang"=> "-7.395593",
				"Rute"=> "Sumampir",
				"id"=> "1590"
			],
			[
				"Bujur"=> "109.234273",
				"Lintang"=> "-7.396571",
				"Rute"=> "Sumampir",
				"id"=> "1591"
			],
			[
				"Bujur"=> "109.233844",
				"Lintang"=> "-7.397465",
				"Rute"=> "Sumampir",
				"id"=> "1592"
			],
			[
				"Bujur"=> "109.233672",
				"Lintang"=> "-7.398487",
				"Rute"=> "Sumampir",
				"id"=> "1583"
			],
			[
				"Bujur"=> "109.233972",
				"Lintang"=> "-7.399125",
				"Rute"=> "Sumampir",
				"id"=> "1594"
			],
			[
				"Bujur"=> "109.234230",
				"Lintang"=> "-7.401976",
				"Rute"=> "Sumampir",
				"id"=> "1595"
			],
			[
				"Bujur"=> "109.234659",
				"Lintang"=> "-7.403040",
				"Rute"=> "Sumampir",
				"id"=> "1596"
			],
			[
				"Bujur"=> "109.234445",
				"Lintang"=> "-7.406019",
				"Rute"=> "Sumampir",
				"id"=> "1597"
			],
			[
				"Bujur"=> "109.235517",
				"Lintang"=> "-7.405934",
				"Rute"=> "Sumampir",
				"id"=> "1598"
			],
			[
				"Bujur"=> "109.236633",
				"Lintang"=> "-7.406445",
				"Rute"=> "Sumampir",
				"id"=> "1599"
			],
			[
				"Bujur"=> "109.237749",
				"Lintang"=> "-7.407466",
				"Rute"=> "Sumampir",
				"id"=> "1600"
			],
			[
				"Bujur"=> "109.239423",
				"Lintang"=> "-7.408190",
				"Rute"=> "Sumampir",
				"id"=> "1601"
			],
			[
				"Bujur"=> "109.240796",
				"Lintang"=> "-7.408786",
				"Rute"=> "Sumampir",
				"id"=> "1602"
			],
			[
				"Bujur"=> "109.241397",
				"Lintang"=> "-7.407509",
				"Rute"=> "Sumampir",
				"id"=> "1603"
			],
			[
				"Bujur"=> "109.241354",
				"Lintang"=> "-7.404487",
				"Rute"=> "Sumampir",
				"id"=> "1604"
			],
			[
				"Bujur"=> "109.244144",
				"Lintang"=> "-7.402700",
				"Rute"=> "Sumampir",
				"id"=> "1605"
			],
			[
				"Bujur"=> "109.243843",
				"Lintang"=> "-7.399380",
				"Rute"=> "Sumampir",
				"id"=> "1606"
			],
			[
				"Bujur"=> "109.241225",
				"Lintang"=> "-7.396997",
				"Rute"=> "Sumampir",
				"id"=> "1607"
			],
			[
				"Bujur"=> "109.239208",
				"Lintang"=> "-7.392401",
				"Rute"=> "Sumampir",
				"id"=> "1608"
			],
			[
				"Bujur"=> "109.237406",
				"Lintang"=> "-7.391720",
				"Rute"=> "Sumampir",
				"id"=> "1609"
			],
			[
				"Bujur"=> "109.253532",
				"Lintang"=> "-7.429332",
				"Rute"=> "Jl. Pancurawis",
				"id"=> "1610"
			],
			[
				"Bujur"=> "109.253543",
				"Lintang"=> "-7.429896",
				"Rute"=> "Jl. Pancurawis",
				"id"=> "1611"
			],
			[
				"Bujur"=> "109.253532",
				"Lintang"=> "-7.430269",
				"Rute"=> "Jl. Pancurawis",
				"id"=> "1612"
			],
			[
				"Bujur"=> "109.253543",
				"Lintang"=> "-7.430513",
				"Rute"=> "Jl. Pancurawis",
				"id"=> "1613"
			],
			[
				"Bujur"=> "109.253543",
				"Lintang"=> "-7.430854",
				"Rute"=> "Jl. Pancurawis",
				"id"=> "1614"
			],
			[
				"Bujur"=> "109.253564",
				"Lintang"=> "-7.431173",
				"Rute"=> "Jl. Pancurawis",
				"id"=> "1615"
			],
			[
				"Bujur"=> "109.253553",
				"Lintang"=> "-7.431577",
				"Rute"=> "Jl. Pancurawis",
				"id"=> "1616"
			],
			[
				"Bujur"=> "109.253639",
				"Lintang"=> "-7.432067",
				"Rute"=> "Jl. Pancurawis",
				"id"=> "1617"
			],
			[
				"Bujur"=> "109.253789",
				"Lintang"=> "-7.432396",
				"Rute"=> "Jl. Pancurawis",
				"id"=> "1618"
			],
			[
				"Bujur"=> "109.253918",
				"Lintang"=> "-7.432684",
				"Rute"=> "Jl. Pancurawis",
				"id"=> "1619"
			],
			[
				"Bujur"=> "109.254079",
				"Lintang"=> "-7.432939",
				"Rute"=> "Jl. Pancurawis",
				"id"=> "1620"
			],
			[
				"Bujur"=> "109.254208",
				"Lintang"=> "-7.433237",
				"Rute"=> "Jl. Pancurawis",
				"id"=> "1621"
			],
			[
				"Bujur"=> "109.254347",
				"Lintang"=> "-7.433769",
				"Rute"=> "Jl. Pancurawis",
				"id"=> "1622"
			],
			[
				"Bujur"=> "109.254304",
				"Lintang"=> "-7.434237",
				"Rute"=> "Jl. Pancurawis",
				"id"=> "1623"
			],
			[
				"Bujur"=> "109.254261",
				"Lintang"=> "-7.434726",
				"Rute"=> "Jl. Pancurawis",
				"id"=> "1624"
			],
			[
				"Bujur"=> "109.254229",
				"Lintang"=> "-7.435418",
				"Rute"=> "Jl. Pancurawis",
				"id"=> "1625"
			],
			[
				"Bujur"=> "109.254208",
				"Lintang"=> "-7.435992",
				"Rute"=> "Jl. Pancurawis",
				"id"=> "1626"
			],
			[
				"Bujur"=> "109.254240",
				"Lintang"=> "-7.436471",
				"Rute"=> "Jl. Pancurawis",
				"id"=> "1627"
			],
			[
				"Bujur"=> "109.254261",
				"Lintang"=> "-7.436918",
				"Rute"=> "Jl. Pancurawis",
				"id"=> "1628"
			],
			[
				"Bujur"=> "109.254272",
				"Lintang"=> "-7.437386",
				"Rute"=> "Jl. Pancurawis",
				"id"=> "1629"
			],
			[
				"Bujur"=> "109.254401",
				"Lintang"=> "-7.437769",
				"Rute"=> "Jl. Pancurawis",
				"id"=> "1630"
			],
			[
				"Bujur"=> "109.254476",
				"Lintang"=> "-7.438109",
				"Rute"=> "Jl. Pancurawis",
				"id"=> "1631"
			],
			[
				"Bujur"=> "109.244892",
				"Lintang"=> "-7.416932",
				"Rute"=> "Jl. Prof. Dr. Suharso",
				"id"=> "1632"
			],
			[
				"Bujur"=> "109.245278",
				"Lintang"=> "-7.417028",
				"Rute"=> "Jl. Prof. Dr. Suharso",
				"id"=> "1633"
			],
			[
				"Bujur"=> "109.245815",
				"Lintang"=> "-7.417039",
				"Rute"=> "Jl. Prof. Dr. Suharso",
				"id"=> "1634"
			],
			[
				"Bujur"=> "109.246222",
				"Lintang"=> "-7.417092",
				"Rute"=> "Jl. Prof. Dr. Suharso",
				"id"=> "1635"
			],
			[
				"Bujur"=> "109.246566",
				"Lintang"=> "-7.417081",
				"Rute"=> "Jl. Prof. Dr. Suharso",
				"id"=> "1636"
			],
			[
				"Bujur"=> "109.246930",
				"Lintang"=> "-7.417113",
				"Rute"=> "Jl. Prof. Dr. Suharso",
				"id"=> "1637"
			],
			[
				"Bujur"=> "109.247445",
				"Lintang"=> "-7.417113",
				"Rute"=> "Jl. Prof. Dr. Suharso",
				"id"=> "1638"
			],
			[
				"Bujur"=> "109.247735",
				"Lintang"=> "-7.417135",
				"Rute"=> "Jl. Prof. Dr. Suharso",
				"id"=> "1639"
			],
			[
				"Bujur"=> "109.248153",
				"Lintang"=> "-7.417156",
				"Rute"=> "Jl. Prof. Dr. Suharso",
				"id"=> "1640"
			],
			[
				"Bujur"=> "109.248647",
				"Lintang"=> "-7.417198",
				"Rute"=> "Jl. Prof. Dr. Suharso",
				"id"=> "1641"
			],
			[
				"Bujur"=> "109.249065",
				"Lintang"=> "-7.417220",
				"Rute"=> "Jl. Prof. Dr. Suharso",
				"id"=> "1642"
			],
			[
				"Bujur"=> "109.249473",
				"Lintang"=> "-7.417252",
				"Rute"=> "Jl. Prof. Dr. Suharso",
				"id"=> "1643"
			],
			[
				"Bujur"=> "109.249773",
				"Lintang"=> "-7.417283",
				"Rute"=> "Jl. Prof. Dr. Suharso",
				"id"=> "1644"
			],
			[
				"Bujur"=> "109.249967",
				"Lintang"=> "-7.417294",
				"Rute"=> "Jl. Prof. Dr. Suharso",
				"id"=> "1645"
			],
			[
				"Bujur"=> "109.250246",
				"Lintang"=> "-7.417294",
				"Rute"=> "Jl. Prof. Dr. Suharso",
				"id"=> "1646"
			],
			[
				"Bujur"=> "109.250793",
				"Lintang"=> "-7.417379",
				"Rute"=> "Jl. Prof. Dr. Suharso",
				"id"=> "1647"
			],
			[
				"Bujur"=> "109.251640",
				"Lintang"=> "-7.417475",
				"Rute"=> "Jl. Prof. Dr. Suharso",
				"id"=> "1648"
			],
			[
				"Bujur"=> "109.252080",
				"Lintang"=> "-7.417518",
				"Rute"=> "Jl. Prof. Dr. Suharso",
				"id"=> "1649"
			],
			[
				"Bujur"=> "109.252434",
				"Lintang"=> "-7.417517",
				"Rute"=> "Jl. Prof. Dr. Suharso",
				"id"=> "1650"
			],
			[
				"Bujur"=> "109.253336",
				"Lintang"=> "-7.417613",
				"Rute"=> "Jl. Prof. Dr. Suharso",
				"id"=> "1651"
			],
			[
				"Bujur"=> "109.253936",
				"Lintang"=> "-7.417666",
				"Rute"=> "Jl. Prof. Dr. Suharso",
				"id"=> "1652"
			],
			[
				"Bujur"=> "109.231212",
				"Lintang"=> "-7.407566",
				"Rute"=> "Jl. Brigjend. Encung",
				"id"=> "1653"
			],
			[
				"Bujur"=> "109.231706",
				"Lintang"=> "-7.407619",
				"Rute"=> "Jl. Brigjend. Encung",
				"id"=> "1654"
			],
			[
				"Bujur"=> "109.232328",
				"Lintang"=> "-7.407640",
				"Rute"=> "Jl. Brigjend. Encung",
				"id"=> "1656"
			],
			[
				"Bujur"=> "109.232822",
				"Lintang"=> "-7.407640",
				"Rute"=> "Jl. Brigjend. Encung",
				"id"=> "1657"
			],
			[
				"Bujur"=> "109.233380",
				"Lintang"=> "-7.407747",
				"Rute"=> "Jl. Brigjend. Encung",
				"id"=> "1658"
			],
			[
				"Bujur"=> "109.233691",
				"Lintang"=> "-7.407768",
				"Rute"=> "Jl. Brigjend. Encung",
				"id"=> "1659"
			],
			[
				"Bujur"=> "109.234055",
				"Lintang"=> "-7.407821",
				"Rute"=> "Jl. Brigjend. Encung",
				"id"=> "1660"
			],
			[
				"Bujur"=> "109.234506",
				"Lintang"=> "-7.407864",
				"Rute"=> "Jl. Brigjend. Encung",
				"id"=> "1660"
			],
			[
				"Bujur"=> "109.234882",
				"Lintang"=> "-7.407928",
				"Rute"=> "Jl. Brigjend. Encung",
				"id"=> "1661"
			],
			[
				"Bujur"=> "109.235161",
				"Lintang"=> "-7.407949",
				"Rute"=> "Jl. Brigjend. Encung",
				"id"=> "1662"
			],
			[
				"Bujur"=> "109.235729",
				"Lintang"=> "-7.408034",
				"Rute"=> "Jl. Brigjend. Encung",
				"id"=> "1663"
			],
			[
				"Bujur"=> "109.236459",
				"Lintang"=> "-7.408172",
				"Rute"=> "Jl. Brigjend. Encung",
				"id"=> "1664"
			],
			[
				"Bujur"=> "109.237070",
				"Lintang"=> "-7.408289",
				"Rute"=> "Jl. Brigjend. Encung",
				"id"=> "1665"
			],
			[
				"Bujur"=> "109.237499",
				"Lintang"=> "-7.408385",
				"Rute"=> "Jl. Brigjend. Encung",
				"id"=> "1666"
			],
			[
				"Bujur"=> "109.237778",
				"Lintang"=> "-7.408470",
				"Rute"=> "Jl. Brigjend. Encung",
				"id"=> "1667"
			],
			[
				"Bujur"=> "109.238293",
				"Lintang"=> "-7.408598",
				"Rute"=> "Jl. Brigjend. Encung",
				"id"=> "1668"
			],
			[
				"Bujur"=> "109.238808",
				"Lintang"=> "-7.408747",
				"Rute"=> "Jl. Brigjend. Encung",
				"id"=> "1669"
			],
			[
				"Bujur"=> "109.217128",
				"Lintang"=> "-7.402893",
				"Rute"=> "Jl. KS Tubun",
				"id"=> "1670"
			],
			[
				"Bujur"=> "109.217042",
				"Lintang"=> "-7.404276",
				"Rute"=> "Jl. KS Tubun",
				"id"=> "1671"
			],
			[
				"Bujur"=> "109.216828",
				"Lintang"=> "-7.405595",
				"Rute"=> "Jl. KS Tubun",
				"id"=> "1672"
			],
			[
				"Bujur"=> "109.216570",
				"Lintang"=> "-7.406744",
				"Rute"=> "Jl. KS Tubun",
				"id"=> "1673"
			],
			[
				"Bujur"=> "109.216442",
				"Lintang"=> "-7.407979",
				"Rute"=> "Jl. KS Tubun",
				"id"=> "1674"
			],
			[
				"Bujur"=> "109.216184",
				"Lintang"=> "-7.409085",
				"Rute"=> "Jl. KS Tubun",
				"id"=> "1675"
			],
			[
				"Bujur"=> "109.216098",
				"Lintang"=> "-7.409809",
				"Rute"=> "Jl. KS Tubun",
				"id"=> "1676"
			],
			[
				"Bujur"=> "109.215841",
				"Lintang"=> "-7.411383",
				"Rute"=> "Jl. KS Tubun",
				"id"=> "1677"
			],
			[
				"Bujur"=> "109.215755",
				"Lintang"=> "-7.412064",
				"Rute"=> "Jl. KS Tubun",
				"id"=> "1678"
			],
			[
				"Bujur"=> "109.216313",
				"Lintang"=> "-7.414532",
				"Rute"=> "Jl. KS Tubun",
				"id"=> "1679"
			],
			[
				"Bujur"=> "109.216785",
				"Lintang"=> "-7.416362",
				"Rute"=> "Jl. KS Tubun",
				"id"=> "1680"
			],
			[
				"Bujur"=> "109.217086",
				"Lintang"=> "-7.418788",
				"Rute"=> "Jl. KS Tubun",
				"id"=> "1681"
			],
			[
				"Bujur"=> "109.217128",
				"Lintang"=> "-7.419724",
				"Rute"=> "Jl. KS Tubun",
				"id"=> "1682"
			],
			[
				"Bujur"=> "109.217300",
				"Lintang"=> "-7.421299",
				"Rute"=> "Jl. KS Tubun",
				"id"=> "1683"
			],
			[
				"Bujur"=> "109.217515",
				"Lintang"=> "-7.422916",
				"Rute"=> "Jl. KS Tubun",
				"id"=> "1684"
			],
			[
				"Bujur"=> "109.252844",
				"Lintang"=> "-7.42359",
				"Rute"=> "Jl. Penatusan",
				"id"=> "1685"
			],
			[
				"Bujur"=> "109.252865",
				"Lintang"=> "-7.424015",
				"Rute"=> "Jl. Penatusan",
				"id"=> "1686"
			],
			[
				"Bujur"=> "109.252898",
				"Lintang"=> "-7.424313",
				"Rute"=> "Jl. Penatusan",
				"id"=> "1687"
			],
			[
				"Bujur"=> "109.252930",
				"Lintang"=> "-7.424622",
				"Rute"=> "Jl. Penatusan",
				"id"=> "1688"
			],
			[
				"Bujur"=> "109.252941",
				"Lintang"=> "-7.424898",
				"Rute"=> "Jl. Penatusan",
				"id"=> "1689"
			],
			[
				"Bujur"=> "109.252962",
				"Lintang"=> "-7.425111",
				"Rute"=> "Jl. Penatusan",
				"id"=> "1690"
			],
			[
				"Bujur"=> "109.253134",
				"Lintang"=> "-7.425345",
				"Rute"=> "Jl. Penatusan",
				"id"=> "1691"
			],
			[
				"Bujur"=> "109.253134",
				"Lintang"=> "-7.425654",
				"Rute"=> "Jl. Penatusan",
				"id"=> "1692"
			],
			[
				"Bujur"=> "109.253166",
				"Lintang"=> "-7.426015",
				"Rute"=> "Jl. Penatusan",
				"id"=> "1693"
			],
			[
				"Bujur"=> "109.253230",
				"Lintang"=> "-7.426409",
				"Rute"=> "Jl. Penatusan",
				"id"=> "1694"
			],
			[
				"Bujur"=> "109.253295",
				"Lintang"=> "-7.426920",
				"Rute"=> "Jl. Penatusan",
				"id"=> "1695"
			],
			[
				"Bujur"=> "109.253316",
				"Lintang"=> "-7.427186",
				"Rute"=> "Jl. Penatusan",
				"id"=> "1696"
			],
			[
				"Bujur"=> "109.253348",
				"Lintang"=> "-7.427505",
				"Rute"=> "Jl. Penatusan",
				"id"=> "1697"
			],
			[
				"Bujur"=> "109.251546",
				"Lintang"=> "-7.426079",
				"Rute"=> "Jl. Penatusan",
				"id"=> "1698"
			],
			[
				"Bujur"=> "109.251911",
				"Lintang"=> "-7.426143",
				"Rute"=> "Jl. Penatusan",
				"id"=> "1699"
			],
			[
				"Bujur"=> "109.252340",
				"Lintang"=> "-7.426133",
				"Rute"=> "Jl. Penatusan",
				"id"=> "1670"
			],
			[
				"Bujur"=> "109.252715",
				"Lintang"=> "-7.426154",
				"Rute"=> "Jl. Penatusan",
				"id"=> "1701"
			],
			[
				"Bujur"=> "109.253069",
				"Lintang"=> "-7.426175",
				"Rute"=> "Jl. Penatusan",
				"id"=> "1702"
			],
			[
				"Bujur"=> "109.255355",
				"Lintang"=> "-7.426622",
				"Rute"=> "Jl. Penatusan",
				"id"=> "1703"
			],
			[
				"Bujur"=> "109.254829",
				"Lintang"=> "-7.426633",
				"Rute"=> "Jl. Penatusan",
				"id"=> "1704"
			],
			[
				"Bujur"=> "109.254217",
				"Lintang"=> "-7.426622",
				"Rute"=> "Jl. Penatusan",
				"id"=> "1705"
			],
			[
				"Bujur"=> "109.253756",
				"Lintang"=> "-7.426611",
				"Rute"=> "Jl. Penatusan",
				"id"=> "1706"
			],
			[
				"Bujur"=> "109.253370",
				"Lintang"=> "-7.426664",
				"Rute"=> "Jl. Penatusan",
				"id"=> "1707"
			],
			[
				"Bujur"=> "109.269910",
				"Lintang"=> "-7.428571",
				"Rute"=> "Jl. Dr. Gumbreg",
				"id"=> "1708"
			],
			[
				"Bujur"=> "109.270061",
				"Lintang"=> "-7.429379",
				"Rute"=> "Jl. Dr. Gumbreg",
				"id"=> "1709"
			],
			[
				"Bujur"=> "109.270318",
				"Lintang"=> "-7.430401",
				"Rute"=> "Jl. Dr. Gumbreg",
				"id"=> "1710"
			],
			[
				"Bujur"=> "109.270404",
				"Lintang"=> "-7.431252",
				"Rute"=> "Jl. Dr. Gumbreg",
				"id"=> "1711"
			],
			[
				"Bujur"=> "109.270511",
				"Lintang"=> "-7.432039",
				"Rute"=> "Jl. Dr. Gumbreg",
				"id"=> "1712"
			],
			[
				"Bujur"=> "109.270297",
				"Lintang"=> "-7.433273",
				"Rute"=> "Jl. Dr. Gumbreg",
				"id"=> "1713"
			],
			[
				"Bujur"=> "109.269932",
				"Lintang"=> "-7.434145",
				"Rute"=> "Jl. Dr. Gumbreg",
				"id"=> "1714"
			],
			[
				"Bujur"=> "109.269739",
				"Lintang"=> "-7.434571",
				"Rute"=> "Jl. Dr. Gumbreg",
				"id"=> "1715"
			],
			[
				"Bujur"=> "109.269331",
				"Lintang"=> "-7.435507",
				"Rute"=> "Jl. Dr. Gumbreg",
				"id"=> "1716"
			],
			[
				"Bujur"=> "109.268923",
				"Lintang"=> "-7.436167",
				"Rute"=> "Jl. Dr. Gumbreg",
				"id"=> "1717"
			],
			[
				"Bujur"=> "109.268473",
				"Lintang"=> "-7.437316",
				"Rute"=> "Jl. Dr. Gumbreg",
				"id"=> "1718"
			],
			[
				"Bujur"=> "109.268065",
				"Lintang"=> "-7.438039",
				"Rute"=> "Jl. Dr. Gumbreg",
				"id"=> "1719"
			],
			[
				"Bujur"=> "109.275922",
				"Lintang"=> "-7.429967",
				"Rute"=> "Perum Purnawira Ledug",
				"id"=> "1720"
			],
			[
				"Bujur"=> "109.276029",
				"Lintang"=> "-7.429946",
				"Rute"=> "Perum Purnawira Ledug",
				"id"=> "1721"
			],
			[
				"Bujur"=> "109.276152",
				"Lintang"=> "-7.429925",
				"Rute"=> "Perum Purnawira Ledug",
				"id"=> "1722"
			],
			[
				"Bujur"=> "109.276308",
				"Lintang"=> "-7.429903",
				"Rute"=> "Perum Purnawira Ledug",
				"id"=> "1723"
			],
			[
				"Bujur"=> "109.276442",
				"Lintang"=> "-7.429887",
				"Rute"=> "Perum Purnawira Ledug",
				"id"=> "1724"
			],
			[
				"Bujur"=> "109.276582",
				"Lintang"=> "-7.429872",
				"Rute"=> "Perum Purnawira Ledug",
				"id"=> "1725"
			],
			[
				"Bujur"=> "109.276743",
				"Lintang"=> "-7.429850",
				"Rute"=> "Perum Purnawira Ledug",
				"id"=> "1726"
			],
			[
				"Bujur"=> "109.276871",
				"Lintang"=> "-7.429840",
				"Rute"=> "Perum Purnawira Ledug",
				"id"=> "1727"
			],
			[
				"Bujur"=> "109.285133",
				"Lintang"=> "-7.424323",
				"Rute"=> "Pliken",
				"id"=> "1728"
			],
			[
				"Bujur"=> "109.281871",
				"Lintang"=> "-7.426195",
				"Rute"=> "Pliken",
				"id"=> "1729"
			],
			[
				"Bujur"=> "109.279382",
				"Lintang"=> "-7.427812",
				"Rute"=> "Pliken",
				"id"=> "1730"
			],
			[
				"Bujur"=> "109.279468",
				"Lintang"=> "-7.431047",
				"Rute"=> "Pliken",
				"id"=> "1731"
			],
			[
				"Bujur"=> "109.281528",
				"Lintang"=> "-7.434366",
				"Rute"=> "Pliken",
				"id"=> "1732"
			],
			[
				"Bujur"=> "109.282901",
				"Lintang"=> "-7.438707",
				"Rute"=> "Pliken",
				"id"=> "1733"
			],
			[
				"Bujur"=> "109.284361",
				"Lintang"=> "-7.440579",
				"Rute"=> "Pliken",
				"id"=> "1734"
			],
			[
				"Bujur"=> "109.287365",
				"Lintang"=> "-7.442111",
				"Rute"=> "Pliken",
				"id"=> "1735"
			],
			[
				"Bujur"=> "109.291142",
				"Lintang"=> "-7.442281",
				"Rute"=> "Pliken",
				"id"=> "1736"
			],
			[
				"Bujur"=> "109.292773",
				"Lintang"=> "-7.443983",
				"Rute"=> "Pliken",
				"id"=> "1737"
			],
			[
				"Bujur"=> "109.295605",
				"Lintang"=> "-7.441855",
				"Rute"=> "Pliken",
				"id"=> "1738"
			],
			[
				"Bujur"=> "109.296034",
				"Lintang"=> "-7.435812",
				"Rute"=> "Pliken",
				"id"=> "1739"
			],
			[
				"Bujur"=> "109.296034",
				"Lintang"=> "-7.435812",
				"Rute"=> "Pliken",
				"id"=> "1740"
			],
			[
				"Bujur"=> "109.300497",
				"Lintang"=> "-7.430791",
				"Rute"=> "Pliken",
				"id"=> "1741"
			],
			[
				"Bujur"=> "109.297493",
				"Lintang"=> "-7.425684",
				"Rute"=> "Pliken",
				"id"=> "1742"
			],
			[
				"Bujur"=> "109.291742",
				"Lintang"=> "-7.421344",
				"Rute"=> "Pliken",
				"id"=> "1743"
			],
			[
				"Bujur"=> "109.286763",
				"Lintang"=> "-7.421599",
				"Rute"=> "Pliken",
				"id"=> "1744"
			],
			[
				"Bujur"=> "109.285218",
				"Lintang"=> "-7.423982",
				"Rute"=> "Pliken",
				"id"=> "1745"
			],
			[
				"Bujur"=> "109.235287",
				"Lintang"=> "-7.423840",
				"Rute"=> "Jl. Mardikenya II",
				"id"=> "1746"
			],
			[
				"Bujur"=> "109.235362",
				"Lintang"=> "-7.423867",
				"Rute"=> "Jl. Mardikenya II",
				"id"=> "1747"
			],
			[
				"Bujur"=> "109.235501",
				"Lintang"=> "-7.423914",
				"Rute"=> "Jl. Mardikenya II",
				"id"=> "1748"
			],
			[
				"Bujur"=> "109.235641",
				"Lintang"=> "-7.423936",
				"Rute"=> "Jl. Mardikenya II",
				"id"=> "1749"
			],
			[
				"Bujur"=> "109.235748",
				"Lintang"=> "-7.423946",
				"Rute"=> "Jl. Mardikenya II",
				"id"=> "1750"
			],
			[
				"Bujur"=> "109.236022",
				"Lintang"=> "-7.424053",
				"Rute"=> "Jl. Mardikenya II",
				"id"=> "1751"
			],
			[
				"Bujur"=> "109.236129",
				"Lintang"=> "-7.424085",
				"Rute"=> "Jl. Mardikenya II",
				"id"=> "1752"
			],
			[
				"Bujur"=> "109.236483",
				"Lintang"=> "-7.424138",
				"Rute"=> "Jl. Mardikenya II",
				"id"=> "1753"
			],
			[
				"Bujur"=> "109.236671",
				"Lintang"=> "-7.424143",
				"Rute"=> "Jl. Mardikenya II",
				"id"=> "1754"
			],
			[
				"Bujur"=> "109.236837",
				"Lintang"=> "-7.424159",
				"Rute"=> "Jl. Mardikenya II",
				"id"=> "1755"
			],
			[
				"Bujur"=> "109.236971",
				"Lintang"=> "-7.424180",
				"Rute"=> "Jl. Mardikenya II",
				"id"=> "1756"
			],
			[
				"Bujur"=> "109.237111",
				"Lintang"=> "-7.424186",
				"Rute"=> "Jl. Mardikenya II",
				"id"=> "1757"
			],
			[
				"Bujur"=> "109.269900",
				"Lintang"=> "-7.428619",
				"Rute"=> "Jl. Dr. Gumbreg",
				"id"=> "1758"
			],
			[
				"Bujur"=> "109.270007",
				"Lintang"=> "-7.429055",
				"Rute"=> "Jl. Dr. Gumbreg",
				"id"=> "1759"
			],
			[
				"Bujur"=> "109.270071",
				"Lintang"=> "-7.429331",
				"Rute"=> "Jl. Dr. Gumbreg",
				"id"=> "1560"
			],
			[
				"Bujur"=> "109.270179",
				"Lintang"=> "-7.429789",
				"Rute"=> "Jl. Dr. Gumbreg",
				"id"=> "1561"
			],
			[
				"Bujur"=> "109.270200",
				"Lintang"=> "-7.429970",
				"Rute"=> "Jl. Dr. Gumbreg",
				"id"=> "1562"
			],
			[
				"Bujur"=> "109.270243",
				"Lintang"=> "-7.430374",
				"Rute"=> "Jl. Dr. Gumbreg",
				"id"=> "1563"
			],
			[
				"Bujur"=> "109.270340",
				"Lintang"=> "-7.430704",
				"Rute"=> "Jl. Dr. Gumbreg",
				"id"=> "1564"
			],
			[
				"Bujur"=> "109.270479",
				"Lintang"=> "-7.431619",
				"Rute"=> "Jl. Dr. Gumbreg",
				"id"=> "1565"
			],
			[
				"Bujur"=> "109.270543",
				"Lintang"=> "-7.432097",
				"Rute"=> "Jl. Dr. Gumbreg",
				"id"=> "1566"
			],
			[
				"Bujur"=> "109.270479",
				"Lintang"=> "-7.432789",
				"Rute"=> "Jl. Dr. Gumbreg",
				"id"=> "1567"
			],
			[
				"Bujur"=> "109.270361",
				"Lintang"=> "-7.433151",
				"Rute"=> "Jl. Dr. Gumbreg",
				"id"=> "1568"
			],
			[
				"Bujur"=> "109.270211",
				"Lintang"=> "-7.433491",
				"Rute"=> "Jl. Dr. Gumbreg",
				"id"=> "1569"
			],
			[
				"Bujur"=> "109.269953",
				"Lintang"=> "-7.434044",
				"Rute"=> "Jl. Dr. Gumbreg",
				"id"=> "1570"
			],
			[
				"Bujur"=> "109.269739",
				"Lintang"=> "-7.434459",
				"Rute"=> "Jl. Dr. Gumbreg",
				"id"=> "1771"
			],
			[
				"Bujur"=> "109.269471",
				"Lintang"=> "-7.435087",
				"Rute"=> "Jl. Dr. Gumbreg",
				"id"=> "1772"
			],
			[
				"Bujur"=> "109.269074",
				"Lintang"=> "-7.436044",
				"Rute"=> "Jl. Dr. Gumbreg",
				"id"=> "1773"
			],
			[
				"Bujur"=> "109.268709",
				"Lintang"=> "-7.436789",
				"Rute"=> "Jl. Dr. Gumbreg",
				"id"=> "1774"
			],
			[
				"Bujur"=> "109.268333",
				"Lintang"=> "-7.437587",
				"Rute"=> "Jl. Dr. Gumbreg",
				"id"=> "1775"
			],
			[
				"Bujur"=> "109.268097",
				"Lintang"=> "-7.438076",
				"Rute"=> "Jl. Dr. Gumbreg",
				"id"=> "1776"
			],
			[
				"Bujur"=> "109.238097",
				"Lintang"=> "-7.428546",
				"Rute"=> "Jl. Kalibener",
				"id"=> "1777"
			],
			[
				"Bujur"=> "109.237925",
				"Lintang"=> "-7.429205",
				"Rute"=> "Jl. Kalibener",
				"id"=> "1778"
			],
			[
				"Bujur"=> "109.237925",
				"Lintang"=> "-7.429907",
				"Rute"=> "Jl. Kalibener",
				"id"=> "1779"
			],
			[
				"Bujur"=> "109.237925",
				"Lintang"=> "-7.430610",
				"Rute"=> "Jl. Kalibener",
				"id"=> "1780"
			],
			[
				"Bujur"=> "109.237968",
				"Lintang"=> "-7.431205",
				"Rute"=> "Jl. Kalibener",
				"id"=> "1781"
			],
			[
				"Bujur"=> "109.238032",
				"Lintang"=> "-7.431759",
				"Rute"=> "Jl. Kalibener",
				"id"=> "1782"
			],
			[
				"Bujur"=> "109.238032",
				"Lintang"=> "-7.432908",
				"Rute"=> "Jl. Kalibener",
				"id"=> "1783"
			],
			[
				"Bujur"=> "109.238118",
				"Lintang"=> "-7.434078",
				"Rute"=> "Jl. Kalibener",
				"id"=> "1784"
			],
			[
				"Bujur"=> "109.238054",
				"Lintang"=> "-7.435120",
				"Rute"=> "Jl. Kalibener",
				"id"=> "1785"
			],
			[
				"Bujur"=> "109.237882",
				"Lintang"=> "-7.436035",
				"Rute"=> "Jl. Kalibener",
				"id"=> "1786"
			],
			[
				"Bujur"=> "109.237796",
				"Lintang"=> "-7.436589",
				"Rute"=> "Jl. Kalibener",
				"id"=> "1787"
			],
			[
				"Bujur"=> "109.237775",
				"Lintang"=> "-7.437142",
				"Rute"=> "Jl. Kalibener",
				"id"=> "1788"
			],
			[
				"Bujur"=> "109.216161",
				"Lintang"=> "-7.409055",
				"Rute"=> "Jl. Raya Karangsalam - Purwokerto Road",
				"id"=> "1789"
			],
			[
				"Bujur"=> "109.216418",
				"Lintang"=> "-7.407991",
				"Rute"=> "Jl. Raya Karangsalam - Purwokerto Road",
				"id"=> "1790"
			],
			[
				"Bujur"=> "109.216204",
				"Lintang"=> "-7.404799",
				"Rute"=> "Jl. Raya Karangsalam - Purwokerto Road",
				"id"=> "1791"
			],
			[
				"Bujur"=> "109.217234",
				"Lintang"=> "-7.402543",
				"Rute"=> "Jl. Raya Karangsalam - Purwokerto Road",
				"id"=> "1792"
			],
			[
				"Bujur"=> "109.217448",
				"Lintang"=> "-7.401139",
				"Rute"=> "Jl. Raya Karangsalam - Purwokerto Road",
				"id"=> "1793"
			],
			[
				"Bujur"=> "109.217706",
				"Lintang"=> "-7.399862",
				"Rute"=> "Jl. Raya Karangsalam - Purwokerto Road",
				"id"=> "1794"
			],
			[
				"Bujur"=> "109.217963",
				"Lintang"=> "-7.398585",
				"Rute"=> "Jl. Raya Karangsalam - Purwokerto Road",
				"id"=> "1795"
			],
			[
				"Bujur"=> "109.218349",
				"Lintang"=> "-7.397053",
				"Rute"=> "Jl. Raya Karangsalam - Purwokerto Road",
				"id"=> "1796"
			],
			[
				"Bujur"=> "109.218564",
				"Lintang"=> "-7.395904",
				"Rute"=> "Jl. Raya Karangsalam - Purwokerto Road",
				"id"=> "1797"
			],
			[
				"Bujur"=> "109.235259",
				"Lintang"=> "-7.420301",
				"Rute"=> "SMA Negeri 2 Purwokerto",
				"id"=> "1798"
			],
			[
				"Bujur"=> "109.235495",
				"Lintang"=> "-7.420386",
				"Rute"=> "SMA Negeri 2 Purwokerto",
				"id"=> "1799"
			],
			[
				"Bujur"=> "109.235710",
				"Lintang"=> "-7.420471",
				"Rute"=> "SMA Negeri 2 Purwokerto",
				"id"=> "1800"
			],
			[
				"Bujur"=> "109.236042",
				"Lintang"=> "-7.420492",
				"Rute"=> "SMA Negeri 2 Purwokerto",
				"id"=> "1801"
			],
			[
				"Bujur"=> "109.236225",
				"Lintang"=> "-7.420556",
				"Rute"=> "SMA Negeri 2 Purwokerto",
				"id"=> "1802"
			],
			[
				"Bujur"=> "109.236364",
				"Lintang"=> "-7.420354",
				"Rute"=> "SMA Negeri 2 Purwokerto",
				"id"=> "1803"
			],
			[
				"Bujur"=> "109.236429",
				"Lintang"=> "-7.419928",
				"Rute"=> "SMA Negeri 2 Purwokerto",
				"id"=> "1804"
			],
			[
				"Bujur"=> "109.236525",
				"Lintang"=> "-7.419620",
				"Rute"=> "SMA Negeri 2 Purwokerto",
				"id"=> "1805"
			],
			[
				"Bujur"=> "109.236182",
				"Lintang"=> "-7.419428",
				"Rute"=> "SMA Negeri 2 Purwokerto",
				"id"=> "1806"
			],
			[
				"Bujur"=> "109.235838",
				"Lintang"=> "-7.419354",
				"Rute"=> "SMA Negeri 2 Purwokerto",
				"id"=> "1807"
			],
			[
				"Bujur"=> "109.235506",
				"Lintang"=> "-7.419258",
				"Rute"=> "SMA Negeri 2 Purwokerto",
				"id"=> "1808"
			],
			[
				"Bujur"=> "109.235356",
				"Lintang"=> "-7.419556",
				"Rute"=> "SMA Negeri 2 Purwokerto",
				"id"=> "1809"
			],
			[
				"Bujur"=> "109.235270",
				"Lintang"=> "-7.419875",
				"Rute"=> "SMA Negeri 2 Purwokerto",
				"id"=> "1810"
			],
			[
				"Bujur"=> "109.235184",
				"Lintang"=> "-7.420247",
				"Rute"=> "SMA Negeri 2 Purwokerto",
				"id"=> "1811"
			],
			[
				"Bujur"=> "109.199399",
				"Lintang"=> "-7.399993",
				"Rute"=> "Kantor Balai Desa Pasir Wetan",
				"id"=> "1812"
			],
			[
				"Bujur"=> "109.198497",
				"Lintang"=> "-7.400461",
				"Rute"=> "Kantor Balai Desa Pasir Wetan",
				"id"=> "1813"
			],
			[
				"Bujur"=> "109.198540",
				"Lintang"=> "-7.401440",
				"Rute"=> "Kantor Balai Desa Pasir Wetan",
				"id"=> "1814"
			],
			[
				"Bujur"=> "109.199356",
				"Lintang"=> "-7.401398",
				"Rute"=> "Kantor Balai Desa Pasir Wetan",
				"id"=> "1815"
			],
			[
				"Bujur"=> "109.199828",
				"Lintang"=> "-7.400546",
				"Rute"=> "Kantor Balai Desa Pasir Wetan",
				"id"=> "1816"
			],
			[
				"Bujur"=> "109.201115",
				"Lintang"=> "-7.400036",
				"Rute"=> "Kantor Balai Desa Pasir Wetan",
				"id"=> "1817"
			],
			[
				"Bujur"=> "109.200171",
				"Lintang"=> "-7.399270",
				"Rute"=> "Kantor Balai Desa Pasir Wetan",
				"id"=> "1818"
			],
			[
				"Bujur"=> "109.199484",
				"Lintang"=> "-7.403398",
				"Rute"=> "Kantor Balai Desa Pasir Wetan",
				"id"=> "1819"
			],
			[
				"Bujur"=> "109.200772",
				"Lintang"=> "-7.404760",
				"Rute"=> "Kantor Balai Desa Pasir Wetan",
				"id"=> "1820"
			],
			[
				"Bujur"=> "109.201244",
				"Lintang"=> "-7.403823",
				"Rute"=> "Kantor Balai Desa Pasir Wetan",
				"id"=> "1821"
			],
			[
				"Bujur"=> "109.201587",
				"Lintang"=> "-7.402674",
				"Rute"=> "Kantor Balai Desa Pasir Wetan",
				"id"=> "1822"
			],
			[
				"Bujur"=> "109.200557",
				"Lintang"=> "-7.401993",
				"Rute"=> "Kantor Balai Desa Pasir Wetan",
				"id"=> "1823"
			],
			[
				"Bujur"=> "109.204162",
				"Lintang"=> "-7.411994",
				"Rute"=> "Kantor Balai Desa Pasir Wetan",
				"id"=> "1824"
			],
			[
				"Bujur"=> "109.205278",
				"Lintang"=> "-7.412079",
				"Rute"=> "Kantor Balai Desa Pasir Wetan",
				"id"=> "1825"
			],
			[
				"Bujur"=> "109.207252",
				"Lintang"=> "-7.412122",
				"Rute"=> "Kantor Balai Desa Pasir Wetan",
				"id"=> "1826"
			],
			[
				"Bujur"=> "109.208325",
				"Lintang"=> "-7.411143",
				"Rute"=> "Kantor Balai Desa Pasir Wetan",
				"id"=> "1827"
			],
			[
				"Bujur"=> "109.209184",
				"Lintang"=> "-7.406547",
				"Rute"=> "Kantor Balai Desa Pasir Wetan",
				"id"=> "1828"
			],
			[
				"Bujur"=> "109.208325",
				"Lintang"=> "-7.403780",
				"Rute"=> "Kantor Balai Desa Pasir Wetan",
				"id"=> "1829"
			],
			[
				"Bujur"=> "109.203476",
				"Lintang"=> "-7.401270",
				"Rute"=> "Kantor Balai Desa Pasir Wetan",
				"id"=> "1830"
			],
			[
				"Bujur"=> "109.194222",
				"Lintang"=> "-7.401269",
				"Rute"=> "Jl. Pasir Raya I",
				"id"=> "1831"
			],
			[
				"Bujur"=> "109.194222",
				"Lintang"=> "-7.402418",
				"Rute"=> "Jl. Pasir Raya I",
				"id"=> "1832"
			],
			[
				"Bujur"=> "109.194737",
				"Lintang"=> "-7.403525",
				"Rute"=> "Jl. Pasir Raya I",
				"id"=> "1833"
			],
			[
				"Bujur"=> "109.195552",
				"Lintang"=> "-7.402886",
				"Rute"=> "Jl. Pasir Raya I",
				"id"=> "1834"
			],
			[
				"Bujur"=> "109.197312",
				"Lintang"=> "-7.403950",
				"Rute"=> "Jl. Pasir Raya I",
				"id"=> "1835"
			],
			[
				"Bujur"=> "109.197355",
				"Lintang"=> "-7.402120",
				"Rute"=> "Jl. Pasir Raya I",
				"id"=> "1836"
			],
			[
				"Bujur"=> "109.199415",
				"Lintang"=> "-7.402078",
				"Rute"=> "Jl. Pasir Raya I",
				"id"=> "1837"
			],
			[
				"Bujur"=> "109.200531",
				"Lintang"=> "-7.402205",
				"Rute"=> "Jl. Pasir Raya I",
				"id"=> "1838"
			],
			[
				"Bujur"=> "109.202934",
				"Lintang"=> "-7.399141",
				"Rute"=> "Jl. Pasir Raya I",
				"id"=> "1839"
			],
			[
				"Bujur"=> "109.203921",
				"Lintang"=> "-7.400162",
				"Rute"=> "Jl. Pasir Raya I",
				"id"=> "1840"
			],
			[
				"Bujur"=> "109.203921",
				"Lintang"=> "-7.402461",
				"Rute"=> "Jl. Pasir Raya I",
				"id"=> "1841"
			],
			[
				"Bujur"=> "109.204479",
				"Lintang"=> "-7.400971",
				"Rute"=> "Jl. Pasir Raya I",
				"id"=> "1842"
			],
			[
				"Bujur"=> "109.205423",
				"Lintang"=> "-7.401652",
				"Rute"=> "Jl. Pasir Raya I",
				"id"=> "1834"
			],
			[
				"Bujur"=> "109.204307",
				"Lintang"=> "-7.407270",
				"Rute"=> "Jl. Pasir Raya I",
				"id"=> "1844"
			],
			[
				"Bujur"=> "109.203578",
				"Lintang"=> "-7.409355",
				"Rute"=> "Jl. Pasir Raya I",
				"id"=> "1845"
			],
			[
				"Bujur"=> "109.199372",
				"Lintang"=> "-7.406802",
				"Rute"=> "Jl. Pasir Raya I",
				"id"=> "1846"
			],
			[
				"Bujur"=> "109.196840",
				"Lintang"=> "-7.408589",
				"Rute"=> "Jl. Pasir Raya I",
				"id"=> "1847"
			],
			[
				"Bujur"=> "109.212742",
				"Lintang"=> "-7.422496",
				"Rute"=> "Jl. Veteran",
				"id"=> "1848"
			],
			[
				"Bujur"=> "109.212785",
				"Lintang"=> "-7.424241",
				"Rute"=> "Jl. Veteran",
				"id"=> "1849"
			],
			[
				"Bujur"=> "109.212870",
				"Lintang"=> "-7.425730",
				"Rute"=> "Jl. Veteran",
				"id"=> "1850"
			],
			[
				"Bujur"=> "109.212871",
				"Lintang"=> "-7.427134",
				"Rute"=> "Jl. Veteran",
				"id"=> "1851"
			],
			[
				"Bujur"=> "109.212828",
				"Lintang"=> "-7.428156",
				"Rute"=> "Jl. Veteran",
				"id"=> "1852"
			],
			[
				"Bujur"=> "109.212699",
				"Lintang"=> "-7.430369",
				"Rute"=> "Jl. Veteran",
				"id"=> "1853"
			],
			[
				"Bujur"=> "109.212613",
				"Lintang"=> "-7.432667",
				"Rute"=> "Jl. Veteran",
				"id"=> "1854"
			],
			[
				"Bujur"=> "109.212914",
				"Lintang"=> "-7.434454",
				"Rute"=> "Jl. Veteran",
				"id"=> "1855"
			],
			[
				"Bujur"=> "109.214502",
				"Lintang"=> "-7.435390",
				"Rute"=> "Jl. Veteran",
				"id"=> "1856"
			],
			[
				"Bujur"=> "109.215789",
				"Lintang"=> "-7.436156",
				"Rute"=> "Jl. Veteran",
				"id"=> "1857"
			],
			[
				"Bujur"=> "109.217377",
				"Lintang"=> "-7.437092",
				"Rute"=> "Jl. Veteran",
				"id"=> "1858"
			],
			[
				"Bujur"=> "109.218622",
				"Lintang"=> "-7.437858",
				"Rute"=> "Jl. Veteran",
				"id"=> "1859"
			],
			[
				"Bujur"=> "109.219781",
				"Lintang"=> "-7.438454",
				"Rute"=> "Jl. Veteran",
				"id"=> "1860"
			],
			[
				"Bujur"=> "109.240343",
				"Lintang"=> "-7.451130",
				"Rute"=> "Jl. Karangklesem",
				"id"=> "1861"
			],
			[
				"Bujur"=> "109.240611",
				"Lintang"=> "-7.451215",
				"Rute"=> "Jl. Karangklesem",
				"id"=> "1862"
			],
			[
				"Bujur"=> "109.240879",
				"Lintang"=> "-7.451300",
				"Rute"=> "Jl. Karangklesem",
				"id"=> "1863"
			],
			[
				"Bujur"=> "109.241298",
				"Lintang"=> "-7.451438",
				"Rute"=> "Jl. Karangklesem",
				"id"=> "1864"
			],
			[
				"Bujur"=> "109.241598",
				"Lintang"=> "-7.451534",
				"Rute"=> "Jl. Karangklesem",
				"id"=> "1865"
			],
			[
				"Bujur"=> "109.241802",
				"Lintang"=> "-7.451619",
				"Rute"=> "Jl. Karangklesem",
				"id"=> "1866"
			],
			[
				"Bujur"=> "109.242124",
				"Lintang"=> "-7.451683",
				"Rute"=> "Jl. Karangklesem",
				"id"=> "1867"
			],
			[
				"Bujur"=> "109.242381",
				"Lintang"=> "-7.451768",
				"Rute"=> "Jl. Karangklesem",
				"id"=> "1868"
			],
			[
				"Bujur"=> "109.242403",
				"Lintang"=> "-7.451779",
				"Rute"=> "Jl. Karangklesem",
				"id"=> "1869"
			],
			[
				"Bujur"=> "109.227049",
				"Lintang"=> "-7.450784",
				"Rute"=> "Bersole",
				"id"=> "1870"
			],
			[
				"Bujur"=> "109.227049",
				"Lintang"=> "-7.451486",
				"Rute"=> "Bersole",
				"id"=> "1871"
			],
			[
				"Bujur"=> "109.231276",
				"Lintang"=> "-7.455465",
				"Rute"=> "Bersole",
				"id"=> "1872"
			],
			[
				"Bujur"=> "109.232349",
				"Lintang"=> "-7.455784",
				"Rute"=> "Bersole",
				"id"=> "1873"
			],
			[
				"Bujur"=> "109.232800",
				"Lintang"=> "-7.454997",
				"Rute"=> "Bersole",
				"id"=> "1874"
			],
			[
				"Bujur"=> "109.235374",
				"Lintang"=> "-7.447635",
				"Rute"=> "Bersole",
				"id"=> "1875"
			],
			[
				"Bujur"=> "109.233894",
				"Lintang"=> "-7.446699",
				"Rute"=> "Bersole",
				"id"=> "1876"
			],
			[
				"Bujur"=> "109.231169",
				"Lintang"=> "-7.447295",
				"Rute"=> "Bersole",
				"id"=> "1877"
			],
			[
				"Bujur"=> "109.228808",
				"Lintang"=> "-7.446827",
				"Rute"=> "Bersole",
				"id"=> "1878"
			],
			[
				"Bujur"=> "109.226620",
				"Lintang"=> "-7.446976",
				"Rute"=> "Bersole",
				"id"=> "1879"
			],
			[
				"Bujur"=> "109.215086",
				"Lintang"=> "-7.438080",
				"Rute"=> "Kedungwringin",
				"id"=> "1880"
			],
			[
				"Bujur"=> "109.217071",
				"Lintang"=> "-7.438872",
				"Rute"=> "Kedungwringin",
				"id"=> "1881"
			],
			[
				"Bujur"=> "109.223852",
				"Lintang"=> "-7.442021",
				"Rute"=> "Kedungwringin",
				"id"=> "1882"
			],
			[
				"Bujur"=> "109.225568",
				"Lintang"=> "-7.443127",
				"Rute"=> "Kedungwringin",
				"id"=> "1883"
			],
			[
				"Bujur"=> "109.226427",
				"Lintang"=> "-7.446106",
				"Rute"=> "Kedungwringin",
				"id"=> "1884"
			],
			[
				"Bujur"=> "109.226427",
				"Lintang"=> "-7.448404",
				"Rute"=> "Kedungwringin",
				"id"=> "1885"
			],
			[
				"Bujur"=> "109.221449",
				"Lintang"=> "-7.450021",
				"Rute"=> "Kedungwringin",
				"id"=> "1886"
			],
			[
				"Bujur"=> "109.218616",
				"Lintang"=> "-7.451213",
				"Rute"=> "Kedungwringin",
				"id"=> "1887"
			],
			[
				"Bujur"=> "109.215698",
				"Lintang"=> "-7.451979",
				"Rute"=> "Kedungwringin",
				"id"=> "1888"
			],
			[
				"Bujur"=> "109.213380",
				"Lintang"=> "-7.454532",
				"Rute"=> "Kedungwringin",
				"id"=> "1889"
			],
			[
				"Bujur"=> "109.211578",
				"Lintang"=> "-7.459128",
				"Rute"=> "Kedungwringin",
				"id"=> "1890"
			],
			[
				"Bujur"=> "109.210977",
				"Lintang"=> "-7.453851",
				"Rute"=> "Kedungwringin",
				"id"=> "1891"
			],
			[
				"Bujur"=> "109.208831",
				"Lintang"=> "-7.445085",
				"Rute"=> "Kedungwringin",
				"id"=> "1892"
			],
			[
				"Bujur"=> "109.248295",
				"Lintang"=> "-7.448278",
				"Rute"=> "Jl. Martosayogo",
				"id"=> "1893"
			],
			[
				"Bujur"=> "109.248263",
				"Lintang"=> "-7.448640",
				"Rute"=> "Jl. Martosayogo",
				"id"=> "1894"
			],
			[
				"Bujur"=> "109.248241",
				"Lintang"=> "-7.449023",
				"Rute"=> "Jl. Martosayogo",
				"id"=> "1895"
			],
			[
				"Bujur"=> "109.248241",
				"Lintang"=> "-7.449353",
				"Rute"=> "Jl. Martosayogo",
				"id"=> "1896"
			],
			[
				"Bujur"=> "109.248209",
				"Lintang"=> "-7.449640",
				"Rute"=> "Jl. Martosayogo",
				"id"=> "1897"
			],
			[
				"Bujur"=> "109.248177",
				"Lintang"=> "-7.450001",
				"Rute"=> "Jl. Martosayogo",
				"id"=> "1898"
			],
			[
				"Bujur"=> "109.248145",
				"Lintang"=> "-7.450278",
				"Rute"=> "Jl. Martosayogo",
				"id"=> "1899"
			],
			[
				"Bujur"=> "109.248113",
				"Lintang"=> "-7.450746",
				"Rute"=> "Jl. Martosayogo",
				"id"=> "1900"
			],
			[
				"Bujur"=> "109.248070",
				"Lintang"=> "-7.451342",
				"Rute"=> "Jl. Martosayogo",
				"id"=> "1901"
			],
			[
				"Bujur"=> "109.248123",
				"Lintang"=> "-7.451682",
				"Rute"=> "Jl. Martosayogo",
				"id"=> "1902"
			],
			[
				"Bujur"=> "109.248263",
				"Lintang"=> "-7.452353",
				"Rute"=> "Jl. Martosayogo",
				"id"=> "1903"
			],
			[
				"Bujur"=> "109.248349",
				"Lintang"=> "-7.452629",
				"Rute"=> "Jl. Martosayogo",
				"id"=> "1904"
			],
			[
				"Bujur"=> "109.248477",
				"Lintang"=> "-7.452948",
				"Rute"=> "Jl. Martosayogo",
				"id"=> "1905"
			],
			[
				"Bujur"=> "109.248477",
				"Lintang"=> "-7.453204",
				"Rute"=> "Jl. Martosayogo",
				"id"=> "1906"
			],
			[
				"Bujur"=> "109.245187",
				"Lintang"=> "-7.457997",
				"Rute"=> "Perum Pamujan",
				"id"=> "1907"
			],
			[
				"Bujur"=> "109.245284",
				"Lintang"=> "-7.458002",
				"Rute"=> "Perum Pamujan",
				"id"=> "1908"
			],
			[
				"Bujur"=> "109.245391",
				"Lintang"=> "-7.457991",
				"Rute"=> "Perum Pamujan",
				"id"=> "1909"
			],
			[
				"Bujur"=> "109.245461",
				"Lintang"=> "-7.457960",
				"Rute"=> "Perum Pamujan",
				"id"=> "1910"
			],
			[
				"Bujur"=> "109.245482",
				"Lintang"=> "-7.457773",
				"Rute"=> "Perum Pamujan",
				"id"=> "1911"
			],
			[
				"Bujur"=> "109.225385",
				"Lintang"=> "-7.442673",
				"Rute"=> "Perum Pamujan",
				"id"=> "1912"
			],
			[
				"Bujur"=> "109.226673",
				"Lintang"=> "-7.444800",
				"Rute"=> "Karangpucung",
				"id"=> "1913"
			],
			[
				"Bujur"=> "109.226415",
				"Lintang"=> "-7.447183",
				"Rute"=> "Karangpucung",
				"id"=> "1914"
			],
			[
				"Bujur"=> "109.227016",
				"Lintang"=> "-7.452120",
				"Rute"=> "Karangpucung",
				"id"=> "1915"
			],
			[
				"Bujur"=> "109.22942",
				"Lintang"=> "-7.454588",
				"Rute"=> "Karangpucung",
				"id"=> "1916"
			],
			[
				"Bujur"=> "109.230879",
				"Lintang"=> "-7.455183",
				"Rute"=> "Karangpucung",
				"id"=> "1917"
			],
			[
				"Bujur"=> "109.232681",
				"Lintang"=> "-7.454077",
				"Rute"=> "Karangpucung",
				"id"=> "1918"
			],
			[
				"Bujur"=> "109.233626",
				"Lintang"=> "-7.450673",
				"Rute"=> "Karangpucung",
				"id"=> "1919"
			],
			[
				"Bujur"=> "109.236029",
				"Lintang"=> "-7.448119",
				"Rute"=> "Karangpucung",
				"id"=> "1920"
			],
			[
				"Bujur"=> "109.236801",
				"Lintang"=> "-7.445396",
				"Rute"=> "Karangpucung",
				"id"=> "1921"
			],
			[
				"Bujur"=> "109.239033",
				"Lintang"=> "-7.444544",
				"Rute"=> "Karangpucung",
				"id"=> "1922"
			],
			[
				"Bujur"=> "109.241007",
				"Lintang"=> "-7.444629",
				"Rute"=> "Karangpucung",
				"id"=> "1923"
			],
			[
				"Bujur"=> "109.241779",
				"Lintang"=> "-7.440459",
				"Rute"=> "Karangpucung",
				"id"=> "1924"
			],
			[
				"Bujur"=> "109.240148",
				"Lintang"=> "-7.438842",
				"Rute"=> "Karangpucung",
				"id"=> "1925"
			],
			[
				"Bujur"=> "109.239376",
				"Lintang"=> "-7.436374",
				"Rute"=> "Karangpucung",
				"id"=> "1926"
			],
			[
				"Bujur"=> "109.234827",
				"Lintang"=> "-7.436289",
				"Rute"=> "Karangpucung",
				"id"=> "1927"
			],
			[
				"Bujur"=> "109.233110",
				"Lintang"=> "-7.440204",
				"Rute"=> "Karangpucung",
				"id"=> "1928"
			],
			[
				"Bujur"=> "109.233454",
				"Lintang"=> "-7.446162",
				"Rute"=> "Karangpucung",
				"id"=> "1929"
			],
			[
				"Bujur"=> "109.227274",
				"Lintang"=> "-7.443949",
				"Rute"=> "Karangpucung",
				"id"=> "1930"
			],
			[
				"Bujur"=> "109.245187",
				"Lintang"=> "-7.457997",
				"Rute"=> "Perum Pamujan",
				"id"=> "1931"
			],
			[
				"Bujur"=> "109.245284",
				"Lintang"=> "-7.458002",
				"Rute"=> "Perum Pamujan",
				"id"=> "1932"
			],
			[
				"Bujur"=> "109.245391",
				"Lintang"=> "-7.457991",
				"Rute"=> "Perum Pamujan",
				"id"=> "1933"
			],
			[
				"Bujur"=> "109.245461",
				"Lintang"=> "-7.457960",
				"Rute"=> "Perum Pamujan",
				"id"=> "1934"
			],
			[
				"Bujur"=> "109.245482",
				"Lintang"=> "-7.457773",
				"Rute"=> "Perum Pamujan",
				"id"=> "1935"
			],
			[
				"Bujur"=> "109.197148",
				"Lintang"=> "-7.430903",
				"Rute"=> "Pangebatan",
				"id"=> "1936"
			],
			[
				"Bujur"=> "109.198006",
				"Lintang"=> "-7.433116",
				"Rute"=> "Pangebatan",
				"id"=> "1937"
			],
			[
				"Bujur"=> "109.197964",
				"Lintang"=> "-7.435286",
				"Rute"=> "Pangebatan",
				"id"=> "1938"
			],
			[
				"Bujur"=> "109.197878",
				"Lintang"=> "-7.438307",
				"Rute"=> "Pangebatan",
				"id"=> "1939"
			],
			[
				"Bujur"=> "109.201182",
				"Lintang"=> "-7.439839",
				"Rute"=> "Pangebatan",
				"id"=> "1940"
			],
			[
				"Bujur"=> "109.203586",
				"Lintang"=> "-7.441329",
				"Rute"=> "Pangebatan",
				"id"=> "1941"
			],
			[
				"Bujur"=> "109.206032",
				"Lintang"=> "-7.441414",
				"Rute"=> "Pangebatan",
				"id"=> "1942"
			],
			[
				"Bujur"=> "109.208950",
				"Lintang"=> "-7.442733",
				"Rute"=> "Pangebatan",
				"id"=> "1943"
			],
			[
				"Bujur"=> "109.208564",
				"Lintang"=> "-7.444861",
				"Rute"=> "Pangebatan",
				"id"=> "1944"
			],
			[
				"Bujur"=> "109.212512",
				"Lintang"=> "-7.445286",
				"Rute"=> "Pangebatan",
				"id"=> "1945"
			],
			[
				"Bujur"=> "109.212469",
				"Lintang"=> "-7.441456",
				"Rute"=> "Pangebatan",
				"id"=> "1946"
			],
			[
				"Bujur"=> "109.213928",
				"Lintang"=> "-7.439371",
				"Rute"=> "Pangebatan",
				"id"=> "1947"
			],
			[
				"Bujur"=> "109.215988",
				"Lintang"=> "-7.436605",
				"Rute"=> "Pangebatan",
				"id"=> "1948"
			],
			[
				"Bujur"=> "109.212254",
				"Lintang"=> "-7.434520",
				"Rute"=> "Pangebatan",
				"id"=> "1949"
			],
			[
				"Bujur"=> "109.211182",
				"Lintang"=> "-7.431839",
				"Rute"=> "Pangebatan",
				"id"=> "1950"
			],
			[
				"Bujur"=> "109.209379",
				"Lintang"=> "-7.431413",
				"Rute"=> "Pangebatan",
				"id"=> "1951"
			],
			[
				"Bujur"=> "109.204744",
				"Lintang"=> "-7.431499",
				"Rute"=> "Pangebatan",
				"id"=> "1952"
			],
			[
				"Bujur"=> "109.200109",
				"Lintang"=> "-7.430775",
				"Rute"=> "Pangebatan",
				"id"=> "1953"
			],
			[
				"Bujur"=> "109.197148",
				"Lintang"=> "-7.430818",
				"Rute"=> "Pangebatan",
				"id"=> "1954"
			],
			[
				"Bujur"=> "109.200178",
				"Lintang"=> "-7.420589",
				"Rute"=> "Jl. Djajadiwangsa",
				"id"=> "1955"
			],
			[
				"Bujur"=> "109.200221",
				"Lintang"=> "-7.421270",
				"Rute"=> "Jl. Djajadiwangsa",
				"id"=> "1956"
			],
			[
				"Bujur"=> "109.200178",
				"Lintang"=> "-7.422291",
				"Rute"=> "Jl. Djajadiwangsa",
				"id"=> "1957"
			],
			[
				"Bujur"=> "109.200242",
				"Lintang"=> "-7.423100",
				"Rute"=> "Jl. Djajadiwangsa",
				"id"=> "1958"
			],
			[
				"Bujur"=> "109.200392",
				"Lintang"=> "-7.423930",
				"Rute"=> "Jl. Djajadiwangsa",
				"id"=> "1959"
			],
			[
				"Bujur"=> "109.200457",
				"Lintang"=> "-7.424589",
				"Rute"=> "Jl. Djajadiwangsa",
				"id"=> "1960"
			],
			[
				"Bujur"=> "109.200607",
				"Lintang"=> "-7.425611",
				"Rute"=> "Jl. Djajadiwangsa",
				"id"=> "1961"
			],
			[
				"Bujur"=> "109.200693",
				"Lintang"=> "-7.426419",
				"Rute"=> "Jl. Djajadiwangsa",
				"id"=> "1962"
			],
			[
				"Bujur"=> "109.200886",
				"Lintang"=> "-7.427249",
				"Rute"=> "Jl. Djajadiwangsa",
				"id"=> "1963"
			],
			[
				"Bujur"=> "109.200950",
				"Lintang"=> "-7.427781",
				"Rute"=> "Jl. Djajadiwangsa",
				"id"=> "1964"
			],
			[
				"Bujur"=> "109.200993",
				"Lintang"=> "-7.428568",
				"Rute"=> "Jl. Djajadiwangsa",
				"id"=> "1965"
			],
			[
				"Bujur"=> "109.201014",
				"Lintang"=> "-7.429015",
				"Rute"=> "Jl. Djajadiwangsa",
				"id"=> "1966"
			],
			[
				"Bujur"=> "109.231948",
				"Lintang"=> "-7.397476",
				"Rute"=> "Jl. Pol. Soemarto",
				"id"=> "1967"
			],
			[
				"Bujur"=> "109.231862",
				"Lintang"=> "-7.398221",
				"Rute"=> "Jl. Pol. Soemarto",
				"id"=> "1968"
			],
			[
				"Bujur"=> "109.231691",
				"Lintang"=> "-7.399626",
				"Rute"=> "Jl. Pol. Soemarto",
				"id"=> "1969"
			],
			[
				"Bujur"=> "109.231669",
				"Lintang"=> "-7.400434",
				"Rute"=> "Jl. Pol. Soemarto",
				"id"=> "1970"
			],
			[
				"Bujur"=> "109.231648",
				"Lintang"=> "-7.401222",
				"Rute"=> "Jl. Pol. Soemarto",
				"id"=> "1971"
			],
			[
				"Bujur"=> "109.231541",
				"Lintang"=> "-7.402434",
				"Rute"=> "Jl. Pol. Soemarto",
				"id"=> "1972"
			],
			[
				"Bujur"=> "109.231390",
				"Lintang"=> "-7.403392",
				"Rute"=> "Jl. Pol. Soemarto",
				"id"=> "1973"
			],
			[
				"Bujur"=> "109.231369",
				"Lintang"=> "-7.403945",
				"Rute"=> "Jl. Pol. Soemarto",
				"id"=> "1974"
			],
			[
				"Bujur"=> "109.231219",
				"Lintang"=> "-7.405477",
				"Rute"=> "Jl. Pol. Soemarto",
				"id"=> "1975"
			],
			[
				"Bujur"=> "109.231176",
				"Lintang"=> "-7.406265",
				"Rute"=> "Jl. Pol. Soemarto",
				"id"=> "1976"
			],
			[
				"Bujur"=> "109.231090",
				"Lintang"=> "-7.407414",
				"Rute"=> "Jl. Pol. Soemarto",
				"id"=> "1977"
			],
			[
				"Bujur"=> "109.231004",
				"Lintang"=> "-7.408371",
				"Rute"=> "Jl. Pol. Soemarto",
				"id"=> "1978"
			],
			[
				"Bujur"=> "109.230897",
				"Lintang"=> "-7.409350",
				"Rute"=> "Jl. Pol. Soemarto",
				"id"=> "1979"
			],
			[
				"Bujur"=> "109.237408",
				"Lintang"=> "-7.382779",
				"Rute"=> "Pabuaran",
				"id"=> "1980"
			],
			[
				"Bujur"=> "109.238523",
				"Lintang"=> "-7.385971",
				"Rute"=> "Pabuaran",
				"id"=> "1981"
			],
			[
				"Bujur"=> "109.238695",
				"Lintang"=> "-7.388269",
				"Rute"=> "Pabuaran",
				"id"=> "1982"
			],
			[
				"Bujur"=> "109.239081",
				"Lintang"=> "-7.390355",
				"Rute"=> "Pabuaran",
				"id"=> "1983"
			],
			[
				"Bujur"=> "109.239296",
				"Lintang"=> "-7.392312",
				"Rute"=> "Pabuaran",
				"id"=> "1984"
			],
			[
				"Bujur"=> "109.240369",
				"Lintang"=> "-7.395206",
				"Rute"=> "Pabuaran",
				"id"=> "1985"
			],
			[
				"Bujur"=> "109.241399",
				"Lintang"=> "-7.397079",
				"Rute"=> "Pabuaran",
				"id"=> "1986"
			],
			[
				"Bujur"=> "109.243502",
				"Lintang"=> "-7.398569",
				"Rute"=> "Pabuaran",
				"id"=> "1987"
			],
			[
				"Bujur"=> "109.244918",
				"Lintang"=> "-7.402016",
				"Rute"=> "Pabuaran",
				"id"=> "1988"
			],
			[
				"Bujur"=> "109.248094",
				"Lintang"=> "-7.399037",
				"Rute"=> "Pabuaran",
				"id"=> "1989"
			],
			[
				"Bujur"=> "109.251398",
				"Lintang"=> "-7.397675",
				"Rute"=> "Pabuaran",
				"id"=> "1990"
			],
			[
				"Bujur"=> "109.248609",
				"Lintang"=> "-7.393547",
				"Rute"=> "Pabuaran",
				"id"=> "1991"
			],
			[
				"Bujur"=> "109.246162",
				"Lintang"=> "-7.391121",
				"Rute"=> "Pabuaran",
				"id"=> "1992"
			],
			[
				"Bujur"=> "109.245304",
				"Lintang"=> "-7.388227",
				"Rute"=> "Pabuaran",
				"id"=> "1993"
			],
			[
				"Bujur"=> "109.246463",
				"Lintang"=> "-7.385248",
				"Rute"=> "Pabuaran",
				"id"=> "1994"
			],
			[
				"Bujur"=> "109.245604",
				"Lintang"=> "-7.382524",
				"Rute"=> "Pabuaran",
				"id"=> "1995"
			],
			[
				"Bujur"=> "109.241484",
				"Lintang"=> "-7.382652",
				"Rute"=> "Pabuaran",
				"id"=> "1996"
			],
			[
				"Bujur"=> "109.237450",
				"Lintang"=> "-7.382779",
				"Rute"=> "Pabuaran",
				"id"=> "1997"
			],
			[
				"Bujur"=> "109.248804",
				"Lintang"=> "-7.393131",
				"Rute"=> "Jl. Sunan Ampel",
				"id"=> "1998"
			],
			[
				"Bujur"=> "109.249706",
				"Lintang"=> "-7.392748",
				"Rute"=> "Jl. Sunan Ampel",
				"id"=> "1999"
			],
			[
				"Bujur"=> "109.251079",
				"Lintang"=> "-7.392237",
				"Rute"=> "Jl. Sunan Ampel",
				"id"=> "2000"
			],
			[
				"Bujur"=> "109.251744",
				"Lintang"=> "-7.392024",
				"Rute"=> "Jl. Sunan Ampel",
				"id"=> "2001"
			],
			[
				"Bujur"=> "109.252817",
				"Lintang"=> "-7.391662",
				"Rute"=> "Jl. Sunan Ampel",
				"id"=> "2002"
			],
			[
				"Bujur"=> "109.253933",
				"Lintang"=> "-7.391428",
				"Rute"=> "Jl. Sunan Ampel",
				"id"=> "2003"
			],
			[
				"Bujur"=> "109.254963",
				"Lintang"=> "-7.391322",
				"Rute"=> "Jl. Sunan Ampel",
				"id"=> "2004"
			],
			[
				"Bujur"=> "109.256186",
				"Lintang"=> "-7.391258",
				"Rute"=> "Jl. Sunan Ampel",
				"id"=> "2005"
			],
			[
				"Bujur"=> "109.257151",
				"Lintang"=> "-7.391151",
				"Rute"=> "Jl. Sunan Ampel",
				"id"=> "2006"
			],
			[
				"Bujur"=> "109.258589",
				"Lintang"=> "-7.391258",
				"Rute"=> "Jl. Sunan Ampel",
				"id"=> "2007"
			],
			[
				"Bujur"=> "109.259791",
				"Lintang"=> "-7.391939",
				"Rute"=> "Jl. Sunan Ampel",
				"id"=> "2008"
			],
			[
				"Bujur"=> "109.260885",
				"Lintang"=> "-7.392194",
				"Rute"=> "Jl. Sunan Ampel",
				"id"=> "2009"
			],
			[
				"Bujur"=> "109.261765",
				"Lintang"=> "-7.392067",
				"Rute"=> "Jl. Sunan Ampel",
				"id"=> "2010"
			],
			[
				"Bujur"=> "109.262966",
				"Lintang"=> "-7.391939",
				"Rute"=> "Jl. Sunan Ampel",
				"id"=> "2011"
			],
			[
				"Bujur"=> "109.264211",
				"Lintang"=> "-7.391343",
				"Rute"=> "Jl. Sunan Ampel",
				"id"=> "2012"
			],
			[
				"Bujur"=> "109.261833",
				"Lintang"=> "-7.427325",
				"Rute"=> "Jl. HM Bahrun",
				"id"=> "2013"
			],
			[
				"Bujur"=> "109.261887",
				"Lintang"=> "-7.427654",
				"Rute"=> "Jl. HM Bahrun",
				"id"=> "2014"
			],
			[
				"Bujur"=> "109.261951",
				"Lintang"=> "-7.428176",
				"Rute"=> "Jl. HM Bahrun",
				"id"=> "2015"
			],
			[
				"Bujur"=> "109.262026",
				"Lintang"=> "-7.428559",
				"Rute"=> "Jl. HM Bahrun",
				"id"=> "2016"
			],
			[
				"Bujur"=> "109.262090",
				"Lintang"=> "-7.429218",
				"Rute"=> "Jl. HM Bahrun",
				"id"=> "2017"
			],
			[
				"Bujur"=> "109.262133",
				"Lintang"=> "-7.429803",
				"Rute"=> "Jl. HM Bahrun",
				"id"=> "2018"
			],
			[
				"Bujur"=> "109.262198",
				"Lintang"=> "-7.430474",
				"Rute"=> "Jl. HM Bahrun",
				"id"=> "2019"
			],
			[
				"Bujur"=> "109.262198",
				"Lintang"=> "-7.431069",
				"Rute"=> "Jl. HM Bahrun",
				"id"=> "2020"
			],
			[
				"Bujur"=> "109.262294",
				"Lintang"=> "-7.431655",
				"Rute"=> "Jl. HM Bahrun",
				"id"=> "2021"
			],
			[
				"Bujur"=> "109.262380",
				"Lintang"=> "-7.432240",
				"Rute"=> "Jl. HM Bahrun",
				"id"=> "2022"
			],
			[
				"Bujur"=> "109.262616",
				"Lintang"=> "-7.432910",
				"Rute"=> "Jl. HM Bahrun",
				"id"=> "2023"
			],
			[
				"Bujur"=> "109.262809",
				"Lintang"=> "-7.433442",
				"Rute"=> "Jl. HM Bahrun",
				"id"=> "2024"
			],
			[
				"Bujur"=> "109.263110",
				"Lintang"=> "-7.433910",
				"Rute"=> "Jl. HM Bahrun",
				"id"=> "2025"
			],
			[
				"Bujur"=> "109.263582",
				"Lintang"=> "-7.434527",
				"Rute"=> "Jl. HM Bahrun",
				"id"=> "2026"
			],
			[
				"Bujur"=> "109.263710",
				"Lintang"=> "-7.434729",
				"Rute"=> "Jl. HM Bahrun",
				"id"=> "2027"
			],
			[
				"Bujur"=> "109.263925",
				"Lintang"=> "-7.435070",
				"Rute"=> "Jl. HM Bahrun",
				"id"=> "2028"
			],
			[
				"Bujur"=> "109.263646",
				"Lintang"=> "-7.435633",
				"Rute"=> "Jl. HM Bahrun",
				"id"=> "2029"
			],
			[
				"Bujur"=> "109.263260",
				"Lintang"=> "-7.436133",
				"Rute"=> "Jl. HM Bahrun",
				"id"=> "2030"
			],
			[
				"Bujur"=> "109.262906",
				"Lintang"=> "-7.436538",
				"Rute"=> "Jl. HM Bahrun",
				"id"=> "2031"
			],
			[
				"Bujur"=> "109.262520",
				"Lintang"=> "-7.437070",
				"Rute"=> "Jl. HM Bahrun",
				"id"=> "2032"
			],
			[
				"Bujur"=> "109.269795",
				"Lintang"=> "-7.434358",
				"Rute"=> "RSUD Prof. Dr. Margono Soekarjo",
				"id"=> "2033"
			],
			[
				"Bujur"=> "109.269548",
				"Lintang"=> "-7.434868",
				"Rute"=> "RSUD Prof. Dr. Margono Soekarjo",
				"id"=> "2034"
			],
			[
				"Bujur"=> "109.269430",
				"Lintang"=> "-7.435102",
				"Rute"=> "RSUD Prof. Dr. Margono Soekarjo",
				"id"=> "2035"
			],
			[
				"Bujur"=> "109.269247",
				"Lintang"=> "-7.435485",
				"Rute"=> "RSUD Prof. Dr. Margono Soekarjo",
				"id"=> "2036"
			],
			[
				"Bujur"=> "109.269065",
				"Lintang"=> "-7.435996",
				"Rute"=> "RSUD Prof. Dr. Margono Soekarjo",
				"id"=> "2037"
			],
			[
				"Bujur"=> "109.268679",
				"Lintang"=> "-7.436815",
				"Rute"=> "RSUD Prof. Dr. Margono Soekarjo",
				"id"=> "2038"
			],
			[
				"Bujur"=> "109.268475",
				"Lintang"=> "-7.437177",
				"Rute"=> "RSUD Prof. Dr. Margono Soekarjo",
				"id"=> "2039"
			],
			[
				"Bujur"=> "109.268303",
				"Lintang"=> "-7.437634",
				"Rute"=> "RSUD Prof. Dr. Margono Soekarjo",
				"id"=> "2040"
			],
			[
				"Bujur"=> "109.268175",
				"Lintang"=> "-7.437922",
				"Rute"=> "RSUD Prof. Dr. Margono Soekarjo",
				"id"=> "2041"
			],
			[
				"Bujur"=> "109.268089",
				"Lintang"=> "-7.438060",
				"Rute"=> "RSUD Prof. Dr. Margono Soekarjo",
				"id"=> "2042"
			],
			[
				"Bujur"=> "109.260014",
				"Lintang"=> "-7.413589",
				"Rute"=> "Balaidesa Arcawinangun Purwokerto Timur",
				"id"=> "2043"
			],
			[
				"Bujur"=> "109.260175",
				"Lintang"=> "-7.414079",
				"Rute"=> "Balaidesa Arcawinangun Purwokerto Timur",
				"id"=> "2044"
			],
			[
				"Bujur"=> "109.260282",
				"Lintang"=> "-7.414419",
				"Rute"=> "Balaidesa Arcawinangun Purwokerto Timur",
				"id"=> "2045"
			],
			[
				"Bujur"=> "109.260411",
				"Lintang"=> "-7.414845",
				"Rute"=> "Balaidesa Arcawinangun Purwokerto Timur",
				"id"=> "2046"
			],
			[
				"Bujur"=> "109.260497",
				"Lintang"=> "-7.415153",
				"Rute"=> "Balaidesa Arcawinangun Purwokerto Timur",
				"id"=> "2047"
			],
			[
				"Bujur"=> "109.260593",
				"Lintang"=> "-7.415419",
				"Rute"=> "Balaidesa Arcawinangun Purwokerto Timur",
				"id"=> "2048"
			],
			[
				"Bujur"=> "109.260765",
				"Lintang"=> "-7.415983",
				"Rute"=> "Balaidesa Arcawinangun Purwokerto Timur",
				"id"=> "2049"
			],
			[
				"Bujur"=> "109.260969",
				"Lintang"=> "-7.416611",
				"Rute"=> "Balaidesa Arcawinangun Purwokerto Timur",
				"id"=> "2050"
			],
			[
				"Bujur"=> "109.261194",
				"Lintang"=> "-7.417355",
				"Rute"=> "Balaidesa Arcawinangun Purwokerto Timur",
				"id"=> "2051"
			],
			[
				"Bujur"=> "109.261366",
				"Lintang"=> "-7.418015",
				"Rute"=> "Balaidesa Arcawinangun Purwokerto Timur",
				"id"=> "2052"
			],
			[
				"Bujur"=> "109.266106",
				"Lintang"=> "-7.438156",
				"Rute"=> "Jl. Sunan Kalijaga",
				"id"=> "2053"
			],
			[
				"Bujur"=> "109.266406",
				"Lintang"=> "-7.439517",
				"Rute"=> "Jl. Sunan Kalijaga",
				"id"=> "2054"
			],
			[
				"Bujur"=> "109.266707",
				"Lintang"=> "-7.441007",
				"Rute"=> "Jl. Sunan Kalijaga",
				"id"=> "2055"
			],
			[
				"Bujur"=> "109.266964",
				"Lintang"=> "-7.442368",
				"Rute"=> "Jl. Sunan Kalijaga",
				"id"=> "2056"
			],
			[
				"Bujur"=> "109.267052",
				"Lintang"=> "-7.445092",
				"Rute"=> "Jl. Sunan Kalijaga",
				"id"=> "2057"
			],
			[
				"Bujur"=> "109.267050",
				"Lintang"=> "-7.446836",
				"Rute"=> "Jl. Sunan Kalijaga",
				"id"=> "2058"
			],
			[
				"Bujur"=> "109.266964",
				"Lintang"=> "-7.448709",
				"Rute"=> "Jl. Sunan Kalijaga",
				"id"=> "2059"
			],
			[
				"Bujur"=> "109.266793",
				"Lintang"=> "-7.450326",
				"Rute"=> "Jl. Sunan Kalijaga",
				"id"=> "2060"
			],
			[
				"Bujur"=> "109.266793",
				"Lintang"=> "-7.451900",
				"Rute"=> "Jl. Sunan Kalijaga",
				"id"=> "2061"
			],
			[
				"Bujur"=> "109.266750",
				"Lintang"=> "-7.453475",
				"Rute"=> "Jl. Sunan Kalijaga",
				"id"=> "2062"
			],
			[
				"Bujur"=> "109.266664",
				"Lintang"=> "-7.455007",
				"Rute"=> "Jl. Sunan Kalijaga",
				"id"=> "2063"
			],
			[
				"Bujur"=> "109.254532",
				"Lintang"=> "-7.427587",
				"Rute"=> "Jl. Supriyadi",
				"id"=> "2064"
			],
			[
				"Bujur"=> "109.254886",
				"Lintang"=> "-7.427566",
				"Rute"=> "Jl. Supriyadi",
				"id"=> "2065"
			],
			[
				"Bujur"=> "109.255487",
				"Lintang"=> "-7.427534",
				"Rute"=> "Jl. Supriyadi",
				"id"=> "2066"
			],
			[
				"Bujur"=> "109.255927",
				"Lintang"=> "-7.427502",
				"Rute"=> "Jl. Supriyadi",
				"id"=> "2067"
			],
			[
				"Bujur"=> "109.256431",
				"Lintang"=> "-7.427481",
				"Rute"=> "Jl. Supriyadi",
				"id"=> "2068"
			],
			[
				"Bujur"=> "109.256806",
				"Lintang"=> "-7.427502",
				"Rute"=> "Jl. Supriyadi",
				"id"=> "2069"
			],
			[
				"Bujur"=> "109.257160",
				"Lintang"=> "-7.427417",
				"Rute"=> "Jl. Supriyadi",
				"id"=> "2070"
			],
			[
				"Bujur"=> "109.257579",
				"Lintang"=> "-7.427406",
				"Rute"=> "Jl. Supriyadi",
				"id"=> "2071"
			],
			[
				"Bujur"=> "109.258158",
				"Lintang"=> "-7.427396",
				"Rute"=> "Jl. Supriyadi",
				"id"=> "2072"
			],
			[
				"Bujur"=> "109.258491",
				"Lintang"=> "-7.427353",
				"Rute"=> "Jl. Supriyadi",
				"id"=> "2073"
			],
			[
				"Bujur"=> "109.259059",
				"Lintang"=> "-7.427353",
				"Rute"=> "Jl. Supriyadi",
				"id"=> "2074"
			],
			[
				"Bujur"=> "109.259521",
				"Lintang"=> "-7.427332",
				"Rute"=> "Jl. Supriyadi",
				"id"=> "2075"
			],
			[
				"Bujur"=> "109.260283",
				"Lintang"=> "-7.427289",
				"Rute"=> "Jl. Supriyadi",
				"id"=> "2076"
			],
			[
				"Bujur"=> "109.260851",
				"Lintang"=> "-7.427289",
				"Rute"=> "Jl. Supriyadi",
				"id"=> "2077"
			],
			[
				"Bujur"=> "109.261366",
				"Lintang"=> "-7.427268",
				"Rute"=> "Jl. Supriyadi",
				"id"=> "2078"
			],
			[
				"Bujur"=> "109.261677",
				"Lintang"=> "-7.427279",
				"Rute"=> "Jl. Supriyadi",
				"id"=> "2079"
			],
			[
				"Bujur"=> "109.251289",
				"Lintang"=> "-7.423132",
				"Rute"=> "Jl. Martadireja 1",
				"id"=> "2080"
			],
			[
				"Bujur"=> "109.251997",
				"Lintang"=> "-7.423100",
				"Rute"=> "Jl. Martadireja 1",
				"id"=> "2081"
			],
			[
				"Bujur"=> "109.252469",
				"Lintang"=> "-7.423079",
				"Rute"=> "Jl. Martadireja 1",
				"id"=> "2082"
			],
			[
				"Bujur"=> "109.252866",
				"Lintang"=> "-7.423100",
				"Rute"=> "Jl. Martadireja 1",
				"id"=> "2083"
			],
			[
				"Bujur"=> "109.253155",
				"Lintang"=> "-7.423058",
				"Rute"=> "Jl. Martadireja 1",
				"id"=> "2085"
			],
			[
				"Bujur"=> "109.253756",
				"Lintang"=> "-7.423047",
				"Rute"=> "Jl. Martadireja 1",
				"id"=> "2085"
			],
			[
				"Bujur"=> "109.254314",
				"Lintang"=> "-7.423026",
				"Rute"=> "Jl. Martadireja 1",
				"id"=> "2086"
			],
			[
				"Bujur"=> "109.254657",
				"Lintang"=> "-7.423026",
				"Rute"=> "Jl. Martadireja 1",
				"id"=> "2087"
			],
			[
				"Bujur"=> "109.255655",
				"Lintang"=> "-7.422600",
				"Rute"=> "Jl. Martadireja 1",
				"id"=> "2088"
			],
			[
				"Bujur"=> "109.256320",
				"Lintang"=> "-7.422260",
				"Rute"=> "Jl. Martadireja 1",
				"id"=> "2089"
			],
			[
				"Bujur"=> "109.257104",
				"Lintang"=> "-7.421877",
				"Rute"=> "Jl. Martadireja 1",
				"id"=> "2090"
			],
			[
				"Bujur"=> "109.257747",
				"Lintang"=> "-7.421558",
				"Rute"=> "Jl. Martadireja 1",
				"id"=> "2091"
			],
			[
				"Bujur"=> "109.258284",
				"Lintang"=> "-7.421270",
				"Rute"=> "Jl. Martadireja 1",
				"id"=> "2092"
			],
			[
				"Bujur"=> "109.258627",
				"Lintang"=> "-7.421079",
				"Rute"=> "Jl. Martadireja 1",
				"id"=> "2093"
			],
			[
				"Bujur"=> "109.259239",
				"Lintang"=> "-7.420749",
				"Rute"=> "Jl. Martadireja 1",
				"id"=> "2094"
			],
			[
				"Bujur"=> "109.260011",
				"Lintang"=> "-7.420366",
				"Rute"=> "Jl. Martadireja 1",
				"id"=> "2095"
			],
			[
				"Bujur"=> "109.260934",
				"Lintang"=> "-7.419834",
				"Rute"=> "Jl. Martadireja 1",
				"id"=> "2096"
			],
			[
				"Bujur"=> "109.235201",
				"Lintang"=> "-7.423860",
				"Rute"=> "Jl. Mardikenya",
				"id"=> "2097"
			],
			[
				"Bujur"=> "109.235534",
				"Lintang"=> "-7.423902",
				"Rute"=> "Jl. Mardikenya",
				"id"=> "2098"
			],
			[
				"Bujur"=> "109.235845",
				"Lintang"=> "-7.423998",
				"Rute"=> "Jl. Mardikenya",
				"id"=> "2099"
			],
			[
				"Bujur"=> "109.236306",
				"Lintang"=> "-7.424094",
				"Rute"=> "Jl. Mardikenya",
				"id"=> "2100"
			],
			[
				"Bujur"=> "109.236660",
				"Lintang"=> "-7.424126",
				"Rute"=> "Jl. Mardikenya",
				"id"=> "2101"
			],
			[
				"Bujur"=> "109.236950",
				"Lintang"=> "-7.424179",
				"Rute"=> "Jl. Mardikenya",
				"id"=> "2102"
			],
			[
				"Bujur"=> "109.237186",
				"Lintang"=> "-7.424200",
				"Rute"=> "Jl. Mardikenya",
				"id"=> "2103"
			],
			[
				"Bujur"=> "109.254694",
				"Lintang"=> "-7.414952",
				"Rute"=> "Jl. Perum Arcawinangun",
				"id"=> "2104"
			],
			[
				"Bujur"=> "109.255123",
				"Lintang"=> "-7.414835",
				"Rute"=> "Jl. Perum Arcawinangun",
				"id"=> "2105"
			],
			[
				"Bujur"=> "109.255681",
				"Lintang"=> "-7.414697",
				"Rute"=> "Jl. Perum Arcawinangun",
				"id"=> "2106"
			],
			[
				"Bujur"=> "109.256185",
				"Lintang"=> "-7.414590",
				"Rute"=> "Jl. Perum Arcawinangun",
				"id"=> "2107"
			],
			[
				"Bujur"=> "109.256700",
				"Lintang"=> "-7.414420",
				"Rute"=> "Jl. Perum Arcawinangun",
				"id"=> "2108"
			],
			[
				"Bujur"=> "109.257237",
				"Lintang"=> "-7.414292",
				"Rute"=> "Jl. Perum Arcawinangun",
				"id"=> "2109"
			],
			[
				"Bujur"=> "109.257805",
				"Lintang"=> "-7.414090",
				"Rute"=> "Jl. Perum Arcawinangun",
				"id"=> "2110"
			],
			[
				"Bujur"=> "109.258449",
				"Lintang"=> "-7.413931",
				"Rute"=> "Jl. Perum Arcawinangun",
				"id"=> "2111"
			],
			[
				"Bujur"=> "109.259007",
				"Lintang"=> "-7.413782",
				"Rute"=> "Jl. Perum Arcawinangun",
				"id"=> "2112"
			],
			[
				"Bujur"=> "109.259382",
				"Lintang"=> "-7.413697",
				"Rute"=> "Jl. Perum Arcawinangun",
				"id"=> "2113"
			],
			[
				"Bujur"=> "109.259801",
				"Lintang"=> "-7.413622",
				"Rute"=> "Jl. Perum Arcawinangun",
				"id"=> "2114"
			],
			[
				"Bujur"=> "109.260337",
				"Lintang"=> "-7.413409",
				"Rute"=> "Jl. Perum Arcawinangun",
				"id"=> "2115"
			]
		];
		$angkot = [
			[
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"Trayek"=> "A1",
				"id"=> "1"
			],
			[
				"Rute"=> "Jl. Adhyaksa",
				"Trayek"=> "A1",
				"id"=> "2"
			],
			[
				"Rute"=> "Jl. Merdeka",
				"Trayek"=> "A1",
				"id"=> "3"
			],
			[
				"Rute"=> "Jl. Kolonel Sugiri",
				"Trayek"=> "A1",
				"id"=> "4"
			],
			[
				"Rute"=> "Jl. Gatot Subroto",
				"Trayek"=> "A1",
				"id"=> "5"
			],
			[
				"Rute"=> "Jl. Ksatrian",
				"Trayek"=> "A1",
				"id"=> "6"
			],
			[
				"Rute"=> "Jl. Dr. Angka",
				"Trayek"=> "A1",
				"id"=> "7"
			],
			[
				"Rute"=> "Jl. Jend. Ahmad Yani",
				"Trayek"=> "A1",
				"id"=> "8"
			],
			[
				"Rute"=> "Jl. RA Wiryaatmaja",
				"Trayek"=> "A1",
				"id"=> "9"
			],
			[
				"Rute"=> "Jl. Jenderal Sudirman",
				"Trayek"=> "A1",
				"id"=> "10"
			],
			[
				"Rute"=> "Jl. Yos Sudarso",
				"Trayek"=> "A1",
				"id"=> "11"
			],
			[
				"Rute"=> "Karanglewas",
				"Trayek"=> "A1",
				"id"=> "12"
			],
			[
				"Rute"=> "Monumen Panglima Besar Jendral Soedirman",
				"Trayek"=> "A1",
				"id"=> "13"
			],
			[
				"Rute"=> "Jl. Kolonel Sugiono",
				"Trayek"=> "A1",
				"id"=> "14"
			],
			[
				"Rute"=> "Jl. Situmpur",
				"Trayek"=> "A1",
				"id"=> "15"
			],
			[
				"Rute"=> "Jl. Pramuka",
				"Trayek"=> "A1",
				"id"=> "16"
			],
			[
				"Rute"=> "Jl. D.I. Panjaitan",
				"Trayek"=> "A1",
				"id"=> "17"
			],
			[
				"Rute"=> "Jl. Brigjen. Katamso",
				"Trayek"=> "A1",
				"id"=> "18"
			],
			[
				"Rute"=> "Jl. Moch.Iksan",
				"Trayek"=> "A1",
				"id"=> "19"
			],
			[
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"Trayek"=> "A2",
				"id"=> "20"
			],
			[
				"Rute"=> "Jl. Komisaris Bambang Suprapto",
				"Trayek"=> "A2",
				"id"=> "21"
			],
			[
				"Rute"=> "Jl. Mt Haryono",
				"Trayek"=> "A2",
				"id"=> "22"
			],
			[
				"Rute"=> "Jl. Jenderal Sudirman",
				"Trayek"=> "A2",
				"id"=> "23"
			],
			[
				"Rute"=> "Pasar Wage Purwokerto",
				"Trayek"=> "A2",
				"id"=> "24"
			],
			[
				"Rute"=> "Karanglewas",
				"Trayek"=> "A2",
				"id"=> "25"
			],
			[
				"Rute"=> "Monumen Panglima Besar Jendral Soedirman",
				"Trayek"=> "A2",
				"id"=> "26"
			],
			[
				"Rute"=> "Jl. RA Wiryaatmaja",
				"Trayek"=> "A2",
				"id"=> "27"
			],
			[
				"Rute"=> "Jl. Gatot Subroto",
				"Trayek"=> "A2",
				"id"=> "28"
			],
			[
				"Rute"=> "Jl. Jend. Ahmad Yani",
				"Trayek"=> "A2",
				"id"=> "29"
			],
			[
				"Rute"=> "Jl. Dr. Angka",
				"Trayek"=> "A2",
				"id"=> "30"
			],
			[
				"Rute"=> "Jl. Ksatrian",
				"Trayek"=> "A2",
				"id"=> "31"
			],
			[
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"Trayek"=> "B1",
				"id"=> "32"
			],
			[
				"Rute"=> "Jl. Sultan Agung",
				"Trayek"=> "B1",
				"id"=> "33"
			],
			[
				"Rute"=> "Jl. Kyai H. Wachid Hasyim",
				"Trayek"=> "B1",
				"id"=> "34"
			],
			[
				"Rute"=> "Jl. S. Parman",
				"Trayek"=> "B1",
				"id"=> "35"
			],
			[
				"Rute"=> "Jl. Jendral Suprapto",
				"Trayek"=> "B1",
				"id"=> "36"
			],
			[
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"Trayek"=> "B1",
				"id"=> "37"
			],
			[
				"Rute"=> "Jl. Overste Isdiman",
				"Trayek"=> "B1",
				"id"=> "38"
			],
			[
				"Rute"=> "Jl. Profesor DR. HR Boenyamin",
				"Trayek"=> "B1",
				"id"=> "39"
			],
			[
				"Rute"=> "Jl. Moh. Besar",
				"Trayek"=> "B1",
				"id"=> "40"
			],
			[
				"Rute"=> "Jl. Pol. Soemarto",
				"Trayek"=> "B1",
				"id"=> "41"
			],
			[
				"Rute"=> "Jl. Jend. Ahmad Yani",
				"Trayek"=> "B1",
				"id"=> "42"
			],
			[
				"Rute"=> "Jl. Gatot Subroto",
				"Trayek"=> "B1",
				"id"=> "43"
			],
			[
				"Rute"=> "Jl. RA Wiryaatmaja",
				"Trayek"=> "B1",
				"id"=> "44"
			],
			[
				"Rute"=> "Jl. Jenderal Sudirman",
				"Trayek"=> "B1",
				"id"=> "45"
			],
			[
				"Rute"=> "Jl. Mayjend Sutoyo",
				"Trayek"=> "B1",
				"id"=> "46"
			],
			[
				"Rute"=> "Jl. Pahlawan",
				"Trayek"=> "B1",
				"id"=> "47"
			],
			[
				"Rute"=> "Jl. Gerilya",
				"Trayek"=> "B1",
				"id"=> "48"
			],
			[
				"Rute"=> "Jl. Suwatio",
				"Trayek"=> "B1",
				"id"=> "49"
			],
			[
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"Trayek"=> "B2",
				"id"=> "50"
			],
			[
				"Rute"=> "Jl. Sultan Agung",
				"Trayek"=> "B2",
				"id"=> "51"
			],
			[
				"Rute"=> "Jl. Hos. Notosuwiryo",
				"Trayek"=> "B2",
				"id"=> "52"
			],
			[
				"Rute"=> "Jl. Gerilya",
				"Trayek"=> "B2",
				"id"=> "53"
			],
			[
				"Rute"=> "Jl. Pahlawan",
				"Trayek"=> "B2",
				"id"=> "54"
			],
			[
				"Rute"=> "Jl. Mayjend Sutoyo",
				"Trayek"=> "B2",
				"id"=> "55"
			],
			[
				"Rute"=> "Jl. Jenderal Sudirman",
				"Trayek"=> "B2",
				"id"=> "56"
			],
			[
				"Rute"=> "Jl. Masjid",
				"Trayek"=> "B2",
				"id"=> "57"
			],
			[
				"Rute"=> "Jl. Jend. Ahmad Yani",
				"Trayek"=> "B2",
				"id"=> "58"
			],
			[
				"Rute"=> "Jl. Pol. Soemarto",
				"Trayek"=> "B2",
				"id"=> "59"
			],
			[
				"Rute"=> "Jl. Moh. Besar",
				"Trayek"=> "B2",
				"id"=> "60"
			],
			[
				"Rute"=> "Jl. Profesor DR. HR Boenyamin",
				"Trayek"=> "B2",
				"id"=> "61"
			],
			[
				"Rute"=> "Jl. Overste Isdiman",
				"Trayek"=> "B2",
				"id"=> "62"
			],
			[
				"Rute"=> "Jl. Jatiwinangun",
				"Trayek"=> "B2",
				"id"=> "63"
			],
			[
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"Trayek"=> "B2",
				"id"=> "64"
			],
			[
				"Rute"=> "Jl. Pierre Tendean",
				"Trayek"=> "B2",
				"id"=> "65"
			],
			[
				"Rute"=> "Jl. Perintis Kemerdekaan",
				"Trayek"=> "B2",
				"id"=> "66"
			],
			[
				"Rute"=> "Jl. Situmpur",
				"Trayek"=> "B2",
				"id"=> "67"
			],
			[
				"Rute"=> "Jl. S. Parman",
				"Trayek"=> "B2",
				"id"=> "68"
			],
			[
				"Rute"=> "Jl. Suwatio",
				"Trayek"=> "B2",
				"id"=> "69"
			],
			[
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"Trayek"=> "C1",
				"id"=> "70"
			],
			[
				"Rute"=> "Jl. Sultan Agung",
				"Trayek"=> "C1",
				"id"=> "71"
			],
			[
				"Rute"=> "Jl. D.I. Panjaitan",
				"Trayek"=> "C1",
				"id"=> "72"
			],
			[
				"Rute"=> "Pasar Wage Purwokerto",
				"Trayek"=> "C1",
				"id"=> "73"
			],
			[
				"Rute"=> "Jl. Brigjen. Katamso",
				"Trayek"=> "C1",
				"id"=> "74"
			],
			[
				"Rute"=> "Jl. Moch.Iksan",
				"Trayek"=> "C1",
				"id"=> "75"
			],
			[
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"Trayek"=> "C1",
				"id"=> "76"
			],
			[
				"Rute"=> "Jl. Overste Isdiman",
				"Trayek"=> "C1",
				"id"=> "77"
			],
			[
				"Rute"=> "Jl. Dr. Angka",
				"Trayek"=> "C1",
				"id"=> "78"
			],
			[
				"Rute"=> "Jl. Jend. Ahmad Yani",
				"Trayek"=> "C1",
				"id"=> "79"
			],
			[
				"Rute"=> "Jl. Gatot Subroto",
				"Trayek"=> "C1",
				"id"=> "80"
			],
			[
				"Rute"=> "Jl. Pemuda",
				"Trayek"=> "C1",
				"id"=> "81"
			],
			[
				"Rute"=> "Jl. Jenderal Sudirman",
				"Trayek"=> "C1",
				"id"=> "82"
			],
			[
				"Rute"=> "Jl. Mayjend Sutoyo",
				"Trayek"=> "C1",
				"id"=> "83"
			],
			[
				"Rute"=> "Jl. Pahlawan",
				"Trayek"=> "C1",
				"id"=> "84"
			],
			[
				"Rute"=> "Jl. Gerilya",
				"Trayek"=> "C1",
				"id"=> "85"
			],
			[
				"Rute"=> "Jl. Kyai H. Wachid Hasyim",
				"Trayek"=> "C1",
				"id"=> "86"
			],
			[
				"Rute"=> "Jl. Lesanpura",
				"Trayek"=> "C1",
				"id"=> "87"
			],
			[
				"Rute"=> "PERUMAHAN PURI TELUK KELURAHAN TELUK KEC. PURWOKER",
				"Trayek"=> "C1",
				"id"=> "88"
			],
			[
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"Trayek"=> "C2",
				"id"=> "89"
			],
			[
				"Rute"=> "Jl. Sultan Agung",
				"Trayek"=> "C2",
				"id"=> "90"
			],
			[
				"Rute"=> "PERUMAHAN PURI TELUK KELURAHAN TELUK KEC. PURWOKER",
				"Trayek"=> "C2",
				"id"=> "91"
			],
			[
				"Rute"=> "Jl. Lesanpura",
				"Trayek"=> "C2",
				"id"=> "92"
			],
			[
				"Rute"=> "Jl. Kh. Agus Salim",
				"Trayek"=> "C2",
				"id"=> "93"
			],
			[
				"Rute"=> "Jl. Gerilya",
				"Trayek"=> "C2",
				"id"=> "94"
			],
			[
				"Rute"=> "Jl. Pahlawan",
				"Trayek"=> "C2",
				"id"=> "95"
			],
			[
				"Rute"=> "Jl. Mayjend Sutoyo",
				"Trayek"=> "C2",
				"id"=> "96"
			],
			[
				"Rute"=> "Jl. Jenderal Sudirman",
				"Trayek"=> "C2",
				"id"=> "97"
			],
			[
				"Rute"=> "Jl. Pemuda",
				"Trayek"=> "C2",
				"id"=> "98"
			],
			[
				"Rute"=> "Jl. Gatot Subroto",
				"Trayek"=> "C2",
				"id"=> "90"
			],
			[
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"Trayek"=> "C2",
				"id"=> "100"
			],
			[
				"Rute"=> "Jl. Komisaris Bambang Suprapto",
				"Trayek"=> "C2",
				"id"=> "101"
			],
			[
				"Rute"=> "Jl. Mt Haryono",
				"Trayek"=> "C2",
				"id"=> "102"
			],
			[
				"Rute"=> "Pasar Wage Purwokerto",
				"Trayek"=> "C2",
				"id"=> "103"
			],
			[
				"Rute"=> "Jl. D.I. Panjaitan",
				"Trayek"=> "C2",
				"id"=> "104"
			],
			[
				"Rute"=> "Jl. Suwatio",
				"Trayek"=> "C2",
				"id"=> "105"
			],
			[
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"Trayek"=> "D1",
				"id"=> "106"
			],
			[
				"Rute"=> "Jl. Sultan Agung",
				"Trayek"=> "D1",
				"id"=> "107"
			],
			[
				"Rute"=> "Jl. Hos. Notosuwiryo",
				"Trayek"=> "D1",
				"id"=> "108"
			],
			[
				"Rute"=> "Jl. D.I. Panjaitan",
				"Trayek"=> "D1",
				"id"=> "109"
			],
			[
				"Rute"=> "Jl. Brigjen. Katamso",
				"Trayek"=> "D1",
				"id"=> "110"
			],
			[
				"Rute"=> "Jl. Komisaris Bambang Suprapto",
				"Trayek"=> "D1",
				"id"=> "111"
			],
			[
				"Rute"=> "Jl. Jenderal Sudirman",
				"Trayek"=> "D1",
				"id"=> "112"
			],
			[
				"Rute"=> "Jl. Supriyadi",
				"Trayek"=> "D1",
				"id"=> "113"
			],
			[
				"Rute"=> "Jl. Adipati Mersi",
				"Trayek"=> "D1",
				"id"=> "114"
			],
			[
				"Rute"=> "Jl. Senopati",
				"Trayek"=> "D1",
				"id"=> "115"
			],
			[
				"Rute"=> "Jl. Martadireja 1",
				"Trayek"=> "D1",
				"id"=> "116"
			],
			[
				"Rute"=> "Jl. Mt Haryono",
				"Trayek"=> "D1",
				"id"=> "117"
			],
			[
				"Rute"=> "Jl. Moch.Iksan",
				"Trayek"=> "D1",
				"id"=> "118"
			],
			[
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"Trayek"=> "D1",
				"id"=> "119"
			],
			[
				"Rute"=> "Jl. Adhyaksa",
				"Trayek"=> "D1",
				"id"=> "120"
			],
			[
				"Rute"=> "Jl. Merdeka",
				"Trayek"=> "D1",
				"id"=> "121"
			],
			[
				"Rute"=> "Jl. Kolonel Sugiono",
				"Trayek"=> "D1",
				"id"=> "122"
			],
			[
				"Rute"=> "Jl. Kongsen",
				"Trayek"=> "D1",
				"id"=> "123"
			],
			[
				"Rute"=> "Jl. S. Parman",
				"Trayek"=> "D1",
				"id"=> "124"
			],
			[
				"Rute"=> "Jl. Gerilya",
				"Trayek"=> "D1",
				"id"=> "125"
			],
			[
				"Rute"=> "Jl. Suwatio",
				"Trayek"=> "D1",
				"id"=> "126"
			],
			[
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"Trayek"=> "D2",
				"id"=> "127"
			],
			[
				"Rute"=> "Jl. Sultan Agung",
				"Trayek"=> "D2",
				"id"=> "128"
			],
			[
				"Rute"=> "Jl. Kyai H. Wachid Hasyim",
				"Trayek"=> "D2",
				"id"=> "129"
			],
			[
				"Rute"=> "Jl. Gerilya",
				"Trayek"=> "D2",
				"id"=> "130"
			],
			[
				"Rute"=> "Jl. S. Parman",
				"Trayek"=> "D2",
				"id"=> "131"
			],
			[
				"Rute"=> "Jl. Jenderal Sudirman",
				"Trayek"=> "D2",
				"id"=> "132"
			],
			[
				"Rute"=> "Jl. Merdeka",
				"Trayek"=> "D2",
				"id"=> "133"
			],
			[
				"Rute"=> "Jl. Gatot Subroto",
				"Trayek"=> "D2",
				"id"=> "134"
			],
			[
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"Trayek"=> "D2",
				"id"=> "135"
			],
			[
				"Rute"=> "Jl. Komisaris Bambang Suprapto",
				"Trayek"=> "D2",
				"id"=> "136"
			],
			[
				"Rute"=> "Jl. Martadireja 1",
				"Trayek"=> "D2",
				"id"=> "137"
			],
			[
				"Rute"=> "Arcawinangun",
				"Trayek"=> "D2",
				"id"=> "138"
			],
			[
				"Rute"=> "Dukuhwaluh",
				"Trayek"=> "D2",
				"id"=> "139"
			],
			[
				"Rute"=> "Jl. Adipati Mersi",
				"Trayek"=> "D2",
				"id"=> "140"
			],
			[
				"Rute"=> "Jl. D.I. Panjaitan",
				"Trayek"=> "D2",
				"id"=> "141"
			],
			[
				"Rute"=> "Jl. Suwatio",
				"Trayek"=> "D2",
				"id"=> "142"
			],
			[
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"Trayek"=> "E1",
				"id"=> "143"
			],
			[
				"Rute"=> "Jl. Sultan Agung",
				"Trayek"=> "E1",
				"id"=> "144"
			],
			[
				"Rute"=> "Jl. Sunan Kalijaga",
				"Trayek"=> "E1",
				"id"=> "145"
			],
			[
				"Rute"=> "Jl. Jenderal Sudirman",
				"Trayek"=> "E1",
				"id"=> "146"
			],
			[
				"Rute"=> "Jl. Jendral Suprapto",
				"Trayek"=> "E1",
				"id"=> "147"
			],
			[
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"Trayek"=> "E1",
				"id"=> "148"
			],
			[
				"Rute"=> "Jl. Adhyaksa",
				"Trayek"=> "E1",
				"id"=> "149"
			],
			[
				"Rute"=> "Jl. Mardikenya",
				"Trayek"=> "E1",
				"id"=> "150"
			],
			[
				"Rute"=> "Jl. Kolonel Sugiri",
				"Trayek"=> "E1",
				"id"=> "151"
			],
			[
				"Rute"=> "Jl. Gatot Subroto",
				"Trayek"=> "E1",
				"id"=> "152"
			],
			[
				"Rute"=> "Jl. Ksatrian",
				"Trayek"=> "E1",
				"id"=> "153"
			],
			[
				"Rute"=> "Jl. Dr. Angka",
				"Trayek"=> "E1",
				"id"=> "154"
			],
			[
				"Rute"=> "Jl. Jend. Ahmad Yani",
				"Trayek"=> "E1",
				"id"=> "155"
			],
			[
				"Rute"=> "Jl. Masjid",
				"Trayek"=> "E1",
				"id"=> "156"
			],
			[
				"Rute"=> "Jl. Kolonel Sugiono",
				"Trayek"=> "E1",
				"id"=> "157"
			],
			[
				"Rute"=> "Jl. Perintis Kemerdekaan",
				"Trayek"=> "E1",
				"id"=> "158"
			],
			[
				"Rute"=> "Jl. Patriot",
				"Trayek"=> "E1",
				"id"=> "159"
			],
			[
				"Rute"=> "Jl. Gerilya",
				"Trayek"=> "E1",
				"id"=> "160"
			],
			[
				"Rute"=> "Jl. Suwatio",
				"Trayek"=> "E1",
				"id"=> "161"
			],
			[
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"Trayek"=> "E2",
				"id"=> "162"
			],
			[
				"Rute"=> "Jl. Sultan Agung",
				"Trayek"=> "E2",
				"id"=> "163"
			],
			[
				"Rute"=> "Jl. Moh. Yamin",
				"Trayek"=> "E2",
				"id"=> "164"
			],
			[
				"Rute"=> "Jl. Patriot",
				"Trayek"=> "E2",
				"id"=> "165"
			],
			[
				"Rute"=> "Jl. Perintis Kemerdekaan",
				"Trayek"=> "E2",
				"id"=> "166"
			],
			[
				"Rute"=> "Jl. Jenderal Sudirman",
				"Trayek"=> "E2",
				"id"=> "167"
			],
			[
				"Rute"=> "Jl. Masjid",
				"Trayek"=> "E2",
				"id"=> "168"
			],
			[
				"Rute"=> "Jl. Gatot Subroto",
				"Trayek"=> "E2",
				"id"=> "169"
			],
			[
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"Trayek"=> "E2",
				"id"=> "170"
			],
			[
				"Rute"=> "Jl. Jendral Suprapto",
				"Trayek"=> "E2",
				"id"=> "171"
			],
			[
				"Rute"=> "Jl. Mt Haryono",
				"Trayek"=> "E2",
				"id"=> "172"
			],
			[
				"Rute"=> "Jl. Jenderal Sudirman Timur",
				"Trayek"=> "E2",
				"id"=> "173"
			],
			[
				"Rute"=> "Jl. Gerilya",
				"Trayek"=> "E2",
				"id"=> "174"
			],
			[
				"Rute"=> "Jl. Suwatio",
				"Trayek"=> "E2",
				"id"=> "175"
			],
			[
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"Trayek"=> "F1",
				"id"=> "176"
			],
			[
				"Rute"=> "Jl. Pierre Tendean",
				"Trayek"=> "F1",
				"id"=> "177"
			],
			[
				"Rute"=> "Jl. Perintis Kemerdekaan",
				"Trayek"=> "F1",
				"id"=> "178"
			],
			[
				"Rute"=> "Jl. Gerilya",
				"Trayek"=> "F1",
				"id"=> "179"
			],
			[
				"Rute"=> "Tanjung",
				"Trayek"=> "F1",
				"id"=> "180"
			],
			[
				"Rute"=> "Jl. Patikraja - Purwokerto",
				"Trayek"=> "F1",
				"id"=> "181"
			],
			[
				"Rute"=> "Notog",
				"Trayek"=> "F1",
				"id"=> "182"
			],
			[
				"Rute"=> "Jl. Pahlawan",
				"Trayek"=> "F1",
				"id"=> "183"
			],
			[
				"Rute"=> "Jl. Mayjend Sutoyo",
				"Trayek"=> "F1",
				"id"=> "184"
			],
			[
				"Rute"=> "Jl. Jenderal Sudirman",
				"Trayek"=> "F1",
				"id"=> "185"
			],
			[
				"Rute"=> "Jl. RA Wiryaatmaja",
				"Trayek"=> "F1",
				"id"=> "186"
			],
			[
				"Rute"=> "Jl. Gatot Subroto",
				"Trayek"=> "F1",
				"id"=> "187"
			],
			[
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"Trayek"=> "F2",
				"id"=> "188"
			],
			[
				"Rute"=> "Jl. Pierre Tendean",
				"Trayek"=> "F2",
				"id"=> "189"
			],
			[
				"Rute"=> "Jl. Perintis Kemerdekaan",
				"Trayek"=> "F2",
				"id"=> "190"
			],
			[
				"Rute"=> "Jl. Situmpur",
				"Trayek"=> "F2",
				"id"=> "191"
			],
			[
				"Rute"=> "Jl. Pramuka",
				"Trayek"=> "F2",
				"id"=> "192"
			],
			[
				"Rute"=> "Jl. Jenderal Sudirman",
				"Trayek"=> "F2",
				"id"=> "193"
			],
			[
				"Rute"=> "Jl. Suparjo Rustam",
				"Trayek"=> "F2",
				"id"=> "194"
			],
			[
				"Rute"=> "Pasar Sokaraja",
				"Trayek"=> "F2",
				"id"=> "195"
			],
			[
				"Rute"=> "Pasar Wage Purwokerto",
				"Trayek"=> "F2",
				"id"=> "196"
			],
			[
				"Rute"=> "Jl. Masjid",
				"Trayek"=> "F2",
				"id"=> "197"
			],
			[
				"Rute"=> "Jl. Gatot Subroto",
				"Trayek"=> "F2",
				"id"=> "198"
			],
			[
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"Trayek"=> "G1",
				"id"=> "199"
			],
			[
				"Rute"=> "Jl. Sultan Agung",
				"Trayek"=> "G1",
				"id"=> "200"
			],
			[
				"Rute"=> "Jl. Moh. Yamin",
				"Trayek"=> "G1",
				"id"=> "201"
			],
			[
				"Rute"=> "Jl. Patriot",
				"Trayek"=> "G1",
				"id"=> "202"
			],
			[
				"Rute"=> "Jl. Perintis Kemerdekaan",
				"Trayek"=> "G1",
				"id"=> "203"
			],
			[
				"Rute"=> "Jl. Jenderal Sudirman",
				"Trayek"=> "G1",
				"id"=> "204"
			],
			[
				"Rute"=> "Jl. St.",
				"Trayek"=> "G1",
				"id"=> "205"
			],
			[
				"Rute"=> "Jl. Kober",
				"Trayek"=> "G1",
				"id"=> "206"
			],
			[
				"Rute"=> "Jl. Kamandaka",
				"Trayek"=> "G1",
				"id"=> "207"
			],
			[
				"Rute"=> "Universitas Wijaya Kusuma Purwokerto",
				"Trayek"=> "G1",
				"id"=> "208"
			],
			[
				"Rute"=> "Jl. Raya Beji",
				"Trayek"=> "G1",
				"id"=> "209"
			],
			[
				"Rute"=> "SPN Purwokerto",
				"Trayek"=> "G1",
				"id"=> "210"
			],
			[
				"Rute"=> "Jl. Riyanto",
				"Trayek"=> "G1",
				"id"=> "211"
			],
			[
				"Rute"=> "Jl. Profesor DR. HR Boenyamin",
				"Trayek"=> "G1",
				"id"=> "212"
			],
			[
				"Rute"=> "Jl. Overste Isdiman",
				"Trayek"=> "G1",
				"id"=> "213"
			],
			[
				"Rute"=> "Jl. Jatiwinangun",
				"Trayek"=> "G1",
				"id"=> "214"
			],
			[
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"Trayek"=> "G1",
				"id"=> "215"
			],
			[
				"Rute"=> "Jl. Pierre Tendean",
				"Trayek"=> "G1",
				"id"=> "216"
			],
			[
				"Rute"=> "Jl. Situmpur",
				"Trayek"=> "G1",
				"id"=> "217"
			],
			[
				"Rute"=> "Jl. S. Parman",
				"Trayek"=> "G1",
				"id"=> "218"
			],
			[
				"Rute"=> "Jl. Gerilya",
				"Trayek"=> "G1",
				"id"=> "219"
			],
			[
				"Rute"=> "Jl. Suwatio",
				"Trayek"=> "G1",
				"id"=> "220"
			],
			[
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"Trayek"=> "G2",
				"id"=> "221"
			],
			[
				"Rute"=> "Jl. Sultan Agung",
				"Trayek"=> "G2",
				"id"=> "222"
			],
			[
				"Rute"=> "Jl. Kyai H. Wachid Hasyim",
				"Trayek"=> "G2",
				"id"=> "223"
			],
			[
				"Rute"=> "Jl. S. Parman",
				"Trayek"=> "G2",
				"id"=> "224"
			],
			[
				"Rute"=> "Jl. Jendral Suprapto",
				"Trayek"=> "G2",
				"id"=> "225"
			],
			[
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"Trayek"=> "G2",
				"id"=> "226"
			],
			[
				"Rute"=> "Jl. Overste Isdiman",
				"Trayek"=> "G2",
				"id"=> "227"
			],
			[
				"Rute"=> "Jl. Profesor DR. HR Boenyamin",
				"Trayek"=> "G2",
				"id"=> "228"
			],
			[
				"Rute"=> "Sumampir",
				"Trayek"=> "G2",
				"id"=> "229"
			],
			[
				"Rute"=> "SPN Purwokerto",
				"Trayek"=> "G2",
				"id"=> "230"
			],
			[
				"Rute"=> "Beji",
				"Trayek"=> "G2",
				"id"=> "231"
			],
			[
				"Rute"=> "Universitas Wijaya Kusuma Purwokerto",
				"Trayek"=> "G2",
				"id"=> "232"
			],
			[
				"Rute"=> "Jl. Bobosan",
				"Trayek"=> "G2",
				"id"=> "233"
			],
			[
				"Rute"=> "Jl. Kober",
				"Trayek"=> "G2",
				"id"=> "234"
			],
			[
				"Rute"=> "Jl. St.",
				"Trayek"=> "G2",
				"id"=> "235"
			],
			[
				"Rute"=> "Jl. Jenderal Sudirman",
				"Trayek"=> "G2",
				"id"=> "236"
			],
			[
				"Rute"=> "Jl. Kolonel Sugiono",
				"Trayek"=> "G2",
				"id"=> "237"
			],
			[
				"Rute"=> "Jl. Perintis Kemerdekaan",
				"Trayek"=> "G2",
				"id"=> "238"
			],
			[
				"Rute"=> "Jl. Patriot",
				"Trayek"=> "G2",
				"id"=> "239"
			],
			[
				"Rute"=> "Jl. Moh. Yamin",
				"Trayek"=> "G2",
				"id"=> "240"
			],
			[
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"Trayek"=> "H1",
				"id"=> "241"
			],
			[
				"Rute"=> "Jl. Adhyaksa",
				"Trayek"=> "H1",
				"id"=> "242"
			],
			[
				"Rute"=> "Jl. Merdeka",
				"Trayek"=> "H1",
				"id"=> "243"
			],
			[
				"Rute"=> "Jl. Mardikenya",
				"Trayek"=> "H1",
				"id"=> "244"
			],
			[
				"Rute"=> "Jl. Kolonel Sugiri",
				"Trayek"=> "H1",
				"id"=> "245"
			],
			[
				"Rute"=> "Jl. Ksatrian",
				"Trayek"=> "H1",
				"id"=> "246"
			],
			[
				"Rute"=> "Jl. Karang Kobar",
				"Trayek"=> "H1",
				"id"=> "247"
			],
			[
				"Rute"=> "Sumampir",
				"Trayek"=> "H1",
				"id"=> "248"
			],
			[
				"Rute"=> "Jl. Profesor DR. HR Boenyamin",
				"Trayek"=> "H1",
				"id"=> "249"
			],
			[
				"Rute"=> "Jl. Karang Wangkal",
				"Trayek"=> "H1",
				"id"=> "250"
			],
			[
				"Rute"=> "Jl. DR. Soeparno",
				"Trayek"=> "H1",
				"id"=> "251"
			],
			[
				"Rute"=> "Jl. Kaliputih",
				"Trayek"=> "H1",
				"id"=> "252"
			],
			[
				"Rute"=> "Jl. Jenderal Sudirman",
				"Trayek"=> "H1",
				"id"=> "253"
			],
			[
				"Rute"=> "Pasar Wage Purwokerto",
				"Trayek"=> "H1",
				"id"=> "254"
			],
			[
				"Rute"=> "Jl. Jendral Suprapto",
				"Trayek"=> "H1",
				"id"=> "255"
			],
			[
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"Trayek"=> "H2",
				"id"=> "256"
			],
			[
				"Rute"=> "Jl. Komisaris Bambang Suprapto",
				"Trayek"=> "H2",
				"id"=> "257"
			],
			[
				"Rute"=> "Jl. Mt Haryono",
				"Trayek"=> "H2",
				"id"=> "258"
			],
			[
				"Rute"=> "Jl. Vihara",
				"Trayek"=> "H2",
				"id"=> "259"
			],
			[
				"Rute"=> "Jl. Brigjen. Katamso",
				"Trayek"=> "H2",
				"id"=> "260"
			],
			[
				"Rute"=> "Jl. DR. Soeparno",
				"Trayek"=> "H2",
				"id"=> "261"
			],
			[
				"Rute"=> "Jl. Karang Wangkal",
				"Trayek"=> "H2",
				"id"=> "262"
			],
			[
				"Rute"=> "Grendeng",
				"Trayek"=> "H2",
				"id"=> "263"
			],
			[
				"Rute"=> "Sumampir",
				"Trayek"=> "H2",
				"id"=> "264"
			],
			[
				"Rute"=> "Jl. Karang Kobar",
				"Trayek"=> "H2",
				"id"=> "265"
			],
			[
				"Rute"=> "Jl. Ksatrian",
				"Trayek"=> "H2",
				"id"=> "266"
			],
			[
				"Rute"=> "Jl. Gatot Subroto",
				"Trayek"=> "H2",
				"id"=> "267"
			],
			[
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"Trayek"=> "I1",
				"id"=> "268"
			],
			[
				"Rute"=> "Jl. Sultan Agung",
				"Trayek"=> "I1",
				"id"=> "269"
			],
			[
				"Rute"=> "Jl. Hos. Notosuwiryo",
				"Trayek"=> "I1",
				"id"=> "270"
			],
			[
				"Rute"=> "Jl. Gerilya",
				"Trayek"=> "I1",
				"id"=> "271"
			],
			[
				"Rute"=> "Jl. Pancurawis",
				"Trayek"=> "I1",
				"id"=> "272"
			],
			[
				"Rute"=> "Jl. Pramuka",
				"Trayek"=> "I1",
				"id"=> "273"
			],
			[
				"Rute"=> "Jl. Jenderal Sudirman",
				"Trayek"=> "I1",
				"id"=> "274"
			],
			[
				"Rute"=> "Jl. Kaliputih",
				"Trayek"=> "I1",
				"id"=> "275"
			],
			[
				"Rute"=> "Jl. Prof. Dr. Suharso",
				"Trayek"=> "I1",
				"id"=> "276"
			],
			[
				"Rute"=> "Pasar Wage Purwokerto",
				"Trayek"=> "I1",
				"id"=> "277"
			],
			[
				"Rute"=> "Jl. Dr. Angka",
				"Trayek"=> "I1",
				"id"=> "278"
			],
			[
				"Rute"=> "Jl. Karang Kobar",
				"Trayek"=> "I1",
				"id"=> "279"
			],
			[
				"Rute"=> "Jl. Brigjend. Encung",
				"Trayek"=> "I1",
				"id"=> "280"
			],
			[
				"Rute"=> "Jl. Bobosan",
				"Trayek"=> "I1",
				"id"=> "281"
			],
			[
				"Rute"=> "Jl. KS Tubun",
				"Trayek"=> "I1",
				"id"=> "282"
			],
			[
				"Rute"=> "Jl. Mayjend Sutoyo",
				"Trayek"=> "I1",
				"id"=> "283"
			],
			[
				"Rute"=> "Jl. Pahlawan",
				"Trayek"=> "I1",
				"id"=> "284"
			],
			[
				"Rute"=> "Jl. Kyai H. Wachid Hasyim",
				"Trayek"=> "I1",
				"id"=> "285"
			],
			[
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"Trayek"=> "I2",
				"id"=> "286"
			],
			[
				"Rute"=> "Jl. Sultan Agung",
				"Trayek"=> "I2",
				"id"=> "287"
			],
			[
				"Rute"=> "Jl. Hos. Notosuwiryo",
				"Trayek"=> "I2",
				"id"=> "288"
			],
			[
				"Rute"=> "Jl. Gerilya",
				"Trayek"=> "I2",
				"id"=> "289"
			],
			[
				"Rute"=> "Jl. Pahlawan",
				"Trayek"=> "I2",
				"id"=> "290"
			],
			[
				"Rute"=> "Jl. Mayjend Sutoyo",
				"Trayek"=> "I2",
				"id"=> "291"
			],
			[
				"Rute"=> "Jl. Jenderal Sudirman",
				"Trayek"=> "I2",
				"id"=> "292"
			],
			[
				"Rute"=> "Jl. KS Tubun",
				"Trayek"=> "I2",
				"id"=> "293"
			],
			[
				"Rute"=> "Jl. Bobosan",
				"Trayek"=> "I2",
				"id"=> "294"
			],
			[
				"Rute"=> "Jl. Brigjend. Encung",
				"Trayek"=> "I2",
				"id"=> "295"
			],
			[
				"Rute"=> "Jl. Karang Kobar",
				"Trayek"=> "I2",
				"id"=> "296"
			],
			[
				"Rute"=> "Jl. Dr. Angka",
				"Trayek"=> "I2",
				"id"=> "297"
			],
			[
				"Rute"=> "Jl. Overste Isdiman",
				"Trayek"=> "I2",
				"id"=> "298"
			],
			[
				"Rute"=> "Jl. Jatiwinangun",
				"Trayek"=> "I2",
				"id"=> "299"
			],
			[
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"Trayek"=> "I2",
				"id"=> "300"
			],
			[
				"Rute"=> "Jl. Komisaris Bambang Suprapto",
				"Trayek"=> "I2",
				"id"=> "301"
			],
			[
				"Rute"=> "Jl. Penatusan",
				"Trayek"=> "I2",
				"id"=> "302"
			],
			[
				"Rute"=> "Jl. Pramuka",
				"Trayek"=> "I2",
				"id"=> "303"
			],
			[
				"Rute"=> "Jl. Pancurawis",
				"Trayek"=> "I2",
				"id"=> "304"
			],
			[
				"Rute"=> "Jl. Suwatio",
				"Trayek"=> "I2",
				"id"=> "305"
			],
			[
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"Trayek"=> "J1",
				"id"=> "306"
			],
			[
				"Rute"=> "Jl. S. Parman",
				"Trayek"=> "J1",
				"id"=> "307"
			],
			[
				"Rute"=> "Jl. Pramuka",
				"Trayek"=> "J1",
				"id"=> "308"
			],
			[
				"Rute"=> "Jl. D.I. Panjaitan",
				"Trayek"=> "J1",
				"id"=> "309"
			],
			[
				"Rute"=> "Pasar Wage Purwokerto",
				"Trayek"=> "J1",
				"id"=> "310"
			],
			[
				"Rute"=> "Jl. Komisaris Bambang Suprapto",
				"Trayek"=> "J1",
				"id"=> "311"
			],
			[
				"Rute"=> "Jl. Mt Haryono",
				"Trayek"=> "J1",
				"id"=> "312"
			],
			[
				"Rute"=> "Jl. Jenderal Sudirman",
				"Trayek"=> "J1",
				"id"=> "313"
			],
			[
				"Rute"=> "Jl. Dr. Gumbreg",
				"Trayek"=> "J1",
				"id"=> "134"
			],
			[
				"Rute"=> "Perum Purnawira Ledug",
				"Trayek"=> "J1",
				"id"=> "315"
			],
			[
				"Rute"=> "Pliken",
				"Trayek"=> "J1",
				"id"=> "316"
			],
			[
				"Rute"=> "Jl. Adipati Mersi",
				"Trayek"=> "J1",
				"id"=> "317"
			],
			[
				"Rute"=> "Jl. Martadireja II",
				"Trayek"=> "J1",
				"id"=> "318"
			],
			[
				"Rute"=> "Jl. Martadireja 1",
				"Trayek"=> "J1",
				"id"=> "319"
			],
			[
				"Rute"=> "Jl. DR. Soeparno",
				"Trayek"=> "J1",
				"id"=> "320"
			],
			[
				"Rute"=> "Jl. Prof. Dr. Suharso",
				"Trayek"=> "J1",
				"id"=> "321"
			],
			[
				"Rute"=> "Jl. Overste Isdiman",
				"Trayek"=> "J1",
				"id"=> "322"
			],
			[
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"Trayek"=> "J1",
				"id"=> "323"
			],
			[
				"Rute"=> "Jl. Adyaksa",
				"Trayek"=> "J1",
				"id"=> "324"
			],
			[
				"Rute"=> "Jl. Merdeka",
				"Trayek"=> "J1",
				"id"=> "245"
			],
			[
				"Rute"=> "Jl. Mardikenya",
				"Trayek"=> "J1",
				"id"=> "326"
			],
			[
				"Rute"=> "Jl. Kolonel Sugiri",
				"Trayek"=> "J1",
				"id"=> "327"
			],
			[
				"Rute"=> "Jl. Kolonel Sugiono",
				"Trayek"=> "J1",
				"id"=> "328"
			],
			[
				"Rute"=> "Jl. Kalibener",
				"Trayek"=> "J1",
				"id"=> "329"
			],
			[
				"Rute"=> "Jl. Perintis Kemerdekaan",
				"Trayek"=> "J1",
				"id"=> "330"
			],
			[
				"Rute"=> "Jl. Gerilya",
				"Trayek"=> "J1",
				"id"=> "331"
			],
			[
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"Trayek"=> "J2",
				"id"=> "332"
			],
			[
				"Rute"=> "Jl. Overste Isdiman",
				"Trayek"=> "J2",
				"id"=> "333"
			],
			[
				"Rute"=> "Jl. Prof. Dr. Suharso",
				"Trayek"=> "J2",
				"id"=> "334"
			],
			[
				"Rute"=> "Jl. DR. Soeparno",
				"Trayek"=> "J2",
				"id"=> "335"
			],
			[
				"Rute"=> "Jl. Martadireja 1",
				"Trayek"=> "J2",
				"id"=> "336"
			],
			[
				"Rute"=> "Jl. Martadireja II",
				"Trayek"=> "J2",
				"id"=> "337"
			],
			[
				"Rute"=> "Jl. Adipati Mersi",
				"Trayek"=> "J2",
				"id"=> "338"
			],
			[
				"Rute"=> "Perum Purnawira Ledug",
				"Trayek"=> "J2",
				"id"=> "339"
			],
			[
				"Rute"=> "Jl. Dr. Gumbreg",
				"Trayek"=> "J2",
				"id"=> "340"
			],
			[
				"Rute"=> "Jl. Jenderal Sudirman",
				"Trayek"=> "J2",
				"id"=> "341"
			],
			[
				"Rute"=> "Jl. S. Parman",
				"Trayek"=> "J2",
				"id"=> "342"
			],
			[
				"Rute"=> "Jl. Gerilya",
				"Trayek"=> "J2",
				"id"=> "343"
			],
			[
				"Rute"=> "Jl. Suwatio",
				"Trayek"=> "J2",
				"id"=> "344"
			],
			[
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"Trayek"=> "J2",
				"id"=> "345"
			],
			[
				"Rute"=> "Jl. Perintis Kemerdekaan",
				"Trayek"=> "J2",
				"id"=> "346"
			],
			[
				"Rute"=> "Jl. Kalibener",
				"Trayek"=> "J2",
				"id"=> "347"
			],
			[
				"Rute"=> "Jl. Kolonel Sugiono",
				"Trayek"=> "J2",
				"id"=> "348"
			],
			[
				"Rute"=> "Jl. Kolonel Sugiri",
				"Trayek"=> "J2",
				"id"=> "349"
			],
			[
				"Rute"=> "Jl. Gatot Subroto",
				"Trayek"=> "J2",
				"id"=> "350"
			],
			[
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"Trayek"=> "K1",
				"id"=> "351"
			],
			[
				"Rute"=> "Jl. Overste Isdiman",
				"Trayek"=> "K1",
				"id"=> "352"
			],
			[
				"Rute"=> "Jl. Dr. Angka",
				"Trayek"=> "K1",
				"id"=> "353"
			],
			[
				"Rute"=> "Jl. Jend. Ahmad Yani",
				"Trayek"=> "K1",
				"id"=> "354"
			],
			[
				"Rute"=> "Jl. Gatot Subroto",
				"Trayek"=> "K1",
				"id"=> "355"
			],
			[
				"Rute"=> "Jl. Pemuda",
				"Trayek"=> "K1",
				"id"=> "356"
			],
			[
				"Rute"=> "Jl. St.",
				"Trayek"=> "K1",
				"id"=> "357"
			],
			[
				"Rute"=> "Jl. Kober",
				"Trayek"=> "K1",
				"id"=> "358"
			],
			[
				"Rute"=> "Jl. Bobosan",
				"Trayek"=> "K1",
				"id"=> "359"
			],
			[
				"Rute"=> "Jl. Raya Karangsalam - Purwokerto Road",
				"Trayek"=> "K1",
				"id"=> "360"
			],
			[
				"Rute"=> "SMA Negeri 2 Purwokerto",
				"Trayek"=> "K1",
				"id"=> "361"
			],
			[
				"Rute"=> "Jl. Pasir Raya I",
				"Trayek"=> "K1",
				"id"=> "362"
			],
			[
				"Rute"=> "Pasir Lor",
				"Trayek"=> "K1",
				"id"=> "363"
			],
			[
				"Rute"=> "Jl. Djajadiwangsa",
				"Trayek"=> "K1",
				"id"=> "364"
			],
			[
				"Rute"=> "Jl. Yos Sudarso",
				"Trayek"=> "K1",
				"id"=> "365"
			],
			[
				"Rute"=> "Jl. Veteran",
				"Trayek"=> "K1",
				"id"=> "366"
			],
			[
				"Rute"=> "Jl. Gerilya",
				"Trayek"=> "K1",
				"id"=> "367"
			],
			[
				"Rute"=> "Jl. S. Parman",
				"Trayek"=> "K1",
				"id"=> "368"
			],
			[
				"Rute"=> "Jl. Pramuka",
				"Trayek"=> "K1",
				"id"=> "369"
			],
			[
				"Rute"=> "Jl. D.I. Panjaitan",
				"Trayek"=> "K1",
				"id"=> "370"
			],
			[
				"Rute"=> "Pasar Wage Purwokerto",
				"Trayek"=> "K1",
				"id"=> "371"
			],
			[
				"Rute"=> "Jl. Moch.Iksan",
				"Trayek"=> "K1",
				"id"=> "372"
			],
			[
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"Trayek"=> "K2",
				"id"=> "373"
			],
			[
				"Rute"=> "Jl. Komisaris Bambang Suprapto",
				"Trayek"=> "K2",
				"id"=> "374"
			],
			[
				"Rute"=> "Jl. Mt Haryono",
				"Trayek"=> "K2",
				"id"=> "375"
			],
			[
				"Rute"=> "Pasar Wage Purwokerto",
				"Trayek"=> "K2",
				"id"=> "376"
			],
			[
				"Rute"=> "Jl. Jenderal Sudirman",
				"Trayek"=> "K2",
				"id"=> "377"
			],
			[
				"Rute"=> "Jl. S. Parman",
				"Trayek"=> "K2",
				"id"=> "378"
			],
			[
				"Rute"=> "Jl. Gerilya",
				"Trayek"=> "K2",
				"id"=> "379"
			],
			[
				"Rute"=> "Jl. Veteran",
				"Trayek"=> "K2",
				"id"=> "380"
			],
			[
				"Rute"=> "Jl. Yos Sudarso",
				"Trayek"=> "K2",
				"id"=> "381"
			],
			[
				"Rute"=> "Jl. Djajadiwangsa",
				"Trayek"=> "K2",
				"id"=> "382"
			],
			[
				"Rute"=> "Pasir Lor",
				"Trayek"=> "K2",
				"id"=> "383"
			],
			[
				"Rute"=> "Pasir Wetan",
				"Trayek"=> "K2",
				"id"=> "384"
			],
			[
				"Rute"=> "SMUN III",
				"Trayek"=> "K2",
				"id"=> "385"
			],
			[
				"Rute"=> "Jl. Raya Karangsalam - Purwokerto Road",
				"Trayek"=> "K2",
				"id"=> "385"
			],
			[
				"Rute"=> "Jl. Bobosan",
				"Trayek"=> "K2",
				"id"=> "387"
			],
			[
				"Rute"=> "Jl. Kober",
				"Trayek"=> "K2",
				"id"=> "388"
			],
			[
				"Rute"=> "Jl. Pemuda",
				"Trayek"=> "K2",
				"id"=> "389"
			],
			[
				"Rute"=> "Jl. Gatot Subroto",
				"Trayek"=> "K2",
				"id"=> "390"
			],
			[
				"Rute"=> "Jl. Jend. Ahmad Yani",
				"Trayek"=> "K2",
				"id"=> "391"
			],
			[
				"Rute"=> "Jl. Dr. Angka",
				"Trayek"=> "K2",
				"id"=> "392"
			],
			[
				"Rute"=> "Jl. Jatiwinangun",
				"Trayek"=> "K2",
				"id"=> "393"
			],
			[
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"Trayek"=> "L1",
				"id"=> "394"
			],
			[
				"Rute"=> "Jl. Komisaris Bambang Suprapto",
				"Trayek"=> "L1",
				"id"=> "395"
			],
			[
				"Rute"=> "Jl. Mt Haryono",
				"Trayek"=> "L1",
				"id"=> "396"
			],
			[
				"Rute"=> "Pasar Wage Purwokerto",
				"Trayek"=> "L1",
				"id"=> "397"
			],
			[
				"Rute"=> "Jl. Jenderal Sudirman",
				"Trayek"=> "L1",
				"id"=> "398"
			],
			[
				"Rute"=> "Jl. S. Parman",
				"Trayek"=> "L1",
				"id"=> "399"
			],
			[
				"Rute"=> "Jl. Gerilya",
				"Trayek"=> "L1",
				"id"=> "400"
			],
			[
				"Rute"=> "Jl. Moh. Yamin",
				"Trayek"=> "L1",
				"id"=> "401"
			],
			[
				"Rute"=> "Jl. Djajadiwangsa",
				"Trayek"=> "L1",
				"id"=> "402"
			],
			[
				"Rute"=> "Bersole",
				"Trayek"=> "L1",
				"id"=> "303"
			],
			[
				"Rute"=> "Kedungwringin",
				"Trayek"=> "L1",
				"id"=> "404"
			],
			[
				"Rute"=> "Tanjung",
				"Trayek"=> "L1",
				"id"=> "405"
			],
			[
				"Rute"=> "Jl. Pahlawan",
				"Trayek"=> "L1",
				"id"=> "406"
			],
			[
				"Rute"=> "Jl. Mayjend Sutoyo",
				"Trayek"=> "L1",
				"id"=> "407"
			],
			[
				"Rute"=> "Jl. Merdeka",
				"Trayek"=> "L1",
				"id"=> "408"
			],
			[
				"Rute"=> "Jl. Gatot Subroto",
				"Trayek"=> "L1",
				"id"=> "409"
			],
			[
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"Trayek"=> "L2",
				"id"=> "410"
			],
			[
				"Rute"=> "Jl. Pierre Tendean",
				"Trayek"=> "L2",
				"id"=> "411"
			],
			[
				"Rute"=> "Jl. Jenderal Sudirman",
				"Trayek"=> "L2",
				"id"=> "412"
			],
			[
				"Rute"=> "Jl. Mayjend Sutoyo",
				"Trayek"=> "L2",
				"id"=> "413"
			],
			[
				"Rute"=> "Jl. Pahlawan",
				"Trayek"=> "L2",
				"id"=> "414"
			],
			[
				"Rute"=> "Tanjung",
				"Trayek"=> "L2",
				"id"=> "415"
			],
			[
				"Rute"=> "Kedungwringin",
				"Trayek"=> "L2",
				"id"=> "416"
			],
			[
				"Rute"=> "Bersole",
				"Trayek"=> "L2",
				"id"=> "417"
			],
			[
				"Rute"=> "Jl. Djajadiwangsa",
				"Trayek"=> "L2",
				"id"=> "418"
			],
			[
				"Rute"=> "Jl. Moh. Yamin",
				"Trayek"=> "L2",
				"id"=> "419"
			],
			[
				"Rute"=> "Jl. Patriot",
				"Trayek"=> "L2",
				"id"=> "420"
			],
			[
				"Rute"=> "Jl. Perintis Kemerdekaan",
				"Trayek"=> "L2",
				"id"=> "421"
			],
			[
				"Rute"=> "Jl. Situmpur",
				"Trayek"=> "L2",
				"id"=> "422"
			],
			[
				"Rute"=> "Jl. Pramuka",
				"Trayek"=> "L2",
				"id"=> "423"
			],
			[
				"Rute"=> "Jl. D.I. Panjaitan",
				"Trayek"=> "L2",
				"id"=> "424"
			],
			[
				"Rute"=> "Jl. Brigjen. Katamso",
				"Trayek"=> "L2",
				"id"=> "425"
			],
			[
				"Rute"=> "Pasar Wage Purwokerto",
				"Trayek"=> "L2",
				"id"=> "426"
			],
			[
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"Trayek"=> "M1",
				"id"=> "427"
			],
			[
				"Rute"=> "Jl. Komisaris Bambang Suprapto",
				"Trayek"=> "M1",
				"id"=> "428"
			],
			[
				"Rute"=> "Jl. Mt Haryono",
				"Trayek"=> "M1",
				"id"=> "429"
			],
			[
				"Rute"=> "Pasar Wage Purwokerto",
				"Trayek"=> "M1",
				"id"=> "430"
			],
			[
				"Rute"=> "Jl. Jenderal Sudirman",
				"Trayek"=> "M1",
				"id"=> "431"
			],
			[
				"Rute"=> "Jl. D.I. Panjaitan",
				"Trayek"=> "M1",
				"id"=> "432"
			],
			[
				"Rute"=> "Jl. Gerilya",
				"Trayek"=> "M1",
				"id"=> "433"
			],
			[
				"Rute"=> "Jl. Suwatio",
				"Trayek"=> "M1",
				"id"=> "434"
			],
			[
				"Rute"=> "Jl. Sultan Agung",
				"Trayek"=> "M1",
				"id"=> "435"
			],
			[
				"Rute"=> "Jl. Martosayogo",
				"Trayek"=> "M1",
				"id"=> "436"
			],
			[
				"Rute"=> "Perum Pamujan",
				"Trayek"=> "M1",
				"id"=> "437"
			],
			[
				"Rute"=> "Jl. Patriot",
				"Trayek"=> "M1",
				"id"=> "438"
			],
			[
				"Rute"=> "Jl. Kyai H. Wachid Hasyim",
				"Trayek"=> "M1",
				"id"=> "439"
			],
			[
				"Rute"=> "Jl. Agus Salim",
				"Trayek"=> "M1",
				"id"=> "440"
			],
			[
				"Rute"=> "Karangpucung",
				"Trayek"=> "M1",
				"id"=> "441"
			],
			[
				"Rute"=> "Jl. Perintis Kemerdekaan",
				"Trayek"=> "M1",
				"id"=> "442"
			],
			[
				"Rute"=> "Jl. Kalibener",
				"Trayek"=> "M1",
				"id"=> "443"
			],
			[
				"Rute"=> "Jl. Kolonel Sugiono",
				"Trayek"=> "M1",
				"id"=> "444"
			],
			[
				"Rute"=> "Jl. Pierre Tendean",
				"Trayek"=> "M1",
				"id"=> "445"
			],
			[
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"Trayek"=> "M2",
				"id"=> "446"
			],
			[
				"Rute"=> "Jl. Pierre Tendean",
				"Trayek"=> "M2",
				"id"=> "447"
			],
			[
				"Rute"=> "Jl. Jenderal Sudirman",
				"Trayek"=> "M2",
				"id"=> "448"
			],
			[
				"Rute"=> "Jl. Kolonel Sugiono",
				"Trayek"=> "M2",
				"id"=> "449"
			],
			[
				"Rute"=> "Jl. Kalibener",
				"Trayek"=> "M2",
				"id"=> "450"
			],
			[
				"Rute"=> "Jl. Perintis Kemerdekaan",
				"Trayek"=> "M2",
				"id"=> "451"
			],
			[
				"Rute"=> "Karangpucung",
				"Trayek"=> "M2",
				"id"=> "452"
			],
			[
				"Rute"=> "Jl. Agus Salim",
				"Trayek"=> "M2",
				"id"=> "453"
			],
			[
				"Rute"=> "Jl. Kyai H. Wachid Hasyim",
				"Trayek"=> "M2",
				"id"=> "454"
			],
			[
				"Rute"=> "Jl. Patriot",
				"Trayek"=> "M2",
				"id"=> "455"
			],
			[
				"Rute"=> "Perum Pamujan",
				"Trayek"=> "M2",
				"id"=> "456"
			],
			[
				"Rute"=> "Jl. Martosayogo",
				"Trayek"=> "M2",
				"id"=> "457"
			],
			[
				"Rute"=> "Jl. Sultan Agung",
				"Trayek"=> "M2",
				"id"=> "458"
			],
			[
				"Rute"=> "Jl. Suwatio",
				"Trayek"=> "M2",
				"id"=> "459"
			],
			[
				"Rute"=> "Jl. Gerilya",
				"Trayek"=> "M2",
				"id"=> "460"
			],
			[
				"Rute"=> "Jl. D.I. Panjaitan",
				"Trayek"=> "M2",
				"id"=> "461"
			],
			[
				"Rute"=> "Jl. Brigjen. Katamso",
				"Trayek"=> "M2",
				"id"=> "462"
			],
			[
				"Rute"=> "Pasar Wage Purwokerto",
				"Trayek"=> "M2",
				"id"=> "463"
			],
			[
				"Rute"=> "Jl. Moch.Iksan",
				"Trayek"=> "M2",
				"id"=> "464"
			],
			[
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"Trayek"=> "N",
				"id"=> "465"
			],
			[
				"Rute"=> "Jl. Pierre Tendean",
				"Trayek"=> "N",
				"id"=> "466"
			],
			[
				"Rute"=> "Jl. Perintis Kemerdekaan",
				"Trayek"=> "N",
				"id"=> "467"
			],
			[
				"Rute"=> "Karangpucung",
				"Trayek"=> "N",
				"id"=> "468"
			],
			[
				"Rute"=> "Jl. Gerilya",
				"Trayek"=> "N",
				"id"=> "469"
			],
			[
				"Rute"=> "Jl. Veteran",
				"Trayek"=> "N",
				"id"=> "470"
			],
			[
				"Rute"=> "Pangebatan",
				"Trayek"=> "N",
				"id"=> "471"
			],
			[
				"Rute"=> "Jl. Djajadiwangsa",
				"Trayek"=> "N",
				"id"=> "472"
			],
			[
				"Rute"=> "Karanglewas",
				"Trayek"=> "N",
				"id"=> "473"
			],
			[
				"Rute"=> "Jl. Situmpur",
				"Trayek"=> "N",
				"id"=> "474"
			],
			[
				"Rute"=> "Jl. Pramuka",
				"Trayek"=> "N",
				"id"=> "475"
			],
			[
				"Rute"=> "Jl. D.I. Panjaitan",
				"Trayek"=> "N",
				"id"=> "476"
			],
			[
				"Rute"=> "Jl. Brigjen. Katamso",
				"Trayek"=> "N",
				"id"=> "477"
			],
			[
				"Rute"=> "Pasar Wage Purwokerto",
				"Trayek"=> "N",
				"id"=> "478"
			],
			[
				"Rute"=> "Jl. Moch.Iksan",
				"Trayek"=> "N",
				"id"=> "479"
			],
			[
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"Trayek"=> "O1",
				"id"=> "480"
			],
			[
				"Rute"=> "Jl. Sultan Agung",
				"Trayek"=> "O1",
				"id"=> "481"
			],
			[
				"Rute"=> "Jl. Hos. Notosuwiryo",
				"Trayek"=> "O1",
				"id"=> "482"
			],
			[
				"Rute"=> "Jl. D.I. Panjaitan",
				"Trayek"=> "O1",
				"id"=> "483"
			],
			[
				"Rute"=> "Jl. Pramuka",
				"Trayek"=> "O1",
				"id"=> "484"
			],
			[
				"Rute"=> "Jl. S. Parman",
				"Trayek"=> "O1",
				"id"=> "485"
			],
			[
				"Rute"=> "Jl. Kolonel Sugiri",
				"Trayek"=> "O1",
				"id"=> "486"
			],
			[
				"Rute"=> "Jl. Gatot Subroto",
				"Trayek"=> "O1",
				"id"=> "487"
			],
			[
				"Rute"=> "Jl. Ksatrian",
				"Trayek"=> "O1",
				"id"=> "488"
			],
			[
				"Rute"=> "Jl. Brigjend. Encung",
				"Trayek"=> "O1",
				"id"=> "489"
			],
			[
				"Rute"=> "Jl. Pol. Soemarto",
				"Trayek"=> "O1",
				"id"=> "490"
			],
			[
				"Rute"=> "Jl. Riyanto",
				"Trayek"=> "O1",
				"id"=> "491"
			],
			[
				"Rute"=> "Jl. Profesor DR. HR Boenyamin",
				"Trayek"=> "O1",
				"id"=> "492"
			],
			[
				"Rute"=> "Pabuaran",
				"Trayek"=> "O1",
				"id"=> "493"
			],
			[
				"Rute"=> "Jl. Sunan Ampel",
				"Trayek"=> "O1",
				"id"=> "494"
			],
			[
				"Rute"=> "Grendeng",
				"Trayek"=> "O1",
				"id"=> "495"
			],
			[
				"Rute"=> "Jl. Karang Wangkal",
				"Trayek"=> "O1",
				"id"=> "496"
			],
			[
				"Rute"=> "Jl. DR. Soeparno",
				"Trayek"=> "O1",
				"id"=> "497"
			],
			[
				"Rute"=> "Jl. Martadireja 1",
				"Trayek"=> "O1",
				"id"=> "498"
			],
			[
				"Rute"=> "Jl. Martadireja II",
				"Trayek"=> "O1",
				"id"=> "499"
			],
			[
				"Rute"=> "Jl. HM Bahrun",
				"Trayek"=> "O1",
				"id"=> "500"
			],
			[
				"Rute"=> "Jl. Jenderal Sudirman",
				"Trayek"=> "O1",
				"id"=> "501"
			],
			[
				"Rute"=> "RSUD Prof. Dr. Margono Soekarjo",
				"Trayek"=> "O1",
				"id"=> "502"
			],
			[
				"Rute"=> "Jl. Gerilya",
				"Trayek"=> "O1",
				"id"=> "503"
			],
			[
				"Rute"=> "Jl. Suwatio",
				"Trayek"=> "O1",
				"id"=> "504"
			],
			[
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"Trayek"=> "O2",
				"id"=> "505"
			],
			[
				"Rute"=> "Jl. Suwatio",
				"Trayek"=> "O2",
				"id"=> "506"
			],
			[
				"Rute"=> "Jl. Gerilya",
				"Trayek"=> "O2",
				"id"=> "507"
			],
			[
				"Rute"=> "Jl. HM Bahrun",
				"Trayek"=> "O2",
				"id"=> "509"
			],
			[
				"Rute"=> "Jl. Martadireja II",
				"Trayek"=> "O2",
				"id"=> "510"
			],
			[
				"Rute"=> "Jl. Martadireja 1",
				"Trayek"=> "O2",
				"id"=> "511"
			],
			[
				"Rute"=> "Jl. Karang Wangkal",
				"Trayek"=> "O2",
				"id"=> "512"
			],
			[
				"Rute"=> "Jl. Karang Wangkal",
				"Trayek"=> "O2",
				"id"=> "513"
			],
			[
				"Rute"=> "Grendeng",
				"Trayek"=> "O2",
				"id"=> "514"
			],
			[
				"Rute"=> "Jl. Sunan Ampel",
				"Trayek"=> "O2",
				"id"=> "515"
			],
			[
				"Rute"=> "Pabuaran",
				"Trayek"=> "O2",
				"id"=> "516"
			],
			[
				"Rute"=> "Jl. Profesor DR. HR Boenyamin",
				"Trayek"=> "O2",
				"id"=> "517"
			],
			[
				"Rute"=> "Jl. Riyanto",
				"Trayek"=> "O2",
				"id"=> "518"
			],
			[
				"Rute"=> "Jl. Pol. Soemarto",
				"Trayek"=> "O2",
				"id"=> "519"
			],
			[
				"Rute"=> "Jl. Brigjend. Encung",
				"Trayek"=> "O2",
				"id"=> "520"
			],
			[
				"Rute"=> "Jl. Ksatrian",
				"Trayek"=> "O2",
				"id"=> "521"
			],
			[
				"Rute"=> "Jl. Gatot Subroto",
				"Trayek"=> "O2",
				"id"=> "522"
			],
			[
				"Rute"=> "Jl. Merdeka",
				"Trayek"=> "O2",
				"id"=> "523"
			],
			[
				"Rute"=> "Jl. Jenderal Sudirman",
				"Trayek"=> "O2",
				"id"=> "524"
			],
			[
				"Rute"=> "Jl. Kol Sugiono",
				"Trayek"=> "O2",
				"id"=> "525"
			],
			[
				"Rute"=> "Jl. Perintis Kemerdekaan",
				"Trayek"=> "O2",
				"id"=> "526"
			],
			[
				"Rute"=> "Jl. Pramuka",
				"Trayek"=> "O2",
				"id"=> "527"
			],
			[
				"Rute"=> "Jl. D.I. Panjaitan",
				"Trayek"=> "O2",
				"id"=> "528"
			],
			[
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"Trayek"=> "P1",
				"id"=> "529"
			],
			[
				"Rute"=> "Jl. Sultan Agung",
				"Trayek"=> "P1",
				"id"=> "530"
			],
			[
				"Rute"=> "Jl. Jenderal Sudirman Timur",
				"Trayek"=> "P1",
				"id"=> "531"
			],
			[
				"Rute"=> "Jl. Dr. Gumbreg",
				"Trayek"=> "P1",
				"id"=> "532"
			],
			[
				"Rute"=> "Jl. Adipati Mersi",
				"Trayek"=> "P1",
				"id"=> "533"
			],
			[
				"Rute"=> "Jl. Martadireja II",
				"Trayek"=> "P1",
				"id"=> "534"
			],
			[
				"Rute"=> "Balaidesa Arcawinangun Purwokerto Timur",
				"Trayek"=> "P1",
				"id"=> "535"
			],
			[
				"Rute"=> "Perum Arcawinangun",
				"Trayek"=> "P1",
				"id"=> "536"
			],
			[
				"Rute"=> "Jl. DR. Soeparno",
				"Trayek"=> "P1",
				"id"=> "537"
			],
			[
				"Rute"=> "Jl. Prof. Dr. Suharso",
				"Trayek"=> "P1",
				"id"=> "538"
			],
			[
				"Rute"=> "Jl. Dr. Angka",
				"Trayek"=> "P1",
				"id"=> "539"
			],
			[
				"Rute"=> "Jl.Kesatrian",
				"Trayek"=> "P1",
				"id"=> "540"
			],
			[
				"Rute"=> "Jl. Gatot Subroto",
				"Trayek"=> "P1",
				"id"=> "541"
			],
			[
				"Rute"=> "Jl. Merdeka",
				"Trayek"=> "P1",
				"id"=> "542"
			],
			[
				"Rute"=> "Jl. Adyaksa",
				"Trayek"=> "P1",
				"id"=> "543"
			],
			[
				"Rute"=> "Jl. Pierre Tendean",
				"Trayek"=> "P1",
				"id"=> "544"
			],
			[
				"Rute"=> "Jl. Perintis Kemerdekaan",
				"Trayek"=> "P1",
				"id"=> "545"
			],
			[
				"Rute"=> "Jl. Pramuka",
				"Trayek"=> "P1",
				"id"=> "546"
			],
			[
				"Rute"=> "Jl. D.I. Panjaitan",
				"Trayek"=> "P1",
				"id"=> "547"
			],
			[
				"Rute"=> "Jl. Gerilya",
				"Trayek"=> "P1",
				"id"=> "548"
			],
			[
				"Rute"=> "Jl. Suwatio",
				"Trayek"=> "P1",
				"id"=> "549"
			],
			[
				"Rute"=> "Terminal Bulu Pitu Purwokerto",
				"Trayek"=> "P2",
				"id"=> "550"
			],
			[
				"Rute"=> "Jl. Gerilya",
				"Trayek"=> "P2",
				"id"=> "551"
			],
			[
				"Rute"=> "Jl. D.I. Panjaitan",
				"Trayek"=> "P2",
				"id"=> "552"
			],
			[
				"Rute"=> "Jl. Pramuka",
				"Trayek"=> "P2",
				"id"=> "553"
			],
			[
				"Rute"=> "Jl. S. Parman",
				"Trayek"=> "P2",
				"id"=> "554"
			],
			[
				"Rute"=> "Jl. Jenderal Sudirman",
				"Trayek"=> "P2",
				"id"=> "555"
			],
			[
				"Rute"=> "Jl. Pierre Tendean",
				"Trayek"=> "P2",
				"id"=> "556"
			],
			[
				"Rute"=> "Jl. Adyaksa",
				"Trayek"=> "P2",
				"id"=> "557"
			],
			[
				"Rute"=> "Jl. Merdeka",
				"Trayek"=> "P2",
				"id"=> "558"
			],
			[
				"Rute"=> "Jl. Mardikenya",
				"Trayek"=> "P2",
				"id"=> "559"
			],
			[
				"Rute"=> "Jl. Kolonel Sugiri",
				"Trayek"=> "P2",
				"id"=> "560"
			],
			[
				"Rute"=> "Jl. Ksatrian",
				"Trayek"=> "P2",
				"id"=> "561"
			],
			[
				"Rute"=> "Jl. Dr. Angka",
				"Trayek"=> "P2",
				"id"=> "562"
			],
			[
				"Rute"=> "Jl. Prof. Dr. Suharso",
				"Trayek"=> "P2",
				"id"=> "563"
			],
			[
				"Rute"=> "Jl. DR. Soeparno",
				"Trayek"=> "P2",
				"id"=> "564"
			],
			[
				"Rute"=> "Perum Arcawinangun",
				"Trayek"=> "P2",
				"id"=> "565"
			],
			[
				"Rute"=> "Balaidesa Arcawinangun Purwokerto Timur",
				"Trayek"=> "P2",
				"id"=> "566"
			],
			[
				"Rute"=> "Jl. Martadireja 1",
				"Trayek"=> "P2",
				"id"=> "567"
			],
			[
				"Rute"=> "Jl. Adipati Mersi",
				"Trayek"=> "P2",
				"id"=> "568"
			],
			[
				"Rute"=> "Jl. Dr. Gumbreg",
				"Trayek"=> "P2",
				"id"=> "569"
			],
			[
				"Rute"=> "Jl. Jenderal Sudirman Timur",
				"Trayek"=> "P2",
				"id"=> "570"
			],
			[
				"Rute"=> "Jl. Sultan Agung",
				"Trayek"=> "P2",
				"id"=> "571"
			]
		];

		$id = -1;
		$savevar = "";
		$listrute = array();
		$newitem = array();
		$newarr = array();
		$newarr2 = array();

		foreach($rute as $key => $value) {

			$sama = FALSE;

			if (count($listrute) > 0) {
				
				for ($i = 0; $i < count($listrute); $i++) {
				
					if ($listrute[$i] == trim(strtolower($value['Rute']))) {
						
						$sama = TRUE;

					}

				}

			}

			if (!$sama) {
				
				$listrute[] = trim(strtolower($value['Rute']));

			}
			

		}

		foreach ($listrute as $key3 => $value3) {
			
			$newitem = array();

			foreach ($rute as $key2 => $value2) {
			
				if (trim(strtolower($value2['Rute'])) == $value3) {
	
					$newitem[] = (string) $value2['Lintang'] . ',' . $value2['Bujur'];
	
				}				
	
			}

			$newarr[] = array(
				"id" => ($key3 + 1),
				"nama" => $value3,
				"rute" => $newitem
			);

		}

		// cari angkot
		$angkotarr = array();
		$varku = "";
		foreach ($angkot as $key => $value) {
			
			if ($varku != $value['Trayek']) {

				$varku = strtoupper($value['Trayek']);
				$angkotarr[] = strtoupper($value['Trayek']);

			}

		}

		$newangkot = array();

		foreach ($angkotarr as $key => $value) {
			
			$trayekid = array();

			foreach ($angkot as $key2 => $value2) {
				
				if ($value == strtoupper($value2['Trayek'])) {
					
					$trayekid[] = strtolower($value2['Rute']);

				}

			}

			sort($trayekid);

			$newangkot[] = [
				'kode' => $value,
				'rute' => $trayekid
			];

		}

		foreach ($newangkot as $key => $value) {
			
			$idrute = array();
			$rrute = "";
			foreach ($value['rute'] as $key3 => $value3) {

				foreach ($newarr as $key2 => $value2) {
					
					if ($value2['nama'] == $value3 && $rrute != $value3) {
						
						$idrute[] = $value2['id'];
						$rrute = $value3;
						
					}

				}

			}

			sort($idrute);

			$newangkot[$key]['rute'] = $idrute;
		}

		print_r(json_encode($newangkot));

	}

	public function contoh2() {

		print_r($_GET);

	}

	public function contoh() {

		if (isset($_POST['submitku']) || isset($_POST['formupload'])) {
			
			$config['upload_path']          = './170220181106/';
			$config['allowed_types']        = 'gif|jpg|png|txt';
			$config['file_name']			= microtime() . '.txt';
			$config['max_size']             = 2000;
			$config['max_width']            = 10000;
			$config['max_height']           = 10000;

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('formupload'))
			{
				$error = array('error' => $this->upload->display_errors());

				print_r($error);
			}
			else
			{
				$data = array('upload_data' => $this->upload->data());
				/* Result :
					Array ( 
						[upload_data] => Array ( 
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
						)
				*/
				print_r($data);
			}

		}

		echo form_open_multipart('login/contoh');
		echo form_upload(array('name' => 'formupload'));
		echo form_submit('submitku', 'Upload File');
		echo form_close();

	}

	public function verifyuser($token) {

		

	}

	public function proses() {

		$email = $this->input->post('txtemail');
		$email = html_escape(trim($email));

		$password = $this->input->post('txtpassword');
		$password = html_escape($password);

		if ($email == 'admin@admin.com' && $password == 'admin') {
			
			redirect('../admin/', 'location');

		} else {

			// redirect('../admin/', 'location');
			$this->load->view('partial/header_landing');
			$this->load->view('landing_page/wrong_pass_container');
			$this->load->view('partial/footer_landing');

		}

	}

}
