<?php

class Login extends Controller
{
    public function __construct()
    {
        if (isset($_SESSION['level'])) {
            if ($_SESSION['level'] == 1) {
                header('location: ' . BASEURL . '/admin');
            } else if ($_SESSION['level'] == 2) {
                header('location: ' . BASEURL . '/dosen');
            } else if ($_SESSION['level'] == 3) {
                header('location: ' . BASEURL . '/mahasiswa');
            }
        }
    }
    public function index()
    {
        $this->view('auth/login/index');
    }
    public function prosesLogin()
    {
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        $row = $this->model('Login_model')->getUser($username, $password);
        if ($row) {
            $cekTingkatPelanggaran = $this->model('Pelanggaran_model')->getTingkatPelanggaranById($row['username']);
            if ($cekTingkatPelanggaran['tingkat1'] >= 1) {
                Flasher::setFlash('gagal', 'Anda terkena pelanggaran tingkat  <br>1 dan dinyatakan putus studi', 'danger');
                header('location: ' . BASEURL . '/auth');
                exit;
            }
            if ($row['password'] == $password) {

                $_SESSION['level'] = $row['level'];

                if ($row['level'] == 1) {
                    $_SESSION['username'] =  $row['username'];
                    header('location: ' . BASEURL . '/admin');
                } else if ($row['level'] == 2) {
                    $_SESSION['username'] =  $row['username'];
                    header('location: ' . BASEURL . '/dosen');
                } else if ($row['level'] == 3) {
                    $_SESSION['username'] =  $row['username'];
                    header('location: ' . BASEURL . '/mahasiswa');
                } else {
                    Flasher::setFlash('gagal', 'Username/password salah', 'danger');
                    header('location: ' . BASEURL . '/auth');
                }
            } else {
                Flasher::setFlash('gagal', 'Username/password salah', 'danger');
                header('location: ' . BASEURL . '/auth');
                exit;
            }
        } else {
            Flasher::setFlash('gagal', 'Username/password salah', 'danger');
            header('location: ' . BASEURL . '/auth');
            exit;
        }
    }
    public function logout()
    {
        session_destroy();
    }
}
