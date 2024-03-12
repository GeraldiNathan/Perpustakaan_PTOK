<?php

class Register extends Controller
{
    public function index()
    {

        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        if (isset($_SESSION['nama'])) {
            header('Location:' . BASEURL . '/dashboard');
            exit();
        }

        $data['judul'] = 'Register Page';
        $this->view('register/index', $data);
    }

    public function signUp()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nama = $_POST['nama'];
            $username = $_POST['username'];
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $model = $this->model('signUp_model');

            if ($model->registerUser($nama, $username, $password)) {
                header('Location:' . BASEURL . '/login');
                exit();
            } else {
                echo "Registrasi Gagal";
            }
        }
    }
}
