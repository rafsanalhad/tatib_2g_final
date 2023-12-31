<?php

class Mahasiswa extends Controller{
    public function __construct(){
        if($_SESSION['level'] != 3){
            header('location: '. BASEURL .'/login');
        }
    }
    public function index(){
        $data['biodata'] = $this->model('Mahasiswa_model')->getMahasiswaByNim($_SESSION['username']);
        $data['tingkat'] = $this->model('Pelanggaran_model')->getTingkatPelanggaranById($_SESSION['username']);
        $this->view('templates/mahasiswa/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('templates/mahasiswa/footer');
    }
    public function riwayatPelanggaran(){
        $data['biodata'] = $this->model('Mahasiswa_model')->getMahasiswaByNim($_SESSION['username']);
        $data['kompen'] = $this->model('Kompen_model')->getKompenByNim($_SESSION['username']);
        // $data['pelanggaran'] = $this->model('Pelanggaran_model')->getPelanggaranByNim($_SESSION['username']);
        // var_dump($data['kompen']);
        // die();
        // $data['pengaduan'] = $this->model('Pengaduan_model')->getPengaduanByNim($_SESSION['username']);
        $this->view('templates/mahasiswa/header', $data);
        $this->view('mahasiswa/riwayatPelanggaran', $data);
        $this->view('templates/mahasiswa/footer');
    }
    
    public function getKompenById($id){
        $data['kompen'] = $this->model('Kompen_model')->getKompenById($id);
        echo json_encode($data['kompen']);
    }
    public function updateKompen(){
        if ($this->model('Kompen_model')->updateKompen($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/mahasiswa/riwayatPelanggaran');
            exit;
        }else{
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/mahasiswa/riwayatPelanggaran');
            exit;
        }
    }
    public function uploadBuktiKompen($dataValue){
        $data['biodata'] = $this->model('Mahasiswa_model')->getMahasiswaByNim($_SESSION['username']);
        $this->view('templates/mahasiswa/header', $data);
        $this->view('mahasiswa/uploadBuktiKompen', $dataValue);
        $this->view('templates/mahasiswa/footer');
    }
    public function ubahPassword(){
        $data['biodata'] = $this->model('Mahasiswa_model')->getMahasiswaByNim($_SESSION['username']);
        $this->view('templates/mahasiswa/header', $data);
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