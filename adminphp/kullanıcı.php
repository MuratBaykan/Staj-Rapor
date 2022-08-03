<?php include "navbar_sol.php"; ?>



<div class="content-wrapper">
  <h3 class="page-heading mb-4">Kullanıcılar</h3>
  <div class="row mb-2">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title mb-4">Kayıtlı Kullanıcılar</h5>
                <div class="table-responsive">
                  <table class="table center-aligned-table">
                    <thead>
                      <tr class="text-primary">
                      <th>id</th>  
                      <th>Adsoyad</th>
                        <th>Tc kimlik</th>
                        <th>İl</th>
                        <th>İlçe</th>
                        
                        
                      </tr>
                    </thead>
                    <tbody>
                      <?php

                      include "../baglanti.php";
                      $sec = "SELECT * FROM kullanicilar order by kullanici_id desc ";
                      $sorgu = mysqli_query($baglan, $sec);
                      while ($sonuc = mysqli_fetch_row($sorgu)) {
                        echo "

                   <tr>
                      <td>" . $sonuc[0] . "</td>
                      <td>" . $sonuc[1] . "</td>
                      <td>" . $sonuc[2] . "</td> 
                      <td>" . $sonuc[3] . "</td>  
                      <td>" . $sonuc[4] . "</td> 
                   </tr>

                 ";
                      }
                      ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>