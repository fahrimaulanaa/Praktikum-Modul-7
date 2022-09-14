<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <script src="https://cdn.tailwindcss.com"></script>
    <div class="flex justify-center items-center h-screen">
        <div class="bg-white rounded-lg shadow-lg p-5">
            <h1 class="text-2xl font-bold mb-5">Harus login dulu cuy</h1>  
            <form action="login.php" method="post">
                <div class="mb-5">
                    <label for="username" class="block mb-2">Username</label>
                    <input type="text" name="username" id="username" class="border rounded w-full px-3 py-2">
                </div>
                <div class="mb-5">
                    <label for="password" class="block mb-2">Password</label>
                    <input type="password" name="password" id="password" class="border rounded w-full px-3 py-2">
                </div>
                <div class="mb-5">
                    <input type="submit" value="Login" name="login" class="bg-blue-500 text-white px-3 py-2 rounded w-full">
                </div>
            </form>
            <p>Belum punya akun? <a href="signup.php" class="text-blue-700 font-bold ">Daftar</a></p>
        </div>
    </div>
</body>
</html>