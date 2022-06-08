<?php
require 'php/functions.php';
$listsabun = query("SELECT * FROM data_sabun");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Keira Soap Factory</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.5.0-beta.5/lightgallery.es5.min.js" integrity="sha512-ssPi1cTYTwYV0e6IRdIId4ytENOrTDvixXo8l0DaTBAwYw9yD6rk9HU06pWRCoSWSRKwrucdVS/2fMC1getgcg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <link rel="stylesheet" href="asset/css/style3.css">

        <style>
            .loading {
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
            .gallery{
                display: flex;
                justify-content: center;
                flex-wrap: wrap;
                width: 90%;
                margin: 0 auto;
            }
            .gallery a{
                height: 200px;
                width: 300px;
                margin: 20px;
                border-radius: 5px;
                overflow: hidden;
                box-shadow: 0 3px 5px black;
            }
            .gallery a img{
                height: 100%;
                width: 100%;
                object-fit: cover;
            }
            .gallery a img:hover {
                transform: scale(0.9);
            }

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
    </head>
    <body>
<?php
if(isset($message)){
   foreach($message as $message){
      echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
   };
};

?>
        <nav id="navbar-example2" class="navbar navbar-light bg-info fixed-top px-3 fs-3">
          <a class="navbar-brand fs-2 text-center" href="#">Keira Soap Factory</a>
          <ul class="nav nav-pills fs-2 text-center">
            <li class="nav-item">
              <a class="nav-link" href="#scrollspyHeading1" style="color:black; background-color: #0DCAF0;">Produk</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#scrollspyHeading2" style="color:black;">Testimoni</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false" style="color:black;">Lainnya</a>
              <ul class="dropdown-menu fs-4">
                <li><a class="dropdown-item" href="login.php">Login</a></li>
                <li><a class="dropdown-item" href="registrasi.php">Register</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#scrollspyHeading3">Tentang Kami</a></li>
              </ul>
            </li>
          </ul>
        </nav>
        <br><br>
            <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0">                 
                    <div class="container-xl mt-5 fs-2">
                    <h4 id="scrollspyHeading1" class="d-flex justify-content-center fs-2"> Daftar Produk</h4>
                        <p class="d-flex justify-content-center fs-4">Oleh Keira SoapFactory</p>
                        <div class="row"> 
                        <div id="tabel-sabun">
                        <table border="1" cellpadding="10" cellspacing="0" width="600px" class="table table-bordered table-hover table-secondary mt-4">
                            
                            <tr class="thead-dark text-center">
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
                                <td><input type="hidden" name="product_gambar" value="../asset/uploaded-img/<?= $row["gambar_sabun"]; ?>"><img src="asset/uploaded-img/<?= $row["gambar_sabun"]; ?>" class="rounded foto" width="auto" height="50px"></td>
                                <td><input type="hidden" name="product_nama" value="<?= $row["nama_sabun"]; ?>"><?= $row["nama_sabun"]; ?></td>
                                <td><input type="hidden" name="product_bahan" value="<?= $row["bahan_sabun"]; ?>"><?= $row["bahan_sabun"]; ?></td>
                                <td><input type="hidden" name="product_kegunaan" value="<?= $row["kegunaan_sabun"]; ?>"><?= $row["kegunaan_sabun"]; ?></td>
                                <td><input type="hidden" name="product_harga" value="<?= $row["harga_sabun"]; ?>"><?= $row["harga_sabun"]; ?></td>
                                <td>

                                    <a href="login.php" class="btn btn-sm text-black bg-info">Detail</a>
                                    <a href="login.php" class="btn btn-sm text-black bg-info">Tambah ke keranjang</a>
                                </td> 
                                </form>   
                            </tr>
                            <?php $i++; ?>
                            <?php endforeach;  ?>

                        </table>
                        </div>
                        </div><br><br>
                          <h4 id="scrollspyHeading2" class="d-flex justify-content-center fs-2">Testimoni</h4>

                          <div class="gallery" id="animated-thumbnails">
                            <a href="asset/img/testi1.jpeg">
                                <img src="asset/img/testi1.jpeg" />
                            </a>
                            <a href="asset/img/testi2.jpeg">
                                <img src="asset/img/testi2.jpeg" />
                            </a>
                            <a href="asset/img/testi3.jpeg">
                                <img src="asset/img/testi3.jpeg" />
                            </a>
                            <a href="asset/img/testi4.jpeg">
                                <img src="asset/img/testi4.jpeg" />
                            </a>
                        </div>

                      </div>
                      </div>
    </body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.5.0-beta.5/lightgallery.min.js" integrity="sha512-+cRLP8t0rsqPalRf//6kfVwRVPzxvwtgLOm8XoSw+M/ND6/0aODP3WFs8m4EPtqsJ9aurqbYq4q/0u8lRJSldA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
        lightGallery(document.getElementById('animated-thumbnails-gallery'), {
    thumbnail: true,
    });

    </script>
</html>