<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php

$ad=$_POST["ad"];
$tel=$_POST["tel"];
$soyad=$_POST["soyad"];
$email=$_POST["email"];
$konu=$_POST["konu"];

if ($ad&&$tel&&$soyad&&$email&&$konu)
{
	$ekstra="from : $ad$soyad <$email> \n";
	$ekstra .="Content-Type:text/html; charset:ISO-8859-9\n";
	$ekstra .="MIME-Version:1.0\n";



$alici = 'asus@localhost';  
mail($alici,"Merhaba",$ekstra);  
	echo ' Mesaj başarılı bir şekilde gönderildi.';  
} 
else {  
echo 'Lütfen Formu Doldurunuz...'; 
}



?>