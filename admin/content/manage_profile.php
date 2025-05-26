<?php
include('config/connection_login.php');

if (isset($_POST['save_profile'])) {
    $profile_name = $_POST['profile_name'];
    $aboutName = $_POST['about'];

    //PROSES SIMPAN FOTO
    $photo = $_FILES['photo']['name'];
    $tmp_name = $_FILES['photo']['tmp_name'];

    $fileName = uniqid() . '_' . basename($photo);
    $filePath = "uploads/" . $fileName;
    //mencari apakah di dalam table profiles ada datanya, jika ada maka update, jika tidak ada maka insert
    //mysqli_num_row()
    $queryProfile = mysqli_query($config, "SELECT * FROM profiles ORDER BY profile_id DESC");
    if (mysqli_num_rows($queryProfile) > 0) {
        $rowProfile = mysqli_fetch_assoc($queryProfile);
        $profile_id = $rowProfile['profile_id'];

        //jika user upload gambar
        if (!empty($photo)) {
            //menghapus foto lama di dalam folder untuk diganti dengan yang baru
            unlink("uploads/" . $rowProfile['photo']);
            move_uploaded_file($tmp_name, $filePath);

            $update = mysqli_query($config, "UPDATE profiles SET profile_name='$profile_name', about='$aboutName', photo='$fileName' WHERE profile_id='$profile_id'");
        } else {
            $update = mysqli_query($config, "UPDATE profiles SET profile_name='$profile_name', about='$aboutName' WHERE profile_id='$profile_id'");
            header("location:?page=manage_profile&ubah=berhasil");
        }

        //perintah update

    } else {
        //perintah insert
        if (!empty($photo)) {
            move_uploaded_file($tmp_name, $filePath);
            //jika user upload gambar
            $insertQ = mysqli_query($config, "INSERT INTO profiles (profile_name, about, photo) VALUES ('$profile_name', '$aboutName', '$fileName')");
            header("location:?page=manage_profile&tambah=berhasil");
        } else {
            //jika user tidak upload gambar
            $insertQ = mysqli_query($config, "INSERT INTO profiles (profile_name, about) VALUES ('$profile_name', '$aboutName')");
            header("location:?page=manage_profile&tambah=berhasil");
        }
    }

    // if ($photo['error'] == 0) {
    //     $fileName = uniqid() . '_' . basename($photo['name']);
    //     $filePath = "uploads/" . $fileName;
    //     move_uploaded_file($photo['tmp_name'], $filePath);
    // }

    // $insertQ = mysqli_query($config, "INSERT INTO profiles (profile_name, profession, description, photo) VALUES ('$profile_name', '$profession', '$description', '$fileName')");

    // if ($insertQ) {



    //     header("location:?page=manage_profile");
    //     if ($insertQu) {

    //     }
    // }
}

$selectProfile = mysqli_query($config, "SELECT * FROM profiles");
$row = mysqli_fetch_assoc($selectProfile);

// if (isset($_GET['del'])) {
//     $idDel = $_GET['del'];

//     $selectPhoto = mysqli_query($config, "SELECT photo FROM profiles WHERE profile_id= $idDel");
//     $rowPhoto = mysqli_fetch_assoc($selectPhoto);
//     unlink("uploads/" . $row['photo']);
//     $delete = mysqli_query($config, "DELETE FROM profiles WHERE profile_id=$idDel");
//     if ($delete) {
//         header("location:dashboard.php?page=manage_profile");
//     }
// }

?>

<form action="" method="post" enctype="multipart/form-data">
    <div class="m-2" style="width: 55% ;">
        <label class="form-label mt-2" for="">Profile Name</label>
        <input type="text" value="<?= !isset($row['profile_name']) ? '' : $row['profile_name']; ?>" class="form-control"
            name="profile_name">

        <label class="form-label mt-2" for="">About you</label>
        <textarea id="summernote" type="text" class="form-control" name="about" cols="30"
            rows="5"><?= !isset($row['about']) ? '' : $row['about']; ?></textarea>

        <label for="" class="form-label mt-2">Photo</label>
        <input type="file" name="photo" class="form-control">
        <img class="mt-4" src="uploads/<?php echo $fileName ?>" width="150" alt="">

        <button class="btn btn-primary mt-4" name="save_profile" type="submit">Save</button>

    </div>
</form>