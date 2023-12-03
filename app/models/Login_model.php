<?php

class Login_model
{
    private $table = 'user';
    private $db;


    public function __construct()
    {
        $this->db = new Database;
    }

    public function getUser($username, $password)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE username=:username and password=:password');
        $this->db->bind('username', $username);
        $this->db->bind('password', $password);
        return $this->db->single();
    }
}
