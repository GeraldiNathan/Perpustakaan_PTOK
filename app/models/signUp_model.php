<?php

class signUp_model
{
    private $users = 'users';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function registerUser($nama, $username, $password)
    {
        $this->db->query("INSERT INTO " . $this->users . "(nama, username, password) VALUES (:nama, :username, :password)");
        $this->db->bind('nama', $nama);
        $this->db->bind('username', $username);
        $this->db->bind('password', $password);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
