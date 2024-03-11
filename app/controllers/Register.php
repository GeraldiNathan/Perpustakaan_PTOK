<?php

class Register extends Controller
{

    public function index()
    {
        $data['judul'] = 'Register Page';
        $this->view('templates/header', $data);
        $this->view('register/index');
    }
}
