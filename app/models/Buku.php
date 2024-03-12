<?php

class Buku{
    private $table = 'buku';
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function getAllBuku()
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' ORDER BY judul_buku ASC');
        $this->db->execute();
        return $this->db->resultSet();
    }


    public function getMahasiswaById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_mahasiswa=:id_mahasiswa ');
        $this->db->bind('id_mahasiswa', $id);
        return $this->db->single();
    }

    public function countDataMahasiswa()
    {
        $this->db->query('SELECT COUNT(*) FROM ' . $this->table);
        $this->db->execute();
        return $this->db->count();
    }

    public function insertDataBuku($data)
    {
        $query = "INSERT INTO buku VALUES ('', :judul_buku, :pengarang_buku, :kategori_buku, :tahun_terbit, :jumlah_hal)";
        $this->db->query($query);
        $this->db->bind('judul_buku', $data['judul_buku']);
        $this->db->bind('pengarang_buku', $data['pengarang_buku']);
        $this->db->bind('kategori_buku', $data['kategori_buku']);
        $this->db->bind('tahun_terbit', $data['tahun_terbit']);

        $this->db->bind('jumlah_hal', $data['jumlah_hal']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function editDataMahasiswa($data)
    {
        $query = "UPDATE " . $this->table . " SET nama_mahasiswa=:nama_mahasiswa,npm=:npm,username=:username,password=:password WHERE id_mahasiswa=:id_mahasiswa";
        $this->db->query($query);
        $this->db->bind('id_mahasiswa', $data['id_mahasiswa']);
        $this->db->bind('nama_mahasiswa', $data['nama_mahasiswa']);
        $this->db->bind('npm', $data['npm']);
        $this->db->bind('username', $data['username']);
        $this->db->bind('password', $data['password']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapusDataMahasiswa($id)
    {
        $query = "DELETE FROM " . $this->table . " WHERE id_mahasiswa=:id_mahasiswa";
        $this->db->query($query);
        $this->db->bind('id_mahasiswa', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function deleteDataBuku($id)
    {
        $query = "DELETE FROM " . $this->table . " WHERE kode_buku=:kode_buku";
        $this->db->query($query);
        $this->db->bind('kode_buku', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
