<!DOCTYPE html>
<html>
<head>
  <title>Form Login</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<br/>
<br/>
<center><h2>LOGIN</h2>  
<br/>
  <div class="login">
  <br/>
    <form action="proses.php" method="post" onSubmit="return validasi()">
      <div>
        <label>Username:</label>
        <br/>
        <input type="text" name="username" id="username" />
        <br/>
      </div>
      <div>
        <label>Password:</label>
        <br/>
        <input type="password" name="password" id="password" />
      </div>      
      <div>
      <br/>
      <tr>
        <td><input type="submit" value="Login" class="tombol"></td>
        </tr>
        <tr>
        <td><input type="reset" value="Hapus"></td>
      </div>
      </tr>
    </form>
  </div>
</body>
 </CENTER>
</html>
