<form name="form1" method="post" action="hasta_ekle_form_islemler.php">
  <table width="1000" border="0">
   
    <tr>
      <td height="32" class="yazi">Tc. No.</td>
      <td><label for="tc"></label>
      <input name="tc" type="text" class="txt" id="tc" value="" maxlength="11"></td>
    </tr>
    <tr>
      <td class="yazi">Hasta Adı</td>
      <td><label for="ad"></label>
      <input  class="txt" type="text" name="ad" id="ad" value=""></td>
    </tr>
    <tr>
      <td class="yazi">Hasta Soyadı</td>
      <td><label for="soyad"></label>
      <input  class="txt" type="text" name="soyad" id="soyad" value=""> </td>
    </tr>
    <tr>
      <td class="yazi">E-Mail</td>
      <td><label for="email"></label>
      <input  class="txt" type="email" name="email" id="email" value=""></td>
    </tr>
    <tr>
      <td class="yazi">Adres</td>
      <td><label for="adres"></label>
      <input  class="txt" type="text" name="adres" id="adres" value=""></td>
    </tr>
    <tr>
      <td class="yazi">Telefon</td>
      <td><label for="telefon"></label>
      <input name="telefon" type="text"  class="txt" id="telefon" value="" maxlength="11"></td>
    </tr>
    <tr>
      <td class="yazi">Kayıt Tarihi</td>
      <td><label for="k_tarih"></label>
      <input name="k_tarih" type="date"  class="txt" id="k_tarih" value="<?php  echo date('Y-m-d'); ?>" ></td>
    </tr>
    <tr>
      <td class="yazi">Doğum Tarihi</td>
      <td><label for="d_tarih"></label>
      <input  class="txt"  type="date" name="d_tarih" id="d_tarih" value="<?php  echo Date('Y-m-d'); ?>"></td>
    </tr>
    <tr>
      <td class="yazi">Doğum Yeri</td>
      <td><label for="d_yeri"></label>
      <input  class="txt" type="text" name="d_yeri" id="d_yeri" value=""></td>
    </tr>
    <tr>
      <td class="yazi">İl</td>
      <td> <?php include"iller.php"; ?></td>
    </tr>
    <tr>
      <td colspan="2"><input  class="btn" type="submit" name="ekle" id="ekle" value="Hasta Ekle">
      <input  class="btn" type="reset" name="temizle" id="temizle" value="Temizle" /></td>
    </tr>
  </table>
  <p>&nbsp;</p>
</form>
