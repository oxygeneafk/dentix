<div id="content">
<?php
include "baglantidb.php";

$limit = "LIMIT 3";
if(isset($_POST["tamami"]))
{
	$limit = "";
}

$soruDuyurular = mysqli_query($conn, "SELECT * FROM duyurular ORDER BY tarih DESC $limit");
if ($soruDuyurular)
{	
	echo "<center style='font-size:35px; font-weight:bold;'>Duyurular</center>";

	echo "<table border='0' width='950' align='center'>";
	while ($satir = mysqli_fetch_array($soruDuyurular))
	{
		echo "<tr>
		     <td style='font-size:25px; font-weight:bold; color:#000093;'>".$satir["tarih"]."</td>
			 <td style='font-size:25px; font-weight:bold; color:#C10000;'>".$satir["baslik"]."</td>
			 </tr>
			 <tr>
			 <td width='180'><img src='".$satir["resim"]."' alt='".$satir["baslik"]."' height='150' width='150' title='".$satir["baslik"]."'></td>
			 <td style='font-size:20px; font-weight:bold; vertical-align:top; text-indent:20px;'>".$satir['icerik']."</td>
			 </tr>
			 <tr><td>&nbsp;</td></tr>";
	}
	echo "</table>";

	if($limit == "LIMIT 3")
	{
		echo "<form action='index.php' method='post'>
		<input style='font-weight:bold; font-size:20px;' type='submit' name='tamami' id='tamami' value='Devamını Gör' />
		</form>";
	}
}
else
{
	echo "Sorguda hata oluştu: " . mysqli_error($conn);
}

echo "<br/><br/>";

$soruKategoriler = mysqli_query($conn, "SELECT * FROM kategoriler");
if ($soruKategoriler)
{
	echo "<table border='0' width='1000'><tr width='165'>";
	while ($satir = mysqli_fetch_array($soruKategoriler))
	{
		echo "<td><center><img src='".$satir["resim"]."'/></center></td>";
	}
	echo "</tr><tr width='166'>";

	mysqli_data_seek($soruKategoriler, 0);

	while ($satir = mysqli_fetch_array($soruKategoriler))
	{
		echo "<td><center><h4>".$satir["baslik"]."</h4></center></td>";
	}
	echo "</tr><tr width='166'>";

	mysqli_data_seek($soruKategoriler, 0);

	while ($satir = mysqli_fetch_array($soruKategoriler))
	{
		echo "<td><center>".$satir["icerik"]."</center></td>";
	}
	echo "</tr></table>";
}
else
{
	echo "Sorguda hata oluştu: " . mysqli_error($conn);
}

echo "<br/><br/>";
?>
</div>
