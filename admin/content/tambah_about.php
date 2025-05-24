<?php
include 'config/connection_login.php';

//--------------------------------------fungsi Save
//Jika user menekan tombol Save, lakukan perintah, ambil data dari inputan, email, nama, dan password
//Masukkan ke dalam tabel user: (nama, email, password) yang nilainya diambil dari masing-masing inputan
if (isset($_POST['save'])) {

    $aboutName = $_POST['about_name'];
    $content = $_POST['content'];
    $status = $_POST['status'];
    $image = $_FILES['image']['name'];
    $size = $_FILES['image']['size'];

    //ekstensi (hanya bisa .png, jpg, jpeg)
    $extension = ['png', 'jpg', 'jpeg'];
    //apa user melakukan upload dengan ekstensi tersebut, jika ya, masukkan gambar ke table dan folder. Jika tidak, error(extension not found)
    //in_array berfungsi untuk mengecek, apakah ada pada suatu array
    $ext = pathinfo($image, PATHINFO_EXTENSION);
    if (in_array($ext, $extension)) {
        $error[] = "Sorry, your file extension was not found";
    } else {
        $query = mysqli_query($config, "INSERT INTO about (about_name, content, image, status) VALUES ('$aboutName', '$content', '$image', '$status')");
        if ($query) {
            header("location:?page=about&tambah=berhasil");
        }
    }
}




$header = isset($_GET['edit']) ? "Edit" : "Add";
$id_user = isset($_GET['edit']) ? $_GET['edit'] : '';
$query_Edit = mysqli_query($config, "SELECT * FROM users WHERE id_user='$id_user'");
$rowEdit = mysqli_fetch_assoc($query_Edit);


if (isset($_POST['edit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    if (empty($_POST['password'])) {
        $password = $rowEdit['password'];
    } else {
        $password = sha1($_POST['password']);
    }


    $queryUpdate = mysqli_query($config, "UPDATE users SET name='$name', email='$email', password='$password' WHERE id_user='$id_user' ");
    if ($queryUpdate) {
        header("location:user.php?ubah=berhasil");
    }
}
?>

<form action="" method="post" enctype="multipart/form-data">
    <div class="row mb-3">
        <div class="col-sm-2">
            <label for="">Name * </label>
        </div>
        <div class="col-sm-10">
            <input type="text" name="about_name" class="form-control" placeholder="Add your name" required
                value="<?= isset($rowEdit) && isset($rowEdit['name']) ? $rowEdit['name'] : '' ?>">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-sm-2">
            <label for="">About you * </label>
        </div>
        <div class="col-sm-10">
            <input type="text" name="content" class="form-control" placeholder="Fill in your information" required
                value="<?= isset($rowEdit) && isset($rowEdit['email']) ? $rowEdit['email'] : '' ?>">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-sm-2">
            <label for="">Insert Picture </label>
        </div>
        <div class="col-sm-10">
            <input type="file" name="image">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-sm-2">
            <label for="">Status * </label>
        </div>
        <div class="col-sm-10">
            <input type="radio" name="status" value="1" checked> Publish
            <input type="radio" name="status" value="0"> Draft
        </div>
    </div>
    <!-- <div class=" row mb-3">
        <div class="col-sm-2">
            <label for="">Password * </label>
        </div>
        <div class="col-sm-10">
            <input type="password" name="password" class="form-control" placeholder="Masukkan password anda">
        </div>
    </div> -->
    <div class="row">
        <div class="col-sm-2">

        </div>
        <div class="col-sm-1 ">
            <button name="save" type="submit" class="form-control btn btn-primary">
                <?= isset($id_user) && $id_user != '' ? 'Update' : 'Save'; ?>
            </button>
        </div>
    </div>
</form>