<?php 

class Form extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
	}

	function index(){
		$this->load->view('v_form');
	}

	function aksi(){
		$this->form_validation->set_rules('nama','Nama','required');
                $this->form_validation->set_rules('matkul','Nama Mata Kuliah','required');
                $this->form_validation->set_rules('kodematkul','Kode Mata Kuliah','required');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('konfir_email','Konfirmasi Email','required');

		if($this->form_validation->run() != false){
			echo "Data Tervalidasi!";
		}else{
			$this->load->view('v_form');
		}
	}
}