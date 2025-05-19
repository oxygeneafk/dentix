<?php
$tarih=$_POST["tarihilk"];
$bugun=date("Y-m-d");
 if ($tarih=="") 
 {
 	echo "<script>  alert(' Tarih  Boş Olamaz !!!');
			window.location='randevu.php'; </script> ";
			exit();
 }
 elseif ($bugun>$tarih) {
 	echo "<script>  alert('Bu Tarih  Girilemez !!!');
			window.location='randevu.php'; </script> ";
			exit();
 }

?>