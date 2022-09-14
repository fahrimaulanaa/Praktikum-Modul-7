<?php
include "conncet.php";

//update data from form-update.php
if(isset($_POST['submit'])){
    $id_dosen = $_POST['id_dosen'];
    $nama_dosen = $_POST['nama_dosen'];
    $telefon_dosen = $_POST['telefon_dosen'];
    $sql = "UPDATE dosen SET nama_dosen='$nama_dosen', telefon_dosen='$telefon_dosen' WHERE id_dosen='$id_dosen'";
    $query = mysqli_query($connect, $sql);
    if($query){
        header('Location: admin.php');
    }else{
        echo "Gagal";
    }
}
?>