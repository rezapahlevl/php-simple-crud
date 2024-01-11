<?php

include 'connection.php';
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];

$query = "INSERT INTO mahasiswas (id, nim, nama, alamat, jenis_kelamin) VALUES(null,'$nim', '$nama', '$alamat', '$jenis_kelamin')";
$doQuery = mysqli_query($connection, $query);

if ($doQuery) {
    header('Location: index.php');
    echo
    "
        <script type='text/javascript'>
            alert('Data Have Been Stored');
            window.location='index.php';
        </script>
    ";
} else {
    echo
    "
        <script type='text/javascript'>
            alert('Data Have Been Failed To Store');
            window.location='add-data.php';
        </script>
    ";
}
