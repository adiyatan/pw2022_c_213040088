<?php 
require_once __DIR__ . '/vendor/autoload.php';

require '../functions.php';

$id = $_GET['id'];
$order = mysqli_query($conn, "SELECT * FROM `order` WHERE id = '$id'") or die('query failed');
      if(mysqli_num_rows($order) > 0){
         $fetch = mysqli_fetch_assoc($order);
      }


$mpdf = new \Mpdf\Mpdf();

$order = '
<!DOCTYPE html>
<html>
    <head>
        <title>Halaman order</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="../asset/js/jquery-3.6.0.min.js"></script>
        <script src="../asset/js/script2.js"></script>
    </head>
    <style>
    .foto {
        width: auto;
        height: 50px;
    }
    .loader {
        width: 100px;
        position: absolute;
        top: 1px;
        left: 285px;
        z-index: -1;
        display: none;
    }

 </style>
    <body>
    
        <div class="container mt-4">
        
        <h1>Bukti Pembayaran </h1>'

        .$fetch['waktupesan'].'

            <div class="row"> 
        <div class="col-md-3">
                </div>';

                $order .= '
                <p>Nama Penerima: '. $fetch['nama_user'] .'</p>
                <p>Nomor Penerima: '. $fetch['nomor_user'] .'</p>
                <p>Methode Pembayaran: '. $fetch['method'] .'</p>
                <p>============================================ </p>';


                $order .= '<div id="tabel-order">
        <table border="1" cellpadding="10" cellspacing="0" class="table table-bordered table-hover table-secondary mt-4">
            
            <tr class="thead-dark text-center">
                <th>ID Pesanan</th>
                <th>Total Product</th>
                <th>Total Harga</th>
            </tr>';


              $order .= '<tr>
            <td>'. $fetch["id"] .'</td>
            <td>'. $fetch["total_produk"] .'</td>
            <td>'. $fetch["total_harga"] .'</td>
            </tr>';

        $order .= '</table>
        <p>============================================ </p>
        </div>
        <p>Alamat Pengirim</p>
        <p>Jalan Dago, Bandung, Jawa Barat</p>
        <p>Alamat Penerima</p>
        <p>'.$fetch["alamat_user"].', '.$fetch["kota_user"].', '.$fetch["provinsi"].', '.$fetch["postcode_user"].'</p>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>
';

$mpdf->WriteHTML("$order");
$mpdf->Output("Daftar Mahasiswa", "I");

 ?>