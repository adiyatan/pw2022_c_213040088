<?php
session_start();

require '../php/functions.php';
$listsabun = query("SELECT * FROM data_sabun");

$id_user = $_SESSION['id_user'];
 $select = mysqli_query($conn, "SELECT * FROM `user` WHERE id = '$id_user'") or die('query failed');
if(mysqli_num_rows($select) > 0){
    $user = mysqli_fetch_assoc($select);
}
// cek apakah yang mengakses halaman ini sudah login
if($_SESSION['role']==""){
header("location:../login.php?pesan=gagal");
}

if (isset($_POST['add_to_cart'])) {
    $product_gambar = $_POST['product_gambar'];
    $product_nama = $_POST['product_nama'];
    $product_bahan = $_POST['product_bahan'];
    $product_kegunaan = $_POST['product_kegunaan'];
    $product_harga = $_POST['product_harga'];
    $product_quantity = 1;

    $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE nama_sabun_cart = '$product_nama'") or die(mysqli_error($conn));


        $insert_product = mysqli_query($conn, "INSERT INTO `cart`(id_cart,id_user, nama_sabun_cart, bahan_sabun_cart, kegunaan_sabun_cart, harga_sabun_cart, gambar_sabun_cart, quantity) VALUES(NULL, '$id_user','$product_nama', '$product_bahan', '$product_kegunaan', '$product_harga', '$product_gambar', '$product_quantity')") or die(mysqli_error($conn));
        $message[] = 'product added to cart succesfully';
    
}

$select_rows = mysqli_query($conn, "SELECT * FROM `cart` WHERE id_user = $id_user") or die('query failed');
$row_count = mysqli_num_rows($select_rows);

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Halaman User</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <script src="../asset/js/jquery-3.6.0.min.js"></script>
        <script src="../asset/js/script.js"></script>
        <style>
            .loader {
            width: 100px;
            position: absolute;
            top: 1px;
            left: 285px;
            z-index: -1;
            display: none;
            }
            .foto {
            width: auto;
            height: 50px;
            }
        </style>
    </head>
    <body>

<?php

if(isset($message)){
   foreach($message as $message){
      echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
   };
};

?>

    <header>
    <div class="px-3 py-2 bg-info text-dark fs-4">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <a href="/" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-dark text-decoration-none"> Keira Soap Factory
          </a>

          <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
            <li>
              <a href="user.php#daftarsabun" class="nav-link text-white">
                Beranda
              </a>
            </li>
            <li>
              <a href="cart.php" class="nav-link text-dark">
                Keranjang <span>(<?php echo $row_count; ?>)</span>
              </a>
            </li>
            <li>
              <a href="check.php" class="nav-link text-dark">
                Riwayat Pesanan
              </a>
            </li>
            <li>
              <a href="profile.php" class="nav-link text-dark">
                Ubah Profil
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </header>

        <div class="container-xl mt-1 fs-4">
        <div class="px-3 py-2 border-bottom mb-3">
      <div class="container d-flex flex-wrap justify-content-center">
        <form class="col-12 col-lg-auto mt-3 mb-lg-0 me-lg-auto">
        <p>Halo <b><?= $user['nama_user']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['role']; ?></b>.</p>
        <p style="font-style: italic;">Selamat Berbelanja :)</p>
        <p>Untuk konsultasi hubungi <span><a href="https://wa.me/6282115914639/?text=Halo!%0ASaya%20ingin%20konsultasi%20sabun" target="_blank">Admin</a></span></p>
        </form>

        <div class="text-end mt-2">
          <a href="../php/logout.php" class="btn btn-success">Logout</a>
        </div>
      </div>
    </div>

        <h1>Daftar Sabun Kesehatan</h1>
        <p>Oleh Keira SoapFactory</p>

        <div class="row"> 
        <div class="col-md-3">
            <h4></h4>
            <div class="col-md">
                    <form action="" method="post">
                        <img src="../asset/img/loader.gif" class="loader">
                        <div class="input-group">
                            <input type="text" name="keyword" class="form-control" placeholder="masukkan kata kunci" autocomplete="off" id="keyword">
                            <div class="input-group-append">
                                <button type="submit" name="cari" class="btn btn-secondary p-3" id="tombol-cari">Cari</button>
                            </div>
                            <img src="../asset/img/loader.gif" class="loader">
                        </div>
                    </form>
                </div>
                </div>
                <div id="tabel-sabun">
        <table border="1" cellpadding="10" cellspacing="0" width="600px" class="table table-bordered table-hover table-secondary mt-4" id="daftarsabun">
            
            <tr class="thead-dark text-center table table-dark table-striped">
                <th>No.</th>
                <th>Gambar</th>
                <th>Nama Sabun</th>
                <th>Bahan Sabun</th>
                <th>Kegunaan Sabun</th>
                <th>Harga</th>
                <th>Action</th>
            </tr>

            <?php $i = 1; ?>
            <?php foreach ($listsabun as $row) : ?>
            <tr class="thead-dark text-center">
                <form action="" method="post">
                <td><?= $i; ?></td>
                <td><input type="hidden" name="product_gambar" value="../asset/uploaded-img/<?= $row["gambar_sabun"]; ?>"><img src="../asset/uploaded-img/<?= $row["gambar_sabun"]; ?>" class="rounded foto" width="auto" height="50px"></td>
                <td><input type="hidden" name="product_nama" value="<?= $row["nama_sabun"]; ?>"><?= $row["nama_sabun"]; ?></td>
                <td><input type="hidden" name="product_bahan" value="<?= $row["bahan_sabun"]; ?>"><?= $row["bahan_sabun"]; ?></td>
                <td><input type="hidden" name="product_kegunaan" value="<?= $row["kegunaan_sabun"]; ?>"><?= $row["kegunaan_sabun"]; ?></td>
                <td><input type="hidden" name="product_harga" value="<?= $row["harga_sabun"]; ?>"><?= $row["harga_sabun"]; ?></td>
                <td>

                    <a href="detail.php?gambar=<?= $row["gambar_sabun"] ?>&product_nama=<?= $row["nama_sabun"]  ?>&product_bahan=<?= $row["bahan_sabun"]?>&product_kegunaan=<?= $row["kegunaan_sabun"]  ?>&product_harga=<?= $row["harga_sabun"] ?>" class="btn btn-sm text-white bg-danger">Detail</a>

                    <input type="submit" class="btn btn-sm bg-warning" value="add to cart" onclick="return confirm('Tambah ke keranjang?')" name="add_to_cart">                   
                </td> 
                </form>   
            </tr>
            <?php $i++; ?>
            <?php endforeach;  ?>

        </table>
        </div>
        </div>
        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>