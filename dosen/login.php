<?php
session_start();
include "conncet.php";

if(isset($_POST['username'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    $query = mysqli_query($connect, $sql);
    $data = mysqli_fetch_array($query);
    if($data){
        $_SESSION['username'] = $username;
        header('Location: ../dosen/admin.php');
    }else{
        echo "Username atau password salah";
    }
}
?>