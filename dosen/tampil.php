<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form TampilDosen</title>
</head>
<body>
    <h1>Tampil Data dosen</h1>
    <table>
        <form action="tampil.php" method="post">
            <tr>
                <td>Masukkan ID Dosen yang ingin ditampilkan:</td>
                <td><input type="text" name="id_dosen"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan" name="simpan"><br></td>
                <td><input type="submit" value="Tampilkan Semua Data" name="semua"></td>
            </tr>
        </form>
    </table>
</body>
</html>
<?php
//show data in table
include "conncet.php";
echo "<h1 align='center'>Data Dosen Yang Ada:</h1>";
if(isset($_POST['simpan'])){
    $id_dosen = $_POST['id_dosen'];
    $sql = "SELECT * FROM dosen WHERE id_dosen='$id_dosen'";
    $query = mysqli_query($connect, $sql);
    $row = mysqli_fetch_array($query);
    if($row){
        echo "<table border='1' align='center'>";
        echo "<tr>";
        echo "<td>Id</td>";
        echo "<td>Nama</td>";
        echo "<td>Telefon</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>".$row['id_dosen']."</td>";
        echo "<td>".$row['nama_dosen']."</td>";
        echo "<td>".$row['telefon_dosen']."</td>";
        echo "</tr>";
        echo "</table>";
    }else{
        echo "Data tidak ditemukan";
    }
}

if(isset($_POST['semua'])){
    $sql = "SELECT * FROM dosen";
    $query = mysqli_query($connect, $sql);
    $row = mysqli_fetch_array($query);
    if($row){
        echo "<table border='1' align='center'>";
        echo "<tr>";
        echo "<td>Id</td>";
        echo "<td>Nama</td>";
        echo "<td>Telefon</td>";
        echo "</tr>";
        do{
            echo "<tr>";
            echo "<td>".$row['id_dosen']."</td>";
            echo "<td>".$row['nama_dosen']."</td>";
            echo "<td>".$row['telefon_dosen']."</td>";
            echo "</tr>";
        }while($row = mysqli_fetch_array($query));
        echo "</table>";
    }else{
        echo "Data tidak ditemukan";
    }
}
?>