<?php

class Mahasiswa_model
{
    private $table = 'mahasiswa';
    private $table2 = 'user';
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
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE nim=:nim');
        $this->db->bind('nim', $nim);
        return $this->db->single();
    }
    public function tambahDataMahasiswa($data){
        $query1 = "INSERT INTO " . $this->table2 . "
                    VALUES
                    ('', :username, :password, :level)";
        $pass = (md5($data["nim"]));
        $this->db->query($query1);
        $this->db->bind('username',$data['nim']);
        $this->db->bind('password',$pass);
        $this->db->bind('level',3);
        $this->db->execute();

        $query2 = "SELECT * FROM " . $this->table2 . " WHERE username=:username";
        $this->db->query($query2);
        $this->db->bind('username', $data['nim']);
        $res = $this->db->single();
        
        $query3 = "INSERT INTO " . $this->table . "
                VALUES
                (:nim, :prodi_id, :nama, :TTL, :jenis_kelamin, :alamat, :email, :no_phone, :phone_ortu, :jumlah_pelanggaran, :user_id)";
        $this->db->query($query3);
        $this->db->bind('nim',$data['nim']);
        $this->db->bind('prodi_id',$data['prodi_id']);
        $this->db->bind('nama',$data['nama']);
        $this->db->bind('TTL',$data['ttl']);
        $this->db->bind('jenis_kelamin',$data['jenkel']);
        $this->db->bind('alamat',$data['alamat']);
        $this->db->bind('email',$data['email']);
        $this->db->bind('no_phone',$data['notelp']);
        $this->db->bind('phone_ortu',$data['notelp_ortu']);
        $this->db->bind('jumlah_pelanggaran',0);
        $this->db->bind('user_id', $res['user_id']);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function hapusDataMahasiswa($nim){
        $query = "DELETE FROM mahasiswa WHERE nim = :nim";
        $this->db->query($query);
        $this->db->bind('nim',$nim);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function ubahDataMahasiswa($data){
        $query = "UPDATE tb_mahasiswa SET nama = :nama, nrp = :nrp, email = :email, jurusan = :jurusan WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('nama',$data['nama']);
        $this->db->bind('nrp',$data['nrp']);
        $this->db->bind('email',$data['email']);
        $this->db->bind('jurusan',$data['jurusan']);
        $this->db->bind('id',$data['id']);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
