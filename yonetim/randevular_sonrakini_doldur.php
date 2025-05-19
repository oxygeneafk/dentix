<?php

include 'baglantiDB.php';


$tarih = isset($_POST["tarih"]) ? $_POST["tarih"] : date("Y-m-d"); 

$renklendirme = 0;

echo "<table border='1' width='1000'>
    <tr style='background-color:#252525; color:#FFF;'>
       <th><center>İD</center></th>
       <th><center>TC</center></th>
       <th><center>İSİM</center></th>
       <th><center>SOYİSİM</center></th>
       <th><center>TELEFON</center></th>
       <th><center>R. TARİHİ</center></th>
       <th><center>SAAT</center></th>
       <th><center>E-POSTA</center></th>
       <th><center>Sil</center></th>
    </tr>";


$sorgu = "SELECT * FROM randevular WHERE tarih >= '$tarih' ORDER BY tarih ASC";

if ($sonuc = mysqli_query($baglanti, $sorgu)) {
    while ($satir = mysqli_fetch_assoc($sonuc)) {
        $id = $satir["id"];
        include "tablo_renklendirme.php"; 
        

        echo "<tr bgcolor='$renk'>
                <td>" . htmlspecialchars($satir["id"]) . "</td>
                <td>" . htmlspecialchars($satir["tc"]) . "</td>
                <td>" . htmlspecialchars($satir["ad"]) . "</td>
                <td>" . htmlspecialchars($satir["soyad"]) . "</td>
                <td>" . htmlspecialchars($satir["tel"]) . "</td>
                <td>" . htmlspecialchars($satir["tarih"]) . "</td>
                <td>" . htmlspecialchars($satir["saat"]) . "</td>
                <td>" . htmlspecialchars($satir["eposta"]) . "</td>
                <td><a href='sil_randevu_form_islemler.php?deger=" . urlencode($id) . "'>Sil</a></td>
              </tr>";
    }
    mysqli_free_result($sonuc);
} else {
    echo "Sorguda hata: " . mysqli_error($baglanti);
}

echo "</table>";

mysqli_close($baglanti);

?>
