<?php
session_start();

if (isset($_POST['email'])) {
    $email = "admin@gmail.com";
    $password = "admin";
    if ($_POST['email'] == $email and $_POST['password'] == $password) {
        $_SESSION["email"] = $email;
        header(header: "location:10.php");
    } else {
        header(header: "location:9.php?login=error");
    }
}
?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css">
    <title>Login Form | Portofolio William</title>
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
                                <?php if (isset($_GET['access'])) :  ?>
                                    <div class="alert alert-warning" role="alert">
                                        Anda harus login terlebih dahulu
                                    </div>
                                <?php endif ?>
                                <?php if (isset($_GET['login'])) :  ?>
                                    <div class="alert alert-danger" role="alert">
                                        Tolong periksa email dan password kembali!
                                    </div>
                                <?php endif ?>
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
                                        <button type="submit" class="btn btn-primary">Masuk</button>
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