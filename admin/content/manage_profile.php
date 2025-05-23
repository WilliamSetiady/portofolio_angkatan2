<?php
include('config/connection_login.php');

if (isset($_POST['save_profile'])) {
    $profile_name = $_POST['profile_name'];
    $profession = $_POST['profession'];
    $description = $_POST['description'];
    //PROSES SIMPAN FOTO
    $photo = $_FILES['photo'];
    if ($photo['error'] == 0) {
        $fileName = uniqid() . '_' . basename($photo['name']);
        $filePath = "uploads/" . $fileName;
        move_uploaded_file($photo['tmp_name'], $filePath);
    }

    $insertQ = mysqli_query($config, "INSERT INTO profiles (profile_name, profession, description, photo) VALUES ('$profile_name', '$profession', '$description', '$fileName')");
    if ($insertQ) {
        header("location:dashboard.php?level=" . base64_encode($_SESSION['ROLE']) . "&page=manage_profile");
    }
}

$selectProfile = mysqli_query($config, "SELECT * FROM profiles");
$row = mysqli_fetch_assoc($selectProfile);

if (isset($_GET['del'])) {
    $idDel = $_GET['del'];

    $selectPhoto = mysqli_query($config, "SELECT photo FROM profiles WHERE id_profile= $idDel");
    $rowPhoto = mysqli_fetch_assoc($selectPhoto);
    unlink("uploads/" . $row['photo']);
    $delete = mysqli_query($config, "DELETE FROM profiles WHERE id_profile=$idDel");
    if ($delete) {
        header("location:dashboard.php?page=manage_profile");
    }
}
?>

<form action="" method="post" enctype="multipart/form-data">
    <div class="m-2" style="width: 55%;">
        <label class="form-label mt-2" for="">Profile Name</label>
        <input type="text" value="<?= !isset($row['profile_name']) ? '' : $row['profile_name']; ?>" class="form-control"
            name="profile_name">

        <label class="form-label mt-2" for="">Profession</label>
        <input type="text" value="<?= !isset($row['profession']) ? '' : $row['profession']; ?>" class="form-control"
            name="profession">

        <label class="form-label mt-2" for="">Description</label>
        <textarea type="text" class="form-control" name="description" cols="30"
            rows="5"><?= !isset($row['description']) ? '' : $row['description']; ?></textarea>

        <label for="" class="form-label mt-2">Photo</label>
        <input type="file" name="photo" class="form-control">
        <img class="mt-4" src="uploads/<?= $row['photo'] ?>" width="150" alt="">
        <?php
        if (empty($row['profile_name'])) {
        ?>
            <button class="btn btn-primary mt-4" name="save_profile" type="submit">Save</button>
        <?php
        } else {
        ?>
            <a onclick="return confirm('YAKIN INGIN HAPUS?')"
                href="dashboard.php?level=<?= base64_encode($_SESSION['ROLE']) ?>&page=manage_profile&del=<?= $row['id_profile'] ?>"
                class="btn btn-danger mt-4">Hapus</a>
        <?php
        }
        ?>
    </div>
</form>