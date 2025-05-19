<?php
session_start();
include "../baglantiDB.php";

$kullanici = $_POST["kullanici"];
$sifre = $_POST["sifre"];

$stmt = $conn->prepare("INSERT INTO oturum (user, password) VALUES (?, ?)");
$stmt->bind_param("ss", $kullanici, $sifre);

if ($stmt->execute()) {
    echo "<script>
            alert('Yeni Kullanıcı Başarılı Bir Şekilde Eklendi...');
            window.location='../randevular.php';
          </script>";
    exit();
} else {
    echo "<script>
            alert('İşlem Başarısız !!!');
          </script>";
}

$stmt->close();
$conn->close();
?>
