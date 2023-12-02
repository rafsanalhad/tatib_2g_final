<?php

class Mahasiswa extends Controller{
    public function index(){
        $this->view('templates/mahasiswa/header');
        $this->view('mahasiswa/index');
        $this->view('templates/mahasiswa/footer');
    }
    public function riwayatPelanggaran(){
        $this->view('templates/mahasiswa/header');
        $this->view('mahasiswa/riwayatPelanggaran');
        $this->view('templates/mahasiswa/footer');
    }
    public function ubahPassword(){
        $this->view('templates/mahasiswa/header');
        $this->view('mahasiswa/ubahPassword');
        $this->view('templates/mahasiswa/footer');
    }
}