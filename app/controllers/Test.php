<?php

class Test extends Controller
{

    public function index()
    {
        $data['judul'] = 'Test page';
        $this->view('templates/header', $data);
        $this->view('test/index');
        $this->view('templates/footer');
    }
}
