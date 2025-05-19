<?php
session_start();
include "../baglantiDB.php";

$id = $_SESSION["id"];

$stmt = $conn->prepare("DELETE FROM oturum WHERE id = ?");
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    echo "<script>
            alert('Başarılı Bir Şekilde Kullanıcı Silindi...'); 
            window.location='../cikis.php';
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
