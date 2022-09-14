<?php
include "conncet.php";

$id_dosen = $_GET['id_dosen'];
$sql = "SELECT * FROM dosen WHERE id_dosen='$id_dosen'";
$query = mysqli_query($connect, $sql);
$data = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
</head>
<body>
    <h1>Update Data</h1>
    <table>
        <form action="dosen-update.php" method="post">
            <tr>
                <td>ID dosen:</td>
                <td><input type="text" name="id_dosen" value="<?php echo $data['id_dosen']; ?>" readonly></td>
            </tr>
            <tr>
                <td>Nama dosen:</td>
                <td><input type="text" name="nama_dosen" value="<?php echo $data['nama_dosen']; ?>"></td>
            </tr>
            <tr>
                <td>Telefon dosen:</td>
                <td><input type="text" name="telefon_dosen" value="<?php echo $data['telefon_dosen']; ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Update" name="update"></td>
            </tr>
        </form>
    </table>
</body>
</html>
