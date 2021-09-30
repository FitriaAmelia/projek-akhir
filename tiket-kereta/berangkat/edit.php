<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan CRUD - Edit Data</title>
</head>

<body>
    <?php
include '../database.php';
$berangkat = new Berangkat();
foreach ($berangkat->edit($_GET['id']) as $data) {
    $id = $data['id'];
    $tujuan = $data['tujuan'];
    $jam_berangkat = $data['jam_berangkat'];
}
?>
    <fieldset>
        <legend>Edit Data Berangkat</legend>
        <form action="proses.php" method="post">
            <input type="hidden" name="aksi" value="update">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <table>
                <tr>
                    <th>Tujuan Kota</th>
                    <td><input type="text" name="tujuan" value="<?php echo $tujuan; ?>" required></td>
                </tr>
                <tr>
                    <th>Jam Berangkat</th>
                    <td><input type="text" name="jam_berangkat" value="<?php echo $jam_berangkat; ?>" required></td>
                </tr>

                <tr>
                    <th><input type="submit" name="save" value="Simpan"></th>
                </tr>
            </table>
        </form>
    </fieldset>
</body>

</html>