<?php

include 'config/connection_login.php';

//Munculkan/pilih semua data dari tabel user. Urutkan dari yang terbesar ke yang terkecil
$query = mysqli_query($config, "SELECT * FROM users ORDER BY id_user DESC");
$row = mysqli_fetch_all($query, MYSQLI_ASSOC);
// print_r($user);
// die;

if (isset($_GET['delete'])) {
    $idd = $_GET['delete'];
    $queryDelete = mysqli_query($config, "DELETE FROM users WHERE id_user='$idd'");
    //mysqli_query($config, "DELETE FROM users WHERE id_user='$id'");
    header("location: user.php?hapus=berhasil");
}


// $header = isset($_GET('edit')) ? "Edit" : "Add";


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="wrapper">

        <?php include 'inc/header.php'; ?>

        <div class="content mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                Data User
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <div align="right" class="mb-3">
                                        <a href="tambah-user.php" class="btn btn-primary">Add</a>
                                    </div>
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Email</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($row as $key => $data_value): ?>
                                                <tr>
                                                    <!-- <?php print_r($data_value); ?> -->
                                                    <td><?= $key + 1; ?></td>
                                                    <td><?= $data_value['name']; ?></td>
                                                    <td><?= $data_value['email']; ?></td>
                                                    <td>
                                                        <a href="tambah-user.php?edit=<?php echo $data_value['id_user']; ?>"
                                                            class="btn btn-success btn-sm">Edit</a>
                                                        <a onclick="return confirm('Are you sure?')"
                                                            href="user.php?delete= <?php echo $data_value['id_user']; ?>"
                                                            class="btn btn-danger btn-sm">Delete</a>
                                                    </td>
                                                </tr>
                                            <?php endforeach ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>