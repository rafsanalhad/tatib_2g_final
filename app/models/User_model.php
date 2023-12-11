<?php

class User_model
{
    private $table = 'user';
    private $table1 = 'dosen';
    private $table2 = 'mahasiswa';
    private $table3 = 'pengaduan';
    private $table4 = 'pelanggaran';
    private $table5 = 'prodi';
    private $db;


    public function __construct()
    {
        $this->db = new Database;
    }

    public function updatePassword($data)
    {
        $query = 'UPDATE '. $this->table .' SET password = :password WHERE username = :username';
        $pass = (md5($data['newPass']));
        $this->db->query($query);
        $this->db->bind('password', $pass);
        $this->db->bind('username', $data['username']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapusDataUser($data){
        $query ="DELETE FROM " . $this->table . " WHERE user_id = :user_id";
        $this->db->query($query);
        $this->db->bind('user_id', $data);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
