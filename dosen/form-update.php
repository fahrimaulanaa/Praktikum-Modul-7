<?php
include "conncet.php";

$id_dosen = $_GET   ['id_dosen'];
$sql = "SELECT * FROM dosen WHERE id_dosen='$id_dosen'";
$query = mysqli_query($connect, $sql);
$data = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/style.css">
    <title>Update Data</title>
</head>

<body>
    <!-- make beautiful table with tailwindcss with border -->
    <div class="container mx-auto pt-32">
        <div class="flex justify-center px-6 my-12">
            <div class="w-full xl:w-3/4 lg:w-11/12 flex">
                <div class="w-full h-auto bg-gray-400 hidden lg:block lg:w-1/2 bg-cover rounded-l-lg" style="background-image: url('https://img.freepik.com/free-photo/top-view-laptop-with-diploma-globe_23-2148756575.jpg?w=1060&t=st=1663128352~exp=1663128952~hmac=b89946a0ee8056a4d65f5c70cb4c6a971581de00a8c4162f1b7ec2ae0adf277f')"></div>
                <div class="w-full lg:w-1/2 p-5 rounded-lg lg:rounded-l-none bg-gray-200">
                    <h3 class="pt-4 text-2xl text-center pb-5">Update Data</h3>
                    <form class="px-8 pt-6 pb-8 mb-4 bg-white rounded" action="dosen-update.php" method="POST">
                        <div class="mb-4">
                            <label class="block mb-2 text-sm font-bold text-gray-700" for="id_dosen">
                                ID Dosen
                            </label>
                            <input class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="id_dosen" type="text" name="id_dosen" value="<?php echo $data['id_dosen']; ?>" readonly>
                        </div>
                        <div class="mb-4">
                            <label class="block mb-2 text-sm font-bold text-gray-700" for="nama_dosen">
                                Nama Dosen
                            </label>
                            <input class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="nama_dosen" type="text" name="nama_dosen" value="<?php echo $data['nama_dosen']; ?>">
                        </div>
                        <div class="mb-4">
                            <label class="block mb-2 text-sm font-bold text-gray-700" for="telefon_dosen">
                                Telefon Dosen
                            </label>
                            <input class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="telefon_dosen" type="text" name="telefon_dosen" value="<?php echo $data['telefon_dosen']; ?>">
                        </div>
                        <div class="mb-6 text-center">
                            <a href="form-update.php"><button class="w-full px-4 py-2 font-bold text-white bg-blue-500 rounded-full hover:bg-blue-700 focus:outline-none focus:shadow-outline" type="submit" name="submit">
                                Update
                            </button></a>
                            <br>
                            <br>
                            <a href="admin.php"><button type="button" class="w-full px-6 py-2 border-2 border-blue-600 text-blue-600 font-medium text-xs leading-tight uppercase rounded-full hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out">
                                Back
                            </button></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>