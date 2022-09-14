<?php
include "conncet.php";

$query = "SELECT id_dosen, nama_dosen FROM dosen";
$result = mysqli_query($connect, $query);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/style.css">
    <title>Tambah Mata Kuliah</title>
</head>

<body>
    <!-- make beautiful table with tailwindcss -->
    <div class="container mx-auto">
        <div class="flex justify-center px-6 my-12">
            <div class="w-full xl:w-3/4 lg:w-11/12 flex">
                <div class="w-full h-auto bg-gray-400 hidden lg:block lg:w-1/2 bg-cover rounded-l-lg" style="background-image: url('https://img.freepik.com/free-photo/top-view-laptop-with-diploma-globe_23-2148756575.jpg?w=1060&t=st=1663135895~exp=1663136495~hmac=65c63524647b8cf1b882dba7639bb64e70818d757108ff8c54e76d3e9e98f0e6')"></div>
                <div class="w-full lg:w-1/2 bg-gray-200 p-5 rounded-lg lg:rounded-l-none">
                    <h3 class="pt-4 text-2xl text-center">Tambah Mata Kuliah</h3>
                    <form class="px-8 pt-6 pb-8 mb-4 bg-gray-200 rounded" action="create.php" method="POST">
                        <div class="mb-4">
                            <input type="hidden" name="kode">
                            <div> 
                                <label class="block mb-2 text-sm font-bold text-gray-700" for="nama_matkul">
                                Nama Mata Kuliah
                                </label>
                                <input class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="nama_matkul" type="text" name="nama_matkul" placeholder="Nama Mata Kuliah">
                            </div>
                            <div class="mb-4">
                                <label class="block mb-2 text-sm font-bold text-gray-700" for="sks">
                                    SKS
                                </label>
                                <input class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="sks" type="text" name="sks" placeholder="SKS">
                            </div>
                            <div class="mb-4">
                                <label class="block mb-2 text-sm font-bold text-gray-700" for="semester">
                                    Semester
                                </label>
                                <input class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="semester" type="text" name="semester" placeholder="Semester">
                            </div>
                            <div class="mb-4">
                                <label class="block mb-2 text-sm font-bold text-gray-700" for="id_dosen">
                                    ID Dosen
                                </label>
                                <select class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="id_dosen" name="id_dosen">
                                    <option value="">Pilih Dosen</option>
                                    <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                                        <option value="<?php echo $row['id_dosen']; ?>"><?php echo $row['nama_dosen']; ?></option>
                                    <?php endwhile; ?>
                                </select>
                            </div>
                            <div class="mb-6 text-center">
                                <button class="w-full px-4 py-2 font-bold text-white bg-gray-900 rounded-full hover:bg-gray-700 focus:outline-none focus:shadow-outline" type="submit" name="simpan">
                                    Simpan
                                </button>
                            </div>
                            <hr class="mb-6 border-t">
                            <div class="text-center">
                                <a class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800" href="index.php">
                                    Kembali
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>