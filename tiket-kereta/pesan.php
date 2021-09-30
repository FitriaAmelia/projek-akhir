<?php
class Pesan extends Database
{
    // Menampilkan Semua Data
    public function index()
    {

        $datapesan = mysqli_query($this->koneksi, "select * from pesan");
        // var_dump($datadosen);
        return $datapesan;
    }

    // Menambah Data
    public function create($nama_pemesan, $telpon, $tgl_pesan, $tgl_berangkat, $id_berangkat, $kelas, $harga)
    {
        mysqli_query(
            $this->koneksi,
            "insert into pesan values(null, '$nama_pemesan', '$telpon', '$tgl_pesan', '$tgl_berangkat', '$id_berangkat', '$kelas', '$harga')"
        );
    }
    // Menampilkan Data Berdasarkan ID
    public function show($id)
    {
        $datapesan = mysqli_query(
            $this->koneksi,
            "select * from pesan where id='$id'"
        );
        return $datapesan;
    }

    // Menampilkan data berdasarkan id
    public function edit($id)
    {
        $datapesan = mysqli_query(
            $this->koneksi,
            "select * from pesan where id='$id'"
        );
        return $datapesan;
    }
    // mengupdate data berdasarkan id
    public function update($id, $nama_pemesan, $telpon, $tgl_pesan, $tgl_berangkat, $id_berangkat, $kelas, $harga)
    {
        mysqli_query(
            $this->koneksi,
            "update pesan set nama_pemesan='$nama_pemesan', telpon='$telpon', tgl_pesan='$tgl_pesan', tgl_berangkat='$tgl_berangkat'
            kelas='$kelas' harga= '$harga' where id='$id'"
        );
    }

    // menghapus data berdasarkan id
    public function delete($id)
    {
        mysqli_query($this->koneksi, "delete from pesan where id='$id'");
    }
}