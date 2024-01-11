<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="bg-dark">
    <div class="d-flex flex-column justify-content-center align-items-center vh-100">
        <h3 class="text-light">CREATE READ UPDATE DELETE</h3>
        <h6 class="text-light">PHP NATIVE</h6>
        <div class="card col-sm-12 col-lg-6 mt-3">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5>Table</h5>
                <a href="add-data.php" class="btn btn-success">Add Data</a>
            </div>
            <div class="card-body p-0 table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">No</th>
                            <th scope="col">NIM</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        include 'connection.php';
                        $query = "SELECT * FROM mahasiswas";
                        $doQuery = mysqli_query($connection, $query);
                        $number = 1;

                        while ($item = mysqli_fetch_array($doQuery)) {
                            echo "
                            <tr class='text-center'>
                                <td>$number</td>
                                <td>$item[nim]</td>
                                <td>$item[nama]</td>
                                <td>$item[alamat]</td>
                                <td>$item[jenis_kelamin]</td>
                                <td>
                                    <a href='view-data.php?id=$item[id]' class='btn btn-sm btn-primary'>View</a>
                                    <a href='edit-data.php?id=$item[id]' class='btn btn-sm btn-warning'>Edit</a>
                                    <a href='do-delete-data.php?id=$item[id]' class='btn btn-sm btn-danger'>Delete</a>
                                </td>
                            </tr>";
                            $number++;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>