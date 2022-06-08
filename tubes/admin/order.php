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
    <div class="px-3 py-2 bg-info text-dark fs-4">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <a href="/" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-dark text-decoration-none"> Keira Soap Factory
          </a>

          <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
            <li>
              <a href="admin.php" class="nav-link text-dark">
                Beranda
              </a>
            </li>
            <li>
              <a href="tambah.php" class="nav-link text-dark">
                Tambah Data
              </a>
            </li>
            <li>
              <a href="order.php" class="nav-link text-white">
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
        <h1>Daftar Orderan</h1>
        <p>Keira Soap Factory <br><span>Oleh Keira SoapFactory</span></p>
            
        <form action="" method="GET">
          <div class="row">
            <div class="col-md-4">
              <div class="input-group mb-3">
                <select class="form-control" name="sort">
                  <option value="">--Sortir Berdasarkan Nama--</option>
                  <option value="a-z" <?php if(isset($_GET['sort']) && $_GET['sort'] == "a-z"){echo "Pilih";} ?>>a-z</option>
                  <option value="z-a" <?php if(isset($_GET['sort']) && $_GET['sort'] == "z-a"){echo "Pilih";} ?>>z-a</option>
                </select>
                <button type="submit" class="input-group-text btn btn-info" id="tombol-sortir">Sortir</button>
              </div>
            </div> 
          </div>
        </form>

        <p>/Agar tidak pusing dalam pembacaan order, saat memilih sortir data paling bawah merupakan data terbaru/</p>

        <table border="1" cellpadding="10" cellspacing="0" class="table table-bordered table-hover table-secondary mt-4">
            
            <tr class="thead-dark text-center">
                <th>No.</th>
                <th>Id User</th>
                <th>Nama User</th>
                <th>Alamat User</th>
                <th>Metode Pembayaran</th>
                <th>Total Produk</th>
                <th>Total Harga</th>
                <th>Status Pesanan</th>
                <th>Waktu Pesan</th>
            </tr>

            <?php 
            $sort = "";
            if (isset($_GET["sort"])) {
              if ($_GET["sort"] == "a-z") {
                $sort = "ASC";
              } else if($_GET["sort"] == "z-a") {
                $sort = "DESC";
              }
            }
            $order = mysqli_query($conn, "SELECT * FROM `order` ORDER BY nama_user $sort") or die('query failed');
             ?>

            <?php $i = 1; ?>
            <?php foreach ($order as $row) : ?>
            <tr class="thead-dark text-center">
                <td><?= $i; ?></td>
                <td><?= $row["id_user"]; ?></td>
                <td><?= $row["nama_user"]; ?></td>
                <td><?= $row["alamat_user"]; ?> <?= $row["kota_user"] ?> <?= $row["provinsi"] ?> <?= $row["postcode_user"] ?></td>
                <td><?= $row["method"]; ?></td>
                <td><?= $row["total_produk"]; ?></td>
                <td><?= $row["total_harga"]; ?></td>
                <td><?= $row["status"]; ?></td>
                <td><?= $row["waktupesan"] ?></td>
            </tr>
            <?php $i++; ?>
            <?php endforeach;  ?>

        </table>
        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>