<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matakuliah extends CI_Controller {
	
	
	public function index()
	{
	
		$this->load->view('view_validation');
	}
	public function cetak()
	{
		$this->form_validation->set_rules('kode','kode Matakuliah','required|min_length[3]',
			[
				'required' => 'kode Matakuliah Harus Diisi',
				'min_length' => 'kode terlalu pendek',
			]
		);

		$this->form_validation->set_rules('nama','nama Matakuliah','required|min_length[3]',
			[
				'required' => 'nama Matakuliah Harus Diisi',
				'min_length' => 'nama terlalu pendek',
			]
		);
		

		if ($this->form_validation->run() == false) {
			
			$this->load->view('view_validation');

		}else {

			$data = [

				'kode'   	  =>	$this->input->post('kode'),
				'nama' =>	$this->input->post('nama'),
				'sks'  =>	$this->input->post('sks'),
			];
			$this->load->view('view_validation', $data);
		}
	}
	
}

