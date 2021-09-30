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
$berangkat = new Berangkat();
foreach ($berangkat->show($_GET['id']) as $data) {
    $id = $data['id'];
    $tujuan = $data['tujuan'];
    $jam_berangkat = $data['jam_berangkat'];
}
?>
    <fieldset>
        <legend>Show Data Tabel Berangkat</legend>
        <table>
            <tr>
                <th>Tujuan Kota</th>
                <td><input type="text" name="tujuan" value="<?php echo $tujuan; ?>" readonly></td>
            </tr>
            <tr>
                <th>Jam Berangkat</th>
                <td><input type="text" name="jam_berangkat" value="<?php echo $jam_berangkat; ?>" readonly></td>
            </tr>
        </table>
    </fieldset>
</body>

</html>