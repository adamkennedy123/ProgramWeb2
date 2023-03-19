<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
  <h3 class="text-center"> UNIVERSITAS PELITA BANGSA<br>
    <small class="text-muted">Pemrograman Web 1</small>
  </h3>
  <hr class="d-block d-sm-none">
  <!-- Navbar Atas -->
  <nav class="navbar navbar-expand navbar-dark bg-dark d-none d-sm-block mb-3">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">PW-13</a>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="?page=home"><i class="bi bi-house-door"></i> Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?page=galeri">Galeri</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Navbar Bawah -->
  <nav class="navbar navbar-expand navbar-dark bg-dark fixed-bottom d-
block d-sm-none">

    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav me-auto mb-2 mb-lg-0 justify-content-
center">

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="?page=home"><i class="bi bi-house-door"></i> Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?page=galeri">Galeri</a>
          </li>       
        </ul>
      </div>
    </div>
  </nav>
  <?php
  if (isset($_GET['page'])) {
    $page = $_GET['page'];

    switch ($page) {

      default:
        echo "Maaf. Halaman tidak di temukan !";
        break;

      case "home":
        include "home.php";
        break;

      case "galeri":
        include "galeri.php";
        break;

    }
  } else {
    include "home.php";
  }
  ?>
 
 
</body>

</html>