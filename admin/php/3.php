<?php
$siswa = [
    [
        "nama" => "Iam",
        "umur" => "22",
        "jurusan" => "Junior Web Programming",
        "status" => 1,
    ], //bisa menggunakan array() untuk pengganti []
    [
        "nama" => "Set",
        "umur" => 23,
        "jurusan" => "Junior Web Programming",
        "status" => 0,
    ],
];

function ubahStatus($status)
{
    switch ($status) {
        case '1':
            return "Aktif";

        default:
            return "Tidak Aktif";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data User</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="wrapper">
        <div class="container mt-3">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">Data Siswa</div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Umur</th>
                                            <th>Jurusan</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($siswa as $key => $sw) { ?>
                                        <tr>
                                            <td><?php echo $sw['nama'] ?></td>
                                            <td><?php echo $sw['umur'] ?></td>
                                            <td><?php echo $sw['jurusan'] ?></td>
                                            <td><?php echo ubahStatus(status: $sw['status']) ?></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>