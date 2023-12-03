<?php

class Dosen extends Controller{
    public function __construct(){
        if($_SESSION['level'] != 2){
            header('location: '. BASEURL .'/login');
        }
    }
    public function index(){
        $this->view('templates/dosen/header');
        $this->view('dosen/index');
        $this->view('templates/dosen/footer');
    }
    public function riwayatPengaduan(){
        $this->view('templates/dosen/header');
        $this->view('dosen/riwayatPengaduan');
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