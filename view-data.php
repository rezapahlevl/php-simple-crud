<?php
include 'connection.php';
$id = $_GET['id'];
$query = "SELECT * FROM mahasiswas WHERE id = $id";
$doQuery = mysqli_query($connection, $query);

while ($item = mysqli_fetch_array($doQuery)) {
    $nim = $item['nim'];
    $nama = $item['nama'];
    $alamat = $item['alamat'];
    $jenis_kelamin = $item['jenis_kelamin'];
}

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="bg-dark">
    <div class="d-flex flex-column justify-content-center align-items-center vh-100">
        <div class="card col-4">
            <div class="card-header">
                <h5>Detail <?php echo $nama; ?></h5>
            </div>
            <div class="card-body">
                <table class="table">
                    <tr>
                        <td>NIM</td>
                        <td> : <?php echo $nim; ?></td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td> : <?php echo $nama; ?></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td> : <?php echo $alamat; ?></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td> : <?php echo $jenis_kelamin; ?></td>
                    </tr>
                </table>
            </div>
            <div class="card-footer d-flex justify-content-between">
                <a class="btn btn-secondary" href="index.php">Back</a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>