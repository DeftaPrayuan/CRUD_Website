<?php 

    require "db_management.php";

    $totalPet = query("SELECT * FROM dt_baru");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Pet Community | Home</title>
</head>

<body>
    
<header>  
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">MyPet</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link" href="mypet.php">My Pet Collection</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="index.php">Show..!</a>
                </li>
                </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            </div>
        </div>
    </nav>
</header>
<div class="container mt-4 text-center">
    <h3>>>> BEST PETS OF THE YEAR <<<</h3>
</div>  

<section style="margin-top: 50px;">
    <div class="container mt-4 p-5 text-center">
        <div class="row gx-5">
            <?php foreach($totalPet as $total): ?>
                    <div class="card" style="width: 20rem; margin:auto">
                        <img class="card-img-top" src="img/<?= $total['gambar']; ?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><?= $total['nama_lengkap']; ?></h5>
                            <a href="#" class="btn btn-primary">View</a>
                        </div>
                    </div>
                    <br>
                    <div class="card" style="width: 20rem; margin:auto">
                        <img class="card-img-top" src="img/<?= $total['gambar']; ?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><?= $total['nama_lengkap']; ?></h5>
                            <a href="#" class="btn btn-primary">View</a>
                        </div>
                    </div>
                    <br>
                    <div class="card" style="width: 20rem; margin:auto">
                        <img class="card-img-top" src="img/<?= $total['gambar']; ?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><?= $total['nama_lengkap']; ?></h5>
                            <a href="#" class="btn btn-primary">Lihat</a>
                        </div>
                    </div>
            <?php endforeach ?>
        </div>
    </div>
</section>

<footer style="margin-top: 200pt; ">
    <div class="text-center">
        <p>Dibuat oleh Defta Pradana</p>
    </div>
</footer>

</body>
</html>