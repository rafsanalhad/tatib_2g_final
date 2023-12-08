<?php

class Prodi_model
{
    private $table = 'prodi';
    private $table2 = 'mahasiswa';
    private $db;


    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllProdi()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }
}
