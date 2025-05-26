<?php
$query = mysqli_query($config, "SELECT * FROM users ORDER BY id_user DESC");
$row = mysqli_fetch_all($query, MYSQLI_ASSOC);
// print_r($user);
// die;

if (isset($_GET['delete'])) {
    $idd = $_GET['delete'];
    $queryDelete = mysqli_query($config, "DELETE FROM users WHERE id_user='$idd'");
    //mysqli_query($config, "DELETE FROM users WHERE id_user='$id'");
    header("location: user.php?hapus=berhasil");
}

?>
<div class="table-responsive">
    <div align="right" class="mb-3">
        <a href="?page=tambah_user" class="btn btn-primary">Add</a>
    </div>
    <table id="table" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($row as $key => $data_value): ?>
                <tr>
                    <!-- <?php print_r($data_value); ?> -->
                    <td><?= $key + 1; ?></td>
                    <td><?= $data_value['name']; ?></td>
                    <td><?= $data_value['email']; ?></td>
                    <td>
                        <a href="tambah-user.php?edit=<?php echo $data_value['id_user']; ?>"
                            class="btn btn-success btn-sm">Edit</a>
                        <a onclick="return confirm('Are you sure?')"
                            href="user.php?delete= <?php echo $data_value['id_user']; ?>"
                            class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>