<?php

require 'funtion.php';
session_start();


$id = $_GET['id'];

$sql = query("SELECT * FROM list_css WHERE id=$id")[0];

if( isset($_POST['submit'])){
  
    //cek apakah data berhasil di ubah atau tidak
      if(ubah2($_POST) > 0) {
          echo "
              <script>
                  alert('data berhasil di ubah');
                  document.location.href = 'tutors.php';
              </script>
          ";
      }else{
          echo"
              <script>
                  alert('data gagal di ubah');
                  document.location.href = 'tutors.php';
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
      <title>Ubah Data Tabel List</title>
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
  <form action="" method="POST">
              
                 
          
              <input type="hidden" name="id" id="id" value="<?= $sql["id"];?>">
              <br>
                  <label for="kategori">Kategori :</label>
                  <input type="text" name="kategori_id" id="kategori_id" required 
                  value="<?=$sql["kategori_id"];?>"><br>

                  <label for="A">Isi : </label>
                  <input type="text" name="list_css" id="A" required value="<?=$sql["list_css"];?>"><br>

                  <label for="A">Link Baru : </label>
                  <input type="text" name="link_css" id="A" required value="<?=$sql["link_css"];?>"><br>
              
                  <input type="submit" name="submit" value="Submit">
              
          
  
      </form>
  </body>
  </html>