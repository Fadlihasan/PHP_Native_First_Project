<?php
session_start();
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
            <div class="logo"><a href=''>BelajarCss.</a></div>
            <div class="menu">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="pengertian.php">Kategori Css</a></li>
                    <li><a href="tutors.php">Tutors</a></li>
                    <li><a href="index.php #partners">Partners</a></li>
                    <li><a href="index.php #contact">Contact</a></li>
                    <li><a href="login.php"class="tbl-biru">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="wrapper">
        <!-- untuk home -->
        <section id="home">
            <img src="https://img.freepik.com/free-vector/computer-monitor-graphic-animator-creating-video-game-modeling-motion-processing-video-file-using-professional-editor-vector-illustration-graphic-design-art-designer-workplace-concept_74855-13038.jpg?size=626&ext=jpg&ga=GA1.2.1583290540.1665299486"/>
            <div class="kolom">
                <p class="deskripsi">Belajar CSS #bersama</p>
                <h2>Tetap Sehat, Tetap Semangat</h2>
                <p>Hii Selamat Datang Di Website Saya disini saya akan memberi tutorial css pada anda.</p>
                <p><a href="" class="tbl-pink">Pelajari Lebih Lanjut</a></p>
            </div>
        </section>

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

        <!-- untuk tutors -->
        <section id="tutors">
            <div class="tengah">
                <div class="kolom">
                    <p class="deskripsi">Our Top Reverensi</p>
                    <h2>Reverensi</h2>
                    <p>Jika kalian ingin belajar css lebih dalam bissa menggunakan :</p>
                </div>

                <div class="tutor-list">
                    <div class="kartu-tutor">
                        <img src="https://cdn.icon-icons.com/icons2/2699/PNG/512/youtube_logo_icon_168737.png"/>
                        <p>Youtube</p>
                    </div>
                    <div class="kartu-tutor">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/768px-Google_%22G%22_Logo.svg.png"/>
                        <p>Google</p>
                    </div>
                    <div class="kartu-tutor">
                        <img src="https://yt3.ggpht.com/dW6to0x5Crmeh7yi-YPLcQRqVrBtx2BSh8eoKTJbE8NbjloQ0sqlmdszIlxokJU_97-ndOt_=s900-c-k-c0x00ffffff-no-rj"/>
                        <p>W3school</p>
                    </div>
                    <div class="kartu-tutor">
                        <img src="https://ruko.s3.ap-southeast-1.amazonaws.com/rumahkomunitas.com/komunitas/lg_1584517982_logo%20jadi%203.png"/>
                        <p>Malas ngoding</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- untuk partners -->
        <section id="partners">
            <div class="tengah">
                <div class="kolom">
                    <p class="deskripsi">Partners Saya</p>
                    <h2>Partners</h2>
                    <p>Berikut ini merupakan beberapa partners yang membantu saya dalam merancang web buatan saya ini.</p>
                </div>

                <div class="partner-list">
                    <div class="kartu-partner">
                        <img src="https://cdn.icon-icons.com/icons2/2699/PNG/512/youtube_logo_icon_168737.png"/>
                    </div>
                    <div class="kartu-partner">
                        <img src="https://yt3.ggpht.com/dW6to0x5Crmeh7yi-YPLcQRqVrBtx2BSh8eoKTJbE8NbjloQ0sqlmdszIlxokJU_97-ndOt_=s900-c-k-c0x00ffffff-no-rj"/>
                    </div>
                    <div class="kartu-partner">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d1/Logosmkn4padalarang.jpg/300px-Logosmkn4padalarang.jpg"/>
                    </div>
                    <div class="kartu-partner">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/768px-Google_%22G%22_Logo.svg.png"/>
                    </div>
                    <div class="kartu-partner">
                        <img src="https://ruko.s3.ap-southeast-1.amazonaws.com/rumahkomunitas.com/komunitas/lg_1584517982_logo%20jadi%203.png"/>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div id="contact">
        <div class="wrapper">
            <div class="footer">
                <div class="footer-section">
                    <h3>FHS WEB.</h3>
                    <p>FHS</p>
                </div>
                <div class="footer-section">
                    <h3>About</h3>
                    <p>Web ini massih dalam pengerjaan</p>
                </div>
                <div class="footer-section">
                    <h3>Contact</h3>
                    <p>email:hasanfxa@gmail.com</p>
                    <p>no hp:08xxxxxxxx</p>
                </div>
                <div class="footer-section">
                    <h3>Sosial Media</h3>
                    <p><b>Instagram: </b>@fadlihasan.s</p>
                </div>
            </div>
        </div>
    </div>

    <div id="copyright">
        <div class="wrapper">
            &copy; 2022. <b>FHS.</b> COPYRIGHT.
        </div>
    </div>
    
</body>
</html>