<?php
include 'config/connection_login.php';

//--------------------------------------fungsi Save
//Jika user menekan tombol Save, lakukan perintah, ambil data dari inputan, email, nama, dan password
//Masukkan ke dalam tabel user: (nama, email, password) yang nilainya diambil dari masing-masing inputan
if (isset($_POST['save'])) {
    $educationName = mysqli_real_escape_string($config, $_POST['education_name']);
    $educationDesc = mysqli_real_escape_string($config, $_POST['education_desc']);
    $educationDef = mysqli_real_escape_string($config, $_POST['education_def']);



    $query = mysqli_query($config, "INSERT INTO education (education_name, education_desc, education_def) VALUES ('$educationName', '$educationDesc', '$educationDef')");

    if ($query) {
        header("location:?page=education&tambah=berhasil");
    }
}






$header = isset($_GET['edit']) ? "Edit" : "Add";
$educationId = isset($_GET['edit']) ? $_GET['edit'] : '';
$query_Edit = mysqli_query($config, "SELECT * FROM education WHERE education_id='$educationId'");
$rowEdit = mysqli_fetch_assoc($query_Edit);


if (isset($_POST['edit'])) {
    $educationName = mysqli_real_escape_string($config, $_POST['education_name']);
    $educationDesc = mysqli_real_escape_string($config, $_POST['education_desc']);
    $educationDef = mysqli_real_escape_string($config, $_POST['education_def']);
    $queryUpdate = mysqli_query($config, "UPDATE education SET education_name='$educationName', education_desc='$educationDesc', education_def='$educationDef' WHERE education_id='$educationId' ");
    header("location:?page=education&ubah=berhasil");
}
?>

<form action="" method="post" enctype="multipart/form-data">
    <div class="row mb-3">
        <div class="col-sm-2">
            <label for="">Education </label>
        </div>
        <div class="col-sm-10">
            <input type="text" name="education_name" class="form-control" placeholder="Education" required
                value="<?= isset($rowEdit) && isset($rowEdit['education_name']) ? $rowEdit['education_name'] : '' ?>">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-sm-2">
            <label for="">Description </label>
        </div>
        <div class="col-sm-10">
            <textarea id="summernote" type="text" name="education_desc" class="form-control" placeholder="Desc"
                required><?= isset($rowEdit) && isset($rowEdit['education_desc']) ? $rowEdit['education_desc'] : '' ?></textarea>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-sm-2">
            <label for="">Define </label>
        </div>
        <div class="col-sm-10">
            <input type="text" name="education_def" class="form-control" placeholder="Def" required
                value="<?= isset($rowEdit) && isset($rowEdit['education_def']) ? $rowEdit['education_def'] : '' ?>">
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2">

        </div>
        <div class="col-sm-1 ">
            <button name="<?= isset($educationId) && $educationId != '' ? 'edit' : 'save'; ?>" type="submit"
                class="form-control btn btn-primary">
                <?= isset($educationId) && $educationId != '' ? 'Update' : 'Save'; ?>
            </button>
        </div>
    </div>
</form>