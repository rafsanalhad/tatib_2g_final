<?php

class Kompen_model
{
    private $table1 = 'dosen';
    private $table2 = 'mahasiswa';
    private $table3 = 'pengaduan';
    private $table4 = 'pelanggaran';
    private $table5 = 'prodi';
    private $table6 = 'riwayat';
    private $db;


    public function __construct()
    {
        $this->db = new Database;
    }

    public function getKompenByNim()
    {
        $this->db->query('SELECT * FROM ' . $this->table3 . ' a INNER JOIN ' . $this->table2 . ' b ON a.nim = b.nim INNER JOIN 
                        ' . $this->table5 . ' c ON b.prodi_id = c.prodi_id INNER JOIN ' . $this->table4 . ' d 
                        ON a.pelanggaran_id = d.pelanggaran_id');
        return $this->db->resultSet();
    }
}
