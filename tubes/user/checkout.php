<?php

require '../php/functions.php';

session_start();
$id_user = $_SESSION['id_user'];

$select = mysqli_query($conn, "SELECT * FROM `user` WHERE id = '$id_user'") or die('query failed');

if(mysqli_num_rows($select) > 0){
         $fetch = mysqli_fetch_assoc($select);
}
if(isset($_POST['order_btn'])){

   $nama_user = $_POST['nama_user'];
   $nomor_user = $_POST['nomor_user'];
   $email_user = $_POST['email_user'];
   $method = $_POST['method'];
   $alamat_user = $_POST['alamat_user'];
   $provinsi = $_POST['provinsi_user'];
   $kota_user = $_POST['kota_user'];
   $postcode_user = $_POST['postcode_user'];

   $cart_query = mysqli_query($conn, "SELECT * FROM `cart` WHERE id_user= '$id_user'");
   $price_total = 0;
   if(mysqli_num_rows($cart_query) > 0){
      while($product_item = mysqli_fetch_assoc($cart_query)){
         $product_name[] = $product_item['nama_sabun_cart'] .' ('. $product_item['quantity'] .') ';
         $product_price = ($product_item['harga_sabun_cart'] * $product_item['quantity']);
         $tp = number_format($product_price);
         $price_total += $product_price;
      };
   };

   $total_product = implode(', ',$product_name);
   $detail_query = mysqli_query($conn, "INSERT INTO `order`(id, id_user, nama_user, nomor_user, email_user, method, alamat_user, provinsi, kota_user, postcode_user, total_produk, total_harga, status) VALUES(NULL,'$id_user','$nama_user','$nomor_user','$email_user','$method','$alamat_user','$provinsi','$kota_user', '$postcode_user','$total_product','$price_total', 'Penjual Memproses pesanan')") or die('query failed');

   if($cart_query && $detail_query){
      echo "
      <div class='order-message-container'>
      <div class='message-container'>
         <h3>Orderan diterima</h3>
         <div class='order-detail'>
            <span>".$total_product."</span>
            <span class='total'> total : Rp.".$price_total."/-  </span>
         </div>
         <div class='customer-details'>
            <p> Nama : <span>".$nama_user."</span> </p>
            <p> Nomor Telpon : <span>".$nomor_user."</span> </p>
            <p> Email : <span>".$email_user."</span> </p>
            <p> Alamat : <span>".$alamat_user.", ".$kota_user.",".$provinsi.", ".$postcode_user."</span> </p>
            <p> Metode Pembayaran : <span>".$method."</span> </p>
            <p>(* Terimakasih Sudah Membeli <3 *)</p>
         </div>
            <a href='check.php' class='btn'>Check pesanan</a>
         </div>
      </div>
      ";
   }

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>checkout</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../asset/css/style3.css">

</head>
<body>

<div class="container">

<section class="checkout-form">

   <h1 class="heading">Selesaikan Order</h1>

   <form action="" method="post">

   <div class="display-order">
      <?php
         $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE id_user='$id_user' ");
         $total = 0;
         $grand_total = 0;
         if(mysqli_num_rows($select_cart) > 0){
            while($fetch_cart = mysqli_fetch_assoc($select_cart)){
            $total_price = $fetch_cart['harga_sabun_cart'] * $fetch_cart['quantity'];
            $tp = number_format($total_price);
            $grand_total = $total += $total_price;
      ?>
      <span><?= $fetch_cart['nama_sabun_cart']; ?>(<?= $fetch_cart['quantity']; ?>)
         <br><img src="<?= $fetch_cart['gambar_sabun_cart']; ?>" width="auto" height="50px">
      </span>
      <?php
         }
      }else{
         echo "<div class='display-order'><span>your cart is empty!</span></div>";
      }
      ?>
      <span class="grand-total"> Total Harga : Rp.<?= $grand_total; ?>/- </span>
   </div>

      <div class="flex">

         <div class="inputBox">
            <span>Nama :</span>
            <input type="text" value="<?= $fetch['nama_user']; ?>" name="nama_user" required>
         </div>
         <div class="inputBox">
            <span>Nomor telpon :</span>
            <input type="number" value="<?= $fetch['nomor_user']; ?>" name="nomor_user" required>
         </div>
         <div class="inputBox">
            <span>Email :</span>
            <input type="email" value="<?= $fetch['email_user']; ?>" name="email_user" required>
         </div>
         <div class="inputBox">
            <span>methode pembayaran</span>
            <select name="method">
               <option value="cash on delivery" selected>cash on devlivery</option>
            </select>
         </div>
         <div class="inputBox">
            <span>Alamat Lengkap :</span>
            <input type="text" value="<?= $fetch['alamat_user']; ?>" name="alamat_user" required>
         </div>
         <div class="inputBox">
            <span>Provinsi :</span>
            <input type="text" value="<?= $fetch['provinsi']; ?>" name="provinsi_user" required>
         </div>
         <div class="inputBox">
            <span>Kota :</span>
            <input type="text" value="<?= $fetch['kota_user']; ?>" name="kota_user" required>
         </div>
         <div class="inputBox">
            <span>Postcode :</span>
            <input type="text" value="<?= $fetch['postcode_user']; ?>" name="postcode_user" required>
         </div>
      </div>
      <input type="submit" value="Pesan sekarang" name="order_btn" class="btn">
      <a href="cart.php" class="btn btn-primary" onclick="return confirm('Batalkan checkout?');">kembali</a>
   </form>

</section>

</div>

<!-- custom js file link  -->
<script src="js/script.js"></script>
   
</body>
</html>