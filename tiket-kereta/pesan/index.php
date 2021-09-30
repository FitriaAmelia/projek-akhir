<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    
    <center>Tabel Pesan</center>
    <fieldset>
        <legend>Tabel Pesan</legend>
        <a href="create.php">Tambah Data Tabel Pesan </a>
        <table border="1">
            <tr>
                <th>No</th>
                <th>Nama Pemesan</th>
                <th>Telpon</th>
               
                <th>Tanggal Pesan</th>
                <th>Tanggal Berangkat</th>
                <th>Id Berangkat</th>
                <th>Kelas</th>
                <th>Harga</th>
                <th colspan="3">Aksi</th>
            </tr>
            <?php
include '../database.php';
$pesan = new Pesan();
$no = 1;
// var_dump($dosen->index());
foreach ($pesan->index() as $data) {
    ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $data['nama_pemesan']; ?></td>
                    <td><?php echo $data['telpon']; ?></td>
                    <td><?php echo $data['tgl_pesan']; ?></td>
                    <td><?php echo $data['tgl_berangkat']; ?></td>
                    <td><?php echo $data['id_berangkat']; ?></td>
                    <td><?php echo $data['kelas']; ?></td>
                    <td><?php echo $data['harga']; ?></td>
                    <td>
                        <a href="show.php?id=<?php echo $data['id']; ?>">Show</a>
                    </td>
                    <td>
                        <a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a>
                    </td>
                    <td>
                        <form action="proses.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                            <input type="hidden" name="aksi" value="delete">
                            <button type="submit" name="save" onclick="return confirm('Apakah Anda Yakin Mau menghapus data ini ?')">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            <?php
}
?>
    </fieldset>
</body>

</html>