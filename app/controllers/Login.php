<?php

class Login extends Controller
{

    public function index()
    {
        // if (!isset($_SESSION)) {
        //     session_start();
        // }

        if (isset($_SESSION['nama'])) {
            header('Location:' . BASEURL . '/dashboard');
            exit();
        }

        $data['judul'] = 'Login Page';
        $this->view('login/index', $data);
    }

    public function signIn()
    {
        // if (!isset($_SESSION)) {

        //     session_start();
        // }

        $username = $_POST['username'];
        $password = $_POST['password'];
        $userData = $this->model('signIn_model')->getUser($username, $password);

        if ($userData) {
            $hashedPassword = $userData['password'];
            if (password_verify($password, $hashedPassword)) {
                $_SESSION['nama'] = $userData['nama'];
                header("Location:" . BASEURL . '/dashboard');
                exit();
            } else {
                header("Location:" . BASEURL . "/404");
                exit();
            }
        } else {
            header("Location:" . BASEURL . "/404");
            exit();
        }
    }

    public function logOut()
    {
        session_start();
        unset($_SESSION['nama']);
        session_destroy();
        header('location:' . BASEURL);
    }
}
