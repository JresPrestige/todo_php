<?php

class Koneksi 
{
    private $host = 'localhost';
    private $user = 'root';
    private $pass = '';
    private $dbname = 'todolist';

    public function get_conn()
    {
        $koneksi = mysqli_connect($this->host, $this->user, $this->pass, $this->dbname);
        return $koneksi;
    }
}
