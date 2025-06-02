<?php
include 'config/connection_login.php';

//--------------------------------------fungsi Save
//Jika user menekan tombol Save, lakukan perintah, ambil data dari inputan, email, nama, dan password
//Masukkan ke dalam tabel user: (nama, email, password) yang nilainya diambil dari masing-masing inputan
if (isset($_POST['save'])) {

    $dataTo = $_POST['data_to'];
    $dataSpeed = $_POST['data_speed'];
    $dataName = $_POST['data_name'];

    $query = mysqli_query($config, "INSERT INTO data (data_to, data_speed, data_name) VALUES ('$dataTo', '$dataSpeed', '$dataName')");
    if ($query) {
        header("location:?page=data&tambah=berhasil");
    }
}





$header = isset($_GET['edit']) ? "Edit" : "Add";
$dataId = isset($_GET['edit']) ? $_GET['edit'] : '';
$query_Edit = mysqli_query($config, "SELECT * FROM data WHERE data_id='$dataId'");
$rowEdit = mysqli_fetch_assoc($query_Edit);


if (isset($_POST['edit'])) {
    $dataTo = $_POST['data_to'];
    $dataSpeed = $_POST['data_speed'];
    $dataName = $_POST['data_name'];
    $queryUpdate = mysqli_query($config, "UPDATE data SET data_to='$dataTo', data_speed='$dataSpeed', data_name='$dataName' WHERE data_id='$dataId' ");
    header("location:?page=data&ubah=berhasil");
}
?>

<form action="" method="post" enctype="multipart/form-data">
    <div class="row mb-3">
        <div class="col-sm-2">
            <label for="">Data To </label>
        </div>
        <div class="col-sm-10">
            <input type="number" name="data_to" class="form-control" placeholder="Input overall data amount" required
                value="<?= isset($rowEdit) && isset($rowEdit['data_to']) ? $rowEdit['data_to'] : '' ?>">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-sm-2">
            <label for="">Data Speed </label>
        </div>
        <div class="col-sm-10">
            <input type="number" name="data_speed" class="form-control" placeholder="Input the desired data speed" required
                value="<?= isset($rowEdit) && isset($rowEdit['data_speed']) ? $rowEdit['data_speed'] : '' ?>">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-sm-2">
            <label for="">Data Name </label>
        </div>
        <div class="col-sm-10">
            <input type="text" name="data_name" class="form-control" placeholder="Input the name of the data" required
                value="<?= isset($rowEdit) && isset($rowEdit['data_name']) ? $rowEdit['data_name'] : '' ?>">
        </div>
    </div>

    <div class="row">
        <div class="col-sm-2">

        </div>
        <div class="col-sm-1 ">
            <button name="<?= isset($dataId) && $dataId != '' ? 'edit' : 'save'; ?>" type=""
                class="form-control btn btn-primary">
                <?= isset($dataId) && $dataId != '' ? 'Update' : 'Save'; ?>
            </button>
        </div>
    </div>
</form>