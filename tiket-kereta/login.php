<html>

<head>
  <title>login</title>
</head>
<style type="text/css">
  body {
    background-color: #87CEEB;
  }
</style>

<body>
  <form action="http://localhost/tiket-kereta/berangkat/index.php" method="post"><br>
    <h3>
      <center>FORM LOGIN</center>
    </h3>
    <div class="form">
      <center>
        <table>
          <tr>
            <td>Username</td>
            <td>:</td>
            <td><input type="text" name="username" class="login"></td>
          </tr><br>
          <tr>
            <td>Password</td>
            <td>:</td>
            <td><input type="password" name="pass" class="login" required></td>
          </tr>
          <tr>
            <td><input type="submit" name="login" value="login" class="tombol"></td>
          </tr>
      </center>
      </table>
    </div>
  </form>
  <style type="text/css">
    h3 {
      font-weight: 300px;
    }

    .form {
      background: #D8BFD8;
      width: 350px;
      margin: 80px auto;
      padding: 10px 20px;
    }

    table {
      font-size: 12pt;
      height: 200px;
      width: 200px;
    }

    .login {
      background: white;
      font-size: 11pt;
      width: 150%;
      border: none;

      padding: 10px 20px;
    }

    .tombol {
      background: blue;
      height: 30px;
      width: 70px;
      align: center;
      border: none;
      border-radius: 3px;
    }
  </style>
</body>

</html>