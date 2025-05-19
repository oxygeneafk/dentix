<?php
session_start();
include "../baglantiDB.php";

$id = $_SESSION["id"];
$kullanici = $_POST["kullanici"];
$sifre = $_POST["sifre"];

$kullanici = $conn->real_escape_string($kullanici);
$sifre = $conn->real_escape_string($sifre);

$sorgu = $conn->query("UPDATE oturum SET user='$kullanici', password='$sifre' WHERE id='$id'");

if ($sorgu) {
    echo "<script>  
            alert('Kullanıcı Update Başarılı Bir Şekilde Gerçekleştirildi...'); 
            window.location='../cikis.php'; 
          </script>";
    exit();
} else {
    echo "<script>  
            alert('İşlem Başarısız !!!'); 
          </script>";
}
?>
