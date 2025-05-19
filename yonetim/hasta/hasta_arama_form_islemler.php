<?php
include "../baglantiDB.php";
session_start();

if (!isset($_SESSION['oturum']) || $_SESSION['oturum'] !== true) {
    header("Location: ../index.php");
    exit();
}

$sec = $_POST["sec"] ?? "";
$arama = $_POST["arama"] ?? "";

echo "<!DOCTYPE html>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<title>Hasta Arama</title>
<link href='../girisSekil.css' rel='stylesheet' type='text/css' />
<link href='../formsekil.css' rel='stylesheet' type='text/css' />
<style>
    .headerusttablo, .headerortatablo, .headeralttablo {
        width: 1000px;
        border: 1px solid #EAEAFF;
        margin: 0 auto;
    }
    .headerortatablo td {
        height: 50px;
    }
    .link {
        text-decoration: none;
        color: #000;
    }
    .link img {
        vertical-align: middle;
    }
    .link:hover {
        color: #555;
    }
</style>
</head>
<body>
<div id='kapsul'>
    <div id='header'>
        <table class='headerusttablo' bordercolor='#EAEAFF' border='1'>
            <tr>
                <td height='50'><img src='../../ikonlar/logo.png' width='300' height='50' /></td>
            </tr>
        </table>
        <table class='headerortatablo' bordercolor='#CFC' border='1'>
            <tr>
                <td width='70' height='50'>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a class='link' href='../randevular.php'>
                        <img src='../../ikonlar/randevuler.png' alt='Randevular' width='30' height='30' title='Randevular'/>Randevular
                    </a>
                </td>
                <td width='70'>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a class='link' href='../eklerandevu.php'>
                            <img src='../../ikonlar/randevuekle.png' alt='Randevu ekle' width='30' height='30' title='Randevu Ekle' /> Randevu&nbsp;E.
                        </a>
                    </p>
                </td>
                <td width='70'>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a class='link' href='../silrandevu.php'>
                        <img src='../../ikonlar/sil.png' alt='Randevu Silme' width='35' height='30' title='Randevu Silme'/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sil
                    </a>
                </td>
                <td width='70'>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a class='link' href='../duzenlerandevu1.php'>
                        <img src='../../ikonlar/duzenler.png' alt='Randevu Düzenle' width='35' height='35'  title='Randevu Düzenle'/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Düzenle
                    </a>
                </td>
                <td width='70'>
                    &nbsp;&nbsp;<a class='link' href='../aramarandevu.php'>
                        <img src='../../ikonlar/ara.png' alt='Randevu Arama' width='40' height='40' title='Randevu Arama' />&nbsp;&nbsp;&nbsp;Arama
                    </a>
                </td>
                <td width='70'>
                    &nbsp;&nbsp;&nbsp;&nbsp;<a class='link' href='../icerikleri_degistirme/index.php'>&nbsp;&nbsp;
                        <img src='../../ikonlar/hesap.png' alt='' width='35' height='35' />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;İçerikler
                    </a>
                </td>
                <td width='70'>
                    &nbsp;<a class='link' href='../hasta/index.php'>&nbsp;&nbsp;&nbsp;
                        <img src='../../ikonlar/iletisim.png' alt='İletişim' width='30' height='30' title='İletişim' />&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;Hastalar
                    </a>
                </td>
                <td width='70'>
                    <a class='link' href='../hesapcari/hesapCari.php'>&nbsp;&nbsp;&nbsp;&nbsp;
                        <img src='../../ikonlar/cari.png' width='30' height='30' /><br/>Cari Hesap
                    </a>
                </td>
                <td width='78'></td>
                <td width='70'>
                    <center>
                        <a href='ayarlar.php'>
                            <img src='../../ikonlar/ayar.png' width='40' height='40' />
                        </a>
                    </center>
                    <a class='link' href='../ayarlar/ayarlar.php'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ayarlar</a>
                </td>
                <td width='57'>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <a class='link' href='../cikis.php'>
                        <img src='../../ikonlar/exit.png' alt='Çıkış' width='35' height='35' />&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;Çıkış
                    </a>
                </td>
            </tr>
        </table>
        <table class='headeralttablo' border='0' bordercolor='#D2D2FF'>
            <tr>
                <td height='20'>&nbsp;</td>
            </tr>
        </table>
    </div>
    <div id='content'>
        <br/><br/>
        <h1><center>Hasta Arama</center></h1>
        <form method='post' action='hasta_listesi.php'>
            <label for='sec'>Arama Kriteri:</label>
            <select name='sec' id='sec'>
                <option value='tumu'>Tümü</option>
                <option value='id'>ID</option>
                <option value='tc'>T.C.</option>
                <option value='ad'>İsim</option>
                <option value='soyad'>Soyisim</option>
                <option value='k_tarih'>Kayıt Tarihi</option>
            </select>
            <input type='text' name='arama' id='arama' />
            <input type='submit' value='Ara' />
        </form>
        <br/>";

$query = "";
$params = [];

if ($sec == "tumu") {
    $query = "SELECT * FROM hastalar ORDER BY id DESC";
} else {
    $query = "SELECT * FROM hastalar WHERE $sec LIKE ? ORDER BY id DESC";
    $params[] = $arama;
}

$stmt = $conn->prepare($query);

if ($sec != "tumu") {
    $stmt->bind_param('s', ...$params);
}

$stmt->execute();
$result = $stmt->get_result();

echo "<table border='0' width='1000'>
    <tr style='background-color:#252525; color:#FFF;'>
       <td><h2><b><center>İd</center></b></h2></td>
       <td><h2><b><center>T.c.</center></b></h2></td>
       <td><h2><b><center>İsim</center></b></h2></td>
       <td><h2><b><center>Soyisim</center></b></h2></td>
       <td><h2><b><center>E-Mail</center></b></h2></td>
       <td><h2><b><center>Adres</center></b></h2></td>
       <td><h2><b><center>Telefon</center></b></h2></td>
       <td><h2><b><center>Kayıt T.</center></b></h2></td>
       <td><h2><b><center>Doğum Y.</center></b></h2></td>
       <td><h2><b><center>Doğum T.</center></b></h2></td>
       <td><h2><b><center>İl</center></b></h2></td>
    </tr>";

while ($row = $result->fetch_assoc()) {
    $id = $row["id"];
    include "tablo_renklendirme.php";
    echo "<tr bgcolor='" . $renk . "'>
        <td>{$row['id']}</td>
        <td>{$row['tc']}</td>
        <td>{$row['ad']}</td>
        <td>{$row['soyad']}</td>
        <td>{$row['email']}</td>
        <td>{$row['adres']}</td>
		<td>{$row['telefon']}</td>
        <td>{$row['k_tarih']}</td>
        <td>{$row['d_yeri']}</td>
        <td>{$row['d_tarih']}</td>
        <td>{$row['il']}</td>
        <td><a href='hasta_silme_form_islemler.php?deger={$row['id']}'>Sil</a></td>
        <td><a href='hasta_duzenle.php?duzenle={$row['id']}' style='color:red'>Düzenle</a></td>
    </tr>";
}

echo "</table>";

$stmt->close();
$conn->close();

echo "</div>
</div>
</body>
</html>";
?>
