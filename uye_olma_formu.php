<form name="form1" method="post" action="uye_olma_formu_islemler.php">
  

<table width="1000" border="0">
  <tr>
    <td class="yazi">T.C.
  &nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td><input name="tc" type="text" class="txt" id="tc" maxlength="11">      &nbsp;</td>
  </tr>
  <tr>
    <td class="yazi">Adı </td>
    <td><input class="txt" type="text" name="ad" id="ad"></td>
  </tr>
  <tr>
    <td class="yazi">Soyadı
  &nbsp;</td>
    <td><input class="txt" type="text" name="soyad" id="soyad"></td>
  </tr>
  <tr>
    <td class="yazi">Telefon</td>
    <td><input name="tel" type="text" class="txt" id="tel" maxlength="11"></td>
  </tr>
  <tr>
    <td class="yazi">Adres </td>
    <td><input class="txt" type="text" name="adres" id="adres"></td>
  </tr>
  <tr>
    <td class="yazi">Dogum Y</td>
    <td><input class="txt" type="date" name="dogumyili" id="dogumyili" value="<?php echo date("Y-m-d"); ?>"></td>
  </tr>
  <tr>
    <td class="yazi">E-Posta</td>
    <td><input class="txt" type="text" name="eposta" id="eposta"></td>
  </tr>
  <tr>
    <td class="yazi">Şifre</td>
    <td><input class="txt" type="text" name="sifre" id="sifre"></td>
  </tr>
  <tr>
  <td colspan="2">
    <input  class="btn" type="submit" name="uyeol" id="uyeol" value="Üye Ol">
</td>
 </tr>
</table>
</form>