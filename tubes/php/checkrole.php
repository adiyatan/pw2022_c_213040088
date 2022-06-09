<?php
session_start();
include 'functions.php';


if (isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
  $id = $_COOKIE['id'];
  $key = $_COOKIE['key'];

  //ambil username berdasarkan id
  $result = mysqli_query($conn, "SELECT username FROM user WHERE id ='$id'");
  $rows = mysqli_fetch_assoc($result);

  //cek cookie dan id
  if ($key === hash('sha256', $rows['username'])) {
    $_SESSION['login'] = true;
  }
}

$username = mysqli_real_escape_string($conn,$_POST['username']);
$password = mysqli_real_escape_string($conn,$_POST['password']);


$login = mysqli_query($conn,"SELECT * FROM user WHERE username='$username'");
$cek = mysqli_num_rows($login);
     if($cek > 0){
          $data = mysqli_fetch_assoc($login);
          if(password_verify($password,$data['password'])) {
          // cek jika user login sebagai admin
          if($data['role']=="admin"){
               $_SESSION['id_admin'] = $data['id'];
               $_SESSION['username'] = $username;
               $_SESSION['role'] = "admin";

               if($data["role"] == "admin"){
                $_SESSION['admin'] = true;
               }

               $_SESSION['login'] = $data;
               //cookie
               if (isset( $_POST['remember'])) {
                    setcookie('id',$data['id'], time() + 2592000, "/");
                    setcookie('key', hash('sha256', $data['username']), time() + 2592000, "/");
               }
               header("location:../admin/admin.php");

          // cek jika user login sebagai user
               }else if($data['role']=="user"){
                    $_SESSION['id_user'] = $data['id'];
                    $_SESSION['username'] = $username;
                    $_SESSION['role'] = "user";

                    if($data["role"] == "user"){
                     $_SESSION['user'] = true;
                    }

                    $_SESSION['login'] = $data;
                    //cookie
                    if (isset( $_POST['remember'])) {
                    setcookie('id',$data['id'], time() + 2592000, "/");
                    setcookie('key', hash('sha256', $data['username']), time() + 2592000, "/");
               }
                    header("location:../user/user.php");
               }
               else{
                    header("location:../login.php?pesan=gagal");
               }               
          }else{
               header("location:../login.php?pesan=gagal");
          }

      }else{
     header("location:../login.php?pesan=gagal");
     }
?>