<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mypet";

    //create connection database 
    $conn = new mysqli($servername, $username, $password, $dbname);

    //check connection
    if($conn->connect_error){
        die("Connection Failed: " . $conn->connect_error);
    }

    function insert($data){
        global $conn;

        $nama = htmlspecialchars($data['nama_lengkap']);
        $berat = htmlspecialchars($data['berat_badan']);
        $tinggi = htmlspecialchars($data['tinggi_badan']);
        $jenis = htmlspecialchars($data['jenis']);
        $usia = htmlspecialchars ($data['usia']);

        $gambar = upload();

        if($gambar === false){
            return false;
        }

        $query = "INSERT INTO dt_baru VALUES ('', '$nama', '$berat', '$tinggi', '$jenis', '$usia', '$gambar')";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function query($query) {
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];

        while($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        return $rows;
    }

    function delete($id) {
        global $conn;

        mysqli_query($conn, "DELETE FROM dt_baru WHERE id = $id");
        
        return mysqli_affected_rows($conn);
    }

    function edit($data){
        global $conn;

        $id = $data['id'];
        $nama = htmlspecialchars($data['nama_lengkap']);
        $berat = htmlspecialchars($data['berat_badan']);
        $tinggi = htmlspecialchars($data['tinggi_badan']);
        $jenis = htmlspecialchars($data['jenis']);
        $usia = htmlspecialchars ($data['usia']);
        $gambar_lama = htmlspecialchars($data['gambarLama']);

        if($_FILES['gambar']['error'] === 4)
        {
            $gambar = $gambar_lama;
        }else {
            $gambar = upload();
        }

        $query = "UPDATE dt_baru SET 
                    nama_lengkap = '$nama',
                    berat_badan = '$berat',
                    tinggi_badan = '$tinggi',
                    jenis = '$jenis',
                    usia = '$usia',
                    gambar = '$gambar'
                    WHERE id = $id
                    ";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function upload(){

        $namaFile = $_FILES['gambar']['name'];
        $ukuranFile = $_FILES['gambar']['size'];
        $error = $_FILES['gambar']['error'];
        $tmpName = $_FILES['gambar']['tmp_name'];

        if($error === 4){
            echo "Gambar belum diupload..!";
            return false;
        }

        $ekstensiValidFile = ['jpg', 'jpeg','png'];
        $ekstensiFile = explode('.',$namaFile);
        $ekstensiFile = strtolower(end($ekstensiFile));

        if(!in_array($ekstensiFile, $ekstensiValidFile))
        {
            echo "<script>
                alert('File yang diupload bukan file GAMBAR..!');
            </script>";
            return false;
        }

        //kualifikasi ukuran file
        if($ukuranFile > 1000000)
        {
            echo "<script>
                alert('File yang diupload terlalu besar/(min 2mb)..!');
            </script>";
            return false;
        }

        //Menganti nama file gambar yang sama
        $namaFileBaru = uniqid();
        $namaFileBaru .= '.';
        $namaFileBaru .= $ekstensiFile;

        move_uploaded_file($tmpName,'img/' . $namaFileBaru);

        return $namaFileBaru;
    }

?>


