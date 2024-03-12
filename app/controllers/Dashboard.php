<?php

class Dashboard extends Controller
{

    public function index()
    {
        $data['judul'] = 'Dashboard';
        $data['buku'] = $this->model('Buku')->getAllBuku();
        $this->view('templates/header', $data);
        $this->view('dashboard/index', $data);
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

    public function hapus()
    {
        if ($this->model('Buku')->deleteDataBuku($_POST['kode_buku']) > 0) {
            Flasher::setFlash('Data Buku', 'Berhasil', 'green', 'di Hapus');
            header('location:' . BASEURL . '/dashboard');
            exit;
        } else {
            Flasher::setFlash('Data Buku', 'gagal', 'red', 'di Hapus');
            header('location:' . BASEURL . '/dashboard');
            exit;
        }
    }
}