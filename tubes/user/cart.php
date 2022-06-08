<?php

require '../php/functions.php';

session_start();
$id_user = $_SESSION['id_user'];

if(isset($_POST['update_update_btn'])){
   $update_value = $_POST['update_quantity'];
   $update_id = $_POST['update_quantity_id'];
   $update_quantity_query = mysqli_query($conn, "UPDATE `cart` SET quantity = '$update_value' WHERE id_cart = '$update_id'");
   if($update_quantity_query){
      echo "
         <script>
            alert('data berhasil diubah!!');
            document.location.href = 'cart.php'
         </script>
        ";
   };
};

if(isset($_GET['remove'])){
   $remove_id = $_GET['remove'];
   mysqli_query($conn, "DELETE FROM `cart` WHERE id_cart = '$remove_id'");
   echo "
         <script>
            alert('data berhasil dihapus!!');
            document.location.href = 'cart.php'
         </script>
        ";
};

if(isset($_GET['delete_all'])){
   mysqli_query($conn, "DELETE FROM `cart` WHERE id_user = '$id_user'");
   echo "
         <script>
            alert('semua data berhasil diubah!!');
            document.location.href = 'cart.php'
         </script>
        ";
}

$select_rows = mysqli_query($conn, "SELECT * FROM `cart` WHERE id_user = $id_user") or die('query failed');
$row_count = mysqli_num_rows($select_rows);
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Keranjang</title>

   <!-- font awesome cdn link  -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../asset/css/style3.css">

</head>
<body>

   <header>
    <div class="px-3 py-2 bg-info text-dark fs-1">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <a href="/" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-dark text-decoration-none"> Keira Soap Factory
          </a>

          <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
            <li>
              <a href="user.php#daftarsabun" class="nav-link text-dark">
                Beranda
              </a>
            </li>
            <li>
              <a href="cart.php" class="nav-link text-white">
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

<div class="container">

<section class="shopping-cart">

   <h1 class="heading">Keranjang</h1>

   <table>

      <thead>
         <th>Gambar</th>
         <th>Nama</th>
         <th>Harga</th>
         <th>Jumlah Item</th>
         <th>total Harga</th>
         <th>Aksi</th>
      </thead>

      <tbody>

         <?php 
         
         $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE id_user= '$id_user'");
         $grand_total = 0;
         if(mysqli_num_rows($select_cart) > 0){
            while($fetch_cart = mysqli_fetch_assoc($select_cart)){
         ?>

         <tr>
            <td><img src="<?php echo $fetch_cart['gambar_sabun_cart']; ?>" height="100" alt=""></td>
            <td><?php echo $fetch_cart['nama_sabun_cart']; ?></td>
            <td>Rp.<?php echo number_format($fetch_cart['harga_sabun_cart']); ?>/-</td>
            <td>
               <form action="" method="post">
                  <input type="hidden" name="update_quantity_id"  value="<?php echo $fetch_cart['id_cart']; ?>" >
                  <input type="number" name="update_quantity" min="1"  value="<?php echo $fetch_cart['quantity']; ?>" >
                  <input type="submit" value="Perbarui" name="update_update_btn">
               </form>   
            </td>
            <?php $sub_total = $fetch_cart['harga_sabun_cart'] * $fetch_cart['quantity']; ?>
            <td>Rp.<?php echo number_format($sub_total); ?>/-</td>
            <td><a href="cart.php?remove=<?php echo $fetch_cart['id_cart']; ?>" onclick="return confirm('remove item from cart?')" class="delete-btn"> <i class="fas fa-trash"></i> Hapus</a></td>
         </tr>
         <?php
           $grand_total += $sub_total;  
            };
         };
         ?>
         <tr class="table-bottom">
            <td><a href="user.php" class="option-btn" style="margin-top: 0;">continue shopping</a></td>
            <td colspan="3">Total Harga</td>
            <td>Rp.<?php echo $grand_total; ?>/-</td>
            <td><a href="cart.php?delete_all" onclick="return confirm('are you sure you want to delete all?');" class="delete-btn"> <i class="fas fa-trash"></i> Hapus Semua </a></td>
         </tr>

      </tbody>

   </table>

   <div class="checkout-btn">
      <a href="checkout.php" class="btn <?= ($grand_total > 1)?'':'disabled'; ?>">Proses checkout</a>
   </div>

</section>

</div>
   
<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>