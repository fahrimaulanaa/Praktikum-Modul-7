<?php
include "conncet.php";

$query = "SELECT kode, nama_matkul, sks, semester, nama_dosen FROM matakuliah
LEFT JOIN dosen USING (id_dosen) ORDER BY kode";
$result = mysqli_query($connect, $query);
$num = mysqli_num_rows($result);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Matakuliah</th>
            <th>SKS</th>
            <th>Semester</th>
            <th>Dosen Pengajar</th>
            <th>Aksi</th>
        </tr>
     </table>
</body>
</html>

<?php
include "conncet.php";
if($num > 0){
    $no = 1;
    while($data = mysqli_fetch_assoc($result)){
        //make table
        echo "<table border = '1'>";
        echo "<tr>";
        echo "<td>".$no++."</td>";
        echo "<td>".$data['kode']."</td>";
        echo "<td>".$data['nama_matkul']."</td>";
        echo "<td>".$data['sks']."</td>";
        echo "<td>".$data['semester']."</td>";
        echo "<td>".$data['nama_dosen']."</td>";
        echo "<td><a href='form-update.php?kode=".$data['kode']."'>Edit</a> | <a href='delete.php?kode=".$data['kode']."'>Hapus</a></td>";
        echo "</tr>";
        echo "</table>";
        $no++;
    }
}
?>
