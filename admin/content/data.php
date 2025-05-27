<?php

include 'config/connection_login.php';

//Munculkan/pilih semua data dari tabel user. Urutkan dari yang terbesar ke yang terkecil
$query = mysqli_query($config, "SELECT * FROM data ORDER BY data_id DESC");
$row = mysqli_fetch_all($query, MYSQLI_ASSOC);
// print_r($user);
// die;

if (isset($_GET['delete'])) {
    $idd = $_GET['delete'];
    $queryDelete = mysqli_query($config, "DELETE FROM data WHERE data_id='$idd'");
    //mysqli_query($config, "DELETE FROM users WHERE id_user='$id'");
    header("location:?page=data&hapus=berhasil");
}


// $header = isset($_GET('edit')) ? "Edit" : "Add";


?>

<div class="table-responsive">
    <div align="right" class="mb-3">
        <a href="?page=tambah_data" class="btn btn-primary">Add</a>
    </div>
    <table class="table table-bordered table-striped">
        <thead>
            <tr class="text-center">
                <th>No</th>
     
                <th>Data To</th>
                <th>Data Speed</th>
                <th>Data Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($row as $key => $data_value): ?>
            <tr>
                <!-- <?php print_r($data_value); ?> -->
                <td><?= $key + 1; ?></td>
       
                <td><?= $data_value['data_to']; ?></td>
                <td><?= $data_value['data_speed']; ?></td>
                <td><?= $data_value['data_name']; ?></td>

                <td>
                    <div class="row d-flex justify-content-center">
                        <div class="col-6">

                            <a href="?page=tambah_data&edit=<?php echo $data_value['data_id']; ?>"
                                class="btn btn-success btn-sm d-flex justify-content-center">Edit</a>
                        </div>
                        <div class="col-6">
                            <a onclick="return confirm('Are you sure?')"
                                href="?page=data&delete=<?php echo $data_value['data_id']; ?>"
                                class="btn btn-danger btn-sm d-flex justify-content-center">Delete</a>
                        </div>
                    </div>
                </td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>