<?php

class Mahasiswa extends CI_Controller {
    public function index()
    {
        $this->load->model('Mahasiswa_model');
        $data['Judul'] = 'Daftar Mahasiswa';
        $data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();
        $this->load->view('templates/header', $data);
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('templates/footer');        
    }
}