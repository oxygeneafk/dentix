<?php 
include "baglantiDB.php";

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
    echo "
    <script>
    alert('Bu Tarih Geçersiz !!!');
    window.location = 'randevu2.php';
    </script>
    ";
} elseif ($simditarih == $tarih && $simdisaat >= $saat) {
    echo "
    <script>
    alert('Bu Saat Geçersiz !!!');
    window.location = 'randevu2.php';
    </script>
    ";
} elseif ($saat == 'DOLU') {
    echo "
    <script>
    alert('Secilen Tarihte Boş Randevu Yok!!!');
    window.location = 'randevu2.php';
    </script>
    ";
} elseif (empty($tc) || empty($ad) || empty($soyad) || empty($tel) || empty($tarih) || empty($saat) || empty($eposta)) {
    echo "
    <script>
    alert('Boş Alan Girilemez !!!');
    window.location = 'randevu2.php';
    </script>
    ";
} else {
    $deger = 0;

    $sql1 = "SELECT tarih, saat FROM randevular";
    $sonuc = $conn->query($sql1);

    if ($sonuc) {
        while ($satir = $sonuc->fetch_assoc()) {
            if ($satir["tarih"] === $tarih && $satir["saat"] === $saat) {
                $deger = 1;
                break;
            }
        }

        if ($deger == 0) {
            $sql2 = $conn->prepare("INSERT INTO randevular (tc, ad, soyad, tel, tarih, saat, eposta) VALUES (?, ?, ?, ?, ?, ?, ?)");
            $sql2->bind_param("sssssss", $tc, $ad, $soyad, $tel, $tarih, $saat, $eposta);

            if ($sql2->execute()) {
                echo "
                <script>
                alert('Randevu Başarılı Bir Şekilde Alındı...');
                window.location = 'randevu.php';
                </script>
                ";
            } else {
                echo "
                <script>
                alert('Randevu Alınamadı !!!');
                window.location = 'randevu2.php';
                </script>
                ";
            }
            $sql2->close();
        } else {
            echo "
            <script>
            alert('Bu Randevu Zaten Alınmış!!!');
            window.location = 'randevu2.php';
            </script>
            ";
        }
    } else {
        echo "
        <script>
        alert('Baglantıda Problem Oluştu !!!');
        window.location = 'randevu2.php';
        </script>
        ";
    }
}

$conn->close();
?>
