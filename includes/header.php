<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>List Barang</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- BOOTSTRAP 4 -->
    <link rel="stylesheet" href="https://bootswatch.com/4/yeti/bootstrap.min.css">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  </head>
  <body>

    <nav class="navbar navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="home.php">ListBro</a>
        <a class="btn btn-danger" href="logout.php">Logout</a>
      </div>
    </nav>

    <!-- Konten halaman -->
    
    <script>
      // Fungsi untuk mengonfirmasi logout
      function confirmLogout() {
        if (confirm("Apakah Anda yakin ingin logout?")) {
          window.location.href = "logout.php";
        }
      }
    </script>
  </body>
</html>
