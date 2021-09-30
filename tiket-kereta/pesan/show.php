<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan CRUD - Show Data</title>
</head>

<body>
    <?php
include '../database.php';
$pesan = new Pesan();
foreach ($pesan->show($_GET['id']) as $data) {
    $id = $data['id'];
    $nama_pemesan = $data['nama_pemesan'];
    $telpon = $data['telpon'];
    $tgl_pesan = $data['tgl_pesan'];
    $tgl_berangkat = $data['tgl_berangkat'];
    $id_berangkat = $data['id_berangkat'];
    $kelas = $data['kelas'];
    $harga = $data['harga'];

}
?>
    <fieldset>
        <legend>Show Data Tabel Pesan</legend>
        <table>
            <tr>
                    <th>Nama Pemesan</th>
                    <td><input type="text" name="nama_pemesan" value="<?php echo $nama_pemesan; ?>" readonly></td>
                </tr>
                <tr>
                    <th>No Telpon</th>
                    <td><input type="number" name="telpon" value="<?php echo $telpon; ?>" readonly></td>
                </tr>
                <tr>
                    <th>Tanggal Pesan</th>
                    <td><input type="text" name="tgl_pesan" value="<?php echo $tgl_pesan; ?>" readonly></td>
                </tr>
                <tr>
                    <th>Tanggal Berangkat</th>
                    <td><input type="text" name="tgl_berangkat" value="<?php echo $tgl_berangkat; ?>" readonly></td>
                </tr>
                 <tr>
                    <th>Id Berangkat</th>
                    <td><input type="number" name="id_berangkat" value="<?php echo $id_berangkat; ?>" readonly></td>
                </tr>
                <tr>
                    <th>Kelas</th>
                    <td><input type="text" name="kelas" value="<?php echo $kelas; ?>" readonly></td>
                </tr>
                <tr>
                    <th>Harga</th>
                    <td><input type="text" name="harga" value="<?php echo $harga; ?>" readonly></td>
                </tr>
            
        </table>
    </fieldset>
</body>

</html>