<?php
 session_start();

 require '../php/functions.php';

//pagination
 $banyaksabun = 7;
 $totalsabun = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM data_sabun"));
 $banyakhalSabun = ceil($totalsabun / $banyaksabun);

 if (isset($_GET['halaman'])) {
     $halamansabun = $_GET['halaman'];
 } else {
    $halamansabun = 1;
 }

 $sabunawal=($halamansabun * $banyaksabun) - $banyaksabun;
 $listsabun = query("SELECT * FROM data_sabun LIMIT $sabunawal, $banyaksabun");
 //end

 //fitur search
 if (isset($_POST['cari'])) {
     $keyword = $_POST['keyword'];
      $listsabun = query("SELECT * FROM data_sabun WHERE 
        nama_sabun LIKE '%$keyword%' OR 
        bahan_sabun LIKE '%$keyword%' OR 
        kegunaan_sabun LIKE '%$keyword%' OR
        harga_sabun LIKE '%$keyword%'

        LIMIT $sabunawal, $banyaksabun");
 }else {
     $listsabun = query("SELECT * FROM data_sabun LIMIT $sabunawal, $banyaksabun");
 }




 $admin_id = $_SESSION['id_admin'];
 $select = mysqli_query($conn, "SELECT * FROM `user` WHERE id = '$admin_id'") or die('query failed');
if(mysqli_num_rows($select) > 0){
    $fetch = mysqli_fetch_assoc($select);
}
 // cek apakah yang mengakses halaman ini sudah login
 if($_SESSION['role']==""){
  header("location:../login.php?pesan=gagal");
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
              <a href="order.php" class="nav-link text-dark">
                Orderan
              </a>
            </li>
            <li>
              <a href="ubah.php" class="nav-link text-white">
                Produk
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </header>

        <div class="container-xl mt-5 fs-4">
        <h1>Daftar Sabun Kesehatan</h1>
        <p>Oleh Keira SoapFactory</p>
            <div class="row">
                <div class="col-md-7">
                    <h4></h4>
                </div>
                <div class="col-md-5">
                    <form action="" method="post">
                        <div class="input-group">
                            <input type="text" name="keyword" class="form-control" placeholder="masukkan kata kunci" autocomplete="off" autofocus>
                            <div class="input-group-append">
                                <button type="submit" name="cari" class="btn btn-secondary p-3">Cari</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        <table border="1" cellpadding="10" cellspacing="0" class="table table-bordered table-hover table-secondary mt-4">
            
            <tr class="thead-dark text-center">
                <th>No.</th>
                <th>Gambar</th>
                <th>Nama Sabun</th>
                <th>Bahan Sabun</th>
                <th>Kegunaan Sabun</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>

            <?php $i = 1; ?>
            <?php foreach ($listsabun as $row) : ?>
            <tr class="thead-dark text-center">
                <td><?= $i; ?></td>
                <td><img src="../asset/uploaded-img/<?= $row["gambar_sabun"]; ?>" class="rounded foto" width="auto" height="50px"></td>
                <td><?= $row["nama_sabun"]; ?></td>
                <td><?= $row["bahan_sabun"]; ?></td>
                <td><?= $row["kegunaan_sabun"]; ?></td>
                <td><?= $row["harga_sabun"]; ?></td>
                <td>
                    <a href="ubah.php?id_sabun=<?= $row["id_sabun"]; ?>" class="btn btn-success">Ubah</a>
                    <a href="hapus.php?id_sabun=<?= $row["id_sabun"]; ?> " class="btn btn-warning" onclick="return confirm('Hapus data?');">hapus</a>

                </td>
            </tr>
            <?php $i++; ?>
            <?php endforeach;  ?>

        </table>

        <nav>
            <ul class="pagination justify-content-center">

                <?php if ($halamansabun <= 1) { ?>

                    <li class="page-item disabled"><a href="?halaman=<?= $halamansabun-1 ?>" class="page-link">Sebelumnya</a></li>

                <?php }else{ ?>

                    <li class="page-item"><a href="?halaman=<?= $halamansabun-1 ?>" class="page-link">Sebelumnya</a></li>

                <?php } ?>

                <?php 
                for ($i=1; $i <= $banyakhalSabun ; $i++) { 
                 ?>
                 <li class="page-item"><a href="?halaman=<?= $i ?>" class="page-link"><?= $i ?></a></li>
                <?php } ?>

                <?php if ($halamansabun >= $banyakhalSabun) { ?>

                    <li class="page-item disabled"><a href="?halaman=<?= $halamansabun+1 ?>" class="page-link">Next</a></li>

                <?php }else{ ?>

                    <li class="page-item"><a href="?halaman=<?= $halamansabun+1 ?>" class="page-link">Next</a></li>

                <?php } ?>
            </ul>
        </nav>
        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>