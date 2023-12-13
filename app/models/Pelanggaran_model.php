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
    public function getPelanggaranById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table4 . ' WHERE pelanggaran_id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function getTingkatPelanggaranById($id)
    {
        $this->db->query('SELECT m.nim, m.nama,
        COUNT(CASE WHEN pe.tingkat = 1 THEN 1 END) AS tingkat1,
        COUNT(CASE WHEN pe.tingkat = 2 THEN 1 END) AS tingkat2,
        COUNT(CASE WHEN pe.tingkat = 3 THEN 1 END) AS tingkat3,
        COUNT(CASE WHEN pe.tingkat = 4 THEN 1 END) AS tingkat4,
        COUNT(CASE WHEN pe.tingkat = 5 THEN 1 END) AS tingkat5
        FROM ' . $this->table2 . ' AS m 
        JOIN ' . $this->table3 . ' AS p ON m.nim = p.nim
        JOIN ' . $this->table4 . ' pe ON p.pelanggaran_id = pe.pelanggaran_id
        WHERE m.nim=:id
        GROUP BY m.nim');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
}
