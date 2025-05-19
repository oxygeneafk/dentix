<?php
include "baglantiDB.php";

$sec = isset($_POST["sec"]) ? $_POST["sec"] : "";
$silme = isset($_POST["silme"]) ? $_POST["silme"] : "";


if ($sec == "" && $silme == "") {
    $sec = "id";
    $silme = isset($_GET["deger"]) ? $_GET["deger"] : "";
}


if ($sec == "sec*") {
    echo "<script>alert('Lütfen silme işlemi için kriter belirleyiniz');</script>";
    echo "<script>window.location = 'randevular.php';</script>";
    exit();
}

$sorgu = "SELECT * FROM randevular WHERE $sec = ?";


$stmt = $conn->prepare($sorgu);

if ($stmt === false) {
    die("MySQL sorgusu hazırlanırken hata oluştu: " . $conn->error);
}

$stmt->bind_param("s", $silme);


$sonuc = $stmt->execute();


if ($sonuc) {
   
    $sorguSonuc = $stmt->get_result();
    
    
    if ($sorguSonuc->num_rows > 0) {
        $satir = $sorguSonuc->fetch_assoc();
        $id = $satir["id"];
        
        
        $sorguSilme = "DELETE FROM randevular WHERE $sec = ?";
        
       
        $stmtSilme = $conn->prepare($sorguSilme);
        
        if ($stmtSilme === false) {
            die("Silme sorgusu hazırlanırken hata oluştu: " . $conn->error);
        }
        
        $stmtSilme->bind_param("s", $silme);
        
        
        $silmeSonuc = $stmtSilme->execute();
        
        
        if ($silmeSonuc) {
            echo "<script>alert('Randevu Silindi');</script>";
            echo "<script>window.location = 'randevular.php';</script>";
            exit();
        } else {
            echo "<script>alert('Silme işlemi başarısız oldu');</script>";
            echo "<script>window.location = 'randevular.php';</script>";
            exit();
        }
    } else {
        echo "<script>alert('Randevu bulunamadı');</script>";
        echo "<script>window.location = 'randevular.php';</script>";
        exit();
    }
} else {
    echo "<script>alert('Veritabanı hatası');</script>";
    echo "<script>window.location = 'randevular.php';</script>";
    exit();
}









$stmt->close();
$conn->close();
?>
