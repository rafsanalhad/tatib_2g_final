<?php

class Admin_model
{
    private $table1 = 'dosen';
    private $table2 = 'mahasiswa';
    private $db;


    public function __construct()
    {
        $this->db = new Database;
    }

    public function getDosen()
    {
        $this->db->query('SELECT * FROM ' . $this->table1);
        return $this->db->resultSet();
    }
    public function getMahasiswa()
    {
        $this->db->query('SELECT * FROM ' . $this->table2);
        return $this->db->resultSet();
    }
    public function getLaporanPelanggaran()
    {
        $this->db->query('SELECT * FROM ' . $this->table2);
        return $this->db->resultSet();
    }
    public function getLaporanKompen()
    {
        $this->db->query('SELECT * FROM ' . $this->table2);
        return $this->db->resultSet();
    }
}
