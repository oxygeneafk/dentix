<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("baglantiDB.php");
session_start();

if (isset($_SESSION['oturumuye']) && $_SESSION['oturumuye'] === true) {
    $uyeId = $_SESSION["id"];
    $tc = $_POST["tc"];
    $ad = $_POST["ad"];
    $soyad = $_POST["soyad"];
    $tel = $_POST["tel"];
    $adres = $_POST["adres"];
    $dogumyili = $_POST["dogumyili"];
    $eposta = $_POST["eposta"];
    $sifre = $_POST["sifre"];

    
    $stmt = $conn->prepare("UPDATE uyeler SET tc=?, ad=?, soyad=?, tel=?, adres=?, dogumtarih=?, eposta=?, sifre=? WHERE id=?");
    $stmt->bind_param("ssssssssi", $tc, $ad, $soyad, $tel, $adres, $dogumyili, $eposta, $sifre, $uyeId);

    if ($stmt->execute()) {
        echo "<script>
                alert('İşlem Başarılı Bir Şekilde Gerçekleşti...');
                window.location='uye_cikis.php';
              </script>";
        exit();
    } else {
        echo "<script>
                alert('Sorguda Hata oluştu !!!');
                window.location='uyegiris.php';
              </script>";
        exit();
    }



}
?>
