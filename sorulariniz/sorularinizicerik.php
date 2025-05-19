<?php
echo("<br/><br/>");
include "baglantiDB.php";


$sorgu = mysqli_query($conn, "SELECT * FROM sikcasorulansorular");

if ($sorgu) {
    echo "<table border='0'>";
    while ($satir = mysqli_fetch_array($sorgu)) {
        $baslik = $satir["baslik"]; 
        $icerik = $satir["icerik"]; 
        echo "<tr>";
        echo "<td>";
        echo "<h3>$baslik</h3>$icerik";
        echo "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "Sorguda Sorun Oluştu: " . mysqli_error($conn);
}


mysqli_close($conn);
?>
