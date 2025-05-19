<h1>Bize Ulaşın</h1>
<h2>İletişim</h2>
<p>&nbsp;</p>
<div class="iletisimbilgi">
<?php 
include "baglantiDB.php"; 

$sorgu = mysqli_query($conn, "SELECT * FROM iletisim");

if ($sorgu) {
    while ($satir = mysqli_fetch_array($sorgu)) {
        echo $satir["icerik"];
    }
} else {
    echo "Sorguda hata oluştu: " . mysqli_error($conn);
}


mysqli_close($conn);
?>
</div>
