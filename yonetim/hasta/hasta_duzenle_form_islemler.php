<?php
include "../baglantiDB.php";

$id = isset($_POST["id"]) ? $_POST["id"] : @$_GET["duzenle"];


if (empty($id)) {
    echo "<script>alert('Geçersiz işlem!'); window.location = 'index.php';</script>";
    exit;
}


$query = "SELECT * FROM hastalar WHERE id=?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {

    $row = $result->fetch_assoc();
    $tc = $row["tc"];
    $ad = $row["ad"];
    $soyad = $row["soyad"];
    $email = $row["email"];
    $adres = $row["adres"];
    $telefon = $row["telefon"];
    $k_tarih = $row["k_tarih"];
    $d_tarih = $row["d_tarih"];
    $d_yeri = $row["d_yeri"];
    $il = $row["il"];
} else {
    
    echo "<script>alert('Veritabanında böyle bir ID mevcut değil'); window.location = 'index.php';</script>";
    exit;
}


if (isset($_POST["kaydet"])) {
   
    $tcYeni = htmlspecialchars($_POST["tc"]);
    $adYeni = htmlspecialchars($_POST["ad"]);
    $soyadYeni = htmlspecialchars($_POST["soyad"]);
    $emailYeni = htmlspecialchars($_POST["email"]);
    $adresYeni = htmlspecialchars($_POST["adres"]);
    $telefonYeni = htmlspecialchars($_POST["telefon"]);
    $k_tarihYeni = htmlspecialchars($_POST["k_tarih"]);
    $d_tarihYeni = htmlspecialchars($_POST["d_tarih"]);
    $d_yeriYeni = htmlspecialchars($_POST["d_yeri"]);
    $ilYeni = htmlspecialchars($_POST["il"]);

    
    $queryUpdate = "UPDATE hastalar 
                    SET tc=?, ad=?, soyad=?, email=?, adres=?, telefon=?, k_tarih=?, d_tarih=?, d_yeri=?, il=?
                    WHERE id=?";
    $stmtUpdate = $conn->prepare($queryUpdate);
    $stmtUpdate->bind_param("ssssssssssi", $tcYeni, $adYeni, $soyadYeni, $emailYeni, $adresYeni, $telefonYeni, $k_tarihYeni, $d_tarihYeni, $d_yeriYeni, $ilYeni, $id);

    if ($stmtUpdate->execute()) {
        echo "<script>alert('Güncelleme Başarılı Bir Şekilde Tamamlandı...'); window.location = 'index.php';</script>";
        exit;
    } else {
        echo "<script>alert('Güncelleme sırasında bir hata oluştu');</script>";
    }
}



$stmt->close();
$conn->close();
?>