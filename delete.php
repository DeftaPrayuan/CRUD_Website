<?php
    require 'db_management.php';


    $id = $_GET["id"];

    if(delete($id) > 0){
        echo "
                <script>
                    alert('data berhasil dihapus..!');
                    document.location.href = 'mypet.php'
                </script>
            ";
    } else {
        echo "
                <script>
                    alert('data berhasil dihapus..!');
                    document.location.href = 'mypet.php'
                </script>
            ";
    }
?>