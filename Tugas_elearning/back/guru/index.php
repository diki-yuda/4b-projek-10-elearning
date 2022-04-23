<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guruku-Guru</title>
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
</head>

<body>
    <?php
    session_start();
    ?>
    <nav class="navbar navbar-expand-lg shadow-sm navbar-dark bg-success p-3">
        <div class="container">
            <a class="navbar-brand fw-bolder text-white" href="#">Guruku | Guru</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 fw-boldl">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Dashboard</a>
                    </li>
                    <div class="nav-item">
                        <a href="index.php?page=materi" class="nav-link">Materi</a>
                    </div>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <?= $_SESSION['guru'] ?>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>`
        </div>
    </nav>

    <div class="container mt-4">
        <?php
        include "menu.php";
        ?>
    </div>

    <script src="../../assets/js/bootstrap.min.js"></script>
</body>

</html>