<?php
include 'config/connection_login.php';

//--------------------------------------fungsi Save
//Jika user menekan tombol Save, lakukan perintah, ambil data dari inputan, email, nama, dan password
//Masukkan ke dalam tabel user: (nama, email, password) yang nilainya diambil dari masing-masing inputan
if (isset($_POST['save'])) {

    $skill = $_POST['skill_name'];


    $query = mysqli_query($config, "INSERT INTO skills (skill_name) VALUES ('$skill')");
    if ($query) {
        header("location:?page=skills&tambah=berhasil");
    }
}





$header = isset($_GET['edit']) ? "Edit" : "Add";
$skill_id = isset($_GET['edit']) ? $_GET['edit'] : '';
$query_Edit = mysqli_query($config, "SELECT * FROM skills WHERE skill_id='$skill_id'");
$rowEdit = mysqli_fetch_assoc($query_Edit);


if (isset($_POST['edit'])) {
    $skill = $_POST['skill_name'];
    $queryUpdate = mysqli_query($config, "UPDATE skills SET skill_name='$skill' WHERE skill_id='$skill_id' ");
    if ($queryUpdate) {
        header("location:?page=skills&ubah=berhasil");
    }
}
?>

<form action="" method="post" enctype="multipart/form-data">
    <div class="row mb-3">
        <div class="col-sm-2">
            <label for="">Skills </label>
        </div>
        <div class="col-sm-10">
            <input type="text" name="skill_name" class="form-control" placeholder="Add your skills" required
                value="<?= isset($rowEdit) && isset($rowEdit['skill_name']) ? $rowEdit['skill_name'] : '' ?>">
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
            <button name="save" type="<?= isset($skill_id) && $skill_id != '' ? 'edit' : 'save'; ?>"
                class="form-control btn btn-primary">
                <?= isset($skill_id) && $skill_id != '' ? 'Update' : 'Save'; ?>
            </button>
        </div>
    </div>
</form>