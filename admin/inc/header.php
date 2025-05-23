<?php
session_start();
$_name = isset($_SESSION['NAME']) ? $_SESSION['NAME'] : '';

if (!$_name) {
    header("location:index.php?access=failed");
}


?>
<header class="shadow-sm">
    <nav class="navbar navbar-expand-lg bg-body-white">

        <div class="container-fluid">
            <a class="navbar-brand" href="#">Admin</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Page
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                        <?php

                        if (isset($_SESSION['ROLE']) && $_SESSION['ROLE'] == 1) {
                        ?>
                    <li class="nav-item">
                        <a class="nav-link"
                            href="user.php?level=<?php echo base64_encode($_SESSION['ROLE']) ?>">User</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                            href="dashboard.php?level=<?php echo base64_encode($_SESSION['ROLE']) ?>&page=manage_profile"></a>
                    </li>
                <?php
                        }
                ?>
                </li>

                </ul>
                <ul class="navbar-nav  mr-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <?= $_name ?>
                        </a>
                        <ul class="dropdown-menu ms-auto">
                            <li><a class="dropdown-item nav-link" href="keluar.php">Logout</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
</header>