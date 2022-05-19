<?php
session_start();
include 'functions.php';

$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($conn,"SELECT * FROM user WHERE username='$username' and password='$password'");
$cek = mysqli_num_rows($login);
     if($cek > 0){
          $data = mysqli_fetch_assoc($login);

          // cek jika user login sebagai admin
          if($data['role']=="admin"){
               $_SESSION['nama'] = $data['nama_user'];
               $_SESSION['username'] = $username;
               $_SESSION['role'] = "admin";
               header("location:../admin/admin.php");

          // cek jika user login sebagai user
               }else if($data['role']=="user"){
                    $_SESSION['username'] = $username;
                    $_SESSION['role'] = "user";
                    header("location:../user/user.php");
               }
               else{
                    header("location:../index.php?pesan=gagal");
               } 
      }else{
     header("location:../index.php?pesan=gagal");
     }
?>