<?php

include 'config/connection_login.php';

//Munculkan/pilih semua data dari tabel user. Urutkan dari yang terbesar ke yang terkecil
$query = mysqli_query($config, "SELECT * FROM expertise ORDER BY expertise_id DESC");
$row = mysqli_fetch_all($query, MYSQLI_ASSOC);
// print_r($user);
// die;

if (isset($_GET['delete'])) {
    $idd = $_GET['delete'];
    $queryDelete = mysqli_query($config, "DELETE FROM expertise WHERE expertise_id='$idd'");
    //mysqli_query($config, "DELETE FROM users WHERE id_user='$id'");
    header("location:?page=expertise&hapus=berhasil");
}


// $header = isset($_GET('edit')) ? "Edit" : "Add";


?>

<div class="table-responsive">
    <div align="right" class="mb-3">
        <a href="?page=tambah_expertise" class="btn btn-primary">Add</a>
    </div>
    <table id="table" class="table table-bordered table-striped">
        <thead>
            <tr class="text-center">
                <th>No</th>
                <th>Expertise Color</th>
                <th>Expertise Icon</th>
                <th>Input Expertise</th>
                <th>Expertise Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($row as $key => $data_value): ?>
            <tr>
                <!-- <?php print_r($data_value); ?> -->
                <td><?= $key + 1; ?></td>
                <td><?= $data_value['color_services']; ?></td>
                <td><?= $data_value['expertise_icon']; ?></td>
                <td><?= $data_value['expertise_name']; ?></td>
                <td><?= $data_value['expertise_desc']; ?></td>

                <td>
                    <div class="row d-flex justify-content-center">
                        <div class="col-6">

                            <a href="?page=tambah_expertise&edit=<?php echo $data_value['expertise_id']; ?>"
                                class="btn btn-success btn-sm d-flex justify-content-center">Edit</a>
                        </div>
                        <div class="col-6">
                            <a onclick="return confirm('Are you sure?')"
                                href="?page=expertise&delete=<?php echo $data_value['expertise_id']; ?>"
                                class="btn btn-danger btn-sm d-flex justify-content-center">Delete</a>
                        </div>
                    </div>
                </td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>