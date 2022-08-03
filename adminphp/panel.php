
<?php include "navbar_sol.php"; ?>

<!--
<div class="content-wrapper">

<div class="card-deck">
    <div class="card col-lg-12 px-0 mb-4">
      <div class="card-body">
        <h5 class="card-title">Etkinlikler</h5>
        <div class="table-responsive">
          <table class="table center-aligned-table">
            <thead>
              <tr class="text-primary">
                <th>Etkinlik id</th>
                <th>Kategori</th>
                <th>başlık</th>
                <th>açıklama</th>
                <th>Sorumlu Personel ad </th>
                <th>tarih/ yyy-aa-gg-saat</th>
              </tr>
            </thead>
            <tbody>
              <?php

              include "../login/baglanti.php";
              $sec = "SELECT * from etkinlikler LEFT JOIN kategoriler ON kategoriler.id=etkinlikler.kategori_id INNER JOIN personeller ON personeller.id=etkinlikler.gorevli_personel_id ORDER BY etkinlikler.id DESC";
              $sorgu = mysqli_query($conn, $sec);
              while ($sonuc = mysqli_fetch_row($sorgu)) {
                echo "
        
                                 <tr>
                                    <td>" . $sonuc[0] . "</td>
                                    <td>" . $sonuc[8] . "</td>
                                    <td>" . $sonuc[3] . "</td> 
                                    <td>" . $sonuc[4] . "</td>  
                                    <td>" . $sonuc[10] . "  " . $sonuc[11] . "</td>
                                    <td>" . $sonuc[1] . "</td>  
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

 -->


<?php include "footer.php"; ?>