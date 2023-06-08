<?php
include("db.php");

// Cek jika pengguna sudah login
if (isset($_SESSION['username'])) {
    // Redirect ke halaman lain karena pengguna sudah login
    header("Location: index.php");
    exit();
}

// Proses login
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query untuk memeriksa kecocokan username dan password
    $query = "SELECT * FROM login WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $query);

    // Cek keberhasilan query dan validasi login
    if ($result && mysqli_num_rows($result) > 0) {
        // Set session
        $_SESSION['username'] = $username;

        // Redirect ke halaman dashboard setelah login berhasil
        header("Location: home.php");
        exit();
    } else {
        // Tampilkan pesan error jika login gagal
        $error = "Username atau password salah.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Login</title>
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

    .login-container {
      width: 500px;
      padding: 20px;
      border: 1px solid #ccc;
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

    .daftar-button {
      text-align: center;
      margin-top: 10px;
    }

    .daftar-button a {
      display: inline-block;
      font-size: 14px;
      text-decoration: none;
      color: #fff;
      background-color: #000;
      padding: 10px;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="login-container">
      <h2>Form Login</h2>
      <form method="post" action="home.php">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="Login">
      </form>
      <?php if (isset($error)): ?>
        <p><?php echo $error; ?></p>
      <?php endif; ?>
      <div class="daftar-button">
        <a href="register.php">Daftar</a>
      </div>
    </div>
  </div>
</body>
</html>
