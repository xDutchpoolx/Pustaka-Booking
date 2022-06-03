<?php

class Web extends CI_Controller {
    public function index($nama = '')
    {
        $this->load->database();
        $data['Judul'] = 'Halaman Utama';
        $data['nama'] = $nama;
        $this->load->view('templates/header', $data);
        $this->load->view('Web/index', $data);
        $this->load->view('templates/footer');
    }
}