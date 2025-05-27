<?php
$query = mysqli_query($config, "SELECT * FROM contacts ORDER BY contact_id DESC");
$row = mysqli_fetch_all($query, MYSQLI_ASSOC);
// print_r($user);
// die;

if (isset($_GET['delete'])) {
    $idd = $_GET['delete'];
    $queryDelete = mysqli_query($config, "DELETE FROM contacts WHERE contact_id='$idd'");
    //mysqli_query($config, "DELETE FROM users WHERE id_user='$id'");
    header("location: ?page=contact&hapus=berhasil");
}

?>
<div class="table-responsive">
    <table id="table" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Message</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($row as $key => $data_value): ?>
                <tr>
                    <!-- <?php print_r($data_value); ?> -->
                    <td><?= $key + 1; ?></td>
                    <td><?= $data_value['contact_name']; ?></td>
                    <td><?= $data_value['contact_email']; ?></td>
                    <td><?= $data_value['contact_subject']; ?></td>
                    <td><?= $data_value['contact_message']; ?></td>
                    <td>
                        <a onclick="return confirm('Are you sure?')"
                            href="?page=contact&delete= <?php echo $data_value['contact_id']; ?>"
                            class="btn btn-danger btn-sm content-center d-flex justify-content-center">Delete</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>