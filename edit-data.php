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
    <title>Edit Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="bg-dark">
    <div class="d-flex flex-column justify-content-center align-items-center vh-100">
        <div class="card col-4">
            <div class="card-header">
                <h5>Edit <?php echo $nama; ?></h5>
            </div>
            <form action="do-update-data.php" method="post">
                <div class="card-body">
                    <input type="hidden" name="id" value="<?php echo "$id"; ?>">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control" required id="nama" value="<?php echo $nama; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="nim" class="form-label">NIM (Nomer Induk Mahasiswa)</label>
                        <input type="text" name="nim" class="form-control" required id="nim" value="<?php echo $nim; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" name="alamat" class="form-control" required id="alamat" value="<?php echo $alamat; ?>">
                    </div>
                    <div class="">
                        <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-control" required id="jenis_kelamin">
                            <?php
                            if ($jenis_kelamin == 'Laki-laki') {
                                echo
                                "<option value='Laki-laki' selected='selected'>Laki-laki</option>
                                <option value='Perempuan'>Perempuan</option>";
                            } else {
                                echo
                                "<option value='Laki-laki'>Laki-laki</option>
                                <option value='Perempuan' selected='selected'>Perempuan</option>";
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-between">
                    <button class="btn btn-warning" type="submit">Update</button>
                    <a class="btn btn-secondary" href="index.php">Back</a>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>