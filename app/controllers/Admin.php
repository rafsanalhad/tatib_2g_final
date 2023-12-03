<?php

class Admin extends Controller{
    public function __construct(){
        if($_SESSION['level'] != 1){
            header('location: '. BASEURL .'/login');
        }
    }
    public function index(){
        $data['judul'] = 'Admin Page';
        // $data['dosen'] = $this->model('Admin_model')->getDosen();
        $this->view('templates/admin/header', $data);
        $this->view('admin/index', $data);
        $this->view('templates/admin/footer');
    }
    public function dosen(){
        $data['judul'] = 'Admin Page';
        $data['dosen'] = $this->model('Admin_model')->getDosen();
        $this->view('templates/admin/header', $data);
        $this->view('admin/dosen', $data);
        $this->view('templates/admin/footer');
    }
    public function mahasiswa(){
        $data['judul'] = 'Admin Page';
        $data['mahasiswa'] = $this->model('Admin_model')->getMahasiswa();
        $this->view('templates/admin/header', $data);
        $this->view('admin/mahasiswa', $data);
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