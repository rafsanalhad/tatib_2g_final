<?php

class Mahasiswa extends Controller{
    public function __construct(){
        if($_SESSION['level'] != 3){
            header('location: '. BASEURL .'/login');
        }
    }
    public function index(){
        $data['biodata'] = $this->model('Mahasiswa_model')->getMahasiswaByNim($_SESSION['username']);
        $this->view('templates/mahasiswa/header');
        $this->view('mahasiswa/index', $data);
        $this->view('templates/mahasiswa/footer');
    }
    public function riwayatPelanggaran(){
        $data['kompen'] = $this->model('Kompen_model')->getKompenByNim($_SESSION['username']);
        $this->view('templates/mahasiswa/header');
        $this->view('mahasiswa/riwayatPelanggaran', $data);
        $this->view('templates/mahasiswa/footer');
    }
    public function uploadBuktiKompen(){
        $this->view('templates/mahasiswa/header');
        $this->view('mahasiswa/uploadBuktiKompen');
        $this->view('templates/mahasiswa/footer');
    }
    public function ubahPassword(){
        $this->view('templates/mahasiswa/header');
        $this->view('mahasiswa/ubahPassword');
        $this->view('templates/mahasiswa/footer');
    }
}