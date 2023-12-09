<?php

class Pelanggaran_model
{
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

    public function getAllPelanggaran()
    {
        $this->db->query('SELECT * FROM ' . $this->table4);
        return $this->db->resultSet();
    }
}
