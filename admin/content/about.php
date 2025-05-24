<?php

include 'config/connection_login.php';

//Munculkan/pilih semua data dari tabel user. Urutkan dari yang terbesar ke yang terkecil
$query = mysqli_query($config, "SELECT * FROM about ORDER BY about_id DESC");
$row = mysqli_fetch_all($query, MYSQLI_ASSOC);
// print_r($user);
// die;

if (isset($_GET['delete'])) {
    $idd = $_GET['delete'];
    $queryDelete = mysqli_query($config, "DELETE FROM about WHERE about_id='$idd'");
    //mysqli_query($config, "DELETE FROM users WHERE id_user='$id'");
    header("location:?page=team&hapus=berhasil");
}


// $header = isset($_GET('edit')) ? "Edit" : "Add";


?>

<div class="table-responsive">
    <div align="right" class="mb-3">
        <a href="?page=tambah_about" class="btn btn-primary">Add</a>
    </div>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>About Me</th>
                <th>Status</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($row as $key => $data_value): ?>
                <tr>
                    <!-- <?php print_r($data_value); ?> -->
                    <td><?= $key + 1; ?></td>
                    <td><?= $data_value['about_name']; ?></td>
                    <td><?= $data_value['content']; ?></td>
                    <td><?= $data_value['status']; ?></td>
                    <td><?= $data_value['image']; ?></td>
                    <td>
                        <!-- <a href="tambah-user.php?edit=<?php echo $data_value['id_user']; ?>"
                            class="btn btn-success btn-sm">Edit</a>
                        <a onclick="return confirm('Are you sure?')"
                            href="user.php?delete= <?php echo $data_value['id_user']; ?>"
                            class="btn btn-danger btn-sm">Delete</a> -->
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>