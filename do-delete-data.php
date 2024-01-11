<?php
include 'connection.php';
$id = $_GET['id'];

$query = "DELETE FROM mahasiswas WHERE id = $id";
$doQuery = mysqli_query($connection, $query);

if ($doQuery) {
    header('Location: index.php');
    echo
    "
        <script type='text/javascript'>
            alert('Data Have Been Deleted');
            window.location='index.php';
        </script>
    ";
} else {
    echo
    "
        <script type='text/javascript'>
            alert('Data Have Been Failed To Delete');
            window.location='index.php';
        </script>
    ";
}
