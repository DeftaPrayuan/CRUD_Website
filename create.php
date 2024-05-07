<?php
    require 'db_management.php';

    if(isset($_POST["submit"])){

        if(insert($_POST) > 0) {
            echo "<script>
                    alert('Add Data Successful..!');
                </script>";
        } else {
            echo "<script>
                    alert('Add Data Error..!');
                </script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Pets Community</title>
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
    <h2>Create NOW..!</h2>
</div>
<br>
<div class="container">
    <form action="" method="post" enctype="multipart/form-data">
        <table class="table">
            <tr>
                <th><label for="fname" class="form-label">Nama Lengkap:</label></th>
                <th><input type="text" class="form-control" id="fname" name="nama_lengkap" required></th>
            </tr>
            <tr >
                <th><label for="lname" class="form-label">Berat:</label></th>
                <th><input type="text" class="form-control" id="lname" name="berat_badan" required></th>
            </tr>
            <tr>
                <th><label for="tinggi" class="form-label">Tinggi</label></th>
                <th><input type="text" id="tinggi" class="form-control" name="tinggi_badan" required></th>
            </tr>
            <tr>
                <th><label for="jenis" class="form-label">Jenis</label></th>
                <th><input type="text" id="jenis" class="form-control" name="jenis" required></th>
            </tr>
            <tr>
                <th><label for="usia" class="form-label">Usia</label></th>
                <th><input type="text" id="usia" class="form-control" name="usia" required></th>
            </tr>
        </table>
        <div>
            <label for="formFile" class="form-label"></label>
            <input class="form-control" type="file" id="formFile" name="gambar">
        </div>
        <button class="btn btn-primary" type="submit" style="margin-left:520px; margin-top:100px" name="submit">Daftar</button>
    </form>
</div>

<footer style="margin-top: 170pt; ">
    <div class="text-center">
        <p>Dibuat oleh Defta Pradana</p>
    </div>
</footer>
</body>
</html>