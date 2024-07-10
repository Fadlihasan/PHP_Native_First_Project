<?php
require 'funtion.php';

$id = $_GET["id"];

if( hapus($id) > 0){
     echo  "<script>
                alert('DATA BERHASIL DI HAPUS *_*');
                document.location.href = 'pengertian.php';
            </script>
        ";
}else{
    echo  "<script>
                alert('data gagal dihapus');
                document.location.href = 'pengertian.php';
            </script>
        ";
}