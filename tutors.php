<?php
require 'funtion.php';
session_start();
$list = query("SELECT * FROM list_css");
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
            <div class="logo"><a href=''>TutorsCSS.</a></div>
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
                <p class="deskripsi">Saya akan jelaskan pada anda apa itu css</p>
                <h2>Online Courses</h2>
                <p>Disini saya akan memberi tutorial cara menggunakan css.Dari cara memberi Navigation Bar,cara memberi Warna,cara mengubah Font, dan Memberi Background pada web anda.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed deserunt voluptatibus possimus blanditiis reiciendis. Qui, facilis! Delectus exercitationem dolores sapiente?</p>
                <p><a href="" class="tbl-biru">Pelajari Lebih Lanjut</a></p>
            </div>
            <img src="https://img.freepik.com/free-vector/online-learning-isometric-concept_1284-17947.jpg?size=626&ext=jpg&ga=GA1.2.1769275626.1605867161"/>
        </section>
    <br>
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
<a href="tambah_data2.php" class="button">TAMBAH DATA</a>
<table class="table">

    <tr>
        <th>No. </th>
        <th>ID</th>
        <th>List</th>
        <th>Link</th>
        <th>Edit</th>
    </tr>
    <?php $i = 1; ?>
    <?php foreach( $list as $row) :?>
        <tr>
        <td><?= $i; ?></td>
        <td><?= $row["kategori_id"];?></td>
        <td><?= $row["e"];?></td>
        <td><?= $row["link_css"];?></td>

        <td>
             <a href="ubah2.php?id=<?=  $row["id"];?>">EDIT</a>/
             <a href="hapus_data2.php?id=<?= $row["id"];?>"
             onclick="return confirm('apakah yakin untuk menghapus data ini?');">HAPUS</a>
       </td>
        </tr>
    
    <?php $i++?>
    <?php endforeach;?>


</table>
<div id="copyright">
        <div class="wrapper">
            &copy; 2022. <b>FHS.</b> COPYRIGHT.
        </div>
    </div>

</body>
</html>