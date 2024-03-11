<?php

class Login extends Controller
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

        $data['judul'] = 'Login Page';
        $this->view('login/index', $data);
    }

    public function signIn()
    {
        session_start();

        $username = $_POST['username'];
        $password = $_POST['password'];
        $data['login'] = $this->model('signIn_model')->getUser($username, $password);

        if ($data['login'] == NULL) {
            header("Location:" . BASEURL . "/404");
        } else {
            foreach ($data['login'] as $row) :
                $_SESSION['nama'] = $row['nama'];
                header("Location:" . BASEURL . '/dashboard');
            endforeach;
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
