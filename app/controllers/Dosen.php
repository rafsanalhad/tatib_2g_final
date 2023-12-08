<?php

class Dosen extends Controller{
    public function __construct(){
        if($_SESSION['level'] != 2){
            header('location: '. BASEURL .'/login');
        }
    }
    public function index(){
        $data['biodata'] = $this->model('Dosen_model')->getDosenBySessionLogin($_SESSION['username']);
        $this->view('templates/dosen/header');
        $this->view('dosen/index', $data);
        $this->view('templates/dosen/footer');
    }
    public function riwayatPengaduan(){
        $data['pengaduan'] = $this->model('Pengaduan_model')->getPengaduan();
        $this->view('templates/dosen/header');
        $this->view('dosen/riwayatPengaduan', $data);
        $this->view('templates/dosen/footer');
    }
    public function formPengaduan(){
        $this->view('templates/dosen/header');
        $this->view('dosen/formPengaduan');
        $this->view('templates/dosen/footer');
    }
    public function ubahPassword(){
        $this->view('templates/dosen/header');
        $this->view('dosen/ubahPassword');
        $this->view('templates/dosen/footer');
    }
}