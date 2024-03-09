<?php

class Login extends Controller
{

    public function index()
    {
        $data['judul'] = 'Login Page';
        $this->view('login/index');
    }
}
