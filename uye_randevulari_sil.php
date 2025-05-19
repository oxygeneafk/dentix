<?php
session_start();
include "baglantiDB.php";


if (isset($_SESSION["tc"]) && isset($_SESSION["sifre"])) {
    $tc = $_SESSION["tc"];

    
    $stmt = $conn->prepare("DELETE FROM randevular WHERE tc = ?");
    $stmt->bind_param("s", $tc);
    $stmt->execute();

  
    if ($stmt->affected_rows > 0) {
        echo "<script>alert('Silme İşlemi Tamamlandı'); window.location='index.php'; </script>";
    } else {
        echo "<script>alert('Silme İşlemi Başarısız'); window.location='randevu2.php'; </script>";
    }

    $stmt->close();
    $conn->close();
} else {
   
    echo "<script>alert('Oturum bilgileri eksik veya geçersiz'); window.location='randevu2.php'; </script>";
}
?>
