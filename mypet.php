<?php 
    require 'db_management.php';
    $mypet  = query("SELECT * FROM dt_baru");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Pet Community | My Pet</title>
    <link rel="stylesheet" href="css/style.css">
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
                        <a class="nav-link" aria-current="page" href="#">My Pet Collection</a>
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
    <h3>>>> MY PET <<<</h3>
</div>

<div class="container border mt-4">
    <a id="btnTambah" href="create.php" class="btn btn-success" role="button" >
        + ADD DATA
    </a>
    <?php foreach($mypet as $pet):?>
        <div class="row mt-5">
            <div class="col border">
                <img src="img/<?= $pet['gambar']; ?>" alt="" height="200" >
            </div>
            <div class="col border">
                <h4 style="text-align: center;"><?= $pet["nama_lengkap"]; ?></h4><br><br>
                <table style="border-color:black;">
                    <tr>
                        <td><h6>Kode :</h6></th> 
                        <td><h6> <?= $pet["id"]; ?> </h6></th>
                    </tr>
                    <tr>
                        <td><h6>Nama Lengkap : </h6></td>
                        <td><h6><?= $pet["nama_lengkap"]; ?></h6></td>
                    </tr>
                    <tr>
                        <td><h6>Berat :</h6></td>
                        <td><h6><?= $pet["berat_badan"]; ?></h6></td>
                    </tr>
                    <tr>
                        <td><h6>Tinggi :</h6></td>
                        <td><h6><?= $pet["tinggi_badan"]; ?></h6></td>
                    </tr>
                    <tr>
                        <td><h6>Jenis :</h6></td>
                        <td><h6><?= $pet["jenis"]; ?></h6></td>
                    </tr> <tr>
                        <td><h6>usia :</h6></td>
                        <td><h6><?= $pet["usia"]; ?></h6></td>
                    </tr>
                </table>
            </div>
            <div class="col border">
                <table class="table">
                    <tr>
                        <th><a href="edit.php?id=<?= $pet["id"]; ?>">
                        <button class="btn btn-primary">EDIT</button>
                        </a></th>
                    </tr>
                    <tr>
                        <th><a href="delete.php?id=<?= $pet["id"]; ?>">
                        <button class="btn btn-primary">DELETE</button>
                        </a></th>
                    </tr>
                </table>
                
            </div>
        </div>
    <?php endforeach; ?>
</div>

<footer style="margin-top: 400pt; ">
    <div class="text-center">
        <p>Dibuat oleh Defta Pradana</p>
    </div>
</footer>

</body>
</html>
