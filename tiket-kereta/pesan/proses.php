<?php
include '../database.php';
$pesan = new Pesan();

if (isset($_POST['save'])) {
    $aksi = $_POST['aksi'];
    $id = @$_POST['id'];
    $nama_pemesan = $_POST['nama_pemesan'];
    $telpon = $_POST['telpon'];
    $tgl_pesan = $_POST['tgl_pesan'];
    $tgl_berangkat = $_POST['tgl_berangkat'];
    $id_berangkat = $_POST['id_berangkat'];
    $kelas = $_POST['kelas'];
    $harga = $_POST['harga'];

    if ($aksi == "create") {
        $pesan->create($nama_pemesan, $telpon, $tgl_pesan, $tgl_berangkat, $id_berangkat, $kelas, $harga);
        header("location:index.php");
    } elseif ($aksi == "update") {
        $pesan->update($id, $nama_pemesan, $telpon, $tgl_pesan, $tgl_berangkat, $id_berangkat, $kelas, $harga);
        header("location:index.php");
    } elseif ($aksi == "delete") {
        $pesan->delete($id);
        header("location:index.php");
    }

}