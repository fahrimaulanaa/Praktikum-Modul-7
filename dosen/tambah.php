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
    <h1 align="center" >Tambah dosen</h1>
    <br>
    <br>    
    <table align="center">
        <form action="tambah.php" method="post">
            <tr>
                <td>Id</td>
                <td><input type="text" name="id_dosen"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama_dosen"></td>
            </tr>
            <tr>
                <td>Telefon</td>
                <td><input type="text" name="telefon_dosen"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan" name="simpan"></td>
            </tr>
        </form>
    </table>
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