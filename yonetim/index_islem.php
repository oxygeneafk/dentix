<?php
include('baglantiDB.php'); 
session_start(); 

$kullanici = $_POST['kullanici'];
$sifre = $_POST['parola'];


if (isset($_SESSION['oturum']) && $_SESSION['oturum'] === true) {
    header("Location: randevular.php");
    exit();
} else {
    
    $stmt = $conn->prepare("SELECT * FROM oturum WHERE user = ? AND password = ?");
    $stmt->bind_param("ss", $kullanici, $sifre);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        while ($satir = $result->fetch_assoc()) {
            $_SESSION["id"] = $satir["id"];
            $_SESSION["kullanici"] = $satir["user"];
            $_SESSION["sifre"] = $satir["password"];
            $_SESSION["oturum"] = true;

            echo "<script> window.location='randevular.php'; </script>";
            exit();
        }
    } else {
        echo "<script> 
                alert('Giriş Başarısız !!!'); 
                window.location='index.php'; 
              </script>";
        exit();
    }

    $stmt->close();
}

$conn->close();
?>
