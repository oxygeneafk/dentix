<?php
include "baglantiDB.php";

$tarih = $_POST["tarihilk"];

$deger = 0;
$sayac = 0;

$sorgu1 = "SELECT saat FROM saatler";
$saatler = $conn->query($sorgu1);

if ($saatler) {
    while ($saat = $saatler->fetch_assoc()) {
        $sorgu2 = $conn->prepare("SELECT saat FROM randevular WHERE tarih = ?");
        $sorgu2->bind_param("s", $tarih);
        $sorgu2->execute();
        $sonuc2 = $sorgu2->get_result();

        $saatDolu = false;
        while ($satir2 = $sonuc2->fetch_assoc()) {
            if ($saat["saat"] === $satir2["saat"]) {
                $saatDolu = true;
                $sayac++;
                if ($sayac == 9) {
                    echo "<option value='DOLU'>DOLU</option>";
                }
                break;
            }
        }

        if (!$saatDolu) {
            echo "<option value='".$saat['saat']."'>".$saat['saat']."</option>";
        }
    }
} else {
    echo "Bağlantıda Problem oluştu";
}

$conn->close();
?>
