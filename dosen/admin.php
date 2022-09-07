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
                                <img class="h-8 w-8 rounded-full" src="https://tailwindui.com/img/logos/workflow-mark-indigo-500.svg" alt="">
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
    <!--Mobile Menu-->
    <div class="hidden" id="mobile-menu">
        <div class="px-2 pt-2 pb-3 space-y-1">
            <a href="#" class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium">Dashboard</a>

            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Team</a>

            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Projects</a>

            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Calendar</a>
        </div>
    </div>
    <!--make 4 card inline with button-->
    <div class="flex flex-wrap justify-center" id="card-mahasiswa " >
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
                </div>
            </div>
        </div>
        <div class="w-1/4 p-4">
            <div class="bg-white border rounded shadow">
                <div class="border-b p-3">
                    <h5 class="font-bold uppercase text-gray-600">Jumlah Mata Kuliah</h5>
                </div>
                <div class="p-5">
                    <h3 class="text-3xl font-bold text-center text-gray-600">100</h3>
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

    <script>
        window.addEventListener('resize', function(event) {
            if (window.innerWidth > 640) {
                document.getElementById("mobile-menu").classList.add("hidden");
            }
        });
        document.getElementById("button-toogle-mobile").addEventListener("click", function() {
            document.getElementById("mobile-menu").classList.toggle("hidden");
        });

        //if resize to mobile, make the card 1 column only and place in center
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
    </script>
</body>

</html>