<?php
include 'connection.php';
$id     = $_POST['id'];
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];

$query = "UPDATE mahasiswas SET nim = '$nim', nama = '$nama', alamat = '$alamat', jenis_kelamin = '$jenis_kelamin' WHERE id = $id";
$doQuery = mysqli_query($connection, $query);

if ($doQuery) {
    header('Location: index.php');
    echo
    "
        <script type='text/javascript'>
            alert('Data Have Been Updated');
            window.location='index.php';
        </script>
    ";
} else {
    echo
    "
        <script type='text/javascript'>
            alert('Data Have Been Failed To Update');
            window.location='index.php';
        </script>
    ";
}
