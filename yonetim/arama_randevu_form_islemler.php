<?php
include "baglantiDB.php";
$renklendirme = 0;

if (isset($_POST["genisArama"])) {
    $tc = $_POST["tc"];
    $tarih = $_POST["tarih"];
    $saat = $_POST["saat"];

    echo "<table border='0' width='1000'>
        <tr style='background-color:#252525; color:#FFF;'>
            <td><h2><b><center>İD</center></b></h2></td>
            <td><h2><b><center>TC</center></b></h2></td>
            <td><h2><b><center>İSİM</center></b></h2></td>
            <td><h2><b><center>SOYİSİM</center></b></h2></td>
            <td><h2><b><center>TELEFON</center></b></h2></td>
            <td><h2><b><center>R. TARİHİ</center></b></h2></td>
            <td><h2><b><center>SAAT</center></b></h2></td>
            <td><h2><b><center>E-POSTA</center></b></h2></td>
        </tr>";

    $stmt = $conn->prepare("SELECT * FROM randevular WHERE tarih=? AND tc=? AND saat=? ORDER BY id DESC");
    $stmt->bind_param("sss", $tarih, $tc, $saat);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result) {
        while ($satir = $result->fetch_assoc()) {
            $id = $satir["id"];
            include "tablo_renklendirme.php";
            echo "<tr bgcolor='$renk'>
                <td>".$satir["id"]."</td>
                <td>".$satir["tc"]."</td>
                <td>".$satir["ad"]."</td>
                <td>".$satir["soyad"]."</td>
                <td>".$satir["tel"]."</td>
                <td>".$satir["tarih"]."</td>
                <td>".$satir["saat"]."</td>
                <td>".$satir["eposta"]."</td>
                <td><a href='sil_randevu_form_islemler.php?deger=$id'>Sil</a></td>
            </tr>";
        }
    } else {
        echo "Sorguda problem oluştu";
    }
}

if (isset($_POST["ara"])) {
    $sec = $_POST["sec"];
    $arama = $_POST["arama"];

    echo "<table border='0' width='1000'>
        <tr style='background-color:#252525; color:#FFF;'>
            <td><h2><b><center>İD</center></b></h2></td>
            <td><h2><b><center>TC</center></b></h2></td>
            <td><h2><b><center>İSİM</center></b></h2></td>
            <td><h2><b><center>SOYİSİM</center></b></h2></td>
            <td><h2><b><center>TELEFON</center></b></h2></td>
            <td><h2><b><center>R. TARİHİ</center></b></h2></td>
            <td><h2><b><center>SAAT</center></b></h2></td>
            <td><h2><b><center>E-POSTA</center></b></h2></td>
        </tr>";

    switch ($sec) {
        case "tumu":
            $stmt = $conn->prepare("SELECT * FROM randevular ORDER BY id DESC");
            break;
        case "id":
            $stmt = $conn->prepare("SELECT * FROM randevular WHERE id=?");
            $stmt->bind_param("s", $arama);
            break;
        case "tc":
            $stmt = $conn->prepare("SELECT * FROM randevular WHERE tc=? ORDER BY id DESC");
            $stmt->bind_param("s", $arama);
            break;
        case "isim":
            $stmt = $conn->prepare("SELECT * FROM randevular WHERE ad=? ORDER BY id DESC");
            $stmt->bind_param("s", $arama);
            break;
        case "soyisim":
            $stmt = $conn->prepare("SELECT * FROM randevular WHERE soyad=? ORDER BY id DESC");
            $stmt->bind_param("s", $arama);
            break;
        case "tarih":
            $stmt = $conn->prepare("SELECT * FROM randevular WHERE tarih=? ORDER BY id DESC");
            $stmt->bind_param("s", $arama);
            break;
        case "saat":
            $stmt = $conn->prepare("SELECT * FROM randevular WHERE saat=? ORDER BY id DESC");
            $stmt->bind_param("s", $arama);
            break;
        default:
            echo "Yanlış sorgu";
            exit;
    }

    $stmt->execute();
    $result = $stmt->get_result();

    if ($result) {
        while ($satir = $result->fetch_assoc()) {
            $id = $satir["id"];
            include "tablo_renklendirme.php";
            echo "<tr bgcolor='$renk'>
                <td>".$satir["id"]."</td>
                <td>".$satir["tc"]."</td>
                <td>".$satir["ad"]."</td>
                <td>".$satir["soyad"]."</td>
                <td>".$satir["tel"]."</td>
                <td>".$satir["tarih"]."</td>
                <td>".$satir["saat"]."</td>
                <td>".$satir["eposta"]."</td>
                <td><a href='sil_randevu_form_islemler.php?deger=$id'>Sil</a></td>
            </tr>";
        }
    } else {
        echo "Sorguda problem oluştu";
    }
}

echo "</table>";
?>
