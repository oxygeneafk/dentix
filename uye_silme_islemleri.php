<?php
session_start();
include "baglantiDB.php";


if (isset($_SESSION["oturumuye"]) && $_SESSION["oturumuye"] == true) {
    $tc = $_POST["tc"];
    $sifre = $_POST["sifre"];

   
    $stmt = $conn->prepare("DELETE FROM uyeler WHERE tc=? AND sifre=?");
    $stmt->bind_param("ss", $tc, $sifre);
    $stmt->execute();
    
    
    if ($stmt->affected_rows > 0) {
        echo "<script>alert('Silme İşlemi Tamamlandı'); window.location='uye_cikis.php'; </script>";
    } else {
        echo "<script>alert('Silme İşlemi Başarısız'); window.location='uyesil.php'; </script>";
    }

    $stmt->close();
    $conn->close();
} else {
    
    
    echo "<script>alert('Üye Silme İçin Lütfen Giriş Yapınız'); window.location='uyegiris.php'; </script>";
}
?>
