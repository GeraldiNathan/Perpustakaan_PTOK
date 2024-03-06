<?php

class Home extends Controller
{

    public function index()
    {
        $data['judul'] = 'home page';
        $this->view('templates/header', $data);
        $this->view('home/index');
        $this->view('templates/footer');
    }
}
