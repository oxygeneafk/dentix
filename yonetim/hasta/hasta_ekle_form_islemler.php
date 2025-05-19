<?php
include "../baglantiDB.php";

$tc = htmlspecialchars($_POST["tc"]);
$ad = htmlspecialchars($_POST["ad"]);
$soyad = htmlspecialchars($_POST["soyad"]);
$email = htmlspecialchars($_POST["email"]);
$adres = htmlspecialchars($_POST["adres"]);
$telefon = htmlspecialchars($_POST["telefon"]);
$k_tarih = htmlspecialchars($_POST["k_tarih"]);
$d_yeri = htmlspecialchars($_POST["d_yeri"]);
$d_tarih = htmlspecialchars($_POST["d_tarih"]);
$il = htmlspecialchars($_POST["il"]);

if ($tc == "" || $ad == "" || $soyad == "" || $email == "" || $adres == "" || $telefon == "" || $k_tarih == "" || $d_yeri == "" || $d_tarih == "" || $il == "") {
    echo "<script>alert('Lütfen Boş alan bırakmayınız...'); window.location = 'hasta_ekle.php';</script>";
    exit;
}

$queryTcKontrol = "SELECT * FROM hastalar WHERE tc=?";
$stmtTcKontrol = $conn->prepare($queryTcKontrol);
$stmtTcKontrol->bind_param("s", $tc);
$stmtTcKontrol->execute();
$resultTcKontrol = $stmtTcKontrol->get_result();

if ($resultTcKontrol->num_rows > 0) {
    echo "<script>alert('Daha önceden bu TC No. adına kayıt mevcuttur...'); window.location = 'hasta_ekle.php';</script>";
    exit;
}

$bugun = date("Y");
$yenibugun = date("Y", strtotime($bugun));
$d_tarihYeni = date("Y", strtotime($d_tarih));
$k_tarihYeni = date("Y", strtotime($k_tarih));

if ($d_tarihYeni > $yenibugun || $k_tarihYeni > $yenibugun) {
    echo "<script>alert('Bu Doğum Tarihi veya Kayıt Tarihi Girilemez...'); window.location = 'hasta_ekle.php';</script>";
    exit;
}

$queryInsert = "INSERT INTO hastalar (tc, ad, soyad, email, adres, telefon, k_tarih, d_yeri, d_tarih, il) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
$stmtInsert = $conn->prepare($queryInsert);
$stmtInsert->bind_param("ssssssssss", $tc, $ad, $soyad, $email, $adres, $telefon, $k_tarih, $d_yeri, $d_tarih, $il);

if ($stmtInsert->execute()) {
    echo "<script>alert('Hasta Kaydı Başarılı Bir şekilde Kaydedildi...'); window.location = 'hasta_ekle.php';</script>";
} else {
    echo "<script>alert('Hasta Kaydı Yapılamadı - Sorguda Problem oluştu');</script>";
}

$stmtTcKontrol->close();
$stmtInsert->close();
$conn->close();
?>
