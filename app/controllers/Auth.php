<?php

class Auth extends Controller
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

        $row = $this->model('Auth_model')->getUser($username, $password);
        var_dump($row);

        $_SESSION['level'] = $row['level'];

        if ($row['level'] == 1) {
            header('location: '. BASEURL .'/admin');
        } else if ($row['level'] == 2) {
            $_SESSION['username'] =  $row['username'];
            header('location: '. BASEURL .'/dosen');
        } else if ($row['level'] == 3) {

            $_SESSION['username'] =  $row['username'];
            header('location: '. BASEURL .'/mahasiswa');
        } else {
            echo "Salah";
            header('location: '. BASEURL .'/auth');
        }
    }
    public function logout()
    {
        session_destroy();
    }
}
