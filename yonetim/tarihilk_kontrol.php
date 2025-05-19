<?php
$tarih=$_POST["tarihilk"];
$bugun=date("Y-m-d");
 if ($tarih=="") 
 {

 	echo 
	"
	<script>
	
	alert('Boş tarih giremelemez...');
	javascript:history.back(-1);
	</script>
	";
	exit();
 	
 }
 elseif ($bugun>$tarih) {
 	echo 
	"
	<script>
	alert('Geçersiz Tarih girdiniz...');
	javascript:history.back(-1);
	</script>
	";
 	exit();
 }

?>