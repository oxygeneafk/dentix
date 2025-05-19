<?php
include "baglantiDB.php";

$id = $_POST["id"];
$tc = $_POST["tc"];
$ad = $_POST["ad"];
$soyad = $_POST["soyad"];
$tel = $_POST["tel"];
$tarih = $_POST["tarih"];
$saat = $_POST["saat"];
$eposta = $_POST["eposta"];

$simditarih = date("Y-m-d");
$simdisaat = date("H:i:s");

if ($simditarih > $tarih) {
    echo "<script>
            alert('Bu tarihte randevu alınamaz!!!.');
            window.location = 'randevular.php';
          </script>";
} elseif ($simditarih == $tarih && $simdisaat >= $saat) {
    echo "<script>
            alert('Bu tarihte randevu alınamaz!!!');
            window.location = 'randevular.php';
          </script>";
} elseif ($saat == 'DOLU') {
    echo "<script>
            alert('Bu tarihte boş randevu yok!!!');
            window.location = 'randevular.php';
          </script>";
} elseif (empty($tc) || empty($ad) || empty($soyad) || empty($tel) || empty($tarih) || empty($saat) || empty($eposta)) {
    echo "<script>
            alert('Alanlar boş geçilemez !!!');
            window.location = 'randevular.php';
          </script>";
} else {
    $deger = 0;

    $stmt = $conn->prepare("SELECT tarih, saat FROM randevular WHERE tarih = ? AND saat = ?");
    $stmt->bind_param("ss", $tarih, $saat);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        echo "<script>
                alert('Bu randevu alınamaz!!!');
              </script>";
        $deger = 1;
    }

    $stmt->close();

    if ($deger == 0) {
        $stmt = $conn->prepare("UPDATE randevular SET tc = ?, ad = ?, soyad = ?, tel = ?, tarih = ?, saat = ?, eposta = ? WHERE id = ?");
        $stmt->bind_param("sssssssi", $tc, $ad, $soyad, $tel, $tarih, $saat, $eposta, $id);

        if ($stmt->execute()) {
            echo "<script>
                    window.location = 'randevular.php';
                  </script>";
        } else {
            echo "<script>
                    alert('Eklenemedi !!!');
                    window.location = 'duzenlerandevu.php';
                  </script>";
        }

        $stmt->close();
    }
}

$conn->close();
?>
