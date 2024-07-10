<?php
//koneksi

require 'funtion.php';
session_start();
//cek apakahh tombol submit sudah ditekan atau belum
if( isset($_POST['submit'])){
    //ambil data dari tiap elemen


    
    // query insert data
   
    //cek apakah data berhasil ditambahkan atau tidak
    if( tambah($_POST) > 0) {
        echo "
            <script>
                alert('DATA BERHASIL DITAMBAHKAN :)');
                document.location.href = 'pengertian.php';
            </script>
        ";
    }else{
        echo"
            <script>
                alert('data gagal ditambahkan');
                document.location.href = 'pengertian.php';
            </script>
        ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #5F9DF7;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #1746A2;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
        <h1>BUAT TAMBAH DATA</h1>

        <form action="" method="POST">
            
               
        
                <input type="hidden" name="hinata" id="id"><br>
                    <label for="kategori">Kategori :</label>
                    <input type="text" name="kategori_id" id="kategori_id" required><br>
                
                
                    <label for="isi">Isi :</label>
                    <input type="text" name="data_kategori" id="data_kategori"required><br>
                
                    
                    <label for="tanggal">Tanggal :</label>
                    <input type="text" name="tanggal_css" id="tanggal_css"required><br>
                
                
                    <input type="submit" name="submit" value="Submit">
                
            

        </form>
    
</body>
</html>