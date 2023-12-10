<?php

class Admin_model
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

    public function getDosen()
    {
        $this->db->query('SELECT * FROM ' . $this->table1);
        return $this->db->resultSet();
    }
    public function getMahasiswa()
    {
        $this->db->query('SELECT  m.nama, m.nim, p.prodi_nama, m.TTL, m.jenis_kelamin, m.phone_ortu, m.alamat 
        FROM ' . $this->table2 . ' as m
        JOIN ' . $this->table5 . ' as p ON m.prodi_id = p.prodi_id');
        return $this->db->resultSet();
    }
    public function getLaporanPelanggaran()
    {
        $this->db->query('SELECT p.pengaduan_id, p.status_pengaduan, p.tanggal_pengaduan, d.nama as nama_dosen, m.nama, m.nim, pe.tingkat, pe.pelanggaran
        FROM ' . $this->table3 . ' AS p 
        JOIN ' . $this->table1 . ' AS d ON p.nip = d.nip  
        JOIN ' . $this->table2 . ' AS m ON p.nim = m.nim
        JOIN ' . $this->table4 . ' AS pe ON p.pelanggaran_id = pe.pelanggaran_id');
        return $this->db->resultSet();
    }
    public function getLaporanPelanggaranById($id)
    {
        $this->db->query('SELECT p.pengaduan_id, p.tanggal_pengaduan, p.bukti_pelanggaran, d.nama as nama_dosen, m.nama, m.nim, m.jenis_kelamin, m.no_phone, pr.prodi_nama, m.phone_ortu, pe.tingkat, pe.pelanggaran
        FROM ' . $this->table3 . ' AS p 
        JOIN ' . $this->table1 . ' AS d ON p.nip = d.nip  
        JOIN ' . $this->table2 . ' AS m ON p.nim = m.nim
        JOIN ' . $this->table4 . ' AS pe ON p.pelanggaran_id = pe.pelanggaran_id
        JOIN ' . $this->table5 . ' AS pr ON m.prodi_id = pr.prodi_id
        WHERE p.pengaduan_id = :id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
    public function hasilLaporanPelanggaran($param, $data)
    {
        if($param == 'terima'){
            $paramResult = 'valid';
        }else if($param == 'tolak'){
            $paramResult = 'tidak valid';
        }
        $query = "UPDATE pengaduan SET status_pengaduan = :status_pengaduan, catatan = :catatan WHERE pengaduan_id = :pengaduan_id";
        $this->db->query($query);
        $this->db->bind('catatan', $data['catatan']);
        $this->db->bind('status_pengaduan', $paramResult);
        $this->db->bind('pengaduan_id', $data['pengaduan_id']);

        $this->db->execute();
        return $this->db->rowCount();
    }
    public function getLaporanKompen()
    {
        $this->db->query('SELECT p.tanggal_pengaduan, m.nama, m.nim, pe.tingkat, pe.pelanggaran
        FROM ' . $this->table3 . ' AS p
        JOIN ' . $this->table2 . ' AS m ON p.nim = m.nim 
        JOIN ' . $this->table4 . ' AS pe ON p.pelanggaran_id = pe.pelanggaran_id');
        return $this->db->resultSet();
    }
    public function hitungDosen()
    {
        $this->db->query('SELECT COUNT(nip) as jumlah_dosen FROM dosen');
        return $this->db->single();
    }
    public function hitungMahasiswa()
    {
        $this->db->query('SELECT COUNT(nim) as jumlah_mahasiswa FROM mahasiswa');
        return $this->db->single();
    }
    public function hitungPelanggaran()
    {
        $this->db->query('SELECT COUNT(pelanggaran_id) as jumlah_pelanggaran FROM pelanggaran');
        return $this->db->single();
    }
    public function hitungProdi()
    {
        $this->db->query('SELECT COUNT(prodi_id) as jumlah_prodi FROM prodi');
        return $this->db->single();
    }
    public function laporanTerbaru()
    {
        $this->db->query('SELECT
            m.nama, m.nim, date_format(p.tanggal_pengaduan, "%d %M %Y") as tanggal_pengaduan, pe.pelanggaran, pe.tingkat
        FROM ' . $this->table2 . ' AS m 
        JOIN ' . $this->table3 . ' AS p ON m.nim = p.nim 
        JOIN ' . $this->table4 . ' AS pe ON p.pelanggaran_id = pe.pelanggaran_id
        ORDER BY p.pengaduan_id DESC
        LIMIT 10');
        return $this->db->resultSet();
    }
}
