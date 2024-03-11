<?php

class Dashboard extends Controller
{

    public function index()
    {
        $data['judul'] = 'Dashboard';
        $this->view('templates/header', $data);
        $this->view('dashboard/index');
        $this->view('templates/footer');
    }

    public function addBuku()
    {
        if ($this->model('Buku')->insertDataBuku($_POST) > 0) {
            Flasher::setFlash('Data Buku', 'Berhasil', 'green', 'di Tambahkan');
            header('location:' . BASEURL . '/dashboard');
            exit;
        } else {
            Flasher::setFlash('Data Buku', 'gagal', 'red', 'di Tambahkan');
            header('location:' . BASEURL . '/dashboard');
            exit;
        }
    }
}
