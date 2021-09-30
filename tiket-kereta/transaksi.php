<html>
<head>
    <title>Hasil Kereta</title>
</head>
<body background="/ann/ozil.jpg">

    <?php
        //Tangkap Variable
        $nama_ann = $_POST["nama_pembeli"];
        $kode_ann = $_POST["kode"];
        $kelas_ann = $_POST["kelas"];
       
       
        //Rumus untuk menentukan harga Kode kereta
        if ($kode_ann == 'AP')
        {
            if ($kelas_ann == 'executive') {$harga_ann = 45000;}
           
                else if ($kelas_ann == 'bussines') {$harga_ann = 40000;} else { $harga_ann = 35000;}
           
        }
        else if ($kode_ann == 'AD')
        {
            if ($kelas_ann == 'executive') { $harga_ann = 65000;}
           
                else if ($kelas_ann == 'bussines') {$harga_ann = 60000;} else { $harga_ann = 55000;}
           
        }
        else
        {
            if ($kode_ann == 'executive') { $harga_ann = 85000; }
           
                else if ($kelas_ann == 'bussines') {$harga_ann = 80000;} else { $harga_ann = 75000; }
           
        } ;
       
        
       
    ?>
   
    <table align="center" border="1" cellpadding="5" cellspacing="1" bgcolor="#CCCCCC" bordercolor="#FFFFFF">
        <tr>
          <th align="center" colspan="2">Tiket Kereta Api</th></tr>
        <tr>
          <td colspan="2" align="center">Selamat Datang <?php print $nama_ann; ?>.Berikut Ini Pembelian Anda</td></tr>
        <tr>
          <td>Kode</td><td align="center"><?php print $kode_ann ?></td></tr>
        <tr>
          <td>Nama Kereta api</td><td align="center"><?php print $kode_ann ?></td></tr>
        <tr>
          <td>Kelas</td><td align="center"><?php print $kelas_ann ?></td></tr>
        <tr>
          <td>Harga Satuan</td><td align="center"><?php print $harga_ann ?></td></tr>
        <tr>
          <td>Biaya tambahan</td><td align="center"><?php print $tambahan_ann ?></td></tr>
        <tr>
          <th align="left">Total</th><th align="center"><?php print $total_ann ?></th></tr>
        <tr><td colspan="2" align="center">Terima Kasih <?php print $nama_ann ?> telah membeli tiket di stasiun kami.</td></tr>
        <tr><td colspan="2" align="center"><a href="ann1.php">Input Data Lagi</a></td></tr>
    </table>
</body>
</html>
