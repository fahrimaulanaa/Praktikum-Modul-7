<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Form Tambah Dosen</title>
</head>

<body>
    <h1 align="center">Tambah Data Dosen</h1>
    <!-- make beautiful table in center -->
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <table class="table table-bordered">
                    <form action="tambah.php" method="POST">
                        <tr>
                            <td><input type="hidden" name="id_dosen"></td>
                        </tr>
                        <tr>
                            <td>Nama Dosen:</td>
                            <td><input type="text" name="nama_dosen"></td>
                        </tr>
                        <tr>
                            <td>Telefon Dosen:</td>
                            <td><input type="text" name="telefon_dosen"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" value="Simpan" name="simpan"></td>
                        </tr>
                    </form>
                </table>
            </div>
        </div>
    </div>

</body>

</html>
<?php
include "conncet.php";

//insert data and remove duplicate data
if (isset($_POST['simpan'])) {
    $id_dosen = $_POST['id_dosen'];
    $nama_dosen = $_POST['nama_dosen'];
    $telefon_dosen = $_POST['telefon_dosen'];

    $sql = "INSERT INTO dosen (id_dosen, nama_dosen, telefon_dosen) VALUES ('$id_dosen', '$nama_dosen', '$telefon_dosen')";
    $query = mysqli_query($connect, $sql);

    if ($query) {
        header('Location: tambah.php');
    } else {
        echo "Gagal";
    }
}
?>