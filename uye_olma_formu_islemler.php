<?php
session_start();
include "baglantiDB.php";


error_reporting(E_ALL);
ini_set('display_errors', 1);


if (!isset($_SESSION["oturumuye"]) || $_SESSION["oturumuye"] !== true) {
    
    $tc = mysqli_real_escape_string($conn, $_POST["tc"]);
    $ad = mysqli_real_escape_string($conn, $_POST["ad"]);
    $soyad = mysqli_real_escape_string($conn, $_POST["soyad"]);
    $tel = mysqli_real_escape_string($conn, $_POST["tel"]);
    $adres = mysqli_real_escape_string($conn, $_POST["adres"]);
    $dogumyili = mysqli_real_escape_string($conn, $_POST["dogumyili"]);
    $eposta = mysqli_real_escape_string($conn, $_POST["eposta"]);
    $sifre = mysqli_real_escape_string($conn, $_POST["sifre"]);

   
    if (empty($tc) || empty($ad) || empty($soyad) || empty($tel) || empty($adres) || empty($dogumyili) || empty($eposta) || empty($sifre)) {
        echo "<script>alert('Alanlar boş geçilemez...'); window.location='uyeol.php'; </script>";
        exit;
    }

    $sorguKontrol = mysqli_prepare($conn, "SELECT * FROM uyeler WHERE tc=?");
    mysqli_stmt_bind_param($sorguKontrol, "s", $tc);
    mysqli_stmt_execute($sorguKontrol);
    $resultKontrol = mysqli_stmt_get_result($sorguKontrol);

    if ($resultKontrol === false) {
        die("MySQL sorgu hatası: " . mysqli_error($conn));
    }

    if (mysqli_num_rows($resultKontrol) >= 1) {
        echo "<script>alert('Üyelik daha önceden yapılmış, tekrar üye olunamaz...'); window.location='index.php'; </script>";
        exit;
    }

    $sorgu = mysqli_prepare($conn, "INSERT INTO uyeler (tc, ad, soyad, tel, adres, dogumtarih, eposta, sifre) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    mysqli_stmt_bind_param($sorgu, "ssssssss", $tc, $ad, $soyad, $tel, $adres, $dogumyili, $eposta, $sifre);

    if (mysqli_stmt_execute($sorgu)) {
        echo "<script>alert('Üye Olma İşlemi Başarılı...'); window.location='uyegiris.php'; </script>";
    } else {
        echo "<script>alert('Üye Olma İşlemi Başarısız!!!'); window.location='uyeol.php'; </script>";
    }
} else {
    echo "<script>alert('Üyelik için çıkış yapmalısınız!!!'); window.location='uyegiris.php'; </script>";
}
?>
