<?php
session_start();
include "conncet.php";
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    $query = mysqli_query($connect, $sql);
    $data = mysqli_fetch_array($query);
    if($data['username'] == $username && $data['password'] == $password){
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        header('Location: admin.php');
        echo "Berhasil";
    }else{
        echo "Username atau password salah";
    }
}
?>