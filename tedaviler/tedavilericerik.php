<?php
echo("<br/><br/>");
include "baglantiDB.php";

$sorgu = mysqli_query($conn, "SELECT * FROM tedaviler");

if ($sorgu) {
    echo "<table border='0' >";
    while ($satir = mysqli_fetch_array($sorgu)) {
        $url = substr($satir["url"], 0, 500);
        $baslik = substr($satir["baslik"], 0, 500);
        $icerik = substr($satir["icerik"], 0, 500);
        
        echo "<tr height='180'>";
        echo "<td><img src='$url' title='resim' alt='resim' width='420' height='180' ></td>";
        echo "<td><a href='$baslik' style='text-decoration:none; font-size:20px; color:#031067; font-weight:bold; '>$baslik</a><br/><br/>$icerik <br/></td>";
        echo "</tr>";
    }
    echo "</table>";
} else {    
    echo "Sorguda Sorun Oluştu: " . mysqli_error($conn);
}


mysqli_close($conn);
?>
