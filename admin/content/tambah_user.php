<?php

if ($_SESSION['ROLE'] != 1) {
    echo "<h1>You are not permited!</h1>";
    echo "<a href='dashboard.php' class='btn btn-warning'>Back</a>";
    die;
}
//--------------------------------------fungsi Save
//Jika user menekan tombol Save, lakukan perintah, ambil data dari inputan, email, nama, dan password
//Masukkan ke dalam tabel user: (nama, email, password) yang nilainya diambil dari masing-masing inputan

if (isset($_POST['save'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $id_role = $_POST['id_role'];
    $password = sha1($_POST['password']);

    $query = mysqli_query($config, "INSERT INTO users (name, email, id_role, password) VALUES ('$name', '$email', '$id_role', '$password')");
    if ($query) {
        header("location:?page=user");
    }
}




$header = isset($_GET['edit']) ? "Edit" : "Add";
$id_user = isset($_GET['edit']) ? $_GET['edit'] : '';
$query_Edit = mysqli_query($config, "SELECT * FROM users WHERE id_user='$id_user'");
$rowEdit = mysqli_fetch_assoc($query_Edit);


if (isset($_POST['edit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $id_role = $_POST['id_role'];
    if (empty($_POST['password'])) {
        $password = $rowEdit['password'];
    } else {
        $password = sha1($_POST['password']);
    }


    $queryUpdate = mysqli_query($config, "UPDATE users SET name='$name', email='$email', id_role='$id_role', password='$password' WHERE id_user='$id_user' ");
    if ($queryUpdate) {
        header("location:?page=user&ubah=berhasil");
    }
}
$queryLevels = mysqli_query($config, "SELECT * FROM levels ORDER BY role_id DESC");
$rowLevels = mysqli_fetch_all($queryLevels, MYSQLI_ASSOC);
// print_r($rowLevels);
// die;


?>


<form action="" method="post">
    <div class="row mb-3">
        <div class="col-sm-2">
            <label for="">Nama * </label>
        </div>
        <div class="col-sm-10">
            <input type="text" name="name" class="form-control" placeholder="Masukkan nama anda" required
                value="<?= isset($rowEdit) && isset($rowEdit['name']) ? $rowEdit['name'] : '' ?>">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-sm-2">
            <label for="">Email * </label>
        </div>
        <div class="col-sm-10">
            <input type="email" name="email" class="form-control" placeholder="Masukkan Email anda" required
                value="<?= isset($rowEdit) && isset($rowEdit['email']) ? $rowEdit['email'] : '' ?>">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-sm-2">
            <label for="">Role * </label>
        </div>
        <div class="col-sm-10">
            <select name="id_role" id="" class="form-control">
                <option value="">Choose one</option>
                <!-- data option diambil dari table levels -->
                <?php foreach ($rowLevels as $level): ?>
                    <option <?= isset($_GET['edit']) ? ($level['role_id'] == $rowEdit['id_role']) ? 'selected' : '' : '' ?>
                        value="<?php echo $level['role_id'] ?>">
                        <?php echo $level['role'] ?></option>
                <?php endforeach ?>
            </select>
        </div>
    </div>
    <div class=" row mb-3">
        <div class="col-sm-2">
            <label for="">Password * </label>
        </div>
        <div class="col-sm-10">
            <input type="password" name="password" class="form-control" placeholder="Masukkan password anda">
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2">

        </div>
        <div class="col-sm-1 ">
            <button name="<?= isset($id_user) && $id_user != '' ? 'edit' : 'save'; ?>" type="submit"
                class="form-control btn btn-primary">
                <?= isset($id_user) && $id_user != '' ? 'Update' : 'Save'; ?>
            </button>
        </div>
    </div>
</form>