<?php
include 'config/connection_login.php';

//--------------------------------------fungsi Save
//Jika user menekan tombol Save, lakukan perintah, ambil data dari inputan, email, nama, dan password
//Masukkan ke dalam tabel user: (nama, email, password) yang nilainya diambil dari masing-masing inputan
if (isset($_POST['save'])) {
    $colorServices = $_POST['color_services'];
    $skillIcon = $_POST['skill_icon'];
    $skillName = $_POST['skill_name'];
    $skillPoint = $_POST['skill_point'];
    $query = mysqli_query($config, "INSERT INTO skills (color_services, skill_icon, skill_name, skill_point) VALUES ('$colorServices', '$skillIcon', '$skillName', '$skillPoint')");
    if ($query) {
        header("location:?page=skills&tambah=berhasil");
    }
}





$header = isset($_GET['edit']) ? "Edit" : "Add";
$skill_id = isset($_GET['edit']) ? $_GET['edit'] : '';
$query_Edit = mysqli_query($config, "SELECT * FROM skills WHERE skill_id='$skill_id'");
$rowEdit = mysqli_fetch_assoc($query_Edit);


if (isset($_POST['edit'])) {
    $colorServices = $_POST['color_services'];
    $skillIcon = $_POST['skill_icon'];
    $skillName = $_POST['skill_name'];
    $skillPoint = $_POST['skill_point'];
    $queryUpdate = mysqli_query($config, "UPDATE skills SET color_services='$colorServices', skill_icon='$skillIcon', skill_name='$skillName', skill_point='$skillPoint' WHERE skill_id='$skill_id' ");
    header("location:?page=skills&ubah=berhasil");
}
?>

<form action="" method="post" enctype="multipart/form-data">
    <div class="row mb-3">
        <div class="col-sm-2">
            <label for="">Color Services </label>
        </div>
        <div class="col-sm-10">
            <input type="text" name="color_services" class="form-control" placeholder="Color" required
                value="<?= isset($rowEdit) && isset($rowEdit['color_services']) ? $rowEdit['color_services'] : '' ?>">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-sm-2">
            <label for="">Icon </label>
        </div>
        <div class="col-sm-10">
            <input type="text" name="skill_icon" class="form-control" placeholder="Icon" required
                value="<?= isset($rowEdit) && isset($rowEdit['skill_icon']) ? $rowEdit['skill_icon'] : '' ?>">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-sm-2">
            <label for="">Skills </label>
        </div>
        <div class="col-sm-10">
            <input type="text" name="skill_name" class="form-control" placeholder="Skills" required
                value="<?= isset($rowEdit) && isset($rowEdit['skill_name']) ? $rowEdit['skill_name'] : '' ?>">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-sm-2">
            <label for="">Skill Point </label>
        </div>
        <div class="col-sm-10">
            <input type="number" name="skill_point" class="form-control" placeholder="Point" required
                value="<?= isset($rowEdit) && isset($rowEdit['skill_point']) ? $rowEdit['skill_point'] : '' ?>">
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
            <button name="<?= isset($skill_id) && $skill_id != '' ? 'edit' : 'save'; ?>" type=""
                class="form-control btn btn-primary">
                <?= isset($skill_id) && $skill_id != '' ? 'Update' : 'Save'; ?>
            </button>
        </div>
    </div>
</form>