<?php
include 'koneksi.php';
class Model extends Koneksi
{

    public function __construct()
    {
        $this->konek = $this->get_conn();
    }

    public function insert($ket, $status = "belum selesai")
    {
        $sql = "INSERT INTO datalist (keterangan, status) value ('$ket', '$status')";
        $query = mysqli_query($this->konek, $sql);

        return $query;
    }

    public function tampil($tabel)
    {
        $sql = "SELECT * FROM $tabel";
        $query = mysqli_query($this->konek, $sql);

        $rows = [];

        while ($row = mysqli_fetch_assoc($query)) {
            $rows[] = $row;
        }

        return $rows;
    }

    public function update($id)
    {
        $sql = "UPDATE datalist set status = 'selesai' where id_list = $id";
        $query = mysqli_query($this->konek, $sql);

        return $query;
    }

    public function delete($id)
    {
        $sql = "DELETE FROM datalist where id_list = $id";
        $query = mysqli_query($this->konek, $sql);

        return $query;
    }
}
