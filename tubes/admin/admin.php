<?php
 session_start();

 require '../php/functions.php';

 $admin_id = $_SESSION['id_admin'];
 $select = mysqli_query($conn, "SELECT * FROM `user` WHERE id = '$admin_id'") or die('query failed');
if(mysqli_num_rows($select) > 0){
    $fetch = mysqli_fetch_assoc($select);
}
 // cek apakah yang mengakses halaman ini sudah login
 if($_SESSION['role']==""){
  header("location:../index.php?pesan=gagal");
 }

 ?>

<!DOCTYPE html>
<html>
    <head>
        <title>Halaman admin</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <style>
    .foto {
        width: auto;
        height: 50px;
    }
 </style>
    <body>
    
        <header>
    <div class="px-3 py-2 bg-info text-dark fixed-top fs-4">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <a href="/" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-dark text-decoration-none"> Keira Soap Factory
          </a>

          <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
            <li>
              <a href="admin.php" class="nav-link text-white">
                Beranda
              </a>
            </li>
            <li>
              <a href="tambah.php" class="nav-link text-dark">
                Tambah Data
              </a>
            </li>
            <li>
              <a href="order.php" class="nav-link text-dark">
                Orderan
              </a>
            </li>
            <li>
              <a href="produk.php" class="nav-link text-dark">
                Produk
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </header>

        <div class="container-xl mt-5 fs-4">
        
    <div class="px-3 py-2 border-bottom mb-3">
      <div class="container d-flex flex-wrap justify-content-center">
        <form class="col-12 col-lg-auto mt-3 mb-lg-0 me-lg-auto">
        <p>Halo <b><?= $fetch['nama_user']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['role']; ?></b>.</p>
        </form>

        <div class="text-end mt-2">
          <a href="../php/logout.php" class="btn btn-danger">Logout</a>
        </div>
      </div>
    </div>
            <div class="p-5 mb-4 bg-light rounded-3">
      <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Tambah Data</h1>
        <p class="col-md-8 fs-4">Tekan Tombol dibawah untuk menambah data sabun</p>
        <a class="btn btn-primary btn-lg" href="tambah.php">Tambah Data</a>
      </div>
    </div>

    <div class="row align-items-md-stretch">
      <div class="col-md-6">
        <div class="h-100 p-5 text-white bg-dark rounded-3">
          <h2>Cek Produk</h2>
          <p>Tombol dibawah berfungsi untuk mengubah dan menghapus data sabun</p>
          <a class="btn btn-outline-light" href="produk.php">Cek Produk</a>
        </div>
      </div>
      <div class="col-md-6">
        <div class="h-100 p-5 bg-light border rounded-3">
          <h2>Cek Orderan</h2>
          <p>Saat user membeli barang, maka semua data orderan akan ditampilkan. Tekan tombol dibawah untuk melihat semua orderan</p>
          <a class="btn btn-outline-secondary" href="order.php" >Check order</a>
        </div>
      </div>
    </div>
        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>