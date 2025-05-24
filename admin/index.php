<?php session_start();

include('config/connection_login.php');

if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = sha1($_POST['password']);

    //select / tampilkan semua data dari tabel user dimana email di ambil dari inputan user di bagian input email
    $queryUser = mysqli_query($config, "SELECT * FROM users WHERE email='$email' AND password ='$password'");

    //melakukan check terhadap email yang diinput user, apakah benar atau tidak dengan yang ada di tabel user
    if (mysqli_num_rows($queryUser) > 0) {
        $singleUserdat = mysqli_fetch_assoc($queryUser);
        $_SESSION['NAME'] = $singleUserdat['name'];
        $_SESSION['ID_USER'] = $singleUserdat['id_user'];
        $_SESSION['ROLE'] = $singleUserdat['id_role'];
        header("location: dashboard.php");
    } else {
        header("location: index.php?error=login");
    }
}
?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css">
    <title>Login Form | Portofolio Will</title>
</head>


<body>

    <div class="wrapper">
        <div class="login-form mt-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-header">
                                Login Form
                            </div>

                            <div class="card-body">
                                <!-- <?php if (isset($_GET['access'])) :  ?>
                                    <div class="alert alert-warning" role="alert">
                                        Anda harus login terlebih dahulu
                                    </div>
                                <?php endif ?>
                                <?php if (isset($_GET['error'])) :  ?>
                                    <div class="alert alert-danger" role="alert">
                                        Tolong periksa email dan password kembali!
                                    </div>
                                <?php endif ?> -->
                                <form action="" method="post">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Email</label>
                                        <input type="email" class="form-control" name="email"
                                            placeholder="Ex: admin@gmail.com">
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Password</label>
                                        <input type="password" class="form-control" name="password"
                                            placeholder="Password anda...">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-primary">Login</button>
                                    </div>
                                </form>
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