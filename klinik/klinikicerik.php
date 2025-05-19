<?php
echo("<br/><br/>");
include "baglantiDB.php";

$sayi = 0;
$sorgu = mysqli_query($conn, "SELECT * FROM klinik");

if ($sorgu) {
    echo "<table border='1'>";
    while ($satir = mysqli_fetch_array($sorgu)) {
        $resim1 = $satir["resim1"];
        $resim2 = $satir["resim2"];
        $resim3 = $satir["resim3"];
        $resim4 = $satir["resim4"];

        echo "<tr>";
        echo "<td><a href='$resim1'><img src='$resim1' alt='resim".$sayi."' title='resim".$sayi."' width='250' height='140'></a></td>";
        echo "<td><a href='$resim2'><img src='$resim2' alt='resim".$sayi."' title='resim".$sayi."' width='250' height='140'></a></td>";
        echo "<td><a href='$resim3'><img src='$resim3' alt='resim".$sayi."' title='resim".$sayi."' width='250' height='140'></a></td>";
        echo "<td><a href='$resim4'><img src='$resim4' alt='resim".$sayi."' title='resim".$sayi."' width='250' height='140'></a></td>";
        echo "</tr>";
        
        $sayi++; 
    }
    echo "</table>";
} else {
    echo "Sorguda Sorun Oluştu: " . mysqli_error($conn);
}


mysqli_close($conn);
?>
