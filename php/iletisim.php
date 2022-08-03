<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="./css/styles.css" rel="stylesheet" />

    
    <script src="https://kit.fontawesome.com/c20485228a.js" crossorigin="anonymous"></script>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" rel="stylesheet">

    <title>Rota Gebze</title>
        <link rel="stylesheet" href="owl/owl.carousel.min.css">
        <link rel="stylesheet" href="owl/owl.theme.default.min.css">
</head>
<body style="background-color:black;">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="index.html">Gebze Rehberi</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menü
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.html#cami">Tarihi Camiler</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.html#cesme">Çeşmeler</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.html#kale">Kaleler Ve Kuleler</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.html#hamam">Han Ve Hamamlar</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.html#doga">Doğa Turizmi</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.html#yemek">Yöresel Yemekler</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.html#sehitlik">Gebze Şehitliği</a></li>
                    <li class="nav-item"><a class="nav-link" href="iletisim.php">İletişim</a></li>
                    <li class="nav-item"><a class="nav-link" href="panelgiris.php">Yönetici Girişi</a></li>
                </ul>
            </div>
        </div>
    </nav>
<br><br><br>

        <section id="iletisim">
            <div class="container">
                <h3 id="h3iletisim">İletişim Ve Öneri</h3>
                <form action="iletisim.php" method="post">
                <div id="iletisimopak">
                    <div id="formgroup">
                        <div id="solform">
                            <input type="text" name="isim" placeholder="Ad Soyad" required class="form-control">
                            <input type="text" name="tel" placeholder="Telefon Numarası" required class="form-control">
                        </div>
                        <div id="sagform">
                            <input type="email" name="mail" placeholder="Email Adresiniz" required class="form-control">
                            <input type="text" name="konu" placeholder="Konu Başlığı" required class="form-control">
                        </div>

                        <textarea name="mesaj" id="" placeholder="Mesaj Giriniz" cols="30" rows="10" required class="form-control"></textarea>
                        <input type="submit" value="Gönder">
                    </div>

                    

                   
                </div>
                </form>
<?php require "static/footer.php";?>
             

            </div>
        </section>
        <script src="main.js" charset="utf-8"></script>
        </body>
        </html>

        <?php
        include("baglanti.php");

        if(isset($_POST["isim"], $_POST["tel"], $_POST["mail"], $_POST["konu"], $_POST["mesaj"]))
        {
            $adsoyad=$_POST["isim"];
            $telefon=$_POST["tel"];
            $email=$_POST["mail"];
            $konu=$_POST["konu"];
            $mesaj=$_POST["mesaj"];

            $ekle="INSERT INTO iletisim (adsoyad, email, telefon, konu, mesaj) VALUES ('".$adsoyad."','".$email."','".$telefon."','".$konu."','".$mesaj."')";

            if($baglan->query($ekle)===TRUE)
            {
                echo "<script>alert('Mesajınız Başarıyla İletilmiştir.')</script>";
            }

            else
            {
                echo "<script>alert('Mesajınız Gönderilirken Bir Hata Oluştu !')</script>";
            }
        }
        ?> 

        