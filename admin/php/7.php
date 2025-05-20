<!-- Variable system: var yang dibuat oleh php 
ie. $_POST, $_GET, $_SESSION, $_SERVER, $_FILES, $_REQUEST 
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable System | Superglobal var</title>
</head>

<body>

    <form action="" method="post">
        <div class="form-group">
            <label for="">Name: </label>
            <input type="text" name="nama" id="nama" placeholder="Input name">
        </div>
        <br />
        <div class="form-group">
            <label for="">Number: </label>
            <input type="number" name="nilai" id="nilai" placeholder="Input number">
        </div>
        <br />
        <div class="form-group">
            <button type="submit">Send</button>
        </div>
    </form>

    <?php
    if (isset($_POST['nama'])) {
        $name = $_POST['nama'];
        $value = $_POST['nilai'];

        $nila = $value;
        $status = "";

        if ($nila >= 90) {
            $grade = "A";
        } elseif ($nila >= 80) {
            $grade = "B";
        } elseif ($nila >= 70) {
            $grade = "C";
        } elseif ($nila > 60) {
            $grade = "D";
        } else {
            $grade = "E";
        }

        echo "<br>";
        if ($nila > 70) {
            $status = "Lulus";
        } else {
            $status = "Tidak Lulus";
        }

        echo "Nama: " . $name . "<br>" . "Nilai: " . $nila . "<br>" . "Grade: " . $grade . "<br>" . "Status: " . $status;
    }
    echo "<br>";


    // shorthand
    // $nama = isset($_POST['nam']) ? $_POST['nam'] : '';
    // echo "Selamat Siang " . $nama;

    ?>

</body>

</html>