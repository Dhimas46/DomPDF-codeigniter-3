<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datadiri extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('pdf');
		ini_set('memory_limit', '1024M');
		$this->load->model('M_users');
	}

	public function index()
	{

		$path = base_url('public/profil.jpg');
		$type = pathinfo($path, PATHINFO_EXTENSION);
		$data = file_get_contents($path);
		$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

		$model = $this->M_users->get_users();

		$data = [
			'users' => $model,
			'logo' => $base64
		];
		$this->pdf->setPaper('A4', 'landscape');
		$this->pdf->filename = "datadiri.pdf";
		$this->pdf->load_view('datadiri', $data);

	}
}
