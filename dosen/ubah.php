<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Dosen</title>
</head>
<body>
    <h1>Ubah Data dosen</h1>
    <table>
        <form action="ubah.php" method="post">
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
    if(isset($_POST['simpan'])){
        $id_dosen = $_POST['id_dosen'];
        $nama_dosen = $_POST['nama_dosen'];
        $telefon_dosen = $_POST['telefon_dosen'];
        $sql = "UPDATE dosen SET nama_dosen='$nama_dosen',telefon_dosen='$telefon_dosen' WHERE id_dosen='$id_dosen'";
        $query = mysqli_query($connect, $sql);
        if($query){
            header('Location: ubah.php');
        }else{
            header('Location: ubah.php');
        }
    }
?>