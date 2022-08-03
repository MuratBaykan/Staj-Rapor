<?php include "navbar_sol.php"; ?>

<div class="content-wrapper">
  <h3 class="page-heading mb-4">Personel</h3>
  <div class="row mb-2">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title mb-4">Personel Ekle</h5>

                <div class="table-responsive">

                  <form class="forms-sample" action="" method="POST">

                  <div class="form-group">
                      <label for="etkinlikbasligi">Ad Soyad</label>
                      <input type="text" class="form-control p-input" name="adsoyad" id="etkinlikbasligi" aria-describedby="emailHelp" placeholder="adsoyad giriniz">
                    </div>

                    <div class="form-group">
                      <label for="etkinlikbasligi">Tc Kimlik No</label>
                      <input type="text" class="form-control p-input" name="tc" id="etkinlikbasligi"  placeholder="Tc Kimlik Giriniz">
                    </div>

                    <div class="form-group">
                      <label for="etkinlikfile">İl</label>
                      <input type="text" class="form-control p-input" name="il" id="etkinlikfile"  placeholder="il giriniz">
                    </div>

                    <div class="form-group">
                      <label for="etkinlikbasligi">İlçe</label>
                      <input type="text" class="form-control p-input" name="ilce" id="etkinlikbasligi" placeholder="İlce giriniz">
                    </div>
        

                    <div class="form-group">
                      <button type="submit" class="btn btn-primary">Ekle</button>
                    </div>

                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<?php include "footer.php"; ?>

<?php

session_start();
include "../baglanti.php";

$personel_isim_ekle = $_POST["adsoyad"]; //post içinde input name göre yazılacak
$personel_tc_ekle = $_POST["tc"];
$personel_il_ekle = $_POST["il"];
$personel_ilce_ekle = $_POST["ilce"];



if (!isset($personel_isim_ekle)) {

  echo "<script>alert('boş alanları doldurun')</script>";
} else  {

      $ekle = "INSERT INTO kullanicilar (adsoyad,tc,il,ilce) VALUES ('$personel_isim_ekle','$personel_tc_ekle','$personel_il_ekle','$personel_ilce_ekle')";
      // $ekle = "INSERT INTO `personeller`(`ad`) VALUES ('".$personel_isim_ekle."')";

      $sonuc = mysqli_query($baglan, $ekle);
 


  if ($sonuc) {
    echo "<script>alert('personel eklendi')</script>";
  } else {
    
    echo "<script>alert('veri tabanına eklenirken hata oluştu')</script>";
  }
}


?>