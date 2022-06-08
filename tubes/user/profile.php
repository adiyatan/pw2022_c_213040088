<?php

require '../php/functions.php';

session_start();
$id_user = $_SESSION['id_user'];

if(isset($_POST['update_profile'])){

   if ( profile($_POST) > 0) {
        echo "
         <script>
            alert('data berhasil diubah!!');
            document.location.href = 'profile.php'
         </script>
        ";
    } else {
        echo "
         <script>
            alert('data gagal diubah!!');
            document.location.href = 'profile.php'
         </script>
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
   <title>Ubah profil</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../asset/css/style2.css">

</head>
<body>
   
<div class="update-profile">

   <?php
      $select = mysqli_query($conn, "SELECT * FROM `user` WHERE id = '$id_user'") or die('query failed');
      if(mysqli_num_rows($select) > 0){
         $fetch = mysqli_fetch_assoc($select);
      }
   ?>

   <form action="" method="post" enctype="multipart/form-data">
      <input type="hidden" name="id_user" value="<?= $fetch['id'] ?>">
   <input type="hidden" name="gambar_user" value="<?= $fetch["gambar_user"]; ?>">
      <?php
         if($fetch['gambar_user'] == ''){
            echo '<img src="../asset/img/default-avatar.png">';
         }else{
            echo '<img src="../asset/uploaded-img/'.$fetch['gambar_user'].'">';
         }
         if(isset($message)){
            foreach($message as $message){
               echo '<div class="message">'.$message.'</div>';
            }
         }
      ?>
      <div class="flex">
         <div class="inputBox">
            <span>username :</span>
            <input type="text" name="update_name" value="<?php echo $fetch['nama_user']; ?>" class="box">
            <span>your email :</span>
            <input type="email" name="update_email" value="<?php echo $fetch['email_user']; ?>" class="box">
            <span>mobile phone :</span>
            <input type="number" name="update_phone" value="<?php echo $fetch['nomor_user']; ?>" class="box">
            <span>update your pic :</span>
            <img src="" class="img-thumbnail" id="img-preview" style="display :none;"> <br>
            <input type="file" name="update_image" id="update-image" accept="image/jpg, image/jpeg, image/png" class="box" onchange="previewimg()">
         </div>
         <div class="inputBox">
            <span>Alamat</span>
            <textarea name="update_alamat" id="alamat" class="box"><?= $fetch['alamat_user'] ?></textarea>
            <span>provinsi :</span>
            <input type="text" name="update_provinsi" value="<?php echo $fetch['provinsi']; ?>" class="box">
            <span>kota :</span>
            <input type="text" name="update_kota" value="<?php echo $fetch['kota_user']; ?>" class="box">
            <span>postcode :</span>
            <input type="number" name="update_postcode" value="<?php echo $fetch['postcode_user']; ?>" class="box">
         </div>
      </div>
      <input type="submit" value="update profile" name="update_profile" class="btn" onclick="return confirm('ubah profile?');">
      <a href="user.php" class="delete-btn">go back</a>
   </form>

</div>

</body>
<script src="../asset/js/script3.js"></script>
</html>