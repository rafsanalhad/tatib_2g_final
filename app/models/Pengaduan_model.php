<?php

class Pengaduan_model
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

    public function getPengaduan()
    {
        $this->db->query('SELECT * FROM ' . $this->table3 . ' a INNER JOIN ' . $this->table2 . ' b ON a.nim = b.nim INNER JOIN 
                        ' . $this->table5 . ' c ON b.prodi_id = c.prodi_id INNER JOIN ' . $this->table4 . ' d 
                        ON a.pelanggaran_id = d.pelanggaran_id');
        return $this->db->resultSet();
    }
    public function getPengaduanById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table3 . ' WHERE pengaduan_id = :id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
    public function getPengaduanByNip($username)
    {
        $this->db->query('SELECT * FROM ' . $this->table3 . ' a INNER JOIN ' . $this->table2 . ' b ON a.nim = b.nim INNER JOIN 
                        ' . $this->table5 . ' c ON b.prodi_id = c.prodi_id INNER JOIN ' . $this->table4 . ' d 
                        ON a.pelanggaran_id = d.pelanggaran_id WHERE a.nip = :nip');
        $this->db->bind('nip', $username);
        return $this->db->resultSet();
    }
    public function getPengaduanByNim($nim){
        $this->db->query('SELECT * FROM ' . $this->table3 . ' a INNER JOIN ' . $this->table2 . ' b ON a.nim = b.nim INNER JOIN 
                        ' . $this->table5 . ' c ON b.prodi_id = c.prodi_id INNER JOIN ' . $this->table4 . ' d 
                        ON a.pelanggaran_id = d.pelanggaran_id WHERE a.nim = :nim');
        $this->db->bind('nim', $nim);
        return $this->db->resultSet();
    }
    public function setPengaduan($data)
    {
        // Handling file upload
        $uploadedFileName = $this->handleFileUpload();
        echo $uploadedFileName;
        $query = "INSERT INTO " . $this->table3 . "
        (nip, nim, pelanggaran_id, bukti_pelanggaran, tanggal_pengaduan, status_pengaduan)
        VALUES
        (:nip, :nim, :pelanggaran_id, :bukti_pelanggaran, :tanggal_pengaduan, :status_pengaduan)";

        $this->db->query($query);
        $this->db->bind('nip', $_SESSION['username']);
        $this->db->bind('nim', $data['nimPengaduan']);
        $this->db->bind('pelanggaran_id', $data['jenisPelanggaran']);


        //Bind the uploaded file name to the query
        $this->db->bind('bukti_pelanggaran', $uploadedFileName);
        $this->db->bind('tanggal_pengaduan', $data['tglPengaduan']);
        $this->db->bind('status_pengaduan', 'proses');

        $this->db->execute();
        return $this->db->rowCount();
    }

    private function handleFileUpload()
    {
        $targetDir = str_replace('/public', '', $_SERVER['DOCUMENT_ROOT']) . '/tatib_2g/public/img/bukti_pengaduan/';
        $uploadedFile = $_FILES['fotoPengaduan']; // Nama input file pada formulir

        // Menggunakan timestamp detik UNIX untuk membuat nama file unik
        $uniqueFileName = time() . '_' . substr(pathinfo($uploadedFile['name'], PATHINFO_FILENAME), 0, 3) . '.' . pathinfo($uploadedFile['name'], PATHINFO_EXTENSION);
        $targetFilePath = $targetDir . $uniqueFileName;
        $fileType = pathinfo($uploadedFile['name'], PATHINFO_EXTENSION);

        // Memeriksa apakah file tersebut adalah file gambar
        $allowedTypes = array('jpg', 'jpeg', 'png', 'gif');

        if (in_array(strtolower($fileType), $allowedTypes)) {
            if (move_uploaded_file($uploadedFile['tmp_name'], $targetFilePath)) {
                return $uniqueFileName;
            } else {
                echo "Maaf, terjadi kesalahan saat mengunggah file.";
            }
        } else {
            echo "File yang diunggah bukan gambar atau format file tidak diizinkan.";
        }
    }
    public function tolakPengaduan($data)
    {
        $query = "UPDATE pengaduan SET status_pengaduan = 'tidak valid', catatan = :catatan WHERE pengaduan_id = :id";
        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->bind('catatan', $data['catatan']);
        $this->db->execute();
        $queryEditRiwayat = "UPDATE riwayat SET status_kompen = 'tidak valid' WHERE riwayat_id = :idRiwayat";
        $this->db->query($queryEditRiwayat);
        $this->db->bind('idRiwayat', $data['idRiwayat']);
        $this->db->execute();
        return $this->db->rowCount();
    }

}
