<?php

class Register extends Controller
{

    public function index()
    {
        $data['judul'] = 'Register Page';
        $this->view('register/index');
    }
}
