<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Check Pesanan</title>
  </head>
  <style>
 	.foto {
 		width: auto;
 		height: 50px;
 	}
 </style>
  <body>

    <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Checkout example · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/checkout/">

    

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>
  <body class="bg-light">
    
<div class="container">
  <main>
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="../asset/img/keira.png" width="100" height="100">
      <h2>Check Pesanan</h2>
      <p class="lead">Kami akan memproses pesanan saat sudah +5 Jam dari pesanan di buat,untuk membatalkan pesanan Silahkan hubungi
        <span><a href="https://wa.me/6282115914639/?text=Halo!%0ASaya%20ingin%20membatalkan%20pesanan%20Apakah%20Bisa" target="_blank">Admin</a></span>. Jika lebih dari ketentuan, pesanan tidak akan dibatalkan</p>
    </div>

    <div class="row g-5">
      <div class="col-md-5 col-lg-4 order-md-last">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-primary">Deskripsi Pesanan</span>
          <span class="badge bg-primary rounded-pill"></span>
        </h4>
        <ul class="list-group mb-3">
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0"></h6>
              <small class="text-muted">Cek Barangmu</small>
            </div>
            <span class="text-muted">Id = <?= $_GET['id'] ?></span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Total Barang</h6>
              <small class="text-muted"><?= $_GET['total_produk'] ?></small>
            </div>
            <span class="text-muted">*</span>
          </li>
          <li class="list-group-item d-flex justify-content-between bg-light">
            <div class="text-success">
              <h6 class="my-0">Total Harga</h6>
              <small>Rp.<?= $_GET['total_harga'] ?></small>
            </div>
            <span class="text-success">*</span>
          </li>
        </ul>

      </div>
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Data Penerima (data tidak akan berubah)</h4>
        <form class="needs-validation" novalidate>
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">Nama</label>
              <input type="text" class="form-control" id="firstName" placeholder="<?= $_GET['nama_user'] ?>">
            </div>

            <div class="col-sm-6">
              <label for="nomor_user" class="form-label">Nomor Telpon</label>
              <input type="text" class="form-control" id="nomor_user" placeholder="<?= $_GET['nomor_user'] ?>">
            </div>

            <div class="col-12">
              <label for="address" class="form-label">Alamat</label>
              <input type="text" class="form-control" id="address" placeholder="<?= $_GET['alamat_user'] ?>">
            </div>

            <div class="col-md-5">
              <label for="kota" class="form-label">Kota</label>
              <input type="text" class="form-control" id="kota" placeholder="<?= $_GET['kota_user'] ?>">
            </div>

            <div class="col-md-4">
              <label for="state" class="form-label">Provinsi</label>
              <input type="text" class="form-control" id="state" placeholder="<?= $_GET['provinsi'] ?>">
            </div>

            <div class="col-md-3">
              <label for="zip" class="form-label">Zip</label>
              <input type="text" class="form-control" id="zip" placeholder="<?= $_GET['postcode_user'] ?>">
            </div>
          </div>

          <hr class="my-4">

          <h4 class="mb-3">Pembayaran</h4>

          <div class="my-3">
            <div class="form-check">
              <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
              <label class="form-check-label" for="credit">Cash On Delivery (COD)</label>
            </div>
          </div>

          <hr class="my-4">
           <a href="../php/print/cetak.php?id=<?= $_GET['id']; ?>" target="_blank" class="w-100 btn btn-danger btn-lg">Cetak</a>
          <a href="check.php" class="w-25 btn btn-warning btn-lg mt-2">Kembali</a>
        </form>
      </div>
    </div>
  </main>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; Keira Soap Factory</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">IG</a></li>
      <li class="list-inline-item"><a href="#">TOKPED</a></li>
      <li class="list-inline-item"><a href="#">WA</a></li>
    </ul>
  </footer>
</div>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="form-validation.js"></script>
  </body>
</html>




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>