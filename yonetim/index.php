<?php
	@session_start();
	if(@$_SESSION['oturum']==true)	
	{
		header("Location:randevular.php");
	}
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Giriş</title>
<link href="sekil.css" rel="stylesheet" type="text/css" />
</head>

<body>


<table width="373" height="126" border="0" text-align="center">
  <tr>
    <td width="373"><img src="../ikonlar/logo.png" width="358" height="92" /></td>
  </tr>
</table>
<table width="350" border="10" bordercolor="#666666" text-align="center">
  
  <tr>
    <td height="300"><form id="form1" name="form1" method="post" action="index_islem.php">
      <p>
        <label for="kullanici"></label>
      </p>
      <table width="350" border="0">
        <tr>
          <td width="102" height="30"><strong>Kullanıcı :</strong></td>
          <td width="202"><label for="kullanici2"></label>
            <input name="kullanici" type="text" class="text" id="kullanici" value="" size="20" /></td>
        </tr>
        <tr>
          <td height="30"><strong>Şifre:</strong></td>
          <td><label for="parola"></label>
            <input name="parola" type="password" class="text" id="parola" size="20" /></td>
        </tr>
        <tr>
          <td height="40" colspan="2" >  
            <input name="giris"  type="submit" id="giris" value="   Giriş   "  class="girisbtn" /></td>
        </tr>
        <tr>
          <td height="30" colspan="2"><label for="uyari"></label></td>
        </tr>
        <tr>
    <td height="40" colspan="2">
        <div style="text-align: center; margin-top: 20px;">
            <a href="../index.php" class="btn" style="display: inline-block; padding: 10px 20px; background-color: #007bff; color: #fff; text-decoration: none; border-radius: 5px;">Ana Sayfaya Geri Dön </a>
        </div>
    </td>
</tr>
      </table>
      <p>&nbsp; </p>
    </form></td>
  </tr>
</table>


<p class="yazi" text-align="center">© 2024, Her Hakkı Saklıdır.</p>



</body>
</html>