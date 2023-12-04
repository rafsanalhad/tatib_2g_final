<?php

class Admin_model
{
    private $table1 = 'dosen';
    private $table2 = 'mahasiswa';
    private $table3 = 'pengaduan';
    private $table4 = 'pelanggaran';
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
        $this->db->query('SELECT p.tanggal_pengaduan, d.nama as nama_dosen, m.nama, m.nim, pe.tingkat, pe.pelanggaran
        FROM ' . $this->table3 . ' AS p 
        JOIN ' . $this->table1 . ' AS d ON p.nip = d.nip  
        JOIN ' . $this->table2 . ' AS m ON p.nim = m.nim
        JOIN ' . $this->table4 . ' AS pe ON p.pelanggaran_id = pe.pelanggaran_id');
        return $this->db->resultSet();
    }
    public function getLaporanKompen()
    {
        $this->db->query('SELECT p.tanggal_pengaduan, m.nama, m.nim, pe.tingkat, pe.pelanggaran
        FROM ' . $this->table3 . ' AS p
        JOIN ' . $this->table2 . ' AS m ON p.nim = m.nim 
        JOIN ' . $this->table4 . ' AS pe ON p.pelanggaran_id = pe.pelanggaran_id');


        return $this->db->resultSet();
    }

    
}
