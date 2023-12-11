<?php

class Mahasiswa_model
{
    private $table = 'mahasiswa';
    private $table2 = 'user';
    private $table3 = 'prodi';
    private $db;


    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllMahasiswa()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }
    public function getMahasiswaByNim($nim)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' a
                        INNER JOIN ' . $this->table3 . ' b
                        ON a.prodi_id = b.prodi_id 
                        WHERE nim=:nim');
        $this->db->bind('nim', $nim);
        return $this->db->single();
    }
    public function tambahDataMahasiswa($data)
    {
        $query1 = "INSERT INTO " . $this->table2 . "
                    VALUES
                    ('', :username, :password, :level)";
        $pass = (md5($data["nim"]));
        $this->db->query($query1);
        $this->db->bind('username', $data['nim']);
        $this->db->bind('password', $pass);
        $this->db->bind('level', 3);
        $this->db->execute();

        $query2 = "SELECT * FROM " . $this->table2 . " WHERE username=:username";
        $this->db->query($query2);
        $this->db->bind('username', $data['nim']);
        $res = $this->db->single();
        $uploadedFileName = $this->handleFileUpload();
        $query3 = "INSERT INTO " . $this->table . "
                VALUES
                (:nim, :prodi_id, :nama, :TTL, :jenis_kelamin, :alamat, :email, :no_phone, :phone_ortu, :jumlah_pelanggaran, :mahasiswa_img, :user_id)";
        $this->db->query($query3);
        $this->db->bind('nim', $data['nim']);
        $this->db->bind('prodi_id', $data['prodi_id']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('TTL', $data['ttl']);
        $this->db->bind('jenis_kelamin', $data['jenkel']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('no_phone', $data['notelp']);
        $this->db->bind('phone_ortu', $data['notelp_ortu']);
        $this->db->bind('jumlah_pelanggaran', 0);
        $this->db->bind('mahasiswa_img', $uploadedFileName);
        $this->db->bind('user_id', $res['user_id']);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function hapusDataMahasiswa($nim)
    {
        $query = "DELETE FROM mahasiswa WHERE nim = :nim";
        $this->db->query($query);
        $this->db->bind('nim', $nim);
        $this->db->execute();
        return $this->db->rowCount();
    }
    // public function ubahDataMahasiswa($data){
    //     $query = "UPDATE tb_mahasiswa SET nama = :nama, nrp = :nrp, email = :email, jurusan = :jurusan WHERE id = :id";
    //     $this->db->query($query);
    //     $this->db->bind('nama',$data['nama']);
    //     $this->db->bind('nrp',$data['nrp']);
    //     $this->db->bind('email',$data['email']);
    //     $this->db->bind('jurusan',$data['jurusan']);
    //     $this->db->bind('id',$data['id']);
    //     $this->db->execute();
    //     return $this->db->rowCount();
    // }
    public function editDataMahasiswa($data)
    {
        $checkData = $this->getMahasiswaByNim($data['nim']);
        $dataUploaded= $_FILES['imgMahasiswa']['name'];
        $uploadedFileName = $this->handleFileUploadEdit($dataUploaded, $checkData['mahasiswa_img']);
        $query = "UPDATE mahasiswa SET nama = :nama, TTL = :TTL, jenis_kelamin = :jenis_kelamin, alamat = :alamat, email = :email, no_phone= :no_phone, phone_ortu = :phone_ortu, mahasiswa_img= :mahasiswa_img WHERE nim = :nim";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('TTL', $data['ttl']);
        $this->db->bind('jenis_kelamin', $data['jenkel']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('no_phone', $data['notelp']);
        $this->db->bind('phone_ortu', $data['notelp_ortu']);
        $this->db->bind('mahasiswa_img', $uploadedFileName);
        $this->db->bind('nim', $data['nim']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    private function handleFileUpload()
    {
        $targetDir = str_replace('/public', '', $_SERVER['DOCUMENT_ROOT']) . '/tatib_2g/public/img/profil/';
        $uploadedFile = $_FILES['imgMahasiswa']; // Nama input file pada formulir

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

    private function handleFileUploadEdit($dataOld, $dataTemp)
    {
        $targetDir = str_replace('/public', '', $_SERVER['DOCUMENT_ROOT']) . '/tatib_2g/public/img/profil/';

        // Memeriksa apakah parameter $dataOld sudah diatur dan tidak kosong
        if ($dataOld != null) {

            // Menghapus file lama sebelum menyimpan file baru
            $oldFilePath = $targetDir . $dataOld;

            // Periksa apakah file lama ada sebelum menghapusnya

            $uploadedFile = $_FILES['imgMahasiswa']; // Nama input file pada formulir

            // Menggunakan timestamp detik UNIX untuk membuat nama file unik
            $uniqueFileName = time() . '_' . substr(pathinfo($uploadedFile['name'], PATHINFO_FILENAME), 0, 3) . '.' . pathinfo($uploadedFile['name'], PATHINFO_EXTENSION);
            $targetFilePath = $targetDir . $uniqueFileName;
            $fileType = pathinfo($uploadedFile['name'], PATHINFO_EXTENSION);

            // Memeriksa apakah file tersebut adalah file gambar
            $allowedTypes = array('jpg', 'jpeg', 'png', 'gif');

            if (in_array(strtolower($fileType), $allowedTypes)) {
                if (move_uploaded_file($uploadedFile['tmp_name'], $targetFilePath)) {
                    // if (file_exists($oldFilePath) && $dataTemp != null) {
                    //     unlink($oldFilePath);
                    // }
                    return $uniqueFileName;
                } else {
                    echo "Maaf, terjadi kesalahan saat mengunggah file.";
                }
            } else {
                echo "File yang diunggah bukan gambar atau format file tidak diizinkan.";
            }
        } else {
            return $dataTemp;
        }
    }


    // Metode untuk mendapatkan nama file lama (gantilah dengan metode yang sesuai)
    private function getOldFileName()
    {
        // Implementasikan logika untuk mendapatkan nama file lama
        // Misalnya, dapatkan nama file lama dari basis data atau dari variabel lain
        return "nama_file_lama.jpg"; // Gantilah dengan nama file lama yang sebenarnya
    }
}
