<?php
include '../database.php';
$berangkat = new Berangkat();

if (isset($_POST['save'])) {
    $aksi = $_POST['aksi'];
    $id = @$_POST['id'];
    $tujuan = $_POST['tujuan'];
    $jam_berangkat = $_POST['jam_berangkat'];

    if ($aksi == "create") {
        $berangkat->create($tujuan, $jam_berangkat);
        header("location:index.php");
    } elseif ($aksi == "update") {
        $berangkat->update($id, $tujuan, $jam_berangkat);
        header("location:index.php");
    } elseif ($aksi == "delete") {
        $berangkat->delete($id);
        header("location:index.php");
    }

}