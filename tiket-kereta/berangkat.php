<?php
class Berangkat extends Database
{
    // Menampilkan Semua Data
    public function index()
    {

        $databerangkat = mysqli_query($this->koneksi, "select * from berangkat");
        // var_dump($datadosen);
        return $databerangkat;
    }

    // Menambah Data
    public function create($tujuan, $jam_berangkat)
    {
        mysqli_query(
            $this->koneksi,
            "insert into berangkat values(null,'$tujuan', '$jam_berangkat')"
        );
    }
    // Menampilkan Data Berdasarkan ID
    public function show($id)
    {
        $databerangkat = mysqli_query(
            $this->koneksi,
            "select * from berangkat where id='$id'"
        );
        return $databerangkat;
    }

    // Menampilkan data berdasarkan id
    public function edit($id)
    {
        $databerangkat = mysqli_query(
            $this->koneksi,
            "select * from berangkat where id='$id'"
        );
        return $databerangkat;
    }
    // mengupdate data berdasarkan id
    public function update($id, $tujuan, $jam_berangkat)
    {
        mysqli_query(
            $this->koneksi,
            "update berangkat set tujuan='$tujuan', jam_berangkat='$jam_berangkat' where id='$id'"
        );
    }

    // menghapus data berdasarkan id
    public function delete($id)
    {
        mysqli_query($this->koneksi, "delete from berangkat where id='$id'");
    }
}