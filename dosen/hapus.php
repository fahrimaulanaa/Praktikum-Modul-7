<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Dosen</title>
</head>
<body>
    <h1>Hapus Data dosen</h1>
    <table>
        <form action="hapus.php" method="post">
            <tr>
                <td>Masukkan ID dosen:</td>
                <td><input type="text" name="id_dosen"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Hapus" name="hapus"></td>
                <td><input type="submit" value="Hapus Semua Data" name="hapus-semua"></td>
            </tr>
        </form>
    </table>
</body>
</html>
<?php
include "conncet.php";
//make confirmation
if(isset($_POST['hapus'])){
    $id_dosen = $_POST['id_dosen'];
    $sql = "SELECT * FROM dosen WHERE id_dosen='$id_dosen'";
    $query = mysqli_query($connect, $sql);
    $data = mysqli_fetch_array($query);
    echo "<br>";
    echo "ID dosen: ".$data['id_dosen'];
    echo "<br>";
    echo "Nama dosen: ".$data['nama_dosen'];
    echo "<br>";
    echo "Telefon dosen: ".$data['telefon_dosen'];
    echo "<br>";
    echo "<br>";
    echo "Apakah anda yakin akan menghapus data tersebut?";
    echo "<br>";
    echo "<br>";
    echo "<a href='hapus.php?id_dosen=$id_dosen' onclick='hapus()'>Ya</a>";
    echo " | ";
    echo "<a href='hapus.php'>Tidak</a>";
}
//if Hapus Semua Data is clicked
if(isset($_POST['hapus-semua'])){
    $sql = "TRUNCATE TABLE dosen";
    $query = mysqli_query($connect, $sql);
    if($query){
        header('Location: hapus.php');
    }else{
        echo "Gagal";
    }
}

if(isset($_GET['id_dosen'])){
    $id_dosen = $_GET['id_dosen'];
    $sql = "DELETE FROM dosen WHERE id_dosen='$id_dosen'";
    $query = mysqli_query($connect, $sql);
    if($query){
        header('Location: hapus.php');
    }else{
        header('Location: hapus.php');
    }
}

?>
<script>
    function hapus(){
        var hapus = confirm("Apakah anda yakin akan menghapus data tersebut?");
        if(hapus){
            return true;
            alert("Data berhasil dihapus");
        }else{
            return false;
            alert("Data gagal dihapus");
        }
    }
</script>