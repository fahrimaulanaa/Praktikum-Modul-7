<?php
session_start();
if(!isset($_SESSION['username'])){
    header('Location: ../dosen/form-login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin Sipaling Universitas</title>
</head>

<body>
    <script src="https://cdn.tailwindcss.com"></script>
    <nav class="bg-gray-800">
        <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
            <div class="relative flex items-center justify-between h-16">
                <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                    <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false" id="button-toogle-mobile">
                        <span class="sr-only mobile-menu-button mobile-menu">Open main menu</span>
                        <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>

                        <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                    <div class="flex-shrink-0 flex items-center">
                        <img class="block lg:hidden h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-500.svg" alt="Workflow">
                        <img class="hidden lg:block h-8 w-auto pr-2" src="university.png" alt="Workflow"><b class="text-white">Sipaling Universitas</b>
                    </div>
                    <div class="hidden sm:block sm:ml-6">
                        <div class="flex space-x-4">
                            <a href="#" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium">Dashboard</a>

                            <a href="tambah.php" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium" target="blank">Tambah Dosen</a>

                            <a href="ubah.php" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Ubah Data Dosen</a>

                            <a href="hapus.php" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Hapus Data Dosen</a>
                        </div>
                    </div>
                </div>
                <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                    <div class="ml-3 relative">
                        <div>
                            <button type="button" class="bg-gray-800 flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="user-menu-button" aria-expanded="false" aria-haspopup="true" id="btn-user-menu">
                                <span class="sr-only">Open user menu</span>
                                <a href="logout.php"><img class="h-8 w-8 rounded-full" src="https://tailwindui.com/img/logos/workflow-mark-indigo-500.svg" alt=""></a>
                            </button>
                        </div>
                        <div class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 hidden" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1" id="user-menu-mini">
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>

                            <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>

                            <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="hidden" id="mobile-menu">
        <div class="px-2 pt-2 pb-3 space-y-1">
            <a href="#" class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium">Dashboard</a>

            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Team</a>

            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Projects</a>

            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Calendar</a>
        </div>
    </div>
    <div class="flex flex-wrap justify-center" id="jumlah-dosen">
        <div class="w-1/4 p-4">
            <div class="bg-white border rounded shadow">
                <div class="border-b p-3">
                    <h5 class="font-bold uppercase text-gray-600">Jumlah Dosen</h5>
                </div>
                <div class="p-5">
                    <?php
                    include "conncet.php";
                    $sql = "SELECT * FROM dosen";
                    $result = mysqli_query($connect, $sql);
                    $resultCheck = mysqli_num_rows($result);
                    ?>
                    <h3 class="text-3xl text-gray-700 font-bold leading-none mb-3"><?php echo $resultCheck; ?></h3>
                    <div class="text-sm text-gray-600">
                        <span class="text-green-500 pr-1"><i class="fas fa-caret-up"></i> 3.55%</span>
                        <span class="whitespace-no-wrap">Since last month</span>
                    </div>
                    <div class="flex items-center justify-between mt-4">
                        <a href="tambah.php" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" target="blank">Tambah Dosen</a>
                    </div>

                </div>
            </div>
        </div>
        <div class="w-1/4 p-4">
            <div class="bg-white border rounded shadow">
                <div class="border-b p-3">
                    <h5 class="font-bold uppercase text-gray-600">Jumlah Mahasiswa</h5>
                </div>
                <div class="p-5">
                    <?php
                    include "conncet.php";
                    $sql = "SELECT * FROM mahasiswa";
                    $result = mysqli_query($connect, $sql);
                    $resultCheck = mysqli_num_rows($result);
                    ?>
                    <h3 class="text-3xl text-gray-700 font-bold leading-none mb-3"><?php echo $resultCheck; ?></h3>
                    <div class="text-sm text-gray-600">
                        <span class="text-green-500 pr-1"><i class="fas fa-caret-up"></i> 3.55%</span>
                        <span class="whitespace-no-wrap">Since last month</span>
                    </div>
                    <!--make disabled button-->
                    <div class="flex items-center justify-between mt-4">
                        <a href="tambah.php" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" target="blank">Tambah Mahasiswa</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-1/4 p-4">
            <div class="bg-white border rounded shadow">
                <div class="border-b p-3">
                    <h5 class="font-bold uppercase text-gray-600">Jumlah Mata Kuliah</h5>
                </div>
                <div class="p-5">
                    <?php
                    include "conncet.php";
                    $sql = "SELECT * FROM matakuliah";
                    $result = mysqli_query($connect, $sql);
                    $resultCheck = mysqli_num_rows($result);
                    ?>
                    <h3 class="text-3xl text-gray-700 font-bold leading-none mb-3"><?php echo $resultCheck; ?></h3>
                    <div class="text-sm text-gray-600">
                        <span class="text-green-500 pr-1"><i class="fas fa-caret-up"></i>3.55%</span>
                        <span class="whitespace-no-wrap">Since last month</span>
                    </div>
                    <div class="flex items-center justify-between mt-4">
                        <a href="/chicken/matkul/form-create.php" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" target="blank">Tambah Mata Kuliah</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-1/4 p-4">
            <div class="bg-white border rounded shadow">
                <div class="border-b p-3">
                    <h5 class="font-bold uppercase text-gray-600">Jumlah Kelas</h5>
                </div>
                <div class="p-5">
                    <h3 class="text-3xl font-bold text-center text-gray-600">100</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="flex flex-wrap justify-center" id="table-dosen">
        <div class="w-full p-4">
            <div class="bg-white border rounded shadow">
                <div class="border-b p-3">
                    <h5 class="font-bold uppercase text-gray-600">Data Dosen</h5>
                </div>
                <div class="p-5">
                    <table class="w-full p-5 text-gray-700" colspan="3" rowspan="5">
                        <thead>
                            <tr>
                                <th class="text-left text-blue-900">ID Dosen</th>
                                <th class="text-left text-blue-900">Nama</th>
                                <th class="text-left text-blue-900">No. Telp</th>
                                <th class="text-left text-blue-900">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include "conncet.php";
                            $sql = "SELECT * FROM dosen";
                            $result = mysqli_query($connect, $sql);
                            $resultCheck = mysqli_num_rows($result);
                            if ($resultCheck > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                                    <tr>
                                        <td><?php echo $row['id_dosen']; ?></td>
                                        <td><?php echo $row['nama_dosen']; ?></td>
                                        <td><?php echo $row['telefon_dosen']; ?></td>
                                        <td>
                                            <a href="form-update.php?id_dosen=<?php echo $row['id_dosen']; ?>" class=" hover:bg-blue-700 text-black font-bold py-2 px-4 rounded-full hover:text-white" target="blank">Edit</a>
                                            <a href="delete.php?id=<?php echo $row['id_dosen']; ?>" class=" hover:bg-red-700 text-black font-bold py-2 px-4 rounded-full hover:text-white" target="blank">Delete</a>
                                    </tr>
                            <?php
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!--show all mahasiswa in a table with action to delete or edit-->
    <div class="flex flex-wrap justify-center" id="card-mahasiswa">
        <div class="w-full p-4">
            <div class="bg-white border rounded shadow">
                <div class="border-b p-3">
                    <h5 class="font-bold uppercase text-gray-600">Daftar Mahasiswa</h5>
                </div>
                <div class="p-5">
                    <table class="w-full p-5 text-gray-700" border="1" colspan="1">
                        <thead>
                            <tr>
                                <th class="text-left text-blue-900">NIM</th>
                                <th class="text-left text-blue-900">Nama Mahasiswa</th>
                                <th class="text-left text-blue-900">Telefon Mahasiswa</th>
                                <th class="text-left text-blue-900">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include "conncet.php";
                            $sql = "SELECT * FROM mahasiswa";
                            $result = mysqli_query($connect, $sql);
                            $resultCheck = mysqli_num_rows($result);
                            if ($resultCheck > 0) {
                                $i = 1;
                                while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                                    <tr>
                                        <td><?php echo $row['id_mahasiswa']; ?></td>
                                        <td><?php echo $row['nama_mahasiswa']; ?></td>
                                        <td><?php echo $row['telefon_mahasiswa']; ?></td>
                                        <td>
                                            <!--Select menu-->
                                            <select name="action" id="action" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                                                <option value="edit">Edit</option>
                                                <option value="delete">Delete</option>
                                            </select>
                                    </tr>
                            <?php
                                    $i++;
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!--chuck norris joke from API fetch-->
    <div class="flex flex-wrap justify-center " id="card-jok">
        <div class="w-full p-4">
            <div class="bg-white border rounded shadow">
                <div class="border-b p-3">
                    <h5 class="font-bold uppercase text-gray-600">Random Joke (Refresh for new Joke)</h5>
                </div>
                <div class="p-5">
                    <div class="flex flex-wrap">
                        <div class="w-full md:w-1/2 p-3">
                            <div class="bg-white border rounded shadow p-2">
                                <div class="flex flex-col">
                                    <div class="flex-1 p-6 flex flex-col justify-between">
                                        <div class="flex-1">
                                            <p class="text-xl font-semibold text-gray-900">
                                                <span id="joke"></span>
                                            </p>
                                        </div>
                                        <div class="mt-6 flex items-center">
                                            <div class="flex-shrink-0">
                                                <img class="h-10 w-10 rounded-full" src="https://api.chucknorris.io/img/chucknorris_logo_colored_small.png" alt="">
                                            </div>
                                            <div class="ml-3">
                                                <div class="flex space-x-1 text-sm text-gray-500">
                                                    <time datetime="2020-03-16">
                                                        16 Mar 2020
                                                    </time>
                                                    <span aria-hidden="true">
                                                        &middot;
                                                    </span>
                                                    <span>
                                                        6 min read
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-full md:w-1/2 p-3">
                            <div class="bg-white border rounded shadow p-2">
                                <div class="flex flex-col">
                                    <div class="flex-1 p-6 flex flex-col justify-between">
                                        <div class="flex-1">
                                            <p class="text-xl font-semibold text-gray-900">
                                                <span id="joke2"></span>
                                            </p>
                                        </div>
                                        <div class="mt-6 flex items-center">
                                            <div class="flex-shrink-0">
                                                <img class="h-10 w-10 rounded-full" src="https://api.chucknorris.io/img/chucknorris_logo_colored_small.png" alt="">
                                            </div>
                                            <div class="ml-3">
                                                <p class="text-sm font-medium text-gray-900" id="covid">
                                                </p>
                                                <div class="flex space-x-1 text-sm text-gray-500">
                                                    <time datetime="2020-03-16">
                                                        16 Mar 2020
                                                    </time>
                                                    <span aria-hidden="true">
                                                        &middot;
                                                    </span>
                                                    <span>
                                                        6 min read
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        window.addEventListener('resize', function(event) {
            if (window.innerWidth > 640) {
                document.getElementById("mobile-menu").classList.add("hidden");
            }
        });
        document.getElementById("button-toogle-mobile").addEventListener("click", function() {
            document.getElementById("mobile-menu").classList.toggle("hidden");
        });

        window.addEventListener('resize', function(event) {
            if (window.innerWidth < 640) {
                document.getElementById("card-mahasiswa").classList.remove("flex");
                document.getElementById("card-mahasiswa").classList.remove("flex-wrap");
                document.getElementById("card-mahasiswa").classList.remove("justify-center");
            } else {
                document.getElementById("card-mahasiswa").classList.add("flex");
                document.getElementById("card-mahasiswa").classList.add("flex-wrap");
                document.getElementById("card-mahasiswa").classList.add("justify-center");
            }
        });

        fetch('https://api.chucknorris.io/jokes/random')
            .then(response => response.json())
            .then(data => {
                document.getElementById("chuck-norris").innerHTML = data.value;
            });

        // F

        document.getElementById("button-toogle-action").addEventListener("click", function() {
            document.getElementById("action-dropdown").classList.remove("hidden");
        });

        var table = document.getElementById("table-dosen");
        var rows = table.rows;
        var r = 0;
        for (var i = 0; i < rows.length; i++) {
            rows[i].style.display = "none";
        }
        for (var i = 0; i < 30; i++) {
            rows[i].style.display = "";
        }
        document.getElementById("next").addEventListener("click", function() {
            if (r < rows.length - 30) {
                r += 30;
                for (var i = 0; i < rows.length; i++) {
                    rows[i].style.display = "none";
                }
                for (var i = r; i < r + 30; i++) {
                    rows[i].style.display = "";
                }
            }
        });
        document.getElementById("prev").addEventListener("click", function() {
            if (r > 0) {
                r -= 30;
                for (var i = 0; i < rows.length; i++) {
                    rows[i].style.display = "none";
                }
                for (var i = r; i < r + 30; i++) {
                    rows[i].style.display = "";
                }
            }
        });
        //make card draggable
        var card = document.getElementById("card-mahasiswa");
        var pos1 = 0,
            pos2 = 0,
            pos3 = 0,
            pos4 = 0;
        if (document.getElementById("card-mahasiswa-header")) {
            document.getElementById("card-mahasiswa-header").onmousedown = dragMouseDown;
        } else {
            card.onmousedown = dragMouseDown;
        }

        //live 
    </script>
</body>

</html>
