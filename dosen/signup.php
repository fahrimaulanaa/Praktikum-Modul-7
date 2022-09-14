<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>
<script src="https://cdn.tailwindcss.com"></script>
<div class="flex justify-center items-center h-screen">
    <div class="bg-white rounded-lg shadow-lg p-5">
        <h1 class="text-2xl font-bold mb-5">Sign Up</h1>  
        <form action="signup.php" method="post">
            <div class="mb-5">
                <label for="username" class="block mb-2">Username</label>
                <input type="text" name="username" id="username" class="border rounded w-full px-3 py-2">
            </div>
            <div class="mb-5">
                <label for="password" class="block mb-2">Password</label>
                <input type="password" name="password" id="password" class="border rounded w-full px-3 py-2">
            </div>
            <div class="mb-5">
                <input type="submit" value="Sign Up" name="signup" class="bg-blue-500 text-white px-3 py-2 rounded w-full">
                <br>
                <br>
                <input type="checkbox" onclick="myFunction()">Show Password
            </div>
        </form>
        <p>Sudah punya akun? <a href="form-login.php" class="text-blue-700 font-bold ">Login</a></p>
    </div>
    <script>
        function myFunction() {
          var x = document.getElementById("password");
          if (x.type === "password") {
            x.type = "text";
          } else {
            x.type = "password";
          }
        }
        </script>
    </script>
</body>
</html>
<?php
include "conncet.php";
// insert data
if(isset($_POST['signup'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password = md5($password);
    $sql = "INSERT INTO user (username, password) VALUES ('$username', '$password')";
    $query = mysqli_query($connect, $sql);
    if($query){
        header('Location: form-login.php');
    }else{
        echo "Gagal";
    }
}
?>