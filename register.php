<?php
require_once 'db.php';

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "INSERT INTO login (username, password) VALUES ('$username', '$password')";

    if (mysqli_query($conn, $query)) {
        echo "Registrasi berhasil. Silakan <a href='index.php'>login</a>.";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registrasi</title>
    <style>
    body {
      background-color: #ffffff;
      font-family: sans-serif;
    }

    h2 {
      text-align: center;
      margin-top: 20px;
    }

    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .register-container {
      width: 500px;
      padding: 20px;
      border: 1px solid #ccc;
      margin-bottom: 20px;
      margin: 0 auto;
    }

    form {
      margin-bottom: 10px;
    }

    label {
      display: block;
      font-size: 16px;
    }

    input {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      margin-bottom: 10px;
    }

    button {
      width: 100%;
      padding: 10px;
      border: 0;
      background-color: #000;
      color: #fff;
      font-size: 16px;
    }

    .login-link {
      text-align: center;
      margin-top: 10px;
    }

    .login-link a {
      display: inline-block;
      font-size: 14px;
      text-decoration: none;
      color: #000;
      background-color: #ccc;
      padding: 10px;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="register-container">
      <h2>Registrasi</h2>
      <form method="POST" action="">
        <label>Username:</label><br>
        <input type="text" name="username" required><br><br>
        <label>Password:</label><br>
        <input type="password" name="password" required><br><br>
        <input type="submit" name="register" value="Register">
      </form>
      <?php if (isset($error)): ?>
        <p><?php echo $error; ?></p>
      <?php endif; ?>
      <div class="login-link">
        Sudah memiliki akun? <a href="index.php">Login</a>
      </div>
    </div>
  </div>
</body>
</html>