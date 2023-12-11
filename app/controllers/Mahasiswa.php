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
    public function ubahPw(){
        if ($_POST['newPass'] == $_POST['confPass']){
            if ($this->model('User_model')->updatePassword($_POST) > 0) {
                Flasher::setFlash('Mahasiswa berupa password berhasil', 'diubah', 'success');
                header('Location: ' . BASEURL . '/mahasiswa/ubahPassword');
                exit;
            }else{
                Flasher::setFlash('password gagal', 'diubah', 'danger');
                header('Location: ' . BASEURL . '/mahasiswa/ubahPassword');
                exit;
            }
        }else{
            Flasher::setFlash('Password dan Konfirmasi Pasword', 'tidak sesuai', 'danger');
            header('Location: ' . BASEURL . '/mahasiswa/ubahPassword');
            exit;
        }
    }
}