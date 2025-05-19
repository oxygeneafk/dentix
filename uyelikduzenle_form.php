
<form name="form1" method="post" action="uyelikduzenle_form_islemler_kaydet.php">
 


<table width="1000" text-border="0">
  <tr>
    <td class="yazi">T.C.
  &nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td><input class="txt" type="text" name="tc" id="tc" value="<?php  if(@$_SESSION['oturumuye']==true)  {  echo $_SESSION["tc"]; }  ?>">      &nbsp;</td>
  </tr>
  <tr>
    <td class="yazi">Adı </td>
    <td><input class="txt" type="text" name="ad" id="ad" value="<?php  if(@$_SESSION['oturumuye']==true)  {  echo $_SESSION["ad"]; }  ?>"></td>
  </tr>
  <tr>
    <td class="yazi">Soyadı
  &nbsp;</td>
    <td><input class="txt" type="text" name="soyad" id="soyad" value="<?php  if(@$_SESSION['oturumuye']==true)  {  echo $_SESSION["soyad"]; }  ?>"></td>
  </tr>
  <tr>
    <td class="yazi">Telefon</td>
    <td><input class="txt" type="text" name="tel" id="tel" value="<?php  if(@$_SESSION['oturumuye']==true)  {  echo $_SESSION["tel"]; }  ?>"></td>
  </tr>
  <tr>
    <td class="yazi">Adres </td>
    <td><input class="txt" type="text" name="adres" id="adres" value="<?php  if(@$_SESSION['oturumuye']==true)  {  echo $_SESSION["adres"]; }  ?>"></td>
  </tr>
  <tr>
    <td class="yazi">Dogum Y</td>
    <td><input class="txt" type="text" name="dogumyili" id="dogumyili" value="<?php  if(@$_SESSION['oturumuye']==true)  {  echo date("Y-m-d"); }  ?>"/></td>
  </tr>
  <tr>
    <td class="yazi">E-Posta</td>
    <td><input class="txt" type="text" name="eposta" id="eposta" value="<?php  if(@$_SESSION['oturumuye']==true)  {  echo $_SESSION["eposta"]; }  ?>"></td>
  </tr>
  <tr>
    <td class="yazi">Şifre</td>
    <td><input class="txt" type="text" name="sifre" id="sifre" value="<?php  if(@$_SESSION['oturumuye']==true)  {  echo $_SESSION["sifre"]; }  ?>"></td>
  </tr>
  <tr>
  <td colspan="2">
    <input  class="btn" type="submit" name="kaydet" id="kaydet" value="Kaydet">
</td>
 </tr>
</table>
</form>