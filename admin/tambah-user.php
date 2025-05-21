<?php

include 'config/connection_login.php';

//--------------------------------------fungsi Save
//Jika user menekan tombol Save, lakukan perintah, ambil data dari inputan, email, nama, dan password
//Masukkan ke dalam tabel user: (nama, email, password) yang nilainya diambil dari masing-masing inputan
if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = sha1($_POST['password']);

    $query = mysqli_query($config, "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')");
    if ($query) {
        header("location: user.php?tambah=berhasil");
    }
}

$header = isset($_GET['edit']) ? "Edit" : "Add";
$id_user = isset($_GET['edit']) ? $_GET['edit'] : '';
$query_Edit = mysqli_query($config, "SELECT * FROM users WHERE id_user='$id_user'");
$rowEdit = mysqli_fetch_assoc($query_Edit);


if (isset($_POST['edit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = sha1($_POST['password']);

    $queryUpdate = mysqli_query($config, "UPDATE users SET name='$name', email='$email', password='$password' WHERE id_user='$id_user' ");
    if ($queryUpdate) {
        header("location:user.php?ubah=berhasil");
    }
}
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

        <?php include "inc/header.php"; ?>

        <div class="content mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                Data User
                            </div>
                            <div class="card-body">
                                <form action="" method="post">
                                    <div class="row mb-3">
                                        <div class="col-sm-2">
                                            <label for="">Nama * </label>
                                        </div>
                                        <div class="col-sm-10">
                                            <input type="text" name="name" class="form-control"
                                                placeholder="Masukkan nama anda" required
                                                value="<?= $rowEdit['name'] ?>">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-2">
                                            <label for="">Email * </label>
                                        </div>
                                        <div class="col-sm-10">
                                            <input type="email" name="email" class="form-control"
                                                placeholder="Masukkan Email anda" required
                                                value="<?= $rowEdit['email'] ?>">
                                        </div>
                                    </div>
                                    <div class=" row mb-3">
                                        <div class="col-sm-2">
                                            <label for="">Password * </label>
                                        </div>
                                        <div class="col-sm-10">
                                            <input type="password" name="password" class="form-control"
                                                placeholder="Masukkan password anda" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">

                                        </div>
                                        <div class="col-sm-1 ">
                                            <button name="<?= isset($id_user) ? 'edit' : 'save'; ?>" type="submit"
                                                class="form-control btn btn-primary">Save</button>
                                        </div>
                                    </div>
                                </form>
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