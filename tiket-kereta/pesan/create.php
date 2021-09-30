<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan CRUD - Create Data</title>
</head>
<body>
    <fieldset>
        <legend>Input Tabel Pesan</legend>
        <form action="proses.php" method="post">
        <input type="hidden" name="aksi" value="create">
            <table>
                <tr>
                    <th>Nama Pemesan</th>
                    <td><input type="text" name="nama_pemesan" required></td>
                </tr>
                <tr>
                    <th>No Telpon</th>
                    <td><input type="number" name="telpon" required></td>
                </tr>
                <tr>
                    <th>Tanggal Pesan</th>
                    <td><input type="text" name="tgl_pesan" required></td>
                </tr>
                <tr>
                    <th>Tanggal Berangkat</th>
                    <td><input type="text" name="tgl_berangkat" required></td>
                </tr>
                <tr>
                    <th>Id Berangkat</th>
                    <td><input type="number" name="id_berangkat" required></td>
                </tr>
                <tr>
                    <th>Kelas</th>
                    <td><input type="text" name="kelas" required></td>
                </tr>
                <tr>
                    <th>Harga</th>
                    <td><input type="text" name="harga" required></td>
                </tr>
                <tr>
                    <th>
                        <button type="submit" name="save" >Simpan </button>
                    </th>
                </tr>
            </table>
        </form>
    </fieldset>
</body>
</html>