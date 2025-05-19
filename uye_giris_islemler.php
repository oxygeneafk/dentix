<?php
session_start();
include "baglantiDB.php";

error_reporting(E_ALL);
ini_set('display_errors', 1);

$tc = mysqli_real_escape_string($conn, $_POST['tc']);
$sifre = mysqli_real_escape_string($conn, $_POST['sifre']);

$sorgu = mysqli_prepare($conn, "SELECT * FROM uyeler WHERE tc=? AND sifre=?");
mysqli_stmt_bind_param($sorgu, "ss", $tc, $sifre);
mysqli_stmt_execute($sorgu);
$result = mysqli_stmt_get_result($sorgu);

if (mysqli_num_rows($result) == 1) {
   
    $satir = mysqli_fetch_array($result);
    $_SESSION["tc"] = $satir["tc"];
    $_SESSION["ad"] = $satir["ad"];
    $_SESSION["soyad"] = $satir["soyad"];
    $_SESSION["tel"] = $satir["tel"];
    $_SESSION["adres"] = $satir["adres"];
    $_SESSION["yil"] = $satir["dogumtarih"];
    $_SESSION["eposta"] = $satir["eposta"];
    $_SESSION["sifre"] = $satir["sifre"];
    $_SESSION["id"] = $satir["id"];
    $_SESSION["oturumuye"] = true;
    
    echo "<script>window.location='index.php';</script>";
    exit();
} else {
   
    echo "<script>alert('Giriş Başarısız!!!'); window.location='uyegiris.php';</script>";
    exit();
}
?>
