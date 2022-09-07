<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Duplikat Data</title>
</head>
<body>
    <h1 align="center">Cek Duplikasi Data</h1>  
    <table border="0.5">
        <form action="cek-duplikat.php" method="POST">
            <tr>
                <td>Masukkan ID Dosen:</td>
                <td><input type="text" name="id_dosen"></td>
            </tr>
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
    $sql = "SELECT * FROM dosen WHERE id_dosen='$id_dosen'";
    $query = mysqli_query($connect, $sql);
    $row = mysqli_num_rows($query);
    if($row > 0){
        echo "Data sudah ada";
    }else{
        echo "Data belum ada";
    }
}

?>