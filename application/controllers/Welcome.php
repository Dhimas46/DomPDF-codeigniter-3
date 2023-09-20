<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){

		parent::__construct();
		$this->load->helper('url');
		$this->load->library('pdf');
		ini_set('memory_limit', '1024M');
	}

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function create()
	{
		$path = base_url('public/logo.png');
		$type = pathinfo($path, PATHINFO_EXTENSION);
		$data = file_get_contents($path);
		$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
		$data = [
			'nama' => 'Dhimas Wahyu Prayogi',
			'posisi' => 'Fullstack Developer',
			'logo' => $base64,
		];
		$this->pdf->setPaper('A4', 'potrait');
		$this->pdf->filename = "kopsurat.pdf";
		$this->pdf->load_view('pdf', $data);
	}
}
