<?php
include 'config/connection_login.php';

//--------------------------------------fungsi Save
//Jika user menekan tombol Save, lakukan perintah, ambil data dari inputan, email, nama, dan password
//Masukkan ke dalam tabel user: (nama, email, password) yang nilainya diambil dari masing-masing inputan
if (isset($_POST['save'])) {
    $colorServices = mysqli_real_escape_string($config, $_POST['color_services']);
    $expertiseIcon = mysqli_real_escape_string($config, $_POST['expertise_icon']);
    $expertiseName = mysqli_real_escape_string($config, $_POST['expertise_name']);
    $expertiseDesc = mysqli_real_escape_string($config, $_POST['expertise_desc']);


    $query = mysqli_query($config, "INSERT INTO expertise (color_services, expertise_icon, expertise_name, expertise_desc) VALUES ('$colorServices', '$expertiseIcon', '$expertiseName', '$expertiseDesc')");

    if ($query) {
        header("location:?page=expertise&tambah=berhasil");
    }
}






$header = isset($_GET['edit']) ? "Edit" : "Add";
$expertiseId = isset($_GET['edit']) ? $_GET['edit'] : '';
$query_Edit = mysqli_query($config, "SELECT * FROM expertise WHERE expertise_id='$expertiseId'");
$rowEdit = mysqli_fetch_assoc($query_Edit);


if (isset($_POST['edit'])) {
    $colorServices = mysqli_real_escape_string($config, $_POST['color_services']);
    $expertiseIcon = mysqli_real_escape_string($config, $_POST['expertise_icon']);
    $expertiseName = mysqli_real_escape_string($config, $_POST['expertise_name']);
    $expertiseDesc = mysqli_real_escape_string($config, $_POST['expertise_desc']);
    $queryUpdate = mysqli_query($config, "UPDATE expertise SET color_services='$colorServices', expertise_icon='$expertiseIcon', expertise_name='$expertiseName', expertise_desc='$expertiseDesc' WHERE expertise_id='$expertiseId' ");
    header("location:?page=expertise&ubah=berhasil");
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
            <input type="text" name="expertise_icon" class="form-control" placeholder="Icon" required
                value="<?= isset($rowEdit) && isset($rowEdit['expertise_icon']) ? $rowEdit['expertise_icon'] : '' ?>">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-sm-2">
            <label for="">Expertise </label>
        </div>
        <div class="col-sm-10">
            <input type="text" name="expertise_name" class="form-control" placeholder="Expertise" required
                value="<?= isset($rowEdit) && isset($rowEdit['expertise_name']) ? $rowEdit['expertise_name'] : '' ?>">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-sm-2">
            <label for="">Description </label>
        </div>
        <div class="col-sm-10">
            <textarea id="summernote" type="text" name="expertise_desc" class="form-control" placeholder="Desc" required
                value="<?= isset($rowEdit) && isset($rowEdit['expertise_desc']) ? $rowEdit['expertise_desc'] : '' ?>"></textarea>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-2">

        </div>
        <div class="col-sm-1 ">
            <button name="<?= isset($expertiseId) && $expertiseId != '' ? 'edit' : 'save'; ?>" type=""
                class="form-control btn btn-primary">
                <?= isset($expertiseId) && $expertiseId != '' ? 'Update' : 'Save'; ?>
            </button>
        </div>
    </div>
</form>