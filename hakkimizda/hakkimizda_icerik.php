<?php
include "baglantidb.php";

$sorgu = mysqli_query($conn, "SELECT * FROM hakkimizda");
if ($sorgu) {
    $satir = mysqli_fetch_array($sorgu);
    echo $satir["icerik"];
} else {
    echo "Sorguda hata oluştu: " . mysqli_error($conn);
}


mysqli_close($conn);


echo "
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
";
?>
