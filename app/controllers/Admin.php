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
    public function tambahDosen(){
        if ($this->model('Dosen_model')->tambahDataDosen($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/admin/dosen');
            exit;
        }else{
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/admin/dosen');
            exit;
        }
    }
    public function mahasiswa(){
        $data['judul'] = 'Admin Page';
        $data['mahasiswa'] = $this->model('Admin_model')->getMahasiswa();
        $this->view('templates/admin/header', $data);
        $this->view('admin/mahasiswa', $data);
        $this->view('templates/admin/footer');
    }
    public function tambahMahasiswa(){
        if ($this->model('Mahasiswa_model')->tambahDataMahasiswa($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/admin/mahasiswa');
            exit;
        }else{
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/admin/mahasiswa');
            exit;
        }
    }
    public function laporanPelanggaran(){
        $data['judul'] = 'Admin Page';
        $data['Pelanggaran'] = $this->model('Admin_model')->getLaporanPelanggaran();
        $this->view('templates/admin/header', $data);
        $this->view('admin/laporanPelanggaran', $data);
        $this->view('templates/admin/footer');
    }
    public function laporanKompen(){
        $data['judul'] = 'Admin Page';
        $data['laporanKompen'] = $this->model('Admin_model')->getLaporanKompen();
        $this->view('templates/admin/header', $data);
        $this->view('admin/laporanKompen', $data);
        $this->view('templates/admin/footer');
    }
    public function logout(){
        $this->view('templates/admin/header');
        $this->view('admin/logout');
        $this->view('templates/admin/footer');
    }
}