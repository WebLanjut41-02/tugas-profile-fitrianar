<?php
class portofolio extends CI_Controller{
	public function index()
	{
		$data['judul'] = 'Portofolio';
		$this->load->view('template/header', $data);
		$this->load->view('portofolio/index', $data);
		$this->load->view('template/footer');
	}
} ?>