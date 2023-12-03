<?php

class Admin extends Controller{
    public function __construct(){
        if($_SESSION['level'] != 1){
            header('location: '. BASEURL .'/login');
        }
    }
    public function index(){
        $this->view('templates/admin/header');
        $this->view('admin/index');
        $this->view('templates/admin/footer');
    }
    public function dosen(){
        $this->view('templates/admin/header');
        $this->view('admin/dosen');
        $this->view('templates/admin/footer');
    }
    public function mahasiswa(){
        $this->view('templates/admin/header');
        $this->view('admin/mahasiswa');
        $this->view('templates/admin/footer');
    }
    public function laporanPelanggaran(){
        $this->view('templates/admin/header');
        $this->view('admin/laporanPelanggaran');
        $this->view('templates/admin/footer');
    }
    public function laporanKompen(){
        $this->view('templates/admin/header');
        $this->view('admin/laporanKompen');
        $this->view('templates/admin/footer');
    }
    public function logout(){
        $this->view('templates/admin/header');
        $this->view('admin/logout');
        $this->view('templates/admin/footer');
    }
}