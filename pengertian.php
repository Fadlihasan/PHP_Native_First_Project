<?php
require 'funtion.php';
$kategori = query("SELECT * FROM  kategori_css");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FHS WEB.</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <nav>
        <div class="wrapper">
            <div class="logo"><a href=''>KategoriCSS.</a></div>
            <div class="menu">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="pengertian.php">Kategori Css</a></li>
                    <li><a href="tutors.php">Tutors</a></li>
                    <li><a href="index.php #partners">Partners</a></li>
                    <li><a href="index.php #contact">Contact</a></li>
                    <li><a href="login.php" class="tbl-biru">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
     <!-- untuk courses -->
     <section id="courses">
            <div class="kolom">
                <p class="deskripsi">Ada apa saja di halaman ketegori ini?</p>
                <h2>Halaman Kategori</h2>
                <p>Disini saya akan memberi tutorial cara menggunakan css.Dari cara memberi Navigation Bar,cara memberi Warna,cara mengubah Font, dan Memberi Background pada web anda.</p>
                <p>Web ini memberi kemudahan untuk anda dalam mengakses web yang memberi tahu cara menggunakan css possimus blanditiis reiciendis. Qui, facilis! Delectus exercitationem dolores sapiente?</p>
            </div>
            <img src="https://img.freepik.com/free-vector/online-learning-isometric-concept_1284-17947.jpg?size=626&ext=jpg&ga=GA1.2.1769275626.1605867161"/>
        </section>
    <style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {background-color: #f2f2f2;}
th {
  background-color: #04AA6D;
  color: white;
}
    .button {
  background-color: #009789; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 15px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button {
  background-color: white; 
  color: black; 
  border: 2px solid #009789;
}
.button:hover {
  background-color: #009789;
  color: white;

}
.button {border-radius: 8px;}
.button {font-size: 14px;}
</style>
    <br><br>
    <table class="table">

    <tr>
        <th>No. </th>
        <th>ID Kategori</th>
        <th>Kategori</th>
        <th>Tanggal di Isi</th>
        <th>Edit</th>
    </tr>
    <?php $i = 1; ?>
    <?php foreach( $kategori as $row) :?>
        <tr>
        <td><?= $i; ?></td>
        <td><?= $row["kategori_id"]?></td>
        <td><?= $row["data_kategori"];?></td>
        <td><?= $row["tanggal_css"]?></td>
        <td>
             <a href="ubah.php?id=<?=  $row["id"];?>">UPDATE</a>/
             <a href="hapus_data.php?id=<?= $row["id"];?>"
             onclick="return confirm('APAKAN ANDA YAKIN UNTUK MENGHAPUS NYA?');">DELETE</a>
       </td>
        </tr>
    
    <?php $i++?>
    <?php endforeach;?>

<a href="tambah_data.php" class="button">TAMBAH DATA</a><br>
<br>
</table>
    <div id="copyright">
        <div class="wrapper">
            &copy; 2022. <b>FHS.</b> COPYRIGHT.
        </div>
    </div>
    

</body>
</html>