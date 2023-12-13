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

    public function getKompenByNim($nim)
    {
        $this->db->query('SELECT * FROM ' . $this->table6 . ' a INNER JOIN ' . $this->table2 . ' b ON a.nim = b.nim INNER JOIN 
                        ' . $this->table3 . ' c ON a.pengaduan_id = c.pengaduan_id INNER JOIN ' . $this->table4 . ' d 
                        ON c.pelanggaran_id = d.pelanggaran_id WHERE a.nim = :nim');
        $this->db->bind('nim', $nim);
        return $this->db->resultSet();
    }
    public function getKompenById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table6 . ' a INNER JOIN ' . $this->table2 . ' b ON a.nim = b.nim INNER JOIN 
                        ' . $this->table3 . ' c ON a.pengaduan_id = c.pengaduan_id INNER JOIN ' . $this->table4 . ' d 
                        ON c.pelanggaran_id = d.pelanggaran_id WHERE a.riwayat_id = :id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
    public function updateStatusKompen($data)
    {
        $aksi = $data['aksi'];
        $status = '';
        if($aksi == 'kerjakan'){
            $status = 'sedang dikerjakan';
        }elseif ($aksi == 'upload') {
            $status = 'proses';
        }elseif ($aksi == 'ditolak') {
            $status = 'ditolak';
        }elseif ($aksi == 'selesai') {
            $status = 'selesai';
        }
        $this->db->query('UPDATE ' . $this->table6 . ' SET status_kompen = :status_kompen WHERE riwayat_id = :id');
        $this->db->bind('status_kompen', $status);
        $this->db->bind('id', $data['id']);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
