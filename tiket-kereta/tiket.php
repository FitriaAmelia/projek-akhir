<html xmlns="http://www.w3.org/1999.xhtml">
<head>
    <title>Tiket Kereta Api</title>
</head>
<body background="gambar/ozil.jpg">

    <form action="transaksi.php" method="post">
        <table align="center" border="2" cellpadding="5" cellspacing="1" bgcolor="PowderBlue" bordercolor="RoyalBlue">
            <tr>
          <th align="center" colspan="2">Tiket Kereta Api</th></tr>
            <tr><td>Nama Pembeli</td><td><input type="text" name="nama_pembeli" maxlength="10" size="15"></td></tr>
            <tr>
                <td>Kode Kereta</td>
                <td><select name="kode">
                <option value="AP">
                AP </option>
                <option value="AD">
                AD </option>
                <option value="AB">
                AB </option>
                </select>
                </td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>
                    <select name="kelas">
                        <option value="executive"> 1 - Executive </option>
                        <option value="bussines"> 2 - Bussines </option>
                        <option value="economy"> 3 - Economy </option>
                    </select>
                </td>
            </tr>
            
            <tr><td colspan="2" align="center"><input type="submit" value="Proses"></td></tr>
        </table>
    </form>
   
    <br>
   
    <table align="center" border="2" cellpadding="5" cellspacing="1"  bgcolor="PowderBlue" bordercolor="RoyalBlue">
        <tr>
          <th align="center" colspan="4">Daftar harga kereta api</th></tr>
        <tr>
          <td>Kode / Kelas</td>
          <td align="center">3 - Economy</td>
          <td align="center">2 - Bussines</td>
      <td>1 - Executive</td>    </tr>
        <tr>
          <td>AP - Argo Parahrayangan</td><td align="center">35000</td><td align="center">40000</td>
          <td>45000</td></tr>
        <tr>
          <td>AD - Argo Dwipangga</td>
        <td align="center">55000</td>
        <td align="center">60000</td>
        <td>65000</td></tr>
        <tr>
          <td>AB - Argo Bromo</td>
      <td align="center">75000</td>
      <td align="center">80000</td>
      <td>85000</td></tr>
       
    </table>
   
</body>
</html>